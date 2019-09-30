$(document).ready(function () {
    var id = $("#sign-id").val();

    if (id != '') {
//        $("#div_" + id).focus();
        var scrollPos = $("#div_" + id).offset().top;
        $(window).scrollTop(scrollPos);
        $('#div_' + id + ' .horoscope-box').addClass("focus");
    }
});

