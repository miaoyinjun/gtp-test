<?php
/**
 * Theme setup functions.
 *
 * @package DingchengB2BRealty
 */

if (! defined('ABSPATH')) {
    exit;
}

function dingcheng_b2b_realty_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'dingcheng_b2b_realty_setup');

function dingcheng_b2b_realty_enqueue_assets(): void
{
    wp_enqueue_style(
        'dingcheng-b2b-realty-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_script(
        'dingcheng-b2b-realty-script',
        get_template_directory_uri() . '/assets/js/theme.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'dingcheng_b2b_realty_enqueue_assets');
