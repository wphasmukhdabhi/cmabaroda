<?php get_header(); ?>

<div class="content-wrapper" style="display: flex; gap: 20px; margin-left: 85px;">
    <main class="content-area" style="width: 70%;">
        <?php
        while (have_posts()) :
            the_post();
            the_content();
        endwhile;
        ?>
    </main>

    <?php if (is_active_sidebar('right-sidebar')) : ?>
        <aside class="right-sidebar widget-area" style="width: 30%;">
            <?php dynamic_sidebar('right-sidebar'); ?>
        </aside>
    <?php endif; ?>
</div>

<?php get_footer(); ?>