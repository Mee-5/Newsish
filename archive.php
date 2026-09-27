<?php
$query_args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 16,
    'cat' => get_queried_object_id()
);

$query = new WP_Query( $query_args );
?>

<?php get_header(); ?>

<main class="page">
    <div class="page-section">
        <div class="content-container">
            <h1 style="text-align: start; width: 100%;"><?php the_archive_title(); ?></h1>
            <div class=" grid grid--dt-col-4 grid--tb-col-2 grid--mb-col-1">
                <?php newsish_post_loop( 'default-col', $query ) ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>