/*
 * jp/js/video-defer.js — ویدیوها فقط با کلیک کاربر دانلود می‌شوند.
 *
 * صفت autoplay بر preload="none" غالب می‌شود؛ برای همین مرورگر همهٔ کلیپ‌های
 * صفحه را همان اول (فقط برای متادیتا) می‌گرفت. در HTML هیچ src ای وجود ندارد و
 * آدرس در data-src مانده است؛ این فایل موقع اولین کلیک آن را می‌گذارد و پخش را
 * شروع می‌کند. تا آن لحظه هیچ درخواستی به فایل ویدیو نمی‌رود.
 *
 * کلیک‌های بعدی برای کلیپ‌های بدون نوار کنترل، پخش را پاز/ادامه می‌کنند.
 * کل کادرِ هر ویدیو کلیک‌پذیر است، نه فقط خود مستطیل تصویر.
 * ویدیوهای بلند آموزشی نوار کنترل خود را پس از بارگذاری می‌گیرند و رفتارشان
 * همان رفتار بومی پخش‌کننده است.
 */
(function () {
    'use strict';

    function play(video) {
        var started = video.play();
        if (started && typeof started.catch === 'function') {
            /* اگر مرورگر اجازهٔ پخش نداد، دست‌کم متادیتا و فریم اول گرفته شده است */
            started.catch(function () {});
        }
    }

    /* true یعنی همین حالا بارگذاری شد و پخش شروع شد */
    function hydrate(video) {
        if (video.getAttribute('src')) {
            return false;
        }
        var url = video.getAttribute('data-src');
        if (!url) {
            return false;
        }
        video.setAttribute('src', url);
        if (video.getAttribute('data-controls') === '1') {
            video.setAttribute('controls', '');
        }
        video.load();
        play(video);
        return true;
    }

    function activate(video) {
        if (hydrate(video)) {
            return;
        }
        if (video.hasAttribute('controls')) {
            /* پخش‌کنندهٔ بومی خودش پاز/ادامه را انجام می‌دهد */
            return;
        }
        if (video.paused) {
            play(video);
        } else {
            video.pause();
        }
    }

    /*
     * کادر دور ویدیو هم کلیک‌پذیر می‌شود: کلیپ با width="70%" فقط بخشی از
     * مربع را می‌گیرد و کلیک بیرون آن تا حالا کاری نمی‌کرد.
     */
    function box(video) {
        var parent = video.parentElement;
        if (!parent || parent === document.body) {
            return;
        }
        parent.style.cursor = 'pointer';
        parent.addEventListener('click', function (event) {
            if (event.target === video || video.contains(event.target)) {
                /* خود ویدیو (و نوار کنترل بومی‌اش) مسیر خودش را دارد */
                return;
            }
            activate(video);
        });
    }

    function init() {
        var videos = document.querySelectorAll('video[data-src]');
        Array.prototype.forEach.call(videos, function (video) {
            video.addEventListener('click', function () {
                activate(video);
            });

            box(video);

            if (video.getAttribute('data-controls') === '1') {
                if (!video.hasAttribute('tabindex')) {
                    video.setAttribute('tabindex', '0');
                }
                video.addEventListener('keydown', function (event) {
                    if (event.key === 'Enter' || event.key === ' ' || event.key === 'Spacebar') {
                        event.preventDefault();
                        activate(video);
                    }
                });
            }
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
