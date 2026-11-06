<?php
/**
 * پر کردن ستون «معنی فارسی» خالی در جدول ضمیمه (kanji/data.php)
 * از دیکشنری انگلیسی-فارسی (npm: english-persian-dictionary).
 *
 * استفاده:
 *   php kanji/fill_fa_meanings.php --dry-run    فقط گزارش
 *   php kanji/fill_fa_meanings.php              نوشتن در joyo_data.generated.php
 *
 * فقط ردیف‌هایی که معنی فارسی‌شان خالی است پر می‌شوند؛
 * معنی‌های موجود (از درس‌های قبلی سایت) دست‌نخورده می‌مانند.
 */

require __DIR__ . '/fa_dict.php';

$dry = in_array('--dry-run', $argv, true);

/** واژه‌هایی که دیکشنری نداشت؛ معنی فارسی دستی (برگرفته از همان معنی انگلیسی) */
$manual = [
    '貝' => 'صدف، صدف‌ماهی',
    '曜' => 'روز هفته',
    '季' => 'فصل، فصول',
    '潟' => 'خور کم‌عمق، مرداب دریایی',
    '績' => 'دستاورد، کارنامه',
    '藤' => 'ویستریا، گیاه پیچ‌دار',
    '逮' => 'دستگیر کردن، تعقیب',
    '戒' => 'پرهیز، هشدار',
    '葛' => 'کودزو (گیاه خوراکی)',
    '桑' => 'توت‌درختی',
    '厘' => 'رین (یک‌دهم سن، واحد قدیمی)',
    '唇' => 'لب، لب‌ها',
    '蚊' => 'پشه',
    '箸' => 'چوب غذاخوری',
    '儒' => 'کنفوسیوس‌گرا',
    '淫' => 'هرزگی، شهوت‌رانی',
    '舷' => 'کنارهٔ قایق',
];
$DICT_PATH = getenv('ENFA_DICT') ?: (sys_get_temp_dir() . '/enfa.json');
if (!file_exists($DICT_PATH)) {
    fwrite(STDERR, "dictionary not found: $DICT_PATH\n");
    exit(1);
}
[$dict, $score] = fa_dict_load($DICT_PATH);

include __DIR__ . '/data.php'; // $joyo_kanji

$filled = 0;
$already = 0;
$still = [];
$samples = [];
foreach ($joyo_kanji as $i => $row) {
    if (trim($row[3]) !== '') {
        $already++;
        continue;
    }
    $fa = fa_dict_translate($row[4], $dict, $score);
    if ($fa === '' && isset($manual[$row[0]])) {
        $fa = $manual[$row[0]];
    }
    if ($fa !== '') {
        $filled++;
        if (count($samples) < 20) {
            $samples[] = $row[0] . '  |  ' . $row[4] . '  =>  ' . $fa;
        }
        if (!$dry) {
            $joyo_kanji[$i][3] = $fa;
        }
    } else {
        $still[] = $row[0] . '  |  ' . $row[4];
    }
}

echo 'rows total        : ' . count($joyo_kanji) . "\n";
echo 'already had fa    : ' . $already . "\n";
echo 'filled now        : ' . $filled . "\n";
echo 'still empty       : ' . count($still) . "\n";
echo "\nsamples:\n" . implode("\n", $samples) . "\n";
if ($still) {
    echo "\nuntranslated (first 30):\n" . implode("\n", array_slice($still, 0, 30)) . "\n";
}

if ($dry) {
    echo "\n(dry-run: nothing written)\n";
    exit(0);
}

/* ---------- نوشتن joyo_data.php ---------- */
$q = function ($s) {
    return "'" . str_replace(['\\', "'"], ['\\\\', "\\'"], $s) . "'";
};
$fp = fopen(__DIR__ . '/joyo_data.generated.php', 'wb');
fwrite($fp, "<?php\n");
fwrite($fp, "/**\n * این فایل توسط kanji/build_joyo_data.php ساخته شده است (معنی فارسی با\n");
fwrite($fp, " * kanji/fill_fa_meanings.php از دیکشنری انگلیسی-فارسی پر شده است).\n");
fwrite($fp, " * منبع: KANJIDIC2 (EDRDG) — فهرست رسمی常用漢字 با همهٔ خواندن‌ها.\n");
fwrite($fp, " * هر ردیف: [کانجی، کونیومی‌ها، اونیومی‌ها، معنی فارسی، معنی انگلیسی]\n */\n");
fwrite($fp, '$joyo_kanji = [' . "\n");
foreach ($joyo_kanji as $row) {
    fwrite($fp, '[' . $q($row[0]) . ',' . $q($row[1]) . ',' . $q($row[2]) . ',' . $q($row[3]) . ',' . $q($row[4]) . "],\n");
}
fwrite($fp, "];\n");
fclose($fp);
echo "\nwritten: " . __DIR__ . '/joyo_data.generated.php (' . filesize(__DIR__ . '/joyo_data.generated.php') . " bytes)\n";
