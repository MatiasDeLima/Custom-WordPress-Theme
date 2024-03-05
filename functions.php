<?php

// Init and haabilite assets and css in WP
// add_action('init', 'razorsharp_add_stuff');

// function razorsharp_add_stuff() {
//     echo get_template_directory_uri().'/assets/css/index.css';
//     wp_enqueue_style('index', get_template_directory_uri().'/assets/css/index.css');
// }

// add_action('init', function() {

//     if(!is_admin()) {
//         wp_enqueue_style("indexcss", get_template_directory_uri().'/style.css');
//         wp_enqueue_style("indexcss", get_template_directory_uri().'/assets/css/swiper-bundle.min.css');
//         wp_enqueue_script("main", get_template_directory_uri().'/assets/js/swiper-bundle.min.js', ['jquery'], '', true);
//         wp_enqueue_script("mainjs", get_template_directory_uri().'/assets/js/main.js', ['jquery'], '', true);
//     }

//     // adiciona mais opcoes de aparenca na dashboard do WP menu lateral
//     add_theme_support('widgets');
//     add_theme_support('menus');
//     // adiciona opcoes de imagem ao posts
//     add_theme_support('post-thumbnails');
//     add_image_size('post-preview', 280, 180, true);
// });

function hayai_public_scripts() {
    wp_enqueue_style( 'swiper', get_template_directory_uri().'/assets/css/swiper-bundle.min.css', [], wp_rand(), 'all');
    wp_enqueue_style( 'locomotive-scroll', get_template_directory_uri().'/assets/css/locomotive-scroll.min.css', [], wp_rand(), 'all');
    wp_enqueue_style( 'style', get_template_directory_uri().'/assets/css/main.css', [], wp_rand(), 'all');

    wp_enqueue_script( 'swiper', get_template_directory_uri().'/assets/js/swiper-bundle.min.js', ['jquery'], wp_rand(), true);
    wp_enqueue_script( 'locomotive-scroll', get_template_directory_uri().'/assets/js/locomotive-scroll.min.js', ['jquery'], wp_rand(), true);
    wp_enqueue_script( 'scrollreveal', get_template_directory_uri().'/assets/js/scrollreveal.min.js', ['jquery'], wp_rand(), true);
    wp_enqueue_script( 'js', get_template_directory_uri().'/assets/js/main.js', ['jquery'], wp_rand(), true);
}

add_action( 'wp_enqueue_scripts', 'hayai_public_scripts');

function hayai_admin_scripts() {

}
add_action( 'admin_enqueue_scripts', 'hayai_admin_scripts' );