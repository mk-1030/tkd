<?php /*Template Name: IR情報 - 株式・債券情報 - 株式状況 */ ?>

<?php get_header();?>
<?php get_template_part('assets/inc/nav-header'); ?>

<main class="l-main">
    <div class="c-page-ttl">
        <div class="u-container u-container--wide">
            <div class="c-page-ttl__txt">
                <p class="c-page-ttl__big"><span>Stock overview</span></p>
                <h1 class="c-page-ttl__small"><span>株式状況</span></h1>
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
                <a itemprop="item" href="/ir/"><span itemprop="name">IR情報</span><meta itemprop="position" content="2"></a>
            </li>
            <li class="separ">|</li>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="/ir/stocks-and-bonds/"><span itemprop="name">株式・債券情報</span></a><meta itemprop="position" content="3">
            </li>
            <li class="separ">|</li>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <span itemprop="name">株式状況</span><meta itemprop="position" content="4">
            </li>
        </ul>
    </div>

    <div class="l-main__inner l-main__inner--col2 u-container u-container--wide">
        <div class="l-contents l-contents--col2">
            <div class="p-ir-sov">
                <section class="p-ir-sov-sec">
                    <h2 class="c-headline03 p-ir-sov-ttl">株式の状況（2022年9月30日現在）</h2>
                    <div class="p-ir-sov-table-wrap">
                        <table class="p-ir-sov-table-02">
                            <tr>
                                <th colspan="3">発行可能株式総数</th>
                            </tr>
                            <tr>
                                <th colspan="2">普通株式</th>
                                <td>41,383,800株</td>
                            </tr>
                            <tr class="two-column">
                                <th rowspan="3">優先株式</th>
                                <th>B種株式</th>
                                <td>5,000,000株</td>
                            </tr>
                            <tr class="two-column">
                                <th>D種株式</th>
                                <td>4,000,000株</td>
                            </tr>
                            <tr class="two-column">
                                <th>E種株式</th>
                                <td>1,000,000株</td>
                            </tr>
                        </table>
                    </div>

                    <div class="p-ir-sov-table-wrap">
                        <table class="p-ir-sov-table-02">
                            <tr>
                                <th colspan="3">発行済株式の総数</th>
                            </tr>
                            <tr>
                                <th colspan="2">普通株式</th>
                                <td>7,220,950株</td>
                            </tr>
                            <tr class="two-column">
                                <th>優先株式</th>
                                <th>B種株式</th>
                                <td>1,500,000株</td>
                            </tr>
                            <tr>
                            </tr>
                        </table>
                    </div>

                    <div class="p-ir-sov-table-wrap">
                        <table class="p-ir-sov-table-02">
                            <tr>
                                <th colspan="3">株主数</th>
                            </tr>
                            <tr>
                                <th colspan="2">普通株式</th>
                                <td>2,643名</td>
                            </tr>
                            <tr class="two-column">
                                <th>優先株式</th>
                                <th>B種株式</th>
                                <td>1名</td>
                            </tr>
                        </table>
                    </div>
                </section>

                <section class="p-ir-sov-sec">
                    <h2 class="c-headline03 p-ir-sov-ttl">大株主（上位10名）</h2>

                    <div class="p-ir-sov-table-wrap">
                        <table class="p-ir-sov-table three-column">
                            <tr>
                                <th>株主名</th>
                                <th>持株数<br class="u-sp-only">（千株）</th>
                                <th>持株比率<br class="u-sp-only">（%）</th>
                            </tr>
                            <tr>
                                <td>株式会社福岡銀行</td>
                                <td>1,812</td>
                                <td>23.15</td>
                            </tr>
                            <tr>
                                <td>西日本興産株式会社</td>
                                <td>785</td>
                                <td>10.03</td>
                            </tr>
                            <tr>
                                <td>光通信株式会社</td>
                                <td>482</td>
                                <td>6.17</td>
                            </tr>
                            <tr>
                                <td>日本製鉄株式会社</td>
                                <td>404</td>
                                <td>5.17</td>
                            </tr>
                            <tr>
                                <td>高田工業所社員持株会</td>
                                <td>344</td>
                                <td>4.40</td>
                            </tr>
                            <tr>
                                <td>株式会社三菱UFJ銀行</td>
                                <td>281</td>
                                <td>3.60</td>
                            </tr>
                            <tr>
                                <td>INTERACTIVE BROKERS LLC</td>
                                <td>190</td>
                                <td>2.44</td>
                            </tr>
                            <tr>
                                <td>LIC株式会社UH Partners 2</td>
                                <td>120</td>
                                <td>1.54</td>
                            </tr>
                            <tr>
                                <td>蒲生 逸郎</td>
                                <td>115</td>
                                <td>1.47</td>
                            </tr>
                            <tr>
                                <td>嶋 陽一</td>
                                <td>112</td>
                                <td>1.43</td>
                            </tr>
                        </table>
                    </div>
                    <ul class="p-ir-sov-notice">
                        <li class="u-f-palt">※1 当社は、自己株式を892.352株保有しておりますが、上記大株主からは除外しております。</li>
                        <li class="u-f-palt">※2 持株比率は、自己株式を控除して算出しております。</li>
                        <li class="u-f-palt">※3 株式会社福岡銀行が保有する当社株式には、優先株式（B種株式）1,500,000株が含まれております。なお、本優先株式は議決権を有しておりません。</li>
                    </ul>
                </section>

                <section class="p-ir-sov-sec">
                    <h2 class="c-headline03 p-ir-sov-ttl">株式の分布状況（普通株式）</h2>
                    <div class="p-ir-sov-dist">
                        <div class="p-ir-sov-dist-item">
                            <div class="p-ir-sov-dist-item-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ir/stocks-and-bonds/stock-overview/sov__dist__img01.svg" alt="">
                            </div>
                            <h3></h3>
                            <ul class="p-ir-sov-dist-item-list">
                                <li><span>金融機関・証券会社</span></li>
                                <li><span>その他法人</span></li>
                                <li><span>個人その他</span></li>
                                <li><span>外国法人・個人</span></li>
                            </ul>
                        </div>
                        <div class="p-ir-sov-dist-item">
                            <div class="p-ir-sov-dist-item-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ir/stocks-and-bonds/stock-overview/sov__dist__img02.svg" alt="">
                            </div>
                            <h3></h3>
                            <ul class="p-ir-sov-dist-item-list">
                                <li><span>50万株以上</span></li>
                                <li><span>10万株以上50万株未満</span></li>
                                <li><span>5万株以上10万株未満</span> </li>
                                <li><span>5万株未満</span></li>
                            </ul>
                        </div>
                    </div>
                    <ul class="p-ir-sov-notice">
                        <li>※当社は、自己株式を892,352株保有しておりますが、上記分布状況は、自己株式を控除して算出してります。</li>
                    </ul>
                </section>

                <section class="p-ir-sov-sec">
                    <h2 class="c-headline03 p-ir-sov-ttl">株価の推移</h2>
                    <div class="p-ir-sov-transition">
                        <div class="p-ir-sov-transition-item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ir/stocks-and-bonds/stock-overview/sov__transition__img01.svg" alt="">
                        </div>
                        <div class="p-ir-sov-transition-item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ir/stocks-and-bonds/stock-overview/sov__transition__img02.svg" alt="">
                        </div>
                    </div>
                </section>
            </div>
        </div>

        
        <aside class="l-sidebar">
            <?php get_template_part('assets/inc/side-nav_ir'); ?>
        </aside>
    </div>
    <?php get_template_part('assets/inc/cta'); ?>
</main>

<?php get_template_part('assets/inc/nav-footer'); ?>
<?php get_footer();?>