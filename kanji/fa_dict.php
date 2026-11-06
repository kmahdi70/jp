<?php
/**
 * ترجمهٔ انگلیسی ← فارسی با دیکشنری دوزبانه (english-persian-dictionary)
 * منبع دیکشنری: https://www.npmjs.com/package/english-persian-dictionary (index.json)
 *
 * fa_dict_load()      بارگذاری دیکشنری
 * fa_dict_translate() ترجمهٔ یک عبارت انگلیسی (چند معنی با ، جدا شده) به فارسی
 */

function fa_dict_load(string $path): array
{
    $raw = json_decode(file_get_contents($path), true);
    if (!is_array($raw)) {
        fwrite(STDERR, "cannot parse dictionary: $path\n");
        exit(1);
    }
    $dict = [];            // en(lower) => [هر چند معنی فارسی]
    $firstScore = [];      // هر معنی فارسی چند بار معنیِ اولِ یک واژه بوده (پرکاربردتر = بهتر)
    foreach ($raw as $en => $fa) {
        $k = strtolower($en);
        if (!isset($dict[$k]) && is_array($fa) && $fa) {
            $dict[$k] = $fa;
            foreach (array_unique(array_map('fa_norm', $fa)) as $i => $v) {
                $firstScore[$v] = ($firstScore[$v] ?? 0) + ($i === 0 ? 3 : 1);
            }
        }
    }
    return [$dict, $firstScore];
}

/** بهترین معنی فارسیِ یک واژه: بیشترین امتیاز (معنی اولِ واژه‌های پرکاربردتر)، در صورت تساوی اولین معنی */
function fa_best(array $values, array $score): string
{
    $best = ''; $bestS = -1;
    foreach ($values as $v) {
        $v = fa_norm(trim($v));
        if ($v === '') continue;
        $s = $score[$v] ?? 0;
        if ($s > $bestS) { $bestS = $s; $best = $v; }
    }
    return $best;
}

/** نرمال‌سازی حروف عربی به فارسی (ي→ی، ك→ک) */
function fa_norm(string $s): string
{
    return strtr($s, ['ي' => 'ی', 'ك' => 'ک', 'ة' => 'ه', 'ى' => 'ی']);
}

/** ترجمهٔ یک واژه/عبارت انگلیسی تکی؛ اگر پیدا نشد '' برمی‌گرداند */
function fa_dict_word(string $word, array $dict, array $score): string
{
    $q = strtolower(trim($word));
    $q = trim(preg_replace('/\s+/', ' ', $q));
    if ($q === '') return '';
    if (isset($dict[$q])) return fa_best($dict[$q], $score);

    // حذف پرانتز و نشانه‌ها: "point in time (moment)" -> "point in time"
    $q2 = trim(preg_replace('/[()]/', ' ', $q));
    $q2 = trim(preg_replace('/\s+/', ' ', $q2));
    if ($q2 !== '' && isset($dict[$q2])) return fa_best($dict[$q2], $score);

    // حذف کلمات ربطیِ ابتدای عبارت: "to run" -> "run"، "be able to" -> "able to"
    static $stop = ['to', 'be', 'a', 'an', 'the', 'of', 'in', 'on', 'at', 'for', 'with', 'and', 'or'];
    $words = preg_split('/\s+/', $q2);
    while ($words && in_array($words[0], $stop, true)) {
        array_shift($words);
        $cand = implode(' ', $words);
        if ($cand !== '' && isset($dict[$cand])) return fa_best($dict[$cand], $score);
    }
    // اولین واژهٔ محتوایی که در دیکشنری هست
    foreach ($words as $w) {
        $w = strtolower(trim($w, ".,;:!?'\"-"));
        if ($w === '' || in_array($w, $stop, true)) continue;
        if (isset($dict[$w])) return fa_best($dict[$w], $score);
    }
    return '';
}

/**
 * ترجمهٔ رشتهٔ چندمعنایی انگلیسی (مثل "run, dash") به فارسی؛
 * معناها با «،» فارسی جدا می‌شوند. اگر هیچ معنایی ترجمه نشد '' برمی‌گردد.
 */
function fa_dict_translate(string $en, array $dict, array $score): string
{
    $parts = preg_split('/\s*,\s*/', $en);
    $out = [];
    foreach ($parts as $p) {
        $fa = fa_dict_word($p, $dict, $score);
        if ($fa === '') continue;
        foreach (preg_split('/\s*،\s*/', $fa) as $one) {
            $one = trim($one);
            if ($one !== '' && !in_array($one, $out, true)) {
                $out[] = $one;
            }
        }
        if (count($out) >= 4) break; // ستون کوتاه بماند
    }
    return implode('، ', $out);
}
