<!-- header.phpを読み込み -->
<?php get_header(); ?>

<div class="KV">
    <p>Sakuragi Ryouta<br>
        Portfolio</p>
    <span class="scroll-text">scroll</span>
    <span class="scroll-icon"></span>
</div>
<main>
    <section id="Skill" class="Skill" src="<?php echo get_template_directory_uri(); ?>/">
        <div class="inner">
            <h2>Skill</h2>
            <p>-できること-</p>
            <?php
            $args = [
                'post_type'      => 'skill', // 投稿タイプのスラッグ
                'posts_per_page' => -1,
                'order' => 'ASC',
                'orderby' => 'date',
            ];

            $query = new WP_Query($args);
            if ($query->have_posts()):
            ?>
            <ul>
                <?php while ($query->have_posts()): ?>
                <?php $query->the_post(); ?>
                <li class="card">
                    <h3><?php the_title(); ?></h3>
                    <?php $pic = get_field('img'); ?>

                    <?php if ($pic): ?>
                    <img src="<?php echo esc_url($pic['url']); ?>" alt="">
                    <?php endif; ?>
                    <p class="syurui"><?php echo get_field('code') ?></p>
                    <?php the_content(); ?>
                </li>
                <?php endwhile; ?>
            </ul>
            <?php
            endif;
            wp_reset_postdata()
            ?>
        </div>
    </section>
    <section id="Works" class="Works">
        <div class="inner">
            <h2>Works</h2>
            <p>-制作したもの-</p>
            <?php
            $args = [
                'post_type' => 'works',
                'posts_per_page' => -1,
            ];

            $query = new WP_Query($args);
            if ($query->have_posts()):
            ?>

            <div class="slider">

                <?php while ($query->have_posts()): ?>
                <?php $query->the_post(); ?>
                <div>
                    <div class="work-list">
                        <a href="<?php the_permalink() ?>">
                            <?php $pic = get_field('production_pic'); ?>

                            <?php if ($pic): ?>
                            <img src="<?php echo esc_url($pic['url']); ?>" alt="">
                            <?php endif; ?>
                            <div class="work-label">
                                <?php
                                        $terms = get_the_terms(get_the_ID(), 'works_object');
                                        $term_name = '';

                                        if (!empty($terms) && !is_wp_error($terms)) {
                                            $term_name = $terms[0]->name;
                                        }
                                        ?>
                                <p class="tagu"><?php echo esc_html($term_name); ?></p>
                                <span><?php the_field('production_count'); ?></span>
                            </div>
                            <p class="work-body"><?php the_title(); ?></p>
                        </a>
                    </div>
                </div>
                <?php endwhile; ?>
                <!-- <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/Works/qlip.jpg" alt="スクールの練習問題">
                    <p>練習問題</p>
                </div>
                <div><img src="<?php echo get_template_directory_uri(); ?>/assets/image/Works/mausbanner.jpg" alt="マウスバナー広告"></div>
                <div><img src="<?php echo get_template_directory_uri(); ?>/assets/image/Works/portfolio.jpg" alt="portfolio"></div> -->
            </div>
            <?php
            endif;
            wp_reset_postdata()
            ?>
            <div class="btnwa">
                <a href="<?php echo home_url('/works/'); ?>" class="btnwa-btn">
                    more
                    <span></span><span></span><span></span><span></span>
                </a>
            </div>
        </div>
    </section>
    <section id="About" class="About">
        <div class="inner">
            <h2>About</h2>
            <p>-私について-</p>
            <?php
            $args = [
                'name' => 'top-about',
                'posts_per_page' => 1,
            ];

            $query = new WP_Query($args);
            if ($query->have_posts()):
            ?>
            <div class="ziko">
                <?php while ($query->have_posts()): ?>
                <?php $query->the_post(); ?>
                <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium', ['class' => 'ziko-img']); ?>
                <?php endif; ?>
                <div class="text">
                    <p><?php the_title(); ?></p>
                    <?php the_content(); ?>
                </div>
                <?php endwhile; ?>
            </div>
            <?php
            endif;
            wp_reset_postdata()
            ?>
            <div class="btnwa">
                <a href="<?php echo home_url('/profile/'); ?>" class="btnwa-btn">
                    more
                    <span></span><span></span><span></span><span></span>
                </a>
            </div>
        </div>
    </section>
</main>

<!-- footer.phpを読み込み -->
<?php get_footer(); ?>