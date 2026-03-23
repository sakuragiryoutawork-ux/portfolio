<?php

/**
 * Googleフォントのリンク
 *
 * @param [type] $urls
 * @param [type] $relation_type
 * @return void
 */
function mytheme_add_google_fonts_preconnect($urls, $relation_type)
{

    if ($relation_type === 'preconnect') {
        $urls[] = array(
            'href'        => 'https://fonts.googleapis.com',
        );
        $urls[] = array(
            'href'        => 'https://fonts.gstatic.com',
            'crossorigin' => 'anonymous',
        );
    }

    return $urls;
}
add_filter('wp_resource_hints', 'mytheme_add_google_fonts_preconnect', 10, 2);

/**
 * cssとjsのリンク
 *
 * @return void
 */
function mytheme_enqueue_assets()
{
    // CSS

    // リセットCSS
    wp_enqueue_style(
        'Poppins',
        get_template_directory_uri() . '/assets/css/destyle.css',
    );

    // Poppins
    wp_enqueue_style(
        'Poppins',
        'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap',
    );

    // Noto Sans JP
    wp_enqueue_style(
        'Noto+Sans+JP',
        'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap',
    );

    // slick css
    wp_enqueue_style(
        'slick',
        get_template_directory_uri() . '/assets/css/slick.css',
    );

    // slick-theme css
    wp_enqueue_style(
        'slick-theme',
        get_template_directory_uri() . '/assets/css/slick-theme.css',
        ['slick'],
        null,
    );

    // 共通 css
    wp_enqueue_style(
        'common1',
        get_template_directory_uri() . '/assets/css/common.css',
    );

    // トップページ css
    if (is_home()) {
        wp_enqueue_style(
            'top',
            get_template_directory_uri() . '/assets/css/top.css',
        );
    };

    // profile css
    if (is_page('profile')) {
        wp_enqueue_style(
            'profile',
            get_template_directory_uri() . '/assets/css/profile.css',
        );
    };

    // 制作物一覧 css
    if (is_post_type_archive('works') || is_tax("works_object")) {
        wp_enqueue_style(
            'works',
            get_template_directory_uri() . '/assets/css/works.css',
        );
    };

    // 制作物ページ css
    if (is_singular('works')) {
        wp_enqueue_style(
            'works_item',
            get_template_directory_uri() . '/assets/css/works_item.css',
        );
    };

    // お問い合わせ
    if (is_page(['contact', 'confirm', 'thanks'])) {
        wp_enqueue_style(
            'contact-style',
            get_template_directory_uri() . '/assets/css/contact.css',
        );
    }

    //===== 404ページ =====
    if (is_404()) {
        wp_enqueue_style(
            '404-css',
            get_template_directory_uri() . '/assets/css/404.css'
        );
    }


    // JavaScript

    // jQuery
    wp_enqueue_script('jquery');

    // slick
    wp_enqueue_script(
        'slick_min',
        get_template_directory_uri() . '/assets/js/slick.min.js',
        ['jquery'],
        null,
        true,
    );

    // 共通js
    wp_enqueue_script(
        'common1',
        get_template_directory_uri() . '/assets/js/common.js',
        ['jquery'],
        null,
        true,
    );

    // カーソルjs
    wp_enqueue_script(
        'cursor_top',
        get_template_directory_uri() . '/assets/js/cursor_top.js',
        ['jquery'],
        null,
        true,
    );

    // トップページ js
    if (is_home()) {
        wp_enqueue_script(
            'top',
            get_template_directory_uri() . '/assets/js/top.js',
            ['jquery'],
            null,
            true,
        );
    };

    // profile&wroks js
    if (is_page('profile') || is_post_type_archive('works') || is_page('contact')) {
        wp_enqueue_script(
            'profile&works',
            get_template_directory_uri() . '/assets/js/profile&works.js',
            ['jquery'],
            null,
            true,
        );
    };
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');

/**
 * <title>タグを有効する
 */
add_theme_support('title-tag');

/**
 * アイキャッチ画像設定の項目が追加される
 */
add_theme_support('post-thumbnails');

/**
 * 画像サイズ設定
 */
add_theme_support('post-thumbnails');

add_image_size('works-thumb', 600, 270, true); // 幅, 高さ, トリミング


// ツールバーを非表示にしてくれる
add_filter('show_admin_bar', '__return_false');
