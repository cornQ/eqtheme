<?php
// Enqueue theme styles
function eqtheme_enqueue_styles() {
    wp_enqueue_style('eqtheme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'eqtheme_enqueue_styles');

// Elementor support
function eqtheme_elementor_support() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', [
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ]);
}
add_action('after_setup_theme', 'eqtheme_elementor_support');

function eqtheme_register_menus() {
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'eqtheme'),
            'footer' => __('Footer Menu', 'eqtheme')
        )
    );
}
add_action('after_setup_theme', 'eqtheme_register_menus');
