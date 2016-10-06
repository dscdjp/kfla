<?php
get_header();
global $theme_color;

if(have_posts()) : while(have_posts()) : the_post();
// 画像取得
$img = get_field('image');
$imgurl = wp_get_attachment_image_src($img, 'large');
// 名前・コメント取得
$name = get_field('name')?get_field('name'):'&nbsp;';
$pass_company = get_field('pass_company')?get_field('pass_company'):'&nbsp;';
$birthplace = get_field('birthplace')?get_field('birthplace'):'&nbsp;';
?>

<main role="main">
    <section class="mainSec-container mainSec-container_<?=$theme_color?>">
        <div class="container">
            <p class="mainSec-tit_1">
                合格体験談特集
                <time><?php the_time('Y.m.d'); ?></time>
            </p>
            <div class="mainSec-content">
                <h1 class="mainSec-tit_2">
                    「<?=$name?>」さんの合格体験談
                </h1>
                <p class="mainSec-cong">おめでとうございます！</p>
                <div class="row">
                    <div class="col-sm-4 col-md-4">
                        <p class="mainSec-img">
                            <img src="<?=$imgurl[0]?>" alt="<?=$name?>">
                        </p>
                    </div>
                    <div class="col-sm-8 col-md-8">
                        <dl class="list-rowdl">
                            <dt>氏名</dt>
                            <dd><?=$name?></dd>
                            <dt>出身地</dt>
                            <dd><?=$birthplace?></dd>
                            <dt>合格</dt>
                            <dd><?=$pass_company?></dd>
                        </dl>
                    </div>
                </div>
                <div>
                    <?php the_content(); ?>
                </div>
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
                    <a href="<?=home_url('/results/experiences/')?>">
                        <span><img src="<?=get_template_directory_uri()?>/assets/img/result/bnr_img_03.jpg"></span>
                        <span>合格体験談</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</main>

<?php
endwhile; endif;
get_footer();
?>
