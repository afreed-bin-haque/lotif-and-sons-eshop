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

    $('#main_image').change(function () {
        const file = this.files[0];
        if (file) {
            let reader = new FileReader();
            reader.onload = function (event) {
                console.log(event.target.result);
                $('#imgPreview').attr('src', event.target.result);
            }
            reader.readAsDataURL(file);
        }
    });
});
