/*
 * jp/js/search-clear.js — دکمهٔ پاک‌کردن کادر جست‌وجو.
 *
 * در موبایل، به‌محض اینکه در کادر جست‌وجو متنی باشد، یک آیکون × داخل خود کادر
 * می‌آید؛ زدنش متن را پاک می‌کند و همان رویداد input را می‌فرستد تا فیلترهای
 * صفحه (شمارنده‌ها، پنهان‌شدن بخش‌ها و…) هم به حالت اول برگردند.
 *
 * دکمه فقط روی موبایل دیده می‌شود (قاعده در css/global.css)؛ روی دسکتاپ کلید
 * Escape همان کار را می‌کند.
 */
(function () {
    'use strict';

    /* هر جایی که کادر جست‌وجوی صفحه داخلش نشسته است */
    var HOSTS = '.joyo-search, .word-search, .conv-search, .kata-search, .main-search-box .search-form';
    var INPUTS = 'input.form-control, input.search-input';
    var HOST_CLASS = 'jp-clear-host';

    function label() {
        var lang = (document.documentElement.lang || '').toLowerCase();
        return lang.indexOf('en') === 0 ? 'Clear search' : 'پاک کردن جست‌وجو';
    }

    function attach(input) {
        var host = input.parentNode;
        if (!host || host.querySelector('.search-clear')) {
            return;
        }
        host.classList.add(HOST_CLASS);

        var btn = document.createElement('button');
        btn.type = 'button';
        btn.className = 'search-clear';
        btn.setAttribute('aria-label', label());
        btn.title = btn.getAttribute('aria-label');
        btn.innerHTML = '<svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">' +
            '<line x1="6" y1="6" x2="18" y2="18"></line>' +
            '<line x1="18" y1="6" x2="6" y2="18"></line>' +
            '</svg>';
        host.appendChild(btn);

        function sync() {
            host.classList.toggle('has-value', input.value !== '');
        }

        input.addEventListener('input', sync);
        input.addEventListener('change', sync);
        input.addEventListener('search', sync);

        btn.addEventListener('click', function () {
            input.value = '';
            sync();
            /* همان رویدادی که تایپ می‌فرستد؛ فیلتر صفحه خودش به حالت اول برمی‌گردد */
            input.dispatchEvent(new Event('input', { bubbles: true }));
            input.focus();
        });

        sync();
    }

    function init() {
        var hosts = document.querySelectorAll(HOSTS);
        for (var i = 0; i < hosts.length; i++) {
            var inputs = hosts[i].querySelectorAll(INPUTS);
            for (var j = 0; j < inputs.length; j++) {
                attach(inputs[j]);
            }
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
