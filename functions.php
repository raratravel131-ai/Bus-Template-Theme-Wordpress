<?php
/**
 * Rara Travel & Tour theme functions.
 */

if (!defined('ABSPATH')) {
    exit;
}

function raratravel_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
}
add_action('after_setup_theme', 'raratravel_theme_setup');

function raratravel_enqueue_assets() {
    wp_enqueue_style(
        'raratravel-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'raratravel-style',
        get_stylesheet_uri(),
        array('raratravel-google-fonts'),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_script(
        'raratravel-scripts',
        get_template_directory_uri() . '/scripts.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'raratravel_enqueue_assets');