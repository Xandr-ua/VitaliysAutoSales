<div class="map">
    <div class="container">
        <div class="map__wrap">

            <?php
                $map_iframe = get_field('map_iframe', 'option');
                if ($map_iframe) :
            ?>
                <div class="map__box">
                    <?php echo $map_iframe; ?>
                </div>
            <?php endif; ?>

            <div class="map__content">
                <?php
                    $title = get_field('map_title', 'option');
                    if ($title) :
                ?>
                <p class="map__content-title">
                    <?php echo $title; ?>
                </p>
                <?php endif; ?>

                <?php
                    $place = get_field('map_place', 'option');
                    if ($place) :
                ?>
                    <p class="map__content-place map__content-text">
                        <?php echo $place; ?>
                    </p>
                <?php endif;?>

                <?php
                    $phone = get_field('map_phone', 'option');
                    $phoneLink = preg_replace('/\D/', '', $phone);
                    if($phoneLink) :
                ?>
                    <a class="map__content-phone map__content-text" href="tel:<?php echo $phoneLink; ?>">
                        <?php echo $phone; ?>
                    </a>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>
