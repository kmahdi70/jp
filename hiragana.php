<?php
include("hiragana/data.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hiragana Guide</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Learn Hiragana">
    <meta name="author" content="Mahdi Karimian 09123238133">
    <link rel="apple-touch-icon" sizes="57x57" href="hiragana/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="hiragana/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="hiragana/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="hiragana/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="hiragana/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="hiragana/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="hiragana/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="hiragana/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="hiragana/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="hiragana/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="hiragana/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="hiragana/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="hiragana/favicon/favicon-16x16.png">
    <link rel="manifest" href="hiragana/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="hiragana/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <script defer src="assets/fontawesome/js/all.min.js"></script>
    <link rel="stylesheet" href="assets/plugins/simplelightbox/simple-lightbox.min.css">
    <link id="theme-style" rel="stylesheet" href="assets/css/theme.css">
    <link rel="stylesheet" href="css/global.css?<?= rand(1,1000)?>">
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
                    <div class="top-search-box d-none d-lg-flex">
                        <a class="btn btn-success V" href="./">بازگشت</a>
                    </div>

                    <ul class="social-list list-inline mx-md-3 mx-lg-5 mb-0 d-none d-lg-flex">
                        <li class="list-inline-item"><a href="https://t.me/LearnKyokushin" target="_blank"><i class="fa-brands fa-telegram fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="https://facebook.com/kmahdi70" target="_blank"><i class="fa-brands fa-facebook-f fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.linkedin.com/in/mkarimian70/" target="_blank"><i class="fa-brands fa-linkedin fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="https://instagram.com/kmahdi70" target="_blank"><i class="fa-brands fa-instagram fa-fw"></i></a></li>
                    </ul>
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
                    <li class="nav-item"><a class="nav-link" href="hiragana_summary.php">Hiragana Summary</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-1">Introduction</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-2">Hiragana Guide Video</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-3">Resources</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#search-all"><i class="fas fa-search me-2"></i>Search</a></li>
                    <li class="nav-item section-title"><a class="nav-link scrollto" href="#section-2"><span class="theme-icon-holder me-2"><i class="fas fa-bullhorn"></i></span>Vowel Sounds</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-1">A (あ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-2">I (い)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-3">U (う)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-4">E (え)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-5">O (お)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-6">New Words</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-3"><span class="theme-icon-holder me-2"><i class="fas fa-book"></i></span>Consonant K, G</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-3-1">KA (か), GA (が)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-3-2">KI (き), GI (ぎ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-3-3">KU (く), GU (ぐ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-3-4">KE (け), GE (げ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-3-5">KO (こ), GO (ご)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-3-6">New Words</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-4"><span class="theme-icon-holder me-2"><i class="fas fa-book"></i></span>Consonant S, J</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-4-1">SA (さ), JA (ざ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-4-2">SHI (し), JI (じ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-4-3">SU (す), JU (ず)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-4-4">SE (せ), JE (ぜ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-4-5">SO (そ), JO (ぞ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-4-6">New Words</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-5"><span class="theme-icon-holder me-2"><i class="fas fa-book"></i></span>Consonant T, D</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-5-1">TA (た), DA (だ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-5-2">CHI (ち), DJI (ぢ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-5-3">TSU (つ), DJU (づ), っ</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-5-4">TE (て), DE (で)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-5-5">TO (と), DO (ど)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-5-6">New Words</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-6"><span class="theme-icon-holder me-2"><i class="fas fa-book"></i></span>Consonant N</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-6-1">NA (な)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-6-2">NI (に)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-6-3">NU (ぬ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-6-4">NE (ね)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-6-5">NO (の)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-6-6">New Words</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-7"><span class="theme-icon-holder me-2"><i class="fas fa-book"></i></span>Consonant H, B, P</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-7-1">HA (は), BA (ば), PA (ぱ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-7-2">HI (ひ), BI (び), PI (ぴ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-7-3">HU (ふ), BU (ぶ), PU (ぷ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-7-4">HE (へ), BE (べ), PE (ぺ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-7-5">HO (ほ), BO (ぼ), PO (ぽ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-7-6">New Words</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-8"><span class="theme-icon-holder me-2"><i class="fas fa-book"></i></span>Consonant M</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-8-1">MA (ま)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-8-2">MI (み)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-8-3">MU (む)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-8-4">ME (め)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-8-5">MO (も)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-8-6">New Words</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-9"><span class="theme-icon-holder me-2"><i class="fas fa-book"></i></span>Consonant R</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-9-1">RA (ら)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-9-2">RI (り)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-9-3">RU (る)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-9-4">RE (れ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-9-5">RO (ろ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-9-6">New Words</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-10"><span class="theme-icon-holder me-2"><i class="fas fa-book"></i></span>Consonant Y</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-10-1">YA (や,ゃ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-10-2">YU (ゆ,ゅ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-10-3">YO (よ,ょ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-10-4">New Words</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-11"><span class="theme-icon-holder me-2"><i class="fas fa-book"></i></span>Consonant W</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-11-1">WA (わ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-11-2">WO (を)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-11-3">N (ん)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-11-4">New Words</a></li>
                </ul>
            </nav>
        </div>
        <div class="docs-content">
            <div class="container">
                <article class="docs-article" id="section-1">
                    <header class="docs-header">
                        <h1 class="docs-heading V rtl">
                            راهنمای جامع هیراگانا
                        </h1>
                    </header>
                    <section class="docs-intro V docs-section rtl">
                        <ol>
                            <li class="text-justify"><strong>صفحه خلاصه هیراگانا:</strong> اگر آشنایی مقدماتی با هیراگانا دارید برای دیدن کاراکتر و تلفظ هیراگانا به <a class="btn btn-primary" href="hiragana_summary.php">صفحه خلاصه هیراگانا</a> مراجعه کنید</li>
                            <li class="text-justify"><strong>روش حفظ:</strong> به دلیل سادگی نسبی هیراگانا (حداقل در مقایسه با کانجی)، روش‌های حفظ کردن مبتنی بر تصویر، روشی عالی برای حفظ کردن هستند. هر کاراکتر هیراگانا یک تصویر به یاد ماندنی دارد که با آن همراه است. </li>
                            <li class="text-justify"><strong>نوشتن ممنوع:</strong> یادگیری از طریق نوشتن، مدت زمان یادگیری هیراگانا را دو یا سه برابر می‌کند، ولی به این معنی نیست که برای تقویت نوشتاری تمرین انجام نشود. </li>
                            <li class="text-justify"><strong>تمرین‌ها:</strong> بعد از مطالعه هر ستون هیراگانا، تمرین‌هایی برای مرور آموخته‌هایتان وجود دارد. این تمرین‌ها بسیار خوب طراحی شده‌اند. اگر آنها را انجام دهید، هیراگانا را یاد خواهید گرفت. در این تمرین‌ها، باید تمام تلاش خود را بکنید تا خودتان را مجبور به یادآوری موارد کنید، حتی زمانی که فکر نمی‌کنید می‌توانید به پاسخ برسید. هرچه تلاش و فشار بیشتری برای یادآوری چیزی صرف کنید، مغز شما در نهایت حافظه قوی‌تری می‌سازد (البته تا زمانی که واقعاً آن را به خاطر بیاورید).</li>
                            <li class="text-justify"><strong>تمرین‌ها:</strong> هنگام تمرین کردن، کاراکترها را هم ارتفاع بنویسید، زیرا برخی از کاراکترها حالت کوچکتر هم دارند که باید تشخیص داده بشوند </li>
                            <li class="text-justify"><strong>کاراکترها:</strong> کل هیراگانا متشکل از 9 کاراکتر(K, S, T, H, N, M, Y, R, W) میباشد که ترکیبی با اصوات آ،او،ای، اِ، اُ میسازند</li>
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
                                    <li>خطوط همیشه از چپ به راست کشیده (رسم) میشوند</li>
                                    <li>خطوط همیشه از بالا به پایین کشیده (رسم) میشوند</li>
                                </ul>
                            </div>
                        </div>
                        <div class="simplelightbox-gallery row mb-3">
                            <div class="col-12 col-md-4 mb-3">
                                <a href="hiragana/pic/hiragana1.jpg"><img loading="lazy" class="figure-img img-fluid shadow rounded" src="hiragana/pic/hiragana1.jpg" alt="Hiragana"></a>
                            </div>
                            <div class="col-12 col-md-4 mb-3">
                                <a href="hiragana/pic/hiragana2.jpg"><img loading="lazy" class="figure-img img-fluid shadow rounded" src="hiragana/pic/hiragana2.jpg" alt="Hiragana"></a>
                            </div>
                            <div class="col-12 col-md-4 mb-3">
                                <a href="hiragana/pic/hiragana3.jpg"><img loading="lazy" class="figure-img img-fluid shadow rounded" src="hiragana/pic/hiragana3.jpg" alt="Hiragana"></a>
                            </div>
                            <div class="col-12 col-md-4 mb-3">
                                <a href="hiragana/pic/hiragana4.png"><img loading="lazy" class="figure-img img-fluid shadow rounded" src="hiragana/pic/hiragana4.png" alt="Hiragana"></a>
                            </div>
                            <div class="col-12 col-md-4 mb-3">
                                <a href="hiragana/pic/hiragana5.jpg"><img loading="lazy" class="figure-img img-fluid shadow rounded" src="hiragana/pic/hiragana5.jpg" alt="Hiragana"></a>
                            </div>
                            <div class="col-12 col-md-4 mb-3">
                                <a href="hiragana/pic/hiragana6.jpg"><img loading="lazy" class="figure-img img-fluid shadow rounded" src="hiragana/pic/hiragana6.jpg" alt="Hiragana"></a>
                            </div>
                            <div class="col-12 col-md-4 mb-3">
                                <a href="hiragana/pic/hiragana8.jpg"><img loading="lazy" class="figure-img img-fluid shadow rounded" src="hiragana/pic/hiragana8.jpg" alt="Hiragana"></a>
                                <a href="hiragana/pic/gana.jpg"><img loading="lazy" class="figure-img img-fluid shadow rounded" src="hiragana/pic/gana.jpg" alt="Hiragana"></a>
                            </div>
                            <div class="col-12 col-md-4 mb-3">
                                <a href="hiragana/pic/hiragana7.jpg"><img loading="lazy" class="figure-img img-fluid shadow rounded" src="hiragana/pic/hiragana7.jpg" alt="Hiragana"></a>
                            </div>
                            <div class="col-12 col-md-4 mb-3">
                                <a href="hiragana/pic/katakana1.jpg"><img loading="lazy" class="figure-img img-fluid shadow rounded" src="hiragana/pic/katakana1.jpg" alt="Hiragana"></a>
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-1-1">
                        <h2 class="rtl section-heading V">خلاصه هیراگانا <span class="Note">(برای پخش صدا روی نوشته‌ها کلیک نمایید)</span></h2>
                        <div class="alert alert-info" role="alert">
                            <table class="table text-center mb-0 table-borderless">
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">A (あ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/a.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">I (い)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/i.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">U (う)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/u.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">E (え)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/e.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">O (お)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/o.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="alert alert-warning" role="alert">
                            <table class="table text-center mb-0 table-borderless">
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">KA (か)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ka.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">KI (き)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ki.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">KU (く)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ku.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">KE (こ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ke.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">KO (け)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ko.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">GA (が)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ga.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">GI (ぎ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/gi.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">GU (ぐ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/gu.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">GE (げ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ge.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">GO (ご)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/go.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="alert alert-success" role="alert">
                            <table class="table text-center mb-0 table-borderless">
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">SA (さ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/sa.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">SHI (し)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/si.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">SU (す)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/su.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">SE (せ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/se.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">SO (そ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/so.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">JA (ざ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ja.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">JI (じ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ji.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">JU (ず)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ju.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">JE (ぜ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/je.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">JO (ぞ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/jo.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="alert alert-danger" role="alert">
                            <table class="table text-center mb-0 table-borderless">
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">TA (た)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ta.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">CHI (ち)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/chi.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">TSU (つ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/tsu.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">TE (て)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/te.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">TO (と)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/to.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">DA (だ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/da.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">DJI (ぢ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/dji.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">DJU (づ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/dju.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">DE (で)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/de.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">DO (ど)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/do.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="alert alert-info" role="alert">
                            <table class="table text-center mb-0 table-borderless">
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">NA (な)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/na.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">NI (に)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ni.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">NU (ぬ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/nu.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">NE (ね)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ne.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">NO (の)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/no.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="alert alert-warning" role="alert">
                            <table class="table text-center mb-0 table-borderless">
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">HA (は)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ha.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">HI (ひ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/hi.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">HU (ふ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/hu.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">HE (へ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/he.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">HO (ほ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ho.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">BA (ば)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ba.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">BI (び)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/bi.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">BU (ぶ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/bu.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">BE (べ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/be.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">BO (ぼ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/bo.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">PA (ぱ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/pa.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">PI (ぴ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/pi.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">PU (ぷ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/pu.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">PE (ぺ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/pe.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">PO (ぽ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/po.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="alert alert-success" role="alert">
                            <table class="table text-center mb-0 table-borderless">
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">MA (ま)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ma.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">MI (み)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/mi.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">MU (む)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/mu.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">ME (め)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ne.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">MO (も)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/mo.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="alert alert-danger" role="alert">
                            <table class="table text-center mb-0 table-borderless">
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">RA (ら)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ra.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">RI (り)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ri.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">RU (る)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ru.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">RE (れ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/re.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">RO (ろ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ro.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="alert alert-info" role="alert">
                            <table class="table text-center mb-0 table-borderless">
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">YA (や)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ya.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">YU (ゆ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/yu.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">YO (よ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/yo.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="alert alert-warning" role="alert">
                            <table class="table text-center mb-0 table-borderless">
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">WA (わ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/wa.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">WO (を)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/wo.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">N (ん)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/n.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </section>
                    <section class="docs-section rtl" id="item-1-2">
                        <h2 class="section-heading V">فیلم آموزشی هیراگانا</h2>
                        <div class="callout-block callout-block-warning">
                            <div class="content">
                                <h4 class="callout-title rtl V">
                                    <span class="callout-icon-holder me-1">
                                        <i class="fas fa-bullhorn"></i>
                                    </span>
                                    فیلم آموزش نوشتاری هیراگانا
                                </h4>
                                <div class="row">
                                    <div class="col align-self-center mb-3">
                                        <video preload="none" poster="hiragana/pic/poster.jpg" class="img-fluid w-100" controls>
                                            <source src="hiragana/media/hiragana.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                                <h4 class="callout-title rtl V">
                                    <span class="callout-icon-holder me-1">
                                        <i class="fas fa-bullhorn"></i>
                                    </span>
                                    فیلم آموزش هیراگانا
                                </h4>
                                <div class="row">
                                    <div class="col align-self-center mb-3">
                                        <video preload="none" poster="hiragana/pic/poster1.jpg" class="img-fluid w-100" controls>
                                            <source src="hiragana/media/hiragana.webm" type="video/webm">
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="docs-section rtl V" id="item-1-3">
                        <h2 class="section-heading V">منابع و مراجع</h2>
                        <div class="table-responsive my-4">
                            <?php $i = 1; ?>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="alert bg-info" width="50">ردیف</th>
                                        <th class="alert bg-info">دانلود</th>
                                        <th class="alert bg-info">توضیحات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th><?= $i++ ?></th>
                                        <th class="theme-bg-light"><i class="fas fa-external-link-alt"></i> <a class="theme-link" target="_blank" href="media/hiragana1.pdf">کتاب</a></th>
                                        <td>کتاب هیراگانا</td>
                                    </tr>
                                    <tr>
                                        <th><?= $i++ ?></th>
                                        <th class="theme-bg-light"><i class="fas fa-external-link-alt"></i> <a class="theme-link" target="_blank" href="media/hiragana2.pdf">کتاب</a></th>
                                        <td>کتاب هیراگانا</td>
                                    </tr>
                                    <tr>
                                        <th><?= $i++ ?></th>
                                        <th class="theme-bg-light"><i class="fas fa-external-link-alt"></i> <a class="theme-link" target="_blank" href="media/hiragana3.pdf">کتاب</a></th>
                                        <td>کتاب تمرین هیراگانا</td>
                                    </tr>
                                    <tr>
                                        <th><?= $i++ ?></th>
                                        <th class="theme-bg-light"><i class="fas fa-external-link-alt"></i> <a class="theme-link" target="_blank" href="media/hiragana4.pdf">کتاب</a></th>
                                        <td>کتاب تمرین ساده سطح 1 هیراگانا</td>
                                    </tr>
                                    <tr>
                                        <th><?= $i++ ?></th>
                                        <th class="theme-bg-light"><i class="fas fa-external-link-alt"></i> <a class="theme-link" target="_blank" href="media/hiragana5.pdf">کتاب</a></th>
                                        <td>کتاب تمرین ساده سطح 2 هیراگانا</td>
                                    </tr>
                                    <tr>
                                        <th><?= $i++ ?></th>
                                        <th class="theme-bg-light"><i class="fas fa-external-link-alt"></i> <a class="theme-link" target="_blank" href="media/hiragana6.pdf">کتاب</a></th>
                                        <td>کتاب چارت هیراگانا</td>
                                    </tr>
                                    <tr>
                                        <th><?= $i++ ?></th>
                                        <th class="theme-bg-light"><i class="fas fa-external-link-alt"></i> <a class="theme-link" target="_blank" href="media/hiragana7.pdf">کتاب</a></th>
                                        <td>کتاب چیت شیت هیراگانا</td>
                                    </tr>
                                    <tr>
                                        <th><?= $i++ ?></th>
                                        <th class="theme-bg-light"><i class="fas fa-external-link-alt"></i> <a class="theme-link" target="_blank" href="media/hiragana8.pdf">کتاب</a></th>
                                        <td>کتاب سرمشق هیراگانا</td>
                                    </tr>
                                    <tr>
                                        <th><?= $i++ ?></th>
                                        <th class="theme-bg-light"><i class="fas fa-external-link-alt"></i> <a class="theme-link" target="_blank" href="media/hiragana9.pdf">کتاب</a></th>
                                        <td>کتاب آموزشی کودکان هیراگانا</td>
                                    </tr>
                                    <tr>
                                        <th><?= $i++ ?></th>
                                        <th class="theme-bg-light"><i class="fas fa-external-link-alt"></i> <a class="theme-link" target="_blank" href="media/hiragana10.pdf">کتاب</a></th>
                                        <td>کتاب آموزشی خردسالان هیراگانا</td>
                                    </tr>
                                    <tr>
                                        <th><?= $i++ ?></th>
                                        <th class="theme-bg-light"><i class="fas fa-external-link-alt"></i> <a class="theme-link" target="_blank" href="https://www3.nhk.or.jp/nhkworld/lesson/en/letters/hiragana.html">سایت</a></th>
                                        <td>سایت آموزش هیراگانا</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                                    <section class="docs-section rtl V" id="search-all">
                        <h2 class="section-heading V rtl">جستجو در کل واژه‌های صفحه</h2>
                        <p class="text-justify">با نوشتن عبارت در کادر زیر، همهٔ واژه‌های بخش‌ها یک‌جا جست‌وجو می‌شوند: کانا، روماجی، معنی انگلیسی و ترجمهٔ فارسی. بخش‌هایی که موردی ندارند پنهان می‌شوند و شمارنده تعداد واژه‌های پیدا‌شده را نشان می‌دهد.</p>
                        <div class="kata-tools">
                            <div class="kata-search">
                                <svg class="kata-search-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                    <circle cx="11" cy="11" r="7"></circle>
                                    <line x1="16.5" y1="16.5" x2="21" y2="21"></line>
                                </svg>
                                <input type="text" id="kanaFilterAll" class="form-control kana-filter-all" placeholder="عبارت را بنویسید (کانا، روماجی یا معنی)..." oninput="FilterAllKanaWords(this)" aria-label="جستجو در کل واژه‌های صفحه">
                            </div>
                            <span id="kanaCountAll" class="kata-count"><?= count($words) ?> / <?= count($words) ?></span>
                        </div>
                        <p id="kanaEmptyAll" class="kata-empty">واژه‌ای با این عبارت در هیچ‌کدام از بخش‌ها پیدا نشد.</p>
                    </section>
                </article>
                <article class="docs-article" id="section-2">
                    <header class="docs-header">
                        <h1 class="docs-heading V rtl">
                            حروف صدا دار
                        </h1>
                        <div class="alert alert-info" role="alert">
                            <table class="table text-center mb-0 table-borderless">
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">A (あ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/a.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">I (い)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/i.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">U (う)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/u.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">E (え)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/e.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">O (お)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/o.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-12 text-center">
                            <img src="hiragana/pic/vowels.jpg" class="img-thumbnail w-100" alt="vowels">
                        </div>
                    </header>
                    <section class="docs-section" id="item-2-1">
                        <h2 class="section-heading"><span onclick="Copy(this)">A (あ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بین صدای آ و ـَ تلفظ میشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> کاراکتر A داخل آن دیده میشود و همچنین قیافه این علامت شبیه سیب میباشد</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> Play
                                <audio preload="none">
                                    <source src="hiragana/media/a.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/a.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/a.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/a_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-2-2">
                        <h2 class="section-heading"><span onclick="Copy(this)">I (い)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> ایـ تلفظ میشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه به مارماهی (eel) است که میتوانید از تلفظ ایل، آنرا به خاطر بسپارید</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> Play
                                <audio preload="none">
                                    <source src="hiragana/media/i.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/i.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/i.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/i_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-2-3">
                        <h2 class="section-heading"><span onclick="Copy(this)">U (う)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> برای تلفظ او نباید لبها کاملأ به حالت غنچه در بیاید در حد 30% کافی است و همچنین باید کوتاه ادا شود، زمان تلفظ باید کوتاه باشد</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> شبیه کاراکتر U انگلیسی میباشد که مقداری چرخیده است</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> Play
                                <audio preload="none">
                                    <source src="hiragana/media/u.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/u.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/u.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/u_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-2-4">
                        <h2 class="section-heading"><span onclick="Copy(this)">E (え)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت ـِ تلفظ میشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه یک مرغ میباشد که تخم میگذارد پس با کلمه تخم مرغ (egg) این علامت را بخاطر میسپاریم</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> Play
                                <audio preload="none">
                                    <source src="hiragana/media/e.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/e.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/e.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/e_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-2-5">
                        <h2 class="section-heading"><span onclick="Copy(this)">O (お)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت اُ - ـُ تلفظ میشود</li>
                            <li><strong class="me-1">نکته گرامری:</strong> در ابتدای کلمات قرار میگیرد برای نشان دادن ادب</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه دو حرف OO در انگلیسی میباشد </li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> Play
                                <audio preload="none">
                                    <source src="hiragana/media/o.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/o.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/o.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/o_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-2-6">
                        <h2 class="section-heading rtl V">کلمات جدید</h2>
                        <div class="table-responsive my-4">
                            <table class="table table-striped table-responsive words-table">
                                <thead class="V">
                                    <tr>
                                        <th scope="col" width="50">#</th>
                                        <th scope="col" width="50">صوت</th>
                                        <th scope="col">واژه</th>
                                        <th scope="col">روماجی</th>
                                        <th scope="col">معنی</th>
                                        <th scope="col">ترجمه</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($words_v as $k => $v) {
                                        if (file_exists("hiragana/media/" . $v['ro'] . ".mp3"))
                                            $icon = "text-success";
                                        else
                                            $icon = "text-warning";
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $i++ ?>.</th>
                                            <td>
                                                <button type="button" class="kata-play" title="Play" aria-label="Play" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button>
                                                <audio preload="none">
                                                    <source src="hiragana/media/<?= $v['ro'] ?>.mp3" type="audio/mpeg">
                                                </audio>
                                            </td>
                                            <td><span onclick="Copy(this)"><?= $v['jp'] ?></span><input type="text" class="NV"></td>
                                            <td><?= $v['ro'] ?></td>
                                            <td><?= $v['me'] ?></td>
                                            <td class="V"><?= $v['tr'] ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </article>
                <article class="docs-article" id="section-3">
                    <header class="docs-header">
                        <h1 class="docs-heading V rtl">
                            حرف ک (K) - حرف گ (G)
                        </h1>
                        <div class="alert alert-warning" role="alert">
                            <table class="table text-center mb-0 table-borderless">
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">KA (か)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ka.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">KI (き)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ki.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">KU (く)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ku.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">KE (こ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ke.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">KO (け)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ko.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">GA (が)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ga.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">GI (ぎ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/gi.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">GU (ぐ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/gu.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">GE (げ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ge.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">GO (ご)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/go.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-12 text-center">
                            <img src="hiragana/pic/k_dakuten.jpg" class="img-thumbnail w-100" alt="k dakuten">
                        </div>
                    </header>
                    <section class="docs-section" id="item-3-1">
                        <h2 class="section-heading"><span onclick="Copy(this)">KA (か), GA (が)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت کا تلفظ میشود</li>
                            <li><strong class="me-1">نکته گرامری:</strong> در اغلب موارد در انتهای جمله نشانه سوالی بودن جمله است</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> علامتی به نام داکوتن یا تن‌تن که مانند کوتیشن است به کا اضافه میشود و حرف گا را میسازد</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه یک پشه میباشد که اتفاقأ معنی کلمه کا هم در ژاپنی پشه است</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> か
                                <audio preload="none">
                                    <source src="hiragana/media/ka.mp3" type="audio/mpeg">
                                </audio>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> が
                                <audio preload="none">
                                    <source src="hiragana/media/ga.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/ka.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/ka.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/ka_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/ga.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/ga.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-3-2">
                        <h2 class="section-heading"><span onclick="Copy(this)">KI (き), GI (ぎ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت کی تلفظ میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با داکوتن حرف گی ساخته میشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه یک کلید میباشد که در انگلیسی به آن کی (Key) میگویند</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> き
                                <audio preload="none">
                                    <source src="hiragana/media/ki.mp3" type="audio/mpeg">
                                </audio>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ぎ
                                <audio preload="none">
                                    <source src="hiragana/media/gi.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/ki.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/ki.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/ki_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/gi.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/gi.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-3-3">
                        <h2 class="section-heading"><span onclick="Copy(this)">KU (く), GU (ぐ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت کو تلفظ میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با داکوتن حرف گو ساخته میشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه پرنده کوکو میباشد</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> く
                                <audio preload="none">
                                    <source src="hiragana/media/ku.mp3" type="audio/mpeg">
                                </audio>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ぐ
                                <audio preload="none">
                                    <source src="hiragana/media/gu.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/ku.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/ku.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/ku_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/gu.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/gu.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-3-4">
                        <h2 class="section-heading"><span onclick="Copy(this)">KE (け), GE (げ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت کـِ تلفظ میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با داکوتن حرف گـِ ساخته میشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه خزه یا جلبک دریایی (Kelp) میباشد</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> け
                                <audio preload="none">
                                    <source src="hiragana/media/ke.mp3" type="audio/mpeg">
                                </audio>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> げ
                                <audio preload="none">
                                    <source src="hiragana/media/ge.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 pt-1 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/ke.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/ke.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/ke_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 pt-1 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/ge.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/ge.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-3-5">
                        <h2 class="section-heading"><span onclick="Copy(this)">KO (こ), GO (ご)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت کـُ تلفظ میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با داکوتن حرف گـُ ساخته میشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه دو کرم است که پارتنر هستند و با هم همزیستی دارند (cohabitating) دارند</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> こ
                                <audio preload="none">
                                    <source src="hiragana/media/ko.mp3" type="audio/mpeg">
                                </audio>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ご
                                <audio preload="none">
                                    <source src="hiragana/media/go.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 pt-1 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/ko.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/ko.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/ko_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 pt-1 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/go.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/go.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-3-6">
                        <h2 class="section-heading rtl V">کلمات جدید</h2>
                        <div class="table-responsive my-4">
                            <table class="table table-striped words-table">
                                <thead class="V">
                                    <tr>
                                        <th scope="col" width="50">#</th>
                                        <th scope="col" width="50">صوت</th>
                                        <th scope="col">واژه</th>
                                        <th scope="col">روماجی</th>
                                        <th scope="col">معنی</th>
                                        <th scope="col">ترجمه</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($words_k as $k => $v) {
                                        if (file_exists("hiragana/media/" . $v['ro'] . ".mp3"))
                                            $icon = "text-success";
                                        else
                                            $icon = "text-warning";
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $i++ ?>.</th>
                                            <td>
                                                <button type="button" class="kata-play" title="Play" aria-label="Play" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button>
                                                <audio preload="none">
                                                    <source src="hiragana/media/<?= $v['ro'] ?>.mp3" type="audio/mpeg">
                                                </audio>
                                            </td>
                                            <td><span onclick="Copy(this)"><?= $v['jp'] ?></span><input type="text" class="NV"></td>
                                            <td><?= $v['ro'] ?></td>
                                            <td><?= $v['me'] ?></td>
                                            <td class="V"><?= $v['tr'] ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </article>
                <article class="docs-article" id="section-4">
                    <header class="docs-header">
                        <h1 class="docs-heading V rtl">
                            حرف س (S) - حرف ج (J)
                        </h1>
                        <div class="alert alert-success" role="alert">
                            <table class="table text-center mb-0 table-borderless">
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">SA (さ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/sa.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">SHI(し)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/si.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">SU (す)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/su.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">SE (せ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/se.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">SO (そ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/so.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">JA (ざ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ja.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">JI(じ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ji.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">JU (ず)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ju.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">JE (ぜ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/je.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">JO (ぞ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/jo.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-12 text-center">
                            <img src="hiragana/pic/s_dakuten.jpg" class="img-thumbnail w-100" alt="s dakuten">
                        </div>
                    </header>
                    <section class="docs-section" id="item-4-1">
                        <h2 class="section-heading"><span onclick="Copy(this)">SA (さ), JA (ざ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت سا تلفظ میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با داکوتن حرف جا (زا) ساخته میشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه قاشق سالاد است (Salad)</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> さ
                                <audio preload="none">
                                    <source src="hiragana/media/sa.mp3" type="audio/mpeg">
                                </audio>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ざ
                                <audio preload="none">
                                    <source src="hiragana/media/ja.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/sa.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/sa.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/sa_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/ja.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/ja.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-4-2">
                        <h2 class="section-heading"><span onclick="Copy(this)">SHI (し), JI (じ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت سی یا شی تلفظ میشود البته بصورت دقیق حالتی بین س و ش ادا میشود </li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با داکوتن حرف جی ساخته میشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه قلاب ماهیگیری است که یک سیل (Seal) فک آبی در آن گیر افتاده</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> し
                                <audio preload="none">
                                    <source src="hiragana/media/si.mp3" type="audio/mpeg">
                                </audio>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> じ
                                <audio preload="none">
                                    <source src="hiragana/media/ji.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/si.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/si.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/si_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/ji.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/ji.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-4-3">
                        <h2 class="section-heading"><span onclick="Copy(this)">SU (す), JU (ず)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت سو تلفظ میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با داکوتن حرف جو ساخته میشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه یک تاب سوینگ (Swing) میباشد</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> す
                                <audio preload="none">
                                    <source src="hiragana/media/su.mp3" type="audio/mpeg">
                                </audio>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ず
                                <audio preload="none">
                                    <source src="hiragana/media/ju.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/su.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/su.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/su_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/ju.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/ju.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-4-4">
                        <h2 class="section-heading"><span onclick="Copy(this)">SE (せ), JE (ぜ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت سـِ تلفظ میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با داکوتن حرف جـِ ساخته میشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه دندان دراکولا میباشد که خیلی سکسی (Sexy) است یا مشابه شخصی که دهان خود را باز کرده و در حال گفتن (Say) چیزی است</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> せ
                                <audio preload="none">
                                    <source src="hiragana/media/se.mp3" type="audio/mpeg">
                                </audio>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ぜ
                                <audio preload="none">
                                    <source src="hiragana/media/je.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/se.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/se.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/se_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/je.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/je.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-4-5">
                        <h2 class="section-heading"><span onclick="Copy(this)">SO (そ), JO (ぞ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت سـُ تلفظ میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با داکوتن حرف جـُ ساخته میشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه فردی است که در حال نوشیدن سودا (Soda) میباشد</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> そ
                                <audio preload="none">
                                    <source src="hiragana/media/so.mp3" type="audio/mpeg">
                                </audio>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ぞ
                                <audio preload="none">
                                    <source src="hiragana/media/jo.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/so.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/so.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/so_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/jo.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/jo.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-4-6">
                        <h2 class="section-heading rtl V">کلمات جدید</h2>
                        <div class="table-responsive my-4">
                            <table class="table table-striped words-table">
                                <thead class="V">
                                    <tr>
                                        <th scope="col" width="50">#</th>
                                        <th scope="col" width="50">صوت</th>
                                        <th scope="col">واژه</th>
                                        <th scope="col">روماجی</th>
                                        <th scope="col">معنی</th>
                                        <th scope="col">ترجمه</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($words_s as $k => $v) {
                                        if (file_exists("hiragana/media/" . $v['ro'] . ".mp3"))
                                            $icon = "text-success";
                                        else
                                            $icon = "text-warning";
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $i++ ?>.</th>
                                            <td>
                                                <button type="button" class="kata-play" title="Play" aria-label="Play" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button>
                                                <audio preload="none">
                                                    <source src="hiragana/media/<?= $v['ro'] ?>.mp3" type="audio/mpeg">
                                                </audio>
                                            </td>
                                            <td><span onclick="Copy(this)"><?= $v['jp'] ?></span><input type="text" class="NV"></td>
                                            <td><?= $v['ro'] ?></td>
                                            <td><?= $v['me'] ?></td>
                                            <td class="V"><?= $v['tr'] ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </article>
                <article class="docs-article" id="section-5">
                    <header class="docs-header">
                        <h1 class="docs-heading V rtl">
                            حرف ت (T) - حرف د (D)
                        </h1>
                        <div class="alert alert-danger" role="alert">
                            <table class="table text-center mb-0 table-borderless">
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">TA (た)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ta.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">CHI(ち)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/chi.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">TSU (つ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/tsu.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">TE (て)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/te.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">TO (と)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/to.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">DA(だ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/da.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">DJI(ぢ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/dji.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">DJU(づ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/dju.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">DE(で)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/de.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">DO(ど)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/do.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-12 text-center">
                            <img src="hiragana/pic/t_dakuten.jpg" class="img-thumbnail w-100" alt="t dakuten">
                        </div>
                    </header>
                    <section class="docs-section" id="item-5-1">
                        <h2 class="section-heading"><span onclick="Copy(this)">TA (た), DA (だ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت تا تلفظ میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با داکوتن حرف دا ساخته میشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه ta است </li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> た
                                <audio preload="none">
                                    <source src="hiragana/media/ta.mp3" type="audio/mpeg">
                                </audio>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> だ
                                <audio preload="none">
                                    <source src="hiragana/media/da.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/ta.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/ta.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/ta_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/da.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/da.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-5-2">
                        <h2 class="section-heading"><span onclick="Copy(this)">CHI (ち), DJI (ぢ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت چی تلفظ میشود </li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با داکوتن حرف جی ساخته میشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه چیرلیدر(Cheer Leader) میباشد</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ち
                                <audio preload="none">
                                    <source src="hiragana/media/chi.mp3" type="audio/mpeg">
                                </audio>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ぢ
                                <audio preload="none">
                                    <source src="hiragana/media/dji.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/chi.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/chi.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/chi_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/dji.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/dji.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-5-3">
                        <h2 class="section-heading"><span onclick="Copy(this)">TSU (つ), DJU (づ), っ</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت چو(تسو) تلفظ میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با داکوتن حرف جو ساخته میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> این علامت اگر بصورت کوچکتر نوشته شود(ちさいっ) صدای تسو نمیدهد و تشدید حرف بعدی است</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> این علامت اگر در پایان یک کلمه قرار بگیرد، بصورت ساکن یا توقف صدای آن کلمه ادا میشود و کشیده نمیشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه سونامی (Tsunami) میباشد</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> つ
                                <audio preload="none">
                                    <source src="hiragana/media/tsu.mp3" type="audio/mpeg">
                                </audio>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> づ
                                <audio preload="none">
                                    <source src="hiragana/media/dju.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/tsu.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/tsu.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/tsu_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/dju.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/dju.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-5-4">
                        <h2 class="section-heading"><span onclick="Copy(this)">TE (て), DE (で)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت تـِ تلفظ میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با داکوتن حرف دِ ساخته میشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه تلسکوپ(Telescope) است</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> て
                                <audio preload="none">
                                    <source src="hiragana/media/te.mp3" type="audio/mpeg">
                                </audio>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> で
                                <audio preload="none">
                                    <source src="hiragana/media/de.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/te.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/te.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/te_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/de.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/de.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-5-5">
                        <h2 class="section-heading"><span onclick="Copy(this)">TO (と), DO (ど)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت تـُ تلفظ میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با داکوتن حرف دُ ساخته میشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه انگشتی(Toe) است که خاری در آن رفته</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> と
                                <audio preload="none">
                                    <source src="hiragana/media/to.mp3" type="audio/mpeg">
                                </audio>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ど
                                <audio preload="none">
                                    <source src="hiragana/media/do.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/to.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/to.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/to_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/do.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/do.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-5-6">
                        <h2 class="section-heading rtl V">کلمات جدید</h2>
                        <div class="table-responsive my-4">
                            <table class="table table-striped words-table">
                                <thead class="V">
                                    <tr>
                                        <th scope="col" width="50">#</th>
                                        <th scope="col" width="50">صوت</th>
                                        <th scope="col">واژه</th>
                                        <th scope="col">روماجی</th>
                                        <th scope="col">معنی</th>
                                        <th scope="col">ترجمه</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($words_t as $k => $v) {
                                        if (file_exists("hiragana/media/" . $v['ro'] . ".mp3"))
                                            $icon = "text-success";
                                        else
                                            $icon = "text-warning";
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $i++ ?>.</th>
                                            <td>
                                                <button type="button" class="kata-play" title="Play" aria-label="Play" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button>
                                                <audio preload="none">
                                                    <source src="hiragana/media/<?= $v['ro'] ?>.mp3" type="audio/mpeg">
                                                </audio>
                                            </td>
                                            <td><span onclick="Copy(this)"><?= $v['jp'] ?></span><input type="text" class="NV"></td>
                                            <td><?= $v['ro'] ?></td>
                                            <td><?= $v['me'] ?></td>
                                            <td class="V"><?= $v['tr'] ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </article>
                <article class="docs-article" id="section-6">
                    <header class="docs-header">
                        <h1 class="docs-heading V rtl">
                            حرف ن (N)
                        </h1>
                        <div class="alert alert-info" role="alert">
                            <table class="table text-center mb-0 table-borderless">
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">NA (な)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/na.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">NI (に)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ni.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">NU (ぬ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/nu.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">NE (ね)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ne.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">NO (の)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/no.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-12 text-center">
                            <img src="hiragana/pic/n_dakuten.jpg" class="img-thumbnail w-100" alt="n dakuten">
                        </div>
                    </header>
                    <section class="docs-section" id="item-6-1">
                        <h2 class="section-heading"><span onclick="Copy(this)">NA (な)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت نا تلفظ میشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه گره(Knot) است</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> な
                                <audio preload="none">
                                    <source src="hiragana/media/na.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/na.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/na.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/na_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-6-2">
                        <h2 class="section-heading"><span onclick="Copy(this)">NI (に)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت نی تلفظ میشود </li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه سوزن یا نیدل(Needle) میباشد</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> に
                                <audio preload="none">
                                    <source src="hiragana/media/ni.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/ni.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/ni.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/ni_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-6-3">
                        <h2 class="section-heading"><span onclick="Copy(this)">NU (ぬ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت نو تلفظ میشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه نودل(Noodle) میباشد</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ぬ
                                <audio preload="none">
                                    <source src="hiragana/media/nu.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/nu.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/nu.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/nu_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-6-4">
                        <h2 class="section-heading"><span onclick="Copy(this)">NE (ね)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت نـِ تلفظ میشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه گربه یا نکو است</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ね
                                <audio preload="none">
                                    <source src="hiragana/media/ne.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/ne.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/ne.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/ne_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-6-5">
                        <h2 class="section-heading"><span onclick="Copy(this)">NO (の)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت نـُ تلفظ میشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه علامت ورود ممنوع (No) یا بینی(Nose) است</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> の
                                <audio preload="none">
                                    <source src="hiragana/media/no.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/no.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/no.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/no_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-6-6">
                        <h2 class="section-heading rtl V">کلمات جدید</h2>
                        <div class="table-responsive my-4">
                            <table class="table table-striped words-table">
                                <thead class="V">
                                    <tr>
                                        <th scope="col" width="50">#</th>
                                        <th scope="col" width="50">صوت</th>
                                        <th scope="col">واژه</th>
                                        <th scope="col">روماجی</th>
                                        <th scope="col">معنی</th>
                                        <th scope="col">ترجمه</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($words_n as $k => $v) {
                                        if (file_exists("hiragana/media/" . $v['ro'] . ".mp3"))
                                            $icon = "text-success";
                                        else
                                            $icon = "text-warning";
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $i++ ?>.</th>
                                            <td>
                                                <button type="button" class="kata-play" title="Play" aria-label="Play" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button>
                                                <audio preload="none">
                                                    <source src="hiragana/media/<?= $v['ro'] ?>.mp3" type="audio/mpeg">
                                                </audio>
                                            </td>
                                            <td><span onclick="Copy(this)"><?= $v['jp'] ?></span><input type="text" class="NV"></td>
                                            <td><?= $v['ro'] ?></td>
                                            <td><?= $v['me'] ?></td>
                                            <td class="V"><?= $v['tr'] ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </article>
                <article class="docs-article" id="section-7">
                    <header class="docs-header">
                        <h1 class="docs-heading V rtl">
                            حرف ه (H) - حرف ب (B) - حرف پ (P)
                        </h1>
                        <div class="alert alert-warning" role="alert">
                            <table class="table text-center mb-0 table-borderless">
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">HA (は)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ha.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">HI(ひ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/hi.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">HU (ふ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/hu.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">HE (へ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/he.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">HO (ほ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ho.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">BA(ば)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ba.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">BI(び)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/bi.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">BU(ぶ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/bu.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">BE(べ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/be.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">BO(ぼ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/bo.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">PA(ぱ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/pa.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">PI(ぴ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/pi.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">PU(ぷ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/pu.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">PE(ぺ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/pe.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">PO(ぽ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/po.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-12 text-center">
                            <img src="hiragana/pic/h_dakuten.jpg" class="img-thumbnail w-100" alt="h dakuten">
                        </div>
                    </header>
                    <section class="docs-section" id="item-7-1">
                        <h2 class="section-heading"><span onclick="Copy(this)">HA,WA (は), BA (ば), PA (ぱ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت ها یا وا تلفظ میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با داکوتن حرف با ساخته میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با هان داکوتن حرف پا ساخته میشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه Ha است </li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> は
                                <audio preload="none">
                                    <source src="hiragana/media/ha.mp3" type="audio/mpeg">
                                </audio>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ば
                                <audio preload="none">
                                    <source src="hiragana/media/ba.mp3" type="audio/mpeg">
                                </audio>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ぱ
                                <audio preload="none">
                                    <source src="hiragana/media/pa.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/ha.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/ha.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/ha_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/ba.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/ba.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/pa.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/pa.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-7-2">
                        <h2 class="section-heading"><span onclick="Copy(this)">HI (ひ), BI (び), PI (ぴ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت هی تلفظ میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با داکوتن حرف بی ساخته میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با هان داکوتن حرف پی ساخته میشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه مرد دماغ گنده است(He has a big nose) است </li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ひ
                                <audio preload="none">
                                    <source src="hiragana/media/hi.mp3" type="audio/mpeg">
                                </audio>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> び
                                <audio preload="none">
                                    <source src="hiragana/media/bi.mp3" type="audio/mpeg">
                                </audio>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ぴ
                                <audio preload="none">
                                    <source src="hiragana/media/pi.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/hi.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/hi.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/hi_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/bi.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/bi.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/pi.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/pi.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-7-3">
                        <h2 class="section-heading"><span onclick="Copy(this)">HU (ふ), BU (ぶ), PU (ぷ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> تلفظ این حرف چیزی بین هو و فو است</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با داکوتن حرف بو ساخته میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با هان داکوتن حرف پو ساخته میشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه دختر عربی است(Hula) که بلی دنس میرقصد و همینطور حلقه کمر(Hoola Hoop)، اگر با فو تلفظ کنید مانند کوه فوجی(Fuji) است </li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ふ
                                <audio preload="none">
                                    <source src="hiragana/media/hu.mp3" type="audio/mpeg">
                                </audio>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ぶ
                                <audio preload="none">
                                    <source src="hiragana/media/bu.mp3" type="audio/mpeg">
                                </audio>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ぷ
                                <audio preload="none">
                                    <source src="hiragana/media/pu.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/hu.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/hu.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/hu_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/bu.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/bu.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/pu.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/pu.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-7-4">
                        <h2 class="section-heading"><span onclick="Copy(this)">HE,E (へ), BE (べ), PE (ぺ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت هـِ یا اِ تلفظ میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با داکوتن حرف بـِ ساخته میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با هان داکوتن حرف پـِ ساخته میشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه کوه است، شخصی که در کوه کمک(Help) میخواهد </li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> へ
                                <audio preload="none">
                                    <source src="hiragana/media/he.mp3" type="audio/mpeg">
                                </audio>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> べ
                                <audio preload="none">
                                    <source src="hiragana/media/be.mp3" type="audio/mpeg">
                                </audio>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ぺ
                                <audio preload="none">
                                    <source src="hiragana/media/pe.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/he.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/he.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/he_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/be.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/be.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/pe.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/pe.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-7-5">
                        <h2 class="section-heading"><span onclick="Copy(this)">HO (ほ), BO (ぼ), PO (ぽ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت هـُ تلفظ میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با داکوتن حرف بـُ ساخته میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با هان داکوتن حرف پـُ ساخته میشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه یک موجود بی‌سر است که صدای هوهوهو(Ho Ho Ho) در‌می‌آورد</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ほ
                                <audio preload="none">
                                    <source src="hiragana/media/ho.mp3" type="audio/mpeg">
                                </audio>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ぼ
                                <audio preload="none">
                                    <source src="hiragana/media/bo.mp3" type="audio/mpeg">
                                </audio>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ぽ
                                <audio preload="none">
                                    <source src="hiragana/media/po.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/ho.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/ho.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6 mb-3">
                                <img src="hiragana/pic/ha-ho.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-6 mb-3">
                                <img src="hiragana/pic/ho1.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/ho_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/bo.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/bo.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/po.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/po.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-7-6">
                        <h2 class="section-heading rtl V">کلمات جدید</h2>
                        <div class="table-responsive my-4">
                            <table class="table table-striped words-table">
                                <thead class="V">
                                    <tr>
                                        <th scope="col" width="50">#</th>
                                        <th scope="col" width="50">صوت</th>
                                        <th scope="col">واژه</th>
                                        <th scope="col">روماجی</th>
                                        <th scope="col">معنی</th>
                                        <th scope="col">ترجمه</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($words_h as $k => $v) {
                                        if (file_exists("hiragana/media/" . $v['ro'] . ".mp3"))
                                            $icon = "text-success";
                                        else
                                            $icon = "text-warning";
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $i++ ?>.</th>
                                            <td>
                                                <button type="button" class="kata-play" title="Play" aria-label="Play" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button>
                                                <audio preload="none">
                                                    <source src="hiragana/media/<?= $v['ro'] ?>.mp3" type="audio/mpeg">
                                                </audio>
                                            </td>
                                            <td><span onclick="Copy(this)"><?= $v['jp'] ?></span><input type="text" class="NV"></td>
                                            <td><?= $v['ro'] ?></td>
                                            <td><?= $v['me'] ?></td>
                                            <td class="V"><?= $v['tr'] ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </article>
                <article class="docs-article" id="section-8">
                    <header class="docs-header">
                        <h1 class="docs-heading V rtl">
                            حرف م (M)
                        </h1>
                        <div class="alert alert-success" role="alert">
                            <table class="table text-center mb-0 table-borderless">
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">MA (ま)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ma.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">MI (み)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/mi.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">MU (む)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/mu.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">ME (め)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ne.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">MO (も)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/mo.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-12 text-center">
                            <img src="hiragana/pic/m_dakuten.jpg" class="img-thumbnail w-100" alt="m dakuten">
                        </div>
                    </header>
                    <section class="docs-section" id="item-8-1">
                        <h2 class="section-heading"><span onclick="Copy(this)">MA (ま)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت ما تلفظ میشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه جادویی(Magic) است که سر یک مارمورلک را قطع کرده، یا شبیه یک ماسک(Mask) میباشد </li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ま
                                <audio preload="none">
                                    <source src="hiragana/media/ma.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/ma.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/ma.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/ma_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-8-2">
                        <h2 class="section-heading"><span onclick="Copy(this)">MI (み)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت می تلفظ میشود </li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه عدد شانس 21 در پاسور میباشد، کی برنده است؟ من(Me)، همچنین مانند نت می در موسیقی است</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> み
                                <audio preload="none">
                                    <source src="hiragana/media/mi.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/mi.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/mi.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/mi_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-8-3">
                        <h2 class="section-heading"><span onclick="Copy(this)">MU (む)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت مو تلفظ میشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه یک گاو میباشد که صدای موووو در میاورد</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> む
                                <audio preload="none">
                                    <source src="hiragana/media/mu.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/mu.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/mu.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/mu_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-8-4">
                        <h2 class="section-heading"><span onclick="Copy(this)">ME (め)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت مـِ تلفظ میشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه چشم است که به ژاپنی هم مه تلفظ میشود</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> め
                                <audio preload="none">
                                    <source src="hiragana/media/me.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/me.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/me.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/me_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-8-5">
                        <h2 class="section-heading"><span onclick="Copy(this)">MO (も)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت مـُ تلفظ میشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> اگر میخواهید ماهی بیشتری(More Fish) بگیرید کرم بیشتری بذارید توی قلاب، همچنین این شکل شبیه مارمولک(Monitor) میباشد</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> も
                                <audio preload="none">
                                    <source src="hiragana/media/mo.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/mo.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/mo.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/mo_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-8-6">
                        <h2 class="section-heading rtl V">کلمات جدید</h2>
                        <div class="table-responsive my-4">
                            <table class="table table-striped words-table">
                                <thead class="V">
                                    <tr>
                                        <th scope="col" width="50">#</th>
                                        <th scope="col" width="50">صوت</th>
                                        <th scope="col">واژه</th>
                                        <th scope="col">روماجی</th>
                                        <th scope="col">معنی</th>
                                        <th scope="col">ترجمه</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($words_m as $k => $v) {
                                        if (file_exists("hiragana/media/" . $v['ro'] . ".mp3"))
                                            $icon = "text-success";
                                        else
                                            $icon = "text-warning";
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $i++ ?>.</th>
                                            <td>
                                                <button type="button" class="kata-play" title="Play" aria-label="Play" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button>
                                                <audio preload="none">
                                                    <source src="hiragana/media/<?= $v['ro'] ?>.mp3" type="audio/mpeg">
                                                </audio>
                                            </td>
                                            <td><span onclick="Copy(this)"><?= $v['jp'] ?></span><input type="text" class="NV"></td>
                                            <td><?= $v['ro'] ?></td>
                                            <td><?= $v['me'] ?></td>
                                            <td class="V"><?= $v['tr'] ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </article>
                <article class="docs-article" id="section-9">
                    <header class="docs-header">
                        <h1 class="docs-heading V rtl">
                            حرف ر (R)
                        </h1>
                        <div class="alert alert-danger" role="alert">
                            <table class="table text-center mb-0 table-borderless">
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">RA (ま)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ra.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">RI (み)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ri.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">RU (む)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ru.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">RE (め)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/re.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">RO (も)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ro.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-12 text-center">
                            <img src="hiragana/pic/r_dakuten.jpg" class="img-thumbnail w-100" alt="r dakuten">
                        </div>
                    </header>
                    <section class="docs-section" id="item-9-1">
                        <h2 class="section-heading"><span onclick="Copy(this)">RA (ら)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت را تلفظ میشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong>این علامت شبیه خرگوش(Rabbit) میباشد</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ら
                                <audio preload="none">
                                    <source src="hiragana/media/ra.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/ra.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/ra.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/ra_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-9-2">
                        <h2 class="section-heading"><span onclick="Copy(this)">RI (り)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت ری تلفظ میشود </li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه نی(Reed) میباشد، همچنین مشابه رودخانه(River) است</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> り
                                <audio preload="none">
                                    <source src="hiragana/media/ri.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/ri.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/ri.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/ri_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-9-3">
                        <h2 class="section-heading"><span onclick="Copy(this)">RU (る)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت رو تلفظ میشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه دست کسی است که یک یاقوت در مشت خود دارد، همچنین مانند مسیر(Route) میباشد </li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> る
                                <audio preload="none">
                                    <source src="hiragana/media/ru.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid" width="80%" autoplay muted loop>
                                    <source src="hiragana/media/ru.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/ru.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/ru_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-9-4">
                        <h2 class="section-heading"><span onclick="Copy(this)">RE (れ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت رِ تلفظ میشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه کسی است که در حال آروغ زدن(Retch) است، همچنین مانند گوزن شاخدار(Reindeer) است</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> れ
                                <audio preload="none">
                                    <source src="hiragana/media/re.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/re.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/re.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/re_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-9-5">
                        <h2 class="section-heading"><span onclick="Copy(this)">RO (ろ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت رُ تلفظ میشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه دست کسی است که یاقوت را از دستش دزدیده‌اند(Rubbed)</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ろ
                                <audio preload="none">
                                    <source src="hiragana/media/ro.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/ro.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/ro.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/ro_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-9-6">
                        <h2 class="section-heading rtl V">کلمات جدید</h2>
                        <div class="table-responsive my-4">
                            <table class="table table-striped words-table">
                                <thead class="V">
                                    <tr>
                                        <th scope="col" width="50">#</th>
                                        <th scope="col" width="50">صوت</th>
                                        <th scope="col">واژه</th>
                                        <th scope="col">روماجی</th>
                                        <th scope="col">معنی</th>
                                        <th scope="col">ترجمه</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($words_r as $k => $v) {
                                        if (file_exists("hiragana/media/" . $v['ro'] . ".mp3"))
                                            $icon = "text-success";
                                        else
                                            $icon = "text-warning";
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $i++ ?>.</th>
                                            <td>
                                                <button type="button" class="kata-play" title="Play" aria-label="Play" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button>
                                                <audio preload="none">
                                                    <source src="hiragana/media/<?= $v['ro'] ?>.mp3" type="audio/mpeg">
                                                </audio>
                                            </td>
                                            <td><span onclick="Copy(this)"><?= $v['jp'] ?></span><input type="text" class="NV"></td>
                                            <td><?= $v['ro'] ?></td>
                                            <td><?= $v['me'] ?></td>
                                            <td class="V"><?= $v['tr'] ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </article>
                <article class="docs-article" id="section-10">
                    <header class="docs-header">
                        <h1 class="docs-heading V rtl">
                            حرف ی (Y)
                        </h1>
                        <div class="alert alert-info" role="alert">
                            <table class="table text-center mb-0 table-borderless">
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">YA (や)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ya.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">YU (ゆ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/yu.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">YO (よ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/yo.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-12 text-center">
                            <img src="hiragana/pic/y_dakuten.jpg" class="img-thumbnail w-100" alt="y dakuten">
                        </div>
                    </header>
                    <section class="docs-section" id="item-10-1">
                        <h2 class="section-heading"><span onclick="Copy(this)">YA (や, ゃ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت یا تلفظ میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> علامت کوچک یا به منظور مخفف کردن تلفظ مورد استفاده قرار میگیرد き + ゃ → KIYA → KYA</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه گاومیش(Yak) است، همچنین مثل قایق تفریحی(Yacht) نیز هست</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> や
                                <audio preload="none">
                                    <source src="hiragana/media/ya.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/ya.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/ya.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/ya_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-10-2">
                        <h2 class="section-heading"><span onclick="Copy(this)">YU (ゆ, ゅ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت یو تلفظ میشود </li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> علامت کوچک یو به منظور مخفف کردن تلفظ مورد استفاده قرار میگیرد き + ゅ → KIYU → KYU</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه یونیکورن(Unicorn) و همچنین شبیه ماهی یونیک(Unique) میباشد</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ゆ
                                <audio preload="none">
                                    <source src="hiragana/media/yu.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/yu.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/yu.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/yu_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-10-3">
                        <h2 class="section-heading"><span onclick="Copy(this)">YO (よ, ょ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت یـُ تلفظ میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> علامت کوچک یـُ به منظور مخفف کردن تلفظ مورد استفاده قرار میگیرد じ + ょ → JIYO → JYO</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه یویو(YoYo) میباشد</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> よ
                                <audio preload="none">
                                    <source src="hiragana/media/yo.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/yo.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/yo.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/yo_font.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/y_combinations.jpg" class="img-thumbnail w-100" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-10-4">
                        <h2 class="section-heading rtl V">کلمات جدید</h2>
                        <div class="table-responsive my-4">
                            <table class="table table-striped words-table">
                                <thead class="V">
                                    <tr>
                                        <th scope="col" width="50">#</th>
                                        <th scope="col" width="50">صوت</th>
                                        <th scope="col">واژه</th>
                                        <th scope="col">روماجی</th>
                                        <th scope="col">معنی</th>
                                        <th scope="col">ترجمه</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($words_y as $k => $v) {
                                        if (file_exists("hiragana/media/" . $v['ro'] . ".mp3"))
                                            $icon = "text-success";
                                        else
                                            $icon = "text-warning";
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $i++ ?>.</th>
                                            <td>
                                                <button type="button" class="kata-play" title="Play" aria-label="Play" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button>
                                                <audio preload="none">
                                                    <source src="hiragana/media/<?= $v['ro'] ?>.mp3" type="audio/mpeg">
                                                </audio>
                                            </td>
                                            <td><span onclick="Copy(this)"><?= $v['jp'] ?></span><input type="text" class="NV"></td>
                                            <td><?= $v['ro'] ?></td>
                                            <td><?= $v['me'] ?></td>
                                            <td class="V"><?= $v['tr'] ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </article>
                <article class="docs-article" id="section-11">
                    <header class="docs-header">
                        <h1 class="docs-heading V rtl">
                            حرف و (W)
                        </h1>
                        <div class="alert alert-warning" role="alert">
                            <table class="table text-center mb-0 table-borderless">
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">WA (わ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/wa.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">WO (を)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/wo.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">N (ん)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/n.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-12 text-center">
                            <img src="hiragana/pic/w_dakuten.jpg" class="img-thumbnail w-100" alt="w dakuten">
                        </div>
                    </header>
                    <section class="docs-section" id="item-11-1">
                        <h2 class="section-heading"><span onclick="Copy(this)">WA (わ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت وا تلفظ میشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه قوی سپید(White Swan) میباشد، همچنین شبیه زنبور(Wasp) میباشد</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> わ
                                <audio preload="none">
                                    <source src="hiragana/media/wa.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/wa.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/wa.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/wa_font.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/similar.jpg" class="img-thumbnail w-100" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-11-2">
                        <h2 class="section-heading"><span onclick="Copy(this)">WO,O (を)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت وُ یا اُ تلفظ میشود </li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شکل کسی است که بومرنگ به صورتش اصابت کرده و این صدا را میدهد، همچننی مانند یک دیوار(Wall) شکسته است</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> を
                                <audio preload="none">
                                    <source src="hiragana/media/wo.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/wo.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/wo.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/wo_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-11-3">
                        <h2 class="section-heading"><span onclick="Copy(this)">N (ん)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت ن یا م یا انگ(ng) تلفظ میشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت مانند n میباشد</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ん
                                <audio preload="none">
                                    <source src="hiragana/media/n.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-5 mb-3 border">
                                <video class="img-fluid Video" width="70%" autoplay muted loop>
                                    <source src="hiragana/media/n.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-7 mb-3">
                                <img src="hiragana/pic/n.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="hiragana/pic/n_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-11-4">
                        <h2 class="section-heading rtl V">کلمات جدید</h2>
                        <div class="table-responsive my-4">
                            <table class="table table-striped words-table">
                                <thead class="V">
                                    <tr>
                                        <th scope="col" width="50">#</th>
                                        <th scope="col" width="50">صوت</th>
                                        <th scope="col">واژه</th>
                                        <th scope="col">روماجی</th>
                                        <th scope="col">معنی</th>
                                        <th scope="col">ترجمه</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($words_w as $k => $v) {
                                        if (file_exists("hiragana/media/" . $v['ro'] . ".mp3"))
                                            $icon = "text-success";
                                        else
                                            $icon = "text-warning";
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $i++ ?>.</th>
                                            <td>
                                                <button type="button" class="kata-play" title="Play" aria-label="Play" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button>
                                                <audio preload="none">
                                                    <source src="hiragana/media/<?= $v['ro'] ?>.mp3" type="audio/mpeg">
                                                </audio>
                                            </td>
                                            <td><span onclick="Copy(this)"><?= $v['jp'] ?></span><input type="text" class="NV"></td>
                                            <td><?= $v['ro'] ?></td>
                                            <td><?= $v['me'] ?></td>
                                            <td class="V"><?= $v['tr'] ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </article>

                <?php
                include("footer.php");
                ?>
            </div>
        </div>
    </div>
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/smoothscroll.min.js"></script>
    <script src="assets/plugins/simplelightbox/simple-lightbox.min.js"></script>
    <script src="assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script>
    <script src="assets/js/docs.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script>
        function ClickAudio(obj) {
            $(obj).next("audio")[0].play();
        }

        document.addEventListener("keydown", function (event) {
            if (event.key !== "Escape") return;
            var input = event.target.closest(".kana-filter-all");
            if (!input || input.value === "") return;
            input.value = "";
            input.dispatchEvent(new Event("input", {
                bubbles: true
            }));
        });

        /* جست‌وجوی سراسری در واژه‌های همهٔ بخش‌ها */
        function FilterAllKanaWords(input) {
            var q = (input.value || '').trim().toLowerCase();
            var articles = document.querySelectorAll('.docs-article[id^="section-"]');
            var total = 0;
            var shownTotal = 0;
            for (var a = 0; a < articles.length; a++) {
                var article = articles[a];
                var tables = article.querySelectorAll('table.words-table');
                if (!tables.length) continue;
                var shown = 0;
                var rowsTotal = 0;
                for (var t = 0; t < tables.length; t++) {
                    var rows = tables[t].querySelectorAll('tbody tr');
                    rowsTotal += rows.length;
                    for (var r = 0; r < rows.length; r++) {
                        var hit = q === '' || rows[r].textContent.toLowerCase().indexOf(q) !== -1;
                        rows[r].style.display = hit ? '' : 'none';
                        if (hit) shown++;
                    }
                }
                article.style.display = (q !== '' && shown === 0) ? 'none' : '';
                total += rowsTotal;
                shownTotal += shown;
            }
            var totalEl = document.getElementById('kanaCountAll');
            if (totalEl) totalEl.textContent = shownTotal + ' / ' + total;
            var emptyEl = document.getElementById('kanaEmptyAll');
            if (emptyEl) emptyEl.style.display = (q !== '' && shownTotal === 0) ? 'block' : 'none';
        }
        function PlayMp3(btn) {
            var audio = btn.nextElementSibling;
            if (!audio || audio.tagName.toLowerCase() !== "audio") return;
            var active = document.querySelectorAll(".kata-play.playing");
            for (var i = 0; i < active.length; i++) active[i].classList.remove("playing");
            document.querySelectorAll("audio").forEach(function (a) {
                if (!a.paused) a.pause();
            });
            try { audio.currentTime = 0; } catch (e) { }
            audio.onplaying = function () { btn.classList.add("playing"); };
            audio.onended = function () { btn.classList.remove("playing"); };
            audio.onerror = function () { btn.classList.remove("playing"); };
            var p = audio.play();
            if (p && typeof p.catch === "function") {
                p.catch(function () { btn.classList.remove("playing"); });
            }
        }

        function AddAct(obj) {
            $(obj).addClass("Act");
            ClickAudio(obj);
        }

        function RemoveAct(obj) {
            $(obj).removeClass("Act");
        }

        function Copy(obj) {
            $(obj).next().val($(obj).html());
            var Inp = obj.nextElementSibling;
            Inp.select();
            Inp.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(Inp.value);
            const tooltip = new bootstrap.Tooltip(obj, {
                trigger: 'manual',
                title: 'Copied'
            });
            tooltip.show();
            setTimeout(() => {
                tooltip.hide();
            }, 1000);
        }
    </script>
</body>

</html>