<?php /*Template Name: 企業情報-会社情報*/ ?>

<?php get_header();?>
<?php get_template_part('assets/inc/nav-header'); ?>

<main class="l-main">
    <div class="c-page-ttl">
        <div class="u-container u-container--wide">
            <div class="c-page-ttl__txt">
                <p class="c-page-ttl__big"><span>About Us</span></p>
                <h1 class="c-page-ttl__small"><span>会社情報</span></h1>
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
                <a itemprop="item" href="/company/"><span itemprop="name">企業情報</span></a><meta itemprop="position" content="2">
            </li>
            <li class="separ">|</li>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <span itemprop="name">会社情報</span><meta itemprop="position" content="3">
            </li>
        </ul>
    </div>

    <div class="l-main__inner l-main__inner--col2 u-container u-container--wide">
        <div class="l-contents l-contents--col2">
            <div class="p-about-us">
                <section class="p-about-us__sec">
                    <div class="c-headline01 p-about-us__ttl">
                        <p class="c-headline01__big"><span>Company Profile</span></p>
                        <h2 class="c-headline01__small"><span>会社概要</span></h2>
                    </div>
                    <table class="c-table">
                        <tr>
                            <th>名称</th>
                            <td>株式会社 高田工業所（TAKADA CORPORATION）</td>
                        </tr>
                        <tr>
                            <th>所在地</th>
                            <td>〒806-8567 福岡県北九州市八幡西区築地町1番1号</td>
                        </tr>
                        <tr>
                            <th>創業</th>
                            <td>1940年9月26日</td>
                        </tr>
                        <tr>
                            <th>設立</th>
                            <td>1948年6月30日</td>
                        </tr>
                        <tr>
                            <th>従業員</th>
                            <td>1,480名（2022年4月1日現在）</td>
                        </tr>
                        <tr>
                            <th>資本金</th>
                            <td>36億4,235万円</td>
                        </tr>
                        <tr>
                            <th>決算期</th>
                            <td>3月</td>
                        </tr>
                    </table>
                </section>

                <section class="p-about-us__sec">
                    <div class="c-headline01 p-about-us__ttl">
                        <p class="c-headline01__big"><span>Permits and Licences</span></p>
                        <h2 class="c-headline01__small"><span>許認可など</span></h2>
                    </div>
                    <table class="c-table">
                        <tr>
                            <th>建設業法<br class="u-pc-only">特定建設業許可</th>
                            <td>建築工事業<br>とび・土工工事業<br>電気工事業<br>管工事業<br>鋼構造物工事業<br>塗装工事業<br>機械器具設置工事業<br>解体工事業</td>
                        </tr>
                        <tr>
                            <th>建設業法<br class="u-pc-only">一般建設業許可</th>
                            <td>電気通信工事業<br>消防施設工事業</td>
                        </tr>
                        <tr>
                            <th>電気工事業の<br class="u-pc-only">業務の適正化に<br class="u-pc-only">関する法律</th>
                            <td>通知電気工事業者</td>
                        </tr>
                        <tr>
                            <th>労働安全衛生法</th>
                            <td>各種製造許可<br>（第一種圧力容器、ボイラー、クレーン、デリック、ゴンドラ）</td>
                        </tr>
                        <tr>
                            <th>電気事業法</th>
                            <td>各種溶接の方法の確認</td>
                        </tr>
                        <tr>
                            <th>ガス事業法</th>
                            <td>各種溶接の方法の確認</td>
                        </tr>
                        <tr>
                            <th>高圧ガス保安法</th>
                            <td>大臣認定試験者（管類）の認定</td>
                        </tr>
                        <tr>
                            <th>原子炉等規制法</th>
                            <td>各種溶接の方法の認可</td>
                        </tr>
                        <tr>
                            <th>ISO 9001</th>
                            <td>《認証取得》<br>
                                <ul>
                                    <li>・本社各部門が行う各種産業設備のエンジニアリング、調達及び製造管理業務、診断サービス事業のエンジニアリング、調達、施工・診断サービス管理、診断サービスの提供、供給した機器のメンテナンス、部品供給及びアフターサービス業務</li>
                                    <li>・君津支社君津工場が行う各種産業設備の配管工事の内、電気事業法、ガス事業法、高圧ガス保安法及び消防法の適用配管の設計・製作・据付</li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </section>
            </div>
        </div>

        <aside class="l-sidebar">
            <?php get_template_part('assets/inc/side-nav_company'); ?>
        </aside>
    </div>
    <?php get_template_part('assets/inc/cta'); ?>
</main>

<?php get_template_part('assets/inc/nav-footer'); ?>
<?php get_footer();?>