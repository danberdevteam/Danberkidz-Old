var btn = $('#button');

$(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
        btn.addClass('show');
    } else {
        btn.removeClass('show');
    }
});

btn.on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: 0
    }, '300');
});

$(document).on("scroll", function () {
    if ($(document).scrollTop() > 90) {
        $("header").addClass("fixed-top");
    } else {
        $("header").removeClass("fixed-top");
    }
});