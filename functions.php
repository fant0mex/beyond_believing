<?php

function theme_styles() {
    wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts','theme_styles');

function theme_js() {
    global $wp_scripts;

    wp_register_script('html5_shiv','https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js','','',false);
    wp_register_script('respond_js','https://oss.maxcdn.com/respond/1.4.2/respond.min.js','','',false);

    $wp_scripts->add_data('html5_shiv','conditional','lt IE 9');
    $wp_scripts->add_data('respond_js','conditional','lt IE 9');

    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'),'',true);
}

add_action('wp_enqueue_scripts','theme_js');

// Diable admin bar for now

show_admin_bar(false);

add_theme_support('menus');

function register_theme_menus() {
    register_nav_menus(
        array(
          'header-menu' => 'Header Menu'
        )
    );
}

add_action('init', 'register_theme_menus');

function load_fonts() {
        wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700');
        wp_register_style('fontAwesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"');
        wp_enqueue_style( 'googleFonts');
        wp_enqueue_style( 'fontAwesome');
    }

add_action('wp_print_styles', 'load_fonts');

?>