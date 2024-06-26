<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li <?php wc_product_class( '', $product ); ?>>
	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item_title' );
    ?>

    <div class="catalog__cart-content">
        <div class="catalog__cart-title-inner">
            <div class="catalog__cart-title-box">
                <?php
                /**
                 * Hook: woocommerce_shop_loop_item_title.
                 *
                 * @hooked woocommerce_template_loop_product_title - 10
                 */
                do_action( 'woocommerce_shop_loop_item_title' );
                ?>
                <?php
                    $car_type = get_field('car_type');
                    if ( $car_type ) :
                ?>
                    <p class="catalog__cart-title-text">
                        <?php echo $car_type; ?>
                    </p>
                <?php endif; ?>
            </div>

            <div class="catalog__cart-price-inner">
                <div class="catalog__cart-price-box">
                    <p class="catalog__cart-price-text">
                        Price
                    </p>
                    <p class="catalog__cart-price-num">
                        <?php
                        /**
                         * Hook: woocommerce_after_shop_loop_item_title.
                         *
                         * @hooked woocommerce_template_loop_rating - 5
                         * @hooked woocommerce_template_loop_price - 10
                         */
                        do_action( 'woocommerce_after_shop_loop_item_title' );
                        ?>
                    </p>
                </div>

                <div class="catalog__cart-price-box">
                    <p class="catalog__cart-price-text">
                        Mileage
                    </p>
                    <p class="catalog__cart-price-num">
                        100,672
                    </p>
                </div>
            </div>
        </div>

        <?php display_specific_product_attributes_in_shop_loop(); ?>

        <div class="catalog__cart-buttons-mob"></div>
    </div>

    <?php

	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item' );
	?>
    <div class="catalog__cart-buttons-inner">
        <div class="catalog__cart-buttons">
            <button class="catalog__cart-btn-buy cart-btn-buy" data-remodal-target="popup-seller" type="button">
                <span>Buy the car</span>
            </button>
            <button class="catalog__cart-btn-apply cart-btn-apply" type="button">
                <span>Apply for Financing</span>
            </button>
        </div>
    </div>
</li>




