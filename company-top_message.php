<?php /*Template Name: 企業情報-トップメッセージ*/ ?>

<?php get_header();?>
<?php get_template_part('assets/inc/nav-header'); ?>

<main class="l-main">
    <div class="c-page-ttl">
        <div class="u-container u-container--wide">
            <div class="c-page-ttl__txt">
                <p class="c-page-ttl__big"><span>Top Message</span></p>
                <h1 class="c-page-ttl__small"><span>トップメッセージ</span></h1>
            </div>
        </div>
    </div>

    <div class="c-breadcrumbs u-container u-container--wide">
        <ul>
            <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="/"><span itemprop="name"><svg class="home-icon" xmlns="http://www.w3.org/2000/svg" width="15" height="13.9" viewBox="0 0 15 13.9" xml:space="preserve" role="img" aria-label="HOME"><path d="M5.8 13.9V9.2h3.5v4.6h3.5V6.9H15L7.5 0 0 6.9h2.3v6.9h3.5z"/></svg></span><meta itemprop="position" content="1"></a>
            </li>
            <li class="separ">|</li>
            <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="/company/"><span itemprop="name">企業情報</span></a><meta itemprop="position" content="2">
            </li>
            <li class="separ">|</li>
            <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                <span itemprop="name">トップメッセージ</span><meta itemprop="position" content="3">
            </li>
        </ul>
    </div>

    <div class="l-main__inner l-main__inner--col2 u-container u-container--wide">
        <div class="l-contents l-contents--col2">
            <div class="p-top-message">
                <div class="p-top-message-mv">
                    <figure class="p-top-message-mv__img u-of">
                        <picture>
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/top-message/mv__img.webp" type="image/webp">
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/top-message/mv__img.jpg" type="image/jpeg">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/top-message/mv__img.jpg" width="985" height="432" alt="">
                        </picture>
                    </figure>
                    <p class="p-top-message-mv__msg">サステナブルな企業への成長と挑戦</p>
                </div>
                <div class="p-top-message-txt">
                    <p class="p-top-message-txt__par">創業時から社員の胸に深く刻み込まれている、社是「純情・情熱・希望」は、今もなお引き継がれています。<br>素直な心と奥深い理性ある情熱。そして、常に夢多く明るい希望を持ち続け、成長・変化を惜しまない人間こそが、事業の継続において重要な存在であり、当社の強みであります。<br>1940年に創業した当社は、基礎素材産業をはじめ、さまざまな産業設備の設計から調達、製作、建設、メンテナンスまでを担い、国内外問わず各種産業の発展に携わってきました。創業から80年以上が経過した近年では、これまで培った技術・技能を活かし、装置事業やプロジェクト事業、設備診断事業へと範囲を拡大しながら、ICTやデジタル化を積極的に取り入れ、時代の変化に順応した事業を展開しています。<br>2022年からスタートした「第5次中期経営計画」を軸に、創業100周年の［みらい］に向けて、持続的な企業価値の向上と安定した成長を達成する企業となるべく、各種施策に取り組んでまいります。<br>これからも、より一層のご指導・ご支援を賜りますようお願い申し上げます。</p>
                    <div class="p-top-message-txt__sing">
                        <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/top-message/sing__img.svg" width="210.124" height="66.594" alt=""> -->
                        <p class="job">代表取締役社長</p>
                        <p class="name">髙田　寿一郎</p>
                    </div>
                </div>
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