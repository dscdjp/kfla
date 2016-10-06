<?php get_header(); global $theme_color;?>

    <main role="main">
        <section class="mainSec-container mainSec-container_mgreen">
            <div class="container">
                <div class="mainSec-content">
                    <ul class="list-imgAnchorList">
                        <?php
                        if(have_posts()) :
                        while(have_posts()) :
                        the_post();
                        // $query_teacher = array('post_type'=>'cps_teacher', 'posts_per_page'=>10, 'paged'=>$paged);
                        // 画像取得
                        $img = get_field('image');
                        $imgurl = wp_get_attachment_image_src($img, 'thumb-2x');
                        // 名前・コメント取得
                        $name = get_field('name')?get_field('name'):'&nbsp;';
                        $comment = get_field('comment')?get_field('comment'):'&nbsp;';
                        ?>
                        <li>
                            <p class="list-imgAnchorList-img">
                                <img src="<?=$imgurl[0]?>" alt="<?=$name?>">
                            </p>
                            <dl class="list-rowdl">
                                <dt>氏名</dt>
                                <dd><?=$name?></dd>
                                <dt>コメント</dt>
                                <dd>
                                    <?=$comment?>
                                </dd>
                            </dl>
                        </li>
                        <?php endwhile; endif; ?>
                    </ul>
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
