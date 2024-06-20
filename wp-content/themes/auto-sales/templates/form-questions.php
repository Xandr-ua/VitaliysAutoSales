<section class="questions">
    <div class="container">
        <div class="questions__wrap">
            <div class="questions__content">
                <?php
                    $questionsTitle = get_field('questions_title', 'option');
                    if ($questionsTitle) :
                ?>
                    <h2 class="questions__title">
                        <?php echo $questionsTitle; ?>
                    </h2>
                <?php endif; ?>

                <?php
                    $questionsText = get_field('questions_text', 'option');
                    if ($questionsText) :
                ?>
                    <div class="questions__text">
                        <?php echo $questionsText; ?>
                    </div>
                <?php endif; ?>

                <div class="questions__image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>./assets/img/questions.png" alt="#">
                </div>
            </div>

            <div class="questions__form">
                <?php
                    $questions_form_title = get_field('questions_form_title', 'option');
                    if ($questions_form_title) :
                ?>
                    <p class="questions__form-title">
                        <?php echo $questions_form_title; ?>
                    </p>
                <?php endif; ?>
                <?php echo do_shortcode('[contact-form-7 id="74007ad" title="Contact form 1"]'); ?>
            </div>
        </div>
    </div>
</section>
