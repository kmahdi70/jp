/*
 * پخش خودکار ویدیوهای کانا فقط وقتی در دید هستند.
 *
 * ویدیوها با preload="none" و بدون autoplay در HTML می‌آیند تا در لود صفحه هیچ
 * درخواستی برای آن‌ها فرستاده نشود؛ به‌محض نزدیک شدن به دید، preload روی
 * "metadata" می‌رود و ویدیو پخش می‌شود. با خارج شدن از دید هم متوقف می‌شود تا
 * ده‌ها ویدیو هم‌زمان CPU و شبکهٔ موبایل را نگیرند.
 */
(function () {
    'use strict';

    var videos = document.querySelectorAll('video[data-autoplay]');
    if (!videos.length) {
        return;
    }

    function start(video) {
        if (video.preload !== 'metadata' && video.preload !== 'auto') {
            video.preload = 'metadata';
        }
        var played = video.play();
        if (played && typeof played.catch === 'function') {
            played.catch(function () { /* جلوگیری از خطای AbortError هنگام اسکرول سریع */ });
        }
    }

    /* مرورگرهای قدیمی: همان رفتار قبلی، پخش همه */
    if (!('IntersectionObserver' in window)) {
        for (var i = 0; i < videos.length; i++) {
            start(videos[i]);
        }
        return;
    }

    var observer = new IntersectionObserver(function (entries) {
        for (var i = 0; i < entries.length; i++) {
            var video = entries[i].target;
            if (entries[i].isIntersecting) {
                start(video);
            } else if (!video.paused) {
                video.pause();
            }
        }
    }, { rootMargin: '300px 0px', threshold: 0.01 });

    for (var j = 0; j < videos.length; j++) {
        observer.observe(videos[j]);
    }
})();
