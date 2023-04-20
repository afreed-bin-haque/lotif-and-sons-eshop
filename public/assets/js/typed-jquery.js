$(window).on('load', function () {
    function ReloadReady() {
        $('#preloader').css('display', 'none');
        $('.main').css('display', 'block');
    };
    window.setTimeout(ReloadReady, 500);
});
$(document).ready(function () {
    $('#see_password').click(function () {
        $(this).is(':checked') ? $('#password').attr('type', 'text') : $('#password').attr('type', 'password');
    });
});
