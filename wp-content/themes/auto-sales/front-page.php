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

                <div class="vehicles__title-arrows">

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

<!--    <section class="want-vehicle">-->
<!--        <div class="container">-->
<!--            <div class="want-vehicle__wrap">-->
<!--                <div class="want-vehicle__content">-->
<!--                    --><?php
//                        $want_title = get_field('want_title');
//                        if ($want_title) :
//                    ?>
<!--                        <h2 class="want-vehicle__title main-title">-->
<!--                            --><?php //echo $want_title; ?>
<!--                        </h2>-->
<!--                    --><?php //endif; ?>
<!---->
<!--                    --><?php
//                        $want_text = get_field('want_text');
//                        if ($want_text) :
//                    ?>
<!--                        <p class="want-vehicle__text">-->
<!--                            --><?php //echo $want_text; ?>
<!--                        </p>-->
<!--                    --><?php //endif; ?>
<!--                    <div class="want-vehicle__form">-->
<!--                        --><?php //echo do_shortcode('[contact-form-7 id="de604a5" title="Want your vehicle"]'); ?>
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="want-vehicle__image">-->
<!--                    <img src="--><?php //echo get_stylesheet_directory_uri() ?><!--./assets/img/want-vehicle-img.jpg" alt="#">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->

<!--    <section class="body-styles">-->
<!--        <div class="container">-->
<!--            --><?php
//                $popular_title = get_field('popular_body_title');
//                if ($popular_title) :
//            ?>
<!--                <h2 class="body-styles main-title">-->
<!--                    --><?php //echo $popular_title; ?>
<!--                </h2>-->
<!--            --><?php //endif; ?>
<!--                <ul class="body-styles__list">-->
<!--                    <li class="body-styles__item body-styles__item-title">-->
<!---->
<!--                    </li>-->
<!---->
<!--                    --><?php
//                    $prod_cat_args = array(
//                        'taxonomy' => 'product_cat',
//                        'orderby' => 'id', // поле для сортування
//                        'hide_empty' => false, // приховувати категорії без товарів або ні
//                        'parent' => 0 // id батьківської категорії
//                    );
//
//                    $woo_categories = get_categories($prod_cat_args);
//                    foreach ($woo_categories as $woo_cat) :
//                        $woo_cat_id = $woo_cat->term_id; // id категорії
//                        $woo_cat_name = $woo_cat->name; // назва категорії
//                        $woo_cat_slug = $woo_cat->slug; // slug категорії
//
//                        // Перевірка, чи це дефолтна категорія (зазвичай це "Некатегоризовані")
//                        if ($woo_cat_name === 'Uncategorized') {
//                            continue;
//                        }
//
//                        $woo_cat_thumbnail_id = get_term_meta($woo_cat_id, 'thumbnail_id', true); // id зображення категорії
//                        $woo_cat_image_url = wp_get_attachment_url($woo_cat_thumbnail_id); // URL-адреса зображення категорії
//                        ?>
<!--                        <li class="body-styles__item">-->
<!--                            <a class="body-styles__link" href="--><?php //echo get_term_link($woo_cat_slug, 'product_cat'); ?><!--" target="_self">-->
<!--                                <span class="body-styles__text">-->
<!--                                    --><?php //echo $woo_cat_name; ?>
<!--                                </span>-->
<!--                                --><?php //if ($woo_cat_thumbnail_id): ?>
<!--                                    <span class="body-styles__images">-->
<!--                                        --><?php //echo wp_get_attachment_image($woo_cat_thumbnail_id, 'full', '', ['loading' => 'lazy']); ?>
<!--                                    </span>-->
<!--                                --><?php //endif; ?>
<!--                            </a>-->
<!--                        </li>-->
<!--                    --><?php //endforeach; ?>
<!---->
<!--                </ul>-->
<!--        </div>-->
<!--    </section>-->

<!--    <section class="makes">-->
<!--        <div class="container">-->
<!--            --><?php
//                $popular_makes_title = get_field('popular_makes_title');
//                if ($popular_makes_title) :
//            ?>
<!--                <h2 class="makes__title main-title">-->
<!--                    --><?php //echo $popular_makes_title; ?>
<!--                </h2>-->
<!--            --><?php //endif; ?>
<!---->
<!--            --><?php
//                $popular_makes_items = get_field('popular_makes_items');
//            ?>
<!--            <div class="swiper makes__slider">-->
<!--                <ul class="swiper-wrapper makes__slider-list">-->
<!--                    --><?php
//                        foreach ($popular_makes_items as $item) :
//                        $popular_makes_link = $item['popular_makes_items_link'];
//                        $popular_makes_link_url = $popular_makes_link['url'];
//                        $popular_makes_link_target = $popular_makes_link['target'];
//
//                        $popular_makes_items_img = $item['popular_makes_items_img'];
//                        if ($popular_makes_items_img) :
//                    ?>
<!--                    <li class="swiper-slide makes__slider-item">-->
<!--                        <a class="makes__slider-link"  href="--><?php //echo esc_attr($popular_makes_link_url) ; ?><!--" target="--><?php //echo $popular_makes_link_target; ?><!--">-->
<!--                            --><?php
//                            $size = 'ful'; // (thumbnail, medium, large, full or custom size)
//                            echo wp_get_attachment_image($popular_makes_items_img, $size, '', [
//                                'loading' => 'lazy'
//                            ]);
//                            ?>
<!--                        </a>-->
<!--                    </li>-->
<!--                    --><?php
//                        endif;
//                        endforeach;
//                    ?>
<!--                </ul>-->
<!---->
<!--                <div class="swiper-pagination"></div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->

<!--    <section class="about">-->
<!--        <div class="container">-->
<!--            <div class="about__wrap">-->
<!--                --><?php
//                    $about_title = get_field('about_title');
//                    $about_text = get_field('about_text');
//                    $about_link = get_field('about_link');
//                    $about_link_url = $about_link['url'];
//                    $about_link_target = $about_link['target'];
//
//                    if ($about_title) :
//                ?>
<!--                    <h2 class="about__title">-->
<!--                        --><?php //echo $about_title; ?>
<!--                    </h2>-->
<!--                --><?php //endif; ?>
<!---->
<!--                --><?php //if ($about_text) : ?>
<!--                    <div class="about__text">-->
<!--                        --><?php //echo $about_text; ?>
<!--                    </div>-->
<!--                --><?php //endif; ?>
<!--                --><?php //if ($about_link) : ?>
<!--                    <a class="about__link main-btn" href="--><?php //echo esc_attr($about_link_url); ?><!--" target="--><?php //echo $about_link_target; ?><!--">-->
<!--                        LEARN MORE-->
<!--                    </a>-->
<!--                --><?php //endif; ?>
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->

    <?php get_template_part('templates/form-questions') ?>
    <?php get_template_part('templates/map') ?>
</main>

<?php get_footer() ?>
