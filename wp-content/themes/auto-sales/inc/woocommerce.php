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
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50);

// Remove rating
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 10);

// Remove title single product
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);

// Remove price single product
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);

// Remove SKU and Category
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

// Remove SKU and Category
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);


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


function display_specific_product_attributes_in_shop_loop() {
    global $product;

    if ( ! $product ) {
        return;
    }

    $attribute_icons = array(
        'pa_engine' => get_stylesheet_directory_uri() . '/assets/img/icons/engine.svg',
        'pa_exterior-color' => get_stylesheet_directory_uri() . '/assets/img/icons/pallete.svg',
        'pa_interior-color' => get_stylesheet_directory_uri() . '/assets/img/icons/interior-color.svg',
        'pa_transmission' => get_stylesheet_directory_uri() . '/assets/img/icons/transmission.svg',
        'pa_drivetrain' => get_stylesheet_directory_uri() . '/assets/img/icons/catalog-drivetrain.svg',
        'pa_fuel-economy' => get_stylesheet_directory_uri() . '/assets/img/icons/catalog-fuel-economy.svg',
    );

    $specific_attributes = array(
        'pa_engine',
        'pa_exterior-color',
        'pa_interior-color',
        'pa_transmission',
        'pa_drivetrain',
        'pa_fuel-economy',
    );

    $attributes = $product->get_attributes();

    if ( ! empty( $attributes ) ) {
        echo '<ul class="catalog__cart-info">';
        foreach ( $attributes as $attribute ) {
            $attribute_name = $attribute->get_name();

            if ( in_array( $attribute_name, $specific_attributes ) ) {
                $icon = isset($attribute_icons[$attribute_name]) ? $attribute_icons[$attribute_name] : '';

                if ( $attribute->get_visible() ) {
                    echo '<li class="catalog__cart-info-item">';
                    if ( $icon ) {
                        echo '<div class="catalog__cart-info-images">';
                        echo '<img src="' . esc_url( $icon ) . '" alt="' . esc_attr( $attribute_name ) . '">';
                        echo '</div>';
                    }
                    echo '<div class="catalog__cart-info-content">';
                    echo '<p class="catalog__cart-info-title">' . wc_attribute_label( $attribute_name ) . '</p>';
                    echo '<p class="catalog__cart-info-text">' . $product->get_attribute( $attribute_name ) . '</p>';
                    echo '</div>';
                    echo '</li>';
                }
            }
        }
        echo '</ul>';
    }
}

function display_product_attributes_after_short_description() {
    global $product;

    $attribute_icons = array(
        'pa_condition' => get_stylesheet_directory_uri() . '/assets/img/icons/condition.svg',
        'pa_exterior-color' => get_stylesheet_directory_uri() . '/assets/img/icons/pallete.svg',
        'pa_engine' => get_stylesheet_directory_uri() . '/assets/img/icons/engine.svg',
        'pa_interior-color' => get_stylesheet_directory_uri() . '/assets/img/icons/interior-color.svg',
        'pa_transmission' => get_stylesheet_directory_uri() . '/assets/img/icons/transmission.svg',
        'pa_stock' => get_stylesheet_directory_uri() . '/assets/img/icons/stock.svg',
        'pa_drivetrain' => get_stylesheet_directory_uri() . '/assets/img/icons/catalog-drivetrain.svg',
        'pa_vin' => get_stylesheet_directory_uri() . '/assets/img/icons/vin.svg',
        'pa_fuel' => get_stylesheet_directory_uri() . '/assets/img/icons/fuel.svg',
        'pa_fuel-economy' => get_stylesheet_directory_uri() . '/assets/img/icons/catalog-fuel-economy.svg',
    );

    if ( is_product() && $product ) {
        $attributes = $product->get_attributes();

        if ( ! empty( $attributes ) ) {
            echo '<div class="product-attributes">';
            foreach ( $attributes as $attribute ) {
                if ( $attribute->get_visible() ) {
                    $attribute_name = $attribute->get_name();

                    $icon = isset($attribute_icons[$attribute_name]) ? $attribute_icons[$attribute_name] : '';

                    echo '<div class="diattributes">';
                    if ($icon) {
                        echo '<div class="attribute-icon"><img src="' . esc_url($icon) . '" alt="' . esc_attr($attribute_name) . '"></div>';
                    }
                    echo '<div class="diattributes__inner">';
                    echo '<p class="diattributes__title">' . wc_attribute_label( $attribute_name ) . '</p> ';
                    echo '<p class="diattributes__name">' . $product->get_attribute( $attribute_name ) . '</p> ';
                    echo '</div>';
                    echo '</div>';
                }
            }
            echo '</div>';
        }
    }
}
add_action( 'woocommerce_single_product_summary', 'display_product_attributes_after_short_description', 95 );


function add_social_share_buttons() {
    // Check if the current page is a product page
    if (is_product()) {
        // Get the current page URL
        $url = esc_url(get_permalink());

        // Get the current page title
        $title = urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8'));

        // Create an array of social networks and their respective sharing URLs and icons
        $social_networks = array(
            'iMessage' => array(
                'url' => 'sms:&body=' . $title . ' ' . $url,
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                              <g clip-path="url(#clip0_1_3904)">
                                <path d="M1.58478 35.2971L3.84851 26.2417C1.36203 23.4588 0 20.005 0 16.4531C0 12.2006 1.88333 8.21063 5.30283 5.21851C8.68222 2.26126 13.1666 0.632812 17.9297 0.632812C22.6991 0.632812 27.2068 2.25989 30.6225 5.21466C34.0903 8.21448 36 12.2058 36 16.4531C36 20.7004 34.0903 24.6918 30.6225 27.6916C27.2068 30.6464 22.6991 32.2734 17.9297 32.2734C15.3548 32.2734 12.8581 31.7911 10.501 30.8389L1.58478 35.2971ZM17.9297 2.74219C9.20627 2.74219 2.10938 8.89288 2.10938 16.4531C2.10938 19.6438 3.40961 22.7549 5.77084 25.2131L6.17487 25.6336L4.74335 31.3591L10.4299 28.5161L10.8811 28.7114C13.1059 29.6754 15.4775 30.1641 17.9297 30.1641C26.7306 30.1641 33.8906 24.0134 33.8906 16.4531C33.8906 8.89288 26.7306 2.74219 17.9297 2.74219Z" fill="white"/>
                              </g>
                              <defs>
                                <clipPath id="clip0_1_3904">
                                  <rect width="36" height="36" fill="white"/>
                                </clipPath>
                              </defs>
                            </svg>' // Replace with the path to your iMessage icon
            ),
            'Telegram' => array(
                'url' => 'https://t.me/share/url?url=' . $url,
                'icon' => '
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                      <g clip-path="url(#clip0_1_3906)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.6347 16.133C16.4872 18.1093 14.3909 19.9799 14.3909 19.9799C14.101 20.2383 14.0762 20.6828 14.3346 20.9727C14.593 21.2621 15.0375 21.2874 15.3275 21.029C15.3275 21.029 20.8188 16.1274 23.1636 13.7826C23.5215 13.4253 23.6291 13.1514 23.6482 13.0377C23.6971 12.7484 23.5957 12.5444 23.4498 12.396C23.3429 12.2866 23.184 12.1827 22.9404 12.1722C22.8211 12.1673 22.5559 12.2136 22.1986 12.3818C20.1549 13.3431 12.0282 18.7572 12.0282 18.7572C11.7049 18.9723 11.6177 19.4093 11.8328 19.732C12.0486 20.0554 12.4856 20.1425 12.8083 19.9274C12.8083 19.9274 15.8331 17.9096 18.6347 16.133Z" fill="white"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18 1.54688C8.919 1.54688 1.54688 8.919 1.54688 18C1.54688 27.081 8.919 34.4531 18 34.4531C27.081 34.4531 34.4531 27.081 34.4531 18C34.4531 8.919 27.081 1.54688 18 1.54688ZM18 2.95312C26.3048 2.95312 33.0469 9.69525 33.0469 18C33.0469 26.3048 26.3048 33.0469 18 33.0469C9.69525 33.0469 2.95312 26.3048 2.95312 18C2.95312 9.69525 9.69525 2.95312 18 2.95312Z" fill="white"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8544 19.8984L13.3591 24.7932C13.3647 24.8111 13.3709 24.829 13.3777 24.8464C13.5378 25.2482 13.6985 25.4818 13.8135 25.5925C14.0212 25.7928 14.2345 25.8392 14.4113 25.8342C14.6598 25.8268 15.0604 25.6784 15.2192 25.0893C15.2304 25.046 15.2384 25.0021 15.2415 24.9576L15.469 21.8247L21.4129 26.1965C22.0236 26.6601 22.5726 26.7584 22.9886 26.6317C23.4176 26.5006 23.8331 26.1075 24.0296 25.2704C24.0309 25.2655 24.0321 25.2605 24.0327 25.2556L26.9667 11.4311C27.1416 10.6948 27.0433 10.1446 26.8041 9.82316C26.5265 9.44916 26.0017 9.19508 25.109 9.43618C25.0849 9.44236 25.0608 9.45039 25.0379 9.45966L7.80532 16.1429C7.77874 16.1534 7.75277 16.1658 7.72742 16.1787C6.9108 16.617 6.72906 17.1184 6.72659 17.4429C6.72349 17.88 7.03011 18.3028 7.55062 18.5118C7.56608 18.518 7.58154 18.5242 7.59761 18.5291L11.8544 19.8984ZM25.6444 10.7622C25.6376 10.8623 25.624 10.9983 25.5968 11.1127C25.5949 11.1189 25.5937 11.1251 25.5924 11.1312L22.6591 24.9539C22.6344 25.0559 22.5856 25.1728 22.5528 25.2457C22.4749 25.2074 22.3507 25.1425 22.261 25.0738C22.2573 25.0714 22.2542 25.0689 22.2505 25.0664L15.2761 19.9373C15.0703 19.7859 14.7976 19.7581 14.5652 19.865C14.3328 19.9726 14.177 20.1976 14.1584 20.4529L14.0317 22.1943L13.0908 19.1349C13.0234 18.9155 12.8528 18.7424 12.634 18.6719L8.55765 17.3601L25.5065 10.7863C25.5522 10.7758 25.6005 10.7678 25.6444 10.7622Z" fill="white"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8733 25.6596L17.9309 23.0193C18.2245 22.7658 18.2573 22.3214 18.0038 22.0277C17.7497 21.7341 17.3053 21.7013 17.0116 21.9548L13.9547 24.5951C13.6604 24.8485 13.6283 25.293 13.8817 25.5866C14.1352 25.8809 14.5797 25.913 14.8733 25.6596Z" fill="white"/>
                      </g>
                      <defs>
                        <clipPath id="clip0_1_3906">
                          <rect width="36" height="36" fill="white"/>
                        </clipPath>
                      </defs>
                    </svg>
                ' // Replace with the path to your Facebook icon
            ),
            'WhatsApp' => array(
                'url' => 'https://wa.me/?text=' . $title . ' ' . $url,
                'icon' => '
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                      <path d="M17.9889 2.00002C15.0893 2.00031 12.2443 2.78968 9.75844 4.28364C7.27264 5.7776 5.23961 7.91991 3.87699 10.4812C2.51437 13.0426 1.87345 15.9265 2.02284 18.8243C2.17223 21.7221 3.1063 24.5248 4.72507 26.9322L2 34L9.27149 31.3983C11.3569 32.7604 13.7315 33.6163 16.2059 33.8977C18.6804 34.179 21.1863 33.8781 23.5239 33.0188C25.8616 32.1596 27.9664 30.7658 29.6705 28.9485C31.3746 27.1312 32.6309 24.9407 33.3394 22.5516C34.0478 20.1625 34.1888 17.6407 33.751 15.1875C33.3133 12.7342 32.3089 10.4171 30.8179 8.421C29.327 6.42487 27.3907 4.80486 25.1634 3.69007C22.936 2.57529 20.4793 1.99656 17.9889 2.00002Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M14.515 21.4781C16.3224 23.2868 20.3127 25.652 22.1618 25.652C22.973 25.6604 23.7621 25.3879 24.3955 24.8808C25.029 24.3737 25.4678 23.6631 25.6377 22.8694V21.4781C25.6377 21.4781 23.9276 20.6433 22.857 20.0868C21.7864 19.5303 20.0763 21.4781 20.0763 21.4781C18.7751 21.0539 17.5868 20.3404 16.6005 19.3911C15.6519 18.4041 14.9389 17.215 14.515 15.9129C14.515 15.9129 16.4614 14.2016 15.9053 13.1303C15.3492 12.059 14.515 10.3477 14.515 10.3477H13.1246C12.3314 10.5177 11.6213 10.9568 11.1146 11.5907C10.6078 12.2245 10.3356 13.0142 10.3439 13.8259C10.3439 15.6763 12.7075 19.6694 14.515 21.4781Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                ' // Replace with the path to your WhatsApp icon
            ),
            'Viber' => array(
                'url' => 'viber://forward?text=' . $title . ' ' . $url,
                'icon' => '
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                      <path d="M12.7502 20.25C14.7002 22.2 19.0052 24.75 21.0002 24.75C21.8753 24.759 22.7267 24.4653 23.4101 23.9186C24.0935 23.3719 24.5669 22.6058 24.7502 21.75V20.25C24.7502 20.25 22.9052 19.35 21.7502 18.75C20.5952 18.15 18.7502 20.25 18.7502 20.25C17.3464 19.7927 16.0643 19.0234 15.0002 18C13.9768 16.9359 13.2075 15.6538 12.7502 14.25C12.7502 14.25 14.8502 12.405 14.2502 11.25C13.6502 10.095 12.7502 8.25 12.7502 8.25H11.2502C10.3944 8.43329 9.62832 8.90672 9.0816 9.59012C8.53489 10.2735 8.24117 11.1249 8.2502 12C8.2502 13.995 10.8002 18.3 12.7502 20.25Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M18 12.75C18.5967 12.75 19.169 12.9871 19.591 13.409C20.0129 13.831 20.25 14.4033 20.25 15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M18 6.75C20.188 6.75 22.2865 7.61919 23.8336 9.16637C25.3808 10.7135 26.25 12.812 26.25 15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M18 9.75C19.3924 9.75 20.7277 10.3031 21.7123 11.2877C22.6969 12.2723 23.25 13.6076 23.25 15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M18 2.25C9.825 2.25 2.25 3.57 2.25 15.75C2.25 23.55 5.37 26.895 9.75 28.29V32.205C9.71668 32.5344 9.79325 32.8655 9.96777 33.1468C10.1423 33.4281 10.405 33.6437 10.7148 33.7601C11.0247 33.8766 11.3644 33.8872 11.681 33.7904C11.9976 33.6936 12.2732 33.4948 12.465 33.225L15.975 29.22H18C26.175 29.22 33.75 27.915 33.75 15.72C33.75 3.525 26.175 2.25 18 2.25Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                ' // Replace with the path to your Viber icon
            ),
            'Facebook Messenger' => array(
                'url' => 'https://www.messenger.com/plugin.php?src=share_button&href=' . $url,
                'icon' => '
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                      <path d="M8.625 21.75L16.125 12.375L19.875 16.125L27.375 12.375L19.875 21.75L16.125 18L8.625 21.75Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                      <mask id="mask0_1_3932" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="2" y="2" width="32" height="32">
                        <path d="M2 2H34V34H2V2Z" fill="white"/>
                      </mask>
                      <g mask="url(#mask0_1_3932)">
                        <path d="M18.625 2.625C18.625 2.97012 18.3452 3.25 18 3.25C17.6548 3.25 17.375 2.97012 17.375 2.625C17.375 2.27988 17.6548 2 18 2C18.3452 2 18.625 2.27988 18.625 2.625Z" fill="white"/>
                        <path d="M20.8026 2.86206C28.0592 4.10794 33.375 10.1056 33.375 17.0625C33.375 24.9031 26.6331 31.5 18 31.5C16.5163 31.5 15.0506 31.3019 13.6406 30.9112L8.25 33.375V28.2263C4.6725 25.47 2.625 21.4113 2.625 17.0625C2.625 10.0936 7.95113 4.10719 15.1974 2.86225" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                      </g>
                    </svg>
                ' // Replace with the path to your Facebook Messenger icon
            ),
        );

        // Initialize the share buttons HTML
        $share_buttons = '<div class="product__cart-share-list">';

        // Loop through the social networks and generate the share buttons HTML
        foreach ($social_networks as $network => $data) {
            $share_buttons .= '<a ' . 'class="product__cart-share-link"' . 'href="' . $data['url'] . '" target="_blank" rel="noopener">';
//            $share_buttons .= $data['icon'] ;
            $share_buttons .= '</a>';
        }

        // Close the share buttons HTML
        $share_buttons .= '</div>';

        // Echo the share buttons HTML
        echo $share_buttons;
    }
}


