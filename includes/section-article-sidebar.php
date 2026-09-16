<div class="content-container article-sidebar">
    <div class="article-sidebar__body">
        <?php get_template_part( 
            'includes/cards/post',
            'horizontal-small',
            array(
                'title' => 'More News',
                'post_type' => 'post',
                'post_count' => 8,
                'exclude_main_post' => true
            )
            );
        ?>
    </div>
</div>