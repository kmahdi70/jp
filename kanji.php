<?php
require_once __DIR__ . '/lang.php';
require_once __DIR__ . '/seo.php';
require_once __DIR__ . '/kanji/prepare.php';

/* ─────────────────────────────────────────────────────────────
 * ردیف‌های کانجی یک‌بار به‌صورت تابع نوشته می‌شوند تا نمایش اولیه و بخش‌های
 * بعدیِ بارگذاری تدریجی هر دو از همان قالب استفاده کنند و چینش و rowspan
 * دست‌نخورده بماند.
 * ───────────────────────────────────────────────────────────── */
function jp_kanji_e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

/* جدول‌هایی که هر کانجی یک ردیف دارد */
function jp_kanji_rows_plain(array $items): string
{
    $out = '';
    foreach ($items as $item) {
        $k = jp_kanji_e((string) ($item['k'] ?? ''));
        $out .= '<tr data-verb-group="' . $k . '">'
            . '<td class="text-center"><span class="kanji-ch CP" onclick="Copy(this)">' . $k . '</span><input type="text" class="NV"></td>'
            . '<td class="text-center"><button type="button" class="stroke-btn" data-bs-toggle="modal" data-bs-target="#StrokeModal" onclick="StrokeOrder(\'' . $k . '\')" title="ترتیب نوشتن" aria-label="ترتیب نوشتن ' . $k . '"><i class="fas fa-pencil-alt" aria-hidden="true"></i></button></td>'
            . '<td class="text-center"><span class="kana-cell CP" onclick="Copy(this)" dir="ltr">' . jp_kanji_e((string) ($item['kun'] ?? '')) . '</span></td>'
            . '<td class="text-center"><span class="kana-cell CP" onclick="Copy(this)" dir="ltr">' . jp_kanji_e((string) ($item['on'] ?? '')) . '</span></td>'
            . '<td class="V">' . jp_kanji_e((string) ($item['mean'] ?? '')) . '</td>'
            . '<td class="en-meaning">' . jp_kanji_e((string) ($item['mean_en'] ?? '')) . '</td>'
            . '</tr>';
    }
    return $out;
}

/* جدول‌هایی که هر کانجی چند ردیف مثال دارد و سلول‌های اول rowspan می‌گیرند */
function jp_kanji_rows_examples(array $items, int $startIndex = 0): string
{
    $out = '';
    $rowIndex = $startIndex;
    foreach ($items as $item) {
        $groupClass = ($rowIndex % 2 === 0) ? 'kanji-group-light' : 'kanji-group-dark';
        $examples = $item['ex'] ?? [];
        if (!$examples) {
            $examples = [['-', '-', '-']];
        }
        $rowCount = count($examples);
        $first = true;
        $k = jp_kanji_e((string) ($item['k'] ?? ''));
        foreach ($examples as $ex) {
            $out .= '<tr class="' . $groupClass . '" data-verb-group="' . $k . '">';
            if ($first) {
                $first = false;
                $out .= '<td rowspan="' . $rowCount . '" class="text-center">'
                    . '<span class="kanji-ch CP" onclick="Copy(this)">' . $k . '</span><input type="text" class="NV"></td>'
                    . '<td rowspan="' . $rowCount . '" class="text-center">'
                    . '<button type="button" class="stroke-btn" data-bs-toggle="modal" data-bs-target="#StrokeModal" onclick="StrokeOrder(\'' . $k . '\')" title="ترتیب نوشتن" aria-label="ترتیب نوشتن ' . $k . '"><i class="fas fa-pencil-alt" aria-hidden="true"></i></button></td>'
                    . '<td rowspan="' . $rowCount . '" class="text-center"><span class="kana-cell CP" onclick="Copy(this)" dir="ltr">' . ($item['kun'] ?? '') . '</span></td>'
                    . '<td rowspan="' . $rowCount . '" class="text-center"><span class="kana-cell CP" onclick="Copy(this)" dir="ltr">' . ($item['on'] ?? '') . '</span></td>'
                    . '<td rowspan="' . $rowCount . '" class="V">' . ($item['mean'] ?? '') . '</td>';
            }
            $out .= '<td class="text-center"><span class="ex-jp CP" onclick="Copy(this)" dir="ltr">' . ($ex[0] ?? '') . '</span></td>'
                . '<td class="text-center"><span class="ex-ro CP" onclick="Copy(this)" dir="ltr">' . ($ex[1] ?? '') . '</span></td>'
                . '<td class="V ex-tr">' . ($ex[2] ?? '') . '</td>'
                . '</tr>';
        }
        $rowIndex++;
    }
    return $out;
}

/* اندازهٔ بخش اول و اندازهٔ بخش‌های بعدی */
function jp_kanji_chunk_size(int $from): int
{
    return $from === 0 ? 15 : 120;
}

/*
 * بخش بعدی ردیف‌ها: kanji.php?chunk=kanji&group=<index>&from=<n>
 * فقط ردیف‌ها برمی‌گردند (بدون قالب صفحه) تا js/chunks.js آن‌ها را پیش از
 * ردیف نگهبان همان tbody بگذارد.
 */
if (($_GET['chunk'] ?? '') === 'kanji') {
    $chunkCategory = $kanji_categories[(int) ($_GET['group'] ?? -1)] ?? null;
    $chunkFrom = max(0, (int) ($_GET['from'] ?? 0));
    if (!is_array($chunkCategory)) {
        http_response_code(400);
        exit;
    }
    $chunkItems = array_slice($chunkCategory['items'], $chunkFrom, jp_kanji_chunk_size($chunkFrom));
    header('Content-Type: text/html; charset=utf-8');
    /* تکه‌ها صفحهٔ مستقل نیستند؛ نباید جداگانه ایندکس شوند */
    header('X-Robots-Tag: noindex, follow');
    header('X-Jp-From: ' . ($chunkFrom + count($chunkItems)));
    header('X-Jp-Total: ' . count($chunkCategory['items']));
    echo !empty($chunkCategory['no_examples'])
        ? jp_kanji_rows_plain($chunkItems)
        : jp_kanji_rows_examples($chunkItems, $chunkFrom);
    exit;
}
?>
<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <?php seo_head([
        'title' => 'آموزش کانجی ژویو با معنی فارسی، خوانش و روماجی',
        'description' => 'کانجی‌های ژویو با معنی فارسی، خوانش آنی و کونی، روماجی، دستهٔ دستوری، واژه‌های نمونه و جست‌وجوی سراسری در صفحه.',
        'path' => 'kanji.php',
        'nav' => 'کانجی',
        'jsonld' => [
            '@type' => 'LearningResource',
            'name' => 'کانجی‌های ژویو',
            'description' => 'کانجی‌های ژویو با خوانش، معنی فارسی و واژه‌های نمونه.',
            'learningResourceType' => 'درس',
            'educationalLevel' => 'intermediate',
        ],
    ]); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Mahdi Karimian 09123238133">
    <link rel="icon" type="image/png" href="kanji/favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/svg+xml" href="kanji/favicon/favicon.svg">
    <link rel="shortcut icon" href="kanji/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="kanji/favicon/apple-touch-icon.png">
    <meta name="apple-mobile-web-app-title" content="MyWebSite">
    <link rel="manifest" href="kanji/favicon/site.webmanifest">
    <!-- FontAwesome JS-->
    <script defer src="assets/fontawesome/js/all.min.js"></script>
    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/plugins/simplelightbox/simple-lightbox.min.css">
    <link id="theme-style" rel="stylesheet" href="assets/css/theme.css">
    <link rel="stylesheet" href="css/global.css?20261121b">
    <link rel="stylesheet" href="css/kanji.css?20261121a">
</head>

<body class="docs-page">
    <header class="header fixed-top">
        <div class="branding docs-branding">
            <div class="container-fluid position-relative py-2">
                <div class="docs-logo-wrapper">
                    <button id="docs-sidebar-toggler" class="docs-sidebar-toggler docs-sidebar-visible me-2 d-xl-none" type="button">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <div class="site-logo"><a class="navbar-brand" href="./"><img class="logo-icon me-2" src="assets/images/coderdocs-logo.svg" alt="logo"><span class="logo-text">Japan<span class="text-alt">Docs</span></span></a></div>
                </div>
                <div class="docs-top-utilities d-flex justify-content-end align-items-center">
                    <?= jp_header_actions() ?>

                </div>
            </div>
        </div>
    </header>

    <div class="docs-wrapper">
        <div id="docs-sidebar" class="docs-sidebar">
            <div class="top-search-box d-lg-none p-3">
                <form class="search-form">
                    <input type="text" placeholder="Search the docs..." name="search" class="form-control search-input">
                    <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <nav id="docs-nav" class="docs-nav navbar">
                <ul class="section-items list-unstyled nav flex-column pb-3">
                    <li class="nav-item section-title"><a class="nav-link scrollto" href="#section-1"><span class="theme-icon-holder me-2"><i class="fas fa-school"></i></span>Concepts</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-1">What is Kanji?</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-2">Kunyomi &amp; Onyomi</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-3">Table Guide</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#search-all"><i class="fas fa-search me-2"></i>Search</a></li>
                    <li class="nav-item"><a class="nav-link" href="kanji-all.php">فهرست کامل کانجی</a></li>
                    <?php $i = 2;
                    foreach ($kanji_categories as $cat) { ?>
                        <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-<?= $i ?>"><span class="theme-icon-holder me-2"><i class="fas <?= $cat['icon'] ?>"></i></span><?= !empty($cat['school_grade']) ? 'Grade ' . $cat['school_grade'] . ' School' : $cat['title_en'] ?> <span class="badge bg-success ms-2"><?= count($cat['items']) ?></span></a></li>
                        <?php $i++; ?>
                    <?php } ?>
                </ul>
            </nav>
        </div>
        <div class="docs-content">
            <div class="container">
                <article class="docs-article" id="section-1">
                    <header class="docs-header">
                        <h1 class="docs-heading V rtl">
                            راهنمای جامع کانجی
                        </h1>
                    </header>
                    <section class="docs-intro V docs-section rtl">
                        <p class="text-justify">همهٔ کانجی‌ها یک‌جا: <a href="kanji-all.php">فهرست کامل کانجی</a></p>
                        <ol>
                            <li class="text-justify"><strong>کانجی چیست:</strong> کانجی (漢字) کاراکترهای تصویری ژاپن هستند که از زبان چینی وارد شده‌اند. برخلاف هیراگانا و کاتاکانا، هر کانجی یک معنی (یا چند معنی مرتبط) دارد و خواندن‌های متفاوتی می‌تواند داشته باشد.</li>
                            <li class="text-justify"><strong>دسته‌بندی:</strong> کانجی‌های پایه در دسته‌های موضوعی و از آسان به سخت چیده شده‌اند: اعداد، شمارنده‌های رایج، تقویم (روز، هفته، ماه، سال)، ساعت و زمان، جهت‌ها و اندازه‌ها، رنگ‌ها، کلاس اول دبستان، انسان و خانواده، طبیعت، غذا و نوشیدنی، حیوانات و افعال پایه. می‌توانید بعداً دسته‌بندی را تغییر دهید یا دسته جدید اضافه کنید.</li>
                            <li class="text-justify"><strong>جدول:</strong> هر دسته یک جدول با ستون‌های «خود کانجی، کونیومی (هیراگانا)، اونیومی (کاتاکانا)، معنی، مثال (کانجی)، هیراگانا و معنیِ مثال» دارد؛ هر مثال در یک ردیف جداگانه نمایش داده می‌شود.</li>
                            <li class="text-justify"><strong>روش پیشنهادی:</strong> کانجی را به‌تنهایی حفظ نکنید؛ هر کانجی را همراه با یکی از مثال‌های آن یاد بگیرید. کانجی‌هایی که در چند دسته تکرار می‌شوند، برای مرور بیشتر هستند.</li>
                            <li class="text-justify"><strong>تمرین:</strong> بعد از هر دسته، جدول را ببندید و سعی کنید خواندن و معنی را به یاد بیاورید؛ هرچه تلاش برای یادآوری بیشتر باشد، حافظه قوی‌تر می‌شود.</li>
                        </ol>
                        <div class="callout-block callout-block-info rtl">
                            <div class="content">
                                <h4 class="callout-title">
                                    <span class="callout-icon-holder me-1">
                                        <i class="fas fa-thumbs-up"></i>
                                    </span>
                                    Tip
                                </h4>
                                <ul>
                                    <li>روی هر کانجی کلیک کنید تا در کلیپ‌بورد کپی شود.</li>
                                    <li>ستون کونیومی با هیراگانا و ستون اونیومی با کاتاکانا نوشته شده است.</li>
                                    <li>ترتیب دسته‌ها بر اساس سطح دشواری است؛ اگر دسته یا کانجی‌ای مد نظرتان هست بگویید تا اضافه شود.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-6 text-center">
                                <img loading="lazy" decoding="async" src="kanji/pic/kanji.jpg" class="figure-img img-fluid shadow rounded" alt="Kanji">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section rtl V" id="item-1-1">
                        <h2 class="section-heading V rtl">کانجی چیست؟</h2>
                        <p class="text-justify">کانجی‌ها کاراکترهای معنادار زبان ژاپن هستند. هر کانجی می‌تواند به‌تنهایی یک کلمه بسازد (مانند 山 = کوه) یا با کانجی‌های دیگر ترکیب شود و کلمه جدیدی بسازد (مانند 山川 = کوه و رود، 火山 = کوه آتشفشانی). تعداد کانجی‌های پرکاربرد روزمره حدود ۲۰۰۰ تاست که حدود ۱۰۰۰ آن برای محاوره عادی کافی است.</p>
                        <p class="text-justify">پیشنهاد می‌شود یادگیری را با کانجی‌هایی شروع کنید که در زندگی روزمره زیاد می‌بینید: اعداد، روزهای هفته، ساعت و جهت‌ها.</p>
                    </section>
                    <section class="docs-section rtl V" id="item-1-2">
                        <h2 class="section-heading V rtl">کونیومی و اونیومی</h2>
                        <p class="text-justify">هر کانجی دو نوع خواندن اصلی دارد:</p>
                        <div class="table-responsive my-4">
                            <table class="table table-striped rtl">
                                <thead class="V">
                                    <tr>
                                        <th scope="col">نوع خواندن</th>
                                        <th scope="col">نشان‌داده‌شده با</th>
                                        <th scope="col">توضیح</th>
                                        <th scope="col">مثال (日)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>کونیومی</strong> (訓読み)</td>
                                        <td>هیراگانا</td>
                                        <td class="V">خواندن ژاپنیِ قدیمی کاراکتر، قبل از ورود زبان چینی</td>
                                        <td>ひ、き</td>
                                    </tr>
                                    <tr>
                                        <td><strong>اونیومی</strong> (音読み)</td>
                                        <td>کاتاکانا</td>
                                        <td class="V">خواندن چینیِ کاراکتر که همراه با واژه به ژاپن آمده است</td>
                                        <td>ニチ、ジツ</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="text-justify">به همین دلیل در جدول‌های این صفحه، کونیومی با هیراگانا و اونیومی با کاتاکانا نوشته شده است تا تفاوت آن‌ها روشن باشد. اگر کانجی چند خواندن داشته باشد، همهٔ آن‌ها با علامت ・ از هم جدا شده‌اند (مثلاً 日 خواندن‌های ひ・か در کونیومی و ニチ・ジツ در اونیومی دارد). بعضی کانجی‌ها فقط یک نوع خواندن دارند؛ در این حالت همان یک مقدار را می‌بینید.</p>
                    </section>
                    <section class="docs-section rtl V" id="item-1-3">
                        <h2 class="section-heading V rtl">راهنمای جدول</h2>
                        <div class="table-responsive my-4">
                            <table class="table table-striped rtl">
                                <thead class="V">
                                    <tr>
                                        <th scope="col">ستون</th>
                                        <th scope="col">محتوا</th>
                                        <th scope="col">مثال</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="V"><strong>کانجی</strong></td>
                                        <td class="V">خود کاراکتر (برای کپی روی آن کلیک کنید)</td>
                                        <td><span class="kanji-ch CP" onclick="Copy(this)">日</span></td>
                                    </tr>
                                    <tr>
                                        <td class="V"><strong>کونیومی</strong></td>
                                        <td class="V">خواندن ژاپنی</td>
                                        <td>ひ</td>
                                    </tr>
                                    <tr>
                                        <td class="V"><strong>اونیومی</strong></td>
                                        <td class="V">خواندن چینی</td>
                                        <td>ニチ</td>
                                    </tr>
                                    <tr>
                                        <td class="V"><strong>معنی</strong></td>
                                        <td class="V">معنی فارسی کانجی</td>
                                        <td class="V">روز، خورشید</td>
                                    </tr>
                                    <tr>
                                        <td class="V"><strong>مثال</strong></td>
                                        <td class="V">کلمهٔ ژاپنی ساخته‌شده با این کانجی</td>
                                        <td>日曜日</td>
                                    </tr>
                                    <tr>
                                        <td class="V"><strong>هیراگانا (مثال)</strong></td>
                                        <td class="V">خواندن کلمهٔ مثال</td>
                                        <td>にちようび</td>
                                    </tr>
                                    <tr>
                                        <td class="V"><strong>معنی مثال</strong></td>
                                        <td class="V">معنی فارسی کلمهٔ مثال؛ هر مثال یک ردیف جدا</td>
                                        <td class="V">یکشنبه</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                                    <section class="docs-section rtl V" id="search-all">
                        <h2 class="section-heading V rtl">جستجو در کل کانجی‌های صفحه</h2>
                        <p class="text-justify">با نوشتن عبارت در کادر زیر، همهٔ جدول‌های کانجی یک‌جا جست‌وجو می‌شوند: خود کانجی، کونیومی، اونیومی، معنی فارسی و معنی انگلیسی. جدول‌هایی که موردی ندارند پنهان می‌شوند و شمارنده تعداد کانجی‌های پیدا‌شده را نشان می‌دهد.</p>
                        <div class="joyo-tools joyo-tools-all">
                            <div class="joyo-search">
                                <svg class="joyo-search-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                    <circle cx="11" cy="11" r="7"></circle>
                                    <line x1="16.5" y1="16.5" x2="21" y2="21"></line>
                                </svg>
                                <input type="text" id="kanjiFilterAll" class="form-control kanji-filter-all" placeholder="عبارت را بنویسید (کانجی، خواندن یا معنی)..." oninput="FilterAllKanji(this)" aria-label="جستجو در کل کانجی‌های صفحه">
                            </div>
                            <span id="kanjiCountAll" class="joyo-count"><?= $kanji_total ?> / <?= $kanji_total ?></span>
                        </div>
                        <p id="kanjiEmptyAll" class="joyo-empty">کانجی‌ای با این عبارت در هیچ‌کدام از جدول‌ها پیدا نشد.</p>
                    </section>
                </article>
                <?php $i = 2;
                foreach ($kanji_categories as $catIndex => $cat) { ?>
                    <article class="docs-article" id="section-<?= $i ?>">
                        <header class="docs-header">
                            <h2 class="docs-heading V rtl">
                                <?= $cat['title'] ?> <span class="badge bg-success count-badge"><?= count($cat['items']) ?> کانجی</span>
                            </h2>
                            <div class="alert alert-info rtl V mb-4" role="alert">
                                <?= $cat['desc'] ?>
                            </div>
                        </header>
                        <section class="docs-section" id="item-<?= $i ?>-1">
                            <div class="joyo-tools">
                                <div class="joyo-search">
                                    <svg class="joyo-search-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                        <circle cx="11" cy="11" r="7"></circle>
                                        <line x1="16.5" y1="16.5" x2="21" y2="21"></line>
                                    </svg>
                                    <input type="text" id="kanjiFilter-<?= $i ?>" class="form-control kanji-table-filter" placeholder="جست‌وجو در این جدول..." oninput="FilterKanjiTable(this, 'kanjiTable-<?= $i ?>', 'kanjiCount-<?= $i ?>')">
                                </div>
                                <span id="kanjiCount-<?= $i ?>" class="joyo-count"><?= count($cat['items']) ?> / <?= count($cat['items']) ?></span>
                            </div>
                            <div class="table-responsive my-4">
                                <table class="table table-striped kanji-table rtl<?= !empty($cat['no_examples']) ? ' kanji-table-plain' : '' ?>" id="kanjiTable-<?= $i ?>">
                                    <thead class="V">
                                        <?php if (!empty($cat['no_examples'])) { ?>
                                            <tr>
                                                <th scope="col" width="90">کانجی</th>
                                                <th scope="col" class="stroke-col"><i class="fas fa-pencil-alt" aria-hidden="true"></i><span class="sr-only">ترتیب نوشتن</span></th>
                                                <th scope="col">کونیومی</th>
                                                <th scope="col">اونیومی</th>
                                                <th scope="col">معنی فارسی</th>
                                                <th scope="col">معنی انگلیسی</th>
                                            </tr>
                                        <?php } else { ?>
                                            <tr>
                                                <th scope="col" width="90">کانجی</th>
                                                <th scope="col" class="stroke-col"><i class="fas fa-pencil-alt" aria-hidden="true"></i><span class="sr-only">ترتیب نوشتن</span></th>
                                                <th scope="col">کونیومی</th>
                                                <th scope="col">اونیومی</th>
                                                <th scope="col">معنی</th>
                                                <th scope="col">مثال</th>
                                                <th scope="col">هیراگانا</th>
                                                <th scope="col">معنی مثال</th>
                                            </tr>
                                        <?php } ?>
                                    </thead>
                                    <tbody>
                                        <?php
                                        /* بخش اول همین‌جا رندر می‌شود؛ بقیه با js/chunks.js می‌آید */
                                        $kanji_items_total = count($cat['items']);
                                        $kanji_items_init = min($kanji_items_total, jp_kanji_chunk_size(0));
                                        $kanji_items_head = array_slice($cat['items'], 0, $kanji_items_init);
                                        echo !empty($cat['no_examples'])
                                            ? jp_kanji_rows_plain($kanji_items_head)
                                            : jp_kanji_rows_examples($kanji_items_head, 0);
                                        if ($kanji_items_total > $kanji_items_init): ?>
                                            <tr class="jp-chunk-sentinel" data-endpoint="kanji.php" data-kind="kanji" data-group="<?= $catIndex ?>" data-from="<?= $kanji_items_init ?>" data-total="<?= $kanji_items_total ?>">
                                                <td colspan="<?= !empty($cat['no_examples']) ? 6 : 8 ?>" class="jp-chunk-cell"><a class="jp-chunk-note" href="kanji-all.php#section-<?= $i ?>" aria-label="فهرست کامل کانجی" title="فهرست کامل کانجی">…</a></td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php if ($kanji_items_total > $kanji_items_init): ?>
                                <noscript>
                                    <p class="jp-noscript-note">جاوااسکریپت خاموش است؛ بقیهٔ ردیف‌های این جدول یک‌جا در این صفحه هست: <a href="kanji-all.php#section-<?= $i ?>">فهرست کامل کانجی</a></p>
                                </noscript>
                            <?php endif; ?>
                        </section>
                    </article>
                    <?php $i++; ?>
                <?php } ?>
                
                <?php
                include("footer.php");
                ?>
            </div>
        </div>
    </div>
    <!-- مودال ترتیب نوشتن کانجی -->
    <div class="modal fade" id="StrokeModal" tabindex="-1" aria-labelledby="StrokeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="StrokeModalLabel">ترتیب نوشتن</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="بستن"></button>
                </div>
                <div class="modal-body text-center">
                    <div id="StrokeBox" class="stroke-box"></div>
                    <p id="StrokeEmpty" class="stroke-empty mb-0" hidden>برای این کانجی فایل ترتیب نوشتن موجود نیست.</p>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/smoothscroll.min.js"></script>
    <script src="assets/plugins/simplelightbox/simple-lightbox.min.js"></script>
    <script src="assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script>
    <script src="assets/js/docs.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/chunks.js"></script>
    <script src="js/search-clear.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script>
        /* ترتیب نوشتن: برای هر کاراکتر GIF مربوط را از پوشهٔ kanji/media نشان می‌دهد
           نام فایل برابر کد یونیکد کاراکتر است (مثلاً 日 → 65e5.gif) */
        function StrokeOrder(chars) {
            var box = document.getElementById('StrokeBox');
            var empty = document.getElementById('StrokeEmpty');
            var label = document.getElementById('StrokeModalLabel');
            box.innerHTML = '';
            empty.hidden = true;
            label.textContent = <?= json_encode(jp_t('ترتیب نوشتن') . ' ', JSON_UNESCAPED_UNICODE) ?> + chars;
            Array.from(chars).forEach(function(ch) {
                var img = document.createElement('img');
                img.className = 'stroke-gif';
                img.width = 150;
                img.height = 150;
                img.loading = 'lazy';
                img.decoding = 'async';
                img.alt = <?= json_encode(jp_t('ترتیب نوشتن') . ' ', JSON_UNESCAPED_UNICODE) ?> + ch;
                img.onerror = function() {
                    img.remove();
                    if (!box.children.length) empty.hidden = false;
                };
                img.src = 'kanji/media/' + ch.codePointAt(0).toString(16) + '.gif';
                box.appendChild(img);
            });
        }

        function ClickAudio(obj) {
            $(obj).next("audio")[0].play();
        }

        function AddAct(obj) {
            $(obj).addClass("Act");
            ClickAudio(obj);
        }

        function RemoveAct(obj) {
            $(obj).removeClass("Act");
        }



        /* گروه‌های هر جدول: هر کانجی یک گروه است و ردیف‌های مثالش با هم می‌آیند */
        function KanjiGroups(table) {
            var groups = new Map();
            table.querySelectorAll('tbody tr:not(.jp-chunk-sentinel)').forEach(function(row) {
                var key = row.dataset.verbGroup || row;
                if (!groups.has(key)) groups.set(key, {
                    rows: [],
                    text: ''
                });
                var group = groups.get(key);
                group.rows.push(row);
                group.text += ' ' + row.textContent.toLowerCase();
            });
            return groups;
        }

        async function FilterKanjiTable(input, tableId, countId) {
            /* جست‌وجوی سراسری را خالی کن تا با فیلتر این جدول قاطی نشود */
            var all = document.getElementById('kanjiFilterAll');
            if (all && all.value !== '') {
                all.value = '';
                FilterAllKanji(all);
            }
            var table = document.getElementById(tableId);
            /* فیلتر روی کل ردیف‌هاست؛ پس بخش‌های نرسیده اول گرفته می‌شوند */
            if (window.JpChunks) {
                await JpChunks.all(table);
            }
            var q = (input.value || '').trim().toLowerCase();
            var groups = KanjiGroups(table);
            var shown = 0;
            groups.forEach(function(group) {
                var hit = q === '' || group.text.indexOf(q) !== -1;
                group.rows.forEach(function(row) {
                    row.style.display = hit ? '' : 'none';
                });
                if (hit) shown++;
            });
            document.getElementById(countId).textContent = shown + ' / ' + groups.size;
        }

        /* جست‌وجوی سراسری: عبارت را در همهٔ جدول‌های کانجی صفحه می‌گردد */
        async function FilterAllKanji(input) {
            /* جست‌وجوی سراسری باید همهٔ جدول‌ها را ببیند */
            if (window.JpChunks) {
                await JpChunks.all(document);
            }
            var q = (input.value || '').trim().toLowerCase();
            var articles = document.querySelectorAll('.docs-article[id^="section-"]');
            var total = 0;
            var shownTotal = 0;
            for (var a = 0; a < articles.length; a++) {
                var article = articles[a];
                var tables = article.querySelectorAll('table.kanji-table');
                if (!tables.length) continue;
                var articleTotal = 0;
                var articleShown = 0;
                for (var t = 0; t < tables.length; t++) {
                    var groups = KanjiGroups(tables[t]);
                    groups.forEach(function(group) {
                        var hit = q === '' || group.text.indexOf(q) !== -1;
                        group.rows.forEach(function(row) {
                            row.style.display = hit ? '' : 'none';
                        });
                        if (hit) articleShown++;
                    });
                    articleTotal += groups.size;
                }
                /* کادر جست‌وجوی خودِ جدول کنار برود؛ نتیجهٔ سراسری حاکم است */
                var ownBox = article.querySelector('.kanji-table-filter');
                if (ownBox && ownBox.value !== '') ownBox.value = '';
                var countEl = article.querySelector('.joyo-count');
                if (countEl) countEl.textContent = articleShown + ' / ' + articleTotal;
                article.style.display = (q !== '' && articleShown === 0) ? 'none' : '';
                total += articleTotal;
                shownTotal += articleShown;
            }
            var totalEl = document.getElementById('kanjiCountAll');
            if (totalEl) totalEl.textContent = shownTotal + ' / ' + total;
            var emptyEl = document.getElementById('kanjiEmptyAll');
            if (emptyEl) emptyEl.style.display = (q !== '' && shownTotal === 0) ? 'block' : 'none';
        }
        document.addEventListener('keydown', function(event) {
            if (event.key !== 'Escape') return;
            var input = event.target.closest('.kanji-table-filter, .kanji-filter-all');
            if (!input || input.value === '') return;
            input.value = '';
            input.dispatchEvent(new Event('input', {
                bubbles: true
            }));
        });
    </script>
    <input type="text" id="Copy" size="2" style="visibility: hidden;">
</body>

</html>