<!-- header.phpを読み込み -->
<?php get_header(); ?>

<div class="KV">
    <p>Works
        <br><span>-制作物一覧-</span>
    </p>
    <span class="scroll-text">scroll</span>
    <span class="scroll-icon"></span>
</div>
<main>
    <h2>Works</h2>
    <p>-制作物一覧-</p>
    <?php
    $works_terms = get_terms(['taxonomy' => 'works_object']);
    if (!empty($works_terms)):
    ?>

    <div class="category-tabs">
        <a href="<?php echo home_url('/works/'); ?>" class="tab-btn <?php if (is_post_type_archive('works')) echo 'active'; ?>">すべて</a>
        <?php foreach ($works_terms as $works): ?>

        <a href="<?php echo get_term_link($works) ?>" class="tab-btn <?php if (is_tax('works_object', $works->slug)) echo 'active'; ?>">
            <?php echo $works->name; ?>
        </a>

        <?php endforeach; ?>
    </div>

    <?php
        if (have_posts()):
        ?>
    <ul class="work">
        <?php while (have_posts()): ?>
        <?php the_post(); ?>
        <?php get_template_part('template-parts/works-card'); ?>
        <?php endwhile; ?>
    </ul>
    <?php
        endif;
        wp_reset_postdata();
        ?>
    <?php endif; ?>
</main>

<!-- footer.phpを読み込み -->
<?php get_footer(); ?>
