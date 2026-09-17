<?php 
    $query_args = array(
        'post_type' => $args[ 'post_type' ],
        'post_status' => 'publish',
        'posts_per_page' => $args[ 'post_count' ],
        'cat' => 1,
        'post__not_in' => array( get_the_ID() )
    );
    $query = new WP_Query( $query_args );
?>

<div class="card-container">
    <h1 class="card-container__title"><?php echo esc_html( $args[ 'title' ]); ?></h1>
    <?php while ( $query->have_posts() ): $query->the_post(); ?>
        <?php get_template_part( 'includes/cards/post', 'row-small' ) ?>
    <?php endwhile; wp_reset_postdata(); ?>
</div>