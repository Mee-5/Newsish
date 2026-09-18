<div class="flex flex--dt-col">
    <div class="card-container grid grid--dt-col-1 grid--tb-col-1 grid--mb-col-1">
        <?php get_template_part(
            'includes/cards/post',
            'loop',
            array(
                'post_type' => 'post',
                'post_count' => 1,
                'exclude_main_post' => true,
                'template' => 'col-normal'
            )
            );
        ?>
    </div>
    <div class=" card-container grid grid--dt-col-2 grid--mb-col-1">
        <?php get_template_part(
            'includes/cards/post',
            'loop',
            array(
                'post_type' => 'post',
                'post_count' => 2,
                'exclude_main_post' => true,
                'template' => 'col-category'
            )
            );
        ?>
    </div>
</div>