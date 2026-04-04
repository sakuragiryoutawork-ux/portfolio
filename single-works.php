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


                        <div class="for_more">
                            <?php if (get_field('site_url') || get_field('out_site_url')): ?>
                                <a href="<?php if (get_field('out_site_url')) {
                                                the_field('out_site_url');
                                            } else {
                                                echo get_template_directory_uri() . get_field('site_url');
                                            } ?>" class="work_site" target="_blank">サイトを見る</a>
                            <?php endif; ?>

                            <?php if (get_field('git_url')): ?>
                                <a href="<?php the_field('git_url'); ?>" class="work_git" target="_blank">GitHub</a>
                            <?php endif; ?>
                        </div>

                        <?php if (get_field('site_id')): ?>
                            <div class="site_id">
                                <p><?php echo nl2br(get_field('site_id')); ?></p>
                            </div>
                        <?php endif; ?>

                        <p class="content_title"><?php the_field('production_title'); ?></p>
                        <ul>
                            <li>
                                <p class="content_title">概要</p>
                                <hr>
                                <p><?php echo nl2br(get_field('overview')); ?></p>
                            </li>
                            <li>
                                <p class="content_title">制作時間</p>
                                <hr>
                                <p><?php the_field('production_time'); ?></p>
                            </li>
                            <li>
                                <p class="content_title">使用技術</p>
                                <hr>
                                <p><?php echo nl2br(get_field('using_code')); ?></p>
                            </li>
                            <li>
                                <p class="content_title">工夫した点</p>
                                <hr>
                                <p><?php echo nl2br(get_field('ingenuity_point')); ?></p>
                            </li>
                            <li>
                                <p class="content_title">苦労した点</p>
                                <hr>
                                <p><?php echo nl2br(get_field('hardship_point')); ?></p>
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
