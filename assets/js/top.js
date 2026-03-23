"use tcrict";
jQuery(function ($) {
    jQuery(window).on("scroll", function () {
        let scroll = jQuery(window).scrollTop();
        // KVの文字をスクロールで消す
        if (scroll >= 400) {
            jQuery(".KV p").fadeOut(500);
        } else {
            jQuery(".KV p").fadeIn(500);
        }
    });
    // スライドショー
    jQuery(".slider").slick({
        autoplay: true,
        autoplaySpeed: 3000,
        dots: true,
    });
});
