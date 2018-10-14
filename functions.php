<?php

if(!function_exists('teashop_setup')){
    function teashop_setup(){
		add_theme_support('title-tag'); /** customize the H1 tag */
		add_theme_support('post-thumbnails');
    }
}

/** allow user to customize the top navigation bar */
function register_menus(){
    register_nav_menus(array(
        'primary' => __('Primary menu')
    ));
}

/** enqueue css */
function teashop_scripts(){
    wp_enqueue_style('reset_css', get_template_directory_uri() . 'reset.css',false,'1.1','all');
    wp_enqueue_style('teashop_styles', get_stylesheet_uri());
}

/** register a basic sidebar */
function teashop_widgets_init() {
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}

/**
 * Customization api configuration
 * Adds an option to change the sidebar width
 */
function teashop_customize_register( $wp_customize ) {
	$wp_customize->add_setting( 'sidebar_width' , array(
		'default'   => '200px',
		'transport' => 'refresh',
	) );

	$wp_customize->add_section( 'teashop_css' , array(
		'title'      => __( 'Teashop css section', 'shoptheme' ),
		'priority'   => 30,
	) );

	$wp_customize->add_control( 'sidebar_width', array(
		'type' => 'text',
		'section' => 'teashop_css', // Add a default or your own section
		'label' =>  __( 'Sidebar Width', 'shoptheme' ),
		'description' => __( 'This number is used to define the width of the sidebar. The sidebar is the second container element in a grid container with 2 elements, which means you can use grid measurements like 1fr. The grid container has this default css: grid-template-columns: auto 200px' ),
	  ) );
}

/** this has to be a fun source for CSS bugs to hunt down. Idealy I would want a sass-like placeholder in style.css and replace that */
function teashop_customize_css()
{
    ?>
         <style type="text/css">
			 main {
				grid-template-columns: auto <?php echo get_theme_mod('sidebar_width', '200px'); ?>;
			}
         </style>
    <?php
}
add_action( 'wp_head', 'teashop_customize_css');


/* the order in which these can be called is NOT random, but isn't documented either. Sometimes a doc will be nice enough to tell you that a function needs to be called after another */
add_action('after_setup_theme', 'teashop_setup');
add_action('init', 'register_menus');
add_action('wp_enqueue_scripts', 'teashop_scripts');
add_action( 'widgets_init', 'teashop_widgets_init' );
add_action( 'customize_register', 'teashop_customize_register' );