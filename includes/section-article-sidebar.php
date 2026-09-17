<div class="content-container article-sidebar">
    <div class="article-sidebar__body">
        <span class="card-container__title ">More News</span>
        <div class="flex flex--dt-col">
            <?php get_template_part(
                'includes/widgets/post',
                'loop',
                array(
                    'post_type' => 'post',
                    'post_count' => 8,
                    'exclude_main_post' => true,
                    'template' => 'row-small'
                )
                );
            ?>
        </div>
    </div>
</div>