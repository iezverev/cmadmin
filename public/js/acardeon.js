$(document).ready(function () {
    $(".footer__list li:first-child").click(function (event) {
        if($(window).width() < 900){
            $(this).toggleClass('active').nextAll().slideToggle(300);
        }

    });
    $('.spoiler__title').click(function (event) {
        $(this).toggleClass('active').next().slideToggle(300);
    });
})