"use tcrict";
$(function () {
    //ハンバーガーメニュー
    $(".btn-gnavi").on("click", function () {
        $(".menu").toggleClass("is-active");
        $(".btn-gnavi").toggleClass("is-active");
    });
    $(".nav").on("click", function () {
        $(".menu").removeClass("is-active");
        $(".btn-gnavi").removeClass("is-active");
    });

})
