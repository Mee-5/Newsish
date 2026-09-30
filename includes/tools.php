<?php
function newsish_post_loop( string $template, WP_Query|bool $query = false, int|bool $post_count = false, $template_path = '/includes/cards/post'): void {
    if ( !$query ) {
        while ( have_posts() ) {
            the_post();
            get_template_part( $template_path, $template );
        }

        wp_reset_postdata();
        return;
    }

    if ( $post_count ) {
        for ( $i = 0; $i < $post_count; $i++ ) {
            $query->the_post();
            get_template_part( $template_path, $template );

            if ( ( $query->post_count - ( $query->current_post + 1 ) ) == 0 ) {
                return;
            }
        }
    } else {
        while ($query->have_posts()) {
            $query->the_post();
            get_template_part( $template_path, $template );

            if ( ( $query->post_count - ( $query->current_post + 1 ) ) == 0 ) {
                return;
            }
        }
    }

    wp_reset_postdata();
}

function newsish_get_youtube_id( string $url ):string {
    // https://www.youtube.com/watch?v=17VKzybCxuA
    $expression = '/\?v=(.*?)(?:\&|$)/';
    $matches = array();

    if ( preg_match( $expression, $url, $matches ) ) {
        return $matches[1];
    } else {
        return false;
    }
}

function newsish_get_youtube_embed( string $video_id ): string {
    $iframe = '<div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.25%;"><iframe src="https://www.youtube.com/embed/' . esc_attr( $video_id ) . '?rel=0" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen scrolling="no" allow="accelerometer *; clipboard-write *; encrypted-media *; gyroscope *; picture-in-picture *; web-share *;" referrerpolicy="strict-origin"></iframe></div>';
    return $iframe;
}

function testtool() {
    echo "<h1>tools</h1>";    
}
