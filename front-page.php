<?php get_header(); ?>

<main class="page">
    <div class="page-section grid grid--dt-col-3 grid-tb-col-2 grid--mb-col-1">
        <div class="col-span-2">
            <?php get_template_part( 'includes/widgets/post', 'row-large' ); ?>
        </div>
        <div class="content-container">

        </div>
    </div>
    <div class="page-section grid grid--dt-col-3 grid-tb-col-2 grid--mb-col-1">
        <div class="content-container col-span-2">
            <div class="card-container grid grid--dt-col-4 grid--tb-col-2 grid--mb-col-1">
                <?php get_template_part(
                    'includes/widgets/post',
                    'loop',
                    array(
                        'post_type' => 'post',
                        'post_count' => 8,
                        'exclude_main_post' => true,
                        'template' => 'col-category'
                    )
                    );
                ?>
            </div>
        </div>
        <div class="content-container">
            
        </div>
    </div>
</main>

<?php get_footer(); ?>