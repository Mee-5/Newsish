<?php get_header(); ?>

<main class="page">
    <div class="page-section">
        <div class="content-container">
            <h1 style="text-align: start; width: 100%;"><?php the_archive_title(); ?></h1>
            <div class="card-container grid grid--dt-col-4 grid--tb-col-2 grid--mb-col-1">
                <?php get_template_part(
                    'includes/cards/post',
                    'loop',
                    array(
                        'post_type' => 'post',
                        'post_count' => 8,
                        'exclude_main_post' => true,
                        'template' => 'col-normal'
                    )
                    );
                ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>