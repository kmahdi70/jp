<?php
require_once __DIR__ . '/lang.php';
require_once __DIR__ . '/seo.php';
require_once __DIR__ . '/kanji/prepare.php';

/**
 * فهرست کامل کانجی‌ها (kanji-all.php).
 *
 * همهٔ ردیف‌ها یک‌بار و کامل با PHP رندر می‌شوند (بدون بارگذاری تدریجی) تا هر
 * کانجی — با خوانش و معنی — برای خزنده‌های جست‌وجو در HTML صفحه حاضر باشد.
 * داده‌ها همان دادهٔ kanji.php است (از kanji/prepare.php) تا دو صفحه یکی بمانند.
 */

function jp_kanji_all_e($value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

/* ستون «معنی انگلیسی» فقط در دسته‌هایی می‌آید که این داده را دارند؛ وگرنه ستون
   خالی و بی‌معنی می‌ماند. */
function jp_kanji_all_has_en(array $items): bool
{
    foreach ($items as $item) {
        if (($item['mean_en'] ?? '') !== '') {
            return true;
        }
    }
    return false;
}

function jp_kanji_all_rows(array $items, bool $withEn): string
{
    $out = '';
    foreach ($items as $item) {
        $out .= '<tr>'
            . '<td class="text-center"><span class="kanji-ch">' . jp_kanji_all_e($item['k'] ?? '') . '</span></td>'
            . '<td class="text-center kana-cell" dir="ltr">' . jp_kanji_all_e($item['kun'] ?? '') . '</td>'
            . '<td class="text-center kana-cell" dir="ltr">' . jp_kanji_all_e($item['on'] ?? '') . '</td>'
            . '<td class="V">' . jp_kanji_all_e($item['mean'] ?? '') . '</td>'
            . ($withEn ? '<td class="en-meaning" dir="ltr">' . jp_kanji_all_e($item['mean_en'] ?? '') . '</td>' : '')
            . '</tr>';
    }
    return $out;
}
?>
<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <?php seo_head([
        'title' => 'فهرست کامل کانجی‌های ژویو با خوانش و معنی فارسی',
        'description' => 'همهٔ کانجی‌های ژویو در یک صفحه: خوانش کونیومی و اونیومی، معنی فارسی و انگلیسی، دسته‌بندی‌شده برای مرور و جست‌وجوی سریع.',
        'path' => 'kanji-all.php',
        'nav' => 'فهرست کامل کانجی',
        'jsonld' => [
            '@type' => 'LearningResource',
            'name' => 'فهرست کامل کانجی‌های ژویو',
            'description' => 'همهٔ کانجی‌های ژویو با خوانش کونیومی و اونیومی و معنی فارسی و انگلیسی.',
            'learningResourceType' => 'فهرست',
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
    <link rel="manifest" href="kanji/favicon/site.webmanifest">
    <script defer src="assets/fontawesome/js/all.min.js"></script>
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
            <nav id="docs-nav" class="docs-nav navbar">
                <ul class="section-items list-unstyled nav flex-column pb-3">
                    <li class="nav-item section-title"><a class="nav-link scrollto" href="#section-1"><span class="theme-icon-holder me-2"><i class="fas fa-list-ul"></i></span>فهرست</a></li>
                    <li class="nav-item"><a class="nav-link" href="kanji.php"><i class="fas fa-arrow-left me-2"></i>صفحهٔ کانجی</a></li>
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
                        <h1 class="docs-heading V rtl">فهرست کامل کانجی‌های ژویو <span class="badge bg-success count-badge"><?= $kanji_total ?> کانجی</span></h1>
                    </header>
                    <section class="docs-intro V docs-section rtl">
                        <p class="text-justify">این صفحه همهٔ کانجی‌های سایت را یک‌جا و کامل نشان می‌دهد: دسته‌به‌دسته، با خوانش کونیومی (هیراگانا)، اونیومی (کاتاکانا)، معنی فارسی و انگلیسی. ردیف‌ها با PHP رندر شده‌اند و برای پیدا شدن هر کانجی در جست‌وجوی گوگل در متن صفحه حاضرند.</p>
                        <p class="text-justify">اگر جدول‌های تعاملی، صوت، ترتیب نوشتن یا جست‌وجوی درون‌صفحه‌ای می‌خواهید، از <a href="kanji.php">صفحهٔ کانجی</a> استفاده کنید؛ آن صفحه برای مرور روزمره سبک‌تر است و ردیف‌هایش هنگام اسکرول بخش‌بخش می‌آید.</p>
                    </section>
                </article>
                <?php $i = 2;
                foreach ($kanji_categories as $cat) {
                    $cat_has_en = jp_kanji_all_has_en($cat['items']); ?>
                    <article class="docs-article" id="section-<?= $i ?>">
                        <header class="docs-header">
                            <h2 class="docs-heading V rtl"><?= $cat['title'] ?> <span class="badge bg-success count-badge"><?= count($cat['items']) ?> کانجی</span></h2>
                        </header>
                        <div class="table-responsive my-4">
                            <table class="table table-striped table-sm kanji-all-table rtl">
                                <thead class="V">
                                    <tr>
                                        <th scope="col">کانجی</th>
                                        <th scope="col">کونیومی</th>
                                        <th scope="col">اونیومی</th>
                                        <th scope="col">معنی فارسی</th>
                                        <?php if ($cat_has_en) { ?>
                                            <th scope="col">معنی انگلیسی</th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?= jp_kanji_all_rows($cat['items'], $cat_has_en) ?>
                                </tbody>
                            </table>
                        </div>
                    </article>
                    <?php $i++; ?>
                <?php } ?>
                <?php include("footer.php"); ?>
            </div>
        </div>
    </div>
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/smoothscroll.min.js"></script>
    <script src="assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script>
    <script src="assets/plugins/simplelightbox/simple-lightbox.min.js"></script>
    <script src="assets/js/docs.js"></script>
</body>

</html>
