<?php get_header(); global $theme_color;?>

    <main role="main">
        <section class="mainSec-container mainSec-container_<?=$theme_color?>">
            <div class="container">
                <h1 class="mainSec-tit_1">
                    <?php the_title(); ?>
                </h1>
                <div class="mainSec-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
