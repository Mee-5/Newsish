<?php 
$default_args = array(
    'post_type' => 'post',
    'posts_per_page' => 4,
    'category_name' => 'news',
    'post__not_in' => array(),
    'template' => 'default',
    'custom_query' => true
);

$parsed_args = wp_parse_args( $args, $default_args );

$query_args = array(
    'post_type' => $parsed_args[ 'post_type' ],
    'post_status' => 'publish',
    'posts_per_page' => $parsed_args[ 'posts_per_page' ],
    'category_name' => $parsed_args[ 'category_name' ],
);



if ( is_single() ) {
    $query_args['post__not_in'] = array( get_the_ID() );
}

if ( $parsed_args[ 'custom_query' ] ) {
    $query = new WP_Query( $query_args );

    while ($query->have_posts()) {
        $query->the_post();
        get_template_part( 'includes/cards/post', $parsed_args[ 'template' ] );
    }

} else {

    while (have_posts()) {
        the_post();
        get_template_part( 'includes/cards/post', $parsed_args[ 'template' ] );
    }

}

wp_reset_postdata();
?>