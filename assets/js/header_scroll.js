"use tcrict";
jQuery(function ($) {
    jQuery(window).on("scroll", function () {
        let scroll = jQuery(window).scrollTop();
        // メディアクエリ
        let w = jQuery(window).width();
        if (w <= 900) {
            if (scroll <= 400) {
                jQuery("header").removeClass("back-active");
                jQuery(".logo h1").fadeOut(500);
            } else {
                jQuery("header").addClass("back-active");
                jQuery(".logo h1").fadeIn(500);
            }
        }
    });
})
