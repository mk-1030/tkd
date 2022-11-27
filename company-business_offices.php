<?php /*Template Name: 企業情報-拠点一覧*/ ?>

<?php get_header();?>
<?php get_template_part('assets/inc/nav-header'); ?>

<main class="l-main">
    <div class="c-page-ttl">
        <div class="u-container u-container--wide">
            <div class="c-page-ttl__txt">
                <p class="c-page-ttl__big"><span>Business Offices</span></p>
                <h1 class="c-page-ttl__small"><span>拠点一覧</span></h1>
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
                <span itemprop="name">拠点一覧</span><meta itemprop="position" content="3">
            </li>
        </ul>
    </div>

    <div class="l-main__inner l-main__inner--col2 u-container u-container--wide">
        <div class="l-contents l-contents--col2">
            <div class="p-biz-offices">
                <div class="c-headline01 p-biz-offices__ttl">
                    <p class="c-headline01__big"><span>Domestic Base</span></p>
                    <p class="c-headline01__small"><span>国内拠点</span></p>
                </div>
                <figure class="p-biz-offices__map">
                    <picture>
                        <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/business-offices/map__img.webp" type="image/webp">
                        <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/business-offices/map__img.png" type="image/png">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/business-offices/map__img.png" width="552" height="543" alt="">
                    </picture>
                </figure>

                <section class="p-biz-offices-sec">
                    <h2 class="c-headline02 p-biz-offices-sec-ttl">本社・営業拠点 他</h2>
                    <ul class="p-biz-offices-sec-list">
                        <li class="p-biz-offices-sec-item">
                            <h3 class="p-biz-offices-sec-item__ttl c-headline06"><span class="u-tc-blue">本社</span>／西日本営業部</h3>
                            <p class="p-biz-offices-sec-item__txt">〒806-8567<br>福岡県北九州市八幡西区築地町1番1号<br>TEL : 093-632-2631 <br>FAX : 093-632-2713</p>
                            <a href="https://goo.gl/maps/FUhJ16FMDKDsKdX17" target="_blank" rel="noopener" class="c-btn c-btn--white c-btn--icon p-biz-offices-sec-item__btn">
                                <span>Google Mapで見る</span>
                            </a>
                        </li>
                        <li class="p-biz-offices-sec-item">
                            <h3 class="p-biz-offices-sec-item__ttl c-headline06">東京支店</h3>
                            <p class="p-biz-offices-sec-item__txt">〒108-6110<br>東京都港区港南二丁目15-2<br>品川インターシティB棟10階<br>TEL : 03-5781-3541<br>FAX : 03-5781-3548</p>
                            <a href="https://goo.gl/maps/YjQWjDk42Vtuwiyc8" target="_blank" rel="noopener" class="c-btn c-btn--white c-btn--icon p-biz-offices-sec-item__btn">
                                <span>Google Mapで見る</span>
                            </a>
                        </li>
                        <li class="p-biz-offices-sec-item">
                            <h3 class="p-biz-offices-sec-item__ttl c-headline06">テクニカルセンター（装置事業部）</h3>
                            <p class="p-biz-offices-sec-item__txt">〒806-8567<br>福岡県北九州市八幡西区築地町2番1号<br>TEL : 093-632-2600<br>FAX : 093-632-2625</p>
                            <a href="https://goo.gl/maps/fTBYB8NiRRtojpcAA" target="_blank" rel="noopener" class="c-btn c-btn--white c-btn--icon p-biz-offices-sec-item__btn">
                                <span>Google Mapで見る</span>
                            </a>
                        </li>
                        <li class="p-biz-offices-sec-item">
                            <h3 class="p-biz-offices-sec-item__ttl c-headline06">研修センター</h3>
                            <p class="p-biz-offices-sec-item__txt">〒808-0143<br>福岡県北九州市若松区青葉台西六丁目1-1<br>TEL : 093-742-3330<br>FAX : 093-742-3338</p>
                            <a href="https://goo.gl/maps/cDqFaLGrT1TeQ9hw5" target="_blank" rel="noopener" class="c-btn c-btn--white c-btn--icon p-biz-offices-sec-item__btn">
                                <span>Google Mapで見る</span>
                            </a>
                        </li>
                    </ul>
                </section>

                <section class="p-biz-offices-sec">
                    <h2 class="c-headline02 p-biz-offices-sec-ttl">支社・事業所</h2>
                    <ul class="p-biz-offices-sec-list">
                        <li class="p-biz-offices-sec-item">
                            <h3 class="p-biz-offices-sec-item__ttl c-headline06">北海道事業所</h3>
                            <p class="p-biz-offices-sec-item__txt">〒053-0018<br>北海道苫小牧市旭町３丁目７番６号<br>グランドール旭町１階<br>TEL : 0144-82-7590<br>FAX : 0144-82-7591</p>
                        </li>
                        <li class="p-biz-offices-sec-item">
                            <h3 class="p-biz-offices-sec-item__ttl c-headline06">鹿島事業所</h3>
                            <p class="p-biz-offices-sec-item__txt">〒314-0255<br>茨城県神栖市砂山2668番15<br>TEL : 0479-46-3615<br>FAX : 0479-46-3616</p>
                        </li>
                        <li class="p-biz-offices-sec-item">
                            <h3 class="p-biz-offices-sec-item__ttl c-headline06">君津支社</h3>
                            <p class="p-biz-offices-sec-item__txt">〒299-1141<br>千葉県君津市君津1番地<br>日本製鉄（株）東日本製鉄所 君津地区構内<br>TEL : 0439-52-1070<br>FAX : 0439-52-1072</p>
                        </li>
                        <li class="p-biz-offices-sec-item">
                            <h3 class="p-biz-offices-sec-item__ttl c-headline06">京葉支社</h3>
                            <p class="p-biz-offices-sec-item__txt">〒290-0056<br>千葉県市原市五井9118番地<br>TEL : 0436-22-9921<br>FAX : 0436-23-3929</p>
                        </li>
                        <li class="p-biz-offices-sec-item">
                            <h3 class="p-biz-offices-sec-item__ttl c-headline06">四日市事業所</h3>
                            <p class="p-biz-offices-sec-item__txt">〒510-0845<br>三重県四日市市海山道町一丁目1455番地<br>TEL : 059-345-1441<br>FAX : 059-346-5010</p>
                        </li>
                        <li class="p-biz-offices-sec-item">
                            <h3 class="p-biz-offices-sec-item__ttl c-headline06">長浜事業所</h3>
                            <p class="p-biz-offices-sec-item__txt">〒526-0021<br>滋賀県長浜市八幡中山町372番地<br>TEL : 0749-62-1936<br>FAX : 0749-63-2125</p>
                        </li>
                        <li class="p-biz-offices-sec-item">
                            <h3 class="p-biz-offices-sec-item__ttl c-headline06">大阪事業所</h3>
                            <p class="p-biz-offices-sec-item__txt">〒590-0901<br>大阪府堺市堺区築港八幡町1番地<br>日本製鉄（株）<br>関西製鉄所 和歌山地区（堺）構内<br>TEL : 072-228-0221<br>FAX : 072-228-0223</p>
                        </li>
                        <li class="p-biz-offices-sec-item">
                            <h3 class="p-biz-offices-sec-item__ttl c-headline06">中四国支社</h3>
                            <p class="p-biz-offices-sec-item__txt">〒712-8052<br>岡山県倉敷市松江二丁目8番6号<br>TEL : 086-455-5676<br>FAX : 086-456-2035</p>
                        </li>
                        <li class="p-biz-offices-sec-item">
                            <h3 class="p-biz-offices-sec-item__ttl c-headline06">八幡支社</h3>
                            <p class="p-biz-offices-sec-item__txt">〒804-0001<br>福岡県北九州市戸畑区飛幡町1番1号<br>日本製鉄（株）<br>九州製鉄所 八幡地区 戸畑構内<br>TEL : 093-872-5361<br>FAX : 093-872-5362</p>
                        </li>
                        <li class="p-biz-offices-sec-item">
                            <h3 class="p-biz-offices-sec-item__ttl c-headline06">本社工場</h3>
                            <p class="p-biz-offices-sec-item__txt">〒806-8567<br>福岡県北九州市八幡西区築地町7番1号<br>TEL : 093-632-2682<br>FAX : 093-632-2683</p>
                        </li>
                    </ul>
                </section>

                <section class="p-biz-offices-sec">
                    <h2 class="c-headline02 p-biz-offices-sec-ttl">工場</h2>
                    <ul class="p-biz-offices-sec-list">
                        <li class="p-biz-offices-sec-item">
                            <h3 class="p-biz-offices-sec-item__ttl c-headline06">君津工場</h3>
                            <p class="p-biz-offices-sec-item__txt">〒299-1147<br>千葉県君津市人見1031番地の1<br>TEL : 0439-52-1006<br>FAX : 0439-52-1007</p>
                        </li>
                        <li class="p-biz-offices-sec-item">
                            <h3 class="p-biz-offices-sec-item__ttl c-headline06">四日市工場</h3>
                            <p class="p-biz-offices-sec-item__txt">〒512-1205<br>三重県四日市市平尾町2370番地の1<br>TEL : 059-326-6330<br>FAX : 059-326-6331</p>
                        </li>
                        <li class="p-biz-offices-sec-item">
                            <h3 class="p-biz-offices-sec-item__ttl c-headline06">長浜工場</h3>
                            <p class="p-biz-offices-sec-item__txt">〒529-0311<br>滋賀県長浜市小谷美濃山町80-1<br>TEL : 0749-78-0001<br>FAX : 0749-78-0004</p>
                        </li>
                        <li class="p-biz-offices-sec-item">
                            <h3 class="p-biz-offices-sec-item__ttl c-headline06">水島工場</h3>
                            <p class="p-biz-offices-sec-item__txt">〒712-8052<br>岡山県倉敷市松江二丁目8番6号<br>TEL : 086-455-5676<br>FAX : 086-456-2035</p>
                        </li>
                        <li class="p-biz-offices-sec-item">
                            <h3 class="p-biz-offices-sec-item__ttl c-headline06">宇部工場</h3>
                            <p class="p-biz-offices-sec-item__txt">〒759-0204<br>山口県宇部市妻崎開作768-1<br>TEL : 0836-41-8454<br>FAX : 0836-43-1547</p>
                        </li>
                    </ul>
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