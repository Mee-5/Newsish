<?php get_header(); ?>

<?php 

$news_query_args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 18,
    'category_name' => 'news'
);

$news_query = new WP_Query( $news_query_args );

$entertainment_query_args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 6,
    'category_name' => 'entertainment'
);

$entertainment_query = new WP_Query( $entertainment_query_args );

?>

<main class="page">
    <div class="page-section grid grid--mb-col-1 grid--tb-col-2 grid--dt-col-3">
        <div class="content-container">
            <?php newsish_post_loop( 'hero', $news_query, post_count: 1 ); ?>
        </div>
        <div class="content-container">
            <?php newsish_post_loop( 'default', $news_query, post_count: 1 ) ?>
        </div>
    </div>
    <div class="page-section grid grid--mb-col-1 grid--tb-col-2 grid--dt-col-3">
        <div>
            <div class=" grid grid--dt-col-4 grid--tb-col-2 grid--mb-col-1">
                <?php newsish_post_loop( 'category', $news_query, post_count: 8 ); ?>
            </div>
        </div>
        <?php get_template_part('includes/components/post', 'text-list', array( 'title' => 'More News', 'query' => $news_query)) ?>
    </div>
    <div class="page-section grid grid--dt-col-2 grid--mb-col-1">
        <?php get_template_part( 'includes/components/post', 'grid-3', array( 'query' => $entertainment_query )); ?>
        <?php get_template_part( 'includes/components/post', 'grid-3', array( 'query' => $entertainment_query )); ?>
    </div>
</main>

<?php get_footer(); ?>