<?php
/**
 * شمارش کانجی‌های «فعل» در فهرست常用漢字 از روی KANJIDIC2
 * تشخیص: کونیومیِ نقطه‌دار که با اوکوریگانای فعل تمام می‌شود
 * (مانند か.く، た.べる، い.く — پایان‌های う/く/ぐ/す/つ/ぬ/ぶ/む/る)
 */
$xmlPath = $argv[1] ?? (sys_get_temp_dir() . '/kanjidic2.xml');
if (!file_exists($xmlPath)) { fwrite(STDERR, "no $xmlPath\n"); exit(1); }

$WANTED = [1, 2, 3, 4, 5, 6, 8];
$GRADE_ORDER = array_flip($WANTED);

// کانجی‌های فعلیِ فعلی = هر کونیومیِ نقطه‌دار که به پایان فعل برسد
$verbRe = '/^.+\.[^・\/()（）]*[うくぐすつぬぶむる]$/u';

$all = [];      // k => ['verb'=>bool, 'firstIsVerb'=>bool, 'grade', 'freq', 'kun'=>[], 'on'=>[], 'en'=>[]]
$r = new XMLReader();
$r->open($xmlPath);
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
    if ($lit === '' || $grade === null || !isset($GRADE_ORDER[$grade])) { unset($node); continue; }

    $kun = []; $on = [];
    foreach ($node->getElementsByTagName('reading') as $rd) {
        $t = $rd->getAttribute('r_type'); $v = trim($rd->textContent);
        if ($v === '') continue;
        if ($t === 'ja_kun') $kun[] = $v;
        elseif ($t === 'ja_on') $on[] = str_replace('.', '', $v);
    }
    $en = [];
    foreach ($node->getElementsByTagName('meaning') as $m) {
        $lang = $m->getAttribute('lang');
        if ($lang !== '' && $lang !== 'en') continue;
        $tx = trim(preg_replace('/\s+/', ' ', $m->textContent));
        if ($tx !== '') $en[] = $tx;
        if (count($en) >= 3) break;
    }

    $verbKun = array_values(array_filter($kun, fn($k) => preg_match($verbRe, $k)));
    $all[$lit] = [
        'verb' => count($verbKun) > 0,
        'firstIsVerb' => count($kun) && preg_match($verbRe, $kun[0]),
        'grade' => $grade, 'freq' => $freq,
        'kun' => $kun, 'verbKun' => $verbKun, 'on' => $on, 'en' => $en,
    ];
    unset($node);
}
$r->close();

$verbs = array_filter($all, fn($x) => $x['verb']);
$firstOnly = array_filter($all, fn($x) => $x['firstIsVerb']);

// کانجی‌های موجود در سایت
include __DIR__ . '/data.php';
$siteKanji = [];
$basicVerbs = [];
foreach ($kanji_categories as $cat) {
    foreach ($cat['items'] as $it) {
        $siteKanji[$it['k']] = $cat['title_en'];
        if ($cat['title_en'] === 'Basic Verbs') $basicVerbs[] = $it['k'];
    }
}

echo 'Joyo total                 : ' . count($all) . "\n";
echo 'verb kanji (rule A: any verb kun reading): ' . count($verbs) . "\n";
echo 'verb kanji (rule B: first kun is verb)   : ' . count($firstOnly) . "\n";
echo 'Basic Verbs on site now    : ' . count($basicVerbs) . ' -> ' . implode('', $basicVerbs) . "\n";
echo 'missing under A           : ' . (count($verbs) - count(array_intersect(array_keys($verbs), $basicVerbs))) . "\n";
echo 'missing under B           : ' . (count($firstOnly) - count(array_intersect(array_keys($firstOnly), $basicVerbs))) . "\n";
echo 'site kanji that are verbs (A): ' . count(array_intersect(array_keys($verbs), array_keys($siteKanji))) . "\n";

// نمونه‌ها برای بازبینی
$va = array_keys($verbs); $vb = array_keys($firstOnly);
echo "\nsample A (first 40): " . implode('', array_slice($va, 0, 40)) . "\n";
echo "sample B (first 40): " . implode('', array_slice($vb, 0, 40)) . "\n";
$onlyA = array_diff($va, $vb);
echo "\nA-only count: " . count($onlyA) . "\n";
echo "A-only first 60: " . implode('', array_slice($onlyA, 0, 60)) . "\n";

// آیا هر ۱۱ کانجی فعلِ فعلیِ فعلی سایت زیر قاعده A هستند؟
echo "\nthe current 11 under A: " . implode('', array_intersect($basicVerbs, $va)) . "\n";
echo "the current 11 under B: " . implode('', array_intersect($basicVerbs, $vb)) . "\n";

// خروجی JSON برای اسکریپت ساخت
file_put_contents(sys_get_temp_dir() . '/verb_kanji.json', json_encode([
    'A' => array_values($va),
    'B' => array_values($vb),
], JSON_UNESCAPED_UNICODE));
echo "\njson written to " . sys_get_temp_dir() . "/verb_kanji.json\n";
