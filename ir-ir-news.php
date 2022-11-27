<?php /*Template Name: IR情報 - IR News */ ?>

<?php get_header();?>
<?php get_template_part('assets/inc/nav-header'); ?>


<main class="l-main">
    <div class="c-page-ttl">
        <div class="u-container u-container--wide">
            <div class="c-page-ttl__txt">
                <p class="c-page-ttl__big"><span>IR News</span></p>
                <h1 class="c-page-ttl__small"><span>IRニュース</span></h1>
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
                <a itemprop="item" href="/"><span itemprop="name">IR情報</span><meta itemprop="position" content="3"></a>
            </li>
            <li class="separ">|</li>
            <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                <span itemprop="name">IRニュース</span><meta itemprop="position" content="3">
            </li>
        </ul>
    </div>

    <div class="l-main__inner l-main__inner--col2 u-container u-container--wide">
        <div class="l-contents l-contents--col2">
            <div class="p-ir-library">
                <!-- E-IR Parts -->
<div class="eir" data-area-name="area_news_007"></div>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/ir/eir/eir_v5.js" charset="utf-8"></script>
<script type="text/javascript">
scriptLoader.setSrc(eirPassCore + 'eir_common.js');
scriptLoader.load(
function(){setParts('file_news_008');  }, showMaintenanceMessage);
</script>
<!-- /E-IR Parts -->
            </div>
        </div>

        <aside class="l-sidebar">
            <nav class="c-side-nav js-acc">
                <div class="c-side-nav__ttl js-acc-toggle">
                    <a class="c-side-nav__ttl-link" href="/ir">
                        <span class="c-side-nav__main-ttl">IR情報</span>
                        <span class="c-side-nav__sub-ttl">Investory</span>
                    </a>
                    <div class="nav-toggle"></div>
                </div>
                <div class="c-side-nav__inr js-acc-submenu">
                    <ul class="c-side-nav__layer-1st">
                        <li class="js-acc">
                            <div class="c-side-nav__layer-1st-ttl nav-toggle js-acc-toggle"><a href="/ir/management-policy">経営方針</a></div>
                            <div class="js-acc-submenu">
                                <ul class="c-side-nav__layer-2nd">
                                    <li><a href="/ir/management-policy/corporate-governance">コーポレートガバナンス</a></li>
                                    <li><a href="/ir/management-policy/management-plan">中期経営計画</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="c-side-nav__layer-1st-ttl"><a href="/ir/financial-info">財務・業績情報</a></div>
                        </li>
                        <li class="js-acc">
                            <div class="c-side-nav__layer-1st-ttl nav-toggle js-acc-toggle"><a href="/ir/library">資料ライブラリ</a></div>
                            <div class="js-acc-submenu">
                                <ul class="c-side-nav__layer-2nd">
                                    <li><a href="/ir/library/finacial-restults">決算短信</a></li>
                                    <li><a href="/ir/library/securities-report">有価証券報告書</a></li>
                                    <li><a href="/ir/library/stockholders-metting">株主総会</a></li>
                                    <li><a href="/ir/library/annual-report">株主通信</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="js-acc">
                            <div class="c-side-nav__layer-1st-ttl nav-toggle js-acc-toggle"><a href="/ir/stocks-and-bonds">株式・債券情報</a></div>
                            <div class="js-acc-submenu">
                                <ul class="c-side-nav__layer-2nd">
                                    <li><a href="/ir/stocks-and-bonds/stock-overview">株式状況</a></li>
                                    <li><a href="/ir/stocks-and-bonds/stock-price-information">株価情報</a></li>
                                    <li><a href="/ir/stocks-and-bonds/electronic-public-notice">電子公告</a></li>
                                    <li><a href="/ir/stocks-and-bonds/stock-handling-rules">株式取扱規定</a></li>
                                    <li><a href="/ir/stocks-and-bonds/articles-of-incorporation">定款</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="is-current">
                            <div class="c-side-nav__layer-1st-ttl"><a href="/ir/ir-news">IRニュース</a></div>
                        </li>
                    </ul>
                </div>
            </nav>
        </aside>
    </div>
    <?php get_template_part('assets/inc/cta'); ?>
</main>

<?php get_template_part('assets/inc/nav-footer'); ?>
<?php get_footer();?>
