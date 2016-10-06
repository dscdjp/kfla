<?php get_header(); global $theme_color;?>

    <main role="main">
        <section class="mainSec-container mainSec-container_<?=$theme_color?>">
            <div class="container">
                <p class="img-cover">
                    <img src="<?=get_template_directory_uri()?>/assets/img/schoollife/main_img_02.jpg">
                </p>
                <div class="mainSec-content">
                    <div class="pageCatch">
                        <h1 class="mainSec-tit_2">
                            日本文化や歴史、風土に触れる
                        </h1>
                        <p>
                            本学院では、定期的にクラス単位で校外学習を行っています。<br>
                            校外学習では、福岡で催される伝統行事や、近郊の施設へ足を運び、<br class="hidden-xs">
                            様々な体験を通して日本の文化や歴史、風土に触れ新しい出会いや発見、<br class="hidden-xs">
                            日本についてさらに理解を深めることができます。
                        </p>

                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-sm-offset-2 col-md-offset-2">
                                <p><img src="<?=get_template_directory_uri()?>/assets/img/schoollife/main_img_04.jpg" class="img-responsive">山笠見学</p>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <p><img src="<?=get_template_directory_uri()?>/assets/img/schoollife/main_img_05.jpg" class="img-responsive">福岡県大宰府国際交流事業</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mainSec-container mainSec-container_<?=$theme_color?>">
            <div class="container">
                <p class="img-cover">
                    <img src="<?=get_template_directory_uri()?>/assets/img/schoollife/main_img_03.jpg">
                </p>
                <div class="mainSec-content">
                    <div class="pageCatch">
                        <h1 class="mainSec-tit_2">
                            留学のもう一つの魅力～アルバイト～
                        </h1>
                        <p>
                            留学生は、資格外活動許可申請を行えば、1週間28時間以内でアルバイトを行うことが可能です。<br>
                            しかし、日本でアルバイトをすることは、けして簡単なことではなく、みなさんは働く上で必要な日本語力、<br class="hidden-xs">
                            一般常識、コミュニケーション能力を身に着けておかなければなりません。
                        </p>
                        <p>
                            この点をクリアすれば、アルバイトでしっかりと働けるだけではなく、<br class="hidden-xs">
                            日ごろの日本語学習で学んだスキルをアルバイトで実践できるというメリットもあります。<br class="hidden-xs">
                            本学院では、みなさんが入国後、アルバイトを希望する学生には無償でアルバイト先の手配および、<br class="hidden-xs">
                            オリエンテーションを通してアルバイトで必要な知識をレクチャーします。
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <div class="bg-clr_<?=$theme_color?>">
            <nav class="otherPageNavi otherPageNavi_<?=$theme_color?> container">
                <ul class="row">
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
                    <li class="col-sm-6 col-md-6">
                        <a href="<?=home_url('/schoollife/interview/')?>">
                            <span><img src="<?=get_template_directory_uri()?>/assets/img/schoollife/bnr_img_04.jpg"></span>
                            <span>学生インタビュー</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </main>

<?php get_footer(); ?>
