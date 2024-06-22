<?php

function auto_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'auto_add_woocommerce_support' );

// Remove sidebar
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

// Remove woocommerce output content wrapper
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);

// Remove woocommerce result count
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);

// Remove woocommerce output all notices
remove_action('woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10);

// Change position link img
//remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
//add_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 5);

// Cart Product IMG
function box_img_open() {
    echo '<div class="catalog_product-images">';
};
function box_img_close() {
    echo '</div>';
};

add_action('woocommerce_before_shop_loop_item_title', 'box_img_open', 5);
add_action('woocommerce_before_shop_loop_item_title', 'box_img_close', 15);

// Remove btn add to cart
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);

// Remove rating
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 10);


add_filter('get_product_search_form', 'custom_product_search_form');
function custom_product_search_form($form) {
    $form = '
    <form role="search" method="get" id="searchform" class="woocommerce-product-search" action="' . esc_url(home_url('/')) . '">
        <input type="text" class="search-field" placeholder="Stock #" value="' . get_search_query() . '" name="s" title="Search for:" />
        <button class="woocommerce-product-search-btn" type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M11.5 19C15.6421 19 19 15.6421 19 11.5C19 7.35786 15.6421 4 11.5 4C7.35786 4 4 7.35786 4 11.5C4 15.6421 7.35786 19 11.5 19Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M20 20L18 18" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
        <input type="hidden" name="post_type" value="product" />
    </form>
    <script>
        document.getElementById("searchform").addEventListener("submit", function(event) {
            const searchField = document.querySelector(".search-field");
            if (searchField.value.length < 3) {
                event.preventDefault();
                alert("Please enter at least 3 characters.");
            }
        });
    </script>';
    return $form;
}

add_filter('woocommerce_breadcrumb_defaults', 'custom_breadcrumb_defaults');
function custom_breadcrumb_defaults($defaults) {
    $defaults['delimiter'] = ' &nbsp;/&nbsp; ';
    return $defaults;
}