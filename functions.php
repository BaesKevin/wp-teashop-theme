<?php

if(!function_exists('teashop_setup')){
    function teashop_setup(){
        add_theme_support('title-tag');
    }
}

function register_menus(){
    register_nav_menus(array(
        'primary' => __('Primary menu')
    ));
}

function teashop_scripts(){
    wp_enqueue_style('reset_css', get_template_directory_uri() . 'reset.css',false,'1.1','all');
    wp_enqueue_style('teashop_styles', get_stylesheet_uri());
}

add_action('after_setup_theme', 'teashop_setup');
add_action('init', 'register_menus');
add_action('wp_enqueue_scripts', 'teashop_scripts');