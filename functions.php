<?php

// adding the CSS and JS files

function bofesto_setup(){
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), 'all');
    wp_enqueue_style( 'werkgever', get_template_directory_uri() . '/styles/werkgever.css');

    wp_enqueue_style( 'swiper', get_template_directory_uri() . '/styles/swiper-bundle.min.css');
    wp_enqueue_style( 'swiperVacatures', get_template_directory_uri() . '/styles/swiper-vacatures-bundle.min.css');
    wp_enqueue_style( 'uitzendkrachten-inhuren', get_template_directory_uri() . '/styles/uitzendkrachten-inhuren.css');
    wp_enqueue_style( 'detacheren', get_template_directory_uri() . '/styles/detacheren.css');
    wp_enqueue_style( 'werving-selectie', get_template_directory_uri() . '/styles/werving-selectie.css');
    wp_enqueue_style( 'vacature-aanmelden', get_template_directory_uri() . '/styles/vacature-aanmelden.css');
    wp_enqueue_style( 'over-interselektie', get_template_directory_uri() . '/styles/over-interselektie.css');
    wp_enqueue_style( 'onze-documenten', get_template_directory_uri() . '/styles/onze-documenten.css');
    wp_enqueue_style( 'privacy-policy', get_template_directory_uri() . '/styles/privacy-policy.css');
    wp_enqueue_style( 'disclaimer', get_template_directory_uri() . '/styles/disclaimer.css');
    wp_enqueue_style( 'vacatures', get_template_directory_uri() . '/styles/vacatures.css');
    wp_enqueue_style( 'werknemer', get_template_directory_uri() . '/styles/werknemer.css');
    wp_enqueue_style( 'contact', get_template_directory_uri() . '/styles/contact.css');
    wp_enqueue_style( 'berichtenSelektie', get_template_directory_uri() . '/styles/berichtenSelektie.css');

    wp_enqueue_script( "swiper-bundle", get_template_directory_uri() . '/js/swiper-bundle.min.js', NULL, '3.5.1', true);
    wp_enqueue_script( "swiper-vacatures-bundle", get_template_directory_uri() . '/js/swiper-vacatures-bundle.min.js', NULL, '3.5.1', true);
    wp_enqueue_script( "javaScript", get_template_directory_uri() . '/js/javaScript.js', NULL, '3.5.1', true);
    // wp_enqueue_script("main", get_theme_file_uri('/js/main.js'), NULL, microtime(), true);

}

add_action('wp_enqueue_scripts', 'bofesto_setup');



// Adding theme Support

function bofesto_init() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5',
        array('comment-list', 'comment-form', 'search-form')
    );
}

add_action('after_setup_theme', 'bofesto_init');

function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Extra Menu' )
       )
     );
   }
add_action( 'init', 'register_my_menus' );



// --------------------------------- ACF ---------------------------------