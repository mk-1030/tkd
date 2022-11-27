<?php /*Template Name: 企業情報-組織図*/ ?>

<?php get_header();?>
<?php get_template_part('assets/inc/nav-header'); ?>

<main class="l-main">
    <div class="c-page-ttl">
        <div class="u-container u-container--wide">
            <div class="c-page-ttl__txt">
                <p class="c-page-ttl__big"><span>Organization Chart</span></p>
                <h1 class="c-page-ttl__small"><span>組織図</span></h1>
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
                <a itemprop="item" href="/company/"><span itemprop="name">企業情報</span><meta itemprop="position" content="2"></a>
            </li>
            <li class="separ">|</li>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <span itemprop="name">組織図</span><meta itemprop="position" content="3">
            </li>
        </ul>
    </div>

    <div class="l-main__inner l-main__inner--col2 u-container u-container--wide">
        <div class="l-contents l-contents--col2">
            <div class="p-org-chart">
                <time data-time="2022-11" class="p-org-chart__current-time">2022年11月現在</time>
                <div class="p-org-chart__inr">
                    <ul class="p-org-chart__hire p-org-chart__hire--01 p-org-chart__hire--top">
                        <li class="p-org-chart__top-inr">
                            <p class="p-org-chart__sec-name p-org-chart__sec-name--top">取締役会</p>
                            <ul class="p-org-chart__hire">
                                <li><p class="p-org-chart__sec-name p-org-chart__sec-name--top">監査役会</p></li>
                            </ul>
                        </li>
                        <li><p class="p-org-chart__sec-name p-org-chart__sec-name--top">社長</p></li>
                    </ul>
                    <ul class="p-org-chart__hire p-org-chart__hire--01 p-org-chart__hire--normal">
                        <li><p class="p-org-chart__sec-name">経営企画部</p></li>
                        <li><p class="p-org-chart__sec-name">秘書部</p></li>
                        <li><p class="p-org-chart__sec-name">コンプライアンス推進室</p></li>
                        <li><p class="p-org-chart__sec-name">内部監査部</p></li>
                        <li><p class="p-org-chart__sec-name">安全衛生管理部</p></li>
                        <li><p class="p-org-chart__sec-name">品質保証部</p></li>
                        <li><p class="p-org-chart__sec-name">総務部</p></li>
                        <li><p class="p-org-chart__sec-name">人事部</p></li>
                        <li><p class="p-org-chart__sec-name">財務部</p></li>
                        <li><p class="p-org-chart__sec-name">情報システム部</p></li>
                        <li><p class="p-org-chart__sec-name">デジタル改革推進部</p></li>
                        <li><p class="p-org-chart__sec-name">調達部</p></li>
                        <li><p class="p-org-chart__sec-name">工事管理部</p></li>
                    </ul>
                    <ul class="p-org-chart__hire p-org-chart__hire--01 p-org-chart__hire--head">
                        <li>
                            <p class="p-org-chart__sec-name p-org-chart__sec-name--head">原子力事業部</p>
                            <ul class="p-org-chart__hire p-org-chart__hire--02">
                                <li><p class="p-org-chart__sec-name">原子力統括部</p></li>
                            </ul>
                        </li>
                        <li><p class="p-org-chart__sec-name p-org-chart__sec-name--head">装置事業部</p></li>
                        <li>
                            <p class="p-org-chart__sec-name p-org-chart__sec-name--head">営業本部</p>
                            <ul class="p-org-chart__hire">
                                <li><p class="p-org-chart__sec-name">営業企画部</p></li>
                                <li><p class="p-org-chart__sec-name">西日本営業部</p></li>
                                <li>
                                    <p class="p-org-chart__sec-name">東京支店</p>
                                    <ul class="p-org-chart__hire">
                                        <li><p class="p-org-chart__sec-name">東京営業一部</p></li>
                                        <li><p class="p-org-chart__sec-name">東京営業二部</p></li>
                                        <li><p class="p-org-chart__sec-name">東京営業三部</p></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <p class="p-org-chart__sec-name p-org-chart__sec-name--head">技術本部</p>
                            <ul class="p-org-chart__hire">
                                <li><p class="p-org-chart__sec-name">企画開発部</p></li>
                                <li><p class="p-org-chart__sec-name">診断サービス技術部</p></li>
                                <li><p class="p-org-chart__sec-name">エンジニアリング部</p></li>
                            </ul>
                        </li>
                        <li>
                            <p class="p-org-chart__sec-name p-org-chart__sec-name--head">プロジェクト事業本部</p>
                            <ul class="p-org-chart__hire">
                                <li><p class="p-org-chart__sec-name">企画管理部</p></li>
                                <li><p class="p-org-chart__sec-name">プロジェクト部</p></li>
                                <li><p class="p-org-chart__sec-name">電気計装部</p></li>
                                <li><p class="p-org-chart__sec-name">エレクトロニクス部</p></li>
                            </ul>
                        </li>
                        <li>
                            <p class="p-org-chart__sec-name p-org-chart__sec-name--head">プラント事業本部</p>
                            <ul class="p-org-chart__hire">
                                <li><p class="p-org-chart__sec-name">企画管理部</li>
                                <li><p class="p-org-chart__sec-name">本社工場</p></li>
                                <li><p class="p-org-chart__sec-name">八幡支社</p></li>
                                <li><p class="p-org-chart__sec-name">中四国支社</p></li>
                                <li><p class="p-org-chart__sec-name">大阪事業所</p></li>
                                <li><p class="p-org-chart__sec-name">長浜事業所</p></li>
                                <li><p class="p-org-chart__sec-name">四日市事業所</p></li>
                                <li><p class="p-org-chart__sec-name">京葉支社</p></li>
                                <li><p class="p-org-chart__sec-name">君津支社</p></li>
                                <li><p class="p-org-chart__sec-name">鹿島事業所</p></li>
                                <li><p class="p-org-chart__sec-name">北海道事業所</p></li>
                            </ul>
                        </li>
                    </ul>
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