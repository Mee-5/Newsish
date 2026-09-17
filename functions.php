<?php

if ( !defined( 'ABSPATH' )) {
    exit;
}
function newsish_enqueue_styles() {
    wp_enqueue_style(
        'newsish_main_css',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get("Version")
        ,'all'
    );
}

function newsish_enqueue_scripts() {
    wp_enqueue_script(
        'newsish-js',
        get_theme_file_uri( 'static/js/index.js' ),
        array(),
        wp_get_theme()->get('Version'),
    );
}

add_action( 'wp_enqueue_scripts', 'newsish_enqueue_styles' );
add_action('wp_enqueue_scripts', 'newsish_enqueue_scripts');
add_theme_support( 'menus' );