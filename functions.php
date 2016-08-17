<?php

function theme_prefix_setup() {
    // for the rex logo in the left (main) menu
    add_theme_support('custom-logo', array(
        'flex-width' => true,
    ));

    // each post has a featured imaged
    add_theme_support('post-thumbnails');

    // representative image
    add_theme_support( 'custom-header', array(
        'width'         => 500,
        'height'        => 100,
        'default-image' => get_template_directory_uri() . '/img/rex_logo_blanco.png',
        'uploads' => true
    ) );
}

function add_theme_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('index-script', get_template_directory_uri() . '/js/index.js', NULL, '', true);
    wp_enqueue_script('slideout', get_template_directory_uri() . '/js/slideout.min.js', NULL, '', true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.min.js', NULL, '', true);
    wp_enqueue_script('lodash', get_template_directory_uri() . '/js/lodash.js', NULL, '', true);

    // proyectos
    if(is_page('proyectos')) {
        wp_enqueue_script('proyectos', get_template_directory_uri() . '/js/proyectos.js', NULL, '', true);
    }
}

function register_menus() {
    register_nav_menu( 'main-menu', 'Main Menu' );
}

// functions to be executed on init
add_action( 'init', 'register_menus' );

// functions to execute in the enqueue scripts stage
add_action('wp_enqueue_scripts', 'add_theme_scripts');

// functions that are executed after theme setup
add_action('after_setup_theme', 'theme_prefix_setup');
