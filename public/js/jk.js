document.addEventListener('click', function () {
    let date = new Date();
    date.setTime(date.getTime() + (365 * 24 * 60 * 60 * 1000));
    const expires = "expires=" + date.toUTCString();
    document.cookie='cookies=yes;expires='+expires+';path=/';
    const cookiemessage = document.getElementById('cookiemessage');
    cookiemessage.style.display = 'none';
});