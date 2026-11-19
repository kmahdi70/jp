<?php

/**
 * سئوی مشترک همهٔ صفحه‌ها: عنوان، توضیحات، canonical، Open Graph، Twitter و دادهٔ ساختاریافته.
 *
 * آدرس پایه همان دامنهٔ رسمی سایت است؛ canonical، Open Graph و sitemap از همین ساخته می‌شوند.
 * اگر سایت به دامنهٔ دیگری منتقل شد، فقط همین یک خط را عوض کنید.
 */

if (!defined('SEO_BASE_URL')) {
    define('SEO_BASE_URL', 'https://mahdikarimian.ir/jp');
}

if (!defined('SEO_SITE_NAME')) {
    define('SEO_SITE_NAME', 'JapanDocs');
}
if (!defined('SEO_SITE_TITLE')) {
    define('SEO_SITE_TITLE', 'آموزش زبان ژاپنی JapanDocs');
}
if (!defined('SEO_DEFAULT_IMAGE')) {
    define('SEO_DEFAULT_IMAGE', 'assets/images/og-image.png');
}

/* شناسهٔ همان شخصِ سایت اصلی تا گوگل درس‌ها و سایت شخصی را یک نویسنده بداند */
if (!defined('SEO_PERSON_ID')) {
    define('SEO_PERSON_ID', 'https://mahdikarimian.ir/#person');
}

/** آدرس کامل یک صفحهٔ سایت */
function seo_url(string $path = ''): string
{
    return rtrim(SEO_BASE_URL, '/') . '/' . ltrim($path, '/');
}

/** خروجی امن برای متن‌های داخل attribute */
function seo_e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

/**
 * چاپ همهٔ تگ‌های سئو در <head>.
 *
 * $o = [
 *   'title'       => عنوان صفحه (الزامی),
 *   'description' => توضیحات متا (الزامی),
 *   'path'        => مسیر نسبی صفحه مثل 'words.php' (برای صفحهٔ اصلی خالی),
 *   'nav'         => نام کوتاه فارسی صفحه برای BreadcrumbList،
 *   'type'        => نوع og:type ('website' یا 'article'),
 *   'robots'      => برای صفحه‌های نتیجهٔ جست‌وجو: 'noindex, follow',
 *   'image'       => تصویر اشتراک‌گذاری،
 *   'site'        => true فقط در صفحهٔ اصلی (WebSite + SearchAction)،
 *   'jsonld'      => یک یا چند موجودیت schema.org برای همین صفحه،
 * ];
 */
function seo_head(array $o): void
{
    $home  = seo_url('');
    $title = (string) ($o['title'] ?? SEO_SITE_TITLE);
    $desc  = (string) ($o['description'] ?? '');
    $path  = (string) ($o['path'] ?? '');
    /* زبان فعلی بخش ژاپنی: در حالت انگلیسی canonical و locale عوض می‌شود */
    $lang   = function_exists('jp_lang') ? jp_lang() : 'fa';
    $isEn   = ($lang === 'en');
    $locale = $isEn ? 'en_US' : 'fa_IR';
    $inLang = $isEn ? 'en' : 'fa-IR';

    $url   = seo_url($path) . ($isEn ? '?lang=en' : '');
    $type  = (string) ($o['type'] ?? 'article');
    $image = seo_url((string) ($o['image'] ?? SEO_DEFAULT_IMAGE));
    $nav    = (string) ($o['nav'] ?? '');
    $robots = (string) ($o['robots'] ?? '');

    $lines   = [];
    $lines[] = '<title>' . seo_e($title) . '</title>';
    $lines[] = '<meta name="description" content="' . seo_e($desc) . '">';
    $lines[] = '<link rel="canonical" href="' . seo_e($url) . '">';
    /* هر دو نسخهٔ زبانی به هم معرفی می‌شوند تا محتوای تکراری حساب نشود */
    $lines[] = '<link rel="alternate" hreflang="fa" href="' . seo_e(seo_url($path)) . '">';
    $lines[] = '<link rel="alternate" hreflang="en" href="' . seo_e(seo_url($path) . '?lang=en') . '">';
    $lines[] = '<link rel="alternate" hreflang="x-default" href="' . seo_e(seo_url($path)) . '">';
    $lines[] = '<meta name="robots" content="' . seo_e($robots !== '' ? $robots : 'index, follow, max-image-preview:large, max-snippet:-1') . '">';
    $lines[] = '<meta property="og:locale" content="' . $locale . '">';
    $lines[] = '<meta property="og:locale:alternate" content="' . ($isEn ? 'fa_IR' : 'en_US') . '">';
    $lines[] = '<meta property="og:type" content="' . seo_e($type) . '">';
    $lines[] = '<meta property="og:site_name" content="' . seo_e(SEO_SITE_NAME) . '">';
    $lines[] = '<meta property="og:title" content="' . seo_e($title) . '">';
    $lines[] = '<meta property="og:description" content="' . seo_e($desc) . '">';
    $lines[] = '<meta property="og:url" content="' . seo_e($url) . '">';
    $lines[] = '<meta property="og:image" content="' . seo_e($image) . '">';
    $lines[] = '<meta property="og:image:type" content="image/png">';
    $lines[] = '<meta property="og:image:width" content="1200">';
    $lines[] = '<meta property="og:image:height" content="630">';
    $lines[] = '<meta property="og:image:alt" content="JapanDocs — آموزش زبان ژاپنی از صفر تا مکالمه">';
    $lines[] = '<meta name="twitter:card" content="summary_large_image">';
    $lines[] = '<meta name="twitter:title" content="' . seo_e($title) . '">';
    $lines[] = '<meta name="twitter:description" content="' . seo_e($desc) . '">';
    $lines[] = '<meta name="twitter:image" content="' . seo_e($image) . '">';
    $lines[] = '<meta name="twitter:image:alt" content="JapanDocs — آموزش زبان ژاپنی از صفر تا مکالمه">';

    $graph   = [];
    $graph[] = [
        '@type'  => 'Organization',
        '@id'    => $home . '#organization',
        'name'   => 'MK70',
        'url'    => rtrim(seo_url(''), '/'),
        'logo'   => seo_url('assets/images/logo.jpg'),
        'sameAs' => [
            'https://t.me/LearnKyokushin',
            'https://facebook.com/kmahdi70',
            'https://www.linkedin.com/in/mkarimian70/',
            'https://instagram.com/kmahdi70',
        ],
    ];

    /* موجودیت سایت در همهٔ صفحه‌ها اعلام می‌شود تا هر درس به سایت مرجع وصل باشد */
    $website = [
        '@type'       => 'WebSite',
        '@id'         => $home . '#website',
        'url'         => $home,
        'name'        => SEO_SITE_TITLE,
        'description' => $desc,
        'inLanguage'  => $inLang,
        'publisher'   => ['@id' => $home . '#organization'],
    ];

    /* فقط در صفحهٔ اصلی: جست‌وجوی داخلی به‌عنوان SearchAction معرفی می‌شود */
    if (!empty($o['site'])) {
        $website['potentialAction'] = [
            [
                '@type'       => 'SearchAction',
                'target'      => [
                    '@type'       => 'EntryPoint',
                    'urlTemplate' => seo_url('index.php') . '?q={search_term_string}',
                ],
                'query-input' => 'required name=search_term_string',
            ],
        ];
    }

    $graph[] = $website;

    /* نویسندهٔ محتوا؛ به‌عنوان author همهٔ درس‌ها استفاده می‌شود */
    $graph[] = [
        '@type'         => 'Person',
        '@id'           => SEO_PERSON_ID,
        'name'          => 'Mahdi Karimian',
        'alternateName' => 'MK70',
        'url'           => 'https://mahdikarimian.ir/',
        'jobTitle'      => 'Japanese language teacher, software engineer and Kyokushin karate instructor',
        'sameAs'        => [
            'https://t.me/LearnKyokushin',
            'https://instagram.com/kmahdi70',
            'https://www.linkedin.com/in/mkarimian70/',
        ],
    ];

    if (!empty($o['jsonld'])) {
        $entities = isset($o['jsonld']['@type']) ? [$o['jsonld']] : $o['jsonld'];
        foreach ($entities as $entity) {
            if (!is_array($entity)) {
                continue;
            }
            $entity += [
                'url'       => $url,
                'publisher' => ['@id' => $home . '#organization'],
                'author'    => ['@id' => SEO_PERSON_ID],
                'isPartOf'  => ['@id' => $home . '#website'],
            ];
            if (!isset($entity['inLanguage'])) {
                $entity['inLanguage'] = $inLang;
            }
            $graph[] = $entity;
        }
    }

    if ($nav !== '') {
        $graph[] = [
            '@type'           => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'خانه', 'item' => $home],
                ['@type' => 'ListItem', 'position' => 2, 'name' => $nav, 'item' => $url],
            ],
        ];
    }

    $lines[] = '<script type="application/ld+json">' . json_encode(
        ['@context' => 'https://schema.org', '@graph' => $graph],
        JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
    ) . '</script>';

    echo implode("\n    ", $lines);
}
