<?php get_header(); global $theme_color;?>

<main role="main">
    <section class="mainSec-container mainSec-container_sblue admission">
        <div class="container">
            <p class="img-cover">
                <img src="<?=get_template_directory_uri()?>/assets/img/admission/main_img_01.jpg">
            </p>
            <div class="mainSec-content">
                <div class="pageCatch">
                    <h1 class="mainSec-tit_2">
                        申請から入学まで
                    </h1>
                    <p>申請から入学までの流れ</p>
                </div>
                <h2 class="mainSec-tit_2">ビザをお持ちでない方</h2>
                <div class="admission-visa1">
                    <h3 class="mainSec-tit_3">1. 申請資格</h3>
                    <ul class="list-noneStyle">
                        <li>① 18歳以上で、12年以上の学校教育を修了した者、または同等の学歴を有する者。</li>
                        <li>② 日本語能力検定試験N5以上合格、または同等の日本語能力を有する者。</li>
                        <li>③ 在学中の学費・生活費を支弁できる者、または本人に代わる経費支弁者がある者。</li>
                        <li>④ 不法滞在歴・犯罪歴のない者。</li>
                    </ul>
                    <h3 class="mainSec-tit_3">2. 申請日程</h3>
                    <table class="tbl-wide tbl-wide_blue tbl-wide_spVertical">
                        <thead>
                            <tr>
                                <th>入学時期</th>
                                <th>書類受付期間</th>
                                <th>入国管理局申請</th>
                                <th>審査結果発表</th>
                                <th>来日時期</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>4月</td>
                                <td>前年10月～12月上旬</td>
                                <td>前年12月中旬</td>
                                <td>2月下旬</td>
                                <td>4月上旬</td>
                            </tr>
                            <tr>
                                <td>7月</td>
                                <td>1月～3月上旬</td>
                                <td>4月上旬</td>
                                <td>5月下旬</td>
                                <td>7月上旬</td>
                            </tr>
                            <tr>
                                <td>10月</td>
                                <td>4月～6月上旬</td>
                                <td>6月中旬</td>
                                <td>8月下旬</td>
                                <td>10月上旬</td>
                            </tr>
                            <tr>
                                <td>1月</td>
                                <td>前年7月～9月上旬</td>
                                <td>前年9月中旬</td>
                                <td>前年11月下旬</td>
                                <td>1月上旬</td>
                            </tr>
                        </tbody>
                    </table>
                    <h3 class="mainSec-tit_3">3. 入学期間</h3>
                    <table class="tbl-wide tbl-wide_blue tbl-wide_spHorizontal">
                        <tbody>
                            <tr>
                                <th>入学時期</th>
                                <td>4月入学</td>
                                <td>7月入学</td>
                                <td>10月入学</td>
                                <td>1月入学</td>
                            </tr>
                            <tr>
                                <th>学習期間</th>
                                <td>2年</td>
                                <td>1年9か月</td>
                                <td>1年6か月</td>
                                <td>1年3か月</td>
                            </tr>
                        </tbody>
                    </table>
                    <h3 class="mainSec-tit_3">4. 申請～授業開始までの手続き</h3>
                    <ul class="admission-flow">
                        <li>現地試験・面接</li>
                        <li>入学申請必要書類の提出（入学願書、経費支弁書ダウンロード）</li>
                        <li>九州外国語学院で選考後、入国管理局に学校が代理申請</li>
                        <li>審査結果発表、申請人に結果通知（「在留資格認定証明書」が交付されます。</li>
                        <li>本校所定の学費納入。申請人に「在留資格認定証明書」、「入学許可書」の送付</li>
                        <li>申請人が日本大使館（領事館）で「留学」ビザの査証申請</li>
                        <li>来日、入国審査後、日本へ入国時在留カードを受け取る。</li>
                        <li>入寮（学生寮あり※要事前申し込み）</li>
                        <li>入学、オリエンテーション</li>
                        <li>授業開始</li>
                    </ul>
                    <h3 class="mainSec-tit_3">5. 学費について</h3>
                    <table class="tbl-wide tbl-wide_blue tbl-wide_spVertical">
                        <thead>
                            <tr>
                                <th>入学時期</th>
                                <th>1年目学費</th>
                                <th>学生寮費<span class="small"> ※</span></th>
                                <th>1年目合計</th>
                                <th>2年目学費</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>4月入学</td>
                                <td>730,000円</td>
                                <td>175,000円</td>
                                <td>905,000円</td>
                                <td>630,000円</td>
                            </tr>
                            <tr>
                                <td>7月入学</td>
                                <td>730,000円</td>
                                <td>175,000円</td>
                                <td>905,000円</td>
                                <td>472,500円</td>
                            </tr>
                            <tr>
                                <td>10月入学</td>
                                <td>730,000円</td>
                                <td>175,000円</td>
                                <td>905,000円</td>
                                <td>315,000円</td>
                            </tr>
                            <tr>
                                <td>1月入学</td>
                                <td>730,000円</td>
                                <td>175,000円</td>
                                <td>905,000円</td>
                                <td>157,500円</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="small">※ 25,000円×6ヶ月+入寮費25,000円</p>

                    <h3 class="mainSec-tit_3">6. 申請に必要な書類</h3>
                    <div class="admission-download">
                        <h4>書式ダウンロード</h4>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <p class="text-center"><a href="<?=get_template_directory_uri()?>/assets/pdf/application_cn1.pdf" target="_blank" class="btn btn-l btn-sblue"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> 入学願書/経費支弁書 1年版（中）</a></p>
                                <p class="text-center"><a href="<?=get_template_directory_uri()?>/assets/pdf/application_cn2.pdf" target="_blank" class="btn btn-l btn-sblue"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> 入学願書/経費支弁書 2年版（中）</a></p>
                                <p class="text-center"><a href="<?=get_template_directory_uri()?>/assets/pdf/application_jp-en.pdf" target="_blank" class="btn btn-l btn-sblue"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> 入学願書/経費支弁書（日/英）</a></p>
                                <p class="text-center"><a href="<?=get_template_directory_uri()?>/assets/pdf/admissionsguide_201704_cn.pdf" target="_blank" class="btn btn-l btn-sblue"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> 募集要項 2017/4（中）</a></p>
                                <p class="text-center"><a href="<?=get_template_directory_uri()?>/assets/pdf/admissionsguide_201707_cn.pdf" target="_blank" class="btn btn-l btn-sblue"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> 募集要項 2017/7（中）</a></p>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <p class="text-center"><a href="<?=get_template_directory_uri()?>/assets/pdf/admissionsguide_en.pdf" target="_blank" class="btn btn-l btn-sblue"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> 募集要項（英）</a></p>
                                <p class="text-center"><a href="<?=get_template_directory_uri()?>/assets/pdf/admissionsguide_vi.pdf" target="_blank" class="btn btn-l btn-sblue"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> 募集要項（越）</a></p>
                                <p class="text-center"><a href="<?=get_template_directory_uri()?>/assets/pdf/pamphlet_cn.pdf" target="_blank" class="btn btn-l btn-sblue"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> パンフレット（中）</a></p>
                                <p class="text-center"><a href="<?=get_template_directory_uri()?>/assets/pdf/pamphlet_en.pdf" target="_blank" class="btn btn-l btn-sblue"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> パンフレット（英）</a></p>
                                <p class="text-center"><a href="<?=get_template_directory_uri()?>/assets/pdf/pamphlet_vi.pdf" target="_blank" class="btn btn-l btn-sblue"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> パンフレット（越）</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="mainSec-tit_2">留学ビザ以外のビザをお持ちの方（聴講生）</h2>
                <div class="admission-visa2">
                    <h3 class="mainSec-tit_3">1. 申請資格</h3>
                    <ul class="list-noneStyle">
                        <li>留学ビザ以外で１か月以上日本滞在が可能な者</li>
                    </ul>
                    <h3 class="mainSec-tit_3">2. 申請日程及び学習期間</h3>
                    <table class="tbl-wide tbl-wide_blue tbl-wide_spVertical">
                        <thead>
                            <tr>
                                <th>入学時期</th>
                                <th>入学期間</th>
                                <th>学習期間</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>随時</td>
                                <td>長期休暇に入る場合は、長期休暇明け</td>
                                <td>1か月～受講可能</td>
                            </tr>
                        </tbody>
                    </table>
                    <h3 class="mainSec-tit_3">3. 申請～授業開始までの手続き</h3>
                    <ul class="admission-flow">
                        <li>学校へ来校、申込書記入</li>
                        <li>授業見学・レベルチェックテストを受ける</li>
                        <li>本校所定の学費納入。</li>
                        <li>住居、学生寮あり（事前に申し込みが必要）</li>
                        <li>入学、オリエンテーション</li>
                        <li>授業開始</li>
                    </ul>
                    <h3 class="mainSec-tit_3">4. 学費について（テキスト代含む）</h3>
                    <table class="tbl-wide tbl-wide_blue tbl-wide_spVertical">
                        <thead>
                            <tr>
                                <th>1ヶ月</th>
                                <th>2ヶ月</th>
                                <th>3ヶ月</th>
                                <th>6ヶ月</th>
                                <th>9ヶ月</th>
                                <th>12ヶ月</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>48,000円</td>
                                <td>78,000円</td>
                                <td>114,000円</td>
                                <td>227,000円</td>
                                <td>340,000円</td>
                                <td>450,000円</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h3 class="mainSec-tit_3">5. 申請に必要な書類</h3>
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <ul>
                            <li>聴講生申込書</li>
                            <li>証明書用写真3枚</li>
                            <li>在留カード、パスポート</li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="admission-download">
                            <h4>書式ダウンロード</h4>
                            <p class="text-center"><a href="<?=get_template_directory_uri()?>/assets/pdf/choukou.pdf" target="_blank" class="btn btn-l btn-sblue"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> 聴講生申込書</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
