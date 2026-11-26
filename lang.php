<?php
/**
 * jp/lang.php — زبان بخش ژاپنی (فارسی / انگلیسی).
 *
 * فارسی زبان پیش‌فرض این بخش است و ساختار و جهت صفحه دست نمی‌خورد؛ در حالت
 * انگلیسی فقط متن‌های فارسی با معادل انگلیسی‌شان از jp/lang/en.tsv جایگزین
 * می‌شوند. کلید هر سطر آن فایل md5 متن فارسی و مقدارش ترجمهٔ انگلیسی است؛ هر
 * متنی که در فایل نباشد دست‌نخورده می‌ماند تا هیچ‌جا خالی نشود.
 */

if (!defined('JP_LANGS')) {
    define('JP_LANGS', array('fa' => 'فارسی', 'en' => 'English'));
}
if (!defined('JP_DEFAULT_LANG')) {
    define('JP_DEFAULT_LANG', 'fa');
}
/* حروف فارسی؛ برای رد کردن سریع متن‌های غیرفارسی */
if (!defined('JP_FA_RE')) {
    define('JP_FA_RE', '/[\x{0600}-\x{06FF}]/u');
}

/*
 * نشست عمداً استفاده نمی‌شود: PHP با session_start هدر «no-store» می‌فرستد و
 * هیچ صفحه‌ای کش نمی‌شود. زبان از آدرس (?lang) یا کوکی jp_lang خوانده می‌شود.
 */

/** زبان درخواستی از آدرس؛ مقدارهای ناشناخته (مثل ja سایت اصلی) نادیده گرفته می‌شوند */
function jp_lang_param(): ?string
{
    $raw = $_GET['lang'] ?? null;
    return (is_string($raw) && isset(JP_LANGS[$raw])) ? $raw : null;
}

/*
 * اگر زبان از کوکی آمده و آدرس پارامتر lang ندارد، به همان آدرس با پارامتر
 * صریح هدایت می‌کنیم: بدنهٔ هر صفحه فقط به آدرس وابسته می‌ماند (نه به کوکی) و
 * کش مشترک می‌تواند نسخهٔ درست زبان را ذخیره کند.
 */
if (jp_lang_param() === null) {
    $cookie = $_COOKIE['jp_lang'] ?? '';
    if (is_string($cookie) && isset(JP_LANGS[$cookie]) && $cookie !== JP_DEFAULT_LANG) {
        $query = $_GET;
        $query['lang'] = $cookie;
        $path = strtok((string) ($_SERVER['REQUEST_URI'] ?? '/'), '?');
        header('Cache-Control: no-store, max-age=0', true);
        header('Location: ' . $path . '?' . http_build_query($query), true, 302);
        exit;
    }
}

/* بدنهٔ صفحه به هیچ داده شخصی وابسته نیست؛ پس HTML قابل کش عمومی است */
if (!headers_sent()) {
    header('Cache-Control: public, max-age=600', true);
    header('Vary: Accept-Encoding', false);
}

/** زبان فعلی این بخش */
function jp_lang(): string
{
    static $lang = null;
    if ($lang === null) {
        $lang = jp_lang_param();
        if ($lang === null) {
            $cookie = $_COOKIE['jp_lang'] ?? JP_DEFAULT_LANG;
            $lang = (is_string($cookie) && isset(JP_LANGS[$cookie])) ? $cookie : JP_DEFAULT_LANG;
        }
    }
    return $lang;
}

/** آیا الان حالت انگلیسی است؟ */
function jp_is_en(): bool
{
    return jp_lang() === 'en';
}

/** دیکشنری ترجمه؛ یک‌بار در هر درخواست خوانده می‌شود */
function jp_dict(): array
{
    static $dict = null;
    if ($dict === null) {
        $dict = array();
        $file = __DIR__ . '/lang/en.tsv';
        if (is_file($file)) {
            foreach (file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
                $pair = explode("\t", $line, 2);
                if (count($pair) === 2) {
                    $dict[$pair[0]] = $pair[1];
                }
            }
        }
    }
    return $dict;
}

/**
 * ترجمهٔ یک متن فارسی؛ null اگر ترجمه‌ای نباشد.
 * نخست خود متن و بعد نسخهٔ فاصله‌های یکسان‌شده جست‌وجو می‌شود.
 */
function jp_lookup(string $fa): ?string
{
    if (!jp_is_en() || $fa === '') {
        return null;
    }
    $flat = trim(preg_replace('/\s+/u', ' ', $fa));
    if ($flat === '') {
        return null;
    }
    $dict = jp_dict();
    return $dict[md5($fa)] ?? $dict[md5($flat)] ?? null;
}

/** ترجمهٔ یک متن؛ اگر ترجمه نبود همان متن */
function jp_t(string $fa): string
{
    return jp_lookup($fa) ?? $fa;
}

/**
 * انتخاب متن فارسی یا انگلیسی برای جمله‌هایی که با متغیر ساخته می‌شوند
 * (عدد، عبارت جست‌وجو، زمان). این‌ها در en.tsv نمی‌گنجند، چون کلید هر سطر آن
 * md5 کل متن است و با عوض شدن عدد یا عبارت، کلید هم عوض می‌شود.
 */
function jp_bi(string $fa, string $en): string
{
    return jp_is_en() ? $en : $fa;
}

/** ترجمهٔ یک گرهٔ متنی با حفظ فاصله‌های دو سر */
function jp_text(string $text): string
{
    if ($text === '' || !preg_match(JP_FA_RE, $text)) {
        return $text;
    }
    $en = jp_lookup(html_entity_decode($text, ENT_QUOTES, 'UTF-8'));
    if ($en !== null) {
        preg_match('/^\s*/u', $text, $lead);
        preg_match('/\s*$/u', $text, $trail);
        return ($lead[0] ?? '') . htmlspecialchars($en, ENT_QUOTES, 'UTF-8') . ($trail[0] ?? '');
    }
    /* متن چندخطی: هر خط جدا ترجمه می‌شود */
    if (strpos($text, "\n") === false) {
        return $text;
    }
    return preg_replace_callback('/[^\n]+/u', static function (array $m): string {
        return jp_text($m[0]);
    }, $text) ?? $text;
}

/** ترجمهٔ مقدار تگ‌های متنی مثل alt / title / placeholder */
function jp_tag(string $tag): string
{
    if (!preg_match(JP_FA_RE, $tag)) {
        return $tag;
    }
    return preg_replace_callback(
        '/(\b(?:alt|title|placeholder|aria-label|content|value)=")([^"]*)(")/u',
        static function (array $m): string {
            $en = jp_lookup(html_entity_decode($m[2], ENT_QUOTES, 'UTF-8'));
            if ($en === null) {
                return $m[0];
            }
            return $m[1] . htmlspecialchars($en, ENT_QUOTES, 'UTF-8') . $m[3];
        },
        $tag
    ) ?? $tag;
}

/** فیلتر خروجی: در حالت انگلیسی متن‌های فارسی صفحه جایگزین می‌شوند */
function jp_translate_html(string $html): string
{
    if ($html === '' || !preg_match(JP_FA_RE, $html)) {
        return $html;
    }
    /* بلوک‌های script/style دست نمی‌خورند */
    preg_match_all(
        '/(<script\b[^>]*>.*?<\/script>|<style\b[^>]*>.*?<\/style>)/is',
        $html,
        $blocks,
        PREG_OFFSET_CAPTURE
    );
    $offset = 0;
    $out = '';
    foreach ($blocks[0] as $block) {
        $out .= jp_translate_fragment(substr($html, $offset, $block[1] - $offset)) . $block[0];
        $offset = $block[1] + strlen($block[0]);
    }
    $out .= jp_translate_fragment(substr($html, $offset));
    /* صفت lang تگ html هم en می‌شود؛ جهت صفحه دست نمی‌خورد */
    return preg_replace_callback('#<html\b[^>]*>#i', static function (array $m): string {
        return preg_replace('/\blang="fa"/i', 'lang="en"', $m[0]);
    }, $out, 1) ?? $out;
}

/** ترجمهٔ یک تکهٔ HTML: تگ‌ها فقط از نظر attribute و بقیه به‌عنوان متن */
function jp_translate_fragment(string $fragment): string
{
    if ($fragment === '' || !preg_match(JP_FA_RE, $fragment)) {
        return $fragment;
    }
    return preg_replace_callback(
        '/(<[^>]*>)|([^<]+)/u',
        static function (array $m): string {
            return ($m[2] ?? '') !== '' ? jp_text($m[2]) : jp_tag($m[1]);
        },
        $fragment
    ) ?? $fragment;
}

/**
 * نوار بالای صفحه‌های مستندات: دکمهٔ بازگشت و بعد از آن کمبوباکس زبان.
 * سلکت چون آخرین عنصر است، در لبهٔ راست می‌نشیند.
 */
function jp_header_actions(string $backHref = './'): string
{
    return '<div class="top-search-box d-none d-lg-flex">'
        . '<a class="btn btn-success V" href="' . htmlspecialchars($backHref, ENT_QUOTES, 'UTF-8') . '">بازگشت</a>'
        . '</div>' . jp_lang_switch();
}

/**
 * کمبوباکس انتخاب زبان (سمت راست هدر، پس از دکمهٔ بازگشت).
 * متن دیده‌شدهٔ خود کادر به زبان جاری صفحه است: «Select language» یا «انتخاب زبان».
 */
function jp_lang_switch(): string
{
    $label = htmlspecialchars(jp_t('انتخاب زبان'), ENT_QUOTES, 'UTF-8');
    $html = '<form method="get" action="" class="jp-lang-form">'
        . '<label class="sr-only" for="jp-lang">' . $label . '</label>'
        . '<select name="lang" id="jp-lang" class="form-select form-select-sm jp-lang-select"'
        . ' aria-label="' . $label . '" title="' . $label . '" onchange="this.form.submit();">'
        . '<option value="" selected>' . $label . '</option>';
    foreach (JP_LANGS as $code => $name) {
        $html .= '<option value="' . $code . '">'
            . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '</option>';
    }
    /* کوکی زبان را سمت کاربر می‌نویسیم تا پاسخ‌های عمومی هدر Set-Cookie نداشته باشند
       (وگرنه کش مشترک همان کوکی را به بازدیدکننده‌های دیگر هم می‌داد) */
    return $html . '</select>'
        . '<noscript><button type="submit" class="btn btn-success V">OK</button></noscript>'
        . '</form>'
        . '<script>'
        . '(function () { var m = /[?&]lang=(fa|en)(?:&|$)/.exec(location.search);'
        . ' if (m) { document.cookie = "jp_lang=" + m[1] + ";path=/;max-age=31536000;samesite=lax"; } })();'
        . '</script>';
}

/* در حالت انگلیسی، کل خروجی صفحه از همین فیلتر رد می‌شود */
if (jp_is_en()) {
    ob_start('jp_translate_html');
}
