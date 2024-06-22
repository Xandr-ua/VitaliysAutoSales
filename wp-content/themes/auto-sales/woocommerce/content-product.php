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

        <ul class="catalog__cart-info">
            <?php
            $engine = get_field('engine');
            if ($engine) :
                ?>
                <li class="catalog__cart-info-item">
                    <div class="catalog__cart-info-images">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>./assets/img/icons/engine.svg" alt="engine">
                    </div>
                    <div class="catalog__cart-info-content">
                        <p class="catalog__cart-info-title">
                            Engine
                        </p>
                        <p class="catalog__cart-info-text">
                            <?php echo $engine; ?>
                        </p>
                    </div>
                </li>
            <?php endif; ?>

            <?php
            $exterior_color = get_field('exterior_color');
            if ($exterior_color) :
                ?>
                <li class="catalog__cart-info-item">
                    <div class="catalog__cart-info-images">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>./assets/img/icons/pallete.svg" alt="engine">
                    </div>
                    <div class="catalog__cart-info-content">
                        <p class="catalog__cart-info-title">
                            Exterior Color
                        </p>
                        <p class="catalog__cart-info-text">
                            <?php echo $exterior_color; ?>
                        </p>
                    </div>
                </li>
            <?php endif; ?>

            <?php
            $interior_color = get_field('interior_color');
            if ($interior_color) :
                ?>
                <li class="catalog__cart-info-item">
                    <div class="catalog__cart-info-images">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>./assets/img/icons/interior-color.svg" alt="interior-color">
                    </div>
                    <div class="catalog__cart-info-content">
                        <p class="catalog__cart-info-title">
                            Interior Color
                        </p>
                        <p class="catalog__cart-info-text">
                            <?php echo $interior_color; ?>
                        </p>
                    </div>
                </li>
            <?php endif; ?>

            <?php
            $transmission = get_field('transmission');
            if ($transmission) :
                ?>
                <li class="catalog__cart-info-item">
                    <div class="catalog__cart-info-images">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>./assets/img/icons/transmission.svg" alt="transmission">
                    </div>
                    <div class="catalog__cart-info-content">
                        <p class="catalog__cart-info-title">
                            Transmission
                        </p>
                        <p class="catalog__cart-info-text">
                            <?php echo $transmission; ?>
                        </p>
                    </div>
                </li>
            <?php endif; ?>

            <?php
            $drivetrain = get_field('drivetrain');
            if ($drivetrain) :
                ?>
                <li class="catalog__cart-info-item">
                    <div class="catalog__cart-info-images">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>./assets/img/icons/catalog-drivetrain.svg" alt="drivetrain">
                    </div>
                    <div class="catalog__cart-info-content">
                        <p class="catalog__cart-info-title">
                            Drivetrain
                        </p>
                        <p class="catalog__cart-info-text">
                            <?php echo $drivetrain; ?>
                        </p>
                    </div>
                </li>
            <?php endif; ?>

            <?php
            $fuel_economy = get_field('fuel_economy');
            if ($fuel_economy) :
                ?>
                <li class="catalog__cart-info-item">
                    <div class="catalog__cart-info-images">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>./assets/img/icons/catalog-fuel-economy.svg" alt="fuel-economy">
                    </div>
                    <div class="catalog__cart-info-content">
                        <p class="catalog__cart-info-title">
                            Fuel Economy
                        </p>
                        <p class="catalog__cart-info-text">
                            <?php echo $fuel_economy; ?>
                        </p>
                    </div>
                </li>
            <?php endif; ?>
        </ul>

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
            <button class="catalog__cart-btn-buy" type="button">
                <span>Buy the car</span>
            </button>
            <button class="catalog__cart-btn-apply" type="button">
                <span>Apply for Financing</span>
            </button>
        </div>
    </div>
</li>


