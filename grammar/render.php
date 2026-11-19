<?php

if (!defined('JP_GRAMMAR')) {
    http_response_code(404);
    exit;
}

/**
 * رندر بخش‌های گرامر از دادهٔ ساختاریافته.
 *
 * هر بخش (part): id, nav, title, intro, tips[], items[]
 * هر آیتم (item): id, nav, title, intro, topics[]
 * هر مبحث (topic): title, note, table, examples[[ژاپنی, روماجی, فارسی], ...]
 */

if (!function_exists('jp_g_e')) {
    function jp_g_e(string $value): string
    {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
}

/** فهرست کنار صفحه برای بخش‌های داده‌محور */
function jp_g_nav(array $parts): void
{
    foreach ($parts as $part) {
        echo '                    <li class="nav-item section-title"><a class="nav-link scrollto" href="#', jp_g_e($part['id']), '"><span class="theme-icon-holder me-2"><i class="fas fa-book"></i></span>', $part['nav'], "</a></li>\n";
        foreach ($part['items'] as $item) {
            echo '                    <li class="nav-item"><a class="nav-link scrollto" href="#', jp_g_e($item['id']), '">', $item['nav'], "</a></li>\n";
        }
    }
}

/** بدنهٔ بخش‌های داده‌محور */
function jp_g_body(array $parts): void
{
    foreach ($parts as $part) {
        echo "\n                    <!-- ", $part['nav'], " -->\n";
        echo '                    <section class="docs-intro V docs-section rtl" id="', jp_g_e($part['id']), "\">\n";
        echo '                        <h2 class="section-heading V rtl">', $part['title'], "</h2>\n";
        echo '                        <p class="text-justify">', $part['intro'], "</p>\n";

        if (!empty($part['tips'])) {
            echo '                        <div class="callout-block callout-block-info rtl">', "\n";
            echo '                            <div class="content">', "\n";
            echo '                                <h4 class="callout-title"><span class="callout-icon-holder me-1"><i class="fas fa-thumbs-up"></i></span>Tip</h4>', "\n";
            echo "                                <ul>\n";
            foreach ($part['tips'] as $tip) {
                echo '                                    <li>', $tip, "</li>\n";
            }
            echo "                                </ul>\n";
            echo "                            </div>\n";
            echo "                        </div>\n";
        }

        echo "                    </section>\n";

        foreach ($part['items'] as $item) {
            echo "\n                    <!-- ", $item['nav'], " -->\n";
            echo '                    <section class="docs-section rtl V" id="', jp_g_e($item['id']), "\">\n";
            echo '                        <h2 class="section-heading V rtl">', $item['title'], "</h2>\n";

            if (!empty($item['intro'])) {
                echo '                        <p class="text-justify">', $item['intro'], "</p>\n";
            }

            foreach ($item['topics'] as $topic) {
                echo '                        <div class="grammar-topic">', "\n";
                echo '                            <h3 class="grammar-topic-title">', $topic['title'], "</h3>\n";

                if (!empty($topic['table'])) {
                    jp_g_table($topic['table']);
                }

                if (!empty($topic['examples'])) {
                    echo '                            <ul class="grammar-examples">', "\n";
                    foreach ($topic['examples'] as $example) {
                        echo '                                <li><span class="jp" onclick="Copy(this)">', $example[0], '</span><span class="romaji">', $example[1], '</span><span class="grammar-note">', $example[2], "</span></li>\n";
                    }
                    echo "                            </ul>\n";
                }

                if (!empty($topic['note'])) {
                    echo '                            <p class="grammar-note text-justify">', $topic['note'], "</p>\n";
                }

                echo "                        </div>\n";
            }

            echo "                    </section>\n";
        }
    }
}

/** جدول راهنمای گرامر */
function jp_g_table(array $table): void
{
    echo '                            <div class="table-responsive">', "\n";
    echo '                                <table class="table table-sm table-bordered grammar-table">', "\n";
    echo "                                    <thead>\n                                        <tr>\n";
    foreach ($table['head'] as $cell) {
        echo '                                            <th>', $cell, "</th>\n";
    }
    echo "                                        </tr>\n                                    </thead>\n                                    <tbody>\n";
    foreach ($table['rows'] as $row) {
        echo "                                        <tr>";
        foreach ($row as $cell) {
            echo '<td>', $cell, '</td>';
        }
        echo "</tr>\n";
    }
    echo "                                    </tbody>\n                                </table>\n                            </div>\n";
}
