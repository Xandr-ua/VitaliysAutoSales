<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div class="container">
    <div class="product__wrap">

        <?php
        /**
         * Hook: woocommerce_before_single_product_summary.
         *
         * @hooked woocommerce_show_product_sale_flash - 10
         * @hooked woocommerce_show_product_images - 20
         */
        do_action( 'woocommerce_before_single_product_summary' );
        ?>

        <div class="summary entry-summary">
            <div class="product__title-inner">
                <div class="product__title-inner-box">
                    <div class="product__title-top">
                        <?php the_title( '<h1 class="product_title entry-title main-title">', '</h1>' ); ?>
                        <div class="product__subtitle">
                            <?php echo $product->post->post_content; ?>
                        </div>
                    </div>

                    <div class="catalog__cart-price-inner product__cart-price-inner">
                        <div class="catalog__cart-price-box product__cart-price-box">
                            <p class="catalog__cart-price-text product__cart-price-text">
                                Price
                            </p>
                            <p class="catalog__cart-price-num product__cart-price-num">
                                <?php echo $product->get_price_html(); ?>
                            </p>
                        </div>

                        <div class="catalog__cart-price-box">
                            <p class="catalog__cart-price-text product__cart-price-text">
                                Mileage
                            </p>
                            <p class="catalog__cart-price-num product__cart-price-num">
                                100,672
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <p class="product__vehicle-title">
                Vehicle Info
            </p>

            <?php
            /**
             * Hook: woocommerce_single_product_summary.
             *
             * @hooked woocommerce_template_single_title - 5
             * @hooked woocommerce_template_single_rating - 10
             * @hooked woocommerce_template_single_price - 10
             * @hooked woocommerce_template_single_excerpt - 20
             * @hooked woocommerce_template_single_add_to_cart - 30
             * @hooked woocommerce_template_single_meta - 40
             * @hooked woocommerce_template_single_sharing - 50
             * @hooked WC_Structured_Data::generate_product_data() - 60
             */
            do_action( 'woocommerce_single_product_summary' );
            ?>
        </div>

        <?php
        /**
         * Hook: woocommerce_after_single_product_summary.
         *
         * @hooked woocommerce_output_product_data_tabs - 10
         * @hooked woocommerce_upsell_display - 15
         * @hooked woocommerce_output_related_products - 20
         */
        do_action( 'woocommerce_after_single_product_summary' );
        ?>
    </div>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>

<div class="product__slider-subbox-mobile-inner">
    <div class="container">
        <div class="product__slider-subbox-mobile">

        </div>
    </div>
</div>

<div class="product__contact">
    <div class="container">
        <div class="product__contact-wrap">
            <div class="product__contact-box">
                <?php
                $trade_in_text = get_field( 'trade_in_text', 'option' );
                if ( $trade_in_text ) :
                    ?>
                    <div class="product__contact-box-text"><?php echo $trade_in_text; ?></div>
                <?php endif; ?>
                <button class="product__contact-box-btn cart-btn-buy">
                    <span>Value My Trade</span>
                </button>
            </div>
            <div class="product__contact-box">
                <?php
                $additional_questions = get_field( 'additional_questions_text', 'option' );
                if ( $additional_questions ) :
                    ?>
                    <div class="product__contact-box-text"><?php echo $additional_questions; ?></div>
                <?php endif; ?>

                <?php
                $phone = get_field('map_phone', 'option');
                $phoneLink = preg_replace('/\D/', '', $phone);
                if($phoneLink) :
                    ?>
                    <a class="product__contact-box-btn product__contact-box-btn-link cart-btn-apply" href="tel:<?php echo $phoneLink; ?>">
                        <span><?php echo $phone; ?></span>
                    </a>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>

<div class="product__about">
    <div class="container">
        <?php
            $description = get_field( 'description_text' );
            if ( $description ) :
        ?>
            <div class="product__about-box">
                <p class="product__about-title">
                    Description
                </p>
                <div class="product__about-content">
                    <?php echo $description; ?>
                </div>
            </div>
        <?php endif; ?>

        <?php
        $description = get_field( 'description_text' );
        if ( $description ) :
            ?>
            <div class="product__about-box">
                <p class="product__about-title">
                    Features
                </p>
                <div class="product__about-content">
                    Features
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>


