<?php

function smartsport_files() {
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,400&family=Roboto:wght@400;700;900&display=swap');
  wp_enqueue_style('smartsport_main_styles', get_theme_file_uri('main.css'));
  wp_enqueue_style( 'smartsport_styles', get_theme_file_uri('style.css'));
  wp_enqueue_script( 'smartsport_js', get_stylesheet_directory_uri() . '/dist/script.js', NULL, '1.0', false);
  }
add_action('wp_enqueue_scripts', 'smartsport_files');


function smartsport_features() {
  add_theme_support( "wp-block-styles" );
  add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'post-thumbnails' );
  // add_theme_support( 'title-tag' );
}

function seopress_theme_slug_setup() {
  add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'seopress_theme_slug_setup' );



// Theme support
function register_theme_menus() {
  register_nav_menus(
    array(
      'header-menu'  =>  'Header Menu',
      'footer-menu'  =>  'Footer Menu'
    )
  );

}
add_action( 'after_setup_theme', 'register_theme_menus' );

remove_filter( 'render_block', 'wp_render_layout_support_flag', 10, 2 );

remove_filter( 'render_block', 'gutenberg_render_layout_support_flag', 10, 2 );



function defer_parsing_of_js( $url ) {
    if ( is_user_logged_in() ) return $url; //don't break WP Admin
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'jquery.js' ) ) return $url;
    return str_replace( ' src', ' defer src', $url );
}
add_filter( 'script_loader_tag', 'defer_parsing_of_js', 10 );

function add_comment_to_body_open() {
  printf( "<!-- THIS SHOULD RENDER AFTER THE BODY TAG OPENS --" );
}
add_action( 'wp_body_open', 'add_comment_to_body_open' );