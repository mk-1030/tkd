<?php /*Template Name: IR情報 - IRライブラリ - 株主総会 */ ?>

<?php get_header();?>
<?php get_template_part('assets/inc/nav-header'); ?>

<main class="l-main">
    <div class="c-page-ttl">
        <div class="u-container u-container--wide">
            <div class="c-page-ttl__txt">
                <p class="c-page-ttl__big"><span>IR Library</span></p>
                <p class="c-page-ttl__small"><span>IRライブラリ</span></p>
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
                <span itemprop="name">IRライブラリ</span><meta itemprop="position" content="3">
            </li>
        </ul>
    </div>

    <div class="l-main__inner l-main__inner--col2 u-container u-container--wide">
        <div class="l-contents l-contents--col2">
            <div class="p-ir-library">
                <nav class="c-cate-nav">
                    <ul class="c-cate-nav__list">
                        <li class="c-cate-nav__item"><a href="/ir/library/finacial-restults"><span>決算短信</span></a></li>
                        <li class="c-cate-nav__item"><a href="/ir/library/securities-report"><span>有価証券報告書</span></a></li>
                        <li class="c-cate-nav__item is-current"><a href="/ir/library/stockholders-metting"><span>株主総会</span></a></li>
                        <li class="c-cate-nav__item"><a href="/ir/library/annual-report"><span>株主通信</span></a></li>
                    </ul>
                </nav>

                <div class="c-headline01 p-ir-library-ttl">
                    <p class="c-headline01__big"><span>Stockholder’s Metting</span></p>
                    <h1 class="c-headline01__small"><span>株主総会</span></h1>
                </div>

              <!-- E-IR Parts -->
<div class="eir" data-area-name="area_meeting_005"></div>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/ir/eir/eir_v5.js" charset="utf-8"></script>
<script type="text/javascript">
scriptLoader.setSrc(eirPassCore + 'eir_common.js');
scriptLoader.load(
function(){setParts('file_ir_material_006');  }, showMaintenanceMessage);
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
