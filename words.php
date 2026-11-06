<?php
include __DIR__ . "/words/data.php";

/* شمار کل واژه‌ها برای بخش اپندیکس */
$words_total = 0;
foreach ($word_sections as $ws) {
    $words_total += count($ws['words']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Vocabulary — 5000 Everyday Japanese Words</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="4000 most useful Japanese words with kanji, romaji and Persian meanings">
    <meta name="author" content="Mahdi Karimian 09123238133">
    <link rel="icon" type="image/png" href="words/favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/svg+xml" href="words/favicon/favicon.svg">
    <link rel="shortcut icon" href="words/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="words/favicon/apple-touch-icon.png">
    <meta name="apple-mobile-web-app-title" content="JPWords">
    <link rel="manifest" href="words/favicon/site.webmanifest">
    <script defer src="assets/fontawesome/js/all.min.js"></script>
    <link rel="stylesheet" href="assets/plugins/simplelightbox/simple-lightbox.min.css">
    <link id="theme-style" rel="stylesheet" href="assets/css/theme.css">
    <link rel="stylesheet" href="css/global.css?<?= rand(1,1000)?>">
    <link rel="stylesheet" href="css/words.css?<?= rand(1,1000)?>">
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
                    <li class="nav-item section-title"><a class="nav-link scrollto" href="#section-1"><span class="theme-icon-holder me-2"><i class="fas fa-book"></i></span>Vocabulary</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-1">How To Read A Row</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-2">Word Classes</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-3">Order Of Words</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#search-all"><i class="fas fa-search me-2"></i>Search</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#item-2-1"><span class="theme-icon-holder me-2"><i class="fas fa-users"></i></span>People & Family <span class="badge bg-success ms-2">164</span></a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#item-2-2"><span class="theme-icon-holder me-2"><i class="fas fa-clock"></i></span>Time &amp; Date <span class="badge bg-success ms-2">165</span></a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#item-2-3"><span class="theme-icon-holder me-2"><i class="fas fa-utensils"></i></span>Food &amp; Drink <span class="badge bg-success ms-2">100</span></a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#item-2-4"><span class="theme-icon-holder me-2"><i class="fas fa-heartbeat"></i></span>Body &amp; Health <span class="badge bg-success ms-2">115</span></a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#item-2-5"><span class="theme-icon-holder me-2"><i class="fas fa-leaf"></i></span>Nature &amp; Animals <span class="badge bg-success ms-2">180</span></a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#item-2-6"><span class="theme-icon-holder me-2"><i class="fas fa-map-marked-alt"></i></span>Places &amp; Transport <span class="badge bg-success ms-2">249</span></a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#item-2-7"><span class="theme-icon-holder me-2"><i class="fas fa-box-open"></i></span>Home, Objects &amp; School <span class="badge bg-success ms-2">210</span></a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#item-2-8"><span class="theme-icon-holder me-2"><i class="fas fa-briefcase"></i></span>Work, Society &amp; Money <span class="badge bg-success ms-2">138</span></a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#item-2-9"><span class="theme-icon-holder me-2"><i class="fas fa-cubes"></i></span>Everyday Nouns <span class="badge bg-success ms-2">1255</span></a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#item-2-10"><span class="theme-icon-holder me-2"><i class="fas fa-running"></i></span>Verbs <span class="badge bg-success ms-2">1632</span></a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#item-2-11"><span class="theme-icon-holder me-2"><i class="fas fa-adjust"></i></span>I-Adjectives <span class="badge bg-success ms-2">131</span></a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#item-2-12"><span class="theme-icon-holder me-2"><i class="fas fa-star"></i></span>Na-Adjectives <span class="badge bg-success ms-2">307</span></a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#item-2-13"><span class="theme-icon-holder me-2"><i class="fas fa-forward"></i></span>Adverbs <span class="badge bg-success ms-2">191</span></a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#item-2-14"><span class="theme-icon-holder me-2"><i class="fas fa-comment-dots"></i></span>Expressions <span class="badge bg-success ms-2">80</span></a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#item-2-15"><span class="theme-icon-holder me-2"><i class="fas fa-hashtag"></i></span>Pronouns & Numbers <span class="badge bg-success ms-2">83</span></a></li>
                </ul>
            </nav>
        </div>
        <div class="docs-content">
            <div class="container">
                <article class="docs-article" id="section-1">
                    <header class="docs-header">
                        <h1 class="docs-heading V rtl">
                            ۵۰۰۰ واژهٔ پرکاربرد ژاپنی
                        </h1>
                    </header>
                    <section class="docs-intro V docs-section rtl">
                        <p class="text-justify">این صفحه فهرستی از پرتکرارترین واژه‌های گفتار روزمرهٔ ژاپنی است: ۵۰۰۰ واژه، بر پایهٔ بسامد واقعی کاربرد در مکالمه، گروه‌بندی‌شده در پانزده بخش. ساختار هر سطر همانند صفحهٔ گرامر است: کانجی و کانا در چپ، سپس روماجی و در انتهای سمت راست معنی فارسی.</p>
                        <div class="callout-block callout-block-info rtl">
                            <div class="content">
                                <h4 class="callout-title">
                                    <span class="callout-icon-holder me-1">
                                        <i class="fas fa-thumbs-up"></i>
                                    </span>
                                    Tip
                                </h4>
                                <ul>
                                    <li>روی واژهٔ ژاپنی کلیک کنید تا در کلیپ‌بورد کپی شود.</li>
                                    <li>در هر بخش، پرتکرارترین واژه‌ها بالا آمده‌اند؛ هر چه پایین‌تر بروید بسامد کمتر می‌شود.</li>
                                    <li>واژه‌های بی‌کانجی (یا نوشته‌شده با کاتاکانا) فقط با کانا نمایش داده می‌شوند.</li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <section class="docs-section rtl V" id="item-1-1">
                        <h2 class="section-heading V rtl">راهنمای سطرها</h2>
                        <p class="text-justify">هر سطر با حروف ژاپنی و کانجی شروع می‌شود، بعد خواندن کانا، بعد روماجی و در انتهای سمت راست معنی فارسی قرار می‌گیرد.</p>
                        <div class="word-demo">
                            <div class="word-head" aria-hidden="true">
                                <span class="wh-play">صوت</span>
                                <span class="wh-jp">واژه</span>
                                <span class="wh-kana">کانا</span>
                                <span class="wh-romaji">روماجی</span>
                                <span class="wh-meaning">معنی فارسی</span>
                            </div>
                            <ul class="word-list">
                                <li><button type="button" class="word-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="SpeakJa(this, '会う')"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button><span class="jp" onclick="Copy(this)">会う</span><span class="kana">あう</span><span class="romaji">au</span><span class="meaning">ملاقات کردن، دیدن</span></li>
                                <li><button type="button" class="word-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="SpeakJa(this, 'ごはん')"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button><span class="jp" onclick="Copy(this)">ごはん</span><span class="kana">ごはん</span><span class="romaji">gohan</span><span class="meaning">برنج، غذا</span></li>
                            </ul>
                        </div>
                        <table class="table table-bordered table-sm mt-4">
                            <thead class="table-warning">
                                <tr>
                                    <th scope="col">بخش</th>
                                    <th scope="col">یعنی چه؟</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="word-col-title">کانجی</td>
                                    <td>صورت کانجی واژه؛ اگر واژه کانجی ندارد این ستون حذف می‌شود.</td>
                                </tr>
                                <tr>
                                    <td class="word-col-title">کانا</td>
                                    <td>خواندن واژه با هیراگانا یا کاتاکانا.</td>
                                </tr>
                                <tr>
                                    <td class="word-col-title">روماجی</td>
                                    <td>تلفظ با حروف لاتین (هپ‌بورن).</td>
                                </tr>
                                <tr>
                                    <td class="word-col-title">فارسی</td>
                                    <td>معنی کوتاه فارسی، در لبهٔ راست همان سطر.</td>
                                </tr>
                            </tbody>
                        </table>
                    </section>

                    <section class="docs-section rtl V" id="item-1-2">
                        <h2 class="section-heading V rtl">نقش دستوری واژه‌ها</h2>
                        <p class="text-justify">بخش‌های صفحه بر پایهٔ نقش دستوری و موضوع مرتب شده‌اند: اسم‌ها به هشت گروه موضوعی تقسیم شده‌اند، فعل‌ها و صفت‌ها و قیدها هر کدام بخش خودشان را دارند و عبارت‌های آماده و ضمیرها و عددها در انتها آمده‌اند. این تقسیم‌بندی کمک می‌کند هنگام نوشتن یا گفتن جمله، واژه را از جای درست پیدا کنید.</p>
                    </section>

                    <section class="docs-section rtl V" id="item-1-3">
                        <h2 class="section-heading V rtl">ترتیب واژه‌ها در هر بخش</h2>
                        <p class="text-justify">درون هر بخش، واژه‌ها به ترتیب بسامد در مکالمهٔ روزمره آمده‌اند، نه به ترتیب الفبا. پس اگر وقت کم دارید، از بالای هر بخش شروع کنید؛ واژه‌های بالای هر فهرست بیشترین کاربرد را در گفتار روزمره دارند.</p>
                    </section>

                    <section class="docs-section rtl V word-search-section" id="search-all">
                        <h2 class="section-heading V rtl">جستجو در کل واژه‌های صفحه</h2>
                        <p class="text-justify">با نوشتن عبارت در کادر زیر، همهٔ پانزده بخش یک‌جا جست‌وجو می‌شوند: کانجی، کانا، روماجی و معنی فارسی. بخش‌هایی که موردی ندارند پنهان می‌شوند و شمارنده تعداد واژه‌های پیدا‌شده را نشان می‌دهد.</p>
                        <div class="word-tools word-tools-all">
                            <div class="word-search">
                                <svg class="word-search-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                    <circle cx="11" cy="11" r="7"></circle>
                                    <line x1="16.5" y1="16.5" x2="21" y2="21"></line>
                                </svg>
                                <input type="text" id="wordFilterAll" class="form-control word-filter word-filter-all" placeholder="عبارت را بنویسید (کانجی، کانا، روماجی یا معنی)..." oninput="FilterAllWords(this)" aria-label="جستجو در کل واژه‌های صفحه">
                            </div>
                            <span id="wordCountAll" class="word-count"><?= $words_total ?> / <?= $words_total ?></span>
                        </div>
                        <p id="wordEmptyAll" class="word-empty">واژه‌ای با این عبارت در هیچ‌کدام از بخش‌ها پیدا نشد.</p>
                    </section>

                    <?php
                    $fa_digits = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
                    $wi = 0;
                    foreach ($word_sections as $sec) {
                        $wi++;
                        $n = count($sec['words']);
                        $fa_count = strtr((string) $n, [
                            '0' => '۰',
                            '1' => '۱',
                            '2' => '۲',
                            '3' => '۳',
                            '4' => '۴',
                            '5' => '۵',
                            '6' => '۶',
                            '7' => '۷',
                            '8' => '۸',
                            '9' => '۹'
                        ]);
                    ?>
                        <section class="docs-section rtl V" id="<?= $sec['id'] ?>">
                            <h2 class="section-heading V rtl"><?= $sec['title'] ?> <span class="Note">(<?= $fa_count ?> واژه)</span></h2>
                            <p class="text-justify"><?= $sec['desc'] ?></p>
                            <div class="word-tools">
                                <div class="word-search">
                                    <svg class="word-search-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                        <circle cx="11" cy="11" r="7"></circle>
                                        <line x1="16.5" y1="16.5" x2="21" y2="21"></line>
                                    </svg>
                                    <input type="text" id="wordFilter-<?= $wi ?>" class="form-control word-filter" placeholder="جست‌وجو در این بخش (کانجی، کانا، روماجی یا معنی)..." oninput="FilterWords(this, 'wordList-<?= $wi ?>', 'wordCount-<?= $wi ?>')">
                                </div>
                                <span id="wordCount-<?= $wi ?>" class="word-count"><?= $n ?> / <?= $n ?></span>
                            </div>
                            <div class="word-head" aria-hidden="true">
                                <span class="wh-play">صوت</span>
                                <span class="wh-jp">واژه</span>
                                <span class="wh-kana">کانا</span>
                                <span class="wh-romaji">روماجی</span>
                                <span class="wh-meaning">معنی فارسی</span>
                            </div>
                            <ul class="word-list" id="wordList-<?= $wi ?>">
                                <?php foreach ($sec['words'] as $w): ?>
                                    <li><button type="button" class="word-play" title="پخش تلفظ" aria-label="پخش تلفظ" onclick="SpeakJa(this, <?= htmlspecialchars(json_encode($w[0] !== '' ? $w[0] : $w[1], JSON_UNESCAPED_UNICODE), ENT_QUOTES) ?>)"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon><path d="M17 8.5a5 5 0 0 1 0 7"></path><path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path></svg></button><span class="jp" onclick="Copy(this)"><?= $w[0] !== '' ? $w[0] : $w[1] ?></span><span class="kana"><?= $w[1] ?></span><span class="romaji"><?= $w[2] ?></span><span class="meaning"><?= $w[3] ?></span></li>
                                <?php endforeach; ?>
                            </ul>
                        </section>
                    <?php
                    }
                    ?>
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
    <script>
        function Copy(obj) {
            var text = (obj.innerText || obj.textContent || '').trim();
            if (!text) return;

            var copyPromise;
            if (navigator.clipboard && window.isSecureContext) {
                copyPromise = navigator.clipboard.writeText(text);
            } else {
                var Inp = document.createElement('textarea');
                Inp.value = text;
                Inp.style.position = 'fixed';
                Inp.style.opacity = '0';
                document.body.appendChild(Inp);
                Inp.select();
                Inp.setSelectionRange(0, 99999);
                document.execCommand('copy');
                Inp.remove();
                copyPromise = Promise.resolve();
            }

            copyPromise.then(() => {
                const tooltip = new bootstrap.Tooltip(obj, {
                    trigger: 'manual',
                    title: 'Copied'
                });
                tooltip.show();
                setTimeout(() => {
                    tooltip.hide();
                    tooltip.dispose();
                }, 1000);
            }).catch(() => {});
        }

        /* پخش تلفظ واژه با موتور گفتار سیستم‌عامل، هم‌شکل صفح ه‌های هیراگانا و کاتاکانا */
        function SpeakJa(btn, text) {
            if (!('speechSynthesis' in window)) return;
            window.speechSynthesis.cancel();
            var active = document.querySelectorAll('.word-play.playing');
            for (var i = 0; i < active.length; i++) active[i].classList.remove('playing');
            var u = new SpeechSynthesisUtterance(text);
            u.lang = 'ja-JP';
            u.rate = 0.85;
            var ja = (window.speechSynthesis.getVoices() || []).filter(function(v) {
                return v.lang && v.lang.indexOf('ja') === 0;
            });
            if (ja.length) u.voice = ja[0];
            u.onstart = function() {
                btn.classList.add('playing');
            };
            u.onend = function() {
                u.onerror = null;
                btn.classList.remove('playing');
            };
            u.onerror = function() {
                btn.classList.remove('playing');
            };
            window.speechSynthesis.speak(u);
        }

        /* سطرها را با عبارت می‌سنجد؛ تعداد سطرهای مانده را برمی‌گرداند */
        function ShowWords(rows, q) {
            var shown = 0;
            for (var i = 0; i < rows.length; i++) {
                var hit = q === '' || rows[i].textContent.toLowerCase().indexOf(q) !== -1;
                rows[i].style.display = hit ? '' : 'none';
                if (hit) shown++;
            }
            return shown;
        }

        function FilterWords(input, listId, countId, emptyId) {
            /* جست‌وجوی سراسری را خالی کن تا با فیلتر این بخش قاطی نشود */
            var all = document.getElementById('wordFilterAll');
            if (all && all.value !== '') {
                all.value = '';
                ResetAllWords();
            }
            var q = (input.value || '').trim().toLowerCase();
            var rows = document.querySelectorAll('#' + listId + ' li');
            var shown = ShowWords(rows, q);
            document.getElementById(countId).textContent = shown + ' / ' + rows.length;
            if (emptyId) {
                var empty = document.getElementById(emptyId);
                if (empty) empty.style.display = shown === 0 ? '' : 'none';
            }
        }

        /* همهٔ بخش‌ها را به حالت اول برمی‌گرداند */
        function ResetAllWords() {
            var sections = document.querySelectorAll('.docs-article section[id^="item-2-"]');
            var total = 0;
            for (var s = 0; s < sections.length; s++) {
                var rows = sections[s].querySelectorAll('.word-list li');
                ShowWords(rows, '');
                sections[s].style.display = '';
                var countEl = sections[s].querySelector('.word-count');
                if (countEl) countEl.textContent = rows.length + ' / ' + rows.length;
                total += rows.length;
            }
            var totalEl = document.getElementById('wordCountAll');
            if (totalEl) totalEl.textContent = total + ' / ' + total;
            var emptyEl = document.getElementById('wordEmptyAll');
            if (emptyEl) emptyEl.style.display = 'none';
        }

        /* جست‌وجوی سراسری: عبارت را در همهٔ بخش‌ها و هر چهار ستون می‌گردد */
        function FilterAllWords(input) {
            var q = (input.value || '').trim().toLowerCase();
            var sections = document.querySelectorAll('.docs-article section[id^="item-2-"]');
            var total = 0;
            var shownTotal = 0;
            for (var s = 0; s < sections.length; s++) {
                var rows = sections[s].querySelectorAll('.word-list li');
                total += rows.length;
                var shown = ShowWords(rows, q);
                /* کادر جست‌وجوی خودِ بخش کنار برود؛ نتیجهٔ سراسری حاکم است */
                var ownBox = sections[s].querySelector('.word-filter');
                if (ownBox && ownBox.value !== '') ownBox.value = '';
                var countEl = sections[s].querySelector('.word-count');
                if (countEl) countEl.textContent = shown + ' / ' + rows.length;
                sections[s].style.display = (q !== '' && shown === 0) ? 'none' : '';
                shownTotal += shown;
            }
            var totalEl = document.getElementById('wordCountAll');
            if (totalEl) totalEl.textContent = shownTotal + ' / ' + total;
            var emptyEl = document.getElementById('wordEmptyAll');
            if (emptyEl) emptyEl.style.display = (q !== '' && shownTotal === 0) ? 'block' : 'none';
        }

        document.addEventListener('keydown', function(event) {
            if (event.key !== 'Escape') return;
            var input = event.target.closest('.word-filter');
            if (!input || input.value === '') return;
            input.value = '';
            input.dispatchEvent(new Event('input', {
                bubbles: true
            }));
        });
    </script>
</body>

</html>