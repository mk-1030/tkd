<?php /*Template Name: 企業情報-プロジェクト事業*/ ?>

<?php get_header();?>
<?php get_template_part('assets/inc/nav-header'); ?>

<main class="l-main">
    <div class="c-page-ttl">
        <div class="u-container u-container--wide">
            <div class="c-page-ttl__txt">
                <p class="c-page-ttl__big"><span>Project Business</span></p>
                <h1 class="c-page-ttl__small"><span>プロジェクト事業</span></h1>
            </div>
        </div>
    </div>

    <div class="c-breadcrumbs u-container u-container--wide">
        <ul>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="/"><span itemprop="name"><svg class="home-icon" xmlns="http://www.w3.org/2000/svg" width="15" height="13.9" viewBox="0 0 15 13.9" xml:space="preserve" role="img" aria-label="HOME"><path d="M5.8 13.9V9.2h3.5v4.6h3.5V6.9H15L7.5 0 0 6.9h2.3v6.9h3.5z"/></svg></span><meta itemprop="position" content="1"></a>
            </li>
            <li class="separ">|</li>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="/business/"><span itemprop="name">事業紹介</span></a><meta itemprop="position" content="2">
            </li>
            <li class="separ">|</li>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <span itemprop="name">プロジェクト事業</span><meta itemprop="position" content="3">
            </li>
        </ul>
    </div>

    <div class="l-main__inner l-main__inner--col2 u-container u-container--wide">
        <div class="l-contents l-contents--col2">
            <div class="p-project">
                <ul class="c-business-anchor b-business-anchor-project">
                    <li>
                        <a href="#a-project">
                            <div class="bottom">
                                <span class="num">01</span>
                                <span class="ttl">プロジェクト</span>
                            </div>
                            <div class="arrow"></div>
                        </a>
                    </li>
                    <li>
                        <a href="#a-engineering">
                            <div class="bottom">
                                <span class="num">02</span>
                                <span class="ttl">エンジニアリング</span>
                            </div>
                            <div class="arrow"></div>
                        </a>
                    </li>
                    <li>
                        <a href="#a-electrical">
                            <div class="bottom">
                                <span class="num">03</span>
                                <span class="ttl">電気計装</span>
                            </div>
                            <div class="arrow"></div>
                        </a>
                    </li>
                </ul>
                <section id="a-project" class="p-project-sec">
                    <h2 class="c-headline08 p-project-ttl">プロジェクト</h2>
                    <div class="p-project-ttl-img">
                        <picture>
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/project-business/project__hd__img01__pc.webp" media="(min-width:1024px)" type="image/webp" />
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/project-business/project__hd__img01__pc.jpg" media="(min-width:1024px)" />
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/project-business/project__hd__img01__sp.webp" type="image/webp" />
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/project-business/project__hd__img01__sp.jpg" width="390" height="132" />
                        </picture>
                        <div class="num">01</div>
                    </div>
                    <h3 class="p-project-hd3">高度な設計力と蓄積した製作・施工技術を生かし、<br class="u-pc-only">合理的で信頼性の高いプラント設計を施工いたします。</h3>
                    <p class="p-project-txt">お客様の設計条件に合ったプラントを建設するために、独自の技術・技能のノウハウと蓄積技術を最大限活用し、トータルコストのミニマム化を図ったプラントエンジニアリングを行います。設計力と施工技術・技能を融合・駆使し、プラントを計画通りにかつ安全に完成させ、高い評価をいただいております。</p>
                    <h4 class="c-headline10 p-project-hd4"><span>プロジェクトフロー</span></h4>
                    <div class="p-project-flow">
                        <picture>
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/project-business/project__flow__img__pc.svg" media="(min-width:1024px)" />
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/project-business/project__flow__img__sp.svg" width="390" height="1983" />
                        </picture>
                    </div>
                    <h4 class="c-headline10 p-project-hd4"><span>プロジェクト実績例</span></h4>
                    <div class="c-business-table-wrap js-scrollable">
                        <table class="c-business-table two-column1">
                            <tr>
                                <th>分野</th>
                                <th>工業実績例</th>
                            </tr>
                            <tr>
                                <th>製鉄分野</th>
                                <td>
                                ・排熱回収設備試験装置製作工事<br>
                                ・酸化鉄脱水/乾燥設備増強工事<br>
                                ・タール宰処理設備建設工事、改造工事
                                </td>
                            </tr>
                            <tr>
                                <th>化学・石油分野</th>
                                <td>
                                ・各種化学/石油化学プラントの建設（脱水塔、反応槽（撹拌機）等の製作を含む）<br>
                                ・フェノール製造設備増強工事<br>
                                ・モノマー製造設備能力増強工事<br>
                                ・軽油の超深度脱硫設備建設工事
                                </td>
                            </tr>
                            <tr>
                                <th>ファインケミカル分野</th>
                                <td>
                                ・熱可塑性プラスチック製造設備建設工事<br>・多結晶シリコン製造設備建設工事<br>・フィルム原料製造設備建設工事<br>・廃プラスチックリサイクル設備建設工事<br>・フィルム製造設備建設工事
                                </td>
                            </tr>
                        </table>
                    </div>
                </section>

                <section id="a-engineering" class="p-project-engineering-sec">
                    <h2 class="c-headline08 p-project-ttl">エンジニアリング</h2>
                    <div class="p-project-ttl-img">
                        <picture>
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/project-business/project__hd__img02__pc.webp" media="(min-width:1024px)" type="image/webp" />
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/project-business/project__hd__img02__pc.jpg" media="(min-width:1024px)" />
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/project-business/project__hd__img02__sp.webp" type="image/webp" />
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/project-business/project__hd__img02__sp.jpg" width="390" height="132" />
                        </picture>
                        <div class="num">02</div>
                    </div>
                    <h3 class="p-project-hd3">蓄積したデータと実績により高度なエンジニアリングを実現。<br>設計詳細データを製作・施工の最前線まで活用することで、<br>短納期・低コスト・高品質な製品を提供いたします。</h3>
                    <p class="p-project-txt">これまで蓄積してきたプラントエンジニアリングの実績とデータをもとに、コンピュータ解析による高度なエンジニアリングサービスを提供。その中でも、3次元CADを使用し、設計初期段階での問題点の解決や計画業務の効率化を行い、整合性のとれた高品質な製品を短期間でご提供いたします。</p>
                    <h4 class="c-headline10 p-project-hd4"><span>3次元設計</span></h4>
                    <div class="p-project-engineering-img">
                        <picture>
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/project-business/project__engineering__img01__pc.svg" media="(min-width:1024px)" />
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/project-business/project__engineering__img01__sp.svg" width="934" height="448" />
                        </picture>
                    </div>
                    <h4 class="c-headline10 p-project-hd4"><span>許認可取得状況</span></h4>
                    <div class="c-business-table-wrap js-scrollable">
                        <table class="c-business-table multi-column">
                            <tr>
                                <th colspan="2">対象事業所および工場</th>
                                <th>本社工場</th>
                                <th>水島工場</th>
                                <th>四日市工場</th>
                                <th>君津工場</th>
                                <th>本社</th>
                            </tr>
                            <tr>
                                <th rowspan="2">労働安全衛生法</th>
                                <td>ボイラー</td>
                                <td>○</td>
                                <td>○</td>
                                <td>○</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>第一種圧力容器</td>
                                <td>○</td>
                                <td>○</td>
                                <td>○</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <th rowspan="2">高圧ガス保全法</th>
                                <td>特定設備</td>
                                <td>○</td>
                                <td>○</td>
                                <td>-</td>
                                <td>○</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>大臣認定資格者</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>○</td>
                            </tr>
                            <tr>
                                <th>電気事業法</th>
                                <td>発電用火力設備</td>
                                <td>○</td>
                                <td>○</td>
                                <td>○</td>
                                <td>○</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <th>ガス事業法</th>
                                <td>容器・配管・導管</td>
                                <td>○</td>
                                <td>○</td>
                                <td>○</td>
                                <td>○</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <th rowspan="3">原子炉等規制法</th>
                                <td>発電用原子炉施設</td>
                                <td>○</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>試験・研究用原子炉施設</td>
                                <td>○</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>加工施設及び再処理施設</td>
                                <td>○</td>
                                <td>○</td>
                                <td>-</td>
                                <td>○</td>
                                <td>-</td>
                            </tr>
                        </table>
                    </div>                    
                    <h4 class="c-headline10 p-project-hd4"><span>高圧ガス保安法</span></h4>
                    <div class="p-project-engineering-img">
                        <picture>
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/project-business/project__engineering__img02__pc.svg" media="(min-width:1024px)" />
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/project-business/project__engineering__img02__sp.svg" width="934" height="433" />
                        </picture>
                    </div>
                    <p class="p-project-txt">高圧ガス保安法における一般高圧ガス保安規則及びコンビナート等保安規則で、「経済産業大臣が定める試験及び製造を行う者」として「M:管類」の認定を受けています。<br>高圧ガス配管の設計、施工から試験検査までを整備された技術基盤のもと、当社独自の品質保証体制で実施・管理し、お客様設備の保安体制に貢献いたします。</p>

                    <h4 class="c-headline10 p-project-hd4"><span>CAE概要</span></h4>
                    <div class="c-business-table-wrap js-scrollable">
                        <table class="c-business-table two-column2">
                            <tr>
                                <th>用途</th>
                                <th>ソフトウェア</th>
                            </tr>
                            <tr>
                                <th>2次元CAD</th>
                                <td>AutoCAD LT</td>
                            </tr>
                            <tr>
                                <th>3次元CAD</th>
                                <td>AUTODESKINVENTOR、SOLIDWORKS</td>
                            </tr>
                            <tr>
                                <th>高圧ガス保安法（特定則）強度計算プログラム</th>
                                <td>TOSCA-TW</td>
                            </tr>
                            <tr>
                                <th>圧力容器強度計算プログラム</th>
                                <td>PLESSEL</td>
                            </tr>
                            <tr>
                                <th>汎用有限要素法プログラム</th>
                                <td>Femtet、MSC Nastran<sup>TM</sup></td>
                            </tr>
                            <tr>
                                <th>機器ノズル局部応力解析</th>
                                <td>AutoPIPE Nozzle</td>
                            </tr>
                            <tr>
                                <th>器設計プログラム</th>
                                <td>System Pvex<sup>TM</sup></td>
                            </tr>
                        </table>
                    </div>

                    <h4 class="c-headline10 p-project-hd4"><span>設計技術の紹介</span></h4>
                    <div class="p-project-engineering-movie">
                        <iframe src="https://player.vimeo.com/video/509691421?h=ee72786b00" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <ul class="c-pdf-link p-project-engineering-link">
                        <li>
                            <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/pdf/BIM_plant_engineering.pdf" target="_blank" rel="noopener" class="c-btn c-btn--white c-btn--icon c-pdf-link__btn">
                                <span>BIMプラントエンジニアリング</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/pdf/piping_design.pdf" target="_blank" rel="noopener" class="c-btn c-btn--white c-btn--icon c-pdf-link__btn">
                                <span>配管設計</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/pdf/equipment_design.pdf" target="_blank" rel="noopener" class="c-btn c-btn--white c-btn--icon c-pdf-link__btn">
                                <span>機器設計</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/pdf/3D_laser_measurement_of_plant_equipment.pdf" target="_blank" rel="noopener" class="c-btn c-btn--white c-btn--icon c-pdf-link__btn">
                                <span>プラント設備の3次元レーザー計測</span>
                            </a>
                        </li>
                    </ul>
                </section>

                <section id="a-electrical" class="p-project-electricity-sec">
                    <h2 class="c-headline08 p-project-ttl">電気・計装</h2>
                    <div class="p-project-ttl-img">
                        <picture>
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/project-business/project__hd__img03__pc.webp" media="(min-width:1024px)" type="image/webp" />
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/project-business/project__hd__img03__pc.jpg" media="(min-width:1024px)" />
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/project-business/project__hd__img03__sp.webp" type="image/webp" />
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/project-business/project__hd__img03__sp.jpg" width="390" height="132" />
                        </picture>
                        <div class="num">03</div>
                    </div>
                    <h3 class="p-project-hd3">電気はプラントの血液、計装は神経。<br>高いポテンシャルで動きを作り、流れを制御し、<br class="u-pc-only">効率のよいトータルシステムを構築します。</h3>
                    <p class="p-project-txt">プラントや設備は、高い精度を要求される機械部分、厳密なコントロールが求められる制御部分、電気関連部分などの集合体です。<br>そして、そのベースになっているのが、「電気・計装」に関する技術であり、当社では、機電一括システムのノウハウの提供はもちろん、企画・基本設計の段階から参画いたします。<br>これまで蓄積してきたノウハウを活かし、様々な規模のプロジェクトにおいて、高度なレベルで対応し、プロジェクト進行に必要な情報を迅速に提供いたします。</p>
                    <h4 class="c-headline10 p-project-hd4"><span>【建設工事】<br class="u-sp-only">プラント電気工事<br class="u-sp-only">・プラント計装工事</span></h4>
                    <div class="p-project-engineering-wrap">
                        <div class="p-project-engineering-wrap-img">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/project-business/engineering__item__img01.webp" type="image/webp">
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/project-business/engineering__item__img01.jpg" type="image/jpeg">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/project-business/engineering__item__img01.jpg" width="700" height="372" alt="">
                            </picture>
                        </div>
                        <div class="p-project-engineering-wrap-txt">
                            <p>機電一括の施工・保全工事ノウハウを活かし、<br>安全かつ高品質な電気計装工事を行います。</p>
                            <ul>
                                <li>設計力と施工技術を融合・駆使させ計画通りに実施</li>
                                <li>計画から施工まで一貫した管理により、効率の高い施工を実現</li>
                                <li>盤設計、計器選定、調達・施工に至るまでトータルでおまかせください</li>
                                <li>設計から施工まで適切なネットワーク監視システムを施工</li>
                            </ul>
                        </div>
                    </div>
                    <h4 class="c-headline10 p-project-hd4"><span>【保全工事】<br class="u-sp-only">日常メンテナンス<br class="u-sp-only">・計器メンテナンス</span></h4>
                    <div class="p-project-engineering-wrap">
                        <div class="p-project-engineering-wrap-img">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/project-business/engineering__item__img02.webp" type="image/webp">
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/project-business/engineering__item__img02.jpg" type="image/jpeg">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/project-business/engineering__item__img02.jpg" width="700" height="372" alt="">
                            </picture>
                        </div>
                        <div class="p-project-engineering-wrap-txt">
                            <p>各種設備建設にて蓄積された技術を活かし、<br>お客様の要求するニーズにお応えします。</p>
                            <ul>
                                <li>日常点検を確実に行い、生産する製品の品質をサポート</li>
                                <li>設備と深い関わり合いのある計器のオーバーホールなども総合的に実施</li>
                                <li>お客様設備に精通した保全方法の提案と安定操業への貢献</li>
                            </ul>
                        </div>
                    </div>
                    <h4 class="c-headline10 p-project-hd4"><span>【空調計装工事】<br class="u-sp-only">オフィスビル<br class="u-sp-only">・商業施設<br class="u-sp-only">・病院施設</span></h4>
                    <div class="p-project-engineering-wrap">
                        <div class="p-project-engineering-wrap-img">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/project-business/engineering__item__img03.webp" type="image/webp">
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/project-business/engineering__item__img03.jpg" type="image/jpeg">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/project-business/engineering__item__img03.jpg" width="700" height="372" alt="">
                            </picture>
                        </div>
                        <div class="p-project-engineering-wrap-txt">
                            <p>施工から調整までの一貫した施工体制で、<br>信頼性の高い施工を実現します。</p>
                            <ul>
                                <li>一貫施工システムによって効率の高い施工を実現</li>
                                <li>建築、設備工程に合わせた迅速な対応</li>
                                <li>これまでのノウハウを活かし施設に応じた施工法で高い信頼性を確保</li>
                            </ul>
                        </div>
                    </div>
                    <h4 class="c-headline10 p-project-hd4"><span>【制御工事】<br class="u-sp-only">装置制御システム</span></h4>
                    <div class="p-project-engineering-wrap">
                        <div class="p-project-engineering-wrap-img">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/project-business/engineering__item__img04.webp" type="image/webp">
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/project-business/engineering__item__img04.jpg" type="image/jpeg">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/project-business/engineering__item__img04.jpg" width="700" height="372" alt="">
                            </picture>
                        </div>
                        <div class="p-project-engineering-wrap-txt">
                            <p>経験豊富なスタッフが複雑で高度な装置制御システムの<br>設計から試運転調整まで一貫実施。</p>
                            <ul>
                                <li>PLCを中心とした「電気・計装」技術を活かした高度な制御システム</li>
                                <li>基本設計の段階から参画し、お客様のニーズに応じたシステムを提案</li>
                                <li>各種PLCを使用した制御・監視システムを構築</li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <aside class="l-sidebar">
            <?php get_template_part('assets/inc/side-nav_business'); ?>
        </aside>
    </div>

    <?php get_template_part('assets/inc/cta'); ?>
</main>

<?php get_template_part('assets/inc/nav-footer'); ?>
<?php get_footer();?>