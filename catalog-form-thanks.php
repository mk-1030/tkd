<?php /*Template Name: カタログダウンロード-完了画面 */ ?>

<?php get_header();?>
<?php get_template_part('assets/inc/nav-header'); ?>


<main class="l-main">
    <div class="c-page-ttl">
        <div class="u-container u-container--wide">
            <div class="c-page-ttl__txt">
                <p class="c-page-ttl__big"><span>Catalog</span></p>
                <h1 class="c-page-ttl__small"><span>カタログダウンロード</span></h1>
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
                <a itemprop="item" href="/catalog/"><span itemprop="name">カタログダウンロード</span></a><meta itemprop="position" content="2">
            </li>
            <li class="separ">|</li>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <span itemprop="name">完了画面</span><meta itemprop="position" content="3">
            </li>
        </ul>
    </div>

    <div class="l-main__inner u-container">
        <div class="l-contents">
            <div class="p-contact-thanks">
                <div class="p-contact-thanks__txt">
                    <p>カタログダウンロードのフォーム入力にご協力いただきまして、誠にありがとうございます。<br>下記の「ダウンローページへ進む」ボタンから、各種カタログをダウンロードをお願いします。</p>
                </div>
                <a href="/" class="c-btn p-contact-thanks__back">
                    <span>ダウンロードページへ進む</span>
                </a>
            </div>
        </div>
    </div>
</main>

<?php get_template_part('assets/inc/nav-footer'); ?>
<?php get_footer();?>
