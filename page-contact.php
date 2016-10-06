<?php get_header(); global $theme_color;?>

    <main role="main">
        <section class="mainSec-container mainSec-container_<?=$theme_color?> admission">
            <div class="container">
                <p class="img-cover">
                    <img src="<?=get_template_directory_uri()?>/assets/img/contact/main_img_01.jpg">
                </p>
                <div class="mainSec-content">
                    <?=do_shortcode('[contact-form-7 id="11" title="contactform"]')?>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
