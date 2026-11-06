<?php
include("katakana/data.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Katakana Guide</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Learn Hiragana">
    <meta name="author" content="Mahdi Karimian 09123238133">
    <link rel="apple-touch-icon" sizes="57x57" href="katakana/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="katakana/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="katakana/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="katakana/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="katakana/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="katakana/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="katakana/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="katakana/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="katakana/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="katakana/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="katakana/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="katakana/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="katakana/favicon/favicon-16x16.png">
    <link rel="manifest" href="katakana/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="katakana/favicon/ms-icon-144x144.png">
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
            <nav id="docs-nav" class="docs-nav navbar">
                <ul class="section-items list-unstyled nav flex-column pb-3">
                    <li class="nav-item section-title"><a class="nav-link scrollto" href="#section-1"><span class="theme-icon-holder me-2"><i class="fas fa-school"></i></span>Concepts</a></li>
                    <li class="nav-item"><a class="nav-link" href="katakana_summary.php">Katakana Summary</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-1">Introduction</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-2">Katakana Guide Video</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-3">Resources</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#search-all"><i class="fas fa-search me-2"></i>Search</a></li>
                    <li class="nav-item section-title"><a class="nav-link scrollto" href="#section-2"><span class="theme-icon-holder me-2"><i class="fas fa-bullhorn"></i></span>Vowel Sounds</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-1">A (あ ア) ァ</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-2">I (い イ) ィ</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-3">U (う ウ,ヴ) ゥ</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-4">E (え エ) ェ</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-5">O (お オ) ォ</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-6">New Words</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-3"><span class="theme-icon-holder me-2"><i class="fas fa-book"></i></span>Consonant K, G</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-3-1">KA (か カ), GA (ガ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-3-2">KI (き キ), GI (ギ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-3-3">KU (く ク), GU (グ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-3-4">KE (け ケ), GE (ゲ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-3-5">KO (こ コ), GO (ゴ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-3-6">New Words</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-4"><span class="theme-icon-holder me-2"><i class="fas fa-book"></i></span>Consonant S, J</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-4-1">SA (さ サ), JA (ザ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-4-2">SHI (し シ), JI (ジ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-4-3">SU (す ス), JU (ズ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-4-4">SE (せ セ), JE (ゼ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-4-5">SO (そ ソ), JO (ゾ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-4-6">New Words</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-5"><span class="theme-icon-holder me-2"><i class="fas fa-book"></i></span>Consonant T, D</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-5-1">TA (た タ), DA (ダ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-5-2">CHI (ち チ), DJI (ヂ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-5-3">TSU (つ ツ), DJU (ヅ), ッ</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-5-4">TE (て テ), DE (デ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-5-5">TO (と ト), DO (ド)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-5-6">New Words</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-6"><span class="theme-icon-holder me-2"><i class="fas fa-book"></i></span>Consonant N</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-6-1">NA (な ナ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-6-2">NI (に ニ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-6-3">NU (ぬ ヌ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-6-4">NE (ね ネ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-6-5">NO (の ノ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-6-6">New Words</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-7"><span class="theme-icon-holder me-2"><i class="fas fa-book"></i></span>Consonant H, B, P</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-7-1">HA (は ハ), BA (バ), PA (パ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-7-2">HI (ひ ヒ), BI (ビ), PI (ピ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-7-3">HU (ふ フ), BU (ブ), PU (プ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-7-4">HE (へ ヘ), BE (ベ), PE (ペ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-7-5">HO (ほ ホ), BO (ボ), PO (ポ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-7-6">New Words</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-8"><span class="theme-icon-holder me-2"><i class="fas fa-book"></i></span>Consonant M</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-8-1">MA (ま マ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-8-2">MI (み ミ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-8-3">MU (む ム)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-8-4">ME (め メ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-8-5">MO (も モ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-8-6">New Words</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-9"><span class="theme-icon-holder me-2"><i class="fas fa-book"></i></span>Consonant R</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-9-1">RA (ら ラ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-9-2">RI (り リ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-9-3">RU (る ル)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-9-4">RE (れ レ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-9-5">RO (ろ ロ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-9-6">New Words</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-10"><span class="theme-icon-holder me-2"><i class="fas fa-book"></i></span>Consonant Y</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-10-1">YA (や ヤ) ャ</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-10-2">YU (ゆ ユ) ュ</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-10-3">YO (よ ヨ) ョ</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-10-4">New Words</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-11"><span class="theme-icon-holder me-2"><i class="fas fa-book"></i></span>Consonant W</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-11-1">WA (わ ワ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-11-2">WO (を ヲ)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-11-3">N (ん ン)</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-11-4">New Words</a></li>
                </ul>
            </nav>
        </div>
        <div class="docs-content">
            <div class="container">
                <article class="docs-article" id="section-1">
                    <header class="docs-header">
                        <h1 class="docs-heading V rtl">
                            راهنمای جامع کاتاکانا
                        </h1>
                    </header>
                    <section class="docs-intro V docs-section rtl">
                        <ol>
                            <li class="text-justify"><strong>صفحه خلاصه کاتاکانا:</strong> اگر آشنایی مقدماتی با کاتاکانا دارید برای دیدن کاراکتر و تلفظ کاتاکانا به <a class="btn btn-primary" href="katakana_summary.php">صفحه خلاصه کاتاکانا</a> مراجعه کنید</li>
                            <li class="text-justify"><strong>کاراکترها:</strong> کل کاتاکانا متشکل از 9 کاراکتر(T, H, A, N, K, S, M, Y, R, W) میباشد که ترکیبی با اصوات آ،او،ای، اِ، اُ میسازند</li>
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
                                <a href="katakana/pic/kata1.jpg"><img loading="lazy" class="figure-img img-fluid shadow rounded" src="katakana/pic/kata1.jpg" alt="Katakana"></a>
                            </div>
                            <div class="col-12 col-md-4 mb-3">
                                <a href="katakana/pic/kata2.jpg"><img loading="lazy" class="figure-img img-fluid shadow rounded" src="katakana/pic/kata2.jpg" alt="Katakana"></a>
                            </div>
                            <div class="col-12 col-md-4 mb-3">
                                <a href="katakana/pic/kata3.jpg"><img loading="lazy" class="figure-img img-fluid shadow rounded" src="katakana/pic/kata3.jpg" alt="Katakana"></a>
                            </div>
                            <div class="col-12 col-md-4 mb-3">
                                <a href="katakana/pic/kata4.jpg"><img loading="lazy" class="figure-img img-fluid shadow rounded" src="katakana/pic/kata4.jpg" alt="Katakana"></a>
                            </div>
                            <div class="col-12 col-md-4 mb-3">
                                <a href="katakana/pic/kata6.jpg"><img loading="lazy" class="figure-img img-fluid shadow rounded" src="katakana/pic/kata6.jpg" alt="Katakana"></a>
                            </div>
                            <div class="col-12 col-md-4 mb-3">
                                <a href="katakana/pic/kata5.jpg"><img loading="lazy" class="figure-img img-fluid shadow rounded" src="katakana/pic/kata5.jpg" alt="Katakana"></a>
                            </div>
                            <div class="col-12 col-md-4 mb-3">
                                <a href="katakana/pic/kata7.jpg"><img loading="lazy" class="figure-img img-fluid shadow rounded" src="katakana/pic/kata7.jpg" alt="Katakana"></a>
                            </div>
                            <div class="col-12 col-md-4 mb-3">
                                <a href="katakana/pic/kata8.jpg"><img loading="lazy" class="figure-img img-fluid shadow rounded" src="katakana/pic/kata8.jpg" alt="Katakana"></a>
                            </div>
                            <div class="col-12 col-md-4 mb-3">
                                <a href="katakana/pic/kata9.jpg"><img loading="lazy" class="figure-img img-fluid shadow rounded" src="katakana/pic/kata9.jpg" alt="Katakana"></a>
                            </div>
                            <div class="col-12">
                                <a href="katakana/pic/kata_sounds.png"><img loading="lazy" class="figure-img img-fluid shadow rounded w-100" src="katakana/pic/kata_sounds.png" alt="Katakana"></a>
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-1-1">
                        <h2 class="rtl section-heading V">خلاصه کاتاکانا <span class="Note">(برای پخش صدا روی نوشته‌ها کلیک نمایید)</span></h2>
                        <div class="alert alert-info" role="alert">
                            <table class="table text-center mb-0 table-borderless">
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">A (あ ア)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/a.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">I (い イ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/i.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">U (う ウ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/u.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">E (え エ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/e.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">O (お オ)</span>
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
                                        <span onclick="ClickAudio(this)" class="CP">KA (か カ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ka.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">KI (き キ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ki.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">KU (く ク)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ku.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">KE (け ケ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ke.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">KO (こ コ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ko.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">GA (が ガ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ga.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">GI (ぎ ギ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/gi.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">GU (ぐ グ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/gu.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">GE (げ ゲ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ge.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">GO (ご ゴ)</span>
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
                                        <span onclick="ClickAudio(this)" class="CP">SA (さ サ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/sa.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">SHI (し シ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/si.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">SU (す ス)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/su.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">SE (せ セ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/se.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">SO (そ ソ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/so.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">JA (ざ ザ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ja.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">JI (じ ジ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ji.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">JU (ず ズ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ju.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">JE (ぜ ゼ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/je.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">JO (ぞ ゾ)</span>
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
                                        <span onclick="ClickAudio(this)" class="CP">TA (た タ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ta.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">CHI (ち チ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/chi.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">TSU (つ ツ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/tsu.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">TE (て テ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/te.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">TO (と ト)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/to.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">DA (だ ダ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/da.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">DJI (ぢ ヂ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/dji.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">DJU (づ ヅ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/dju.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">DE (で デ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/de.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">DO (ど ド)</span>
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
                                        <span onclick="ClickAudio(this)" class="CP">NA (な ナ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/na.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">NI (に ニ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ni.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">NU (ぬ ヌ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/nu.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">NE (ね ネ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ne.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">NO (の ノ)</span>
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
                                        <span onclick="ClickAudio(this)" class="CP">HA (は ハ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ha.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">HI (ひ ヒ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/hi.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">HU (ふ フ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/hu.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">HE (へ ヘ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/he.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">HO (ほ ホ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ho.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">BA (ば バ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ba.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">BI (び ビ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/bi.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">BU (ぶ ブ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/bu.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">BE (べ ベ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/be.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">BO (ぼ ボ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/bo.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">PA (ぱ パ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/pa.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">PI (ぴ ピ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/pi.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">PU (ぷ プ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/pu.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">PE (ぺ ペ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/pe.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">PO (ぽ ポ)</span>
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
                                        <span onclick="ClickAudio(this)" class="CP">MA (ま マ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ma.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">MI (み ミ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/mi.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">MU (む ム)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/mu.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">ME (め メ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ne.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">MO (も モ)</span>
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
                                        <span onclick="ClickAudio(this)" class="CP">RA (ら ラ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ra.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">RI (り リ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ri.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">RU (る ル)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ru.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">RE (れ レ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/re.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">RO (ろ ロ)</span>
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
                                        <span onclick="ClickAudio(this)" class="CP">YA (や ヤ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ya.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">YU (ゆ ユ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/yu.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">YO (よ ヨ)</span>
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
                                        <span onclick="ClickAudio(this)" class="CP">WA (わ ワ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/wa.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">WO (を ヲ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/wo.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">N (ん ン)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/n.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </section>
                    <section class="docs-section rtl" id="item-1-2">
                        <h2 class="section-heading V">فیلم آموزشی کاتاکانا</h2>
                        <div class="callout-block callout-block-warning">
                            <div class="content">
                                <h4 class="callout-title rtl V">
                                    <span class="callout-icon-holder me-1">
                                        <i class="fas fa-bullhorn"></i>
                                    </span>
                                    فیلم آموزش نوشتاری کاتاکانا
                                </h4>
                                <div class="row">
                                    <div class="col align-self-center mb-3">
                                        <video preload="none" poster="katakana/pic/poster.jpg" class="img-fluid w-100" controls>
                                            <source src="katakana/media/katakana_write.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                                <h4 class="callout-title rtl V">
                                    <span class="callout-icon-holder me-1">
                                        <i class="fas fa-bullhorn"></i>
                                    </span>
                                    فیلم آموزش کاتاکانا
                                </h4>
                                <div class="row">
                                    <div class="col align-self-center mb-3">
                                        <video preload="none" poster="katakana/pic/poster1.jpg" class="img-fluid w-100" controls>
                                            <source src="katakana/media/katakana.mp4" type="video/mp4">
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
                                        <th class="theme-bg-light"><i class="fas fa-external-link-alt"></i> <a class="theme-link" target="_blank" href="katakana/media/kata1.pdf">کتاب</a></th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th><?= $i++ ?></th>
                                        <th class="theme-bg-light"><i class="fas fa-external-link-alt"></i> <a class="theme-link" target="_blank" href="katakana/media/kata2.pdf">کتاب</a></th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th><?= $i++ ?></th>
                                        <th class="theme-bg-light"><i class="fas fa-external-link-alt"></i> <a class="theme-link" target="_blank" href="katakana/media/kata3.pdf">کتاب</a></th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th><?= $i++ ?></th>
                                        <th class="theme-bg-light"><i class="fas fa-external-link-alt"></i> <a class="theme-link" target="_blank" href="katakana/media/kata4.pdf">کتاب</a></th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th><?= $i++ ?></th>
                                        <th class="theme-bg-light"><i class="fas fa-external-link-alt"></i> <a class="theme-link" target="_blank" href="katakana/media/kata5.pdf">کتاب</a></th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th><?= $i++ ?></th>
                                        <th class="theme-bg-light"><i class="fas fa-external-link-alt"></i> <a class="theme-link" target="_blank" href="katakana/media/kata6.pdf">کتاب</a></th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th><?= $i++ ?></th>
                                        <th class="theme-bg-light"><i class="fas fa-external-link-alt"></i> <a class="theme-link" target="_blank" href="katakana/media/kata7.pdf">کتاب</a></th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th><?= $i++ ?></th>
                                        <th class="theme-bg-light"><i class="fas fa-external-link-alt"></i> <a class="theme-link" target="_blank" href="katakana/media/kata8.pdf">کتاب</a></th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th><?= $i++ ?></th>
                                        <th class="theme-bg-light"><i class="fas fa-external-link-alt"></i> <a class="theme-link" target="_blank" href="katakana/media/kata9.pdf">کتاب</a></th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th><?= $i++ ?></th>
                                        <th class="theme-bg-light"><i class="fas fa-external-link-alt"></i> <a class="theme-link" target="_blank" href="https://www3.nhk.or.jp/nhkworld/lesson/en/letters/katakana.html">سایت</a></th>
                                        <td></td>
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
                                <input type="text" id="kanaFilterAll" class="form-control kana-filter-all" placeholder="عبارت را بنویسید (کاتاکانا، روماجی یا معنی)..." oninput="FilterAllKanaWords(this)" aria-label="جستجو در کل واژه‌های صفحه">
                            </div>
                            <span id="kanaCountAll" class="kata-count"><?= count($kata_words) ?> / <?= count($kata_words) ?></span>
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
                                        <span onclick="ClickAudio(this)" class="CP">A (あ ア)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/a.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">I (い イ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/i.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">U (う ウ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/u.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">E (え エ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/e.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">O (お オ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/o.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </header>
                    <section class="docs-section" id="item-2-1">
                        <h2 class="section-heading"><span onclick="Copy(this)">A (ア)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بین صدای آ و ـَ تلفظ میشود</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> Play
                                <audio preload="none">
                                    <source src="hiragana/media/a.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/ア.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/a_font.jpg" class="img-thumbnail" alt="katakana">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-2-2">
                        <h2 class="section-heading"><span onclick="Copy(this)">I (イ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> ایـ تلفظ میشود</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> Play
                                <audio preload="none">
                                    <source src="hiragana/media/i.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/イ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/i_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-2-3">
                        <h2 class="section-heading"><span onclick="Copy(this)">U (ウ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> برای تلفظ او نباید لبها کاملأ به حالت غنچه در بیاید در حد 30% کافی است و همچنین باید کوتاه ادا شود، زمان تلفظ باید کوتاه باشد</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> علامت داکوتن به او اضافه میشود و حرف وو را میسازد</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> Play
                                <audio preload="none">
                                    <source src="hiragana/media/u.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/ウ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/u_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-2-4">
                        <h2 class="section-heading"><span onclick="Copy(this)">E (エ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت ـِ تلفظ میشود</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> Play
                                <audio preload="none">
                                    <source src="hiragana/media/e.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/エ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/e_font.jpg" class="img-thumbnail" alt="katakana">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-2-5">
                        <h2 class="section-heading"><span onclick="Copy(this)">O (オ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت اُ - ـُ تلفظ میشود</li>
                            <li><strong class="me-1">نکته گرامری:</strong> در ابتدای کلمات قرار میگیرد برای نشان دادن ادب</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> Play
                                <audio preload="none">
                                    <source src="hiragana/media/o.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/オ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/o_font.jpg" class="img-thumbnail" alt="katakana">
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
                                    foreach (kata_words_by_kana($kata_words, "ア イ ウ エ オ ヴ ァ ィ ゥ ェ ォ") as $v) {
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $i++ ?>.</th>
                                            <td>
                                                <button type="button" class="kata-play" title="Play" aria-label="Play" onclick="SpeakJa(this, <?= htmlspecialchars(json_encode($v['jp'], JSON_UNESCAPED_UNICODE), ENT_QUOTES) ?>)">
                                                    <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg>
                                                </button>
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
                                        <span onclick="ClickAudio(this)" class="CP">KA (か カ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ka.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">KI (き キ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ki.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">KU (く ク)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ku.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">KE (け ケ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ke.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">KO (こ コ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ko.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">GA (が ガ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ga.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">GI (ぎ ギ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/gi.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">GU (ぐ グ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/gu.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">GE (げ ゲ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ge.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">GO (ご ゴ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/go.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </header>
                    <section class="docs-section" id="item-3-1">
                        <h2 class="section-heading"><span onclick="Copy(this)">KA (カ), GA (ガ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت کا تلفظ میشود</li>
                            <li><strong class="me-1">نکته گرامری:</strong> در اغلب موارد در انتهای جمله نشانه سوالی بودن جمله است</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> علامتی به نام داکوتن یا تن‌تن که مانند کوتیشن است به کا اضافه میشود و حرف گا را میسازد</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> カ
                                <audio preload="none">
                                    <source src="hiragana/media/ka.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ガ
                                <audio preload="none">
                                    <source src="hiragana/media/ga.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/カ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/ka_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-3-2">
                        <h2 class="section-heading"><span onclick="Copy(this)">KI (キ), GI (ギ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت کی تلفظ میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با داکوتن حرف گی ساخته میشود</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> キ
                                <audio preload="none">
                                    <source src="hiragana/media/ki.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ギ
                                <audio preload="none">
                                    <source src="hiragana/media/gi.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/キ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/ki_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-3-3">
                        <h2 class="section-heading"><span onclick="Copy(this)">KU (ク), GU (グ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت کو تلفظ میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با داکوتن حرف گو ساخته میشود</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ク
                                <audio preload="none">
                                    <source src="hiragana/media/ku.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> グ
                                <audio preload="none">
                                    <source src="hiragana/media/gu.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/ク.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/ku_font.jpg" class="img-thumbnail" alt="katakana">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-3-4">
                        <h2 class="section-heading"><span onclick="Copy(this)">KE (ケ), GE (ゲ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت کـِ تلفظ میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با داکوتن حرف گـِ ساخته میشود</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ケ
                                <audio preload="none">
                                    <source src="hiragana/media/ke.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ゲ
                                <audio preload="none">
                                    <source src="hiragana/media/ge.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/ケ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/ke_font.jpg" class="img-thumbnail" alt="katakana">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-3-5">
                        <h2 class="section-heading"><span onclick="Copy(this)">KO (コ), GO (ゴ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت کـُ تلفظ میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با داکوتن حرف گـُ ساخته میشود</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> コ
                                <audio preload="none">
                                    <source src="hiragana/media/ko.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ゴ
                                <audio preload="none">
                                    <source src="hiragana/media/go.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/コ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/ko_font.jpg" class="img-thumbnail" alt="katakana">
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
                                    foreach (kata_words_by_kana($kata_words, "カ キ ク ケ コ ガ ギ グ ゲ ゴ") as $v) {
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $i++ ?>.</th>
                                            <td>
                                                <button type="button" class="kata-play" title="Play" aria-label="Play" onclick="SpeakJa(this, <?= htmlspecialchars(json_encode($v['jp'], JSON_UNESCAPED_UNICODE), ENT_QUOTES) ?>)">
                                                    <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg>
                                                </button>
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
                                        <span onclick="ClickAudio(this)" class="CP">SA (さ サ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/sa.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">SHI (し シ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/si.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">SU (す ス)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/su.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">SE (せ セ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/se.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">SO (そ ソ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/so.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">JA (ざ ザ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ja.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">JI (じ ジ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ji.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">JU (ず ズ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ju.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">JE (ぜ ゼ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/je.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">JO (ぞ ゾ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/jo.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </header>
                    <section class="docs-section" id="item-4-1">
                        <h2 class="section-heading"><span onclick="Copy(this)">SA (サ), JA (ザ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت سا تلفظ میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با داکوتن حرف جا (زا) ساخته میشود</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> サ
                                <audio preload="none">
                                    <source src="hiragana/media/sa.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ザ
                                <audio preload="none">
                                    <source src="hiragana/media/ja.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/サ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/sa_font.jpg" class="img-thumbnail" alt="katakana">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-4-2">
                        <h2 class="section-heading"><span onclick="Copy(this)">SHI (シ), JI (ジ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت سی یا شی تلفظ میشود البته بصورت دقیق حالتی بین س و ش ادا میشود </li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با داکوتن حرف جی ساخته میشود</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> シ
                                <audio preload="none">
                                    <source src="hiragana/media/si.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ジ
                                <audio preload="none">
                                    <source src="hiragana/media/ji.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/シ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/si_font.jpg" class="img-thumbnail" alt="katakana">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-4-3">
                        <h2 class="section-heading"><span onclick="Copy(this)">SU (ス), JU (ズ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت سو تلفظ میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با داکوتن حرف جو ساخته میشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه یک تاب سوینگ (Swing) میباشد</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ス
                                <audio preload="none">
                                    <source src="hiragana/media/su.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ズ
                                <audio preload="none">
                                    <source src="hiragana/media/ju.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/ス.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/su_font.jpg" class="img-thumbnail" alt="katakana">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-4-4">
                        <h2 class="section-heading"><span onclick="Copy(this)">SE (セ), JE (ゼ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت سـِ تلفظ میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با داکوتن حرف جـِ ساخته میشود</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> セ
                                <audio preload="none">
                                    <source src="hiragana/media/se.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ゼ
                                <audio preload="none">
                                    <source src="hiragana/media/je.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/セ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/se_font.jpg" class="img-thumbnail" alt="katakana">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-4-5">
                        <h2 class="section-heading"><span onclick="Copy(this)">SO (ソ), JO (ゾ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت سـُ تلفظ میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با داکوتن حرف جـُ ساخته میشود</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ソ
                                <audio preload="none">
                                    <source src="hiragana/media/so.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ゾ
                                <audio preload="none">
                                    <source src="hiragana/media/jo.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/ソ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/so_font.jpg" class="img-thumbnail" alt="katakana">
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
                                    foreach (kata_words_by_kana($kata_words, "サ シ ス セ ソ ザ ジ ズ ゼ ゾ") as $v) {
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $i++ ?>.</th>
                                            <td>
                                                <button type="button" class="kata-play" title="Play" aria-label="Play" onclick="SpeakJa(this, <?= htmlspecialchars(json_encode($v['jp'], JSON_UNESCAPED_UNICODE), ENT_QUOTES) ?>)">
                                                    <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg>
                                                </button>
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
                                        <span onclick="ClickAudio(this)" class="CP">TA (た タ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ta.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">CHI (ち チ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/chi.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">TSU (つ ツ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/tsu.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">TE (て テ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/te.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">TO (と ト)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/to.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">DA (だ ダ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/da.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">DJI (ぢ ヂ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/dji.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">DJU (づ ヅ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/dju.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">DE (で デ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/de.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">DO (ど ド)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/do.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </header>
                    <section class="docs-section" id="item-5-1">
                        <h2 class="section-heading"><span onclick="Copy(this)">TA (タ), DA (ダ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت تا تلفظ میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با داکوتن حرف دا ساخته میشود</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> タ
                                <audio preload="none">
                                    <source src="hiragana/media/ta.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ダ
                                <audio preload="none">
                                    <source src="hiragana/media/da.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/タ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/ta_font.jpg" class="img-thumbnail" alt="katakana">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-5-2">
                        <h2 class="section-heading"><span onclick="Copy(this)">CHI (チ), DJI (ヂ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت چی تلفظ میشود </li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با داکوتن حرف جی ساخته میشود</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> チ
                                <audio preload="none">
                                    <source src="hiragana/media/chi.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ヂ
                                <audio preload="none">
                                    <source src="hiragana/media/dji.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/チ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/chi_font.jpg" class="img-thumbnail" alt="katakana">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-5-3">
                        <h2 class="section-heading"><span onclick="Copy(this)">TSU (ツ), DJU (ヅ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت چو(تسو) تلفظ میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با داکوتن حرف جو ساخته میشود</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ツ
                                <audio preload="none">
                                    <source src="hiragana/media/tsu.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ヅ
                                <audio preload="none">
                                    <source src="hiragana/media/dju.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/ツ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-7 mb-3">
                                <img src="katakana/pic/tsu-shi.jpg" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/tsu_font.jpg" class="img-thumbnail" alt="katakana">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-5-4">
                        <h2 class="section-heading"><span onclick="Copy(this)">TE (テ), DE (デ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت تـِ تلفظ میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با داکوتن حرف دِ ساخته میشود</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> テ
                                <audio preload="none">
                                    <source src="hiragana/media/te.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> デ
                                <audio preload="none">
                                    <source src="hiragana/media/de.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/テ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/te_font.jpg" class="img-thumbnail" alt="katakana">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-5-5">
                        <h2 class="section-heading"><span onclick="Copy(this)">TO (ト), DO (ド)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت تـُ تلفظ میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با داکوتن حرف دُ ساخته میشود</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ト
                                <audio preload="none">
                                    <source src="hiragana/media/to.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ド
                                <audio preload="none">
                                    <source src="hiragana/media/do.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/ト.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/to_font.jpg" class="img-thumbnail" alt="katakana">
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
                                    foreach (kata_words_by_kana($kata_words, "タ チ ツ テ ト ダ ヂ ヅ デ ド ッ T") as $v) {
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $i++ ?>.</th>
                                            <td>
                                                <button type="button" class="kata-play" title="Play" aria-label="Play" onclick="SpeakJa(this, <?= htmlspecialchars(json_encode($v['jp'], JSON_UNESCAPED_UNICODE), ENT_QUOTES) ?>)">
                                                    <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg>
                                                </button>
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
                                        <span onclick="ClickAudio(this)" class="CP">NA (な ナ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/na.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">NI (に ニ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ni.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">NU (ぬ ヌ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/nu.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">NE (ね ネ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ne.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">NO (の ノ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/no.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </header>
                    <section class="docs-section" id="item-6-1">
                        <h2 class="section-heading"><span onclick="Copy(this)">NA (ナ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت نا تلفظ میشود</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ナ
                                <audio preload="none">
                                    <source src="hiragana/media/na.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/ナ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/na_font.jpg" class="img-thumbnail" alt="katakana">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-6-2">
                        <h2 class="section-heading"><span onclick="Copy(this)">NI (ニ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت نی تلفظ میشود </li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ニ
                                <audio preload="none">
                                    <source src="hiragana/media/ni.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/ニ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/ni_font.jpg" class="img-thumbnail" alt="katakana">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-6-3">
                        <h2 class="section-heading"><span onclick="Copy(this)">NU (ヌ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت نو تلفظ میشود</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ヌ
                                <audio preload="none">
                                    <source src="hiragana/media/nu.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/ヌ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/nu_font.jpg" class="img-thumbnail" alt="katakana">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-6-4">
                        <h2 class="section-heading"><span onclick="Copy(this)">NE (ネ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت نـِ تلفظ میشود</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ネ
                                <audio preload="none">
                                    <source src="hiragana/media/ne.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/ネ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/ne_font.jpg" class="img-thumbnail" alt="katakana">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-6-5">
                        <h2 class="section-heading"><span onclick="Copy(this)">NO (ノ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت نـُ تلفظ میشود</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ノ
                                <audio preload="none">
                                    <source src="hiragana/media/no.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/ノ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/no_font.jpg" class="img-thumbnail" alt="katakana">
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
                                    foreach (kata_words_by_kana($kata_words, "ナ ニ ヌ ネ ノ") as $v) {
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $i++ ?>.</th>
                                            <td>
                                                <button type="button" class="kata-play" title="Play" aria-label="Play" onclick="SpeakJa(this, <?= htmlspecialchars(json_encode($v['jp'], JSON_UNESCAPED_UNICODE), ENT_QUOTES) ?>)">
                                                    <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg>
                                                </button>
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
                                        <span onclick="ClickAudio(this)" class="CP">HA (は ハ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ha.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">HI (ひ ヒ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/hi.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">HU (ふ フ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/hu.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">HE (へ ヘ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/he.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">HO (ほ ホ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ho.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">BA (ば バ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ba.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">BI (び ビ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/bi.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">BU (ぶ ブ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/bu.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">BE (べ ベ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/be.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">BO (ぼ ボ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/bo.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">PA (ぱ パ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/pa.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">PI (ぴ ピ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/pi.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">PU (ぷ プ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/pu.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">PE (ぺ ペ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/pe.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">PO (ぽ ポ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/po.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </header>
                    <section class="docs-section" id="item-7-1">
                        <h2 class="section-heading"><span onclick="Copy(this)">HA,WA (ハ), BA (バ), PA (パ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت ها یا وا تلفظ میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با داکوتن حرف با ساخته میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با هان داکوتن حرف پا ساخته میشود</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ハ
                                <audio preload="none">
                                    <source src="hiragana/media/ha.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> バ
                                <audio preload="none">
                                    <source src="hiragana/media/ba.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> パ
                                <audio preload="none">
                                    <source src="hiragana/media/pa.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/ハ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/ha_font.jpg" class="img-thumbnail" alt="katakana">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-7-2">
                        <h2 class="section-heading"><span onclick="Copy(this)">HI (ヒ), BI (ビ), PI (ピ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت هی تلفظ میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با داکوتن حرف بی ساخته میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با هان داکوتن حرف پی ساخته میشود</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ヒ
                                <audio preload="none">
                                    <source src="hiragana/media/hi.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ビ
                                <audio preload="none">
                                    <source src="hiragana/media/bi.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ピ
                                <audio preload="none">
                                    <source src="hiragana/media/pi.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/ヒ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/hi_font.jpg" class="img-thumbnail" alt="katakana">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-7-3">
                        <h2 class="section-heading"><span onclick="Copy(this)">HU (フ), BU (ブ), PU (プ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> تلفظ این حرف چیزی بین هو و فو است</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با داکوتن حرف بو ساخته میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با هان داکوتن حرف پو ساخته میشود</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> フ
                                <audio preload="none">
                                    <source src="hiragana/media/hu.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ブ
                                <audio preload="none">
                                    <source src="hiragana/media/bu.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> プ
                                <audio preload="none">
                                    <source src="hiragana/media/pu.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/フ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/hu_font.jpg" class="img-thumbnail" alt="katakana">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-7-4">
                        <h2 class="section-heading"><span onclick="Copy(this)">HE,E (ヘ), BE (べ), PE (ぺ)</span><input type="text" class="NV"></h2>
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
                            </li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> べ
                                <audio preload="none">
                                    <source src="hiragana/media/be.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ぺ
                                <audio preload="none">
                                    <source src="hiragana/media/pe.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/ヘ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/he_font.jpg" class="img-thumbnail" alt="katakana">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-7-5">
                        <h2 class="section-heading"><span onclick="Copy(this)">HO (ホ), BO (ボ), PO (ポ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت هـُ تلفظ میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با داکوتن حرف بـُ ساخته میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> با هان داکوتن حرف پـُ ساخته میشود</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ホ
                                <audio preload="none">
                                    <source src="hiragana/media/ho.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ボ
                                <audio preload="none">
                                    <source src="hiragana/media/bo.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ポ
                                <audio preload="none">
                                    <source src="hiragana/media/po.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/ホ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/ho_font.jpg" class="img-thumbnail" alt="katakana">
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
                                    foreach (kata_words_by_kana($kata_words, "ハ ヒ フ ヘ ホ バ ビ ブ ベ ボ パ ピ プ ペ ポ") as $v) {
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $i++ ?>.</th>
                                            <td>
                                                <button type="button" class="kata-play" title="Play" aria-label="Play" onclick="SpeakJa(this, <?= htmlspecialchars(json_encode($v['jp'], JSON_UNESCAPED_UNICODE), ENT_QUOTES) ?>)">
                                                    <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg>
                                                </button>
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
                                        <span onclick="ClickAudio(this)" class="CP">MA (ま マ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ma.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">MI (み ミ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/mi.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">MU (む ム)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/mu.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">ME (め メ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ne.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">MO (も モ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/mo.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </header>
                    <section class="docs-section" id="item-8-1">
                        <h2 class="section-heading"><span onclick="Copy(this)">MA (マ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت ما تلفظ میشود</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> マ
                                <audio preload="none">
                                    <source src="hiragana/media/ma.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/マ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/ma_font.jpg" class="img-thumbnail" alt="katakana">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-8-2">
                        <h2 class="section-heading"><span onclick="Copy(this)">MI (ミ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت می تلفظ میشود </li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ミ
                                <audio preload="none">
                                    <source src="hiragana/media/mi.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/ミ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/mi_font.jpg" class="img-thumbnail" alt="katakana">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-8-3">
                        <h2 class="section-heading"><span onclick="Copy(this)">MU (ム)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت مو تلفظ میشود</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ム
                                <audio preload="none">
                                    <source src="hiragana/media/mu.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/ム.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/mu_font.jpg" class="img-thumbnail" alt="katakana">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-8-4">
                        <h2 class="section-heading"><span onclick="Copy(this)">ME (メ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت مـِ تلفظ میشود</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> メ
                                <audio preload="none">
                                    <source src="hiragana/media/me.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/メ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/me_font.jpg" class="img-thumbnail" alt="katakana">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-8-5">
                        <h2 class="section-heading"><span onclick="Copy(this)">MO (モ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت مـُ تلفظ میشود</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> モ
                                <audio preload="none">
                                    <source src="hiragana/media/mo.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/モ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/mo_font.jpg" class="img-thumbnail" alt="katakana">
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
                                    foreach (kata_words_by_kana($kata_words, "マ ミ ム メ モ") as $v) {
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $i++ ?>.</th>
                                            <td>
                                                <button type="button" class="kata-play" title="Play" aria-label="Play" onclick="SpeakJa(this, <?= htmlspecialchars(json_encode($v['jp'], JSON_UNESCAPED_UNICODE), ENT_QUOTES) ?>)">
                                                    <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg>
                                                </button>
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
                                        <span onclick="ClickAudio(this)" class="CP">RA (ら ラ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ra.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">RI (り リ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ri.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">RU (る ル)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ru.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">RE (れ レ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/re.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">RO (ろ ロ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ro.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </header>
                    <section class="docs-section" id="item-9-1">
                        <h2 class="section-heading"><span onclick="Copy(this)">RA (ラ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت را تلفظ میشود</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ラ
                                <audio preload="none">
                                    <source src="hiragana/media/ra.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/ラ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/ra_font.jpg" class="img-thumbnail" alt="katakana">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-9-2">
                        <h2 class="section-heading"><span onclick="Copy(this)">RI (リ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت ری تلفظ میشود </li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت شبیه نی(Reed) میباشد، همچنین مشابه رودخانه(River) است</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> リ
                                <audio preload="none">
                                    <source src="hiragana/media/ri.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/リ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/ri_font.jpg" class="img-thumbnail" alt="katakana">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-9-3">
                        <h2 class="section-heading"><span onclick="Copy(this)">RU (ル)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت رو تلفظ میشود</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ル
                                <audio preload="none">
                                    <source src="hiragana/media/ru.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/ル.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/ru_font.jpg" class="img-thumbnail" alt="katakana">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-9-4">
                        <h2 class="section-heading"><span onclick="Copy(this)">RE (レ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت رِ تلفظ میشود</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> レ
                                <audio preload="none">
                                    <source src="hiragana/media/re.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/レ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/re_font.jpg" class="img-thumbnail" alt="katakana">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-9-5">
                        <h2 class="section-heading"><span onclick="Copy(this)">RO (ロ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت رُ تلفظ میشود</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ロ
                                <audio preload="none">
                                    <source src="hiragana/media/ro.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/ロ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/ro_font.jpg" class="img-thumbnail" alt="katakana">
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
                                    foreach (kata_words_by_kana($kata_words, "ラ リ ル レ ロ") as $v) {
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $i++ ?>.</th>
                                            <td>
                                                <button type="button" class="kata-play" title="Play" aria-label="Play" onclick="SpeakJa(this, <?= htmlspecialchars(json_encode($v['jp'], JSON_UNESCAPED_UNICODE), ENT_QUOTES) ?>)">
                                                    <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg>
                                                </button>
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
                                        <span onclick="ClickAudio(this)" class="CP">YA (や ヤ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/ya.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">YU (ゆ ユ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/yu.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">YO (よ ヨ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/yo.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </header>
                    <section class="docs-section" id="item-10-1">
                        <h2 class="section-heading"><span onclick="Copy(this)">YA (ヤ, ャ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت یا تلفظ میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> علامت کوچک یا به منظور مخفف کردن تلفظ مورد استفاده قرار میگیرد</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ヤ
                                <audio preload="none">
                                    <source src="hiragana/media/ya.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/ヤ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/ya_font.jpg" class="img-thumbnail" alt="katakana">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-10-2">
                        <h2 class="section-heading"><span onclick="Copy(this)">YU (ユ, ュ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت یو تلفظ میشود </li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> علامت کوچک یو به منظور مخفف کردن تلفظ مورد استفاده قرار میگیرد</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ユ
                                <audio preload="none">
                                    <source src="hiragana/media/yu.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/ユ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/yu_font.jpg" class="img-thumbnail" alt="katakana">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-10-3">
                        <h2 class="section-heading"><span onclick="Copy(this)">YO (ヨ, ョ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت یـُ تلفظ میشود</li>
                            <li><strong class="me-1">کاراکتر مشابه:</strong> علامت کوچک یـُ به منظور مخفف کردن تلفظ مورد استفاده قرار میگیرد</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> よ
                                <audio preload="none">
                                    <source src="hiragana/media/yo.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/ヨ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/yo_font.jpg" class="img-thumbnail" alt="katakana">
                            </div>
                            <div class="col-12 pl-0 mt-3">
                                <img src="katakana/pic/y.jpg" class="img-thumbnail w-100" alt="katakana">
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
                                    foreach (kata_words_by_kana($kata_words, "ヤ ユ ヨ ャ ュ ョ") as $v) {
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $i++ ?>.</th>
                                            <td>
                                                <button type="button" class="kata-play" title="Play" aria-label="Play" onclick="SpeakJa(this, <?= htmlspecialchars(json_encode($v['jp'], JSON_UNESCAPED_UNICODE), ENT_QUOTES) ?>)">
                                                    <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg>
                                                </button>
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
                                        <span onclick="ClickAudio(this)" class="CP">WA (わ ワ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/wa.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">WO (を ヲ)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/wo.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td class="bg-transparent">
                                        <span onclick="ClickAudio(this)" class="CP">N (ん ン)</span>
                                        <audio preload="none">
                                            <source src="hiragana/media/n.mp3" type="audio/mpeg">
                                        </audio>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </header>
                    <section class="docs-section" id="item-11-1">
                        <h2 class="section-heading"><span onclick="Copy(this)">WA (ワ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت وا تلفظ میشود</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ワ
                                <audio preload="none">
                                    <source src="hiragana/media/wa.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/ワ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/wa_font.jpg" class="img-thumbnail" alt="katakana">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-11-2">
                        <h2 class="section-heading"><span onclick="Copy(this)">WO,O (ヲ)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت وُ یا اُ تلفظ میشود </li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ヲ
                                <audio preload="none">
                                    <source src="hiragana/media/wo.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/ヲ.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/wo_font.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                    </section>
                    <section class="docs-section" id="item-11-3">
                        <h2 class="section-heading"><span onclick="Copy(this)">N (ン)</span><input type="text" class="NV"></h2>
                        <ul class="rtl V">
                            <li><strong class="me-1">تلفظ:</strong> بصورت ن یا م یا انگ(ng) تلفظ میشود</li>
                            <li><strong class="me-1">نشانه گذاری:</strong> این علامت مانند n میباشد</li>
                            <li>
                                <button type="button" class="kata-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="PlayMp3(this)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button> ン
                                <audio preload="none">
                                    <source src="hiragana/media/n.mp3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                        <div class="row mb-3 rtl">
                            <div class="col-5 mb-3">
                                <img src="katakana/media/ン.gif" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-7 mb-3">
                                <img src="katakana/pic/dakuten.jpg" class="img-thumbnail w-100" alt="katakana">
                            </div>
                            <div class="col-12 pl-0">
                                <img src="katakana/pic/n_font.jpg" class="img-thumbnail" alt="katakana">
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
                                    foreach (kata_words_by_kana($kata_words, "ワ ヲ ン") as $v) {
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $i++ ?>.</th>
                                            <td>
                                                <button type="button" class="kata-play" title="Play" aria-label="Play" onclick="SpeakJa(this, <?= htmlspecialchars(json_encode($v['jp'], JSON_UNESCAPED_UNICODE), ENT_QUOTES) ?>)">
                                                    <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg>
                                                </button>
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

        function AddAct(obj) {
            $(obj).addClass("Act");
            ClickAudio(obj);
        }

        function RemoveAct(obj) {
            $(obj).removeClass("Act");
        }

        function SpeakJa(obj, text) {
            if (!("speechSynthesis" in window)) return;
            window.speechSynthesis.cancel();
            var u = new SpeechSynthesisUtterance(text);
            u.lang = "ja-JP";
            u.rate = 0.85;
            var ja = (window.speechSynthesis.getVoices() || []).filter(function (v) {
                return v.lang && v.lang.indexOf("ja") === 0;
            });
            if (ja.length) u.voice = ja[0];
            u.onstart = function () { obj.classList.add("playing"); };
            u.onend = function () { u.onerror = null; obj.classList.remove("playing"); };
            u.onerror = function () { obj.classList.remove("playing"); };
            window.speechSynthesis.speak(u);
        }

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
        document.addEventListener("keydown", function (event) {
            if (event.key !== "Escape") return;
            var input = event.target.closest(".kana-filter-all");
            if (!input || input.value === "") return;
            input.value = "";
            input.dispatchEvent(new Event("input", {
                bubbles: true
            }));
        });
    </script>
</body>

</html>