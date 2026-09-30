<?php
    $default_args = array(
        'category_name' => 'news',
        'post_count' => 4
    );

    $parsed_args = wp_parse_args( $args, $default_args );

    $cat = get_term_by( 'name', $parsed_args[ 'category_name' ], 'category' );
    if ( !$cat) {
        $cat = get_term_by( 'name', 'news', 'category' );
    }

    $query = new WP_Query(array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => $parsed_args[ 'post_count' ],
            'cat' => $cat->term_id
        )
    );
?>

<div class="component">
    <div class="component__header">
        <?php if ( array_key_exists( 'title', $parsed_args ) ): ?>
            <h3 class="component__title"><?php echo esc_html( $parsed_args[ 'title' ] ); ?></h3>
        <?php else: ?>
            <h3><a class="component__title" href="<?php echo esc_url( get_category_link( $cat ) ); ?>"><?php echo esc_html( $cat->name ); ?></a></h3>
        <?php endif; ?>
    </div>
    <div class="component__body">
        <div class=" grid grid--dt-col-1 grid--tb-col-1 grid--mb-col-1">
            <?php newsish_post_loop( 'default', $query, 1 ); ?>
        </div>
        <div class="  grid grid--dt-col-2 grid--mb-col-1">
            <?php newsish_post_loop( 'default', $query, 2 ); ?>
        </div>
    </div>
</div>