<?php /*Template Name: IR情報 - 財務・業績情報 */ ?>

<?php get_header();?>
<?php get_template_part('assets/inc/nav-header'); ?>

<main class="l-main">
    <div class="c-page-ttl">
        <div class="u-container u-container--wide">
            <div class="c-page-ttl__txt">
                <p class="c-page-ttl__big"><span>Financial Info</span></p>
                <h1 class="c-page-ttl__small"><span>財務・業績情報</span></h1>
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
            <a itemprop="item" href="/"><span itemprop="name">IR情報</span></a><meta itemprop="position" content="2">
            </li>
            <li class="separ">|</li>
            <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                <span itemprop="name">財務・業績情報</span><meta itemprop="position" content="3">
            </li>
        </ul>
    </div>

    <div class="l-main__inner l-main__inner--col2 u-container u-container--wide">
        <div class="l-contents l-contents--col2">
        <div class="p-fin-info">
            <!-- E-IR Parts -->
<div class="qir" data-qir-area="area_highlight_002"></div>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/ir/eir/eir_v5.js"></script><script type="text/javascript">
  scriptLoader.setSrc('https://ssl4.eir-parts.net/Custom/public/material/v5qir/1.5.0/common.js');
  scriptLoader.load(function() {
    qir.load();
  });
</script>
<!-- /E-IR Parts -->
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
