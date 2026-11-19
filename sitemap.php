<?php

require_once __DIR__ . '/seo.php';

header('Content-Type: application/xml; charset=UTF-8');

/* مسیر صفحه => [priority, changefreq] */
$pages = [
    ''                     => ['1.0', 'weekly'],
    'hiragana.php'         => ['0.9', 'weekly'],
    'katakana.php'         => ['0.9', 'weekly'],
    'kanji.php'            => ['0.9', 'weekly'],
    'words.php'            => ['0.9', 'weekly'],
    'grammar.php'          => ['0.9', 'weekly'],
    'podcasts.php'         => ['0.8', 'weekly'],
    'hiragana_summary.php' => ['0.6', 'monthly'],
    'katakana_summary.php' => ['0.6', 'monthly'],
];

echo '<?xml version="1.0" encoding="UTF-8"?>', "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">', "\n";

foreach ($pages as $path => $meta) {
    $file = $path === '' ? 'index.php' : $path;
    $time = @filemtime(__DIR__ . '/' . $file) ?: time();

    echo '  <url>', "\n";
    echo '    <loc>', seo_e(seo_url($path)), '</loc>', "\n";
    echo '    <lastmod>', date('Y-m-d', $time), '</lastmod>', "\n";
    echo '    <changefreq>', $meta[1], '</changefreq>', "\n";
    echo '    <priority>', $meta[0], '</priority>', "\n";
    echo '  </url>', "\n";
}

echo '</urlset>', "\n";
