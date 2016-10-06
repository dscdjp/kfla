<?php get_header(); global $theme_color;?>

<main role="main">
    <section class="mainSec-container mainSec-container_<?=$theme_color?>">
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
                    $pass_school = get_field('pass_school')?get_field('pass_school'):'&nbsp;';
                    $birthplace = get_field('birthplace')?get_field('birthplace'):'&nbsp;';
                    $comment = mb_substr(strip_tags(get_the_content()),0,72).'...';
                    ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <p class="list-imgAnchorList-img">
                                <img src="<?=$imgurl[0]?>" alt="<?=$name?>">
                            </p>
                            <dl class="list-rowdl">
                                <dt>氏名</dt>
                                <dd><?=$name?></dd>
                                <dt>出身地</dt>
                                <dd><?=$birthplace?></dd>
                                <dt>合格校</dt>
                                <dd><?=$pass_school?></dd>
                                <dt>コメント</dt>
                                <dd>
                                    <?=$comment?>
                                </dd>
                            </dl>
                        </a>
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
    <div class="bg-clr_<?=$theme_color?>">
        <nav class="otherPageNavi otherPageNavi_<?=$theme_color?> container">
            <ul class="row">
                <li class="col-sm-6 col-md-6">
                    <a href="<?=home_url('/results/')?>">
                        <span><img src="<?=get_template_directory_uri()?>/assets/img/result/bnr_img_01.jpg"></span>
                        <span>九外の実績</span>
                    </a>
                </li>
                <li class="col-sm-6 col-md-6">
                    <a href="<?=home_url('/results/employment/')?>">
                        <span><img src="<?=get_template_directory_uri()?>/assets/img/result/bnr_img_02.jpg"></span>
                        <span>就職実績</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</main>

<?php get_footer(); ?>
