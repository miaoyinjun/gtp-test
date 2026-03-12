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

/**
 * Get a stable page URL by slug.
 *
 * Works with both pretty permalinks and plain query-string permalinks.
 *
 * @param string $slug Page slug.
 * @return string
 */
function dingcheng_b2b_realty_page_url(string $slug): string
{
    $page = get_page_by_path($slug);

    if ($page instanceof WP_Post) {
        return get_permalink($page);
    }

    return home_url('/' . trim($slug, '/') . '/');
}
