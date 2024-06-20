<?php

function auto_sales_styles()
{
    wp_enqueue_style('style-swiper', get_stylesheet_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), true);
    wp_enqueue_style('style-default', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), true);
}

add_action('wp_enqueue_scripts', 'auto_sales_styles');
