<?php
/**
 * jp/kanji/prepare.php — ساخت یکسان دسته‌های کانجی.
 *
 * kanji.php (صفحهٔ درس، با بارگذاری تدریجی) و kanji-all.php (فهرست کامل برای
 * ایندکس شدن) هر دو همین فایل را می‌خوانند تا ترتیب دسته‌ها، حذف و افزودن‌ها و
 * شمار کل کانجی در هر دو صفحه یکی بماند.
 */
include __DIR__ . '/data.php';
foreach ($kanji_categories as $categoryIndex => $category) {
    if (($category['title_en'] ?? '') === 'Grade 1 School Kanji') {
        array_splice($kanji_categories, $categoryIndex, 1);
        break;
    }
}
$kanji_categories = array_merge($kanji_categories, $school_grade_categories);
foreach ($kanji_categories as &$cat) {
    if (($cat['title_en'] ?? '') === 'Basic Verbs') {
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
/* بخش تکمیلی: کانجی‌های رسمی جویو که در هیچ‌کدام از بخش‌های بالا نیامده‌اند */
$kanji_seen = [];
foreach ($kanji_categories as $cat) {
    foreach ($cat['items'] as $item) {
        $kanji_seen[$item['k']] = true;
    }
}
$joyo_remaining = [];
foreach ($joyo_kanji as $row) {
    if (empty($kanji_seen[$row[0]])) {
        $joyo_remaining[] = [
            'k' => $row[0],
            'kun' => $row[1],
            'on' => $row[2],
            'mean' => $row[3],
            'mean_en' => $row[4],
            'ex' => [],
        ];
    }
}
if (!empty($joyo_remaining)) {
    $kanji_categories[] = [
        'title' => 'کانجی‌های تکمیلی جویو',
        'title_en' => 'Remaining Jōyō Kanji',
        'icon' => 'fa-layer-group',
        'desc' => 'این بخش مکمل بخش‌های بالاست: هر کانجی رسمی 常用漢字 که در دسته‌های موضوعی یا جدول پایه‌های تحصیلی نیامده بود، اینجا فهرست شده است. داده‌ها از فهرست رسمی ۲۱۳۶ کانجی جویو (کانجی، کونیومی، اونیومی، معنی فارسی و انگلیسی) آمده‌اند و با فهرست رسمی ژاپن یکی است.',
        'no_examples' => true,
        'items' => $joyo_remaining,
    ];
}
$kanji_total = 0;
foreach ($kanji_categories as $c) {
    $kanji_total += count($c['items']);
}
