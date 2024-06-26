<?php
/*
* Template Name: Other Services
*/
get_header() ?>

<main class="main">

    <section class="other-services">
        <div class="container">
            <div class="other-services__inner">
                <div class="other-services__box">
                    <h1 class="other-services__title"><?php the_title() ?></h1>

                    <div class="other-services__text content">
                        <?php the_content(); ?>
                    </div>
                </div>

                <?php
                    $other_services_image = get_field('other_services_image');
                    if( $other_services_image ):
                ?>
                <div class="other-services__images">
                    <?php echo wp_get_attachment_image($other_services_image, 'full', '', ['loading' => 'lazy']); ?>
                </div>
                <?php endif; ?>
            </div>


            <div class="other-services__include-inner">
                <?php
                $our_services_include_title = get_field('our_services_include_title');
                $our_services_include_text = get_field('our_services_include_text');
                ?>
                <h2 class="other-services__include-title">
                    <?php echo $our_services_include_title; ?>
                </h2>

                <div class="other-services__include-content content">
                    <?php echo $our_services_include_text; ?>
                </div>
            </div>
        </div>
    </section>



    <?php get_template_part('templates/form-questions') ?>
    <?php get_template_part('templates/map') ?>
</main>

<?php get_footer() ?>
