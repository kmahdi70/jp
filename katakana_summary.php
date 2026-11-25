<?php require_once __DIR__ . '/lang.php';
require_once __DIR__ . '/seo.php'; ?><!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <?php seo_head([
        'title' => 'جدول خلاصهٔ کاتاکانا — مرور سریع همهٔ صداها',
        'description' => 'جدول فشردهٔ کاتاکانا برای مرور سریع: صداهای پایه، داکوتن، هانداکوتن و ترکیب‌ها در یک صفحه.',
        'path' => 'katakana_summary.php',
        'nav' => 'خلاصهٔ کاتاکانا',
        'jsonld' => [
            '@type' => 'LearningResource',
            'name' => 'جدول خلاصهٔ کاتاکانا',
            'description' => 'جدول فشردهٔ همهٔ صداهای کاتاکانا برای مرور سریع.',
            'learningResourceType' => 'مرجع',
        ],
    ]); ?>
    <meta name="viewport" content="width=device-width,user-scalable=yes,initial-scale=1">
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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/common.css?v6">
    <link rel="stylesheet" href="css/kana.css">
    <style>
        .summary-title { direction: rtl; text-align: right; margin-bottom: 10px; }
        .summary-intro { direction: rtl; text-align: right; max-width: 900px; margin: 0 auto 22px; padding: 0 15px; line-height: 1.9; color: #444; }
        html[lang="en"] .summary-title,
        html[lang="en"] .summary-intro { direction: ltr; text-align: left; }
    </style>
</head>

<body>
    <section>
        <div class="m_section_inner">
            <br>
            <div class="jp-top-utilities">
                <a href="katakana.php" class="btn btn-success">بازگشت به کاتاکانا</a>
                <?= jp_lang_switch() ?>
            </div>
            <br><br>
            <h1 class="summary-title">جدول خلاصهٔ کاتاکانا</h1>
            <p class="summary-intro">این صفحه مرور سریع و فشردهٔ کاتاکاناست: همهٔ صداهای پایه، داکوتن، هانداکوتن و ترکیب‌ها یک‌جا و بدون توضیح اضافه. با کلیک روی هر کاراکتر، کلیپ ترتیب نوشتن آن در همین صفحه پخش می‌شود و دکمهٔ کنارش صدای همان صدا را می‌خواند. کاتاکانا بیشتر برای نوشتن واژه‌های خارجی، نام‌ها و صداها به کار می‌رود؛ همین جدول برای خواندن تابلوها و منوی رستوران‌ها هم به کار می‌آید. برای معنی، واژه‌های نمونه و توضیح کامل هر صدا، صفحهٔ آموزش کاتاکانا را ببینید.</p>
            <div class="kana_list">
                <div class="seidakuon">
                    <ul>
                        <li class="column_a alone">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('a')"><img loading="lazy" decoding="async" src="katakana/site/a.png" alt="ア"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">a</button>
                                    <audio preload="none">
                                        <source src="katakana/site/a.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('i')"><img loading="lazy" decoding="async" src="katakana/site/i.png" alt="イ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">i</button>
                                    <audio preload="none">
                                        <source src="katakana/site/i.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('u')"><img loading="lazy" decoding="async" src="katakana/site/u.png" alt="ウ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">u</button>
                                    <audio preload="none">
                                        <source src="katakana/site/u.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('e')"><img loading="lazy" decoding="async" src="katakana/site/e.png" alt="エ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">e</button>
                                    <audio preload="none">
                                        <source src="katakana/site/e.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('o')"><img loading="lazy" decoding="async" src="katakana/site/o.png" alt="オ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">o</button>
                                    <audio preload="none">
                                        <source src="katakana/site/o.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                            </ul>
                        </li>
                        <li class="column_ka double">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('ka')"><img loading="lazy" decoding="async" src="katakana/site/ka.png" alt="カ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">ka</button>
                                    <audio preload="none">
                                        <source src="katakana/site/ka.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('ki')"><img loading="lazy" decoding="async" src="katakana/site/ki.png" alt="キ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">ki</button>
                                    <audio preload="none">
                                        <source src="katakana/site/ki.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('ku')"><img loading="lazy" decoding="async" src="katakana/site/ku.png" alt="ク"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">ku</button>
                                    <audio preload="none">
                                        <source src="katakana/site/ku.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('ke')"><img loading="lazy" decoding="async" src="katakana/site/ke.png" alt="ケ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">ke</button>
                                    <audio preload="none">
                                        <source src="katakana/site/ke.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('ko')"><img loading="lazy" decoding="async" src="katakana/site/ko.png" alt="コ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">ko</button>
                                    <audio preload="none">
                                        <source src="katakana/site/ko.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                            </ul>
                        </li>
                        <li class="column_ga">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('ga')"><img loading="lazy" decoding="async" src="katakana/site/ga.png" alt="ガ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">ga</button>
                                    <audio preload="none">
                                        <source src="katakana/site/ga.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('gi')"><img loading="lazy" decoding="async" src="katakana/site/gi.png" alt="ギ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">gi</button>
                                    <audio preload="none">
                                        <source src="katakana/site/gi.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('gu')"><img loading="lazy" decoding="async" src="katakana/site/gu.png" alt="グ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">gu</button>
                                    <audio preload="none">
                                        <source src="katakana/site/gu.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('ge')"><img loading="lazy" decoding="async" src="katakana/site/ge.png" alt="ゲ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">ge</button>
                                    <audio preload="none">
                                        <source src="katakana/site/ge.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('go')"><img loading="lazy" decoding="async" src="katakana/site/go.png" alt="ゴ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">go</button>
                                    <audio preload="none">
                                        <source src="katakana/site/go.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                            </ul>
                        </li>
                        <li class="column_sa double">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('sa')"><img loading="lazy" decoding="async" src="katakana/site/sa.png" alt="サ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">sa</button>
                                    <audio preload="none">
                                        <source src="katakana/site/sa.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('shi')"><img loading="lazy" decoding="async" src="katakana/site/shi.png" alt="シ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">shi</button>
                                    <audio preload="none">
                                        <source src="katakana/site/shi.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('su')"><img loading="lazy" decoding="async" src="katakana/site/su.png" alt="ス"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">su</button>
                                    <audio preload="none">
                                        <source src="katakana/site/su.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('se')"><img loading="lazy" decoding="async" src="katakana/site/se.png" alt="セ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">se</button>
                                    <audio preload="none">
                                        <source src="katakana/site/se.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('so')"><img loading="lazy" decoding="async" src="katakana/site/so.png" alt="ソ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">so</button>
                                    <audio preload="none">
                                        <source src="katakana/site/so.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                            </ul>
                        </li>
                        <li class="column_za">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('za')"><img loading="lazy" decoding="async" src="katakana/site/za.png" alt="ザ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">za</button>
                                    <audio preload="none">
                                        <source src="katakana/site/za.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('ji')"><img loading="lazy" decoding="async" src="katakana/site/ji.png" alt="ジ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">ji</button>
                                    <audio preload="none">
                                        <source src="katakana/site/ji.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('zu')"><img loading="lazy" decoding="async" src="katakana/site/zu.png" alt="ズ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">zu</button>
                                    <audio preload="none">
                                        <source src="katakana/site/zu.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('ze')"><img loading="lazy" decoding="async" src="katakana/site/ze.png" alt="ゼ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">ze</button>
                                    <audio preload="none">
                                        <source src="katakana/site/ze.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('zo')"><img loading="lazy" decoding="async" src="katakana/site/zo.png" alt="ゾ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">zo</button>
                                    <audio preload="none">
                                        <source src="katakana/site/zo.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                            </ul>

                        </li>
                        <li class="column_ta double">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('ta')"><img loading="lazy" decoding="async" src="katakana/site/ta.png" alt="タ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">ta</button>
                                    <audio preload="none">
                                        <source src="katakana/site/ta.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('chi')"><img loading="lazy" decoding="async" src="katakana/site/chi.png" alt="チ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">chi</button>
                                    <audio preload="none">
                                        <source src="katakana/site/chi.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('tsu')"><img loading="lazy" decoding="async" src="katakana/site/tsu.png" alt="ツ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">tsu</button>
                                    <audio preload="none">
                                        <source src="katakana/site/tsu.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('te')"><img loading="lazy" decoding="async" src="katakana/site/te.png" alt="テ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">te</button>
                                    <audio preload="none">
                                        <source src="katakana/site/te.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('to')"><img loading="lazy" decoding="async" src="katakana/site/to.png" alt="ト"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">to</button>
                                    <audio preload="none">
                                        <source src="katakana/site/to.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                            </ul>
                        </li>
                        <li class="column_da">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('da')"><img loading="lazy" decoding="async" src="katakana/site/da.png" alt="ダ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">da</button>
                                    <audio preload="none">
                                        <source src="katakana/site/da.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('di')"><img loading="lazy" decoding="async" src="katakana/site/di.png" alt="ヂ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">ji</button>
                                    <audio preload="none">
                                        <source src="katakana/site/di.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('du')"><img loading="lazy" decoding="async" src="katakana/site/du.png" alt="ヅ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">zu</button>
                                    <audio preload="none">
                                        <source src="katakana/site/du.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('de')"><img loading="lazy" decoding="async" src="katakana/site/de.png" alt="デ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">de</button>
                                    <audio preload="none">
                                        <source src="katakana/site/de.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('do')"><img loading="lazy" decoding="async" src="katakana/site/do.png" alt="ド"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">do</button>
                                    <audio preload="none">
                                        <source src="katakana/site/do.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                            </ul>
                        </li>
                        <li class="column_na alone">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('na')"><img loading="lazy" decoding="async" src="katakana/site/na.png" alt="ナ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">na</button>
                                    <audio preload="none">
                                        <source src="katakana/site/na.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('ni')"><img loading="lazy" decoding="async" src="katakana/site/ni.png" alt="ニ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">ni</button>
                                    <audio preload="none">
                                        <source src="katakana/site/ni.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('nu')"><img loading="lazy" decoding="async" src="katakana/site/nu.png" alt="ヌ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">nu</button>
                                    <audio preload="none">
                                        <source src="katakana/site/nu.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('ne')"><img loading="lazy" decoding="async" src="katakana/site/ne.png" alt="ネ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">ne</button>
                                    <audio preload="none">
                                        <source src="katakana/site/ne.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('no')"><img loading="lazy" decoding="async" src="katakana/site/no.png" alt="ノ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">no</button>
                                    <audio preload="none">
                                        <source src="katakana/site/no.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                            </ul>
                        </li>
                        <li class="column_ha double">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('ha')"><img loading="lazy" decoding="async" src="katakana/site/ha.png" alt="ハ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">ha</button>
                                    <audio preload="none">
                                        <source src="katakana/site/ha.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('hi')"><img loading="lazy" decoding="async" src="katakana/site/hi.png" alt="ヒ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">hi</button>
                                    <audio preload="none">
                                        <source src="katakana/site/hi.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('fu')"><img loading="lazy" decoding="async" src="katakana/site/fu.png" alt="フ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">fu</button>
                                    <audio preload="none">
                                        <source src="katakana/site/fu.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('he')"><img loading="lazy" decoding="async" src="katakana/site/he.png" alt="ヘ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">he</button>
                                    <audio preload="none">
                                        <source src="katakana/site/he.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('ho')"><img loading="lazy" decoding="async" src="katakana/site/ho.png" alt="ホ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">ho</button>
                                    <audio preload="none">
                                        <source src="katakana/site/ho.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                            </ul>
                        </li>
                        <li class="column_ba">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('ba')"><img loading="lazy" decoding="async" src="katakana/site/ba.png" alt="バ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">ba</button>
                                    <audio preload="none">
                                        <source src="katakana/site/ba.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('bi')"><img loading="lazy" decoding="async" src="katakana/site/bi.png" alt="ビ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">bi</button>
                                    <audio preload="none">
                                        <source src="katakana/site/bi.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('bu')"><img loading="lazy" decoding="async" src="katakana/site/bu.png" alt="ブ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">bu</button>
                                    <audio preload="none">
                                        <source src="katakana/site/bu.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('be')"><img loading="lazy" decoding="async" src="katakana/site/be.png" alt="ベ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">be</button>
                                    <audio preload="none">
                                        <source src="katakana/site/be.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('bo')"><img loading="lazy" decoding="async" src="katakana/site/bo.png" alt="ボ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">bo</button>
                                    <audio preload="none">
                                        <source src="katakana/site/bo.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                            </ul>
                        </li>
                        <li class="column_pa alone_psound">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('pa')"><img loading="lazy" decoding="async" src="katakana/site/pa.png" alt="パ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">pa</button>
                                    <audio preload="none">
                                        <source src="katakana/site/pa.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('pi')"><img loading="lazy" decoding="async" src="katakana/site/pi.png" alt="ピ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">pi</button>
                                    <audio preload="none">
                                        <source src="katakana/site/pi.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('pu')"><img loading="lazy" decoding="async" src="katakana/site/pu.png" alt="プ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">pu</button>
                                    <audio preload="none">
                                        <source src="katakana/site/pu.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('pe')"><img loading="lazy" decoding="async" src="katakana/site/pe.png" alt="ペ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">pe</button>
                                    <audio preload="none">
                                        <source src="katakana/site/pe.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('po')"><img loading="lazy" decoding="async" src="katakana/site/po.png" alt="ポ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">po</button>
                                    <audio preload="none">
                                        <source src="katakana/site/po.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                            </ul>
                        </li>
                        <li class="column_ma alone">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('ma')"><img loading="lazy" decoding="async" src="katakana/site/ma.png" alt="マ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">ma</button>
                                    <audio preload="none">
                                        <source src="katakana/site/ma.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('mi')"><img loading="lazy" decoding="async" src="katakana/site/mi.png" alt="ミ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">mi</button>
                                    <audio preload="none">
                                        <source src="katakana/site/mi.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('mu')"><img loading="lazy" decoding="async" src="katakana/site/mu.png" alt="ム"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">mu</button>
                                    <audio preload="none">
                                        <source src="katakana/site/mu.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('me')"><img loading="lazy" decoding="async" src="katakana/site/me.png" alt="メ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">me</button>
                                    <audio preload="none">
                                        <source src="katakana/site/me.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('mo')"><img loading="lazy" decoding="async" src="katakana/site/mo.png" alt="モ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">mo</button>
                                    <audio preload="none">
                                        <source src="katakana/site/mo.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                            </ul>
                        </li>
                        <li class="column_ya alone">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('ya')"><img loading="lazy" decoding="async" src="katakana/site/ya.png" alt="ヤ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">ya</button>
                                    <audio preload="none">
                                        <source src="katakana/site/ya.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('yu')"><img loading="lazy" decoding="async" src="katakana/site/yu.png" alt="ユ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">yu</button>
                                    <audio preload="none">
                                        <source src="katakana/site/yu.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('yo')"><img loading="lazy" decoding="async" src="katakana/site/yo.png" alt="ヨ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">yo</button>
                                    <audio preload="none">
                                        <source src="katakana/site/yo.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                            </ul>
                        </li>
                        <li class="column_ra alone">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('ra')"><img loading="lazy" decoding="async" src="katakana/site/ra.png" alt="ラ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">ra</button>
                                    <audio preload="none">
                                        <source src="katakana/site/ra.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('ri')"><img loading="lazy" decoding="async" src="katakana/site/ri.png" alt="リ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">ri</button>
                                    <audio preload="none">
                                        <source src="katakana/site/ri.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('ru')"><img loading="lazy" decoding="async" src="katakana/site/ru.png" alt="ル"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">ru</button>
                                    <audio preload="none">
                                        <source src="katakana/site/ru.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('re')"><img loading="lazy" decoding="async" src="katakana/site/re.png" alt="レ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">re</button>
                                    <audio preload="none">
                                        <source src="katakana/site/re.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('ro')"><img loading="lazy" decoding="async" src="katakana/site/ro.png" alt="ロ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">ro</button>
                                    <audio preload="none">
                                        <source src="katakana/site/ro.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                            </ul>
                        </li>
                        <li class="column_wa alone">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('wa')"><img loading="lazy" decoding="async" src="katakana/site/wa.png" alt="マ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">wa</button>
                                    <audio preload="none">
                                        <source src="katakana/site/wa.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('wo')"><img loading="lazy" decoding="async" src="katakana/site/wo.png" alt="ヲ"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">o</button>
                                    <audio preload="none">
                                        <source src="katakana/site/wo.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                            </ul>
                        </li>
                        <li class="column_n alone">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Video" onclick="Play('n')"><img loading="lazy" decoding="async" src="katakana/site/n.png" alt="ン"></a>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">n</button>
                                    <audio preload="none">
                                        <source src="katakana/site/n.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>


                <div class="youon">
                    <ul>
                        <li class="column_kya double">
                            <ul>
                                <li>
                                    <span><img loading="lazy" decoding="async" src="katakana/site/kya.png" alt="キャ"></span>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">kya</button>
                                    <audio preload="none">
                                        <source src="katakana/site/kya.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <span><img loading="lazy" decoding="async" src="katakana/site/kyu.png" alt="キュ"></span>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">kyu</button>
                                    <audio preload="none">
                                        <source src="katakana/site/kyu.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <span><img loading="lazy" decoding="async" src="katakana/site/kyo.png" alt="キョ"></span>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">kyo</button>
                                    <audio preload="none">
                                        <source src="katakana/site/kyo.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                            </ul>
                        </li>
                        <li class="column_gya">
                            <ul>
                                <li>
                                    <span><img loading="lazy" decoding="async" src="katakana/site/gya.png" alt="ギャ"></span>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">gya</button>
                                    <audio preload="none">
                                        <source src="katakana/site/gya.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <span><img loading="lazy" decoding="async" src="katakana/site/gyu.png" alt="ギュ"></span>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">gyu</button>
                                    <audio preload="none">
                                        <source src="katakana/site/gyu.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <span><img loading="lazy" decoding="async" src="katakana/site/gyo.png" alt="ギョ"></span>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">gyo</button>
                                    <audio preload="none">
                                        <source src="katakana/site/gyo.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                            </ul>
                        </li>
                        <li class="column_sha double">
                            <ul>
                                <li>
                                    <span><img loading="lazy" decoding="async" src="katakana/site/sha.png" alt="シャ"></span>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">sha</button>
                                    <audio preload="none">
                                        <source src="katakana/site/sha.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <span><img loading="lazy" decoding="async" src="katakana/site/shu.png" alt="シュ"></span>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">shu</button>
                                    <audio preload="none">
                                        <source src="katakana/site/shu.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <span><img loading="lazy" decoding="async" src="katakana/site/sho.png" alt="ショ"></span>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">sho</button>
                                    <audio preload="none">
                                        <source src="katakana/site/sho.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                            </ul>
                        </li>
                        <li class="column_ja">
                            <ul>
                                <li>
                                    <span><img loading="lazy" decoding="async" src="katakana/site/ja.png" alt="ジャ"></span>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">ja</button>
                                    <audio preload="none">
                                        <source src="katakana/site/ja.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <span><img loading="lazy" decoding="async" src="katakana/site/ju.png" alt="ジュ"></span>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">ju</button>
                                    <audio preload="none">
                                        <source src="katakana/site/ju.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <span><img loading="lazy" decoding="async" src="katakana/site/jo.png" alt="ジョ"></span>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">jo</button>
                                    <audio preload="none">
                                        <source src="katakana/site/jo.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                            </ul>
                        </li>
                        <li class="column_cha alone">
                            <ul>
                                <li>
                                    <span><img loading="lazy" decoding="async" src="katakana/site/cha.png" alt="チャ"></span>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">cha</button>
                                    <audio preload="none">
                                        <source src="katakana/site/cha.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <span><img loading="lazy" decoding="async" src="katakana/site/chu.png" alt="チュ"></span>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">chu</button>
                                    <audio preload="none">
                                        <source src="katakana/site/chu.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <span><img loading="lazy" decoding="async" src="katakana/site/cho.png" alt="チョ"></span>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">cho</button>
                                    <audio preload="none">
                                        <source src="katakana/site/cho.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                            </ul>
                        </li>
                        <li class="column_nya alone">
                            <ul>
                                <li>
                                    <span><img loading="lazy" decoding="async" src="katakana/site/nya.png" alt="ニャ"></span>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">nya</button>
                                    <audio preload="none">
                                        <source src="katakana/site/nya.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <span><img loading="lazy" decoding="async" src="katakana/site/nyu.png" alt="ニュ"></span>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">nyu</button>
                                    <audio preload="none">
                                        <source src="katakana/site/nyu.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <span><img loading="lazy" decoding="async" src="katakana/site/nyo.png" alt="ニョ"></span>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">nyo</button>
                                    <audio preload="none">
                                        <source src="katakana/site/nyo.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                            </ul>
                        </li>
                        <li class="column_hya double">
                            <ul>
                                <li>
                                    <span><img loading="lazy" decoding="async" src="katakana/site/hya.png" alt="ヒャ"></span>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">hya</button>
                                    <audio preload="none">
                                        <source src="katakana/site/hya.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <span><img loading="lazy" decoding="async" src="katakana/site/hyu.png" alt="ヒュ"></span>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">hyu</button>
                                    <audio preload="none">
                                        <source src="katakana/site/hyu.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <span><img loading="lazy" decoding="async" src="katakana/site/hyo.png" alt="ヒョ"></span>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">hyo</button>
                                    <audio preload="none">
                                        <source src="katakana/site/hyo.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                            </ul>
                        </li>
                        <li class="column_bya">
                            <ul>
                                <li>
                                    <span><img loading="lazy" decoding="async" src="katakana/site/bya.png" alt="ビャ"></span>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">bya</button>
                                    <audio preload="none">
                                        <source src="katakana/site/bya.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <span><img loading="lazy" decoding="async" src="katakana/site/byu.png" alt="ビュ"></span>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">byu</button>
                                    <audio preload="none">
                                        <source src="katakana/site/byu.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <span><img loading="lazy" decoding="async" src="katakana/site/byo.png" alt="ビョ"></span>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">byo</button>
                                    <audio preload="none">
                                        <source src="katakana/site/byo.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                            </ul>
                        </li>
                        <li class="column_pya alone_psound">
                            <ul>
                                <li>
                                    <span><img loading="lazy" decoding="async" src="katakana/site/pya.png" alt="ピャ"></span>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">pya</button>
                                    <audio preload="none">
                                        <source src="katakana/site/pya.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <span><img loading="lazy" decoding="async" src="katakana/site/pyu.png" alt="ピュ"></span>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">pyu</button>
                                    <audio preload="none">
                                        <source src="katakana/site/pyu.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <span><img loading="lazy" decoding="async" src="katakana/site/pyo.png" alt="ピョ"></span>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">pyo</button>
                                    <audio preload="none">
                                        <source src="katakana/site/pyo.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                            </ul>
                        </li>
                        <li class="column_mya alone">
                            <ul>
                                <li>
                                    <span><img loading="lazy" decoding="async" src="katakana/site/mya.png" alt="ミャ"></span>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">mya</button>
                                    <audio preload="none">
                                        <source src="katakana/site/mya.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <span><img loading="lazy" decoding="async" src="katakana/site/myu.png" alt="ミュ"></span>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">myu</button>
                                    <audio preload="none">
                                        <source src="katakana/site/myu.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <span><img loading="lazy" decoding="async" src="katakana/site/myo.png" alt="ミョ"></span>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">myo</button>
                                    <audio preload="none">
                                        <source src="katakana/site/myo.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                            </ul>
                        </li>
                        <li class="column_rya alone">
                            <ul>
                                <li>
                                    <span><img loading="lazy" decoding="async" src="katakana/site/rya.png" alt="リャ"></span>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">rya</button>
                                    <audio preload="none">
                                        <source src="katakana/site/rya.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <span><img loading="lazy" decoding="async" src="katakana/site/ryu.png" alt="リュ"></span>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">ryu</button>
                                    <audio preload="none">
                                        <source src="katakana/site/ryu.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                                <li>
                                    <span><img loading="lazy" decoding="async" src="katakana/site/ryo.png" alt="リョ"></span>
                                    <button class="PlayBtn"><img loading="lazy" decoding="async" src="katakana/pic/icon_sounds.png" alt="">ryo</button>
                                    <audio preload="none">
                                        <source src="katakana/site/ryo.mp3" type="audio/mp3">
                                    </audio>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <a href="katakana.php" class="btn btn-success">بازگشت به کاتاکانا</a>
                    <br><br>
                </div>
            </div>
            <div style="text-align: center;" dir="rtl">
                این صفحه بر پایهٔ جدول <a href="https://a1.marugotoweb.jp/en/katakana.php" style="text-decoration: underline;">این سایت</a> ساخته شده است.
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="Video" tabindex="-1" aria-labelledby="Video" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title " id="exampleModalLabel">نوشتار</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="بستن"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 text-center">
                            <video preload="none" id="ModalVideo" class="img-fluid" muted loop></video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script>
        $(".PlayBtn").click(function() {
            $(this).next("audio")[0].play();
        });

        function Play(FileName) {
            $('#ModalVideo').attr('src', "katakana/site/" + FileName + ".mp4");
            $("#ModalVideo")[0].defaultPlaybackRate = 2.5;
            $("#ModalVideo")[0].load();
            $("#ModalVideo")[0].play();
        }
    </script>
</body>
</html>
