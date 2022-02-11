<?php

function pizza_setup() {

    load_theme_textdomain( 'legume', get_template_directory() . '/languages' );

    // add_theme_support( 'title-tag' ); // title
    add_theme_support( 'automatic-feed-links' ); // flux rss
    add_theme_support( 'post-thumbnails' ); // image à la une


    // menu
    register_nav_menus(
        array(
            'menu-1' => esc_html__('Menu 1', 'legume'),
            'menu-footer-1' => esc_html__('Menu Footer 1', 'legume'),
        )
    );

}

add_action('after_setup_theme', 'pizza_setup');


function pizza_scripts_style()
{
    // CSS
    wp_enqueue_style('fontawesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');

    if(is_page(15)) {
        wp_enqueue_style('flexslidercss', get_template_directory_uri() . '/flexslider/flexslider.css');
    }


    wp_enqueue_style('stylebase', get_stylesheet_uri(), array(), '1.0.1');

    // JS
    // jquery

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '1.0.0', true);
    // flexslider
    if(is_page_template('template-home.php')) {
        wp_enqueue_script('flexsliderjs', get_template_directory_uri() . '/flexslider/jquery.flexslider-min.js', array(), '1.0.0', true);
        wp_enqueue_script('diaporamajs', get_template_directory_uri(). '/asset/js/diaporama.js', array(), '1.0.0', true);
    }
    wp_enqueue_script('mainjs', get_template_directory_uri(). '/asset/js/main.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'pizza_scripts_style');
