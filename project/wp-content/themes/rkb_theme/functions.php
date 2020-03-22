<?php

define("STYLE_SRC", "/scss");

function rkb_scripts() {

    wp_enqueue_style ('bootstrap', '/node_modules/bootstrap/dist/css/bootstrap.css');
    wp_enqueue_style ('header_footer', get_stylesheet_directory_uri () . STYLE_SRC . '/header_footer.css');

    wp_enqueue_script( 'jquery', '/node_modules/jquery/dist/jquery.min.js');
    wp_enqueue_script( 'bootstrap', '/node_modules/bootstrap/dist/js/bootstrap.js');
//    wp_enqueue_script( 'comment-reply' );
}
add_action( 'wp_enqueue_scripts', 'rkb_scripts' );

function get_image_directory() : string
{
    return "/wp-content/themes/rkb_theme/images";
}