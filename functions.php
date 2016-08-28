<?php
/**
 * np011 functions and definitions
 */

add_action( 'wp_enqueue_scripts', 'np011_child_enqueue_styles' );
function np011_child_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/theme-style.css' );

}

/*
 * Enqueue JavaScript
 */

function np011_child_scripts() {
    wp_enqueue_script( 'custom', get_stylesheet_directory_uri() . '/js/custom.js', false, '1.0.3', true);
}
add_action( 'wp_enqueue_scripts', 'np011_child_scripts' );


/**
 * Setup Child Theme's textdomain.
 *
 * Declare textdomain for this child theme.
 * Translations can be filed in the /languages/ directory.
 */
function np011_child_theme_setup() {
    load_child_theme_textdomain( 'np011-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'np011_child_theme_setup' );