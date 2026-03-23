<!-- header.phpを読み込み -->
<?php get_header(); ?>

<div class="
<?php
if (is_page('contact')) echo 'KV';
else echo 'KV-fixed';
?>
">
    <?php if (is_page('contact')): ?>
    <p>Contact
            <br><span>-お問い合わせ-</span>
        </p>
    <span class="scroll-text">scroll</span>
    <span class="scroll-icon"></span>
    <?php endif; ?>
</div>

<?php
if (have_posts()) :
    while (have_posts()) : the_post(); ?>

<main>
    <div class="form-inner">
        <?php if (is_page('thanks')): ?>

        <div class="form_thanks">
            <?php the_content(); ?>
        </div>

        <?php else: ?>

        <?php the_content(); ?>

        <?php endif; ?>
    </div>
</main>

<?php endwhile;
endif;
?>

<!-- footer.phpを読み込み -->
<?php get_footer(); ?>