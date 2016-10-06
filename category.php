<?php get_header(); global $theme_color,$tab_color;?>

<main role="main">
    <section class="mainSec-container mainSec-container_<?=$theme_color?>">
        <div class="container">
            <ul class="tab-menu">
                <li>
                    <a href="<?=home_url('/event/news/')?>">お知らせ</a>
                </li>
                <li>
                    <a href="<?=home_url('/event/event/')?>">年中行事</a>
                </li>
                <li>
                    <a href="<?=home_url('/event/briefing/')?>">進学説明会</a>
                </li>
                <li>
                    <a href="<?=home_url('/event/lecture/')?>">著名な学者による講演会</a>
                </li>
            </ul>
            <div class="tab-content tab-content_<?=$tab_color?>">
                <dl class="list-rowdl">
                    <?php
                    if(have_posts()) : while(have_posts()) :
                    the_post();
                    ?>
                    <dt><?php the_time('Y.m.d'); ?></dt>
                    <dd>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </dd>
                    <?php endwhile; endif; ?>
                </dl>
                <?php
                if (function_exists("pager")) {
                    pager($teacher_list->max_num_pages);
                }
                wp_reset_query();
                ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>



