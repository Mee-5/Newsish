<?php get_header(); ?>

<main class="page">
    <div class="page-section page-section--grid-col-3">
        <div class="col-span-2">
            <?php get_template_part( 'includes/widgets/post', 'row-large' ); ?>
        </div>
        <div class="content-container">

        </div>
    </div>
    <div class="page-section page-section page-section--grid-col-3">
        <div class="content-container col-span-2">
            <?php get_template_part(
                'includes/widgets/posts',
                'grid',
                array(
                    'title' => '',
                    'post_type' => 'post',
                    'post_count' => 8,
                    'exclude_main_post' => true
                )
                );
            ?>
        </div>
        <div class="content-container">
            
        </div>
    </div>
    
</main>

<?php get_footer(); ?>