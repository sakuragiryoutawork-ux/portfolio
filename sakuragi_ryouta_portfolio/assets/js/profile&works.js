"use tcrict";
jQuery(function ($) {
    $(window).on("scroll", function () {
        let scroll = $(window).scrollTop();
        // KVの文字をスクロールで消す
        if (scroll >= 100) {
            $(".KV p").fadeOut(500);
        } else {
            $(".KV p").fadeIn(500);
        }
    });
});
