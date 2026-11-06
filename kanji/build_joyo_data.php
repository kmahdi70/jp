<?php
/**
 * تولید دادهٔ جدول «Appendix» (فهرست رسمی常用漢字 ژاپن) از دیکشنری رسمی KANJIDIC2
 *
 * منبع: https://www.edrdg.org/kanjidic/kanjidic2.xml.gz
 * استفاده:
 *   curl -L -o kanjidic2.xml.gz https://www.edrdg.org/kanjidic/kanjidic2.xml.gz
 *   gzip -d kanjidic2.xml.gz   (یا همان فایل را در مسیر پیش‌فرض بگذارید)
 *   php kanji/build_joyo_data.php [مسیر kanjidic2.xml]
 *
 * خروجی: kanji/joyo_data.generated.php  با آرایهٔ $joyo_kanji
 * هر ردیف: [کانجی، همهٔ کونیومی‌ها، همهٔ اونیومی‌ها، معنی فارسی، معنی انگلیسی]
 *
 * ترتیب: پایهٔ ۱ تا ۶ (ترتیب تدریس در مدارس ژاپن) و سپس کانجی‌های رسمیِ خارج از
 * دورهٔ ابتدایی (پایهٔ ۸ در KANJIDIC2)؛ داخل هر پایه از پرکاربردترین به کم‌کاربردترین.
 */

$xmlPath = $argv[1] ?? (sys_get_temp_dir() . '/kanjidic2.xml');
if (!file_exists($xmlPath)) {
    fwrite(STDERR, "kanjidic2.xml not found: $xmlPath\n");
    exit(1);
}

$OUT = __DIR__ . '/joyo_data.generated.php';
$WANTED_GRADES = [1, 2, 3, 4, 5, 6, 8]; // 1..6 = دورهٔ ابتدایی، 8 = بقیهٔ کانجی‌های常用漢字
$GRADE_ORDER = array_flip($WANTED_GRADES);

/* ---------- معنی فارسی: از روی درس‌های قبلی سایت (kanji/data.php) ---------- */
$faMeanings = [];
if (file_exists(__DIR__ . '/data.php')) {
    include __DIR__ . '/data.php';
    foreach ($kanji_categories as $cat) {
        foreach ($cat['items'] as $item) {
            if (!isset($faMeanings[$item['k']])) {
                $faMeanings[$item['k']] = $item['mean'];
            }
        }
    }
    unset($kanji_categories);
}

/* ---------- خواندن KANJIDIC2 (استریمی، بدون مصرف حافظهٔ بالا) ---------- */
$rows = [];
$r = new XMLReader();
if (!$r->open($xmlPath)) {
    fwrite(STDERR, "cannot open $xmlPath\n");
    exit(1);
}
$order = 0;
while ($r->read()) {
    if ($r->nodeType !== XMLReader::ELEMENT || $r->name !== 'character') {
        continue;
    }
    $node = $r->expand();

    $lit = $node->getElementsByTagName('literal')->item(0)->textContent;

    $grade = null;
    $misc = $node->getElementsByTagName('misc')->item(0);
    if ($misc) {
        $g = $misc->getElementsByTagName('grade');
        if ($g->length) {
            $grade = (int) $g->item(0)->textContent;
        }
    }
    if ($lit === '' || $grade === null || !isset($GRADE_ORDER[$grade])) {
        unset($node);
        continue;
    }

    $freq = PHP_INT_MAX;
    if ($misc) {
        $f = $misc->getElementsByTagName('freq');
        if ($f->length) {
            $freq = (int) $f->item(0)->textContent;
        }
    }

    $on = [];
    $kun = [];
    foreach ($node->getElementsByTagName('reading') as $reading) {
        $type = $reading->getAttribute('r_type');
        $value = str_replace('.', '', $reading->textContent);
        $value = trim($value);
        if ($value === '') {
            continue;
        }
        if ($type === 'ja_on' && !in_array($value, $on, true)) {
            $on[] = $value;
        } elseif ($type === 'ja_kun' && !in_array($value, $kun, true)) {
            $kun[] = $value;
        }
    }

    $en = [];
    foreach ($node->getElementsByTagName('meaning') as $meaning) {
        // زبان در KANJIDIC2 چندزبانه با صفت m_lang می‌آید (بدون صفت = انگلیسی)
        $lang = $meaning->getAttribute('m_lang');
        if ($lang === '') {
            $lang = $meaning->getAttribute('lang');
        }
        if ($lang !== '' && $lang !== 'en') {
            continue;
        }
        $text = trim(preg_replace('/\s+/', ' ', $meaning->textContent));
        if ($text === '') {
            continue;
        }
        $en[] = $text;
        if (count($en) >= 3) {
            break;
        }
    }

    $rows[] = [
        'k' => $lit,
        'grade' => $grade,
        'freq' => $freq,
        'order' => $order++,
        'kun' => implode('・', $kun),
        'on' => implode('・', $on),
        'fa' => $faMeanings[$lit] ?? '',
        'en' => implode(', ', $en),
    ];
    unset($node);
}
$r->close();

/* ---------- مرتب‌سازی: پایه (۱ تا ۶ و بعد ۸) سپس پرکاربردترین‌ها ---------- */
usort($rows, function ($a, $b) use ($GRADE_ORDER) {
    $g = $GRADE_ORDER[$a['grade']] <=> $GRADE_ORDER[$b['grade']];
    if ($g !== 0) {
        return $g;
    }
    if ($a['freq'] !== $b['freq']) {
        return $a['freq'] <=> $b['freq'];
    }
    return $a['order'] <=> $b['order'];
});

/* ---------- نوشتن فایل خروجی ---------- */
$q = function ($s) {
    return "'" . str_replace(['\\', "'"], ['\\\\', "\\'"], $s) . "'";
};

$fp = fopen($OUT, 'wb');
fwrite($fp, "<?php\n");
fwrite($fp, "/**\n * این فایل توسط kanji/build_joyo_data.php ساخته شده است.\n");
fwrite($fp, " * منبع: KANJIDIC2 (EDRDG) — فهرست رسمی常用漢字 با همهٔ خواندن‌ها.\n");
fwrite($fp, " * هر ردیف: [کانجی، کونیومی‌ها، اونیومی‌ها، معنی فارسی، معنی انگلیسی]\n */\n");
fwrite($fp, '$joyo_kanji = [' . "\n");
foreach ($rows as $row) {
    fwrite(
        $fp,
        '[' . $q($row['k']) . ',' . $q($row['kun']) . ',' . $q($row['on']) . ',' . $q($row['fa']) . ',' . $q($row['en']) . "],\n"
    );
}
fwrite($fp, "];\n");
fclose($fp);

$withFa = count(array_filter($rows, fn ($x) => $x['fa'] !== ''));
$withEn = count(array_filter($rows, fn ($x) => $x['en'] !== ''));
$withKun = count(array_filter($rows, fn ($x) => $x['kun'] !== ''));
$withOn = count(array_filter($rows, fn ($x) => $x['on'] !== ''));

echo 'total rows      : ' . count($rows) . "\n";
echo 'by grade        : ' . json_encode(array_count_values(array_column($rows, 'grade'))) . "\n";
echo 'with kunyomi    : ' . $withKun . "\n";
echo 'with onyomi     : ' . $withOn . "\n";
echo 'with Persian    : ' . $withFa . "\n";
echo 'with English    : ' . $withEn . "\n";
echo 'output          : ' . $OUT . ' (' . filesize($OUT) . " bytes)\n";
