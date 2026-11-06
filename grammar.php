<!DOCTYPE html>
<html lang="en">

<head>
    <title>Grammar Guide</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Learn Japanese Grammar">
    <meta name="author" content="Mahdi Karimian 09123238133">
    <link rel="icon" type="image/png" href="grammar/favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/svg+xml" href="grammar/favicon/favicon.svg">
    <link rel="shortcut icon" href="grammar/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="grammar/favicon/apple-touch-icon.png">
    <meta name="apple-mobile-web-app-title" content="Jrammar">
    <link rel="manifest" href="grammar/favicon/site.webmanifest"> <!-- FontAwesome JS-->
    <script defer src="assets/fontawesome/js/all.min.js"></script>
    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/plugins/simplelightbox/simple-lightbox.min.css">
    <link id="theme-style" rel="stylesheet" href="assets/css/theme.css">
    <link rel="stylesheet" href="css/global.css?<?= rand(1,1000)?>">
    <link rel="stylesheet" href="css/grammar.css">
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
                    <li class="nav-item section-title"><a class="nav-link scrollto" href="#section-1"><span class="theme-icon-holder me-2"><i class="fas fa-school"></i></span>Summary</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-1">Sentences &amp; Particles</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-2">Time, Place &amp; Direction</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-3">Nouns, です &amp; Possession</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-4">Polite Verbs &amp; Tense</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-5">Adjectives</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-6">Existence &amp; Counting</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-7">Wishes &amp; Ability</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-8">て-form &amp; Linking</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-9">Order of Events</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-10">Comparison &amp; Opinion</a></li>
                    <li class="nav-item section-title"><a class="nav-link scrollto" href="#part-one"><span class="theme-icon-holder me-2"><i class="fas fa-book-open"></i></span>Part One</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-1">A は B です</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-2">の — Possession</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-3">これ・この・ここ</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-4">Questions &amp; Answers</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-5">Numbers &amp; Everyday Questions</a></li>
                </ul>
            </nav>
        </div>
        <div class="docs-content">
            <div class="container">
                <article class="docs-article" id="section-1">
                    <header class="docs-header">
                        <h1 class="docs-heading V rtl">
                            چکیدهٔ گرامر ژاپنی
                        </h1>
                    </header>
                    <section class="docs-intro V docs-section rtl">
                        <p class="text-justify">گرامر ژاپنی در ده بخش کوتاه خلاصه شده است: از ترتیب جمله و ذره‌های پایه تا صفت‌ها، شکل て، ترتیب رویدادها و مقایسه. هر مبحث یک تیتر دارد و دقیقاً دو نمونهٔ واقعی، تا در یک نگاه مرور شود. همهٔ نمونه‌ها فقط با هیراگانا و کاتاکانا نوشته شده‌اند، پس با دانسته‌های صفحهٔ هیراگانا و کاتاکانا خواندنی‌اند.</p>
                        <div class="callout-block callout-block-info rtl">
                            <div class="content">
                                <h4 class="callout-title">
                                    <span class="callout-icon-holder me-1">
                                        <i class="fas fa-thumbs-up"></i>
                                    </span>
                                    Tip
                                </h4>
                                <ul>
                                    <li>روی هر نمونهٔ ژاپنی کلیک کنید تا در کلیپ‌بورد کپی شود.</li>
                                    <li>ذره‌های は و へ در نوشتار ‌ha و ‌he خوانده نمی‌شوند؛ به‌ترتیب «وا» و «اِ» تلفظ می‌شوند.</li>
                                    <li>همهٔ شکل‌ها «مؤدب» (ていねい) هستند و در مکالمهٔ روزمره، مدرسه و محل کار به‌کار می‌روند.</li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <!-- بخش ۱ -->
                    <section class="docs-section rtl V" id="item-1-1">
                        <h2 class="section-heading V rtl">بخش ۱ — جمله و ذرات پایه</h2>
                        <p class="text-justify">ستون فقرات هر جملهٔ ژاپنی: ترتیب بلوک‌ها، ذره‌ای که نقش اسم را می‌گوید، و ذره‌ای که جمله را پرسشی می‌کند.</p>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title">ترتیب جمله: فعل همیشه آخر می‌آید <span class="grammar-pattern jp-sm" onclick="Copy(this)">SOV</span></h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">わたしはごはんをたべます。</span><span class="romaji">watashi wa gohan o tabemasu.</span><span class="grammar-note">من غذا می‌خورم.</span></li>
                                <li><span class="jp" onclick="Copy(this)">かれはがっこうへいきます。</span><span class="romaji">kare wa gakkou e ikimasu.</span><span class="grammar-note">او به مدرسه می‌رود.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title">ذرهٔ <span class="grammar-pattern jp-sm" onclick="Copy(this)">は</span> — موضوع جمله</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">わたしはがくせいです。</span><span class="romaji">watashi wa gakusei desu.</span><span class="grammar-note">من دانشجو هستم.</span></li>
                                <li><span class="jp" onclick="Copy(this)">このほんはおもしろいです。</span><span class="romaji">kono hon wa omoshiroi desu.</span><span class="grammar-note">این کتاب جالب است.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title">ذرهٔ <span class="grammar-pattern jp-sm" onclick="Copy(this)">を</span> — مفعول مستقیم</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">みずをのみます。</span><span class="romaji">mizu o nomimasu.</span><span class="grammar-note">آب می‌نوشم.</span></li>
                                <li><span class="jp" onclick="Copy(this)">きのうえいがをみました。</span><span class="romaji">kinou eiga o mimashita.</span><span class="grammar-note">دیروز فیلم دیدم.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title">ذرهٔ <span class="grammar-pattern jp-sm" onclick="Copy(this)">か</span> — پرسشی کردن جمله</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">がくせいですか。</span><span class="romaji">gakusei desu ka.</span><span class="grammar-note">دانشجو هستید؟</span></li>
                                <li><span class="jp" onclick="Copy(this)">いまなんじですか。</span><span class="romaji">ima nanji desu ka.</span><span class="grammar-note">الان ساعت چند است؟</span></li>
                            </ul>
                        </div>
                    </section>

                    <!-- بخش ۲ -->
                    <section class="docs-section rtl V" id="item-1-2">
                        <h2 class="section-heading V rtl">بخش ۲ — زمان، مکان و جهت</h2>
                        <p class="text-justify">سه ذرهٔ に، で و へ بیشترین کاربرد را در جمله‌های روزمره دارند؛ به‌ویژه تفاوت に (زمان) و で (محل انجام کار).</p>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title">ذرهٔ <span class="grammar-pattern jp-sm" onclick="Copy(this)">に</span> — زمان مشخص</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">しちじにおきます。</span><span class="romaji">shichiji ni okimasu.</span><span class="grammar-note">ساعت هفت بیدار می‌شوم.</span></li>
                                <li><span class="jp" onclick="Copy(this)">にちようびにべんきょうします。</span><span class="romaji">nichiyoubi ni benkyou shimasu.</span><span class="grammar-note">یکشنبه درس می‌خوانم.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title">ذرهٔ <span class="grammar-pattern jp-sm" onclick="Copy(this)">で</span> — محل انجام کار یا ابزار</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">としょかんでほんをよみます。</span><span class="romaji">toshokan de hon o yomimasu.</span><span class="grammar-note">در کتابخانه کتاب می‌خوانم.</span></li>
                                <li><span class="jp" onclick="Copy(this)">でんしゃでいきます。</span><span class="romaji">densha de ikimasu.</span><span class="grammar-note">با قطار می‌روم.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title">ذرهٔ <span class="grammar-pattern jp-sm" onclick="Copy(this)">へ</span> — جهت حرکت</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">にほんへいきます。</span><span class="romaji">nihon e ikimasu.</span><span class="grammar-note">به ژاپن می‌روم.</span></li>
                                <li><span class="jp" onclick="Copy(this)">うちにかえります。</span><span class="romaji">uchi ni kaerimasu.</span><span class="grammar-note">به خانه برمی‌گردم.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title"><span class="grammar-pattern jp-sm" onclick="Copy(this)">から</span> … <span class="grammar-pattern jp-sm" onclick="Copy(this)">まで</span> — از … تا …</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">くじからごじまでべんきょうします。</span><span class="romaji">kuji kara goji made benkyou shimasu.</span><span class="grammar-note">از ساعت نه تا پنج درس می‌خوانم.</span></li>
                                <li><span class="jp" onclick="Copy(this)">がっこうからうちまであるきます。</span><span class="romaji">gakkou kara uchi made arukimasu.</span><span class="grammar-note">از مدرسه تا خانه پیاده می‌روم.</span></li>
                            </ul>
                        </div>
                    </section>

                    <!-- بخش ۳ -->
                    <section class="docs-section rtl V" id="item-1-3">
                        <h2 class="section-heading V rtl">بخش ۳ — اسم، بودن و مالکیت</h2>
                        <p class="text-justify">با です جملهٔ اسمیه می‌سازیم؛ の دو اسم را به هم می‌چسباند و も جای は می‌نشیند تا بگوید «هم».</p>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title"><span class="grammar-pattern jp-sm" onclick="Copy(this)">です</span> — هستم / است</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">わたしはにほんじんです。</span><span class="romaji">watashi wa nihonjin desu.</span><span class="grammar-note">من ژاپنی هستم.</span></li>
                                <li><span class="jp" onclick="Copy(this)">これはペンです。</span><span class="romaji">kore wa pen desu.</span><span class="grammar-note">این خودکار است.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title">منفی و گذشتهٔ <span class="grammar-pattern jp-sm" onclick="Copy(this)">です</span></h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">がくせいじゃありません。</span><span class="romaji">gakusei ja arimasen.</span><span class="grammar-note">دانشجو نیستم.</span></li>
                                <li><span class="jp" onclick="Copy(this)">きのうはいいてんきでした。</span><span class="romaji">kinou wa ii tenki deshita.</span><span class="grammar-note">دیروز هوا خوب بود.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title">ذرهٔ <span class="grammar-pattern jp-sm" onclick="Copy(this)">の</span> — مالکیت و اتصال اسم‌ها</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">わたしのほん</span><span class="romaji">watashi no hon</span><span class="grammar-note">کتاب من</span></li>
                                <li><span class="jp" onclick="Copy(this)">にほんごのせんせい</span><span class="romaji">nihongo no sensei</span><span class="grammar-note">معلم زبان ژاپنی</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title">ذرهٔ <span class="grammar-pattern jp-sm" onclick="Copy(this)">も</span> — هم، نیز</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">わたしもいきます。</span><span class="romaji">watashi mo ikimasu.</span><span class="grammar-note">من هم می‌روم.</span></li>
                                <li><span class="jp" onclick="Copy(this)">これもください。</span><span class="romaji">kore mo kudasai.</span><span class="grammar-note">این را هم لطفاً.</span></li>
                            </ul>
                        </div>
                    </section>

                    <!-- بخش ۴ -->
                    <section class="docs-section rtl V" id="item-1-4">
                        <h2 class="section-heading V rtl">بخش ۴ — فعل مؤدب و زمان</h2>
                        <p class="text-justify">ستاک فعل ثابت می‌ماند و فقط پایانه (ます) عوض می‌شود: زمان، منفی بودن و دعوت را همین پایانه می‌سازد.</p>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title"><span class="grammar-pattern jp-sm" onclick="Copy(this)">ます</span> — حال و آیندهٔ مثبت</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">まいにちにほんごをべんきょうします。</span><span class="romaji">mainichi nihongo o benkyou shimasu.</span><span class="grammar-note">هر روز ژاپنی می‌خوانم.</span></li>
                                <li><span class="jp" onclick="Copy(this)">あしたとうきょうへいきます。</span><span class="romaji">ashita toukyou e ikimasu.</span><span class="grammar-note">فردا به توکیو می‌روم.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title"><span class="grammar-pattern jp-sm" onclick="Copy(this)">ません</span> — منفی و گذشتهٔ منفی</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">おさけをのみません。</span><span class="romaji">osake o nomimasen.</span><span class="grammar-note">مشروب نمی‌خورم.</span></li>
                                <li><span class="jp" onclick="Copy(this)">きのうはべんきょうしませんでした。</span><span class="romaji">kinou wa benkyou shimasen deshita.</span><span class="grammar-note">دیروز درس نخواندم.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title"><span class="grammar-pattern jp-sm" onclick="Copy(this)">ましょう</span> — دعوت («بیایید …»)</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">いっしょにいきましょう。</span><span class="romaji">issho ni ikimashou.</span><span class="grammar-note">با هم برویم.</span></li>
                                <li><span class="jp" onclick="Copy(this)">すこしやすみましょう。</span><span class="romaji">sukoshi yasumimashou.</span><span class="grammar-note">کمی استراحت کنیم.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title"><span class="grammar-pattern jp-sm" onclick="Copy(this)">ませんか</span> — پیشنهاد مؤدبانه</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">コーヒーをのみませんか。</span><span class="romaji">koohii o nomimasen ka.</span><span class="grammar-note">قهوه نمی‌نوشید؟ (دعوت)</span></li>
                                <li><span class="jp" onclick="Copy(this)">あしたえいがをみませんか。</span><span class="romaji">ashita eiga o mimasen ka.</span><span class="grammar-note">فردا فیلم نمی‌بینید؟ (دعوت)</span></li>
                            </ul>
                        </div>
                    </section>

                    <!-- بخش ۵ -->
                    <section class="docs-section rtl V" id="item-1-5">
                        <h2 class="section-heading V rtl">بخش ۵ — صفت‌ها</h2>
                        <p class="text-justify">صفت‌های い خودشان صرف می‌شوند، صفت‌های な مثل اسم رفتار می‌کنند و پیش از اسم با な می‌آیند.</p>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title">صفت <span class="grammar-pattern jp-sm" onclick="Copy(this)">い</span> — پایانهٔ جمله</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">このやまはたかいです。</span><span class="romaji">kono yama wa takai desu.</span><span class="grammar-note">این کوه بلند است.</span></li>
                                <li><span class="jp" onclick="Copy(this)">あのへやはひろいです。</span><span class="romaji">ano heya wa hiroi desu.</span><span class="grammar-note">آن اتاق بزرگ است.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title">صفت <span class="grammar-pattern jp-sm" onclick="Copy(this)">な</span> — مثل اسم + です</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">このへやはしずかです。</span><span class="romaji">kono heya wa shizuka desu.</span><span class="grammar-note">این اتاق آرام است.</span></li>
                                <li><span class="jp" onclick="Copy(this)">あのひとはしんせつです。</span><span class="romaji">ano hito wa shinsetsu desu.</span><span class="grammar-note">آن شخص مهربان است.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title">منفی صفت‌ها — <span class="grammar-pattern jp-sm" onclick="Copy(this)">くない</span> / <span class="grammar-pattern jp-sm" onclick="Copy(this)">じゃない</span></h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">このほんはたかくないです。</span><span class="romaji">kono hon wa takaku nai desu.</span><span class="grammar-note">این کتاب گران نیست.</span></li>
                                <li><span class="jp" onclick="Copy(this)">このまちはしずかじゃありません。</span><span class="romaji">kono machi wa shizuka ja arimasen.</span><span class="grammar-note">این شهر آرام نیست.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title">صفت پیش از اسم — توصیف</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">たかいやま</span><span class="romaji">takai yama</span><span class="grammar-note">کوه بلند</span></li>
                                <li><span class="jp" onclick="Copy(this)">しずかなへや</span><span class="romaji">shizuka na heya</span><span class="grammar-note">اتاق آرام</span></li>
                            </ul>
                        </div>
                    </section>

                    <!-- بخش ۶ -->
                    <section class="docs-section rtl V" id="item-1-6">
                        <h2 class="section-heading V rtl">بخش ۶ — وجود و شمارش</h2>
                        <p class="text-justify">«بودن» در ژاپنی دو فعل دارد: あります برای چیزهای بی‌جان و います برای جانداران؛ شمارش هم با شمارنده انجام می‌شود.</p>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title"><span class="grammar-pattern jp-sm" onclick="Copy(this)">あります</span> — وجود چیزهای بی‌جان</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">つくえのうえにほんがあります。</span><span class="romaji">tsukue no ue ni hon ga arimasu.</span><span class="grammar-note">روی میز کتاب هست.</span></li>
                                <li><span class="jp" onclick="Copy(this)">じかんがあります。</span><span class="romaji">jikan ga arimasu.</span><span class="grammar-note">وقت دارم.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title"><span class="grammar-pattern jp-sm" onclick="Copy(this)">います</span> — وجود جانداران</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">へやにねこがいます。</span><span class="romaji">heya ni neko ga imasu.</span><span class="grammar-note">در اتاق گربه هست.</span></li>
                                <li><span class="jp" onclick="Copy(this)">えきにともだちがいます。</span><span class="romaji">eki ni tomodachi ga imasu.</span><span class="grammar-note">در ایستگاه دوستم هست.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title">ذرهٔ <span class="grammar-pattern jp-sm" onclick="Copy(this)">が</span> — فاعل و اطلاعات تازه</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">でんしゃがきます。</span><span class="romaji">densha ga kimasu.</span><span class="grammar-note">قطار می‌آید.</span></li>
                                <li><span class="jp" onclick="Copy(this)">あめがふっています。</span><span class="romaji">ame ga futte imasu.</span><span class="grammar-note">باران می‌بارد.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title">شمارنده‌ها — <span class="grammar-pattern jp-sm" onclick="Copy(this)">〜つ</span>، <span class="grammar-pattern jp-sm" onclick="Copy(this)">〜にん</span></h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">りんごをみっつください。</span><span class="romaji">ringo o mittsu kudasai.</span><span class="grammar-note">سه سیب لطفاً.</span></li>
                                <li><span class="jp" onclick="Copy(this)">がくせいがふたりいます。</span><span class="romaji">gakusei ga futari imasu.</span><span class="grammar-note">دو دانشجو هست.</span></li>
                            </ul>
                        </div>
                    </section>

                    <!-- بخش ۷ -->
                    <section class="docs-section rtl V" id="item-1-7">
                        <h2 class="section-heading V rtl">بخش ۷ — خواستن و توانستن</h2>
                        <p class="text-justify">میل، علاقه، توانایی و اجازه؛ چهار الگویی که در مکالمه بیشتر از همه تکرار می‌شوند.</p>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title"><span class="grammar-pattern jp-sm" onclick="Copy(this)">たいです</span> — مایل بودن</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">にほんにいきたいです。</span><span class="romaji">nihon ni ikitai desu.</span><span class="grammar-note">می‌خواهم به ژاپن بروم.</span></li>
                                <li><span class="jp" onclick="Copy(this)">みずがのみたいです。</span><span class="romaji">mizu ga nomitai desu.</span><span class="grammar-note">آب می‌خواهم بنوشم.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title"><span class="grammar-pattern jp-sm" onclick="Copy(this)">すき</span> / <span class="grammar-pattern jp-sm" onclick="Copy(this)">じょうず</span> — علاقه و مهارت</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">わたしはすしがすきです。</span><span class="romaji">watashi wa sushi ga suki desu.</span><span class="grammar-note">من سوشی دوست دارم.</span></li>
                                <li><span class="jp" onclick="Copy(this)">かのじょはうたがじょうずです。</span><span class="romaji">kanojo wa uta ga jouzu desu.</span><span class="grammar-note">او در آواز خوب است.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title"><span class="grammar-pattern jp-sm" onclick="Copy(this)">ことができます</span> — توانستن</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">にほんごをはなすことができます。</span><span class="romaji">nihongo o hanasu koto ga dekimasu.</span><span class="grammar-note">می‌توانم ژاپنی صحبت کنم.</span></li>
                                <li><span class="jp" onclick="Copy(this)">ここでしゃしんをとることができますか。</span><span class="romaji">koko de shashin o toru koto ga dekimasu ka.</span><span class="grammar-note">اینجا می‌توان عکس گرفت؟</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title">اجازه و ممنوعیت — <span class="grammar-pattern jp-sm" onclick="Copy(this)">てもいいですか</span> / <span class="grammar-pattern jp-sm" onclick="Copy(this)">てはいけません</span></h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">ここにすわってもいいですか。</span><span class="romaji">koko ni suwatte mo ii desu ka.</span><span class="grammar-note">می‌توانم اینجا بنشینم؟</span></li>
                                <li><span class="jp" onclick="Copy(this)">ここでたばこをすってはいけません。</span><span class="romaji">koko de tabako o sutte wa ikemasen.</span><span class="grammar-note">اینجا نباید سیگار کشید.</span></li>
                            </ul>
                        </div>
                    </section>

                    <!-- بخش ۸ -->
                    <section class="docs-section rtl V" id="item-1-8">
                        <h2 class="section-heading V rtl">بخش ۸ — شکل て و پیوند جمله</h2>
                        <p class="text-justify">شکل て دروازهٔ گرامر پیشرفته است: با آن جمله‌ها را به هم وصل می‌کنیم، درخواست می‌سازیم و حالت یا کار جاری را می‌گوییم.</p>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title">پیوند دو کار با شکل <span class="grammar-pattern jp-sm" onclick="Copy(this)">て</span></h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">あさおきて、ごはんをたべます。</span><span class="romaji">asa okite, gohan o tabemasu.</span><span class="grammar-note">صبح بیدار می‌شوم و غذا می‌خورم.</span></li>
                                <li><span class="jp" onclick="Copy(this)">としょかんへいって、べんきょうします。</span><span class="romaji">toshokan e itte, benkyou shimasu.</span><span class="grammar-note">به کتابخانه می‌روم و درس می‌خوانم.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title"><span class="grammar-pattern jp-sm" onclick="Copy(this)">ています</span> — کار جاری و حالت</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">いまほんをよんでいます。</span><span class="romaji">ima hon o yonde imasu.</span><span class="grammar-note">الان کتاب می‌خوانم.</span></li>
                                <li><span class="jp" onclick="Copy(this)">とうきょうにすんでいます。</span><span class="romaji">toukyou ni sunde imasu.</span><span class="grammar-note">در توکیو زندگی می‌کنم.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title"><span class="grammar-pattern jp-sm" onclick="Copy(this)">てください</span> — درخواست مؤدبانه</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">ここににほんごでかいてください。</span><span class="romaji">koko ni nihongo de kaite kudasai.</span><span class="grammar-note">لطفاً اینجا به ژاپنی بنویسید.</span></li>
                                <li><span class="jp" onclick="Copy(this)">ゆっくりはなしてください。</span><span class="romaji">yukkuri hanashite kudasai.</span><span class="grammar-note">لطفاً آهسته صحبت کنید.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title">دلیل — <span class="grammar-pattern jp-sm" onclick="Copy(this)">から</span> / <span class="grammar-pattern jp-sm" onclick="Copy(this)">ので</span></h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">あめですから、いきません。</span><span class="romaji">ame desu kara, ikimasen.</span><span class="grammar-note">چون باران است، نمی‌روم.</span></li>
                                <li><span class="jp" onclick="Copy(this)">さむいので、まどをしめます。</span><span class="romaji">samui no de, mado o shimemasu.</span><span class="grammar-note">چون سرد است، پنجره را می‌بندم.</span></li>
                            </ul>
                        </div>
                    </section>

                    <!-- بخش ۹ -->
                    <section class="docs-section rtl V" id="item-1-9">
                        <h2 class="section-heading V rtl">بخش ۹ — ترتیب رویدادها</h2>
                        <p class="text-justify">برای گفتن «قبل»، «بعد»، «وقتی» و «همزمان»، فعل پایه در شکل ساده می‌آید و الگو بعد از آن می‌نشیند.</p>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title"><span class="grammar-pattern jp-sm" onclick="Copy(this)">まえに</span> — قبل از</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">ねるまえに、ほんをよみます。</span><span class="romaji">neru mae ni, hon o yomimasu.</span><span class="grammar-note">قبل از خواب کتاب می‌خوانم.</span></li>
                                <li><span class="jp" onclick="Copy(this)">たべるまえに、てをあらいます。</span><span class="romaji">taberu mae ni, te o araimasu.</span><span class="grammar-note">قبل از غذا دست‌هایم را می‌شویم.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title"><span class="grammar-pattern jp-sm" onclick="Copy(this)">あとで</span> — بعد از</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">しごとのあとで、えいがをみます。</span><span class="romaji">shigoto no ato de, eiga o mimasu.</span><span class="grammar-note">بعد از کار فیلم می‌بینم.</span></li>
                                <li><span class="jp" onclick="Copy(this)">ごはんのあとで、さんぽします。</span><span class="romaji">gohan no ato de, sanpo shimasu.</span><span class="grammar-note">بعد از غذا قدم می‌زنم.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title"><span class="grammar-pattern jp-sm" onclick="Copy(this)">とき</span> — وقتی که</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">ひまなとき、おんがくをききます。</span><span class="romaji">hima na toki, ongaku o kikimasu.</span><span class="grammar-note">وقتی بیکارم موسیقی گوش می‌دهم.</span></li>
                                <li><span class="jp" onclick="Copy(this)">こどものとき、よくあそびました。</span><span class="romaji">kodomo no toki, yoku asobimashita.</span><span class="grammar-note">در کودکی زیاد بازی می‌کردم.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title"><span class="grammar-pattern jp-sm" onclick="Copy(this)">ながら</span> — همزمان با</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">おんがくをききながら、べんきょうします。</span><span class="romaji">ongaku o kikinagara, benkyou shimasu.</span><span class="grammar-note">در حین گوش دادن به موسیقی درس می‌خوانم.</span></li>
                                <li><span class="jp" onclick="Copy(this)">あるきながら、はなします。</span><span class="romaji">arukinagara, hanashimasu.</span><span class="grammar-note">در حین راه رفتن صحبت می‌کنیم.</span></li>
                            </ul>
                        </div>
                    </section>

                    <!-- بخش ۱۰ -->
                    <section class="docs-section rtl V" id="item-1-10">
                        <h2 class="section-heading V rtl">بخش ۱۰ — مقایسه و نظر</h2>
                        <p class="text-justify">آخرین قدم چکیده: مقایسهٔ دو چیز، برترین انتخاب، خواستنِ چیزی و گفتن نظر شخصی.</p>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title"><span class="grammar-pattern jp-sm" onclick="Copy(this)">より</span> / <span class="grammar-pattern jp-sm" onclick="Copy(this)">のほうが</span> — مقایسه</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">なつよりふゆのほうがすきです。</span><span class="romaji">natsu yori fuyu no hou ga suki desu.</span><span class="grammar-note">زمستان را بیشتر از تابستان دوست دارم.</span></li>
                                <li><span class="jp" onclick="Copy(this)">でんしゃはバスよりはやいです。</span><span class="romaji">densha wa basu yori hayai desu.</span><span class="grammar-note">قطار از اتوبوس سریع‌تر است.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title"><span class="grammar-pattern jp-sm" onclick="Copy(this)">いちばん</span> — برترین</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">これがいちばんおいしいです。</span><span class="romaji">kore ga ichiban oishii desu.</span><span class="grammar-note">این خوشمزه‌ترین است.</span></li>
                                <li><span class="jp" onclick="Copy(this)">にほんでいちばんたかいやまはふじさんです。</span><span class="romaji">nihon de ichiban takai yama wa fujisan desu.</span><span class="grammar-note">بلندترین کوه ژاپن فوجی است.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title"><span class="grammar-pattern jp-sm" onclick="Copy(this)">がほしいです</span> — خواستنِ چیز</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">あたらしいくるまがほしいです。</span><span class="romaji">atarashii kuruma ga hoshii desu.</span><span class="grammar-note">ماشین نو می‌خواهم.</span></li>
                                <li><span class="jp" onclick="Copy(this)">もっとじかんがほしいです。</span><span class="romaji">motto jikan ga hoshii desu.</span><span class="grammar-note">وقت بیشتری می‌خواهم.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title"><span class="grammar-pattern jp-sm" onclick="Copy(this)">とおもいます</span> — نظر شخصی</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">あしたはあめだとおもいます。</span><span class="romaji">ashita wa ame da to omoimasu.</span><span class="grammar-note">فکر می‌کنم فردا باران است.</span></li>
                                <li><span class="jp" onclick="Copy(this)">これはいいとおもいます。</span><span class="romaji">kore wa ii to omoimasu.</span><span class="grammar-note">فکر می‌کنم این خوب است.</span></li>
                            </ul>
                        </div>
                    </section>

                    <!-- بخش اول -->
                    <section class="docs-intro V docs-section rtl" id="part-one">
                        <h2 class="section-heading V rtl">بخش اول — جمله‌های پایه و پرسش‌های روزمره</h2>
                        <p class="text-justify">این بخش بر پایهٔ درس‌های آغازین کتاب‌های みんなの にほんご، Marugoto A1 و Japanese for Busy People نوشته شده است: از الگوی سادهٔ «A は B です» و ذرهٔ の تا اشاره با こ・そ・あ・ど، پرسش و پاسخ کوتاه، عددها و پرسش‌های روزمره مثل قیمت، سن، نام، مالکیت و ساعت.</p>
                        <div class="callout-block callout-block-info rtl">
                            <div class="content">
                                <h4 class="callout-title">
                                    <span class="callout-icon-holder me-1">
                                        <i class="fas fa-thumbs-up"></i>
                                    </span>
                                    Tip
                                </h4>
                                <ul>
                                    <li>در این بخش هم همهٔ نمونه‌ها فقط با هیراگانا و کاتاکانا نوشته شده‌اند.</li>
                                    <li>ذرهٔ は «وا» و ذرهٔ を «او» تلفظ می‌شود؛ روی هر نمونه کلیک کنید تا کپی شود.</li>
                                    <li>برای پرسیدن «چند؟» با いくつ و برای قیمت با いくら سر و کار داریم.</li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <!-- بخش اول — ۱ -->
                    <section class="docs-section rtl V" id="item-2-1">
                        <h2 class="section-heading V rtl">۱. الگوی A は B です</h2>
                        <p class="text-justify">ساده‌ترین جملهٔ ژاپنی از دو اسم و です ساخته می‌شود: «A は B です» یعنی «A، B است». は نقش فاعل/موضوع را نشان می‌دهد و です لحن مؤدب می‌سازد.</p>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title">هستهٔ جمله: <span class="grammar-pattern jp-sm" onclick="Copy(this)">A は B です</span></h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">わたしは がくせいです。</span><span class="romaji">watashi wa gakusei desu.</span><span class="grammar-note">من دانشجو هستم.</span></li>
                                <li><span class="jp" onclick="Copy(this)">ミラーさんは かいしゃいんです。</span><span class="romaji">miraa-san wa kaishain desu.</span><span class="grammar-note">آقای می‌لر کارمند شرکت است.</span></li>
                                <li><span class="jp" onclick="Copy(this)">これは ほんです。</span><span class="romaji">kore wa hon desu.</span><span class="grammar-note">این کتاب است.</span></li>
                                <li><span class="jp" onclick="Copy(this)">わたしは にほんごの せんせいです。</span><span class="romaji">watashi wa nihongo no sensei desu.</span><span class="grammar-note">من معلم زبان ژاپنی هستم.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title">منفی: <span class="grammar-pattern jp-sm" onclick="Copy(this)">では ありません</span> / <span class="grammar-pattern jp-sm" onclick="Copy(this)">じゃ ありません</span></h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">わたしは にほんじんでは ありません。</span><span class="romaji">watashi wa nihonjin de wa arimasen.</span><span class="grammar-note">من ژاپنی نیستم.</span></li>
                                <li><span class="jp" onclick="Copy(this)">これは わたしの ほんじゃ ありません。</span><span class="romaji">kore wa watashi no hon ja arimasen.</span><span class="grammar-note">این کتاب من نیست.</span></li>
                                <li><span class="jp" onclick="Copy(this)">ミラーさんは がくせいでは ありません。</span><span class="romaji">miraa-san wa gakusei de wa arimasen.</span><span class="grammar-note">آقای می‌لر دانشجو نیست.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title">پرسشی کردن جمله با <span class="grammar-pattern jp-sm" onclick="Copy(this)">か</span></h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">あなたは がくせいですか。</span><span class="romaji">anata wa gakusei desu ka.</span><span class="grammar-note">دانشجو هستید؟</span></li>
                                <li><span class="jp" onclick="Copy(this)">これは えんぴつですか。</span><span class="romaji">kore wa enpitsu desu ka.</span><span class="grammar-note">این مداد است؟</span></li>
                                <li><span class="jp" onclick="Copy(this)">ミラーさんは アメリカじんですか。</span><span class="romaji">miraa-san wa amerikajin desu ka.</span><span class="grammar-note">آقای می‌لر آمریکایی است؟</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title"><span class="grammar-pattern jp-sm" onclick="Copy(this)">も</span> — به جای は، برای «هم»</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">わたしも がくせいです。</span><span class="romaji">watashi mo gakusei desu.</span><span class="grammar-note">من هم دانشجو هستم.</span></li>
                                <li><span class="jp" onclick="Copy(this)">これも わたしの ほんです。</span><span class="romaji">kore mo watashi no hon desu.</span><span class="grammar-note">این هم کتاب من است.</span></li>
                            </ul>
                        </div>
                    </section>

                    <!-- بخش اول — ۲ -->
                    <section class="docs-section rtl V" id="item-2-2">
                        <h2 class="section-heading V rtl">۲. ذرهٔ の — مالکیت و پیوند</h2>
                        <p class="text-justify">の دو اسم را به هم می‌چسباند: «اسم دومِ اسم اول». همین یک ذره هم مالکیت را می‌سازد، هم دسته و نوع را، و هم می‌تواند جای اسم را بگیرد («مالِ …»).</p>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title">مالکیت: <span class="grammar-pattern jp-sm" onclick="Copy(this)">わたしの ほん</span></h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">これは わたしの かばんです。</span><span class="romaji">kore wa watashi no kaban desu.</span><span class="grammar-note">این کیف من است.</span></li>
                                <li><span class="jp" onclick="Copy(this)">あれは せんせいの くるまです。</span><span class="romaji">are wa sensei no kuruma desu.</span><span class="grammar-note">آن ماشین معلم است.</span></li>
                                <li><span class="jp" onclick="Copy(this)">これは ミラーさんの かさです。</span><span class="romaji">kore wa miraa-san no kasa desu.</span><span class="grammar-note">این چتر آقای می‌لر است.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title">پیوند دو اسم — دسته، نوع و وابستگی</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">あの ひとは にほんごの せんせいです。</span><span class="romaji">ano hito wa nihongo no sensei desu.</span><span class="grammar-note">آن شخص معلم زبان ژاپنی است.</span></li>
                                <li><span class="jp" onclick="Copy(this)">わたしは だいがくの がくせいです。</span><span class="romaji">watashi wa daigaku no gakusei desu.</span><span class="grammar-note">من دانشجوی دانشگاه هستم.</span></li>
                                <li><span class="jp" onclick="Copy(this)">これは にほんの おかしです。</span><span class="romaji">kore wa nihon no okashi desu.</span><span class="grammar-note">این شیرینی ژاپنی است.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title">«مالِ …» — の بدون اسم</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">これは わたしの です。</span><span class="romaji">kore wa watashi no desu.</span><span class="grammar-note">این مال من است.</span></li>
                                <li><span class="jp" onclick="Copy(this)">その かさは だれの ですか。</span><span class="romaji">sono kasa wa dare no desu ka.</span><span class="grammar-note">آن چتر مال کیست؟</span></li>
                                <li><span class="jp" onclick="Copy(this)">この ほんは せんせいの です。</span><span class="romaji">kono hon wa sensei no desu.</span><span class="grammar-note">این کتاب مال معلم است.</span></li>
                            </ul>
                        </div>
                    </section>

                    <!-- بخش اول — ۳ -->
                    <section class="docs-section rtl V" id="item-2-3">
                        <h2 class="section-heading V rtl">۳. اشاره: これ・この・ここ</h2>
                        <p class="text-justify">همهٔ واژه‌های اشاره در یک شبکهٔ چهارتایی جا می‌گیرند: こ برای چیزِ نزدیک گوینده، そ برای نزدیک شنونده، あ برای دور از هر دو، و ど برای پرسش.</p>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title">جدول こ・そ・あ・ど</h3>
                            <div class="table-responsive">
                                <table class="table table-sm table-bordered grammar-table">
                                    <thead>
                                        <tr>
                                            <th>دسته</th>
                                            <th>こ</th>
                                            <th>そ</th>
                                            <th>あ</th>
                                            <th>ど</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>چیز</td>
                                            <td><span class="jp-sm" onclick="Copy(this)">これ</span></td>
                                            <td><span class="jp-sm" onclick="Copy(this)">それ</span></td>
                                            <td><span class="jp-sm" onclick="Copy(this)">あれ</span></td>
                                            <td><span class="jp-sm" onclick="Copy(this)">どれ</span></td>
                                        </tr>
                                        <tr>
                                            <td>چیز + اسم</td>
                                            <td><span class="jp-sm" onclick="Copy(this)">この</span></td>
                                            <td><span class="jp-sm" onclick="Copy(this)">その</span></td>
                                            <td><span class="jp-sm" onclick="Copy(this)">あの</span></td>
                                            <td><span class="jp-sm" onclick="Copy(this)">どの</span></td>
                                        </tr>
                                        <tr>
                                            <td>جا</td>
                                            <td><span class="jp-sm" onclick="Copy(this)">ここ</span></td>
                                            <td><span class="jp-sm" onclick="Copy(this)">そこ</span></td>
                                            <td><span class="jp-sm" onclick="Copy(this)">あそこ</span></td>
                                            <td><span class="jp-sm" onclick="Copy(this)">どこ</span></td>
                                        </tr>
                                        <tr>
                                            <td>جهت / مؤدب</td>
                                            <td><span class="jp-sm" onclick="Copy(this)">こちら</span></td>
                                            <td><span class="jp-sm" onclick="Copy(this)">そちら</span></td>
                                            <td><span class="jp-sm" onclick="Copy(this)">あちら</span></td>
                                            <td><span class="jp-sm" onclick="Copy(this)">どちら</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title"><span class="grammar-pattern jp-sm" onclick="Copy(this)">これ・それ・あれ・どれ</span> — خودِ چیز</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">これは わたしの ほんです。</span><span class="romaji">kore wa watashi no hon desu.</span><span class="grammar-note">این کتاب من است.</span></li>
                                <li><span class="jp" onclick="Copy(this)">それは なんですか。</span><span class="romaji">sore wa nan desu ka.</span><span class="grammar-note">آن چیست؟</span></li>
                                <li><span class="jp" onclick="Copy(this)">あれは えきです。</span><span class="romaji">are wa eki desu.</span><span class="grammar-note">آن ایستگاه است.</span></li>
                                <li><span class="jp" onclick="Copy(this)">どれが あなたの かばんですか。</span><span class="romaji">dore ga anata no kaban desu ka.</span><span class="grammar-note">کدام کیف شماست؟</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title"><span class="grammar-pattern jp-sm" onclick="Copy(this)">この・その・あの・どの</span> + اسم</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">この ほんは おもしろいです。</span><span class="romaji">kono hon wa omoshiroi desu.</span><span class="grammar-note">این کتاب جالب است.</span></li>
                                <li><span class="jp" onclick="Copy(this)">その かばんは わたしの です。</span><span class="romaji">sono kaban wa watashi no desu.</span><span class="grammar-note">آن کیف مال من است.</span></li>
                                <li><span class="jp" onclick="Copy(this)">あの ひとは だれですか。</span><span class="romaji">ano hito wa dare desu ka.</span><span class="grammar-note">آن شخص کیست؟</span></li>
                                <li><span class="jp" onclick="Copy(this)">どの でんしゃですか。</span><span class="romaji">dono densha desu ka.</span><span class="grammar-note">کدام قطار؟</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title"><span class="grammar-pattern jp-sm" onclick="Copy(this)">ここ・そこ・あそこ・どこ</span> — مکان</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">ここは わたしの へやです。</span><span class="romaji">koko wa watashi no heya desu.</span><span class="grammar-note">اینجا اتاق من است.</span></li>
                                <li><span class="jp" onclick="Copy(this)">そこは しょくどうです。</span><span class="romaji">soko wa shokudou desu.</span><span class="grammar-note">آنجا غذاخوری است.</span></li>
                                <li><span class="jp" onclick="Copy(this)">あそこは トイレです。</span><span class="romaji">asoko wa toire desu.</span><span class="grammar-note">آن‌طرف دستشویی است.</span></li>
                                <li><span class="jp" onclick="Copy(this)">えきは どこですか。</span><span class="romaji">eki wa doko desu ka.</span><span class="grammar-note">ایستگاه کجاست؟</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title"><span class="grammar-pattern jp-sm" onclick="Copy(this)">こちら・そちら・あちら・どちら</span> — جهت و لحن مؤدب</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">こちらは ミラーさんです。</span><span class="romaji">kochira wa miraa-san desu.</span><span class="grammar-note">ایشون آقای می‌لر هستند.</span></li>
                                <li><span class="jp" onclick="Copy(this)">じむしょは そちらです。</span><span class="romaji">jimusho wa sochira desu.</span><span class="grammar-note">دفتر آن طرف است.</span></li>
                                <li><span class="jp" onclick="Copy(this)">でんしゃは あちらです。</span><span class="romaji">densha wa achira desu.</span><span class="grammar-note">قطار آن طرف است.</span></li>
                                <li><span class="jp" onclick="Copy(this)">おてあらいは どちらですか。</span><span class="romaji">otearai wa dochira desu ka.</span><span class="grammar-note">دستشویی کجاست؟ (مؤدبانه)</span></li>
                            </ul>
                        </div>
                    </section>

                    <!-- بخش اول — ۴ -->
                    <section class="docs-section rtl V" id="item-2-4">
                        <h2 class="section-heading V rtl">۴. پرسش، پاسخ و تکرار</h2>
                        <p class="text-justify">هر جملهٔ خبری با か پرسش می‌شود. پاسخ کوتاه با はい / いいえ می‌آید و اگر جمله را نفهمیدیم، با یک عبارت کوتاه درخواست تکرار می‌کنیم.</p>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title">پاسخ کوتاه: <span class="grammar-pattern jp-sm" onclick="Copy(this)">はい、そうです</span> / <span class="grammar-pattern jp-sm" onclick="Copy(this)">いいえ、ちがいます</span></h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">がくせいですか。— はい、そうです。</span><span class="romaji">gakusei desu ka. — hai, sou desu.</span><span class="grammar-note">دانشجو هستید؟ — بله، همین‌طور است.</span></li>
                                <li><span class="jp" onclick="Copy(this)">がくせいですか。— いいえ、ちがいます。</span><span class="romaji">gakusei desu ka. — iie, chigaimasu.</span><span class="grammar-note">دانشجو هستید؟ — نه، این‌طور نیست.</span></li>
                                <li><span class="jp" onclick="Copy(this)">ミラーさんですか。— はい、ミラーです。</span><span class="romaji">miraa-san desu ka. — hai, miraa desu.</span><span class="grammar-note">آقای می‌لر هستید؟ — بله، می‌لر هستم.</span></li>
                                <li><span class="jp" onclick="Copy(this)">にほんじんですか。— いいえ、アメリカじんです。</span><span class="romaji">nihonjin desu ka. — iie, amerikajin desu.</span><span class="grammar-note">ژاپنی هستید؟ — نه، آمریکایی هستم.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title"><span class="grammar-pattern jp-sm" onclick="Copy(this)">そうですか</span> / <span class="grammar-pattern jp-sm" onclick="Copy(this)">そうですね</span> — واکنش کوتاه</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">そうですか。</span><span class="romaji">sou desu ka.</span><span class="grammar-note">آهان، این‌طور. (تأیید شنیدن)</span></li>
                                <li><span class="jp" onclick="Copy(this)">そうですね。</span><span class="romaji">sou desu ne.</span><span class="grammar-note">بله، درست است. (هم‌دلی)</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title">«متوجه نشدم» — درخواست تکرار</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">すみません、もう いちど おねがいします。</span><span class="romaji">sumimasen, mou ichido onegai shimasu.</span><span class="grammar-note">ببخشید، یک بار دیگر لطفاً.</span></li>
                                <li><span class="jp" onclick="Copy(this)">ゆっくり はなして ください。</span><span class="romaji">yukkuri hanashite kudasai.</span><span class="grammar-note">لطفاً آهسته صحبت کنید.</span></li>
                                <li><span class="jp" onclick="Copy(this)">すみません、なんですか。</span><span class="romaji">sumimasen, nan desu ka.</span><span class="grammar-note">ببخشید، چی فرمودید؟</span></li>
                                <li><span class="jp" onclick="Copy(this)">はい、わかりました。</span><span class="romaji">hai, wakarimashita.</span><span class="grammar-note">بله، فهمیدم.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title">واژه‌های پرسشی: <span class="grammar-pattern jp-sm" onclick="Copy(this)">なん・だれ・どこ・いつ・いくら</span></h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">これは なんですか。</span><span class="romaji">kore wa nan desu ka.</span><span class="grammar-note">این چیست؟</span></li>
                                <li><span class="jp" onclick="Copy(this)">あの ひとは だれですか。</span><span class="romaji">ano hito wa dare desu ka.</span><span class="grammar-note">آن شخص کیست؟</span></li>
                                <li><span class="jp" onclick="Copy(this)">トイレは どこですか。</span><span class="romaji">toire wa doko desu ka.</span><span class="grammar-note">دستشویی کجاست؟</span></li>
                                <li><span class="jp" onclick="Copy(this)">テストは いつですか。</span><span class="romaji">tesuto wa itsu desu ka.</span><span class="grammar-note">امتحان چه زمانی است؟</span></li>
                                <li><span class="jp" onclick="Copy(this)">これは いくらですか。</span><span class="romaji">kore wa ikura desu ka.</span><span class="grammar-note">این چند است؟</span></li>
                            </ul>
                        </div>
                    </section>

                    <!-- بخش اول — ۵ -->
                    <section class="docs-section rtl V" id="item-2-5">
                        <h2 class="section-heading V rtl">۵. عددها و پرسش‌های روزمره</h2>
                        <p class="text-justify">با عددها می‌توان قیمت، سن، ساعت، شمارهٔ تلفن و تعداد را پرسید. شمارنده بسته به نوع چیز عوض می‌شود: にん برای افراد، まい برای چیزهای تخت، だい برای وسایل، さつ برای کتاب و ぼん برای چیزهای باریک.</p>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title">عددهای پایه</h3>
                            <div class="table-responsive">
                                <table class="table table-sm table-bordered grammar-table">
                                    <thead>
                                        <tr>
                                            <th>عدد</th>
                                            <th>خواندن</th>
                                            <th>عدد</th>
                                            <th>خواندن</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>۱</td><td><span class="jp-sm" onclick="Copy(this)">いち</span></td><td>۶</td><td><span class="jp-sm" onclick="Copy(this)">ろく</span></td></tr>
                                        <tr><td>۲</td><td><span class="jp-sm" onclick="Copy(this)">に</span></td><td>۷</td><td><span class="jp-sm" onclick="Copy(this)">しち / なな</span></td></tr>
                                        <tr><td>۳</td><td><span class="jp-sm" onclick="Copy(this)">さん</span></td><td>۸</td><td><span class="jp-sm" onclick="Copy(this)">はち</span></td></tr>
                                        <tr><td>۴</td><td><span class="jp-sm" onclick="Copy(this)">よん / し</span></td><td>۹</td><td><span class="jp-sm" onclick="Copy(this)">きゅう / く</span></td></tr>
                                        <tr><td>۵</td><td><span class="jp-sm" onclick="Copy(this)">ご</span></td><td>۱۰</td><td><span class="jp-sm" onclick="Copy(this)">じゅう</span></td></tr>
                                        <tr><td>۱۰۰</td><td><span class="jp-sm" onclick="Copy(this)">ひゃく</span></td><td>۱۰۰۰</td><td><span class="jp-sm" onclick="Copy(this)">せん</span></td></tr>
                                        <tr><td>۳۰۰</td><td><span class="jp-sm" onclick="Copy(this)">さんびゃく</span></td><td>۳۰۰۰</td><td><span class="jp-sm" onclick="Copy(this)">さんぜん</span></td></tr>
                                        <tr><td>۶۰۰</td><td><span class="jp-sm" onclick="Copy(this)">ろっぴゃく</span></td><td>۸۰۰۰</td><td><span class="jp-sm" onclick="Copy(this)">はっせん</span></td></tr>
                                        <tr><td>۸۰۰</td><td><span class="jp-sm" onclick="Copy(this)">はっぴゃく</span></td><td>۱۰۰۰۰</td><td><span class="jp-sm" onclick="Copy(this)">いちまん</span></td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title">شمارنده‌ها: <span class="grammar-pattern jp-sm" onclick="Copy(this)">にん・まい・だい・さつ・ぼん</span></h3>
                            <div class="table-responsive">
                                <table class="table table-sm table-bordered grammar-table">
                                    <thead>
                                        <tr>
                                            <th>شمارنده</th>
                                            <th>برای</th>
                                            <th>۱</th>
                                            <th>۲</th>
                                            <th>۳</th>
                                            <th>۴</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td><span class="jp-sm" onclick="Copy(this)">にん</span></td><td>افراد</td><td><span class="jp-sm" onclick="Copy(this)">ひとり</span></td><td><span class="jp-sm" onclick="Copy(this)">ふたり</span></td><td><span class="jp-sm" onclick="Copy(this)">さんにん</span></td><td><span class="jp-sm" onclick="Copy(this)">よにん</span></td></tr>
                                        <tr><td><span class="jp-sm" onclick="Copy(this)">まい</span></td><td>کاغذ، تمبر، بشقاب</td><td><span class="jp-sm" onclick="Copy(this)">いちまい</span></td><td><span class="jp-sm" onclick="Copy(this)">にまい</span></td><td><span class="jp-sm" onclick="Copy(this)">さんまい</span></td><td><span class="jp-sm" onclick="Copy(this)">よんまい</span></td></tr>
                                        <tr><td><span class="jp-sm" onclick="Copy(this)">だい</span></td><td>ماشین و دستگاه</td><td><span class="jp-sm" onclick="Copy(this)">いちだい</span></td><td><span class="jp-sm" onclick="Copy(this)">にだい</span></td><td><span class="jp-sm" onclick="Copy(this)">さんだい</span></td><td><span class="jp-sm" onclick="Copy(this)">よんだい</span></td></tr>
                                        <tr><td><span class="jp-sm" onclick="Copy(this)">さつ</span></td><td>کتاب و دفتر</td><td><span class="jp-sm" onclick="Copy(this)">いっさつ</span></td><td><span class="jp-sm" onclick="Copy(this)">にさつ</span></td><td><span class="jp-sm" onclick="Copy(this)">さんさつ</span></td><td><span class="jp-sm" onclick="Copy(this)">よんさつ</span></td></tr>
                                        <tr><td><span class="jp-sm" onclick="Copy(this)">ぼん</span></td><td>قلم، بطری، چتر</td><td><span class="jp-sm" onclick="Copy(this)">いっぽん</span></td><td><span class="jp-sm" onclick="Copy(this)">にほん</span></td><td><span class="jp-sm" onclick="Copy(this)">さんぼん</span></td><td><span class="jp-sm" onclick="Copy(this)">よんほん</span></td></tr>
                                    </tbody>
                                </table>
                            </div>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">かいぎしつに ３にん います。</span><span class="romaji">kaigishitsu ni 3 nin imasu.</span><span class="grammar-note">در اتاق جلسه سه نفر هستند.</span></li>
                                <li><span class="jp" onclick="Copy(this)">きってを ５まい ください。</span><span class="romaji">kitte o 5 mai kudasai.</span><span class="grammar-note">پنج تمبر لطفاً.</span></li>
                                <li><span class="jp" onclick="Copy(this)">くるまが ２だい あります。</span><span class="romaji">kuruma ga 2 dai arimasu.</span><span class="grammar-note">دو ماشین هست.</span></li>
                                <li><span class="jp" onclick="Copy(this)">ほんを ４さつ かいました。</span><span class="romaji">hon o 4 satsu kaimashita.</span><span class="grammar-note">چهار کتاب خریدم.</span></li>
                                <li><span class="jp" onclick="Copy(this)">ペンを ３ぼん ください。</span><span class="romaji">pen o 3 bon kudasai.</span><span class="grammar-note">سه خودکار لطفاً.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title"><span class="grammar-pattern jp-sm" onclick="Copy(this)">いくら</span> / <span class="grammar-pattern jp-sm" onclick="Copy(this)">いくつ</span> — چند است؟ چند تا هست؟</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">これは いくらですか。— ３００えんです。</span><span class="romaji">kore wa ikura desu ka. — 300 en desu.</span><span class="grammar-note">این چند است؟ — سیصد ین.</span></li>
                                <li><span class="jp" onclick="Copy(this)">ぜんぶで いくらですか。— １２００えんです。</span><span class="romaji">zenbu de ikura desu ka. — 1200 en desu.</span><span class="grammar-note">روی هم چند می‌شود؟ — هزار و دویست ین.</span></li>
                                <li><span class="jp" onclick="Copy(this)">みかんは いくつ ありますか。— みっつ あります。</span><span class="romaji">mikan wa ikutsu arimasu ka. — mittsu arimasu.</span><span class="grammar-note">چند پرتقال هست؟ — سه تا.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title"><span class="grammar-pattern jp-sm" onclick="Copy(this)">おいくつですか</span> — چند سالتان است؟</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">おいくつですか。— ２０さいです。</span><span class="romaji">oikutsu desu ka. — 20 sai desu.</span><span class="grammar-note">چند سالتان است؟ — بیست سال.</span></li>
                                <li><span class="jp" onclick="Copy(this)">おとうさんは なんさいですか。— ５２さいです。</span><span class="romaji">otousan wa nansai desu ka. — 52 sai desu.</span><span class="grammar-note">پدرتان چند سال دارد؟ — پنجاه و دو سال.</span></li>
                                <li><span class="jp" onclick="Copy(this)">わたしは １８さいです。</span><span class="romaji">watashi wa 18 sai desu.</span><span class="grammar-note">من هجده سال دارم.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title">نام، شغل و زادگاه</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">おなまえは なんですか。— マイク・ミラーです。</span><span class="romaji">onamae wa nan desu ka. — maiku miraa desu.</span><span class="grammar-note">اسمتان چیست؟ — مایک می‌لر.</span></li>
                                <li><span class="jp" onclick="Copy(this)">おしごとは なんですか。— かいしゃいんです。</span><span class="romaji">oshigoto wa nan desu ka. — kaishain desu.</span><span class="grammar-note">کارتان چیست؟ — کارمند شرکت هستم.</span></li>
                                <li><span class="jp" onclick="Copy(this)">どこから きましたか。— アメリカから きました。</span><span class="romaji">doko kara kimashita ka. — amerika kara kimashita.</span><span class="grammar-note">از کجا آمده‌اید؟ — از آمریکا آمده‌ام.</span></li>
                                <li><span class="jp" onclick="Copy(this)">おくには どちらですか。— オーストラリアです。</span><span class="romaji">okuni wa dochira desu ka. — oosutoraria desu.</span><span class="grammar-note">اهل کجا هستید؟ — استرالیا.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title">مالِ کیست؟ / مال شماست؟</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">これは だれの かばんですか。— わたしの です。</span><span class="romaji">kore wa dare no kaban desu ka. — watashi no desu.</span><span class="grammar-note">این کیف کیست؟ — مال من.</span></li>
                                <li><span class="jp" onclick="Copy(this)">その ペンは だれの ですか。— ミラーさんの です。</span><span class="romaji">sono pen wa dare no desu ka. — miraa-san no desu.</span><span class="grammar-note">آن خودکار مال کیست؟ — مال آقای می‌لر.</span></li>
                                <li><span class="jp" onclick="Copy(this)">これは あなたの ほんですか。— はい、わたしの です。</span><span class="romaji">kore wa anata no hon desu ka. — hai, watashi no desu.</span><span class="grammar-note">این کتاب شماست؟ — بله، مال من است.</span></li>
                                <li><span class="jp" onclick="Copy(this)">いいえ、わたしの じゃ ありません。</span><span class="romaji">iie, watashi no ja arimasen.</span><span class="grammar-note">نه، مال من نیست.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title">این یا آن؟ A یا B؟ — <span class="grammar-pattern jp-sm" onclick="Copy(this)">どちら</span></h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">これか それ、どちらが いいですか。</span><span class="romaji">kore ka sore, dochira ga ii desu ka.</span><span class="grammar-note">این یا آن، کدام بهتر است؟</span></li>
                                <li><span class="jp" onclick="Copy(this)">コーヒーか こうちゃ、どちらに しますか。</span><span class="romaji">koohii ka koucha, dochira ni shimasu ka.</span><span class="grammar-note">قهوه یا چای، کدام را می‌خواهید؟</span></li>
                                <li><span class="jp" onclick="Copy(this)">えいがは すきですか、それとも おんがくですか。</span><span class="romaji">eiga wa suki desu ka, soretomo ongaku desu ka.</span><span class="grammar-note">فیلم را دوست دارید یا موسیقی؟</span></li>
                                <li><span class="jp" onclick="Copy(this)">この シャツと あの シャツと、どちらが すきですか。</span><span class="romaji">kono shatsu to ano shatsu to, dochira ga suki desu ka.</span><span class="grammar-note">این پیراهن یا آن پیراهن، کدام را بیشتر دوست دارید؟</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title"><span class="grammar-pattern jp-sm" onclick="Copy(this)">なんじですか</span> — ساعت چند است؟ (ده نمونه)</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">いま なんじですか。</span><span class="romaji">ima nanji desu ka.</span><span class="grammar-note">الان ساعت چند است؟</span></li>
                                <li><span class="jp" onclick="Copy(this)">いま くじです。</span><span class="romaji">ima kuji desu.</span><span class="grammar-note">ساعت نه است.</span></li>
                                <li><span class="jp" onclick="Copy(this)">いま くじはんです。</span><span class="romaji">ima kuji han desu.</span><span class="grammar-note">ساعت نه و نیم است.</span></li>
                                <li><span class="jp" onclick="Copy(this)">いま じゅうにじです。</span><span class="romaji">ima juuniji desu.</span><span class="grammar-note">ساعت دوازده است.</span></li>
                                <li><span class="jp" onclick="Copy(this)">いま ごご さんじです。</span><span class="romaji">ima gogo sanji desu.</span><span class="grammar-note">ساعت سه بعدازظهر است.</span></li>
                                <li><span class="jp" onclick="Copy(this)">いま あさ しちじです。</span><span class="romaji">ima asa shichiji desu.</span><span class="grammar-note">ساعت هفت صبح است.</span></li>
                                <li><span class="jp" onclick="Copy(this)">いま よる はちじです。</span><span class="romaji">ima yoru hachiji desu.</span><span class="grammar-note">ساعت هشت شب است.</span></li>
                                <li><span class="jp" onclick="Copy(this)">いま にじ じゅうごふんです。</span><span class="romaji">ima niji juugo fun desu.</span><span class="grammar-note">ساعت دو و پانزده دقیقه است.</span></li>
                                <li><span class="jp" onclick="Copy(this)">いま ろくじ ちょっと まえです。</span><span class="romaji">ima rokuji chotto mae desu.</span><span class="grammar-note">کمی پیش از ساعت شش است.</span></li>
                                <li><span class="jp" onclick="Copy(this)">いま じゅうじ すこし すぎです。</span><span class="romaji">ima juuji sukoshi sugi desu.</span><span class="grammar-note">کمی بعد از ساعت ده است.</span></li>
                                <li><span class="jp" onclick="Copy(this)">いま ごぜん しちじはんです。</span><span class="romaji">ima gozen shichiji han desu.</span><span class="grammar-note">ساعت هفت و نیم صبح است.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title"><span class="grammar-pattern jp-sm" onclick="Copy(this)">から</span> … <span class="grammar-pattern jp-sm" onclick="Copy(this)">まで</span> — از چه ساعتی تا چه ساعتی</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">９じから ５じまで はたらきます。</span><span class="romaji">9 ji kara 5 ji made hatarakimasu.</span><span class="grammar-note">از ساعت نه تا پنج کار می‌کنم.</span></li>
                                <li><span class="jp" onclick="Copy(this)">なんじから なんじまでですか。— ９じから ５じまでです。</span><span class="romaji">nanji kara nanji made desu ka. — 9 ji kara 5 ji made desu.</span><span class="grammar-note">از چه ساعتی تا چه ساعتی است؟ — از نه تا پنج.</span></li>
                                <li><span class="jp" onclick="Copy(this)">１２じから １じまで ひるやすみです。</span><span class="romaji">12 ji kara 1 ji made hiruyasumi desu.</span><span class="grammar-note">از دوازده تا یک استراحت ناهار است.</span></li>
                                <li><span class="jp" onclick="Copy(this)">げつようびから きんようびまで べんきょうします。</span><span class="romaji">getsuyoubi kara kinyoubi made benkyou shimasu.</span><span class="grammar-note">از دوشنبه تا جمعه درس می‌خوانم.</span></li>
                                <li><span class="jp" onclick="Copy(this)">うちから えきまで １５ふん かかります。</span><span class="romaji">uchi kara eki made 15 fun kakarimasu.</span><span class="grammar-note">از خانه تا ایستگاه پانزده دقیقه طول می‌کشد.</span></li>
                            </ul>
                        </div>

                        <div class="grammar-topic">
                            <h3 class="grammar-topic-title">«کیه؟»، «کجاست؟» و شمارهٔ تلفن</h3>
                            <ul class="grammar-examples">
                                <li><span class="jp" onclick="Copy(this)">だれですか。— ミラーさんです。</span><span class="romaji">dare desu ka. — miraa-san desu.</span><span class="grammar-note">کیست؟ — آقای می‌لر.</span></li>
                                <li><span class="jp" onclick="Copy(this)">あの ひとは だれですか。— わたしの せんせいです。</span><span class="romaji">ano hito wa dare desu ka. — watashi no sensei desu.</span><span class="grammar-note">آن شخص کیست؟ — معلم من است.</span></li>
                                <li><span class="jp" onclick="Copy(this)">でんわばんごうは なんばんですか。— ０９０の １２３۴の ５６７８です。</span><span class="romaji">denwa bangou wa nanban desu ka. — 090 no 1234 no 5678 desu.</span><span class="grammar-note">شمارهٔ تلفنتان چیست؟ — ۰۹۰ ۱۲۳۴ ۵۶۷۸.</span></li>
                                <li><span class="jp" onclick="Copy(this)">かいぎしつは どこですか。— ２かいです。</span><span class="romaji">kaigishitsu wa doko desu ka. — 2 kai desu.</span><span class="grammar-note">اتاق جلسه کجاست؟ — طبقهٔ دوم.</span></li>
                                <li><span class="jp" onclick="Copy(this)">クラスに なんにん いますか。— １０にん います。</span><span class="romaji">kurasu ni nannin imasu ka. — 10 nin imasu.</span><span class="grammar-note">در کلاس چند نفر هستند؟ — ده نفر.</span></li>
                            </ul>
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
    </script>
</body>

</html>
