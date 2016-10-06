<?php
get_header();
global $theme_color;
if(have_posts()) : while(have_posts()) : the_post();
?>

<main role="main">
    <section class="mainSec-container mainSec-container_<?=$theme_color?>">
            <div class="container">
                <p class="mainSec-tit_1">
                    <?php the_title(); ?>
                    <time><?php the_time('Y.m.d'); ?></time>
                </p>
                <div class="mainSec-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </section>
    </main>

<?php
endwhile; endif;
get_footer();
?>
