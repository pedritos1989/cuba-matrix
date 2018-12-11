(function ($) {
    //Bootstrap tooltip
    $('[data-toggle="tooltip"]').tooltip();

    //Scroll to Top
    $(".scroll-to-top").click(function () {
        $("html, body").animate({scrollTop: 0}, 600);
        return false;
    });

    // Toggle Scroll to Top button
    $(window).scroll(function () {

        var position = $(window).scrollTop();

        if (position >= 200) {
            $('.scroll-to-top').addClass('active');
        }
        else {
            $('.scroll-to-top').removeClass('active');
        }
    });
})(jQuery);