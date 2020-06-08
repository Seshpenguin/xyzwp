<?php
function xyzwp_scripts() {
    wp_enqueue_style( 'xyzwp-style', get_stylesheet_uri() );
    wp_enqueue_style( 'xyzwp-materialize-css', get_template_directory_uri() . '/materialize/css/materialize.min.css' );

    wp_enqueue_script( 'xyzwp-materialize-js', get_template_directory_uri() . '/materialize/js/materialize.min.js');

}

add_action( 'wp_enqueue_scripts', 'xyzwp_scripts' );

function xyzwp_gutenberg_setup() {
// Support Featured Images
    add_theme_support( 'post-thumbnails' );

//Gutenberg
    add_theme_support('align-wide' );
    add_theme_support('editor-styles');
    add_theme_support('wp-block-styles');
    add_theme_support('dark-editor-style');
    add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'xyzwp_gutenberg_setup' );