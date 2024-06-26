<?php

function auto_sales_scripts()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('script-swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), true, true);
    wp_enqueue_script('script-remodal', get_template_directory_uri() . '/assets/js/remodal.min.js', array(), true, true);
    wp_enqueue_script('script-default', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], true, true);
}

add_action('wp_enqueue_scripts', 'auto_sales_scripts');
