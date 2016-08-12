<?php

function theme_prefix_setup() {
    add_theme_support('custom-logo', array(
        'flex-width' => true,
    ));

    add_theme_support( 'post-thumbnails' );
}

add_action('after_setup_theme', 'theme_prefix_setup');
