<footer class="pageFooter">
    <div class="container">
        <nav class="row pageFooter-navi">
            <div class="col-sm-3 col-md-3">
                <dl>
                    <dt><a href="<?=home_url('/guide/')?>">学校案内</a></dt>
                    <dd><a href="<?=home_url('/guide/')?>">学校案内</a></dd>
                    <dd><a href="<?=home_url('/guide/reason/')?>">私が九外に決めた理由</a></dd>
                    <dd><a href="<?=home_url('/teacher/')?>">教員紹介</a></dd>
                </dl>
            </div>
            <div class="col-sm-3 col-md-3">
                <dl>
                    <dt><a href="<?=home_url('/results/')?>">九外の実績</a></dt>
                    <dd><a href="<?=home_url('/results/experiences/')?>">合格体験談</a></dd>
                    <dd><a href="<?=home_url('/results/employment/')?>">就職実績</a></dd>
                </dl>
            </div>
            <div class="col-sm-3 col-md-3">
                <dl>
                    <dt><a href="<?=home_url('/schoollife/')?>">スクールライフ</a></dt>
                    <dd><a href="<?=home_url('/schoollife/curriculum/')?>">授業について</a></dd>
                    <dd><a href="<?=home_url('/schoollife/dormitory/')?>">学生寮について</a></dd>
                    <dd><a href="<?=home_url('/schoollife/scholarship/')?>">奨学金について</a></dd>
                    <dd><a href="<?=home_url('/schoollife/interview/')?>">学生インタビュー</a></dd>
                </dl>
            </div>
            <div class="col-sm-3 col-md-3">
                <dl>
                    <dt><a href="<?=home_url('/event/news/')?>">お知らせ/イベント</a></dt>
                    <dd><a href="<?=home_url('/event/news/')?>">お知らせ</a></dd>
                    <dd><a href="<?=home_url('/event/event/')?>">年中行事</a></dd>
                    <dd><a href="<?=home_url('/event/briefing/')?>">進学説明会</a></dd>
                    <dd><a href="<?=home_url('/event/lecture/')?>">著名な学者による講演会</a></dd>
                </dl>
            </div>
        </nav>
        <nav class="pageFooter-bnr">
            <ul class="row">
                <li class="col-sm-4 col-md-4">
                    <a href="<?=home_url('/contact/')?>">
                        <span>
                            <img src="<?=get_template_directory_uri()?>/assets/img/common/footer_icon_01.png">
                        </span>
                        <span>
                            お問い合わせ<br>資料請求
                        </span>
                    </a>
                </li>
                <li class="col-sm-4 col-md-4">
                    <a href="<?=home_url('/admission/')?>">
                        <img src="<?=get_template_directory_uri()?>/assets/img/common/footer_icon_02.png">
                        <span>入学案内</span>
                    </a>
                </li>
                <li class="col-sm-4 col-md-4">
                    <a href="https://www.facebook.com/%E4%B9%9D%E5%B7%9E%E5%A4%96%E5%9B%BD%E8%AA%9E%E5%AD%A6%E9%99%A2-952528631506687/" target="_blank">
                        <span>九州外国語学院</span><br>
                        <img src="<?=get_template_directory_uri()?>/assets/img/common/footer_icon_03.jpg">
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="pageFooter-bottom">
        <p class="pageFooter-logo">
            <a href="<?=home_url('/')?>">
                <img src="<?=get_template_directory_uri()?>/assets/img/common/logo.png" alt="九州外国語学院">
            </a>
        </p>
        <address class="pageFooter-address">
            〒812-0035 福岡市博多区中呉服町2-1九外ビル<br>
        </address>
        <p class="pageFooter-tel">
            TEL +81-92-273-1511 / FAX +81-92-273-1522
        </p>
        <p class="pageFooter-copy">
            © 2016 Kyushu Foreign Language Acadamy. All rights reserved.
        </p>
    </div>
</footer>

<script type="text/javascript" src="<?=get_template_directory_uri()?>/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?=get_template_directory_uri()?>/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=get_template_directory_uri()?>/assets/js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="<?=get_template_directory_uri()?>/assets/js/common.js"></script>
<?php if(is_home()) : ?>
<script type="text/javascript" src="<?=get_template_directory_uri()?>/assets/js/index.js"></script>
<?php elseif(is_page('curriculum')) : ?>
<script type="text/javascript" src="<?=get_template_directory_uri()?>/assets/js/curriculum.js"></script>
<?php endif; ?>
<?php wp_footer(); ?>

</body>
</html>
