<!-- header.phpを読み込み -->
<?php get_header(); ?>

<div class="KV">
    <p>profile
        <br><span>-僕について-</span>
    </p>
    <span class="scroll-text">scroll</span>
    <span class="scroll-icon"></span>
</div>
<main>
    <section class="About">
        <h2>profile</h2>
        <p>-僕について-</p>
        <div class="ziko">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/img/ziko.jpeg" alt="自己写真">
            <div class="text">
                <p class="ziko_name">櫻木　涼太</p>
                <p class="ziko_ab">1999年徳島生まれ。
                    高校卒業後、専門学校で電気工事とCADを学び、制御盤の設計業務に従事。<br>
                    実務を通して、入力と出力の関係や条件によって動作を制御する仕組みに面白さを感じ、
                    論理的に物事を組み立てる力を培う。<br>
                    その経験から、より柔軟に仕組みを設計できるプログラミング分野に興味を持ち、
                    現在はプログラミングスクールでWeb開発を中心に学習中。<br>
                    これまでの制御設計の経験を活かし、
                    設計から実装までを意識できるエンジニアを目指している。。</p>
            </div>
        </div>
    </section>
    <section class="Biography">
        <h2>Biography</h2>
        <p>-エンジニアを目指すまで-</p>
        <ul>
            <li></li>
            <li>
                <span class="maru"></span>
                <div class="inr">
                    <p>1999.12</p>
                    <p class="Btai">徳島県石井町に生まれる</p>
                    <p>小学校の2年生まで香川県の牟礼町で住んでいた。父の仕事の都合で小学校3年生から徳島県で住み、そこで少林寺拳法を学んだり、地域のお祭りのイベント行事に参加したりした。</p>
                </div>
            </li>
            <li>
                <span class="maru"></span>
                <div class="inr">
                    <p>2019.5</p>
                    <p class="Btai">専門学校で電子回路・ラダー回路に触れる</p>
                    <p>電子回路の基礎やラダー回路の設計を学び、入力と出力の関係を論理的に組み立てていく過程に強い興味を持つ。自分の組んだ回路通りに動作した時にものづくりの面白さを実感した。</p>
                </div>
            </li>
            <li>
                <span class="maru"></span>
                <div class="inr">
                    <p>2020.3</p>
                    <p class="Btai">制御盤の設計に携わる</p>
                    <p>制御盤の設計業務においてラダー回路を用いた制御設計や配線図の作成に携わる。入力と出力、条件によって動作が切り替わる仕組みを考えながら設計する中で、論理的に処理を組み立てていくことにやりがいを感じるようになった。
                    </p>
                </div>
            </li>
            <li>
                <span class="maru"></span>
                <div class="inr">
                    <p>現在</p>
                    <p class="Btai">プログラミングスクールで学習中</p>
                    <p>制御盤設計で培った論理的思考を活かし、プログラミングスクールにてWeb開発を中心に学習している。HTML / CSS / JavaScript / PHP /
                        SQL を用いたサイト・アプリ制作を通して、設計から実装までを一貫して考える力を身につけている。
                    </p>
                </div>
            </li>
        </ul>
    </section>
</main>

<!-- footer.phpを読み込み -->
<?php get_footer(); ?>
