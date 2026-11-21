<?php
require_once __DIR__ . '/lang.php';
require_once __DIR__ . '/seo.php';
include __DIR__ . '/words/data.php';

/**
 * فهرست کامل واژه‌ها (words-all.php).
 *
 * همهٔ واژه‌ها یک‌بار و کامل با PHP رندر می‌شوند (بدون بارگذاری تدریجی) تا هر
 * واژه با کانا، روماجی و معنی برای خزنده‌های جست‌وجو در HTML صفحه حاضر باشد.
 * همان داده و همان قالب سطر صفحهٔ words.php است.
 */

/* شمار کل واژه‌ها */
$words_total = 0;
foreach ($word_sections as $ws) {
    $words_total += count($ws['words']);
}

function jp_words_all_rows(array $words): string
{
    $out = '';
    foreach ($words as $w) {
        $spoken = $w[0] !== '' ? $w[0] : $w[1];
        $out .= '<li><span class="jp" dir="ltr">' . $spoken . '</span>'
            . '<span class="kana" dir="ltr">' . $w[1] . '</span>'
            . '<span class="romaji" dir="ltr">' . $w[2] . '</span>'
            . '<span class="meaning">' . $w[3] . '</span></li>';
    }
    return $out;
}
?>
<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <?php seo_head([
        'title' => 'فهرست کامل ۵۰۰۰ واژهٔ پرکاربرد ژاپنی با معنی فارسی',
        'description' => 'همهٔ ۵۰۰۰ واژهٔ روزمرهٔ ژاپنی در یک صفحه: کانجی، کانا، روماجی و معنی فارسی، دسته‌بندی‌شده در پانزده بخش.',
        'path' => 'words-all.php',
        'nav' => 'فهرست کامل واژه‌ها',
        'jsonld' => [
            '@type' => 'LearningResource',
            'name' => 'فهرست کامل واژه‌های ژاپنی',
            'description' => 'همهٔ ۵۰۰۰ واژهٔ روزمرهٔ ژاپنی با کانجی، کانا، روماجی و معنی فارسی.',
            'learningResourceType' => 'فهرست واژه',
            'educationalLevel' => 'beginner',
        ],
    ]); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Mahdi Karimian 09123238133">
    <link rel="icon" type="image/png" href="words/favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/svg+xml" href="words/favicon/favicon.svg">
    <link rel="shortcut icon" href="words/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="words/favicon/apple-touch-icon.png">
    <link rel="manifest" href="words/favicon/site.webmanifest">
    <script defer src="assets/fontawesome/js/all.min.js"></script>
    <link rel="stylesheet" href="assets/plugins/simplelightbox/simple-lightbox.min.css">
    <link id="theme-style" rel="stylesheet" href="assets/css/theme.css">
    <link rel="stylesheet" href="css/global.css?20261121c">
    <link rel="stylesheet" href="css/words.css?20261120a">
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
                    <li class="nav-item"><a class="nav-link" href="words.php"><i class="fas fa-arrow-left me-2"></i>صفحهٔ واژه‌ها</a></li>
                    <?php
                    $wi = 0;
                    foreach ($word_sections as $sec) {
                        $wi++;
                    ?>
                        <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#item-2-<?= $wi ?>"><span class="theme-icon-holder me-2"><i class="fas fa-caret-left"></i></span><?= $sec['title'] ?> <span class="badge bg-success ms-2"><?= count($sec['words']) ?></span></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </nav>
        </div>
        <div class="docs-content">
            <div class="container">
                <article class="docs-article" id="section-1">
                    <header class="docs-header">
                        <h1 class="docs-heading V rtl">فهرست کامل واژه‌های ژاپنی <span class="badge bg-success count-badge"><?= $words_total ?> واژه</span></h1>
                    </header>
                    <section class="docs-intro V docs-section rtl">
                        <p class="text-justify">این صفحه همهٔ واژه‌های سایت را یک‌جا و کامل نشان می‌دهد: پانزده بخش، هر واژه با کانجی یا کانا، خواندن کانا، روماجی و معنی فارسی. ردیف‌ها با PHP رندر شده‌اند و برای پیدا شدن هر واژه در جست‌وجوی گوگل در متن صفحه حاضرند.</p>
                        <p class="text-justify">برای جست‌وجوی درون‌صفحه‌ای، پخش تلفظ و فهرست بخش‌به‌بخش از <a href="words.php">صفحهٔ واژه‌ها</a> استفاده کنید؛ آن صفحه برای مرور روزمره سبک‌تر است و ردیف‌هایش هنگام اسکرول بخش‌بخش می‌آید.</p>
                    </section>
                </article>
                <?php
                $wi = 0;
                foreach ($word_sections as $sec) {
                    $wi++;
                ?>
                    <section class="docs-section rtl V" id="item-2-<?= $wi ?>">
                        <h2 class="section-heading V rtl"><?= $sec['title'] ?> <span class="Note">(<?= count($sec['words']) ?> واژه)</span></h2>
                        <ul class="word-list">
                            <?= jp_words_all_rows($sec['words']) ?>
                        </ul>
                    </section>
                <?php
                }
                ?>
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
