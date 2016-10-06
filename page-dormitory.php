<?php get_header(); global $theme_color;?>

    <main role="main">
        <section class="mainSec-container mainSec-container_<?=$theme_color?>">
            <div class="container">
                <p class="img-cover">
                    <img src="<?=get_template_directory_uri()?>/assets/img/schoollife/main_img_18.jpg">
                </p>
                <div class="mainSec-content">
                    <div class="pageCatch">
                        <h1 class="mainSec-tit_2">
                            学生寮について
                        </h1>
                    </div>
                    <h2 class="mainSec-tit_2">
                        寮の外観
                    </h2>
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <p class="dormitory-img">
                                <img src="<?=get_template_directory_uri()?>/assets/img/schoollife/main_img_23.jpg">
                            </p>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <p class="dormitory-img">
                                <img src="<?=get_template_directory_uri()?>/assets/img/schoollife/main_img_24.jpg">
                            </p>
                        </div>
                    </div>


                    <h2 class="mainSec-tit_2">
                        室内
                    </h2>
                    <div class="row">
                        <div class="col-sm-4 col-md-4">
                            <p class="dormitory-img">
                                <img src="<?=get_template_directory_uri()?>/assets/img/schoollife/main_img_31.jpg">
                            </p>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <p class="dormitory-img">
                                <img src="<?=get_template_directory_uri()?>/assets/img/schoollife/main_img_32.jpg">
                            </p>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <p class="dormitory-img">
                                <img src="<?=get_template_directory_uri()?>/assets/img/schoollife/main_img_33.jpg">
                            </p>
                        </div>
                    </div>

                    <h2 class="mainSec-tit_2">
                        寮生の団欒風景
                    </h2>
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <p class="dormitory-img">
                                <img src="<?=get_template_directory_uri()?>/assets/img/schoollife/main_img_19.jpg">
                            </p>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <p class="dormitory-img">
                                <img src="<?=get_template_directory_uri()?>/assets/img/schoollife/main_img_20.jpg">
                            </p>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <p class="dormitory-img">
                                <img src="<?=get_template_directory_uri()?>/assets/img/schoollife/main_img_21.jpg">
                            </p>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <p class="dormitory-img">
                                <img src="<?=get_template_directory_uri()?>/assets/img/schoollife/main_img_22.jpg">
                            </p>
                        </div>
                    </div>



                    <h2 class="mainSec-tit_2">
                        設備
                    </h2>
                    <div class="row">
                        <div class="col-sm-4 col-md-4">
                            <p class="dormitory-img">
                                <img src="<?=get_template_directory_uri()?>/assets/img/schoollife/main_img_27.jpg">
                                エントランス
                            </p>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <p class="dormitory-img">
                                <img src="<?=get_template_directory_uri()?>/assets/img/schoollife/main_img_28.jpg">
                                キッチン
                            </p>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <p class="dormitory-img">
                                <img src="<?=get_template_directory_uri()?>/assets/img/schoollife/main_img_25.jpg">
                                洗濯機
                            </p>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <p class="dormitory-img">
                                <img src="<?=get_template_directory_uri()?>/assets/img/schoollife/main_img_26.jpg">
                                風呂
                            </p>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <p class="dormitory-img">
                                <img src="<?=get_template_directory_uri()?>/assets/img/schoollife/main_img_29.jpg">
                                トイレ
                            </p>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <p class="dormitory-img">
                                <img src="<?=get_template_directory_uri()?>/assets/img/schoollife/main_img_30.jpg">
                                ドレッサー
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <div class="bg-clr_<?=$theme_color?>">
            <nav class="otherPageNavi otherPageNavi_<?=$theme_color?> container">
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
