<div class="content-container article-sidebar">
    <div class="article-sidebar__body">
        <span class="page-section__title ">More News</span>
        <div class="flex flex--dt-col">
            <?php get_template_part(
                'includes/cards/post',
                'loop',
                array(
                    'post_type' => 'post',
                    'posts_per_page' => 8,
                    'exclude_main_post' => true,
                    'template' => 'row-horizontal'
                )
                );
            ?>
        </div>
    </div>
</div>