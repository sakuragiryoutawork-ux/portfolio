"use tcrict";
jQuery(function ($) {
    //ハンバーガーメニュー
    jQuery(".btn-gnavi").on("click", function () {
        jQuery(".menu").toggleClass("is-active");
        jQuery(".btn-gnavi").toggleClass("is-active");
    });
    jQuery(".nav").on("click", function () {
        jQuery(".menu").removeClass("is-active");
        jQuery(".btn-gnavi").removeClass("is-active");
    });
    jQuery(window).on("scroll", function () {
        let scroll = jQuery(window).scrollTop();
        // メディアクエリ
        let w = jQuery(window).width();
        if (w >= 900) {
            // scrollの文字をスクロールしたら消す
            if (scroll > 0) {
                jQuery(".scroll-text ").fadeOut(100)
                jQuery(".scroll-icon").fadeOut(100)
            } else {
                jQuery(".scroll-text ").fadeIn(300)
                jQuery(".scroll-icon").fadeIn(300)
            }
        } else {
            if (scroll <= 400) {
                jQuery("header").css("background-color", "transparent");
                jQuery(".logo h1").fadeOut(500);
            } else {
                jQuery("header").css("background-color", "rgba(0, 206, 255, 0.5)");
                jQuery(".logo h1").fadeIn(500);
            }
        }
    });
})
