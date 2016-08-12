<?php

function theme_prefix_setup() {
    add_theme_support('custom-logo', array(
        'flex-width' => true,
    ));

    add_theme_support('post-thumbnails');
}

function add_theme_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('index-script', get_template_directory_uri() . '/js/index.js', NULL, '', true);
    wp_enqueue_script('slideout', get_template_directory_uri() . '/js/slideout.min.js', NULL, '', true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.min.js', NULL, '', true);
    wp_enqueue_script('lodash', get_template_directory_uri() . '/js/lodash.js', NULL, '', true);
}

// functions to execute in the enqueue scripts stage
add_action('wp_enqueue_scripts', 'add_theme_scripts');

// functions that are executed after theme setup
add_action('after_setup_theme', 'theme_prefix_setup');

