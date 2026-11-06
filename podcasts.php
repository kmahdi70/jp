<?php
/* صفحهٔ مکالمات: هر فایل داخل podcasts/data/ یک بخش (موضوع) را برمی‌گرداند.
   [جملهٔ ژاپنی، روماجی، معنی فارسی] */
$podcast_sections = [];
$podcast_files = glob(__DIR__ . '/podcasts/*.php') ?: [];
sort($podcast_files, SORT_STRING);
/* آیکون فون‌آوسام هر بخش، هم‌سبک با منوی صفحه‌های هیراگانا و کاتاکانا */
$podcast_icons = [
    '01-greetings' => 'fa-handshake',
    '02-everyday-talk' => 'fa-comments',
    '03-travel' => 'fa-plane',
    '04-hotel' => 'fa-bed',
    '05-shopping' => 'fa-shopping-bag',
    '06-restaurant' => 'fa-utensils',
    '07-transport' => 'fa-train',
    '08-health' => 'fa-hospital',
    '09-emergency' => 'fa-exclamation-triangle',
    '10-work' => 'fa-briefcase',
    '11-school' => 'fa-graduation-cap',
    '12-family-home' => 'fa-home',
    '13-phone' => 'fa-mobile-alt',
    '14-bank' => 'fa-university',
    '15-feelings' => 'fa-smile',
    '16-weather' => 'fa-cloud-sun',
    '17-leisure' => 'fa-film',
    '18-plans' => 'fa-calendar-alt',
    '19-thanks' => 'fa-pray',
    '20-complaints' => 'fa-headset',
];
foreach ($podcast_files as $podcast_file) {
    $podcast_section = include $podcast_file;
    if (is_array($podcast_section) && !empty($podcast_section['items'])) {
        $podcast_section['icon'] = $podcast_icons[basename($podcast_file, '.php')] ?? 'fa-comments';
        $podcast_sections[] = $podcast_section;
    }
}
$podcast_total = 0;
foreach ($podcast_sections as $podcast_section) {
    $podcast_total += count($podcast_section['items']);
}

function podcast_fa_num($value)
{
    return strtr((string) $value, [
        '0' => '۰',
        '1' => '۱',
        '2' => '۲',
        '3' => '۳',
        '4' => '۴',
        '5' => '۵',
        '6' => '۶',
        '7' => '۷',
        '8' => '۸',
        '9' => '۹',
    ]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Conversations — Everyday Japanese Sentences</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Everyday Japanese sentences with romaji, Persian meanings and audio">
    <meta name="author" content="Mahdi Karimian 09123238133">
    <link rel="icon" type="image/png" href="podcasts/favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/svg+xml" href="podcasts/favicon/favicon.svg">
    <link rel="shortcut icon" href="podcasts/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="podcasts/favicon/apple-touch-icon.png">
    <meta name="apple-mobile-web-app-title" content="Podcast">
    <link rel="manifest" href="podcasts/favicon/site.webmanifest">
    <script defer src="assets/fontawesome/js/all.min.js"></script>
    <link rel="stylesheet" href="assets/plugins/simplelightbox/simple-lightbox.min.css">
    <link id="theme-style" rel="stylesheet" href="assets/css/theme.css">
    <link rel="stylesheet" href="css/global.css?<?= rand(1,1000)?>">
    <link rel="stylesheet" href="css/podcasts.css?<?= rand(1,1000)?>">
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
                    <li class="nav-item section-title"><a class="nav-link scrollto" href="#section-1"><span class="theme-icon-holder me-2"><i class="fas fa-comments"></i></span>Conversations</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-1">How To Read A Row</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-2">Audio &amp; Pronunciation</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-3">How To Practise</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#search-all"><i class="fas fa-search me-2"></i>Search</a></li>
                    <?php $pi = 0;
                    foreach ($podcast_sections as $sec) {
                        $pi++; ?>
                        <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#item-2-<?= $pi ?>"><span class="theme-icon-holder me-2"><i class="fas <?= $sec['icon'] ?>"></i></span><?= htmlspecialchars($sec['menu'], ENT_QUOTES, 'UTF-8') ?> <span class="badge bg-success ms-2"><?= count($sec['items']) ?></span></a></li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
        <div class="docs-content">
            <div class="container">
                <article class="docs-article" id="section-1">
                    <header class="docs-header">
                        <h1 class="docs-heading V rtl">
                            جمله‌های پرکاربرد مکالمهٔ ژاپنی
                        </h1>
                        <div class="meta mb-3"><span class="date"><?= podcast_fa_num(count($podcast_sections)) ?> دسته‌بندی</span><span class="time"><?= podcast_fa_num($podcast_total) ?> جمله</span></div>
                    </header>
                    <section class="docs-intro V docs-section rtl">
                        <p class="text-justify">این صفحه جمله‌های آمادهٔ گفتار روزمرهٔ ژاپنی است، دسته‌بندی‌شده بر پایهٔ موقعیت: احوال‌پرسی، مسافرت، خرید، رستوران و موضوع‌های پرتکرار دیگر. هر سطر شامل جملهٔ ژاپنی، روماجی (تلفظ با حروف لاتین)، دکمهٔ پخش تلفظ و در انتهای سمت راست معنی فارسی است.</p>
                        <div class="callout-block callout-block-info rtl">
                            <div class="content">
                                <h4 class="callout-title">
                                    <span class="callout-icon-holder me-1">
                                        <i class="fas fa-thumbs-up"></i>
                                    </span>
                                    Tip
                                </h4>
                                <ul>
                                    <li>روی جملهٔ ژاپنی کلیک کنید تا در کلیپ‌بورد کپی شود.</li>
                                    <li>دکمهٔ بلندگو را بزنید تا جمله با صدای ژاپنیِ مرورگر خوانده شود.</li>
                                    <li>در هر دسته، جمله‌های پرکاربردتر بالاتر آمده‌اند؛ از بالا شروع کنید.</li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <section class="docs-section rtl V" id="item-1-1">
                        <h2 class="section-heading V rtl">راهنمای سطرها</h2>
                        <p class="text-justify">هر سطر از چهار بخش ساخته شده است: دکمهٔ پخش تلفظ، جملهٔ ژاپنی، روماجی و معنی فارسی در لبهٔ راست همان سطر.</p>
                        <div class="conv-demo">
                            <ul class="conv-list">
                                <li>
                                    <button class="conv-audio" type="button" onclick="Speak(this)" title="پخش تلفظ" aria-label="پخش تلفظ جمله">
                                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                            <polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon>
                                            <path d="M17 8.5a5 5 0 0 1 0 7"></path>
                                            <path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path>
                                        </svg>
                                    </button>
                                    <span class="conv-jp">すみません、駅はどこですか。</span>
                                    <span class="conv-romaji">sumimasen, eki wa doko desu ka.</span>
                                    <span class="conv-meaning">ببخشید، ایستگاه کجاست؟</span>
                                </li>
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
                                    <td class="conv-col-title">ژاپنی</td>
                                    <td>جملهٔ کامل با کانجی و کانا، همان‌طور که در گفتار مؤدبانه به کار می‌رود.</td>
                                </tr>
                                <tr>
                                    <td class="conv-col-title">روماجی</td>
                                    <td>تلفظ جمله با حروف لاتین؛ ذرهٔ は «wa»، を «o» و へ «e» نوشته شده است.</td>
                                </tr>
                                <tr>
                                    <td class="conv-col-title">فارسی</td>
                                    <td>معنی روان جمله، در لبهٔ راست همان سطر.</td>
                                </tr>
                                <tr>
                                    <td class="conv-col-title">بلندگو</td>
                                    <td>پخش تلفظ جمله با موتور گفتار مرورگر (بدون نیاز به فایل صوتی).</td>
                                </tr>
                            </tbody>
                        </table>
                    </section>

                    <section class="docs-section rtl V" id="item-1-2">
                        <h2 class="section-heading V rtl">تلفظ و پخش صدا</h2>
                        <p class="text-justify">دکمهٔ بلندگو کنار هر جمله، متن ژاپنی همان سطر را با موتور گفتار سیستم‌عامل (Web Speech API) می‌خواند؛ پس نیازی به دانلود فایل صوتی نیست و همهٔ جمله‌ها همیشه در دسترس‌اند. کیفیت صدا به صدای ژاپنیِ نصب‌شده روی دستگاه بستگی دارد: در ویندوز از مسیر Settings ← Time &amp; Language ← Speech ← Manage voices می‌توانید صدای ژاپنی (مثلاً Nanami) را نصب کنید، در اندروید و iOS هم صدای ژاپنی به‌طور پیش‌فرض هست.</p>
                        <p class="text-justify">اگر مرورگر صدای ژاپنی نداشته باشد، جمله با تنظیم زبان <code>ja-JP</code> خوانده می‌شود و ممکن است تلفظ دقیق نباشد؛ در این حالت متن روماجی همان سطر راهنمای تلفظ شماست.</p>
                    </section>

                    <section class="docs-section rtl V" id="item-1-3">
                        <h2 class="section-heading V rtl">روش تمرین</h2>
                        <p class="text-justify">در هر دسته، نخست جمله‌ها را با صدا گوش کنید و هم‌زمان روماجی را نگاه کنید، بعد معنی فارسی را بپوشانید و از خودتان ترجمه بخواهید. در مرحلهٔ سوم، فارسی را ببینید و جملهٔ ژاپنی را از حافظه بگویید. برای جمله‌های نقش‌آفرینی‌شده (مثل رستوران یا خرید) بهتر است هر دو طرف گفتگو را بلند تکرار کنید.</p>
                        <p class="text-justify">از کادر جست‌وجوی بالای هر دسته هم می‌توانید با کانجی، روماجی یا معنی فارسی، جملهٔ موردنظر را پیدا کنید؛ کلید <kbd>Escape</kbd> جست‌وجو را پاک می‌کند.</p>
                    </section>

                    <section class="docs-section rtl V conv-search-section" id="search-all">
                        <h2 class="section-heading V rtl">جستجو در کل جملات صفحه</h2>
                        <div class="conv-tools conv-tools-all">
                            <div class="conv-search">
                                <svg class="conv-search-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                    <circle cx="11" cy="11" r="7"></circle>
                                    <line x1="16.5" y1="16.5" x2="21" y2="21"></line>
                                </svg>
                                <input type="text" id="convFilterAll" class="form-control conv-filter conv-filter-all" placeholder="عبارت را بنویسید (ژاپنی، روماجی یا معنی)..." oninput="FilterAllSentences(this)" aria-label="جستجو در کل جملات صفحه">
                            </div>
                            <span id="convCountAll" class="conv-count"><?= $podcast_total ?> / <?= $podcast_total ?></span>
                        </div>
                        <p id="convEmptyAll" class="conv-empty">جمله‌ای با این عبارت در هیچ‌کدام از دسته‌ها پیدا نشد.</p>
                    </section>

                    <?php $pi = 0;
                    foreach ($podcast_sections as $sec) {
                        $pi++;
                        $n = count($sec['items']); ?>
                        <section class="docs-section rtl V" id="item-2-<?= $pi ?>">
                            <h2 class="section-heading V rtl"><?= htmlspecialchars($sec['title'], ENT_QUOTES, 'UTF-8') ?> <span class="Note">(<?= podcast_fa_num($n) ?> جمله)</span></h2>
                            <p class="text-justify"><?= $sec['desc'] ?></p>
                            <div class="conv-tools">
                                <div class="conv-search">
                                    <svg class="conv-search-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                        <circle cx="11" cy="11" r="7"></circle>
                                        <line x1="16.5" y1="16.5" x2="21" y2="21"></line>
                                    </svg>
                                    <input type="text" id="convFilter-<?= $pi ?>" class="form-control conv-filter" placeholder="جست‌وجو در این بخش (ژاپنی، روماجی یا معنی)..." oninput="FilterSentences(this, 'convList-<?= $pi ?>', 'convCount-<?= $pi ?>')">
                                </div>
                                <span id="convCount-<?= $pi ?>" class="conv-count"><?= $n ?> / <?= $n ?></span>
                            </div>
                            <ul class="conv-list" id="convList-<?= $pi ?>">
                                <?php foreach ($sec['items'] as $item): ?>
                                    <li data-ja="<?= htmlspecialchars($item[0], ENT_QUOTES, 'UTF-8') ?>">
                                        <button class="conv-audio" type="button" onclick="Speak(this)" title="پخش تلفظ" aria-label="پخش تلفظ جمله">
                                            <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                <polygon points="4 9 8 9 13 5 13 19 8 15 4 15"></polygon>
                                                <path d="M17 8.5a5 5 0 0 1 0 7"></path>
                                                <path d="M19.5 6a8.5 8.5 0 0 1 0 12"></path>
                                            </svg>
                                        </button>
                                        <span class="conv-jp CP" onclick="Copy(this)"><?= htmlspecialchars($item[0], ENT_QUOTES, 'UTF-8') ?></span>
                                        <span class="conv-romaji"><?= htmlspecialchars($item[1], ENT_QUOTES, 'UTF-8') ?></span>
                                        <span class="conv-meaning"><?= htmlspecialchars($item[2], ENT_QUOTES, 'UTF-8') ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </section>
                    <?php } ?>
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

        /* فیلتر سطرهای یک فهرست؛ تعداد سطرهای مانده را برمی‌گرداند */
        function FilterRows(rows, q) {
            var shown = 0;
            for (var i = 0; i < rows.length; i++) {
                var hit = q === '' || rows[i].textContent.toLowerCase().indexOf(q) !== -1;
                rows[i].style.display = hit ? '' : 'none';
                if (hit) shown++;
            }
            return shown;
        }

        function FilterSentences(input, listId, countId) {
            /* جست‌وجوی سراسری را خالی کن تا با فیلتر این بخش قاطی نشود */
            var all = document.getElementById('convFilterAll');
            if (all && all.value !== '') {
                all.value = '';
                ResetAllFilter();
            }
            var q = (input.value || '').trim().toLowerCase();
            var rows = document.querySelectorAll('#' + listId + ' li');
            var shown = FilterRows(rows, q);
            document.getElementById(countId).textContent = shown + ' / ' + rows.length;
        }

        /* همهٔ سطرها و بخش‌ها را برمی‌گرداند و شمارندهٔ سراسری را به حالت اول برمی‌گرداند */
        function ResetAllFilter() {
            var sections = document.querySelectorAll('.docs-article section[id^="item-2-"]');
            var total = 0;
            for (var s = 0; s < sections.length; s++) {
                var rows = sections[s].querySelectorAll('.conv-list li');
                FilterRows(rows, '');
                sections[s].style.display = '';
                var countEl = sections[s].querySelector('.conv-count');
                if (countEl) countEl.textContent = rows.length + ' / ' + rows.length;
                total += rows.length;
            }
            var totalEl = document.getElementById('convCountAll');
            if (totalEl) totalEl.textContent = total + ' / ' + total;
            var emptyEl = document.getElementById('convEmptyAll');
            if (emptyEl) emptyEl.style.display = 'none';
        }

        /* جست‌وجوی سراسری: عبارت را در همهٔ بخش‌ها و هر سه ستون (ژاپنی، روماجی، معنی) می‌گردد */
        function FilterAllSentences(input) {
            var q = (input.value || '').trim().toLowerCase();
            var sections = document.querySelectorAll('.docs-article section[id^="item-2-"]');
            var total = 0;
            var shownTotal = 0;
            for (var s = 0; s < sections.length; s++) {
                var rows = sections[s].querySelectorAll('.conv-list li');
                total += rows.length;
                var shown = FilterRows(rows, q);
                /* کادر جست‌وجوی خودِ بخش کنار برود؛ نتیجهٔ سراسری حاکم است */
                var ownBox = sections[s].querySelector('.conv-filter');
                if (ownBox && ownBox.value !== '') ownBox.value = '';
                var countEl = sections[s].querySelector('.conv-count');
                if (countEl) countEl.textContent = shown + ' / ' + rows.length;
                sections[s].style.display = (q !== '' && shown === 0) ? 'none' : '';
                shownTotal += shown;
            }
            var totalEl = document.getElementById('convCountAll');
            if (totalEl) totalEl.textContent = shownTotal + ' / ' + total;
            var emptyEl = document.getElementById('convEmptyAll');
            if (emptyEl) emptyEl.style.display = (q !== '' && shownTotal === 0) ? 'block' : 'none';
        }

        /* پخش تلفظ جمله با موتور گفتار مرورگر (Web Speech API) */
        var jaVoice = null;

        function PickJaVoice() {
            if (!('speechSynthesis' in window)) return null;
            var voices = window.speechSynthesis.getVoices() || [];
            for (var i = 0; i < voices.length; i++) {
                if ((voices[i].lang || '').toLowerCase().indexOf('ja') === 0) return voices[i];
            }
            return null;
        }

        if ('speechSynthesis' in window) {
            jaVoice = PickJaVoice();
            window.speechSynthesis.onvoiceschanged = function() {
                jaVoice = PickJaVoice();
            };
        }

        function Speak(btn) {
            if (!('speechSynthesis' in window)) {
                alert('مرورگر شما از پخش صدا پشتیبانی نمی‌کند.');
                return;
            }
            var li = btn.closest('li');
            var text = (li && li.getAttribute('data-ja')) || '';
            if (!text) return;

            window.speechSynthesis.cancel();
            var utter = new SpeechSynthesisUtterance(text);
            utter.lang = 'ja-JP';
            utter.rate = 0.9;
            if (!jaVoice) jaVoice = PickJaVoice();
            if (jaVoice) utter.voice = jaVoice;

            document.querySelectorAll('.conv-audio.speaking').forEach(function(b) {
                b.classList.remove('speaking');
            });
            btn.classList.add('speaking');
            utter.onend = function() {
                btn.classList.remove('speaking');
            };
            utter.onerror = function() {
                btn.classList.remove('speaking');
            };
            window.speechSynthesis.speak(utter);
        }

        document.addEventListener('keydown', function(event) {
            if (event.key !== 'Escape') return;
            var input = event.target.closest('.conv-filter');
            if (!input || input.value === '') return;
            input.value = '';
            input.dispatchEvent(new Event('input', {
                bubbles: true
            }));
        });
    </script>
</body>

</html>