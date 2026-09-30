<?php get_header(); ?>

<?php 

$news_query_args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 18,
    'category_name' => 'news'
);

$news_query = new WP_Query( $news_query_args );

?>

<main class="page">
    <div class="page-section grid grid--mb-col-1 grid--tb-col-2 grid--dt-col-3">
        <div class="content-container col-span-2">
            <?php newsish_post_loop( 'hero', $news_query, post_count: 1 ); ?>
        </div>
        <div class="content-container">
            <?php newsish_post_loop( 'default', $news_query, post_count: 1 ) ?>
        </div>
    </div>
    <div class="page-section grid grid--mb-col-1 grid--tb-col-2 grid--dt-col-3">
        <div class="content-container grid grid--dt-col-4 grid--tb-col-2 grid--mb-col-1 col-span-2">
            <?php newsish_post_loop( 'category', $news_query, post_count: 8 ); ?>
        </div>
        <div class="content-container content-container--no-pad">
            <?php get_template_part('includes/components/post', 'text-list', array( 'title' => 'More News', 'query' => $news_query)) ?>
        </div>
    </div>
    <div class="page-section">
    </div>
    <div class="page-section grid grid--dt-col-2 grid--mb-col-1">
        <div class="content-container">
            <?php get_template_part( 'includes/components/post', 'grid-3', array( 'category_name' => 'entertainment' ) ); ?>
        </div>
        <div class="content-container">
            <?php get_template_part( 'includes/components/post', 'grid-3', array( 'category_name' => 'lifestyle' ) ); ?>
        </div>
    </div>
    <div class="page-section grid grid--mb-col-1 grid--tb-col-2 grid--dt-col-3">
        <div><?php get_template_part( 'includes/components/post', 'img-list-headed', array( 'category_name' => 'public safety' ) ); ?></div>
        <div><?php get_template_part( 'includes/components/post', 'img-list-headed', array( 'category_name' => 'sports' ) ); ?></div>
        <div><?php get_template_part( 'includes/components/post', 'img-list-headed', array( 'category_name' => 'education' ) ); ?></div>
    </div>
    <div class="page-section grid grid--mb-col-1 grid--tb-col-2 grid--dt-col-3">
        <div><?php get_template_part( 'includes/components/post', 'img-list-headed', array( 'category_name' => 'business' ) ); ?></div>
        <div><?php get_template_part( 'includes/components/post', 'img-list-headed', array( 'category_name' => 'food' ) ); ?></div>
        <div><?php get_template_part( 'includes/components/post', 'img-list-headed', array( 'category_name' => 'obituaries' ) ); ?></div>
    </div>
    <div class="page-section grid grid--mb-col-1 grid--tb-col-2 grid--dt-col-3">
        <div><?php get_template_part( 'includes/components/post', 'img-list-headed', array( 'category_name' => 'community' ) ); ?></div>
    </div>
</main>

<?php get_footer(); ?>