<?php get_header(); ?>

<main class=" page">
    <div class="page-section page-section--single">
        <div class="page-section">
            <?php get_template_part( 'includes/section', 'article' ); ?>
        </div>
        <div class="page-section">
            <?php get_template_part( 'includes/section', 'article-sidebar'); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>