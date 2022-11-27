<?php /*Template Name: サステナビリティ - ガバナンス*/ ?>

<?php get_header();?>
<?php get_template_part('assets/inc/nav-header'); ?>

<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/zoom-js/zoom.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/zoom-js/zoom.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/zoom-js/transition.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>



<main class="l-main">
    <div class="c-page-ttl">
        <div class="u-container u-container--wide">
            <div class="c-page-ttl__txt">
                <p class="c-page-ttl__big"><span>Governance</span></p>
                <h1 class="c-page-ttl__small"><span>ガバナンス</span></h1>
            </div>
        </div>
    </div>

    <div class="c-breadcrumbs u-container u-container--wide">
        <ul>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="/"><span itemprop="name"><svg class="home-icon" xmlns="http://www.w3.org/2000/svg" width="15" height="13.9" viewBox="0 0 15 13.9" xml:space="preserve" role="img" aria-label="HOME">
                            <path d="M5.8 13.9V9.2h3.5v4.6h3.5V6.9H15L7.5 0 0 6.9h2.3v6.9h3.5z" />
                        </svg></span>
                    <meta itemprop="position" content="1">
                </a>
            </li>
            <li class="separ">|</li>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="/sustainability/"><span itemprop="name">サステナビリティ</span>
                    <meta itemprop="position" content="2">
                </a>
            </li>
            <li class="separ">|</li>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <span itemprop="name">ガバナンス</span>
                <meta itemprop="position" content="3">
            </li>
        </ul>
    </div>

    <div class="l-main__inner l-main__inner--col2 u-container u-container--wide">
        <div class="l-contents governance l-contents--col2">
            <div class="p-governance">
                <nav class="c-cate-nav">
                    <ul class="c-cate-nav__list">
                        <li class="c-cate-nav__item"><a href="#governance-sec"><span>コーポレートガバナンス</span></a></li>
                        <li class="c-cate-nav__item"><a href="#compliance-sec"><span>コンプライアンス</span></a></li>
                        <li class="c-cate-nav__item"><a href="#inquiry-sec"><span>コンプライアンス相談窓口</span></a></li>
                    </ul>
                </nav>
                <section id="governance-sec">
                    <h2 class="c-headline08 p-sustainability-ttl"><span>コーポレートガバナンス</span></h2>
                    <nav class="c-cate-nav type-b">
                        <ul class="c-cate-nav__list">
                            <li class="c-cate-nav__item"><a href="#summary"><span>概要</span></a></li>
                            <li class="c-cate-nav__item"><a href="#directors"><span>取締役会</span></a></li>
                            <li class="c-cate-nav__item"><a href="#reward"><span>役員報酬</span></a></li>
                            <li class="c-cate-nav__item"><a href="#controls"><span>内部統制</span></a></li>
                            <li class="c-cate-nav__item"><a href="#report"><span>報告書</span></a></li>
                        </ul>
                    </nav>
                    <div class="sub-sec">
                        <h3 id="summary" class="c-headline10 p-plant-strength-ttl"><span>コーポレートガバナンスの概要</span></h3>
                        <p class="p-sustainability-par">当社は、激変する経営環境の中、株主をはじめとするステークホルダーに対して、公正で誠実な経営を実践し、経営の透明性及び効率性を確保するために、社内組織管理体制の安定充実に努めることをコーポレート・ガバナンスの基本と考えております。</p>
                        <h4 class="c-headline04">コーポレートガバナンス体制</h4>
                        <div data-action="zoom">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/governance/governance01.webp" type="image/webp">
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/governance/governance01.png" type="image/jpeg">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/governance/governance01.png" width="934" height="1154" alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="sub-sec">
                        <h3 id="directors" class="c-headline10 p-plant-strength-ttl"><span>取締役会</span></h3>
                        <div class="btn-wrapper">
                            <a href="/company/officer-introduction/" target="_blank" rel="noopener" class="c-btn c-btn--white c-btn--icon p-group-sec-item__btn">
                                <span>役員一覧</span>
                            </a>
                            <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/pdf/director_skill_matrix.pdf" target="_blank" rel="noopener" class="c-btn c-btn--white c-btn--icon c-pdf-link__btn">
                                <span>スキルマトリックス</span>
                            </a>
                        </div>

                        <h4 class="c-headline04">独立性判断基準</h4>
                        <p class="p-sustainability-par mb20">当社は、独立役員の資格を充たす社外役員を全て独立役員に指定しております。<br>当社の社外役員の独立性判断弾基準はPDFをご覧ください。</p>
                        <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/pdf/independence_criteria_for_outside_officers.pdf" target="_blank" rel="noopener" class="c-btn c-btn--white c-btn--icon c-pdf-link__btn">
                            <span>社外役員の独立性判断基準</span>
                        </a>

                        <h4 class="c-headline04">指名・報酬諮問委員会</h4>
                        <p class="p-sustainability-par mb20">
                            当社の取締役候補者の指名および取締役の報酬等を決定するにあたり、取締役会の諮問機関として指名・報酬諮問委員会を設置しております。<br>取締役の指名・報酬等に係る評価・決定プロセスの透明性および客観性を担保することにより、取締役会の監督機能の強化、コーポレートガバナンス体制の充実を図ることを設置目的としております。
                        </p>

                        <p class="list-ttl">[指名・報酬諮問委員会の概要]</p>
                        <ol class="long-list">
                            <li>取締役会が選定した３名以上の取締役で構成するものとします。</li>
                            <li>委員の過半数は独立社外取締役とします。</li>
                            <li>委員の選定および解職は、取締役会で行います。</li>
                            <li>委員の任期は 1 年間とし、再任を妨げないものとします。</li>
                            <li>取締役会の諮問に応じて、次の事項を審議し、取締役会に答申を行います。</li>
                            <ol>
                                <li>＜主な審議事項＞</li>
                                <li><span>&#9312;</span>代表取締役および役付取締役の選定・解職と取締役候補者の指名を行うに当たっての方針と手続</li>
                                <li><span>&#9313;</span>株主総会に付議する取締役の選任または解任議案の原案</li>
                                <li><span>&#9314;</span>取締役会に付議する代表取締役および役付取締役の選定または解職議案</li>
                                <li><span>&#9315;</span>代表取締役社長の後継者計画</li>
                                <li><span>&#9316;</span>取締役の報酬等を決定するに当たっての方針</li>
                                <li><span>&#9317;</span>株主総会に付議する取締役の報酬等に関する議案の原案</li>
                                <li><span>&#9318;</span>取締役の個人別の報酬等の内容の決定に関する方針</li>
                                <li><span>&#9319;</span>取締役の個人別の報酬等の内容</li>
                                <li><span>&#9320;</span>その他、前各号に関して取締役会が必要と認めた事項</li>
                            </ol>
                        </ol>
                    </div>

                    <div class="sub-sec">
                        <h3 id="reward" class="c-headline10 p-plant-strength-ttl mb0"><span>役員報酬</span></h3>
                        <h4 class="c-headline04">取締役の個人別の報酬等の内容の決定に関する方針</h4>
                        <p class="p-sustainability-par mb20">
                            当社は、取締役会において、取締役の個人別の報酬等の内容に係る決定方針を決議しております。<br>取締役の個人別の報酬等の内容に係る決定方針の内容の概要はPDFをご覧ください。
                        </p>
                        <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/pdf/director_remuneration_policy.pdf" target="_blank" rel="noopener" class="c-btn c-btn--white c-btn--icon c-pdf-link__btn" style="width:100%;max-width:440px;">
                            <span>取締役の個人別の報酬等の内容の決定に関する方針</span>
                        </a>
                        <h4 class="c-headline04">取締役の個人別の報酬等の内容の決定に係る委任に関する事項</h4>
                        <p class="p-sustainability-par">
                            当社においては、取締役会決議に基づき、代表取締役社長の髙田 寿一郎氏に対して、取締役会において決議した決定方針に沿って、指名・報酬諮問委員会での審議を踏まえて、取締役の個人別の報酬額の具体的内容を決定する権限を委任しております。同氏に本権限を委任した理由は、当社全体の業績を俯瞰しつつ各取締役の担当業務の評価を行うには、代表取締役社長が最も適しているからであります。
                        </p>
                        <h4 class="c-headline04">監査役の個人別の報酬等の内容の決定に関する方針</h4>
                        <p class="p-sustainability-par">
                            当社の監査役の個人別の報酬等の額又はその算定方法の決定に関する方針は、監査役の協議によって決定しており、各監査役の報酬は、株主総会で承認された監査役の報酬総額の範囲内で、役員報酬規程に従って監査役の協議により決定することとしております。
                        </p>
                    </div>

                    <div class="sub-sec">
                        <h3 id="controls" class="c-headline10 p-plant-strength-ttl mb0"><span>内部統制</span></h3>
                        <h4 class="c-headline04">内部統制システムに関する基本的な考え方</h4>
                        <p class="p-sustainability-par">
                            当社は、会社法に基づく内部統制システムの構築の基本方針を以下に定め、経営の適法性及び効率性の確保、並びに経営を阻害する可能性のあるリスクに対する管理に努めるとともに、今後、激変する環境の変化に対処できる経営体制の整備・充実を図っております。
                        </p>
                        <h4 class="c-headline04">内部統制システムに関する整備状況</h4>
                        <p class="p-sustainability-par mb20">
                            内部統制システムに関する整備状況につきましては、PDFをご覧ください。
                        </p>
                        <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/pdf/development_status_of_internal_control_system.pdf" target="_blank" rel="noopener" class="c-btn c-btn--white c-btn--icon c-pdf-link__btn">
                            <span>内部統制システムに関する整備状況</span>
                        </a>
                        <h4 class="c-headline04">反社会的勢力排除に向けた基本的な考え方</h4>
                        <p class="p-sustainability-par">
                            当社は、コンプライアンス規程に基づき、社会の秩序や安全に脅威を与える反社会的勢力とは一切の関係を持たず、「金を出さない」、「利用しない」、「恐れない」、「交際しない」を基本原則に毅然とした態度で対応することを基本方針としております。
                        </p>
                        <h4 class="c-headline04">反社会的勢力排除に向けた整備状況</h4>
                        <ol class="long-list">
                            <li>代表取締役自らが、「不当な要求には絶対に応じない」という基本方針と姿勢を示し、毅然とした社風を構築するように徹底を図っております。</li>
                            <li>あらかじめ暴力団等に対する対応責任者、補助者を指定しておき、対応マニュアル、通報手順等を定めるよう徹底を図っております。</li>
                            <li>警察、暴力追放運動推進センターとの連携を保ち、事案の発生に備え担当窓口（総務部）を設けております。</li>
                            <li>当社の取引業者との間では、「反社会的勢力との関係排除に関する覚書」を締結することで、反社会的勢力との関係遮断に努めております。</li>
                    </div>
                    <div class="sub-sec">
                        <h3 id="report" class="c-headline10 p-plant-strength-ttl"><span>コーポレートガバナンス報告書</span></h3>
                        <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/pdf/corporate221121.pdf" target="_blank" rel="noopener" class="c-btn c-btn--white c-btn--icon c-pdf-link__btn">
                            <span>コーポレートガバナンス報告書</span>
                        </a>
                    </div>
                </section>


                <section id="compliance-sec">
                    <h2 class="c-headline08 p-sustainability-ttl"><span>コンプライアンス</span></h2>
                    <h3 class="c-headline10 p-plant-strength-ttl"><span>コンプライアンスへの取り組み</span></h3>
                    <p class="p-sustainability-par mb60">
                        当社は、コンプライアンスの実践を経営の最重要課題のひとつと位置付け、コンプライアンスの徹底は、当社の経営の基盤を成すことを強く認識し、企業活動上求められるあらゆる法令・規則の遵守はもとより、社会規範に則した誠実かつ公正で透明性の高い企業活動を遂行します。
                    </p>
                    <h3 class="c-headline10 p-plant-strength-ttl"><span>コンプライアンス活動</span></h3>
                    <div class="poster mb60">
                        <p class="p-sustainability-par">
                            当社は、2004年1月にコンプライアンス推進室を発足させ、グループ内での具体的な取り組みと展開をスタートさせました。以来、ステークホルダーの皆様に信頼され、『屈強なパートナー企業』となるべく、経営の柱として、「顧客主義」「社会的責任」「コンプライアンス」を掲げています。グループ社員全員が企業理念の再認識のもと高い倫理観を持ち、社会に対する責任を考えて行動しております。また、毎月15日を改めてコンプライアンスを考える日として制定し、各職場で啓蒙活動を実施しております。
                        </p>
                        <div>
                            <div class="flex">
                                <picture>
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/governance/compliance01.webp" type="image/webp">
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/governance/compliance01.jpg" type="image/jpeg">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/governance/compliance01.jpg" width="201" height="567" alt="">
                                </picture>
                                <picture>
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/governance/compliance02.webp" type="image/webp">
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/governance/compliance02.jpg" type="image/jpeg">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/governance/compliance02.jpg" width="201" height="567" alt="">
                                </picture>
                            </div>
                            <span>コンプライアンス啓発ポスター</span>
                        </div>
                    </div>
                    <h3 class="c-headline10 p-plant-strength-ttl"><span>組織体制</span></h3>
                    <div class="pila" data-action="zoom">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/governance/governance02.svg" width="984" height="560" alt="">
                    </div>
                    <p class="p-sustainability-par mb60">
                        活動の中心として、コンプライアンス常任委員会･委員会を設置し、委員長は代表取締役社長 髙田寿一郎が務めております。また、委員会メンバーによる勉強会の場「コンプライアンス推進会議」を設け、社外講師による講演の実施やグループ別発表による問題提起、その改善策等を討議し、全社、相互認識のもと潜在するリスクの回避を図っております。
                    </p>
                    <h3 class="c-headline10 p-plant-strength-ttl"><span>TAKADAグループ行動規範<br class="br528">（2007年9月制定）</span></h3>
                    <div class="image-text">
                        <picture>
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/governance/compliance03.webp" type="image/webp">
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/governance/compliance03.jpg" type="image/jpeg">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/governance/compliance03.jpg" width="160" height="226" alt="">
                        </picture>
                        <ol class="long-list2">
                            <li>企業憲章</li>
                            <li>TAKADAグループの経営目的（新中期経営計画）</li>
                            <li>コンプライアンス体制</li>
                            <li>コンプライアンス教育報告体制と社内ネットワークの活用</li>
                            <li>行動基準と遵守事項</li>
                            <li>コンプライアンス相談窓口について</li>
                        </ol>
                    </div>
                    <h3 class="c-headline10 p-plant-strength-ttl"><span>コンプライアンス事例集<br class="br528">（2009年12月作成）</span></h3>
                    <div class="image-text mb200">
                        <picture>
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/governance/compliance04.webp" type="image/webp">
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/governance/compliance04.jpg" type="image/jpeg">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/governance/compliance04.jpg" width="160" height="226" alt="">
                        </picture>
                        <p class="p-sustainability-par">
                            身近に起こりうるコンプライアンスの事例を集め編纂いたしました。 所属内教育や集合研修時に行動規範と併せ、繰り返しの教育を実施し、社員一人ひとりがコンプライアンス意識を高めるツールとして活用しています。
                        </p>
                    </div>
                </section>
                <section id="inquiry-sec">
                    <h2 class="c-headline08 p-sustainability-ttl"><span>コンプライアンス相談窓口</span></h2>
                    <p class="p-sustainability-par mb60">
                        コンプライアンス違反行為の未然防止と早期発見のため、2006年度から社内にコンプライアンス相談窓口を設置しています。2016年10月からは、新たに社外窓口を設置し運用を開始いたしました。<br>これらの相談窓口は、TAKADAグループの役員・従業員だけでなく、取引関係のある会社で働く方も利用できるよう設置いたしました。
                    </p>
                    <h3 class="c-headline10 p-plant-strength-ttl"><span>社外相談窓口</span></h3>
                    <div class="p-project-table table-wrap js-scrollable scroll-hint is-scrollable" style="overflow:auto" style="overflow:auto">
                        <table>
                            <tbody>
                                <tr>
                                    <th>専用電話</th>
                                    <td>
                                        <p class="p-sustainability-par">
                                            0120-880-630（フリーダイヤル）<br>（対応時間：土、日、祝日、年末年始を除く各日の10:00～17:00）
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>EMAIL</th>
                                    <td>
                                        <a href="mailto:takada_helpline@nishimura.co.jp" target="_blank" rel="noopener" class="c-btn c-btn--white c-btn--icon p-group-sec-item__btn">
                                            <span>メーラーを起動する</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>FAX</th>
                                    <td>
                                        <p class="p-sustainability-par">0120-880-723（フリーダイヤル）</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>書面</th>
                                    <td>
                                        <p class="p-sustainability-par">
                                            〒810-0004<br>福岡市中央区渡辺通2丁目1番82号　電気ビル共創館9階<br>弁護士法人西村あさひ法律事務所 高田工業所グループ社外相談窓口 宛
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>面談</th>
                                    <td>
                                        <p class="p-sustainability-par">場所・時間を調整後に行います。</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3 class="c-headline10 p-plant-strength-ttl"><span>社内相談窓口</span></h3>
                    <div class="p-project-table table-wrap js-scrollable scroll-hint is-scrollable" style="overflow:auto">
                        <div class="scroll-hint-icon-wrap is-active" data-target="scrollable-icon">
                            <span class="scroll-hint-icon">
                                <div class="scroll-hint-text">スクロールできます</div>
                            </span>
                        </div>
                        <table>
                            <tbody>
                                <tr>
                                    <th>専用電話</th>
                                    <td>
                                        <p class="p-sustainability-par">
                                            093-632-2632<br>0800-100-2632（フリーダイヤル）<br>（対応時間：土、日、祝日、年末年始を除く各日の8:30～17:15）
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>EMAIL</th>
                                    <td>
                                        <a href="mailto:comp@takada.co.jp" target="_blank" rel="noopener" class="c-btn c-btn--white c-btn--icon p-group-sec-item__btn">
                                            <span>メーラーを起動する</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>FAX</th>
                                    <td>
                                        <p class="p-sustainability-par">093-632-2713（共用のため送信前に連絡をお願いいたします。）</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>書面</th>
                                    <td>
                                        <p class="p-sustainability-par">
                                            〒806-8567<br>北九州市八幡西区築地町1番1号<br>株式会社高田工業所　コンプライアンス推進室 宛
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>面談</th>
                                    <td>
                                        <p class="p-sustainability-par">場所・時間を調整後に行います。</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="box">
                        <p class="p-sustainability-par">
                            <span>※通報・相談にあたっての注意事項</span><br>電話の場合、「高田工業所コンプライアンス相談窓口への相談である」旨伝えてください。<br>また、E-mail 、FAX、書面の場合はその旨標記ください。
                        </p>
                    </div>
                </section>

            </div>
        </div>



        <aside class="l-sidebar">
          <?php get_template_part('assets/inc/side-nav_sustainability'); ?>
        </aside>
    </div>
    <?php get_template_part('assets/inc/cta'); ?>
</main>

<?php get_template_part('assets/inc/nav-footer'); ?>
<?php get_footer();?>
