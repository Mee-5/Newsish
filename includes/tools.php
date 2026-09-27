<?php
function newsish_post_loop( string $template, WP_Query|bool $query = false, int|bool $post_count = false, $template_path = '/includes/cards/post'): void {
    if ( !$query ) {
        while (have_posts()) {
            the_post();
            get_template_part( $template_path, $template );
        }

        wp_reset_postdata();
        return;
    }

    if ( ($query->post_count - ($query->current_post + 1)) == 0 ) {
        return;
    }

    if ( $post_count ) {
        for ( $i = 0; $i < $post_count; $i++ ) {
            $query->the_post();
            get_template_part( $template_path, $template );
        }
    } else {
        while ($query->have_posts()) {
            $query->the_post();
            get_template_part( $template_path, $template );
        }
    }

    wp_reset_postdata();
}

function testtool() {
    echo "<h1>tools</h1>";    
}
