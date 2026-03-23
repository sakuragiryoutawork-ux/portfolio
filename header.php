<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>
    <header>
        <div class="logo">
            <h1>
                <a href="<?php echo home_url(); ?>">Sakuragi Ryouta<br>
                    Portfolio</a>
            </h1>
        </div>
        <p class="btn-gnavi">
            <span></span>
            <span></span>
            <span></span>
        </p>
        <nav>
            <ul class="menu">
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="nav">TOP
                        <span></span><span></span><span></span><span></span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>#Skill" class="nav">Skill
                        <span></span><span></span><span></span><span></span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/works/')); ?>" class="nav">Works
                        <span></span><span></span><span></span><span></span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/profile/')); ?>" class="nav">profile
                        <span></span><span></span><span></span><span></span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="nav">Contact
                        <span></span><span></span><span></span><span></span>
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <!-- <img alt="モチ" class="cursor none">
    <div class="cursor-btn">
        <button class="on">ON</button>
        <button class="off">OFF</button>
    </div> -->
