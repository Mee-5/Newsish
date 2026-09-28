<div class="content-container article-sidebar">
    <div class="component">
        <div class="component__header">
            <span class="component__title">More News</span>
        </div>
        <div class="component__body">
            <?php get_template_part(
                'includes/cards/post',
                'loop',
                array(
                    'post_type' => 'post',
                    'posts_per_page' => 8,
                    'exclude_main_post' => true,
                    'template' => 'default-row'
                )
                );
            ?>
        </div>
    </div>
</div>