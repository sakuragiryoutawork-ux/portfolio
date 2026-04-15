"use strict";

// 画像を取得
const cursorImg = document.querySelector('.cursor-img');
// ONボタンとOFFボタンの取得
const ON = document.querySelector('.on')
const OFF = document.querySelector('.off')

// マウスの位置
let mouseX = 0;
let mouseY = 0;
// 画像の位置
let cursorX = 0;
let cursorY = 0;
// 停止する半径
const stopRadius = 50;
// 速度
let speedList = [0.05, 0.005, 0.0005, 0.00005, 0.00005]
let speed = 0;
// 画像の種類
let imgList = [
    "img/moti.png",
    "img/moti_red.png",
    "img/moti_blue.png",
    "img/moti_yellow.png",
    "img/moti_green.png"
]

// マウス位置を取得しオフセットを加える
document.addEventListener('mousemove', (e) => {
    mouseX = e.clientX;
    mouseY = e.clientY;
});

// 距離を計算する関数
function getDistance(x1, y1, x2, y2) {
    const dx = x2 - x1;
    const dy = y2 - y1;
    return Math.sqrt(dx * dx + dy * dy);
}

// 追従アニメーション
function animate() {
    if (cursorImg.classList.contains("none")) {
        return false;
    }
    let dist = getDistance(cursorX, cursorY, mouseX, mouseY)
    // 指定半径に近づいたらスピードダウン
    if (dist > stopRadius && dist < stopRadius + 10) {
        cursorX += (mouseX - cursorX) * speed * 0.2;
        cursorY += (mouseY - cursorY) * speed * 0.2;
    } else if (dist > stopRadius && dist < stopRadius + 25) {
        cursorX += (mouseX - cursorX) * speed * 0.5;
        cursorY += (mouseY - cursorY) * speed * 0.5;
        // 指定した半径内に到達していたら停止
    } else if (dist > stopRadius) {
        cursorX += (mouseX - cursorX) * speed;
        cursorY += (mouseY - cursorY) * speed;
    }
    // 画像位置を更新
    cursorImg.style.left = cursorX + 'px';
    cursorImg.style.top = cursorY + 'px';
    // 毎フレーム呼び出してアニメーション
    requestAnimationFrame(animate);
}
// animate();
// ON、OFF切り替え
ON.addEventListener("click", function () {
    const random = Math.floor(Math.random() * speedList.length);
    speed = speedList[random];
    cursorImg.src = imgList[random];
    cursorImg.classList.remove("none")
    animate()
})
OFF.addEventListener("click", function () {
    cursorImg.classList.add("none");
})