"use tcrict";
jQuery(function ($) {
    let w = $(window).width();
    if (w >= 1024) {
        // マウスの位置
        let mouseX = 0;
        let mouseY = 0;
        // 画像の位置
        let cursorX = 0;
        let cursorY = 0;
        // ★ 停止する半径（カーソルがこれより近いと止まる）
        const stopRadius = 50;
        // 速度
        let speedList = [0.05, 0.005, 0.0005, 0.00005, 0.00005]
        let speed = 0;
        // 画像の種類
        let imgList = [
            "../image/img/moti.png",
            "../image/img/moti_red.png",
            "../image/img/moti_blue.png",
            "../image/img/moti_yellow.png",
            "../image/img/moti_green.png"
        ]

        // マウスカーソル
        $(window).on('mousemove', function (e) {
            mouseX = e.clientX;
            mouseY = e.clientY;
        });

        // 距離を計算する関数
        function getDistance(x1, y1, x2, y2) {
            const dx = x2 - x1;
            const dy = y2 - y1;
            return Math.sqrt(dx * dx + dy * dy);
        }

        function animate() {
            if ($(".cursor").hasClass("none")) {
                return false;
            }
            let dist = getDistance(cursorX, cursorY, mouseX, mouseY)
            if (dist > stopRadius && dist < stopRadius + 10) {
                cursorX += (mouseX - cursorX) * speed * 0.2;
                cursorY += (mouseY - cursorY) * speed * 0.2;
            } else if (dist > stopRadius && dist < stopRadius + 25) {
                cursorX += (mouseX - cursorX) * speed * 0.5;
                cursorY += (mouseY - cursorY) * speed * 0.5;
            } else if (dist > stopRadius) {
                // 0.1 を変えると追従速度変わる
                cursorX += (mouseX - cursorX) * speed;
                cursorY += (mouseY - cursorY) * speed;
            }
            // 画像位置を更新
            $(".cursor").css({ left: cursorX + 'px' });
            $(".cursor").css({ top: cursorY + 'px' });
            // 毎フレーム呼び出してアニメーション
            requestAnimationFrame(animate);
        };
        animate();
        $(".on").on("click", function () {
            const randomIndex = Math.floor(Math.random() * speedList.length);
            speed = speedList[randomIndex];
            $(".cursor").attr("src", imgList[randomIndex]);
            $(".cursor").removeClass("none");
            animate()
        });
        $(".off").on("click", function () {
            $(".cursor").addClass("none");
        })
    }
})
