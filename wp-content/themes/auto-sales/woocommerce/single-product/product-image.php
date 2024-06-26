<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.8.0
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$columns = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
$wrapper_classes = apply_filters(
    'woocommerce_single_product_image_gallery_classes',
    array(
        'woocommerce-product-gallery',
        'woocommerce-product-gallery--' . ( $post_thumbnail_id ? 'with-images' : 'without-images' ),
        'woocommerce-product-gallery--columns-' . absint( $columns ),
        'images',
    )
);
?>
<div class="product__title-inner-mobile">

</div>
<div class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', $wrapper_classes ) ) ); ?>" data-columns="<?php echo esc_attr( $columns ); ?>" style="opacity: 0; transition: opacity .25s ease-in-out;">
    <div class="woocommerce-product-gallery__wrapper ">
        <div class="swiper woocommerce-product-slider">
            <div class="swiper-wrapper">
                <?php
                if ( $post_thumbnail_id ) {
                    $html = wc_get_gallery_image_html( $post_thumbnail_id, true );
                    echo '<div class="swiper-slide">' . $html . '</div>';
                } else {
                    $html  = '<div class="woocommerce-product-gallery__image--placeholder">';
                    $html .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ), esc_html__( 'Awaiting product image', 'woocommerce' ) );
                    $html .= '</div>';
                    echo '<div class="swiper-slide">' . $html . '</div>';
                }

                $attachment_ids = $product->get_gallery_image_ids();
                if ( $attachment_ids && $post_thumbnail_id ) {
                    foreach ( $attachment_ids as $attachment_id ) {
                        echo '<div class="swiper-slide">' . wc_get_gallery_image_html( $attachment_id ) . '</div>';
                    }
                }
                ?>
            </div>

            <div class="woocommerce-product-slider-calc"></div>

            <div class="woocommerce-product-slider-buttons">
                <button class="woocommerce-product-slider-button woocommerce-product-slider-button-prev" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                        <path d="M17.4998 32.0834C25.554 32.0834 32.0832 25.5542 32.0832 17.5001C32.0832 9.44593 25.554 2.91675 17.4998 2.91675C9.44568 2.91675 2.9165 9.44593 2.9165 17.5001C2.9165 25.5542 9.44568 32.0834 17.4998 32.0834Z" fill="#15181A" fill-opacity="0.4" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M19.3374 22.6479L14.2041 17.5L19.3374 12.3521" fill="#15181A" fill-opacity="0.4"/>
                        <path d="M19.3374 22.6479L14.2041 17.5L19.3374 12.3521" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <button class="woocommerce-product-slider-button woocommerce-product-slider-button-next" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                        <path d="M17.5002 32.0834C9.44601 32.0834 2.91683 25.5542 2.91683 17.5001C2.91683 9.44593 9.44601 2.91675 17.5002 2.91675C25.5543 2.91675 32.0835 9.44593 32.0835 17.5001C32.0835 25.5542 25.5543 32.0834 17.5002 32.0834Z" fill="#15181A" fill-opacity="0.4" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15.6626 22.6479L20.7959 17.5L15.6626 12.3521" fill="#15181A" fill-opacity="0.4"/>
                        <path d="M15.6626 22.6479L20.7959 17.5L15.6626 12.3521" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>

        <div class="product__slider-subbox-inner">
            <div class="product__slider-subbox">
                <div class="product__cart-buttons">
                    <button class="product__cart-btn cart-btn-buy" data-remodal-target="popup-seller" type="button">
                        <span>Buy the car</span>
                    </button>
                    <button class="product__cart-btn cart-btn-apply" type="button">
                        <span>Apply for Financing</span>
                    </button>
                </div>

                <div class="product__cart-share">
                    <p class="product__cart-share-text">
                        Share
                    </p>
                    <?php echo add_social_share_buttons(); ?>
                </div>
            </div>
        </div>

    </div>
</div>



