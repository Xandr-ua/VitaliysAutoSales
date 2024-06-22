<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.6.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );?>

<main class="main">
    <section class="catalog">
        <div class="container">
            <div class="catalog__wrap">
                <div class="catalog__title-inner">

                    <?php
                        $shop_page_id = wc_get_page_id('shop');
                        $shop_title = get_field( 'shop_title', $shop_page_id);
                        if ( $shop_title ) :
                    ?>

                        <h1 class="catalog__title"><?php echo $shop_title; ?></h1>
                    <?php endif; ?>

                    <?php
                    /**
                     * Hook: woocommerce_before_main_content.
                     *
                     * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
                     * @hooked woocommerce_breadcrumb - 20
                     * @hooked WC_Structured_Data::generate_website_data() - 30
                     */
                    do_action( 'woocommerce_before_main_content' );
                    ?>
                </div>

                <div class="catalog__filter-inner">
                    <div class="catalog__filter">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M14.3206 19.07C14.3206 19.68 13.9205 20.48 13.4105 20.79L12.0005 21.7C10.6905 22.51 8.87054 21.6 8.87054 19.98V14.63C8.87054 13.92 8.47055 13.01 8.06055 12.51L4.22052 8.47C3.71052 7.96 3.31055 7.06001 3.31055 6.45001V4.13C3.31055 2.92 4.22057 2.01001 5.33057 2.01001H18.6705C19.7805 2.01001 20.6906 2.92 20.6906 4.03V6.25C20.6906 7.06 20.1805 8.07001 19.6805 8.57001" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16.0692 16.5201C17.8365 16.5201 19.2692 15.0874 19.2692 13.3201C19.2692 11.5528 17.8365 10.1201 16.0692 10.1201C14.3018 10.1201 12.8691 11.5528 12.8691 13.3201C12.8691 15.0874 14.3018 16.5201 16.0692 16.5201Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M19.8691 17.1201L18.8691 16.1201" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="catalog__search">
                        <?php echo get_product_search_form(false); ?>
                    </div>
                    <div class="catalog__select">
                        <?php
                        /**
                         * Hook: woocommerce_before_shop_loop.
                         *
                         * @hooked woocommerce_output_all_notices - 10
                         * @hooked woocommerce_result_count - 20
                         * @hooked woocommerce_catalog_ordering - 30
                         */
                        do_action( 'woocommerce_before_shop_loop' );
                        ?>
                    </div>
                </div>

                <?php

                /**
                 * Hook: woocommerce_shop_loop_header.
                 *
                 * @since 8.6.0
                 *
                 * @hooked woocommerce_product_taxonomy_archive_header - 10
                 */
//                do_action( 'woocommerce_shop_loop_header' );



                if ( woocommerce_product_loop() ) {



                    woocommerce_product_loop_start();

                    if ( wc_get_loop_prop( 'total' ) ) {
                        while ( have_posts() ) {
                            the_post();

                            /**
                             * Hook: woocommerce_shop_loop.
                             */
//                            do_action( 'woocommerce_shop_loop' );

                            wc_get_template_part( 'content', 'product' );
                        }
                    }

                    woocommerce_product_loop_end();

                    /**
                     * Hook: woocommerce_after_shop_loop.
                     *
                     * @hooked woocommerce_pagination - 10
                     */
                    do_action( 'woocommerce_after_shop_loop' );
                } else {
                    /**
                     * Hook: woocommerce_no_products_found.
                     *
                     * @hooked wc_no_products_found - 10
                     */
                    do_action( 'woocommerce_no_products_found' );
                }

                /**
                 * Hook: woocommerce_after_main_content.
                 *
                 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
                 */
                do_action( 'woocommerce_after_main_content' );

                /**
                 * Hook: woocommerce_sidebar.
                 *
                 * @hooked woocommerce_get_sidebar - 10
                 */
//                do_action( 'woocommerce_sidebar' );
                ?>
            </div>
        </div>
    </section>

    <?php get_template_part('templates/form-questions') ?>
    <?php get_template_part('templates/map') ?>
</main>

<?php get_footer( 'shop' ); ?>
