<body <?php body_class(); ?>>

<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="header__top-wrap">
                <div class="header__top-logo">

                </div>

                <div class="header__top-content">
                    <?php
                    $header_top_text = get_field('header_top_left_text', 'option');
                    if ($header_top_text) :
                        ?>
                        <p class="header__top-text">
                            <?php echo $header_top_text; ?>
                        </p>
                    <?php endif; ?>

                    <div class="header__top-inner">
                        <?php
                        $place = get_field('map_place', 'option');
                        if ($place) :
                            ?>
                            <p class="header__top-place">
                                <?php echo $place; ?>
                            </p>
                        <?php endif; ?>

                        <?php
                        $phone = get_field('map_phone', 'option');
                        $phoneLink = preg_replace('/\D/', '', $phone);
                        if($phoneLink) :
                            ?>
                            <a class="header__top-phone" href="tel:<?php echo $phoneLink; ?>">
                                <?php echo $phone; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header__bottom">
        <div class="container">
            <div class="header__bottom-wrap">
                <div class="header__bottom-logo"></div>
                <nav class="header__bottom-nav">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'header_menu_left',
                        'menu_class' => 'header__bottom-list',
                        'container' => 'false',
                    ]);
                    ?>

                    <div class="logo__inner">
                        <?php
                        $logo = get_field('logo', 'option');
                        if (is_home()) :
                            ?>
                            <?php if ($logo) : ?>
                            <div class="logo">
                                <?php
                                $size = 'ful'; // (thumbnail, medium, large, full or custom size)
                                echo wp_get_attachment_image($logo, $size, '', [
                                    'loading' => 'lazy'
                                ]);
                                ?>
                            </div>
                        <?php endif;?>
                        <?php else : ?>
                            <?php if ($logo) : ?>
                                <a class="logo" href="">
                                    <?php
                                    $size = 'ful'; // (thumbnail, medium, large, full or custom size)
                                    echo wp_get_attachment_image($logo, $size, '', [
                                        'loading' => 'lazy'
                                    ]);
                                    ?>
                                </a>
                            <?php endif;?>
                        <?php endif; ?>
                    </div>

                    <?php
                    wp_nav_menu([
                        'theme_location' => 'header_menu_right',
                        'menu_class' => 'header__bottom-list',
                        'container' => 'false',
                    ]);
                    ?>
                </nav>
                <div class="header__bottom-burger-inner">
                    <span class="header__bottom-icon header__bottom-burger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M6 4.79961C6 4.13689 6.53728 3.59961 7.2 3.59961H22.8C23.4627 3.59961 24 4.13689 24 4.79961C24 5.46233 23.4627 5.99961 22.8 5.99961H7.2C6.53728 5.99961 6 5.46228 6 4.79961ZM22.8 10.7996H1.2C0.537281 10.7996 0 11.3369 0 11.9996C0 12.6623 0.537281 13.1996 1.2 13.1996H22.8C23.4627 13.1996 24 12.6623 24 11.9996C24 11.3369 23.4627 10.7996 22.8 10.7996ZM22.8 17.9996H12C11.3373 17.9996 10.8 18.5369 10.8 19.1996C10.8 19.8623 11.3373 20.3996 12 20.3996H22.8C23.4627 20.3996 24 19.8623 24 19.1996C24 18.5369 23.4627 17.9996 22.8 17.9996Z" fill="white"/>
                        </svg>
                    </span>
                    <span class="header__bottom-icon header__bottom-close header__bottom-icon-hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                          <path d="M21.7679 19.9996L29.1329 12.6346C29.6212 12.1462 29.6212 11.3546 29.1329 10.8663C28.6446 10.3779 27.8529 10.3779 27.3646 10.8663L19.9996 18.2312L12.6346 10.8663C12.1462 10.3779 11.3546 10.3779 10.8663 10.8663C10.3779 11.3546 10.3779 12.1462 10.8663 12.6346L18.2312 19.9996L10.8663 27.3646C10.3779 27.8529 10.3779 28.6446 10.8663 29.1329C11.1096 29.3762 11.4296 29.4996 11.7496 29.4996C12.0696 29.4996 12.3896 29.3779 12.6329 29.1329L19.9979 21.7679L27.3629 29.1329C27.6062 29.3762 27.9262 29.4996 28.2463 29.4996C28.5662 29.4996 28.8863 29.3779 29.1296 29.1329C29.6179 28.6446 29.6179 27.8529 29.1296 27.3646L21.7646 19.9996H21.7679Z" fill="white"/>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>


