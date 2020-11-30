<?php

//Dynamic version of theme
$version = wp_get_theme()->get( 'Version' );

//Styles
function homeinstead_register_styles() {
    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', false, '4.5.2', 'all');
    wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css', false, '5.15.1', 'all');
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', false, $version, 'all');
}
add_action('wp_enqueue_scripts', 'homeinstead_register_styles');

//Scripts
function homeinstead_register_scripts() {
    wp_enqueue_script('homeinstead-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '3.5.1', true);
    wp_enqueue_script('homeinstead-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), '1.12.9', true);
    wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array ('jquery'), '4.5.2' , true);
    wp_enqueue_script('homeinstead-custom', get_template_directory_uri(). "/assets/js/main.js", array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'homeinstead_register_scripts');

//Title
function homeinstead_theme_support(){
    // Adds dynamic title tag support
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'homeinstead_theme_support');

/**
 * Add support for core custom logo.
 *
 * @link https://codex.wordpress.org/Theme_Logo
 */
add_theme_support(
    'custom-logo',
    array(
        'height'      => 48,
        'width'       => 375,
        'flex-width'  => false,
        'flex-height' => false,
    )
);

?>