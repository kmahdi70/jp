/*
 * jp/js/chunks.js — بارگذاری تدریجی ردیف‌ها.
 *
 * در صفحه‌هایی که ردیف‌های زیادی دارند (کانجی و واژگان) بخش اول با PHP رندر
 * می‌شود و یک ردیف «نگهبان» با کلاس jp-chunk-sentinel و چند data-* باقی
 * می‌ماند. وقتی نگهبان به نزدیکی دید کاربر برسد، بخش بعدی از همان صفحه گرفته
 * و پیش از نگهبان گذاشته می‌شود؛ نه چینش جدول عوض می‌شود (ردیف‌ها به همان
 * tbody/ul اضافه می‌شوند) و نه ساختار سطرها.
 *
 * جست‌وجوهای درون‌صفحه روی DOM کار می‌کنند، پس پیش از فیلتر کردن با
 * JpChunks.all(...) همهٔ بخش‌های همان ناحیه کامل می‌شوند تا نتیجه مثل قبل
 * کامل باشد.
 */
(function () {
    'use strict';

    var SELECTOR = '.jp-chunk-sentinel';
    var inflight = new WeakMap();
    var observer = null;

    function endpoint(sentinel) {
        var url = new URL(sentinel.dataset.endpoint, location.href);
        url.searchParams.set('chunk', sentinel.dataset.kind);
        url.searchParams.set('group', sentinel.dataset.group);
        url.searchParams.set('from', sentinel.dataset.from);
        /* زبان را صریح می‌فرستیم تا پاسخ وابسته به کوکی و ریدایرکت نباشد */
        var lang = new URLSearchParams(location.search).get('lang');
        if (lang) {
            url.searchParams.set('lang', lang);
        }
        return url.toString();
    }

    /* نگهبان هنوز نزدیک دید هست؟ برای بخش‌های کوتاه پشت‌سرهم ادامه می‌دهیم */
    function nearViewport(node) {
        var rect = node.getBoundingClientRect();
        return rect.top < (window.innerHeight || 800) + 700 && rect.bottom > -700;
    }

    function swap(sentinel, html) {
        var holder = document.createElement('template');
        holder.innerHTML = html;
        sentinel.parentNode.insertBefore(holder.content, sentinel);
    }

    function load(sentinel) {
        if (!sentinel || !sentinel.parentNode) {
            return Promise.resolve(false);
        }
        if (inflight.has(sentinel)) {
            return inflight.get(sentinel);
        }
        var host = sentinel.parentNode;
        var request = fetch(endpoint(sentinel), {
                credentials: 'same-origin',
                headers: { 'X-Requested-With': 'jp-chunks' }
            })
            .then(function (response) {
                if (!response.ok) {
                    throw new Error('chunk HTTP ' + response.status);
                }
                var next = parseInt(response.headers.get('X-Jp-From'), 10);
                var total = parseInt(response.headers.get('X-Jp-Total'), 10);
                return response.text().then(function (html) {
                    var before = sentinel.dataset.from;
                    swap(sentinel, html);
                    if (!isNaN(total)) {
                        sentinel.dataset.total = String(total);
                    }
                    if (!isNaN(next)) {
                        sentinel.dataset.from = String(next);
                    }
                    var done = !html.trim() ||
                        (!isNaN(total) && !isNaN(next) && next >= total);
                    /* اگر پاسخ پیشرفت نکرد، بخش را ناموفق علامت می‌زنیم تا حلقه گیر نکند */
                    if (!done && sentinel.dataset.from === before) {
                        sentinel.dataset.failed = '1';
                    }
                    if (done) {
                        if (sentinel.parentNode) {
                            sentinel.parentNode.removeChild(sentinel);
                        }
                    } else if (nearViewport(sentinel)) {
                        window.setTimeout(function () {
                            load(sentinel);
                        }, 0);
                    }
                    host.dispatchEvent(new CustomEvent('jp:chunk', {
                        bubbles: true,
                        detail: { done: done, sentinel: sentinel }
                    }));
                    return !done;
                });
            })
            .catch(function (error) {
                sentinel.dataset.failed = '1';
                if (window.console && console.warn) {
                    console.warn('jp chunks:', error);
                }
                return false;
            })
            .then(function (more) {
                inflight.delete(sentinel);
                return more;
            });
        inflight.set(sentinel, request);
        return request;
    }

    /* همهٔ بخش‌های یک ناحیه را کامل می‌کند؛ پیش از فیلتر کردن صدا زده می‌شود.
       از هر جدول/فهرست هم‌زمان یک بخش گرفته می‌شود تا ترتیب سطرها به‌هم
       نریزد ولی بخش‌های جدول‌های مختلف موازی پیش بروند. */
    function all(container) {
        var root = container || document;

        function step() {
            var sentinels = root.querySelectorAll(SELECTOR);
            var picked = [];
            var hosts = [];
            for (var i = 0; i < sentinels.length && picked.length < 4; i++) {
                var sentinel = sentinels[i];
                if (sentinel.dataset.failed === '1' || hosts.indexOf(sentinel.parentNode) !== -1) {
                    continue;
                }
                hosts.push(sentinel.parentNode);
                picked.push(sentinel);
            }
            if (!picked.length) {
                return Promise.resolve();
            }
            return Promise.all(picked.map(load)).then(step);
        }

        return step();
    }

    function observe(sentinel) {
        if (observer) {
            observer.observe(sentinel);
        } else {
            load(sentinel);
        }
    }

    /* اگر فیلتری در همان بخش فعال باشد، بعد از گرفتن تکه دوباره اجرا می‌شود تا
       ردیف‌های تازه هم فیلتر شوند و شمارنده‌ها همان عدد درست را نشان بدهند. */
    function refreshFilter(sentinel) {
        var scope = sentinel.closest ? sentinel.closest('.docs-section') : null;
        if (!scope) {
            return;
        }
        var inputs = scope.querySelectorAll('input.form-control');
        for (var i = 0; i < inputs.length; i++) {
            if (inputs[i].value !== '') {
                inputs[i].dispatchEvent(new Event('input', { bubbles: true }));
                return;
            }
        }
    }

    /* دکمهٔ «نمایش بیشتر»: دکمه در HTML هست ولی با hidden پنهان است؛ همین‌جا
       آشکار می‌شود تا بدون جاوااسکریپت دکمهٔ بی‌اثر دیده نشود. وقتی بارگذاری
       خودکار هنگام اسکرول اجرا نشود (مرورگر قدیمی، تب پنهان) کار می‌کند. */
    function wireMore(sentinel) {
        var btn = sentinel.querySelector('.jp-chunk-more');
        if (!btn) {
            return;
        }
        btn.hidden = false;
        btn.addEventListener('click', function () {
            if (btn.disabled) {
                return;
            }
            btn.disabled = true;
            btn.setAttribute('aria-busy', 'true');
            load(sentinel).then(function () {
                btn.disabled = false;
                btn.removeAttribute('aria-busy');
                if (sentinel.parentNode) {
                    refreshFilter(sentinel);
                }
            });
        });
    }

    function init() {
        var sentinels = document.querySelectorAll(SELECTOR);
        if (!sentinels.length) {
            return;
        }
        if ('IntersectionObserver' in window) {
            observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        load(entry.target);
                    }
                });
            }, { rootMargin: '700px 0px' });
        }
        Array.prototype.forEach.call(sentinels, function (sentinel) {
            observe(sentinel);
            wireMore(sentinel);
        });
    }

    window.JpChunks = {
        load: load,
        all: all,
        init: init
    };

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
