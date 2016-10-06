<?php
get_header();
global $theme_color;

if(have_posts()) : while(have_posts()) : the_post();
// 画像取得
$img = get_field('image');
$imgurl = wp_get_attachment_image_src($img, 'large');
// 名前・コメント取得
$name = get_field('name')?get_field('name'):'&nbsp;';
$birthplace = get_field('birthplace')?get_field('birthplace'):'&nbsp;';
?>

<main role="main">
    <section class="mainSec-container mainSec-container_<?=$theme_color?>">
            <div class="container">
                <p class="mainSec-tit_1">
                    学生インタビュー
                    <time><?php the_time('Y.m.d'); ?></time>
                </p>
                <div class="mainSec-content">
                    <h1 class="mainSec-tit_2">
                        「<?=$name?>」さんのインタビュー
                    </h1>
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
                            </dl>
                        </div>
                    </div>
                    <div>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </section>
        <div class="bg-clr_blue">
            <nav class="otherPageNavi otherPageNavi_blue container">
                <ul class="row">
                    <li class="col-sm-6 col-md-6">
                        <a href="<?=home_url('/schoollife/parttime/')?>">
                            <span><img src="<?=get_template_directory_uri()?>/assets/img/schoollife/bnr_img_01.jpg"></span>
                            <span>課外活動/アルバイト</span>
                        </a>
                    </li>
                    <li class="col-sm-6 col-md-6">
                        <a href="<?=home_url('/schoollife/curriculum/')?>">
                            <span><img src="<?=get_template_directory_uri()?>/assets/img/schoollife/bnr_img_05.jpg"></span>
                            <span>授業について</span>
                        </a>
                    </li>
                    <li class="col-sm-6 col-md-6">
                        <a href="<?=home_url('/schoollife/dormitory/')?>">
                            <span><img src="<?=get_template_directory_uri()?>/assets/img/schoollife/bnr_img_02.jpg"></span>
                            <span>学生寮について</span>
                        </a>
                    </li>
                    <li class="col-sm-6 col-md-6">
                        <a href="<?=home_url('/schoollife/scholarship/')?>">
                            <span><img src="<?=get_template_directory_uri()?>/assets/img/schoollife/bnr_img_03.jpg"></span>
                            <span>奨学金について</span>
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
