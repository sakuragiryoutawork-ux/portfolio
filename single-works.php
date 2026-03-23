<!-- header.phpを読み込み -->
<?php get_header(); ?>

</div>
<div class="KV"></div>
<main>
    <div class="inner">
        <div class="work-box">
            <p class="title">
                <a href="<?php echo home_url('/'); ?>">Sakuragi Ryouta<br>
                    Portfolio</a>
            </p>
            <?php if (have_posts()): ?>

                <?php while (have_posts()): ?>
                    <?php the_post(); ?>
                    <div class="mainimg">
                        <?php $pic = get_field('production_pic'); ?>

                        <?php if ($pic): ?>
                            <img src="<?php echo esc_url($pic['url']); ?>" alt="スクールの練習問題">
                        <?php endif; ?>
                    </div>
                    <div class="overview">
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
                        <h3><?php the_field('production_title'); ?></h3>
                        <ul>
                            <li>
                                <h3>概要</h3>
                                <p><?php the_field('overview'); ?></p>
                            </li>
                            <li>
                                <h3>制作時間</h3>
                                <p><?php the_field('production_time'); ?></p>
                            </li>
                            <li>
                                <h3>使用技術</h3>
                                <p><?php the_field('using_code'); ?></p>
                            </li>
                            <li>
                                <h3>工夫した点</h3>
                                <p><?php the_field('ingenuity_point'); ?></p>
                            </li>
                            <li>
                                <h3>苦労した点</h3>
                                <p><?php the_field('hardship_point'); ?></p>
                            </li>
                        </ul>
                    </div>
                <?php endwhile; ?>

            <?php endif; ?>
        </div>
        <?php
        $pic_pc = get_field('diagram_pc');
        $pic_iphone = get_field('diagram_iphone');
        ?>
        <?php if ($pic && $pic_iphone): ?>
            <div class="completed_diagram">
                <h2>design</h2>
                <p>-完成図-</p>
                <div class="work-img">
                    <img src="<?php echo esc_url($pic_pc['url']); ?>" alt="PC版の完成図" class="PC">
                    <img src="<?php echo esc_url($pic_iphone['url']); ?>" alt="スマホ版の完成図" class="iPhone">
                </div>
            </div>
        <?php endif; ?>
        <div class="allworks">
            <h2>allworks</h2>
            <p>-制作物一覧-</p>
            <?php
            $args = [
                'post_type' => 'works',
                'posts_per_page' => -1,
            ];

            $query = new WP_Query($args);
            if ($query->have_posts()):
            ?>
                <ul class="work">
                    <?php while ($query->have_posts()): ?>
                        <?php $query->the_post(); ?>
                        <?php get_template_part('template-parts/works-card'); ?>
                    <?php endwhile; ?>
                </ul>
            <?php
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</main>

<!-- footer.phpを読み込み -->
<?php get_footer(); ?>
