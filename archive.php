<?php get_header(); ?>

<main class="page">
    <div class="page-section">
        <div class="content-container">
            <h1 style="text-align: start; width: 100%;"><?php the_archive_title(); ?></h1>
            <div class=" grid grid--dt-col-4 grid--tb-col-2 grid--mb-col-1">
                <?php newsish_post_loop( 'default-col' ) ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>