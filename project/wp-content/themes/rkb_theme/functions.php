<?php

define("STYLE_SRC", "/scss");

function rkb_scripts() {

    wp_enqueue_style ('bootstrap', '/node_modules/bootstrap/dist/css/bootstrap.css');
    wp_enqueue_style ('header_footer', get_stylesheet_directory_uri () . STYLE_SRC . '/header_footer.css');
    wp_enqueue_style ('home-css', get_stylesheet_directory_uri () . STYLE_SRC . '/home.css');
    wp_enqueue_style ('history-css', get_stylesheet_directory_uri () . STYLE_SRC . '/history.css');
    wp_enqueue_style ('department-css', get_stylesheet_directory_uri () . STYLE_SRC . '/department.css');
    wp_enqueue_style ('news-css', get_stylesheet_directory_uri () . STYLE_SRC . '/news.css');
    wp_enqueue_style ('slick-css', get_stylesheet_directory_uri () . '/lib/slick-1.8.1/slick/slick.css');
    wp_enqueue_style ('slick-theme', get_stylesheet_directory_uri () . '/lib/slick-1.8.1/slick/slick-theme.css');

    wp_enqueue_script( 'jquery', '/node_modules/jquery/dist/jquery.min.js');
    wp_enqueue_script( 'bootstrap', '/node_modules/bootstrap/dist/js/bootstrap.js');
    wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() . '/lib/slick-1.8.1/slick/slick.min.js');
    wp_enqueue_script( 'slick_init', get_stylesheet_directory_uri() . '/js/slick_init.js');
//    wp_enqueue_script( 'comment-reply' );
}
add_action( 'wp_enqueue_scripts', 'rkb_scripts' );

function get_image_directory() : string
{
    return "/wp-content/themes/rkb_theme/images";
}

    add_filter('page_template_hierarchy', function( $templates ){
        // добавим поиск в папке 'tpl' в теме. Файла с именем 'page-(page_name).php'
        array_unshift( $templates, 'page-templates/'. $templates[0] ); // 'tpl/page-(page_name).php'

        //array_unshift( $templates, 'tpl/'. $templates[1] ); // 'tpl/page-(page_id).php'

        return $templates;
    });