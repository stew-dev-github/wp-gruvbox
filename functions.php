<?php

function load_stylesheets()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/lib/bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css', array(), false, 'all');
    wp_register_style('main', get_template_directory_uri() . '/css/site.css');
    wp_register_style('google-fonts', 'https://fonts.googleapis.com/css?family=Lato:400,300,700', array(), false, 'all');
 
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('main');
    wp_enqueue_style('google-fonts');
}

function load_scripts()
{
    wp_deregister_script('jquery');

    wp_register_script('jquery', get_template_directory_uri() . '/lib/jquery-3.5.1/jquery-3.5.1.min.js', '', 1, true);
    wp_register_script('main', get_template_directory_uri() . '/js/site.js', '', 1, true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('main');
}

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }

    return $classes;
}

function add_additional_class_on_a($atts, $item, $args, $depth) {
    if(isset($args->add_a_class)) {
        $atts['class'] = $args->add_a_class;
    }

    return $atts;
}

add_action('wp_enqueue_scripts', 'load_stylesheets');
add_action('wp_enqueue_scripts', 'load_scripts');

add_theme_support('menus');

register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme'),
    )
    );

add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 4);