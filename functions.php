<?php

function custom_theme_assets() {
    wp_enqueue_style('style',get_stylesheet_uri());
}
// Chamar a tag Title e adicionar os formatos de posts


    // Chamar a tag Title
    add_theme_support( 'post-thumbnails' );


add_action('wp_enqueue_scripts','custom_theme_assets');