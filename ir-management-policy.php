<?php /*Template Name: IR情報 - 経営方針 */ ?>

<?php get_header();?>
<?php get_template_part('assets/inc/nav-header'); ?>

<main class="l-main">
    <div class="c-page-ttl">
        <div class="u-container u-container--wide">
            <div class="c-page-ttl__txt">
                <p class="c-page-ttl__big"><span>Management Policy</span></p>
                <h1 class="c-page-ttl__small"><span>経営方針</span></h1>
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
                <span itemprop="name">経営方針</span><meta itemprop="position" content="3">
            </li>
        </ul>
    </div>

    <div class="l-main__inner l-main__inner--col2 u-container u-container--wide">
        <div class="l-contents l-contents--col2">
            <ul class="c-subpage-list">
                <li class="c-subpage-item">
                    <div class="c-subpage-item__img u-of">
                        <a href="/ir/management-policy/management-plan/" class="u-hover-fade">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ir/management-policy/subpage-list__img01.webp" type="image/webp">
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ir/management-policy/subpage-list__img01.jpg" type="image/jpeg">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ir/management-policy/subpage-list__img01.jpg" width="292" height="167" alt="">
                            </picture>
                        </a>
                    </div>
                    <p class="c-subpage-item__subttl">01</p>
                    <h2 class="c-subpage-item__ttl">中期経営計画</h2>
                </li>
                <li class="c-subpage-item">
                    <div class="c-subpage-item__img u-of">
                        <a href="/sustainability/governance/" class="u-hover-fade">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ir/management-policy/subpage-list__img02.webp" type="image/webp">
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ir/management-policy/subpage-list__img02.jpg" type="image/jpeg">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ir/management-policy/subpage-list__img02.jpg" width="292" height="167" alt="">
                            </picture>
                        </a>
                    </div>
                    <p class="c-subpage-item__subttl">02</p>
                    <h2 class="c-subpage-item__ttl">コーポレートガバナンス</h2>
                </li>
            </ul>
        </div>

        <aside class="l-sidebar">
            <?php get_template_part('assets/inc/side-nav_ir'); ?>
        </aside>
    </div>
    <?php get_template_part('assets/inc/cta'); ?>
</main>

<?php get_template_part('assets/inc/nav-footer'); ?>
<?php get_footer();?>
