<?php

require_once get_template_directory() . '/libraries/class-tgm-plugin-activation.php';

function rex_theme_prefix_setup() {
    // for the rex logo in the left (main) menu
    add_theme_support('custom-logo', array(
        'flex-width' => true,
    ));

    // each post has a featured imaged
    add_theme_support('post-thumbnails');

    // representative image
    add_theme_support('custom-header', array(
        'width' => 500,
        'height' => 100,
        'default-image' => get_template_directory_uri() . '/img/rex_logo_blanco.png',
        'uploads' => true
    ));
}

function rex_add_theme_styles() {
    wp_enqueue_style('slick', get_template_directory_uri() . '/css/slick.css');
}

function rex_add_theme_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('slideout', get_template_directory_uri() . '/js/slideout.min.js', NULL, '', true);
    wp_enqueue_script('lodash', get_template_directory_uri() . '/js/lodash.js', NULL, '', true);

    if (is_home()) {
        wp_enqueue_script('index-script', get_template_directory_uri() . '/js/index.js', NULL, '', true);
    }

    if (is_home() || is_single() || is_page('produccion')) {
        wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.min.js', NULL, '', true);
    }

    // proyectos
    if (is_page('proyectos') || is_page('empresa')) {
        wp_enqueue_script('proyectos', get_template_directory_uri() . '/js/proyectos.js', NULL, '', true);
    }

    // quienes etc
    if (is_page('hseq') || is_page('quienes-somos') || is_page('empresas-asociadas')) {
        wp_enqueue_script('quienes', get_template_directory_uri() . '/js/quienes.js', NULL, '', true);
    }

    if (is_category()) {
        wp_enqueue_script('proyectos-detalles', get_template_directory_uri() . '/js/proyectos.detalles.js', NULL, '', true);
    }

    if (is_single()) {
        wp_enqueue_script('proyecto', get_template_directory_uri() . '/js/proyecto.js', NULL, '', true);
    }

    if (is_page('produccion')) {
        wp_enqueue_script('materiales', get_template_directory_uri() . '/js/materiales.js', NULL, '', true);
    }
}

function rex_add_script_localizations() {
    $translation_array = array('templateUri' => get_template_directory_uri());
    wp_localize_script('proyecto', 'WP_GLOBALS', $translation_array);
    wp_localize_script('materiales', 'WP_GLOBALS', $translation_array);
}

function rex_register_menus() {
    register_nav_menu('main-menu', 'Main Menu');
}

function rex_register_project_post_type() {
    register_post_type('rex-project', array(
        'labels' => array(
            'name' => 'Projects',
            'singular_name' => 'Project',
        ),
        'description' => 'Engineering projects performed by Rex.',
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'taxonomies' => array('category'),
    ));
    flush_rewrite_rules();
}

function rex_register_required_plugins() {
    $plugins = array(
        // This is an example of how to include a plugin bundled with a theme.
        array(
            'name' => 'Advanced Custom Fields', // The plugin name.
            'slug' => 'advanced-custom-fields', // The plugin slug (typically the folder name).
            'required' => true, // If false, the plugin is only 'recommended' instead of required.
            'version' => '4.4.8', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            'force_activation' => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
        ),
        array(
            'name' => 'Tiny MCE Advanced', // The plugin name.
            'slug' => 'tinymce-advanced', // The plugin slug (typically the folder name).
            'required' => true, // If false, the plugin is only 'recommended' instead of required.
            'version' => '4.4.1', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            'force_activation' => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
        ),
        array(
            'name' => 'qTranslate X', // The plugin name.
            'slug' => 'qtranslate-x', // The plugin slug (typically the folder name).
            'required' => true, // If false, the plugin is only 'recommended' instead of required.
            'version' => '3.4.6.8', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            'force_activation' => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
        ),
        array(
            'name' => 'Easy Image Gallery', // The plugin name.
            'slug' => 'easy-image-gallery', // The plugin slug (typically the folder name).
            'required' => true, // If false, the plugin is only 'recommended' instead of required.
            'version' => '1.1.4', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            'force_activation' => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
        )
    );

    /*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
    $config = array(
        'id' => 'rex', // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '', // Default absolute path to bundled plugins.
        'menu' => 'tgmpa-install-plugins', // Menu slug.
        'parent_slug' => 'themes.php', // Parent menu slug.
        'capability' => 'edit_theme_options', // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
        'has_notices' => true, // Show admin notices or not.
        'dismissable' => false, // If false, a user cannot dismiss the nag message.
        'dismiss_msg' => '', // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => true, // Automatically activate plugins after installation or not.
        'message' => '',

        /*
        'strings'      => array(
            'page_title'                      => __( 'Install Required Plugins', 'rex' ),
            'menu_title'                      => __( 'Install Plugins', 'rex' ),
            /* translators: %s: plugin name. * /
            'installing'                      => __( 'Installing Plugin: %s', 'rex' ),
            /* translators: %s: plugin name. * /
            'updating'                        => __( 'Updating Plugin: %s', 'rex' ),
            'oops'                            => __( 'Something went wrong with the plugin API.', 'rex' ),
            'notice_can_install_required'     => _n_noop(
                /* translators: 1: plugin name(s). * /
                'This theme requires the following plugin: %1$s.',
                'This theme requires the following plugins: %1$s.',
                'rex'
            ),
            'notice_can_install_recommended'  => _n_noop(
                /* translators: 1: plugin name(s). * /
                'This theme recommends the following plugin: %1$s.',
                'This theme recommends the following plugins: %1$s.',
                'rex'
            ),
            'notice_ask_to_update'            => _n_noop(
                /* translators: 1: plugin name(s). * /
                'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
                'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
                'rex'
            ),
            'notice_ask_to_update_maybe'      => _n_noop(
                /* translators: 1: plugin name(s). * /
                'There is an update available for: %1$s.',
                'There are updates available for the following plugins: %1$s.',
                'rex'
            ),
            'notice_can_activate_required'    => _n_noop(
                /* translators: 1: plugin name(s). * /
                'The following required plugin is currently inactive: %1$s.',
                'The following required plugins are currently inactive: %1$s.',
                'rex'
            ),
            'notice_can_activate_recommended' => _n_noop(
                /* translators: 1: plugin name(s). * /
                'The following recommended plugin is currently inactive: %1$s.',
                'The following recommended plugins are currently inactive: %1$s.',
                'rex'
            ),
            'install_link'                    => _n_noop(
                'Begin installing plugin',
                'Begin installing plugins',
                'rex'
            ),
            'update_link' 					  => _n_noop(
                'Begin updating plugin',
                'Begin updating plugins',
                'rex'
            ),
            'activate_link'                   => _n_noop(
                'Begin activating plugin',
                'Begin activating plugins',
                'rex'
            ),
            'return'                          => __( 'Return to Required Plugins Installer', 'rex' ),
            'plugin_activated'                => __( 'Plugin activated successfully.', 'rex' ),
            'activated_successfully'          => __( 'The following plugin was activated successfully:', 'rex' ),
            /* translators: 1: plugin name. * /
            'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'rex' ),
            /* translators: 1: plugin name. * /
            'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'rex' ),
            /* translators: 1: dashboard link. * /
            'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'rex' ),
            'dismiss'                         => __( 'Dismiss this notice', 'rex' ),
            'notice_cannot_install_activate'  => __( 'There are one or more required or recommended plugins to install, update or activate.', 'rex' ),
            'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'rex' ),

            'nag_type'                        => '', // Determines admin notice type - can only be one of the typical WP notice classes, such as 'updated', 'update-nag', 'notice-warning', 'notice-info' or 'error'. Some of which may not work as expected in older WP versions.
        ),
        */
    );

    tgmpa($plugins, $config);
}

function action_function_name( $field ) {
    echo '<p>Some extra HTML</p>';
}

// after each one of the fields are rendered
add_action( 'acf/render_field', 'action_function_name', 10, 1 );

// add theme plugin requirements
add_action('tgmpa_register', 'rex_register_required_plugins');

// functions to be executed on init
add_action('init', 'rex_register_menus');
add_action('init', 'rex_register_project_post_type');

// functions to execute in the enqueue scripts stage
add_action('wp_enqueue_scripts', 'rex_add_theme_scripts');
add_action('wp_enqueue_scripts', 'rex_add_script_localizations');

add_action('wp_enqueue_scripts', 'rex_add_theme_styles');

// functions that are executed after theme setup
add_action('after_setup_theme', 'rex_theme_prefix_setup');

// remove the gallery
remove_filter( 'the_content', 'easy_image_gallery_append_to_content' );
