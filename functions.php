<?php

add_theme_support('custom-logo');
add_theme_support('post-thumbnails');


// Load CSS
function ferrari_theme_enqueue_styles()
{

    wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all');

    wp_enqueue_style('custom-css', get_stylesheet_directory_uri() . '/assets/css/custom.css', ['main-css'], time(), 'all');
}
add_action('wp_enqueue_scripts', 'ferrari_theme_enqueue_styles');


// Load JS
function ferrari_theme_enqueue_scripts()
{

    wp_enqueue_script('theme-js', get_stylesheet_directory_uri() . '/assets/js/theme.js', [], time());
}
add_action('wp_enqueue_scripts', 'ferrari_theme_enqueue_scripts');


// register nav 
register_nav_menus([
    'main-menu' => esc_html__('Main Menu', 'ferrari_theme'),
]);

// register sidebar 
function ferrari_theme_widgets_init()
{
    register_sidebar([
        'name'          => esc_html__('primary', 'ferrari_theme'),
        'id'            => 'primary',
        'description'   => esc_html__('Add widgets for main sidebar here', 'my_theme'),
        'before_widget' => '<section class="widget">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ]);
}
add_action('widgets_init', 'ferrari_theme_widgets_init');

// create post formats
function ferrari_theme_post_formats_setup()
{
    add_theme_support('post-formats', array('aside', 'gallery'));
}
add_action('after_setup_theme', 'ferrari_theme_post_formats_setup');
