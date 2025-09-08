<?php
/**
 * EQTheme Functions
 * Theme URI: https://github.com/cornQ/eqtheme
 * Author: CORNQ (https://cornq.com)
 */

// =====================================================
// 1. Enqueue Styles
// =====================================================
function eqtheme_enqueue_styles() {
    wp_enqueue_style(
        'eqtheme-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'eqtheme_enqueue_styles');

// =====================================================
// 2. Theme Support
// =====================================================
function eqtheme_theme_support() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ]);
    add_theme_support('customize-selective-refresh-widgets');
    // Uncomment if WooCommerce support is needed
    // add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'eqtheme_theme_support');

// =====================================================
// 3. Register Navigation Menus
// =====================================================
function eqtheme_register_menus() {
    register_nav_menus([
        'primary' => __('Primary Menu', 'eqtheme'),
        'footer'  => __('Footer Menu', 'eqtheme'),
    ]);
}
add_action('after_setup_theme', 'eqtheme_register_menus');

// =====================================================
// 4. Optional: Disable Gutenberg Block Styles (for Elementor sites)
// =====================================================
function eqtheme_remove_wp_block_library_css() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
}
add_action('wp_enqueue_scripts', 'eqtheme_remove_wp_block_library_css', 100);

// =====================================================
// 5. Set Global Content Width
// =====================================================
if ( ! isset($content_width) ) {
    $content_width = 1200;
}


