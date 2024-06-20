<div class="footer">
    <div class="footer__top">
        <div class="container">
            <div class="footer__top-wrap">
                <div class="footer__top-inner">
                    <div class="footer__top-menus">
                        <?php
                        wp_nav_menu([
                            'theme_location' => 'footer_menu_one',
                            'menu_class' => 'footer__top-list',
                            'container' => 'false',
                        ]);
                        ?>

                        <?php
                        wp_nav_menu([
                            'theme_location' => 'footer_menu_two',
                            'menu_class' => 'footer__top-list',
                            'container' => 'false',
                        ]);
                        ?>

                        <?php
                        wp_nav_menu([
                            'theme_location' => 'footer_menu_three',
                            'menu_class' => 'footer__top-list',
                            'container' => 'false',
                        ]);
                        ?>
                    </div>

                    <ul class="footer__top-social">
                        <li class="footer__top-social-item">
                            <a class="footer__top-social-link" href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <g clip-path="url(#clip0_2002_7810)">
                                        <path d="M20.4844 0H3.51562C1.57727 0 0 1.57727 0 3.51562V20.4844C0 22.4227 1.57727 24 3.51562 24H10.5938V15.5156H7.78125V11.2969H10.5938V8.4375C10.5938 6.11115 12.4861 4.21875 14.8125 4.21875H19.0781V8.4375H14.8125V11.2969H19.0781L18.375 15.5156H14.8125V24H20.4844C22.4227 24 24 22.4227 24 20.4844V3.51562C24 1.57727 22.4227 0 20.4844 0Z" fill="#51459E"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2002_7810">
                                            <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </li>
                        <li class="footer__top-social-item">
                            <a class="footer__top-social-link" href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <g clip-path="url(#clip0_2002_7812)">
                                        <path d="M10.2031 9.125L14.8831 11.9995C13.3054 12.9677 11.774 13.9086 10.2031 14.8727V9.125Z" fill="#51459E"/>
                                        <path d="M21.7732 0H2.22682C1.63623 0 1.06983 0.234611 0.65222 0.65222C0.234611 1.06983 0 1.63623 0 2.22682L0 21.7732C0 22.3638 0.234611 22.9302 0.65222 23.3478C1.06983 23.7654 1.63623 24 2.22682 24H21.7732C22.3638 24 22.9302 23.7654 23.3478 23.3478C23.7654 22.9302 24 22.3638 24 21.7732V2.22682C24 1.63623 23.7654 1.06983 23.3478 0.65222C22.9302 0.234611 22.3638 0 21.7732 0ZM19.1495 15.6095C18.8495 16.5314 17.8568 17.0918 16.9432 17.22C13.657 17.5691 10.343 17.5691 7.05682 17.22C6.14318 17.0918 5.14773 16.5382 4.85045 15.6095C4.38274 13.2264 4.38274 10.775 4.85045 8.39182C5.15045 7.46864 6.14318 6.90955 7.05682 6.78136C10.343 6.43227 13.657 6.43227 16.9432 6.78136C17.8568 6.90955 18.8523 7.46318 19.1495 8.39182C19.6173 10.775 19.6173 13.2264 19.1495 15.6095Z" fill="#51459E"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2002_7812">
                                            <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </li>
                        <li class="footer__top-social-item">
                            <a class="footer__top-social-link" href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <g clip-path="url(#clip0_2002_7817)">
                                        <path d="M12.8034 11.5913L18.2043 19.3165H15.9878L11.5806 13.0127V13.0123L10.9335 12.087L5.78516 4.72266H8.00168L12.1564 10.6659L12.8034 11.5913Z" fill="#51459E"/>
                                        <path d="M21.4067 0H2.59325C1.16108 0 0 1.16108 0 2.59325V21.4067C0 22.8389 1.16108 24 2.59325 24H21.4067C22.8389 24 24 22.8389 24 21.4067V2.59325C24 1.16108 22.8389 0 21.4067 0ZM15.308 20.3525L10.8481 13.8617L5.26435 20.3525H3.82122L10.2073 12.9295L3.82122 3.63521H8.69203L12.9152 9.78152L18.2026 3.63521H19.6458L13.5562 10.7139H13.5558L20.1788 20.3525H15.308Z" fill="#51459E"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2002_7817">
                                            <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="footer__top-right-box">
                    <div class="footer__top-right-box-images">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>./assets/img/bbb.png" alt="Accredited business">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer__bottom">
        <div class="container">
            <div class="footer__bottom-wrap">
                <p class="footer__bottom-copyright">
                    <?php $copyright = get_field('copyright', 'option');
                    echo str_replace('%', date("Y"), $copyright); ?>
                </p>

                <?php
                    $menuItems = get_field('footer_menu_items', 'option');
                    if ($menuItems) :
                ?>
                <ul class="footer__bottom-list">
                    <?php
                            foreach ($menuItems as $menuItem) :
                                $link = $menuItem['footer_menu_items_link'];
                                $link_url = $link['url'];
                                $link_target = $link['target'];
                                $link_title = $link['title'];
                    ?>
                    <li class="footer__bottom-item">
                        <a class="footer__bottom-link" href="<?php echo $link_url; ?>"
                           target="<?php echo esc_attr($link_target); ?>">
                            <?php echo $link_title; ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>