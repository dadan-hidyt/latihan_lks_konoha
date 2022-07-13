<?php
/**
 * menambahkan script css
 */

function head_style() {
    wp_enqueue_style('css-main', get_template_directory_uri().'/assets/style.css',[], '1.0','all');
    wp_enqueue_style('css-dada', get_template_directory_uri().'/assets/login.css',[], '1.0','all');
    wp_enqueue_style('css-ddd', get_template_directory_uri().'/assets/data.css',[], '1.0','all');
}

add_action('wp_enqueue_scripts', 'head_style');


function dd_navbar(){
    register_nav_menu('header-menu',__('Header Menu'));
}

add_action('init', 'dd_navbar');



?>