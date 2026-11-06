<?php
require_once __DIR__ . '/search/lib.php';

/* جست‌وجوی سراسری صفحهٔ اصلی روی شش بخش سایت */
$search_q = isset($_GET['q']) ? trim((string) $_GET['q']) : '';
$search_results = $search_q !== '' ? jp_sr_search($search_q) : null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Learn Japanese</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Learn Japanese">
    <meta name="author" content="Mahdi Karimian 09123238133">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/svg+xml" href="favicon/favicon.svg">
    <link rel="shortcut icon" href="favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <meta name="apple-mobile-web-app-title" content="JP">
    <link rel="manifest" href="favicon/site.webmanifest">
    <!-- Google Font -->
    <!--    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
-->
    <!-- FontAwesome JS-->
    <script defer src="assets/fontawesome/js/all.min.js"></script>

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/theme.css">
    <link rel="stylesheet" href="css/global.css?<?= rand(1,1000)?>">

</head>

<body>
    <header class="header fixed-top">

        <div class="branding docs-branding">
            <div class="container-fluid position-relative py-2">
                <div class="docs-logo-wrapper">
                    <div class="site-logo"><a class="navbar-brand" href="./"><img class="logo-icon me-2" width="65" src="assets/images/logo.jpg" alt="logo"><span class="logo-text">Japan<span class="text-alt">Docs</span></span></a></div>
                </div><!--//docs-logo-wrapper-->
                <div class="docs-top-utilities d-flex justify-content-end align-items-center">
                    <ul class="social-list list-inline mx-md-3 mx-lg-5 mb-0 d-none d-lg-flex">
                        <li class="list-inline-item"><a href="#"><i class="fa-brands fa-github fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa-brands fa-x-twitter fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa-brands fa-slack fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa-brands fa-product-hunt fa-fw"></i></a></li>
                    </ul><!--//social-list-->
                    <!-- <a href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/coderdocs-free-bootstrap-5-documentation-template-for-software-projects/" class="btn btn-primary d-none d-lg-flex">Download</a> -->
                </div><!--//docs-top-utilities-->
            </div><!--//container-->
        </div><!--//branding-->
    </header><!--//header-->


    <div class="page-header theme-bg-dark py-5 text-center position-relative">
        <div class="theme-bg-shapes-right"></div>
        <div class="theme-bg-shapes-left"></div>
        <div class="container">
            <h1 class="page-heading single-col-max mx-auto">Learn Japanese</h1>
            <!-- <h1 class="page-heading single-col-max mx-auto V"></h1> -->
            <div class="page-intro single-col-max mx-auto V">آموزش جامع زبان ژاپنی</div>
            <div class="main-search-box pt-3 d-block mx-auto">
                <form class="search-form w-100" method="get" action="index.php">
                    <input type="text" placeholder="یک واژه، کانجی، کانا، روماجی یا جمله بنویسید..." name="q" value="<?= htmlspecialchars($search_q, ENT_QUOTES, 'UTF-8') ?>" class="form-control search-input" aria-label="جست‌وجو در همهٔ بخش‌های سایت">
                    <button type="submit" class="btn search-btn" value="Search" aria-label="جست‌وجو در همهٔ بخش‌های سایت">جستجو</button>
                </form>
                <p class="search-scope V rtl">این جست‌وجو در هر شش بخش سایت انجام می‌شود: هیراگانا، کاتاکانا، کانجی، گرامر، واژه‌ها و مکالمات.</p>
            </div>
        </div>
    </div><!--//page-header-->
    <div class="page-content">
        <div class="container">
            <?php if ($search_results !== null): ?>
                <section class="search-results rtl V" id="search-results" aria-live="polite">
                    <div class="sr-head">
                        <button type="button" class="sr-close" onclick="CloseSearchResults()" aria-label="بستن نتایج جست‌وجو" title="بستن نتایج">&times;</button>
                        <h2 class="sr-title">نتایج جست‌وجو برای «<?= htmlspecialchars($search_q, ENT_QUOTES, 'UTF-8') ?>»</h2>
                        <?php if ($search_results['total'] > 0): ?>
                            <p class="sr-summary">
                                <strong><?= number_format($search_results['total']) ?></strong> مورد در
                                <strong><?= number_format(count($search_results['pages'])) ?></strong> بخش پیدا شد
                                <span class="sr-time">(<?= $search_results['took'] ?> میلی‌ثانیه)</span>
                            </p>
                            <?php
                            $shown = 0;
                            foreach ($search_results['pages'] as $pgTmp) {
                                $shown += $pgTmp['shown'];
                            }
                            ?>
                            <?php if ($shown < $search_results['total']): ?>
                                <p class="sr-more">فقط <?= number_format($shown) ?> نتیجهٔ اول نمایش داده شده است؛ عبارت دقیق‌تری بنویسید تا فهرست کوتاه‌تر شود.</p>
                            <?php endif; ?>
                        <?php else: ?>
                            <p class="sr-summary sr-empty">
                                چیزی پیدا نشد. املای دیگری را امتحان کنید؛ می‌توانید کانجی، کانا، روماجی یا معنی فارسی را بنویسید.
                            </p>
                        <?php endif; ?>
                    </div>

                    <?php foreach ($search_results['pages'] as $code => $pg): ?>
                        <div class="sr-group">
                            <h3 class="sr-page">
                                <span class="sr-page-dot"></span>
                                <?= $pg['name'] ?>
                                <span class="sr-page-count"><?= number_format($pg['count']) ?> نتیجه</span>
                            </h3>
                            <ul class="sr-list">
                                <?php foreach ($pg['items'] as $item): ?>
                                    <li class="sr-item">
                                        <div class="sr-meta">
                                            <?php if ($item['m'] !== ''): ?><span class="sr-menu"><?= htmlspecialchars($item['m'], ENT_QUOTES, 'UTF-8') ?></span><?php endif; ?>
                                            <?php if ($item['s'] !== '' && $item['s'] !== $item['m']): ?><span class="sr-sep">›</span><span class="sr-sub"><?= htmlspecialchars($item['s'], ENT_QUOTES, 'UTF-8') ?></span><?php endif; ?>
                                        </div>
                                        <div class="sr-text"><?= jp_sr_highlight((string) $item['t'], $search_q) ?></div>
                                        <a class="sr-link" href="<?= $pg['file'] ?>#<?= htmlspecialchars($item['a'], ENT_QUOTES, 'UTF-8') ?>">
                                            رفتن به این بخش در صفحهٔ <?= $pg['name'] ?> <i class="fas fa-arrow-left"></i>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </section>
            <?php endif; ?>
            <div class="docs-overview py-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-4 py-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title mb-3">
                                    <img src="hiragana/pic/hiragana.jpg" width="60" class="rounded-circle" alt="">
                                    <span class="card-title-text">Hiragana</span>
                                </h5>
                                <div class="card-text V rtl">
                                    آموزش هیراگانا ひらがな
                                </div>
                                <a class="card-link-mask" href="hiragana.php"></a>
                            </div><!--//card-body-->
                        </div><!--//card-->
                    </div><!--//col-->
                    <div class="col-12 col-lg-4 py-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title mb-3">
                                    <img src="katakana/pic/katagana.jpg" width="60" class="rounded-circle" alt="">
                                    <span class="card-title-text">Katakana</span>
                                </h5>
                                <div class="card-text V rtl">
                                    آموزش کاتاکانا カタカナ
                                </div>
                                <a class="card-link-mask" href="katakana.php"></a>
                            </div><!--//card-body-->
                        </div><!--//card-->
                    </div><!--//col-->
                    <div class="col-12 col-lg-4 py-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title mb-3">
                                    <img src="kanji/pic/kanji.jpg" width="60" class="rounded-circle" alt="">
                                    <span class="card-title-text">Kanji</span>
                                </h5>
                                <div class="card-text V rtl">
                                    آموزش کانجی 漢字
                                </div>
                                <a class="card-link-mask" href="kanji.php"></a>
                            </div><!--//card-body-->
                        </div><!--//card-->
                    </div><!--//col-->
                    <div class="col-12 col-lg-4 py-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title mb-3">
                                    <img src="grammar/pic/grammar.jpg" width="60" class="rounded-circle" alt="">
                                    <span class="card-title-text">Grammar</span>
                                </h5>
                                <div class="card-text V rtl">
                                    آموزش گرامر 文法
                                </div>
                                <a class="card-link-mask" href="grammar.php"></a>
                            </div><!--//card-body-->
                        </div><!--//card-->
                    </div><!--//col-->
                    <div class="col-12 col-lg-4 py-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title mb-3">
                                    <span class="theme-icon-holder card-icon-holder me-2 bg-warning">
                                        <i class="fas fa-book-open fa-fw text-white"></i>
                                    </span><!--//card-icon-holder-->
                                    <span class="card-title-text">Vocabulary</span>
                                </h5>
                                <div class="card-text V rtl">
                                    آموزش لغات پرتکرار 言葉 (ことば)
                                </div>
                                <a class="card-link-mask" href="words.php"></a>
                            </div><!--//card-body-->
                        </div><!--//card-->
                    </div><!--//col-->
                    <div class="col-12 col-lg-4 py-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title mb-3">
                                    <span class="theme-icon-holder card-icon-holder me-2 bg-info">
                                        <i class="fas fa-podcast fa-fw fa-lg text-white"></i>
                                    </span><!--//card-icon-holder-->
                                    <span class="card-title-text">Conversations</span>
                                </h5>
                                <div class="card-text V rtl">
                                    جملات پرتکرار ژاپنی 日常会話 (にちじょうかいわ)
                                </div>
                                <a class="card-link-mask" href="podcasts.php"></a>
                            </div><!--//card-body-->
                        </div><!--//card-->
                    </div><!--//col-->
                </div><!--//row-->
            </div><!--//container-->
        </div><!--//container-->
    </div><!--//page-content-->

    <section class="cta-section text-center py-5 theme-bg-dark position-relative">
        <div class="theme-bg-shapes-right"></div>
        <div class="theme-bg-shapes-left"></div>
        <div class="container">
            <h3 class="mb-2 text-white mb-3">Learn Japanese</h3>
        </div>
    </section><!--//cta-section-->

    <footer class="footer">
        <div class="footer-bottom text-center py-5">
            <ul class="social-list list-unstyled pb-4 mb-0">
                <li class="list-inline-item"><a href="#"><i class="fa-brands fa-github fa-fw"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa-brands fa-x-twitter fa-fw"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa-brands fa-slack fa-fw"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa-brands fa-product-hunt fa-fw"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa-brands fa-facebook-f fa-fw"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa-brands fa-instagram fa-fw"></i></a></li>
            </ul><!--//social-list-->

            <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart heart-color"></i> by <a class="theme-link" href="http://MahdiKarimian.ir" target="_blank">Mk70</a></small>
        </div>
    </footer>

    <!-- Javascript -->
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Page Specific JS -->
    <script src="assets/plugins/smoothscroll.min.js"></script>
    <script src="assets/plugins/simplelightbox/simple-lightbox.min.js"></script>
    <script src="assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script>
    <!-- <script src="assets/js/docs.js"></script> -->

    <script>
        /* بستن جعبهٔ نتایج: حذف کامل از صفحه، پاک کردن کادر جست‌وجو و آدرس */
        function CloseSearchResults() {
            var box = document.getElementById('search-results');
            if (box) {
                box.remove();
            }
            var input = document.querySelector('.main-search-box .search-input');
            if (input) {
                input.value = '';
                input.blur();
            }
            var other = document.getElementById('convFilterAll');
            if (other) {
                other.value = '';
            }
            if (window.history && history.replaceState) {
                history.replaceState(null, '', location.pathname + location.hash);
            }
        }
    </script>

</body>

</html>