<?php
/*
* Template Name: Home Page
*/
get_header() ?>

<main class="main">
    <?php $bg_image = get_field('top_bg_image_url') ?>
    <div class="top" style="background-image: url('<?php echo $bg_image; ?>')">
        <div class="container">
            <div class="top__wrap">
                <?php
                    $title = get_field('title_top');
                    if ($title) :
                ?>
                    <h1 class="top__title">
                        <?php echo $title; ?>
                    </h1>
                <?php endif; ?>

                <div class="top__filter">
                    <ul class="top__filter-list">
                        <li class="top__filter-item">
                            <p class="top__filter-text">Any Make</p>
                        </li>
                        <li class="top__filter-item">
                            <p class="top__filter-text">Any Model</p>
                        </li>
                        <li class="top__filter-item">
                            <p class="top__filter-text">Price</p>
                        </li>
                    </ul>

                    <button class="top__filter-btn main-btn" type="button">
                        Find a Car
                    </button>
                </div>
            </div>
        </div>
    </div>

    <section class="vehicles">
        <div class="container">

            <div class="vehicles__title-inner">
                <?php
                $vehicles_title = get_field('featured_title');
                if ($vehicles_title) :
                    ?>
                    <h2 class="vehicles__title main-title">
                        <?php echo $vehicles_title; ?>
                    </h2>
                <?php endif; ?>

                <div class="vehicles__slider-arrows-inner">
                    <button class="slider-arrows vehicles__slider-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                            <g clip-path="url(#clip0_109_2563)">
                                <path d="M4.54281 10.1113C4.20969 9.77818 4.20969 9.22161 4.54281 8.88763L12.2292 1.18152C12.5666 0.844118 13.1138 0.844118 13.4503 1.18152C13.7877 1.51891 13.7877 2.06693 13.4503 2.40433L6.37451 9.49986L13.4512 16.5945C13.7886 16.9328 13.7886 17.48 13.4512 17.8182C13.1138 18.1556 12.5666 18.1556 12.2301 17.8182L4.54281 10.1113Z" fill="#3E4350"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_109_2563">
                                    <rect width="17.1429" height="17.1429" fill="white" transform="matrix(-1.19249e-08 1 1 1.19249e-08 0.427734 0.928467)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </button>

                    <button class="slider-arrows vehicles__slider-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                            <g clip-path="url(#clip0_109_2559)">
                                <path d="M13.4572 10.1113C13.7903 9.77818 13.7903 9.22161 13.4572 8.88763L5.77079 1.18152C5.43339 0.844118 4.88622 0.844118 4.54968 1.18152C4.21228 1.51891 4.21228 2.06693 4.54968 2.40433L11.6255 9.49986L4.54882 16.5945C4.21143 16.9328 4.21143 17.48 4.54882 17.8182C4.88622 18.1556 5.43339 18.1556 5.76993 17.8182L13.4572 10.1113Z" fill="#3E4350"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_109_2559">
                                    <rect width="17.1429" height="17.1429" fill="white" transform="translate(17.5723 0.928467) rotate(90)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="swiper vehicles__slider">
                <ul class="swiper-wrapper vehicles__slider-list">
                    <li class="swiper-slide vehicles__slider-item">
                        <a class="car-card" href="#">
                            <div class="car-card__image">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>./assets/img/car.jpg" alt="#">

                            </div>
                            <div class="car-card__content">
                                <p class="car-card__price">
                                    $21,990
                                </p>
                                <p class="car-card__name">
                                    2017 Subaru Forester 2.0XT Touring
                                </p>
                                <p class="car-card__characteristics">
                                    AWD 2.0XT Touring 4dr Wagon
                                </p>
                                <p class="car-card__miles">
                                    84,109 miles
                                </p>
                            </div>
                        </a>
                    </li>
                    <li class="swiper-slide vehicles__slider-item">
                        <a class="car-card" href="#">
                            <div class="car-card__image">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>./assets/img/car.jpg" alt="#">
                            </div>
                            <div class="car-card__content">
                                <p class="car-card__price">
                                    $21,990
                                </p>
                                <p class="car-card__name">
                                    2017 Subaru Forester 2.0XT Touring
                                </p>
                                <p class="car-card__characteristics">
                                    AWD 2.0XT Touring 4dr Wagon
                                </p>
                                <p class="car-card__miles">
                                    84,109 miles
                                </p>
                            </div>
                        </a>
                    </li>
                    <li class="swiper-slide vehicles__slider-item">
                        <a class="car-card" href="#">
                            <div class="car-card__image">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>./assets/img/car.jpg" alt="#">
                            </div>
                            <div class="car-card__content">
                                <p class="car-card__price">
                                    $21,990
                                </p>
                                <p class="car-card__name">
                                    2017 Subaru Forester 2.0XT Touring
                                </p>
                                <p class="car-card__characteristics">
                                    AWD 2.0XT Touring 4dr Wagon
                                </p>
                                <p class="car-card__miles">
                                    84,109 miles
                                </p>
                            </div>
                        </a>
                    </li>
                    <li class="swiper-slide vehicles__slider-item">
                        <a class="car-card" href="#">
                            <div class="car-card__image">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>./assets/img/car.jpg" alt="#">
                            </div>
                            <div class="car-card__content">
                                <p class="car-card__price">
                                    $21,990
                                </p>
                                <p class="car-card__name">
                                    2017 Subaru Forester 2.0XT Touring
                                </p>
                                <p class="car-card__characteristics">
                                    AWD 2.0XT Touring 4dr Wagon
                                </p>
                                <p class="car-card__miles">
                                    84,109 miles
                                </p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="want-vehicle">
        <div class="container">
            <div class="want-vehicle__wrap">
                <div class="want-vehicle__content">
                    <div class="want-vehicle__content-inner">
                        <?php
                        $want_title = get_field('want_title');
                        if ($want_title) :
                            ?>
                            <h2 class="want-vehicle__title main-title">
                                <?php echo $want_title; ?>
                            </h2>
                        <?php endif; ?>

                        <?php
                        $want_text = get_field('want_text');
                        if ($want_text) :
                            ?>
                            <p class="want-vehicle__text">
                                <?php echo $want_text; ?>
                            </p>
                        <?php endif; ?>
                    </div>
                    <div class="want-vehicle__form">
                        <?php echo do_shortcode('[contact-form-7 id="de604a5" title="Want your vehicle"]'); ?>
                    </div>
                </div>

                <div class="want-vehicle__image">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>./assets/img/want-vehicle-img.jpg" alt="#">
                </div>
            </div>
        </div>
    </section>

    <section class="body-styles">
        <div class="container">
            <div class="body-styles__title-inner">
                <?php
                $popular_title = get_field('popular_body_title');
                if ($popular_title) :
                    ?>
                    <h2 class="body-styles__title main-title">
                        <?php echo $popular_title; ?>
                    </h2>
                <?php endif; ?>
            </div>
                <ul class="body-styles__list">
                    <li class="body-styles__item body-styles__item-title"></li>

                    <?php
                    $terms = get_field('body_style', 'option');

                    if( $terms ): ?>
                            <?php foreach( $terms as $term ):
                                $terms_images = get_field('terms_images', $term);
                            ?>

                                <li class="body-styles__item">
                                    <a class="body-styles__link" href="<?php echo esc_url( get_term_link( $term ) ); ?>" target="_self">
                                <span class="body-styles__text">
                                    <?php echo esc_html( $term->name ); ?>
                                </span>
                                        <?php if ($terms_images): ?>
                                            <span class="body-styles__images">
                                        <?php echo wp_get_attachment_image($terms_images, 'full', '', ['loading' => 'lazy']); ?>
                                    </span>
                                        <?php endif; ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                    <?php endif; ?>

                </ul>
        </div>
    </section>



    <section class="makes">
        <div class="container">
            <?php
                $popular_makes_title = get_field('popular_makes_title');
                if ($popular_makes_title) :
            ?>
                <h2 class="makes__title main-title">
                    <?php echo $popular_makes_title; ?>
                </h2>
            <?php endif; ?>

            <?php
                $popular_makes_items = get_field('popular_makes_items');
            ?>
            <div class="swiper makes__slider">
                <ul class="swiper-wrapper makes__slider-list">

                                        <?php
                                        $prod_cat_args = array(
                                            'taxonomy' => 'product_cat',
                                            'orderby' => 'id',
                                            'hide_empty' => false,
                                            'parent' => 0
                                        );

                                        $woo_categories = get_categories($prod_cat_args);
                                        foreach ($woo_categories as $woo_cat) :
                                            $woo_cat_id = $woo_cat->term_id;
                                            $woo_cat_name = $woo_cat->name;
                                            $woo_cat_slug = $woo_cat->slug;

                                            if ($woo_cat_name === 'Uncategorized') {
                                                continue;
                                            }

                                            $woo_cat_thumbnail_id = get_term_meta($woo_cat_id, 'thumbnail_id', true);
                                            $woo_cat_image_url = wp_get_attachment_url($woo_cat_thumbnail_id);
                                            ?>

                                            <?php if ($woo_cat_thumbnail_id): ?>
                                            <li class="swiper-slide makes__slider-item">
                                                <a class="makes__slider-link"  href="<?php echo get_term_link($woo_cat_slug, 'product_cat'); ?>">
                                                    <?php echo wp_get_attachment_image($woo_cat_thumbnail_id, 'full', '', ['loading' => 'lazy']); ?>
                                                </a>
                                            </li>
                                        <?php endif; ?>

                                        <?php endforeach; ?>
                </ul>

                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section class="reviews">
        <div class="container">
            <?php
            $reviews_title = get_field('reviews_title');
            if ($reviews_title) :
                ?>
                <h2 class="reviews__title main-title">
                    <?php echo $reviews_title; ?>
                </h2>
            <?php endif; ?>

            <?php
            $popular_makes_items = get_field('popular_makes_items');
            ?>
            <div class="swiper reviews__slider">
                <ul class="swiper-wrapper reviews__slider-list">
                    <?php
                    $args = array(
                        'post_type' => 'reviews',
                        'post_status' => 'publish',
                    );

                    $reviews = new WP_Query($args);

                    if ($reviews->have_posts()) :
                        while ($reviews->have_posts()) :
                            $reviews->the_post();

                            $reviews_text = get_field('reviews_text');
                            $reviews_name = get_field('reviews_name');
                            $reviews_post = get_field('reviews_post');
                            $reviews_star = get_field('reviews_star');
                            $reviews_photo = get_field('reviews_photo');
                            ?>
                            <li class="swiper-slide reviews__slider-item">
                                <div class="reviews__block">
                                    <div class="reviews__block-text">
                                        <?php echo $reviews_text; ?>
                                    </div>

                                    <div class="reviews__block-inner">
                                        <div class="reviews__block-author">
                                            <p class="reviews__block-name">
                                                <?php echo $reviews_name; ?>
                                            </p>
                                            <p class="reviews__block-post">
                                                <?php echo $reviews_post; ?>
                                            </p>
                                            <div class="reviews__block-photo">
                                                <?php
                                                $size = 'ful'; // (thumbnail, medium, large, full or custom size)
                                                echo wp_get_attachment_image($reviews_photo, $size, '', [
                                                    'loading' => 'lazy'
                                                ]);
                                                ?>
                                            </div>
                                        </div>

                                            <?php if ($reviews_star) : ?>
                                                <div class="reviews__star-list">
                                                    <?php for ($i = 1; $i <= 5; $i++) : ?>
                                                        <div class="reviews-shortcode__star-item">
                                                            <?php if ($i <= $reviews_star) : ?>
                                                                <img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/star.svg" alt="star">
                                                            <?php else : ?>
                                                                <img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/star-trans.svg" alt="star">
                                                            <?php endif; ?>
                                                        </div>
                                                    <?php endfor; ?>
                                                </div>
                                            <?php endif; ?>
                                    </div>
                                </div>
                            </li>
                        <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </ul>

                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <div class="about__wrap">
                <?php
                    $about_title = get_field('about_title');
                    $about_text = get_field('about_text');
                    $about_link = get_field('about_link');
                    $about_link_url = $about_link['url'];
                    $about_link_target = $about_link['target'];

                    if ($about_title) :
                ?>
                    <h2 class="about__title">
                        <?php echo $about_title; ?>
                    </h2>
                <?php endif; ?>

                <?php if ($about_text) : ?>
                    <div class="about__text">
                        <?php echo $about_text; ?>
                    </div>
                <?php endif; ?>
                <?php if ($about_link) : ?>
                    <a class="about__link main-btn" href="<?php echo esc_attr($about_link_url); ?>" target="<?php echo $about_link_target; ?>">
                        LEARN MORE
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php get_template_part('templates/form-questions') ?>
    <?php get_template_part('templates/map') ?>
</main>

<?php get_footer() ?>
