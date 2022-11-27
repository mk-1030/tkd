<?php /*Template Name: IR情報 - 株式・債券情報 - 電子公告 */ ?>

<?php get_header();?>
<?php get_template_part('assets/inc/nav-header'); ?>


<main class="l-main">
    <div class="c-page-ttl">
        <div class="u-container u-container--wide">
            <div class="c-page-ttl__txt">
                <p class="c-page-ttl__big"><span>Electronic Public Notice</span></p>
                <h1 class="c-page-ttl__small"><span>電子公告</span></h1>
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
                <span itemprop="name">電子公告</span><meta itemprop="position" content="4">
            </li>
        </ul>
    </div>

    <div class="l-main__inner l-main__inner--col2 u-container u-container--wide">
        <div class="l-contents l-contents--col2">
            <div class="p-ir-library">
                <div class="p-ir-library-epn__txt">
                    <p>当社定款第4条の定めにより、法定公告の内容は当社ホームページにおいて掲載（電子公告）しております。<br>なお、事故やその他やむを得ない事由により電子公告をすることができない場合は、日本経済新聞に掲載いたします。</p>
                </div>
                <div class="p-ir-library-epn__nopost">
                    <p>現在、電子公告（法定公告）はございません。</p>
                </div>
                <!-- <ul class="c-posts-list c-posts-list--report">
                    <li class="c-posts-item">
                        <a href="/">
                            <div class="c-posts-item__txt">
                                <p class="c-posts-item__ttl">PDFファイル名が表示されますPDFファイル名が表示されます </p>
                                <p class="c-posts-item__pdf">100KB</p>
                            </div>
                        </a>
                    </li>
                </ul> -->
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
