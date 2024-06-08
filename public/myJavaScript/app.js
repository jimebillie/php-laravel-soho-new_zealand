$('.wrapHamsMenu').click(function () {
    $('#headerBottom').slideToggle(100);
});
$(window).scroll(function () {
    if ($(this).scrollTop() >= 110) {
        $("header").addClass("fixed");
    } else {
        $("header").removeClass("fixed");
    }
});
$('.wrapLinkHeader>a').click(function () {
    if ($('#headerBottom').is(':visible')) {
        $('#headerBottom').toggle();
    }
})
