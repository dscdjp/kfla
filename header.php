<?php

////////////////////////////////////////////
// 変数定義
////////////////////////////////////////////

// $slug : CSSのファイル名などで使用するスラッグ
// $page_name : 大見出しに表示するページ名
// $root_parent_id : 最上層の親ページ ID
// $root_parent_name : 最上層の親ページ名
// $root_parent_permalink : 最上層の親ページリンク
// $parent_id : 上層の親ページ ID (最大でも3階層)
// $parent_name : 上層の親ページ名
// $parent_permalink : 上層の親ページリンク
// $theme_color : ページ毎のメインカラー
global $theme_color;

if(is_home()) {
    $slug = 'index';
} elseif(is_page()) {
    // 固定ページの場合
    $page_id = get_the_ID();
    $slug = get_page($page_id)->post_name;
    $page_name = get_the_title();
    $page_title = $page_name.'丨九州外国語学院';
    if(is_page('guide')) {
        $theme_color = 'ygreen';
    } elseif(is_page('results')) {
        $theme_color = 'orange';
    } elseif(is_page('schoollife')) {
        $theme_color = 'blue';
    } elseif(is_page('admission')||is_page('contact')) {
        $theme_color = 'sblue';
    } else {
        // 子ページの場合
        if ($post->post_parent) {
            $root_parent_id = $post->ancestors[count($post->ancestors) - 1];
            $root_parent_title = get_the_title($root_parent_id);
            $root_parent_permalink = get_permalink($root_parent_id);
            $root_parent_slug = get_page($root_parent_id)->post_name;
            if($root_parent_slug == 'guide') {
                $theme_color = 'ygreen';
            } elseif ($root_parent_slug == 'results') {
                $theme_color = 'orange';
            } elseif ($root_parent_slug == 'schoollife') {
                $theme_color = 'blue';
            }
        } else {
            $theme_color = 'ygreen';
        }
    }
} elseif(is_post_type_archive()) {
    $slug = get_query_var('post_type');
    if(is_post_type_archive('teacher')) {
        $page_name = '教員紹介';
        $theme_color = 'mgreen';
    } elseif(is_post_type_archive('experiences')) {
        $page_name = '合格体験談';
        $theme_color = 'orange';
        $root_parent_title = '九外の実績';
        $page = get_page_by_path('results');
        $root_parent_permalink = get_permalink($page);
    } elseif(is_post_type_archive('employment')) {
        $page_name = '就職実績';
        $theme_color = 'orange';
        $root_parent_title = '九外の実績';
        $page = get_page_by_path('results');
        $root_parent_permalink = get_permalink($page);
    } elseif(is_post_type_archive('interview')) {
        $page_name = '学生インタビュー';
        $theme_color = 'blue';
        $root_parent_title = 'スクールライフ';
        $page = get_page_by_path('schoollife');
        $root_parent_permalink = get_permalink($page);
    }
    if($root_parent_title) {
        $page_title = $page_name.'｜'.$root_parent_title.'丨九州外国語学院';
    } else {
        $page_title = $page_name.'丨九州外国語学院';
    }
} elseif(
is_singular('post') ||
is_category('news') ||
is_category('event') ||
is_category('briefing') ||
is_category('lecture')
) {
    $theme_color = 'yellow';
    $root_parent_title = 'お知らせ/イベント';
    $root_parent_permalink = home_url('/event/');
    if(is_singular('post')) {
        $slug = 'event_detail';
        $cat = get_the_category();
        $cat = $cat[0];
        $page_name = $parent_title = $cat->cat_name;
        $parent_permalink = home_url('/event/'.$cat->slug.'/');
    } else {
        $slug = 'event';
        $page_name = single_cat_title('', false);
    }

    if(is_singular('post')) {
        if($root_parent_title) {
            $page_title = get_the_title().'｜'.$page_name.'｜'.$root_parent_title.'丨九州外国語学院';
        } else {
            $page_title = get_the_title().'｜'.$page_name.'丨九州外国語学院';
        }
    } elseif(
        is_category('news') ||
        is_category('event') ||
        is_category('briefing') ||
        is_category('lecture')
    ) {
        global $tab_color;
        if(is_category('news')) {
            $tab_color = 'yellow';
        } elseif(is_category('event')) {
            $tab_color = 'cyellow';
        } elseif(is_category('briefing')) {
            $tab_color = 'lbeige';
        } elseif(is_category('lecture')) {
            $tab_color = 'dbeige';
        } else {
            $tab_color = 'yellow';
        }
        if($root_parent_title) {
            $page_title = $page_name.'｜'.$root_parent_title.'丨九州外国語学院';
        } else {
            $page_title = $page_name.'丨九州外国語学院';
        }
    }
} elseif(
is_singular('experiences') ||
is_singular('employment') ||
is_singular('interview')
) {
    $post_type_obj = get_post_type_object(get_post_type());
    $parent_name = esc_html($post_type_obj->name);

    $page_name = $parent_title = esc_html($post_type_obj->label);
    $parent_permalink = home_url('/'.esc_html($post_type_obj->rewrite['slug']).'/');

//    echo "<pre>";
//    print_r($post_type_obj);
//    echo "</pre>";
    $root_parent_title = "";
    $root_parent_permalink = "";
    if(
        is_singular('experiences') ||
        is_singular('employment')
    ) {
        $slug = 'experiences_detail';
        $theme_color = 'orange';
        $root_parent_slug = 'results';

    } elseif(is_singular('interview')) {
        $slug = 'interview_detail';
        $theme_color = 'blue';
        $root_parent_slug = 'schoollife';
    }
    $get_page_id = get_page_by_path($root_parent_slug);
    $get_page_id = $get_page_id->ID;
    $root_parent_title = get_page($get_page_id)->post_title;
    $root_parent_permalink = home_url('/'.$root_parent_slug.'/');

    if($root_parent_title && $parent_title) {
        $page_title = get_the_title().$page_name.'｜'.$parent_title.'｜'.$root_parent_title.'丨九州外国語学院';
    } elseif($root_parent_title) {
        $page_title = get_the_title().$page_name.'｜'.$root_parent_title.'丨九州外国語学院';
    } else {
        $page_title = get_the_title().$page_name.'丨九州外国語学院';
    }
} elseif(is_404()) {
    $page_name = '404 NOT FOUND';
}


?><!DOCTYPE html>

<html lang="ja">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?=$page_title?></title>
        <meta name="robots" content="index,follow">
        <link href="<?=get_template_directory_uri()?>/assets/css/<?=$slug?>.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>
    <body>

        <header class="pageHeader">
            <div class="container spHeader">
                <div class="row">
                    <h1 class="pageHeader-logo col-sm-4 col-md-4">
                        <a href="<?=home_url('/')?>">
                            <img src="<?=get_template_directory_uri()?>/assets/img/common/logo.png" alt="九州外国語学院">
                        </a>
                    </h1>
                    <div class="text-right spLangNavi">
                        <nav class="pageHeader-langNav">
                            <ul>
                                <li>日本語</li>
                                <li><a href="/multi/page.php?id=10" target="_blank">English</a></li>
                                <li><a href="/multi/page.php?id=18" target="_blank">Donamu từ</a></li>
                                <li><a href="/chinese/" target="_blank">中文（简体）</a></li>
                            </ul>
                        </nav>
                        <p><a href="<?=home_url('/contact/')?>" class="btn pageHeader-contactBtn">お問い合わせ・資料請求</a></p>
                    </div>
                </div>
                <div class="hnavi-trigger visible-xs">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <?php if(is_home()) : ?>
            <div class="keyVisual">
                <div class="swiper-container">
                    <ul class="swiper-wrapper">
                        <li class="swiper-slide swiper-slide_1">
                            <a href="<?=home_url('/guide/')?>">
                                <img src="<?=get_template_directory_uri()?>/assets/img/index/keyVisual_img_01.jpg" alt="九州外国語学院でしか、叶えられない夢がある。">
                            </a>
                        </li>
                        <li class="swiper-slide swiper-slide_2">
                            <a href="<?=home_url('/results/')?>">
                                <img src="<?=get_template_directory_uri()?>/assets/img/index/keyVisual_img_02.jpg" alt="進学実績">
                            </a>
                        </li>
                        <li class="swiper-slide swiper-slide_3">
                            <a href="<?=home_url('/admission/')?>">
                                <img src="<?=get_template_directory_uri()?>/assets/img/index/keyVisual_img_03.jpg" alt="入学案内">
                            </a>
                        </li>
                        <li class="swiper-slide swiper-slide_4">
                            <a href="<?=home_url('/teacher/')?>">
                                <img src="<?=get_template_directory_uri()?>/assets/img/index/keyVisual_img_04.jpg" alt="優秀な講師陣">
                            </a>
                        </li>
                        <li class="swiper-slide swiper-slide_5">
                            <a href="<?=home_url('/schoollife/curriculum/')?>">
                                <img src="<?=get_template_directory_uri()?>/assets/img/index/keyVisual_img_05.jpg" alt="多彩な授業で、有名な大学・大学院進学に導く。">
                            </a>
                        </li>
                        <li class="swiper-slide swiper-slide_6">
                            <a href="<?=home_url('/guide/reason/')?>">
                                <img src="<?=get_template_directory_uri()?>/assets/img/index/keyVisual_img_06.jpg" alt="私が九外に決めた理由">
                            </a>
                        </li>
                        <li class="swiper-slide swiper-slide_7">
                            <a href="<?=home_url('/event/lecture/')?>">
                                <img src="<?=get_template_directory_uri()?>/assets/img/index/keyVisual_img_07.jpg" alt="著名な学者による講演会">
                            </a>
                        </li>
                    </ul>
                    <div class="swiper-button swiper-button_prev"></div>
                    <div class="swiper-button swiper-button_next"></div>
                </div>
            </div>
            <?php endif; ?>
            <nav class="gnavi">
                <ul>
                    <li><a href="<?=home_url('/guide/')?>">学校案内</a></li>
                    <li><a href="<?=home_url('/results/')?>">九外の実績</a></li>
                    <li><a href="<?=home_url('/teacher/')?>">教員紹介</a></li>
                    <li><a href="<?=home_url('/schoollife/')?>">スクールライフ</a></li>
                    <li><a href="<?=home_url('/admission/')?>">入学案内</a></li>
                    <li><a href="<?=home_url('/event/')?>">イベント</a></li>
                </ul>
            </nav>
            <?php if(!is_home()) : ?>
            <h2 class="pageHeader-pageName pageHeader-pageName_<?=$theme_color?>">
                <?=$page_name?>
            </h2>
            <nav class="pageHeader-breadcrumb bg-clr_<?=$theme_color?>">
                <ul class="container">
                    <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="<?=home_url('/')?>" itemprop="url">
                            <span itemprop="title">トップページ</span>
                        </a>
                    </li>
                    <?php
                    if(
                        is_page()&&$post->post_parent ||
                        is_category() ||
                        is_singular('post') ||
                        is_singular('experiences') ||
                        is_singular('employment') ||
                        is_singular('interview')||
                        is_post_type_archive('experiences') ||
                        is_post_type_archive('employment') ||
                        is_post_type_archive('interview')
                    ) :
                    ?>
                    <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="<?=$root_parent_permalink?>" itemprop="url">
                            <span itemprop="title"><?=$root_parent_title?></span>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php
                    if(
                        is_singular('post') ||
                        is_singular('experiences') ||
                        is_singular('employment') ||
                        is_singular('interview')
                    ) :
                    ?>
                    <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="<?=$parent_permalink?>" itemprop="url">
                            <span itemprop="title"><?=$parent_title?></span>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if(is_archive()) : ?>
                    <li>
                        <?=$page_name?>
                    </li>
                    <?php else : ?>
                    <li>
                        <?php the_title(); ?>
                    </li>
                    <?php endif; ?>
                </ul>
            </nav>
            <?php endif; ?>
        </header>
