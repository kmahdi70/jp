<?php
/**
 * جست‌وجوی سراسری صفحهٔ اصلی روی شش بخش سایت.
 *
 * ایندکس یک بار ساخته و در search/cache.jsonl ذخیره می‌شود؛ هر جست‌وجو آن را
 * خط‌به‌خط می‌خواند تا حافظهٔ کمتری مصرف شود. اگر یکی از فایل‌های منبع
 * تغییر کند، ایندکس خودکار بازسازی می‌شود.
 *
 * هر خط ایندکس: [صفحه، منو، زیرمنو، لنگر، متن، متنِ نرمال‌شده، تیترِ نرمال‌شده]
 *
 * برای جست‌وجوی انگلیسی، ایندکس تکرار نمی‌شود: کنارش یک نگاشت کوچک
 * (search/en-map.tsv) نگه داشته می‌شود که هر واژهٔ انگلیسی را به قطعه‌های
 * فارسی دارای همان ترجمه وصل می‌کند. عبارت انگلیسی با این نگاشت به چند
 * عبارت فارسی برگردانده و روی همان ایندکس جست‌وجو می‌شود.
 */

define('JP_SEARCH_VERSION', 6);

require_once __DIR__ . '/../lang.php';

/* ---------------------------------------------------------------- تنظیمات */

function jp_sr_pages(): array
{
    return [
        'hiragana' => ['file' => 'hiragana.php', 'name' => 'هیراگانا', 'icon' => 'fa-language'],
        'katakana' => ['file' => 'katakana.php', 'name' => 'کاتاکانا', 'icon' => 'fa-font'],
        'kanji'    => ['file' => 'kanji.php',    'name' => 'کانجی',    'icon' => 'fa-pen-fancy'],
        'grammar'  => ['file' => 'grammar.php',  'name' => 'گرامر',    'icon' => 'fa-spell-check'],
        'words'    => ['file' => 'words.php',    'name' => 'واژه‌ها',  'icon' => 'fa-book-open'],
        'podcasts' => ['file' => 'podcasts.php', 'name' => 'مکالمات',  'icon' => 'fa-comments'],
    ];
}

function jp_sr_root(): string
{
    return dirname(__DIR__);
}

function jp_sr_cache_file(): string
{
    return __DIR__ . '/cache.jsonl';
}

/** نگاشت واژهٔ انگلیسی ← قطعهٔ فارسی (فایل کوچک کنار ایندکس) */
function jp_sr_en_map_file(): string
{
    return __DIR__ . '/en-map.tsv';
}

/** واژه‌های انگلیسی یک متن: کوچک، بی‌نقطه‌گذاری، بی‌واژه‌های دستوری */
function jp_sr_en_tokens(string $text): array
{
    static $stop = null;
    if ($stop === null) {
        $stop = array_flip([
            'the', 'a', 'an', 'of', 'to', 'in', 'on', 'and', 'or', 'is', 'are', 'be', 'it',
            'that', 'this', 'for', 'with', 'as', 'at', 'by', 'from', 'not', 'no', 'you',
            'your', 'we', 'our', 'they', 'their',
        ]);
    }
    $out = [];
    foreach (preg_split('/[^a-z0-9\']+/', strtolower($text), -1, PREG_SPLIT_NO_EMPTY) as $w) {
        if (strlen($w) >= 2 && !isset($stop[$w])) {
            $out[$w] = 1;
        }
    }
    return array_keys($out);
}

/* ------------------------------------------------------------- نرمال‌سازی */

/** یکسان‌سازی حروف فارسی/عربی، حذف فاصله و نویسه‌های جهت‌دهی برای مقایسه */
function jp_sr_norm(string $s): string
{
    $s = str_replace(["\u{200C}", "\u{200D}", "\u{200E}", "\u{200F}", "\u{FEFF}"], '', $s);
    $s = str_replace(['ي', 'ك', 'ى', 'ة', 'ە'], ['ی', 'ک', 'ی', 'ه', 'ه'], $s);
    $s = preg_replace('~[\x{064B}-\x{0655}\x{0670}\x{06D6}-\x{06ED}]~u', '', $s) ?? $s;
    $s = str_replace(['「', '」', '『', '』', '·', '・', '／', '/', '\\', '|', '—', '–', '-', 'ـ'], ' ', $s);
    $s = preg_replace('~\s+~u', '', $s) ?? $s;
    return strtolower($s);
}

/** پاک‌سازی متن یک سطر: حذف تگ‌ها، جمع‌کردن فاصله‌ها، بریدن متن‌های بلند */
function jp_sr_clean(string $s): string
{
    $s = preg_replace('~</(span|td|th|li|p|div|h1|h2|h3|h4|tr)>~i', ' — ', $s) ?? $s;
    $s = strip_tags($s);
    $s = html_entity_decode($s, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $s = preg_replace('~\s+~u', ' ', $s) ?? $s;
    $s = trim($s, " \t\n\r\0\x0B—–-|");

    if (strlen($s) > 900) {
        if (preg_match('~^.{0,240}~su', $s, $m)) {
            $s = rtrim($m[0]) . '…';
        }
    }
    return $s;
}

/* ------------------------------------------------------- استخراج از HTML */

/** خواندن درخت منو (منو ← زیرمنو) از نوار کنار صفحه */
function jp_sr_nav_map(string $html): array
{
    $nav = '';
    if (preg_match('~<nav[^>]*id="docs-nav".*?</nav>~s', $html, $m)) {
        $nav = $m[0];
    }
    $map = [];
    if ($nav === '') {
        return $map;
    }

    preg_match_all('~<li class="nav-item([^"]*)">\s*<a[^>]*href="#([^"]+)"[^>]*>(.*?)</a>~s', $nav, $items, PREG_SET_ORDER);
    $menu = '';
    foreach ($items as $it) {
        $classes = $it[1];
        $anchor = $it[2];
        $label = jp_sr_clean($it[3]);
        if (stripos($classes, 'section-title') !== false) {
            $menu = $label;
            continue;
        }
        if (strpos($anchor, 'item-') === 0 && $label !== '') {
            $map[$anchor] = ['menu' => $menu, 'sub' => $label];
        }
    }
    return $map;
}

/** استخراج سطرهای یک صفحهٔ HTMLی (هیراگانا، کاتاکانا، گرامر) */
function jp_sr_html_records(string $file, string $code): array
{
    ob_start();
    include $file;
    $html = (string) ob_get_clean();

    $nav = jp_sr_nav_map($html);
    $records = [];

    preg_match_all('~<section[^>]*\bid="(item-\d+-\d+)"[^>]*>(.*?)</section>~s', $html, $sections, PREG_SET_ORDER);
    foreach ($sections as $sec) {
        $anchor = $sec[1];
        $body = $sec[2];

        $heading = '';
        if (preg_match('~<h2[^>]*>(.*?)</h2>~s', $body, $hm)) {
            $heading = jp_sr_clean($hm[1]);
        }
        $menu = $nav[$anchor]['menu'] ?? 'معرفی';
        $sub = $nav[$anchor]['sub'] ?? $heading;

        $rows = [];
        foreach (['tr', 'li', 'p'] as $tag) {
            if (preg_match_all('~<' . $tag . '[^>]*>(.*?)</' . $tag . '>~s', $body, $rm, PREG_SET_ORDER)) {
                foreach ($rm as $r) {
                    $rows[] = $r[1];
                }
            }
        }

        foreach ($rows as $raw) {
            $text = jp_sr_clean($raw);
            if ($text === '' || $text === $heading || !preg_match('~[\p{L}\p{N}]~u', $text)) {
                continue;
            }
            $records[] = [$menu, $sub, $anchor, $text];
        }

        /* خود عنوان بخش هم یک نتیجه است */
        if ($heading !== '') {
            $records[] = [$menu, $sub, $anchor, $heading];
        }
    }

    unset($html, $nav, $sections);
    return $records;
}

/* --------------------------------------------------- کمک‌کننده‌های ساخت */

function jp_sr_join(array $parts): string
{
    $out = [];
    foreach ($parts as $p) {
        $p = trim((string) $p, " \t\n\r\0\x0B-—");
        if ($p !== '' && $p !== '-') {
            $out[] = $p;
        }
    }
    return implode(' — ', $out);
}

/** فهرست کامل منابع برای تشخیص کهنه‌شدن ایندکس */
function jp_sr_sources_mtime(): int
{
    $root = jp_sr_root();
    $files = [
        $root . '/hiragana.php', $root . '/katakana.php', $root . '/kanji.php',
        $root . '/grammar.php', $root . '/words.php', $root . '/podcasts.php',
        $root . '/hiragana/data.php', $root . '/katakana/data.php',
        $root . '/kanji/data.php', $root . '/words/data.php',
        /* دیکشنری هم منبع است: با تغییر ترجمه‌ها نگاشت انگلیسی هم تازه می‌شود */
        $root . '/lang/en.tsv',
    ];
    foreach (glob($root . '/podcasts/*.php') ?: [] as $f) {
        $files[] = $f;
    }
    $max = 0;
    foreach ($files as $f) {
        if (is_file($f)) {
            $max = max($max, (int) filemtime($f));
        }
    }
    return $max;
}

/* ------------------------------------------------------------ ساخت ایندکس */

function jp_sr_build(): array
{
    $root = jp_sr_root();
    $pages = jp_sr_pages();
    $rows = [];
    $seen = [];
    $counts = array_fill_keys(array_keys($pages), 0);

    $add = function (string $page, string $menu, string $sub, string $anchor, string $text) use (&$rows, &$seen, &$counts): void {
        $menu = html_entity_decode($menu, ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $sub = html_entity_decode($sub, ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $text = jp_sr_clean($text);
        if ($text === '' || !preg_match('~[\p{L}\p{N}]~u', $text)) {
            return;
        }
        $key = $page . '|' . $anchor . '|' . jp_sr_norm($text);
        if (isset($seen[$key])) {
            return;
        }
        $seen[$key] = 1;
        $counts[$page]++;
        $rows[] = [$page, $menu, $sub, $anchor, $text, jp_sr_norm($text), jp_sr_norm($menu . ' ' . $sub)];
    };

    /* هیراگانا، کاتاکانا و گرامر: از خروجی HTML خود صفحه‌ها */
    foreach (['hiragana', 'katakana', 'grammar'] as $code) {
        $recs = jp_sr_html_records($root . '/' . $pages[$code]['file'], $code);
        foreach ($recs as $r) {
            $add($code, $r[0], $r[1], $r[2], $r[3]);
        }
        unset($recs);
    }

    /* واژه‌ها */
    include $root . '/words/data.php';
    if (isset($word_sections) && is_array($word_sections)) {
        foreach ($word_sections as $sec) {
            foreach ($sec['words'] as $w) {
                $add('words', $sec['menu'], $sec['title'], $sec['id'], jp_sr_join([$w[0] ?? '', $w[1] ?? '', $w[2] ?? '', $w[3] ?? '']));
            }
        }
    }
    unset($word_sections);

    /* مکالمات: همان ترتیبی که podcasts.php می‌سازد */
    $podFiles = glob($root . '/podcasts/*.php') ?: [];
    sort($podFiles, SORT_STRING);
    foreach ($podFiles as $i => $f) {
        $sec = include $f;
        if (!is_array($sec) || empty($sec['items'])) {
            continue;
        }
        $anchor = 'item-2-' . ($i + 1);
        foreach ($sec['items'] as $it) {
            $add('podcasts', (string) ($sec['menu'] ?? ''), (string) ($sec['title'] ?? ''), $anchor, jp_sr_join([$it[0] ?? '', $it[1] ?? '', $it[2] ?? '']));
        }
    }

    /* کانجی: همان اصلاحاتی که kanji.php روی داده اعمال می‌کند */
    include $root . '/kanji/data.php';
    if (isset($kanji_categories) && is_array($kanji_categories)) {
        foreach ($kanji_categories as $categoryIndex => $category) {
            if (($category['title_en'] ?? '') === 'Grade 1 School Kanji') {
                array_splice($kanji_categories, $categoryIndex, 1);
                break;
            }
        }
        if (isset($school_grade_categories) && is_array($school_grade_categories)) {
            $kanji_categories = array_merge($kanji_categories, $school_grade_categories);
        }
        foreach ($kanji_categories as &$cat) {
            if (($cat['title_en'] ?? '') === 'Basic Verbs' && isset($verb_kanji_extra) && is_array($verb_kanji_extra)) {
                foreach ($verb_kanji_extra as $it) {
                    $cat['items'][] = $it;
                }
                $cat['items'] = array_values(array_filter($cat['items'], static function ($item) {
                    $meanParts = preg_split('/[\x{060C}\x{061B},;]/u', $item['mean'] ?? '', 2);
                    $firstMeaning = trim($meanParts[0] ?? '');
                    return preg_match('/(?:\x{062F}\x{0646}|\x{062A}\x{0646}|\x{06A9}\x{0631}\x{062F}\x{0646}|\x{0634}\x{062F}\x{0646})$/u', $firstMeaning) === 1;
                }));
            }
        }
        unset($cat);

        foreach ($kanji_categories as $idx => $cat) {
            $anchor = 'item-' . ($idx + 2) . '-1';
            $menu = (string) ($cat['title'] ?? 'کانجی');
            foreach ($cat['items'] as $item) {
                $add('kanji', $menu, 'جدول کانجی‌ها', $anchor, jp_sr_join([
                    $item['k'] ?? '', $item['kun'] ?? '', $item['on'] ?? '',
                    $item['mean'] ?? '', $item['mean_en'] ?? '',
                ]));
                foreach (($item['ex'] ?? []) as $ex) {
                    if (($ex[0] ?? '-') === '-') {
                        continue;
                    }
                    $add('kanji', $menu, 'جدول کانجی‌ها', $anchor, jp_sr_join([$ex[0] ?? '', $ex[1] ?? '', $ex[2] ?? '']));
                }
            }
        }
    }

    /* ضمیمهٔ کانجی: فهرست کامل جویو */
    if (isset($joyo_kanji) && is_array($joyo_kanji)) {
        $anchor = 'item-' . (count($kanji_categories) + 2) . '-1';
        foreach ($joyo_kanji as $row) {
            $add('kanji', 'ضمیمه (Appendix)', 'فهرست کامل جویو', $anchor, jp_sr_join([
                $row[0] ?? '', $row[1] ?? '', $row[2] ?? '', $row[3] ?? '', $row[4] ?? '',
            ]));
        }
    }
    unset($kanji_categories, $joyo_kanji, $school_grade_categories, $verb_kanji_extra);

    $meta = [
        'v' => JP_SEARCH_VERSION,
        'src' => jp_sr_sources_mtime(),
        'built' => time(),
        'counts' => $counts,
    ];

    jp_sr_write_cache($meta, $rows);
    jp_sr_en_map_build($rows);
    return $meta;
}

/**
 * ساخت نگاشت واژهٔ انگلیسی ← قطعهٔ فارسی از همان سطرهای ایندکس.
 *
 * فقط یک فایل خطی کوچک است؛ ایندکس تکراری ساخته نمی‌شود و برای هر واژه
 * همهٔ قطعه‌هایی که ترجمه‌شان آن واژه را دارد نگه داشته می‌شود.
 */
function jp_sr_en_map_build(array $rows): void
{
    $map = [];
    foreach ($rows as $row) {
        $pieces = array_merge([$row[1], $row[2]], preg_split('/—/u', $row[4]) ?: []);
        foreach ($pieces as $piece) {
            $piece = trim($piece);
            if ($piece === '' || !preg_match(JP_FA_RE, $piece)) {
                continue;
            }
            $en = jp_dict_text($piece);
            if ($en === null) {
                continue;
            }
            foreach (jp_sr_en_tokens($en) as $word) {
                $map[$word][$piece] = 1;
            }
        }
    }
    ksort($map);

    $file = jp_sr_en_map_file();
    $tmp = $file . '.tmp';
    $fh = @fopen($tmp, 'wb');
    if (!$fh) {
        return;
    }
    foreach ($map as $word => $set) {
        fwrite($fh, $word . "\t" . implode('|', array_keys($set)) . "\n");
    }
    fclose($fh);
    if (is_file($file)) {
        @unlink($file);
    }
    @rename($tmp, $file);
}

/**
 * عبارت انگلیسی ← قطعه‌های فارسی.
 *
 * هر واژهٔ عبارت در نگاشت جست‌وجو می‌شود و قطعه‌هایی می‌مانند که ترجمه‌شان همهٔ
 * واژه‌ها را دارد؛ پس «family member» فقط قطعه‌های دقیق‌تر را می‌گیرد.
 */
function jp_sr_en_terms(string $q): array
{
    $tokens = jp_sr_en_tokens($q);
    if (!$tokens) {
        return [];
    }
    $need = array_flip($tokens);
    $sets = [];
    $fh = @fopen(jp_sr_en_map_file(), 'rb');
    if (!$fh) {
        return [];
    }
    while (($line = fgets($fh)) !== false) {
        $tab = strpos($line, "\t");
        if ($tab === false) {
            continue;
        }
        $word = substr($line, 0, $tab);
        if (!isset($need[$word])) {
            continue;
        }
        $sets[$word] = array_flip(explode('|', rtrim(substr($line, $tab + 1))));
        if (count($sets) === count($need)) {
            break;
        }
    }
    fclose($fh);
    if (count($sets) !== count($need)) {
        return [];
    }

    /* قطعه‌ای که همهٔ واژه‌ها را دارد دقیق‌ترین جواب است؛ اگر نبود (مثل
       «family member» که در داده یک قطعه نیست) از نادرترین واژه استفاده می‌شود */
    $common = null;
    foreach ($sets as $set) {
        $common = $common === null ? $set : array_intersect_key($common, $set);
    }
    if ($common) {
        return array_keys($common);
    }

    $rarest = null;
    foreach ($sets as $set) {
        if ($rarest === null || count($set) < count($rarest)) {
            $rarest = $set;
        }
    }
    return array_keys($rarest ?? []);
}

function jp_sr_write_cache(array $meta, array $rows): void
{
    $file = jp_sr_cache_file();
    $tmp = $file . '.tmp';
    $fh = fopen($tmp, 'wb');
    if (!$fh) {
        return;
    }
    fwrite($fh, json_encode($meta, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . "\n");
    foreach ($rows as $row) {
        $line = json_encode($row, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        if ($line !== false) {
            fwrite($fh, $line . "\n");
        }
    }
    fclose($fh);
    if (is_file($file)) {
        @unlink($file);
    }
    @rename($tmp, $file);
}

/** اگر ایندکس هست و تازه است برمی‌گرداند، وگرنه می‌سازد */
function jp_sr_ready(): array
{
    $file = jp_sr_cache_file();
    $src = jp_sr_sources_mtime();

    if (is_file($file) && is_file(jp_sr_en_map_file())) {
        $fh = @fopen($file, 'rb');
        if ($fh) {
            $first = (string) fgets($fh);
            fclose($fh);
            $meta = json_decode($first, true);
            if (is_array($meta) && ($meta['v'] ?? 0) === JP_SEARCH_VERSION && ($meta['src'] ?? 0) >= $src) {
                return $meta;
            }
        }
    }
    return jp_sr_build();
}

/* --------------------------------------------------------------- جست‌وجو */

/**
 * جست‌وجو در ایندکس.
 * خروجی: ['q','total','pages'=>[code=>['name','file','icon','count','items'=>[...]]],'took']
 */
function jp_sr_search(string $q, int $perPage = 20, int $maxTotal = 150): array
{
    $pages = jp_sr_pages();
    $started = microtime(true);
    $q = trim($q);
    $qn = jp_sr_norm($q);

    $out = ['q' => $q, 'total' => 0, 'pages' => [], 'took' => 0];
    if ($qn === '') {
        return $out;
    }

    jp_sr_ready();

    /*
     * عبارت انگلیسی (بدون حرف فارسی) با نگاشت به قطعه‌های فارسی برگردانده
     * می‌شود؛ جست‌وجوی فارسی و کانا و روماجی مثل قبل کار می‌کند.
     */
    $enTerms = [];
    if (!preg_match(JP_FA_RE, $q)) {
        foreach (array_slice(jp_sr_en_terms($q), 0, 400) as $term) {
            $norm = jp_sr_norm($term);
            if ($norm !== '') {
                $enTerms[$norm] = 1;
            }
        }
        $enTerms = array_keys($enTerms);
    }

    $hits = [];
    $seenAnchor = [];
    $pageTotals = [];
    $total = 0;

    $fh = @fopen(jp_sr_cache_file(), 'rb');
    if ($fh) {
        fgets($fh); // خط متادیتا
        while (($line = fgets($fh)) !== false) {
            $row = json_decode($line, true);
            if (!is_array($row) || count($row) < 7) {
                continue;
            }
            [$p, $m, $s, $a, $t, $n, $h] = $row;
            $inText = strpos($n, $qn) !== false;
            if (!$inText && $enTerms) {
                foreach ($enTerms as $term) {
                    if (strpos($n, $term) !== false) {
                        $inText = true;
                        break;
                    }
                }
            }
            $inHead = !$inText && strpos($h, $qn) !== false;

            if ($inText) {
                $key = $p . '|' . $a . '|' . $n;
                if (isset($seenAnchor[$key])) {
                    continue;
                }
                $seenAnchor[$key] = 1;
                $total++;
                $pageTotals[$p] = ($pageTotals[$p] ?? 0) + 1;
                if (count($hits) < $maxTotal) {
                    $hits[] = ['p' => $p, 'm' => $m, 's' => $s, 'a' => $a, 't' => $t];
                }
            } elseif ($inHead) {
                $key = $p . '|' . $a;
                if (isset($seenAnchor[$key])) {
                    continue;
                }
                $seenAnchor[$key] = 1;
                $total++;
                $pageTotals[$p] = ($pageTotals[$p] ?? 0) + 1;
                if (count($hits) < $maxTotal) {
                    $hits[] = ['p' => $p, 'm' => $m, 's' => $s, 'a' => $a, 't' => $s !== '' ? $s : $m];
                }
            }
        }
        fclose($fh);
    }

    /* گروه‌بندی بر اساس ترتیب صفحه‌ها */
    foreach ($pages as $code => $info) {
        $items = [];
        foreach ($hits as $hit) {
            if ($hit['p'] === $code) {
                $items[] = $hit;
                if (count($items) >= $perPage) {
                    break;
                }
            }
        }
        if ($items) {
            $out['pages'][$code] = $info + [
                'count' => $pageTotals[$code] ?? count($items),
                'shown' => count($items),
                'items' => $items,
            ];
        }
    }

    $out['total'] = $total;
    $out['took'] = (int) round((microtime(true) - $started) * 1000);
    return $out;
}

/**
 * متن یک سطر ایندکس برای نمایش.
 *
 * ایندکس عمداً یک نسخه و فارسی می‌ماند: ساختن ایندکس انگلیسی یعنی ترجمهٔ همهٔ
 * داده‌های درس‌ها در زمان ساخت و یک کش دوم (دو برابر حجم و دو برابر زمان
 * بازسازی) و در عوض جست‌وجوی فارسی در حالت انگلیسی از کار می‌افتد. هزینهٔ
 * نمایشی بسیار کمتر است: در حالت انگلیسی هر قطعهٔ سطر که با « — » جدا شده
 * جداگانه از همان دیکشنری ترجمه می‌شود، پس بریده‌ها و منو/زیرمنوی نتیجه هم
 * انگلیسی دیده می‌شوند. قطعه‌ای که در دیکشنری نباشد دست‌نخورده می‌ماند،
 * مثل بقیهٔ متن‌های صفحه‌ها.
 */
function jp_sr_show(string $text): string
{
    if ($text === '' || !function_exists('jp_is_en') || !jp_is_en()) {
        return $text;
    }
    if (strpos($text, '—') === false) {
        return jp_sr_show_piece($text);
    }
    /* فاصله‌های دو سر هر قطعه حفظ می‌شود تا قالب سطر دست‌نخورده بماند */
    return preg_replace_callback('/[^—]+/u', static function (array $m): string {
        if (preg_match('/^(\s*)(.*?)(\s*)$/su', $m[0], $p) && $p[2] !== '') {
            return $p[1] . jp_sr_show_piece($p[2]) . $p[3];
        }
        return $m[0];
    }, $text) ?? $text;
}

/**
 * ترجمهٔ یک قطعهٔ سطر.
 *
 * بعضی سطرها برچسب و متن را در یک تکه دارند («تلفظ: …»، «نشانه گذاری: …») در
 * حالی که دیکشنری برچسب و متن را جدا دارد؛ در این حالت دو نیمه جدا ترجمه و
 * دوباره کنار هم گذاشته می‌شوند. اگر هر دو نیمه ترجمه نداشته باشند، قطعه
 * دست‌نخورده می‌ماند.
 */
function jp_sr_show_piece(string $piece): string
{
    $en = jp_lookup($piece);
    if ($en !== null) {
        return $en;
    }
    if (preg_match('/^(.{1,30}?[:：])\s*(.+)$/su', $piece, $m)) {
        $label = jp_lookup(trim($m[1]));
        $rest  = jp_lookup(trim($m[2]));
        if ($label !== null && $rest !== null) {
            return $label . ' ' . $rest;
        }
    }
    return $piece;
}

/** هایلایت عبارت جست‌وجوشده در متن سطر */
function jp_sr_highlight(string $text, string $q): string
{
    $safe = htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
    $q = trim($q);
    if ($q === '') {
        return $safe;
    }
    $needle = htmlspecialchars($q, ENT_QUOTES, 'UTF-8');
    $out = @preg_replace('~(' . preg_quote($needle, '~') . ')~iu', '<mark class="sr-mark">$1</mark>', $safe, 1);
    return $out ?? $safe;
}

/* ساخت دستی ایندکس از خط فرمان: php search/lib.php */
if (PHP_SAPI === 'cli' && isset($argv[0]) && realpath($argv[0]) === realpath(__FILE__)) {
    $meta = jp_sr_build();
    echo 'built ' . $meta['built'] . ' rows: ' . array_sum($meta['counts']) . PHP_EOL;
    foreach ($meta['counts'] as $k => $v) {
        echo '  ' . $k . ': ' . $v . PHP_EOL;
    }
}
