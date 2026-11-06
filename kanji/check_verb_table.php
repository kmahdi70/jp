<?php
// بررسی کیفیت: جدول افعالِ صفحهٔ اجراشده فقط باید کانجی‌های فعل باشد
$html = file_get_contents($argv[1] ?? '/tmp/kanji_out2.html');
if ($html === false) { fwrite(STDERR, "cannot read html\n"); exit(1); }

// سرصفحهٔ بخش با بج شمارش پیدا می‌شود، بعد جدولِ همان بخش
$pos = strpos($html, 'کانجی‌های افعال پایه');
if ($pos === false) { fwrite(STDERR, "verb section not found\n"); exit(1); }
$tstart = strpos($html, '<table', $pos);
$end = strpos($html, '</table>', $pos);
if ($tstart === false || $end === false) { fwrite(STDERR, "verb table not found\n"); exit(1); }
$seg = substr($html, $tstart, $end - $tstart);

preg_match_all('/rowspan="?(\d+)/', $seg, $m);
echo 'rowspan cells in verb section : ' . count($m[1]) . "\n";

// کانجیِ هر ردیف با کلاس kanji-ch رندر شده است
preg_match_all('/<span class="kanji-ch[^>]*>(.*?)<\/span>/s', $seg, $km);
$ks = [];
foreach ($km[1] as $c) {
    $t = trim(html_entity_decode(strip_tags($c), ENT_QUOTES, 'UTF-8'));
    if ($t !== '') $ks[] = $t;
}
echo 'kanji cells extracted         : ' . count($ks) . "\n";

$bad = ['貝','粋','素','星','機','格','姿','基','評','蚊','箸','藤','葛','桑','唇','淫','季','績','逮','所','物','人','年','日','大','本','一'];
$hit = array_values(array_intersect($bad, $ks));
echo 'non-verb kanji still in table : ' . ($hit ? implode('', $hit) : '(none)') . "\n";

echo 'first 15 rows                 : ' . implode('', array_slice($ks, 0, 15)) . "\n";

// کانجی‌های تکراری نباید باشند
$dupes = array_diff_assoc($ks, array_unique($ks));
echo 'duplicate kanji               : ' . ($dupes ? implode('', array_unique($dupes)) : '(none)') . "\n";

// ستون معنی فارسی خالی در همین جدول؟
preg_match_all('/<td[^>]*>(\s*)<\/td>/', $seg, $em);
echo 'empty td cells in section     : ' . count($em[1]) . "\n";

// تطابق دقیق با داده: ۱۱ مورد موجود در data.php + موارد تکمیلی
include __DIR__ . '/data.php';
$expected = [];
foreach ($kanji_categories as $cat) {
    if (($cat['title_en'] ?? '') === 'Basic Verbs') {
        foreach ($cat['items'] as $it) $expected[] = $it['k'];
    }
}
foreach ($verb_kanji_extra as $it) $expected[] = $it['k'];
echo 'expected total                : ' . count($expected) . "\n";
$missing = array_values(array_diff($expected, $ks));
$extra = array_values(array_diff($ks, $expected));
echo 'rendered but not in data      : ' . ($extra ? implode('', $extra) : '(none)') . "\n";
echo 'in data but not rendered      : ' . ($missing ? implode('', $missing) : '(none)') . "\n";
