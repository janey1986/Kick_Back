<?php

function theme_styles(){
    wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('style_css', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('wp_style_css', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('fancybox_css', get_template_directory_uri() . '/fancybox/jquery.fancybox.css');
}


add_action( 'wp_enqueue_scripts', 'theme_styles');


function theme_js()
{

    // Register the script like this for a theme:
    wp_register_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '', false );
    wp_register_script( 'fancybox_js', get_template_directory_uri() . '/fancybox/jquery.fancybox.js', array( 'jquery' ), '', false );
    wp_register_script( 'fancybox_pack_js', get_template_directory_uri() . '/fancybox/jquery.fancybox.pack.js', array( 'jquery' ), '', false );
    wp_register_script( 'bespoke_js', get_template_directory_uri() . '/js/bespokeJS.js', array( 'jquery' ), '', false );

    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'bootstrap_js' );
    wp_enqueue_script( 'fancybox_js' );
    wp_enqueue_script( 'fancybox_pack_js' );
    wp_enqueue_script( 'bespoke_js' );
}



add_action( 'wp_enqueue_scripts', 'theme_js');

add_theme_support( 'menus' );

function register_theme_menus() {

    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu')
        )
    );
}
add_action ('init', 'register_theme_menus');


?>