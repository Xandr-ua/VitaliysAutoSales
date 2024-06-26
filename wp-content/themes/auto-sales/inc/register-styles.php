<?php

function auto_sales_styles()
{
    wp_enqueue_style('style-swiper', get_stylesheet_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), true);
    wp_enqueue_style('style-remodal', get_stylesheet_directory_uri() . '/assets/css/remodal.css', array(), true);
    wp_enqueue_style('style-remodal-theme', get_stylesheet_directory_uri() . '/assets/css/remodal-default-theme.css', array(), true);
    wp_enqueue_style('style-default', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), true);
    wp_enqueue_style('custom-woocommerce', get_stylesheet_directory_uri() . '/assets/css/custom-woocommerce.css', array(), true);
}

add_action('wp_enqueue_scripts', 'auto_sales_styles');
