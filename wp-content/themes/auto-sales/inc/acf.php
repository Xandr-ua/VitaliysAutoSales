<?php

/**
 * Register ACF Option Page
 */
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'              => 'single_buy_btn',
            'title'             => __('Single Buy BTN'),
            'description'       => __('Single Buy BTN block'),
            'render_template'   => 'templates/single_buy_btn.php',
            'category'          => 'formatting',
            'icon'              => 'button',
            'keywords'          => array( 'single','buy','btn')
        ));
    }
}

