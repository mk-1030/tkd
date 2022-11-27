<?php /*Template Name: IR情報 */ ?>

<?php get_header();?>
<?php get_template_part('assets/inc/nav-header'); ?>

<main class="l-main">
    <div class="c-page-ttl">
        <div class="u-container u-container--wide">
            <div class="c-page-ttl__txt">
                <p class="c-page-ttl__big"><span>Investor Relations</span></p>
                <h1 class="c-page-ttl__small"><span>IR情報</span></h1>
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
                <span itemprop="name">IR情報</span><meta itemprop="position" content="2">
            </li>
        </ul>
    </div>

    <div class="l-main__inner l-main__inner--col2 u-container u-container--wide">
        <div class="l-contents l-contents--col2">
            <div class="p-ir">
                <div class="p-ir-news">
                    <h2 class="p-ir-news__ttl c-headline03 c-headline03--black">IRニュース</h2>
                    <!-- E-IR Parts -->
<div class="eir" data-area-name="area_top_001"></div>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/ir/eir/eir_v5.js" charset="utf-8"></script>
<script type="text/javascript">
scriptLoader.setSrc(eirPassCore + 'eir_common.js');
scriptLoader.load(
function(){setParts('file_top_001');  }, showMaintenanceMessage);
</script>
<!-- /E-IR Parts -->
                    <a href="/ir/ir-news" class="c-btn c-btn--small p-ir-news__btn u-pc-only">
                        <span>IRニュース一覧を見る</span>
                    </a>
                </div>

                <ul class="p-ir-link-list">
                    <li class="p-ir-link-item">
                        <div class="p-ir-link-item__img u-of">
                            <a href="/ir/management-policy" class="u-hover-fade">
                                <picture>
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ir/link__img01.webp" type="image/webp">
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ir/link__img01.jpg" type="image/jpeg">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ir/link__img01.jpg" width="449" height="216" alt="">
                                </picture>
                            </a>
                        </div>
                        <h2 class="p-ir-link-item__txt">経営方針</h2>
                    </li>
                    <li class="p-ir-link-item">
                        <div class="p-ir-link-item__img u-of">
                            <a href="/ir/financial-info" class="u-hover-fade">
                                <picture>
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ir/link__img02.webp" type="image/webp">
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ir/link__img02.jpg" type="image/jpeg">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ir/link__img02.jpg" width="449" height="216" alt="">
                                </picture>
                            </a>
                        </div>
                        <h2 class="p-ir-link-item__txt">財務・業績情報</h2>
                    </li>
                    <li class="p-ir-link-item">
                        <div class="p-ir-link-item__img u-of">
                            <a href="/ir/library/finacial-restults" class="u-hover-fade">
                                <picture>
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ir/link__img03.webp" type="image/webp">
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ir/link__img03.jpg" type="image/jpeg">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ir/link__img03.jpg" width="449" height="216" alt="">
                                </picture>
                            </a>
                        </div>
                        <h2 class="p-ir-link-item__txt">IRライブラリ</h2>
                    </li>
                    <li class="p-ir-link-item">
                        <div class="p-ir-link-item__img u-of">
                            <a href="/ir/stocks-and-bonds" class="u-hover-fade">
                                <picture>
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ir/link__img04.webp" type="image/webp">
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ir/link__img04.jpg" type="image/jpeg">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ir/link__img04.jpg" width="449" height="216" alt="">
                                </picture>
                            </a>
                        </div>
                        <h2 class="p-ir-link-item__txt">株式・債券情報</h2>
                    </li>
                </ul>
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
