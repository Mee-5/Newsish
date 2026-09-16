<?php
function newsish_enqueue_styles() {
    wp_enqueue_style(
        'newsish_main_css',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get("Version")
        ,'all'
    );
}

add_action( 'wp_enqueue_scripts', 'newsish_enqueue_styles' );
add_theme_support( 'menus' );