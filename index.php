<?php get_header(); ?>

    <main role="main">
        <section class="mainSec-container mainSec-container_orange">
            <div class="container">
                <div class="newsFeed">
                    <p class="newsFeed-tit">NEWS</p>
                    <div class="newsFeed-content">
                        <dl>
                            <?php
                            $query_newsFeed = array('post_type'=>'post', 'posts_per_page' => 5);
                            $newsFeed = new WP_Query( $query_newsFeed );
                            if($newsFeed->have_posts()):
                            while($newsFeed->have_posts()):
                            $newsFeed->the_post();
                            ?>
                            <p>
                                <a href="<?php the_permalink(); ?>">
                                    <i class="fa fa-caret-right" aria-hidden="true"></i> <?php the_title(); ?>
                                </a>
                            </p>
                            <?php endwhile; endif; wp_reset_query(); ?>
                        </dl>
                    </div>
                </div>
                <h1 class="mainSec-tit_1">
                    九州外国語学院の実績
                </h1>
                <div class="mainSec-content">
                    <div class="row success">
                        <p class="col-sm-3 col-md-3">合格者数近況</p>
                        <p class="col-sm-9 col-md-9">
                            <a href="<?=home_url('/results/')?>">
                                <img src="<?=get_template_directory_uri()?>/assets/img/index/main_img_01.png" alt="九州大学219名・東京大学11名・旧帝大7校326名">
                            </a>
                        </p>
                    </div>
                    <ul class="row list-imglist">
                        <li class="col-sm-4 col-md-4">
                            <a href="<?=home_url('/results/')?>">
                                <img src="<?=get_template_directory_uri()?>/assets/img/index/main_img_02.jpg">
                                <span>進学実績</span>
                            </a>
                        </li>
                        <li class="col-sm-4 col-md-4">
                            <a href="<?=home_url('/results/experiences/')?>">
                                <img src="<?=get_template_directory_uri()?>/assets/img/index/main_img_03.jpg">
                                <span>合格体験談</span>
                            </a>
                        </li>
                        <li class="col-sm-4 col-md-4">
                            <a href="<?=home_url('/results/employment/')?>">
                                <img src="<?=get_template_directory_uri()?>/assets/img/index/main_img_04.jpg">
                                <span>就職実績</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <div class="wideBnr-reason">
            <a href="<?=home_url('/guide/reason/')?>">
                <p>九州外国語学院<br>を選ぶ理由</p>
                <p><span class="btn btn-s btn-line_white">詳細はこちら</span></p>
            </a>
        </div>

        <section class="mainSec-container mainSec-container_ygreen">
            <div class="container">
                <h1 class="mainSec-tit_1">
                    学校案内
                </h1>
                <div class="mainSec-content">
                    <ul class="row list-imglist">
                        <li class="col-sm-4 col-md-4">
                            <a href="<?=home_url('/guide/')?>">
                                <img src="<?=get_template_directory_uri()?>/assets/img/index/main_img_06.jpg">
                                <span>学校紹介</span>
                            </a>
                        </li>
                        <li class="col-sm-4 col-md-4">
                            <a href="<?=home_url('/teacher/')?>">
                                <img src="<?=get_template_directory_uri()?>/assets/img/index/main_img_07.jpg">
                                <span>教員紹介</span>
                            </a>
                        </li>
                        <li class="col-sm-4 col-md-4">
                            <a href="<?=home_url('/guide/#access')?>">
                                <img src="<?=get_template_directory_uri()?>/assets/img/index/main_img_08.jpg">
                                <span>アクセス</span>
                            </a>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 embedMovie">
                            <div class="embedMovie-player">
                                <div id="player"></div>
                            </div>
                            <ul id="thumbnail" class="embedMovie-thumbnail"></ul>
                        </div>
                        <div class="col-sm-6 col-md-6 embedChart">
                            <p>
                                <a href="<?=home_url('/results/')?>">
                                    <img src="<?=get_template_directory_uri()?>/assets/img/index/main_img_05.png" alt="主な進学先データ">
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="wideBnr-voice">
            <a href="<?=home_url('/results/experiences/')?>">
                <div class="col-sm-4 col-md-4 wideBnr-voiceImg">
                    <img src="<?=get_template_directory_uri()?>/assets/img/index/main_img_09.jpg">
                </div>
                <div class="col-sm-8 col-md-8 wideBnr-voiceCont">
                    <p>合格体験談</p>
                    <p>
                        ここでは、進学を決めた学生みなさんの体験談を記録しています。<br>
                        それぞれの学生の喜びの声、進学準備で苦労したことなど、みんなそれぞれの気持ちを残してくれています。これから進学準備に入る学生も、これから本学院で勉強する皆さんもぜひ読んでみてください。参考になる先輩が見つかるかもしれません。
                        <span class="btn btn-line_white">一覧を見る</span>
                        <img src="<?=get_template_directory_uri()?>/assets/img/common/common_icon_02.png">
                    </p>
                </div>
            </a>
        </div>

        <section class="mainSec-container mainSec-container_blue">
            <div class="container">
                <h1 class="mainSec-tit_1">
                    スクールライフ
                </h1>
                <div class="mainSec-content">
                    <p class="img-wide">
                        <a href="<?=home_url('/schoollife/')?>">
                            <img src="<?=get_template_directory_uri()?>/assets/img/index/main_img_10.jpg" alt="スクールライフ">
                        </a>
                    </p>
                    <ul class="list-iconlist">
                        <li>
                            <a href="<?=home_url('/schoollife/curriculum/')?>">
                                <img src="<?=get_template_directory_uri()?>/assets/img/index/main_icon_01.png"><br>
                                授業について
                            </a>
                        </li>
                        <li>
                            <a href="<?=home_url('/schoollife/dormitory/')?>">
                                <img src="<?=get_template_directory_uri()?>/assets/img/index/main_icon_02.png"><br>
                                学生寮について
                            </a>
                        </li>
                        <li>
                            <a href="<?=home_url('/schoollife/parttime/')?>">
                                <img src="<?=get_template_directory_uri()?>/assets/img/index/main_icon_03.png"><br>
                                課外活動について
                            </a>
                        </li>
                        <li>
                            <a href="<?=home_url('/schoollife/scholarship/')?>">
                                <img src="<?=get_template_directory_uri()?>/assets/img/index/main_icon_04.png"><br>
                                奨学金について
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="mainSec-container mainSec-container_yellow">
            <div class="container">
                <h1 class="mainSec-tit_1">
                    お知らせ / イベント
                </h1>
                <div class="mainSec-content">
                    <ul class="tab-menu">
                        <li>
                            <a href="#news">お知らせ</a>
                        </li>
                        <li>
                            <a href="#event">年中行事</a>
                        </li>
                        <li>
                            <a href="#briefing">進学説明会</a>
                        </li>
                        <li>
                            <a href="#lecture">来訪講演会</a>
                        </li>
                    </ul>
                    <div id="news" class="tab-content">
                        <dl class="list-rowdl">
                            <?php
                            $query_news = array('post_type'=>'post', 'category_name'=>'news', 'posts_per_page'=>5);
                            $news_list = new WP_Query($query_news);
                            if($news_list->have_posts()):
                            while($news_list->have_posts()):
                            $news_list->the_post();
                            ?>
                            <dt>
                                <a href="<?php the_permalink(); ?>">
                                    <time><?php the_time('Y.m.d'); ?></time>
                                </a>
                            </dt>
                            <dd>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </dd>
                            <?php endwhile; endif; wp_reset_query(); ?>
                        </dl>
                        <p class="text-center">
                            <a href="<?=home_url('/event/news/')?>" class="btn btn-line_yellow">一覧を見る</a>
                        </p>
                    </div>
                    <div id="event" class="tab-content">
                        <dl class="list-rowdl">
                            <?php
                            $query_event = array('post_type'=>'post', 'category_name'=>'event', 'posts_per_page'=>5);
                            $event_list = new WP_Query($query_event);
                            if($event_list->have_posts()):
                            while($event_list->have_posts()):
                            $event_list->the_post();
                            ?>
                            <dt>
                                <a href="<?php the_permalink(); ?>">
                                    <time><?php the_time('Y.m.d'); ?></time>
                                </a>
                            </dt>
                            <dd>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </dd>
                            <?php endwhile; endif; wp_reset_query(); ?>
                        </dl>
                        <p class="text-center">
                            <a href="<?=home_url('/event/event/')?>" class="btn btn-line_yellow">一覧を見る</a>
                        </p>
                    </div>
                    <div id="briefing" class="tab-content">
                        <dl class="list-rowdl">
                            <?php
                            $query_briefing = array('post_type'=>'post', 'category_name'=>'briefing', 'posts_per_page'=>5);
                            $briefing_list = new WP_Query($query_briefing);
                            if($briefing_list->have_posts()):
                            while($briefing_list->have_posts()):
                            $briefing_list->the_post();
                            ?>
                            <dt>
                                <a href="<?php the_permalink(); ?>">
                                    <time><?php the_time('Y.m.d'); ?></time>
                                </a>
                            </dt>
                            <dd>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </dd>
                            <?php endwhile; endif; wp_reset_query(); ?>
                        </dl>
                        <p class="text-center">
                            <a href="<?=home_url('/event/briefing/')?>" class="btn btn-line_yellow">一覧を見る</a>
                        </p>
                    </div>
                    <div id="lecture" class="tab-content">
                        <dl class="list-rowdl">
                            <?php
                            $query_lecture = array('post_type'=>'post', 'category_name'=>'lecture', 'posts_per_page'=>5);
                            $lecture_list = new WP_Query($query_lecture);
                            if($lecture_list->have_posts()):
                            while($lecture_list->have_posts()):
                            $lecture_list->the_post();
                            ?>
                            <dt>
                                <a href="<?php the_permalink(); ?>">
                                    <time><?php the_time('Y.m.d'); ?></time>
                                </a>
                            </dt>
                            <dd>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </dd>
                            <?php endwhile; endif; wp_reset_query(); ?>
                        </dl>
                        <p class="text-center">
                            <a href="<?=home_url('/event/lecture/')?>" class="btn btn-line_yellow">一覧を見る</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
