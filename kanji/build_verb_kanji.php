<?php
/**
 * ساخت دادهٔ کانجی‌های «افعال پایه» از دو منبع رسمی EDRDG:
 *   - KANJIDIC2: پایه/فراوانی/خواندن‌ها/معنی انگلیسی هر کانجی常用漢字
 *   - JMdict:    واژه‌های فعلِ خالص (v1/v4/v5/vk/vz/vi/vt — بدون する-اسم‌ها)
 *
 * «کانجی افعال» = کانجی常用漢字 که خودش ریشهٔ یک فعل است: واژهٔ فعلیِ تک‌کانجی مثل 見る / 食べる / 入る؛
 * کانجی‌هایی که فقط در واژه‌های مرکب (مثل 紹介) دیده می‌شوند فعل نیستند و حذف می‌شوند.
 *
 * استفاده:
 *   gzip -dk /tmp/JMdict_e.gz        (یک بار)
 *   php kanji/build_verb_kanji.php [kanjidic2.xml] [JMdict_e]
 *
 * خروجی: kanji/verbs_extra_data.generated.php  با آرایهٔ $verb_kanji_extra
 * هر ردیف: ['k','kun','on','mean','ex'=>[[کلمه، هیراگانا، معنی فارسی], ...]]
 * (کانجی‌های ۱۱گانهٔ فعلیِ سایت تکرار نمی‌شوند؛ ترتیب: پایهٔ ۱ تا ۶ و بعد بقیه،
 *  داخل هر پایه از پرکاربردترین به کم‌کاربردترین)
 */

require __DIR__ . '/fa_dict.php';

// کدگذاری UTF-8 دستی (php این محیط mbstring ندارد)
$u8 = function ($cp) {
    if ($cp < 0x80) return chr($cp);
    if ($cp < 0x800) return chr(0xC0 | ($cp >> 6)) . chr(0x80 | ($cp & 0x3F));
    return chr(0xE0 | ($cp >> 12)) . chr(0x80 | (($cp >> 6) & 0x3F)) . chr(0x80 | ($cp & 0x3F));
};
// جدول کاتاکانا ← هیراگانا (U+30A1..U+30F6 ← U+3041..U+3096)
$kata2hira = [];
for ($cp = 0x30A1; $cp <= 0x30F6; $cp++) { $kata2hira[$u8($cp)] = $u8($cp - 0x60); }

$KANJIDIC = $argv[1] ?? (sys_get_temp_dir() . '/kanjidic2.xml');
$JMDICT   = $argv[2] ?? (sys_get_temp_dir() . '/JMdict_e');
$DICT     = getenv('ENFA_DICT') ?: (sys_get_temp_dir() . '/enfa.json');
foreach ([$KANJIDIC, $JMDICT, $DICT] as $f) {
    if (!file_exists($f)) { fwrite(STDERR, "not found: $f\n"); exit(1); }
}

[$dict, $score] = fa_dict_load($DICT);

/* ---------- 1) KANJIDIC2: اطلاعات کانجی‌های常用漢字 ---------- */
$WANTED = [1, 2, 3, 4, 5, 6, 8];
$GRADE_ORDER = array_flip($WANTED);
$joyo = [];
$r = new XMLReader();
$r->open($KANJIDIC);
while ($r->read()) {
    if ($r->nodeType !== XMLReader::ELEMENT || $r->name !== 'character') continue;
    $node = $r->expand();
    $lit = $node->getElementsByTagName('literal')->item(0)->textContent;
    $grade = null; $freq = PHP_INT_MAX;
    $misc = $node->getElementsByTagName('misc')->item(0);
    if ($misc) {
        $g = $misc->getElementsByTagName('grade');
        if ($g->length) $grade = (int)$g->item(0)->textContent;
        $f = $misc->getElementsByTagName('freq');
        if ($f->length) $freq = (int)$f->item(0)->textContent;
    }
    if ($lit === '' || $grade === null || !isset($GRADE_ORDER[$grade])) { unset($node); continue; }    $kun = []; $kunM = []; $kunStem = []; $on = []; $onM = [];
    foreach ($node->getElementsByTagName('reading') as $rd) {
        $t = $rd->getAttribute('r_type');
        // ساقِ فعلی: بخشِ قبل از نقطه در خواندنِ کونی (مثلاً いノ.る ← いの)؛ فقط خواندن‌های دارای اوکوریگانا
        $raw = $rd->textContent;
        if ($t === 'ja_kun' && strpos($raw, '.') !== false) {
            $stem = trim(str_replace(['(', ')'], '', strstr($raw, '.', true)));
            $stem = ltrim($stem, '-');
            if ($stem !== '' && !in_array($stem, $kunStem)) $kunStem[] = $stem;
        }
        // نرمال‌سازی: حذف نقطه و پرانتزِ اوکوریگانا (مثلاً み(る) ← みる)
        $v = trim(str_replace(['.', '(', ')'], '', $raw));
        if ($v === '') continue;
        if ($t === 'ja_kun') {
            if (!in_array($v, $kun)) $kun[] = $v;
            $m = ltrim($v, '-'); // -び ← برای تطبیق، بدون نشانِ پیشوندی
            if ($m !== '' && !in_array($m, $kunM)) $kunM[] = $m;
        } elseif ($t === 'ja_on') {
            if (!in_array($v, $on)) $on[] = $v;
            $m = ltrim(strtr($v, $kata2hira), '-');
            if ($m !== '' && !in_array($m, $onM)) $onM[] = $m;
        }
    }
    $en = [];
    foreach ($node->getElementsByTagName('meaning') as $m) {
        $lang = $m->getAttribute('m_lang') ?: $m->getAttribute('lang');
        if ($lang !== '' && $lang !== 'en') continue;
        $tx = trim(preg_replace('/\s+/', ' ', $m->textContent));
        if ($tx !== '') $en[] = $tx;
        if (count($en) >= 3) break;
    }
    $joyo[$lit] = ['grade' => $grade, 'freq' => $freq, 'kun' => $kun, 'kunM' => $kunM, 'kunStem' => $kunStem, 'on' => $on, 'onM' => $onM, 'en' => $en];
    unset($node);
}
$r->close();
echo 'joyo kanji     : ' . count($joyo) . "\n";

/* ---------- 2) معنی فارسیِ موجود سایت (از درس‌های قبلی) + جدول افعال پایه ---------- */
$siteMean = [];
$existingVerbs = [];
if (file_exists(__DIR__ . '/data.php')) {
    include __DIR__ . '/data.php';
    foreach ($kanji_categories as $cat) {
        foreach ($cat['items'] as $it) {
            if (!isset($siteMean[$it['k']])) $siteMean[$it['k']] = $it['mean'];
        }
        // کانجی‌های فعلیِ موجود در جدول «افعال پایه» (دسته‌ی Basic Verbs)
        if (($cat['title_en'] ?? '') === 'Basic Verbs') {
            foreach ($cat['items'] as $it) {
                $existingVerbs[] = $it['k'];
            }
        }
    }
    unset($kanji_categories);
}

/* ---------- 3) JMdict: فعل‌های خالص و نمونه‌واژه‌ها ---------- */
$cand = [];       // کانجی => [ [word, hira, en, numHan, firstHan], ... ]
$singleKanji = []; // کانجی‌هایی که در واژهٔ تک‌کانجیِ فعلی دیده شده‌اند (بدون شرط تطبیق خواندن)
$verbRoot = [];    // زیرمجموعهٔ بالا که خواندنشان خواندنِ فعلیِ واقعیِ همان کانجی است
$ruleUsed = [];    // کانجی ← قاعدهٔ پذیرش (1 = تطبیق کامل کونی، 2 = ساقِ کونی + اوکوریگانا)
$onCandidate = []; // دیاگنوستیک: تطبیق با اونیومی (فعلاً فقط گزارش)
$entries = 0; $verbs = 0;
$r = new XMLReader();
$r->open($JMDICT);
while ($r->read()) {
    if ($r->nodeType !== XMLReader::ELEMENT || $r->name !== 'entry') continue;
    $entries++;
    $node = $r->expand();

    $isVerb = false;
    foreach ($node->getElementsByTagName('pos') as $p) {
        $pos = trim($p->textContent);
        if ($pos === '' && $p->firstChild && $p->firstChild->nodeType === XML_ENTITY_REF_NODE) {
            $pos = $p->firstChild->nodeName; // JMdict: <pos>&v1;</pos>
        }
        if (preg_match('/^(v1|v4|v5|vk|vz|vi|vt|va)/', $pos)) { $isVerb = true; break; }
    }
    if (!$isVerb) { unset($node); continue; }

    $kebs = [];
    foreach ($node->getElementsByTagName('keb') as $k) {
        $w = $k->textContent;
        // واژهٔ تمیز: فقط کانجی/کانا، بدون آکولاد و پرانتز
        if (preg_match('/^[\p{Han}\p{Hiragana}\p{Katakana}ー々]+$/u', $w)) $kebs[] = $w;
    }
    if (!$kebs) { unset($node); continue; }

    $reb = '';
    foreach ($node->getElementsByTagName('reb') as $x) { $reb = $x->textContent; break; }
    if ($reb === '' || preg_match('/[(){}]/', $reb)) { unset($node); continue; }

    $gloss = '';
    foreach ($node->getElementsByTagName('gloss') as $g) {
        $lang = $g->getAttribute('xml:lang');
        if ($lang !== '' && $lang !== 'eng') continue;
        $gloss = trim(preg_replace('/\s+/', ' ', $g->textContent));
        if ($gloss !== '') break;
    }
    if ($gloss === '') { unset($node); continue; }

    // واژه‌های تند (فیلد vulg یا gloss حاوی vulgar) اصلاً وارد داده نمی‌شوند
    $isVulg = stripos($gloss, 'vulgar') !== false;
    if (!$isVulg) {
        foreach ($node->getElementsByTagName('field') as $f) {
            $fv = trim($f->textContent);
            if ($fv === '' && $f->firstChild && $f->firstChild->nodeType === XML_ENTITY_REF_NODE) {
                $fv = $f->firstChild->nodeName;
            }
            if (stripos($fv, 'vulg') !== false) { $isVulg = true; break; }
        }
    }
    if ($isVulg) { unset($node); continue; }

    $verbs++;
    // خواندنِ واژه، نرمال‌شده برای تطبیق با خواندن‌های کونیِ KANJIDIC2
    $rb = str_replace(['(', ')'], '', $reb);
    $rb = strtr($rb, $kata2hira); // کاتاکانا ← هیراگانا
    foreach ($kebs as $w) {
        preg_match_all('/\p{Han}/u', $w, $mm);
        if (!$mm[0]) continue;
        $numHan = count($mm[0]);
        $firstHan = $mm[0][0];        // فعلِ تک‌کانجی: دقیقاً یک کانجی + حداقل یک کانا (مثل 見る، 食べる، 入る)
        if ($numHan === 1 && preg_match('/^\p{Han}([\p{Hiragana}\p{Katakana}ー]+)$/u', $w, $wm) && isset($joyo[$firstHan])) {
            $singleKanji[$firstHan] = $w . "\t" . $rb;
            $rank = 0;
            // ۱) خواندنِ واژه عیناً یکی از خواندن‌های کونیِ همان کانجی باشد (مثل 見る = みる)
            if ($rb !== '' && in_array($rb, $joyo[$firstHan]['kunM'], true)) {
                $rank = 1;
            }
            // ۲) یا پیشوندِ خواندن برابر ساقِ فعلیِ کونی باشد و بقیه همان اوکوریگانای واژه باشد
            //    (مثل 命じる = いの + じる، جایی که کونیِ KANJIDIC いノ(る) ثبت شده)
            if ($rank === 0 && $rb !== '') {
                $kanaPart = $wm[1];
                $suffixLen = strlen($kanaPart);
                // فقط اگر پسوند، اوکوریگانای فعلی باشد؛ شکل‌های وصفی (کانجیِ صفت + く/き/し/な، مثل 大きすぎる، 良くなる) رد می‌شوند
                $verbOkuri = preg_match('/^(?:(?![をがにへでともは]).){0,6}(?:る|う|く|ぐ|す|ず|つ|ぬ|ぶ|む|じる|ずる|する)$/u', $kanaPart)
                    && !preg_match('/^[くきしな]/u', $kanaPart);
                if ($verbOkuri && strlen($rb) > $suffixLen && substr($rb, -$suffixLen) === $kanaPart) {
                    $prefix = substr($rb, 0, strlen($rb) - $suffixLen);
                    if (in_array($prefix, $joyo[$firstHan]['kunStem'], true)) {
                        $rank = 2;
                    }
                }
            }
            // ۳) یا پیشوند = اونیومیِ همان کانجی و اوکوریگانای خالصِ ساز (信ずる، 命じる، 課する)
            if ($rank === 0 && $rb !== '' && in_array($wm[1], ['す', 'ず', 'る', 'じる', 'ずる', 'する'], true)) {
                $prefix = substr($rb, 0, strlen($rb) - strlen($wm[1]));
                if ($prefix !== '' && in_array(strtr($prefix, $kata2hira), $joyo[$firstHan]['onM'], true)) {
                    $rank = 3;
                }
            }
            if ($rank > 0 && (!isset($verbRoot[$firstHan]) || $rank < $ruleUsed[$firstHan])) {
                $verbRoot[$firstHan] = $w;
                $ruleUsed[$firstHan] = $rank;
            }
            // دیاگنوستیک: تطبیق‌های اونیومیِ بدونِ اوکوریگانای ساز (فعلاً فقط گزارش)
            if ($rank === 0 && $rb !== '' && strlen($rb) > strlen($wm[1])) {
                $prefix = substr($rb, 0, strlen($rb) - strlen($wm[1]));
                if (in_array(strtr($prefix, $kata2hira), $joyo[$firstHan]['onM'] ?? [], true)) {
                    $onCandidate[$firstHan] = $w . "\t" . $rb;
                }
            }
        }
        // فقط کانجی‌های常用漢字 ثبت می‌شوند
        $chars = array_unique(preg_split('//u', $w, -1, PREG_SPLIT_NO_EMPTY));
        $touched = false;
        foreach ($chars as $ch) {
            if (isset($joyo[$ch])) {
                $cand[$ch][] = [$w, $reb, $gloss, $numHan, $firstHan === $ch ? 0 : 1];
                $touched = true;
            }
        }
        if (!$touched) continue;
    }
    unset($node);
}
$r->close();
echo 'jmdict entries : ' . $entries . "\n";
echo 'verb entries   : ' . $verbs . "\n";
echo 'joyo kanji in >=1 verb : ' . count($cand) . "\n";
echo 'single-kanji verb kanji : ' . count($singleKanji) . "\n";
echo 'verb-root kanji (reading matches kun) : ' . count($verbRoot) . "\n";
// نمونهٔ تصادفی برای بازبینی دستی
$rk = array_keys($verbRoot);
shuffle($rk);
echo "sample roots (kanji <= qualifying verb):\n  ";
foreach (array_slice($rk, 0, 30) as $k) echo "$k<={$verbRoot[$k]}  ";
echo "\n";
$mk = array_keys($singleKanji);
shuffle($mk);
echo "sample rejected (kanji <= word):\n  ";
foreach (array_slice($mk, 0, 25) as $k) { if (!isset($verbRoot[$k])) { [$ww] = explode("\t", $singleKanji[$k]); echo "$k<=$ww  "; } }
echo "\n";
// دیاگنوستیک: همهٔ ردشده‌ها با کانجیِ تک‌کانجی + خواندن + کونی‌ها
$fpd = fopen(sys_get_temp_dir() . '/verb_rejected.txt', 'wb');
foreach ($mk as $k) {
    if (isset($verbRoot[$k])) continue;
    [$ww, $rr] = explode("\t", $singleKanji[$k] . "\t");
    fwrite($fpd, "$k\t$ww\t$rr\t" . implode(',', $joyo[$k]['kun']) . "\n");
}
fclose($fpd);
$fpo = fopen(sys_get_temp_dir() . '/verb_oncand.txt', 'wb');
foreach ($onCandidate as $k => $v) fwrite($fpo, "$k\t$v\n");
fclose($fpo);
echo 'on-reading candidates (not accepted) : ' . count($onCandidate) . "\n";
$fp3 = fopen(sys_get_temp_dir() . '/verb_rule3.txt', 'wb');
foreach ($verbRoot as $k => $v) if (($ruleUsed[$k] ?? 9) === 3) fwrite($fp3, "$k\t$v\t" . $joyo[$k]['en'][0] . "\n");
fclose($fp3);
echo 'accepted only via on-reading rule     : ' . count(array_filter($ruleUsed, fn($r) => $r === 3)) . "\n";
$fp2 = fopen(sys_get_temp_dir() . '/verb_rule2.txt', 'wb');
foreach ($verbRoot as $k => $v) if (($ruleUsed[$k] ?? 9) === 2) fwrite($fp2, "$k\t$v\n");
fclose($fp2);
echo 'accepted only via kun-stem rule       : ' . count(array_filter($ruleUsed, fn($r) => $r === 2)) . "\n";


/* ---------- 4) انتخاب بهترین مثال‌ها و ساخت آیتم‌ها ---------- */
echo 'existing verbs  : ' . count($existingVerbs) . ' (' . implode('', $existingVerbs) . ")\n";

$items = [];
$stats = ['mean_manual' => 0, 'ex_fallback' => 0, 'no_example' => 0, 'no_mean' => 0, 'not_verb_root' => 0, 'reb_mismatch' => 0];

// معنی فارسی دستی برای کانجی‌هایی که دیکشنری انگلیسی-فارسی پوشش نداده
$manualFa = [
    '貝' => 'صدف',
    '季' => 'فصل سال',
    '績' => 'دستاورد، نتیجه',
    '藤' => 'گل یاس',
    '逮' => 'دستگیری',
    '戒' => 'نصیحت، هشدار',
    '葛' => 'کنگلو (گیاه دارویی)',
    '桑' => 'توت (درخت توت)',
    '唇' => 'لب',
    '蚊' => 'پشه',
    '箸' => 'چوب غذا',
    '淫' => 'هرزه‌گی، شهوت',
];

foreach ($cand as $k => $list) {
    if (in_array($k, $existingVerbs, true)) continue;
    // فقط کانجی‌هایی که خودشان فعل‌اند؛ بقیه (ریشه‌های غیرفعلی در واژه‌های مرکب) حذف می‌شوند
    if (!isset($verbRoot[$k])) {
        $stats[isset($singleKanji[$k]) ? 'reb_mismatch' : 'not_verb_root']++;
        continue;
    }

    // مرتب‌سازی نمونه‌ها: کانجی در جای اول واژه، سپس واژه‌های کوتاه‌تر/ساده‌تر
    $seen = [];
    $list = array_values(array_filter($list, function ($c) use (&$seen) {
        if (isset($seen[$c[0]])) return false;
        $seen[$c[0]] = true;
        return true;
    }));
    usort($list, function ($a, $b) {
        return [$a[4], $a[3], strlen($a[0])] <=> [$b[4], $b[3], strlen($b[0])];
    });

    $ex = [];
    foreach ($list as $c) {
        $fa = fa_dict_translate($c[2], $dict, $score);
        $ex[] = [$c[0], $c[1], $fa, $fa === ''];
        if (count($ex) >= 6) break; // بیشتر از این لازم نیست (بعداً تا ۳ تا نگه می‌داریم)
    }
    if (!$ex) { $stats['no_example']++; continue; }

    // معنی فارسی کانجی
    $mean = $siteMean[$k] ?? '';
    if ($mean === '') {
        $mean = fa_dict_translate(implode(', ', $joyo[$k]['en']), $dict, $score);
        if ($mean === '') {
            $mean = $manualFa[$k] ?? '';
            if ($mean !== '') { $stats['mean_manual']++; }
        }
        if ($mean === '') { $stats['no_mean']++; }
    }

    // تا ۳ مثال؛ معنی فارسی نداشت از معنی کانجی استفاده می‌شود
    $exOut = [];
    foreach (array_slice($ex, 0, 3) as $e) {
        if ($e[2] === '') { $e[2] = $mean; $stats['ex_fallback']++; }
        if ($e[2] === '') continue;
        $exOut[] = [$e[0], $e[1], $e[2]];
    }
    if (!$exOut) { $stats['no_example']++; continue; }

    $items[$k] = [
        'k' => $k,
        'kun' => implode('・', array_slice($joyo[$k]['kun'], 0, 5)),
        'on' => implode('・', array_slice($joyo[$k]['on'], 0, 4)),
        'mean' => $mean,
        'ex' => $exOut,
        'grade' => $joyo[$k]['grade'],
        'freq' => $joyo[$k]['freq'],
    ];
}

// ترتیب: پایهٔ ۱ تا ۶ و بعد بقیه؛ داخل هر پایه از پرکاربردترین
uasort($items, function ($a, $b) use ($GRADE_ORDER) {
    $g = $GRADE_ORDER[$a['grade']] <=> $GRADE_ORDER[$b['grade']];
    return $g !== 0 ? $g : ($a['freq'] <=> $b['freq']);
});

echo 'new items      : ' . count($items) . "\n";
echo 'total verb kanji (existing + new) : ' . (count($items) + count($existingVerbs)) . "\n";
echo 'stats          : ' . json_encode($stats) . "\n";
echo "sample:\n";
foreach (array_slice($items, 0, 8, true) as $k => $it) {
    echo "  $k mean={$it['mean']} kun={$it['kun']} ex=" . json_encode($it['ex'], JSON_UNESCAPED_UNICODE) . "\n";
}

/* ---------- 5) نوشتن خروجی ---------- */
$q = function ($s) {
    return "'" . str_replace(['\\', "'"], ['\\\\', "\\'"], $s) . "'";
};
$fp = fopen(__DIR__ . '/verbs_extra_data.generated.php', 'wb');
fwrite($fp, "<?php\n");
fwrite($fp, "/**\n * کانجی‌های افعال پایهِ تکمیلی — توسط kanji/build_verb_kanji.php ساخته شده است.\n");
fwrite($fp, " * منبع: KANJIDIC2 + JMdict (EDRDG)؛ معنی فارسی از دیکشنری انگلیسی-فارسی.\n");
fwrite($fp, " * این کانجی‌ها به کانجی‌های فعلیِ موجود در جدول افعال پایه اضافه می‌شوند.\n");
fwrite($fp, " */\n");
fwrite($fp, '$verb_kanji_extra = [' . "\n");
foreach ($items as $it) {
    $line = "    ['k' => " . $q($it['k']) . ', ' .
        "'kun' => " . $q($it['kun']) . ', ' .
        "'on' => " . $q($it['on']) . ', ' .
        "'mean' => " . $q($it['mean']) . ', ' .
        "'ex' => [";
    foreach ($it['ex'] as $e) {
        $line .= "\n        [" . $q($e[0]) . ', ' . $q($e[1]) . ', ' . $q($e[2]) . '],';
    }
    $line .= "\n    ]],";
    fwrite($fp, $line . "\n");
}
fwrite($fp, "];\n");
fclose($fp);
echo 'output         : ' . __DIR__ . '/verbs_extra_data.generated.php (' . filesize(__DIR__ . '/verbs_extra_data.generated.php') . " bytes)\n";
