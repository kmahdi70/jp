<?php

require_once __DIR__ . '/seo.php';

header('Content-Type: text/plain; charset=UTF-8');

echo "User-agent: *\n";
echo "Allow: /\n";
/* صفحه‌های نتیجهٔ جست‌وجوی داخلی و فایل دادهٔ جست‌وجو نباید ایندکس شوند */
echo "Disallow: /search/\n";
echo "Disallow: /*?q=\n";
echo "\n";
echo 'Sitemap: ', seo_url('sitemap.xml'), "\n";
