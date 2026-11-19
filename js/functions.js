/**
 * functions.js — توابع مشترک صفحه‌های JapanDocs
 *
 * تابع Copy متن عنصر کلیک‌شده را در کلیپ‌بورد می‌گذارد.
 * برای این کار به یک باکس مخفی در انتهای خود صفحه نیاز دارد:
 *
 *     <input type="text" id="Copy" size="2" style="visibility: hidden;">
 *
 * این باکس فقط متن را نگه می‌دارد؛ به‌جای اینکه کنار هر عنصر یک input جدا
 * ساخته شود، همهٔ عنصرهای صفحه از همین یک باکس استفاده می‌کنند.
 */

/* پیام «Copied» روی همان عنصر */
function ShowCopyTooltip(obj) {
    if (!window.bootstrap || !bootstrap.Tooltip) {
        return;
    }

    /* یک نمونه برای هر عنصر؛ نمونهٔ تکراری باعث خطای Bootstrap می‌شود */
    var tip = bootstrap.Tooltip.getInstance(obj);
    if (!tip) {
        tip = new bootstrap.Tooltip(obj, {
            trigger: 'manual',
            title: 'Copied'
        });
    }

    tip.show();
    clearTimeout(obj.copyTooltipTimer);
    obj.copyTooltipTimer = setTimeout(function () {
        tip.hide();
    }, 1000);
}

/* مسیر پشتیبان: مرورگر قدیمی یا صفحه‌ای که با https باز نشده است */
function LegacyCopy(Inp) {
    var original = Inp.getAttribute('style') || '';

    /* عنصر باید دیده شود تا انتخاب و execCommand کار کند، پس لحظه‌ای
       از کادر دید خارج می‌شود و بعد به حالت اول برمی‌گردد */
    Inp.style.visibility = 'visible';
    Inp.style.position = 'fixed';
    Inp.style.top = '-1000px';
    Inp.style.left = '-1000px';

    try {
        Inp.select();
        Inp.setSelectionRange(0, 99999);
        document.execCommand('copy');
    } catch (e) {
        /* چیزی برای گزارش نیست؛ کپی نشد */
    }

    Inp.setAttribute('style', original);
}

function Copy(obj) {
    if (!obj) {
        return;
    }

    /* باکس مخفی انتهای صفحه؛ اگر نبود، ساخته می‌شود */
    var Inp = document.getElementById('Copy');
    if (!Inp) {
        Inp = document.createElement('input');
        Inp.type = 'text';
        Inp.id = 'Copy';
        Inp.setAttribute('size', '2');
        Inp.style.visibility = 'hidden';
        document.body.appendChild(Inp);
    }

    /* innerText فاصله‌های اضافه و تگ‌های داخلی را حذف می‌کند */
    var text = (obj.innerText || obj.textContent || '').replace(/\u00a0/g, ' ').trim();
    if (!text) {
        return;
    }

    Inp.value = text;
    Inp.select();
    Inp.setSelectionRange(0, 99999);

    if (navigator.clipboard && window.isSecureContext) {
        navigator.clipboard.writeText(text).then(function () {
            ShowCopyTooltip(obj);
        }, function () {
            /* دسترسی به کلیپ‌بورد رد شد؛ همان مسیر پشتیبان */
            LegacyCopy(Inp);
            ShowCopyTooltip(obj);
        });
    } else {
        /* http یا مرورگر قدیمی: navigator.clipboard وجود ندارد */
        LegacyCopy(Inp);
        ShowCopyTooltip(obj);
    }
}
