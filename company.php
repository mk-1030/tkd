<?php /*Template Name: 企業情報*/ ?>

<?php get_header();?>
<?php get_template_part('assets/inc/nav-header'); ?>

<main class="l-main">
    <div class="c-page-ttl">
        <div class="u-container u-container--wide">
            <div class="c-page-ttl__txt">
                <p class="c-page-ttl__big"><span>Company</span></p>
                <h1 class="c-page-ttl__small"><span>企業情報</span></h1>
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
                <span itemprop="name">企業情報</span><meta itemprop="position" content="2">
            </li>
        </ul>
    </div>

    <div class="l-main__inner l-main__inner--col2 u-container u-container--wide">
        <div class="l-contents l-contents--col2">
            <ul class="c-subpage-list">
                <li class="c-subpage-item">
                    <div class="c-subpage-item__img u-of">
                        <a href="/company/top-message/" class="u-hover-fade">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/subpage-list__img01.webp" type="image/webp">
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/subpage-list__img01.jpg" type="image/jpeg">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/subpage-list__img01.jpg" width="292" height="167" alt="">
                            </picture>
                        </a>
                    </div>
                    <p class="c-subpage-item__subttl">01</p>
                    <h2 class="c-subpage-item__ttl">トップメッセージ</h2>
                </li>
                <li class="c-subpage-item">
                    <div class="c-subpage-item__img u-of">
                        <a href="/company/about-us/" class="u-hover-fade">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/subpage-list__img02.webp" type="image/webp">
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/subpage-list__img02.jpg" type="image/jpeg">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/subpage-list__img02.jpg" width="292" height="167" alt="">
                            </picture>
                        </a>
                    </div>
                    <p class="c-subpage-item__subttl">02</p>
                    <h2 class="c-subpage-item__ttl">会社情報</h2>
                </li>
                <li class="c-subpage-item">
                    <div class="c-subpage-item__img u-of">
                        <a href="/company/history/" class="u-hover-fade">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/subpage-list__img03.webp" type="image/webp">
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/subpage-list__img03.jpg" type="image/jpeg">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/subpage-list__img03.jpg" width="292" height="167" alt="">
                            </picture>
                        </a>
                    </div>
                    <p class="c-subpage-item__subttl">03</p>
                    <h2 class="c-subpage-item__ttl">ヒストリー</h2>
                </li>
                <li class="c-subpage-item">
                    <div class="c-subpage-item__img u-of">
                        <a href="/company/organization-chart/" class="u-hover-fade">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/subpage-list__img04.webp" type="image/webp">
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/subpage-list__img04.jpg" type="image/jpeg">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/subpage-list__img04.jpg" width="292" height="167" alt="">
                            </picture>
                        </a>
                    </div>
                    <p class="c-subpage-item__subttl">04</p>
                    <h2 class="c-subpage-item__ttl">組織図</h2>
                </li>
                <li class="c-subpage-item">
                    <div class="c-subpage-item__img u-of">
                        <a href="/company/officer-introduction/" class="u-hover-fade">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/subpage-list__img05.webp" type="image/webp">
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/subpage-list__img05.jpg" type="image/jpeg">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/subpage-list__img05.jpg" width="292" height="167" alt="">
                            </picture>
                        </a>
                    </div>
                    <p class="c-subpage-item__subttl">05</p>
                    <h2 class="c-subpage-item__ttl">役員一覧</h2>
                </li>
                <li class="c-subpage-item">
                    <div class="c-subpage-item__img u-of">
                        <a href="/company/business-offices/" class="u-hover-fade">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/subpage-list__img06.webp" type="image/webp">
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/subpage-list__img06.jpg" type="image/jpeg">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/subpage-list__img06.jpg" width="292" height="167" alt="">
                            </picture>
                        </a>
                    </div>
                    <p class="c-subpage-item__subttl">06</p>
                    <h2 class="c-subpage-item__ttl">拠点一覧</h2>
                </li>
                <li class="c-subpage-item">
                    <div class="c-subpage-item__img u-of">
                        <a href="/company/group-company/" class="u-hover-fade">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/subpage-list__img07.webp" type="image/webp">
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/subpage-list__img07.jpg" type="image/jpeg">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/subpage-list__img07.jpg" width="292" height="167" alt="">
                            </picture>
                        </a>
                    </div>
                    <p class="c-subpage-item__subttl">07</p>
                    <h2 class="c-subpage-item__ttl">グループ会社情報</h2>
                </li>
                <li class="c-subpage-item">
                    <div class="c-subpage-item__img u-of">
                        <a href="/company/takadas-strengths/" class="u-hover-fade">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/subpage-list__img08.webp" type="image/webp">
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/subpage-list__img08.jpg" type="image/jpeg">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/subpage-list__img08.jpg" width="292" height="167" alt="">
                            </picture>
                        </a>
                    </div>
                    <p class="c-subpage-item__subttl">08</p>
                    <h2 class="c-subpage-item__ttl">TAKADAの強み</h2>
                </li>
            </ul>
        </div>

        <aside class="l-sidebar">
            <?php get_template_part('assets/inc/side-nav_company'); ?>
        </aside>
    </div>
    <?php get_template_part('assets/inc/cta'); ?>
</main>

<?php get_template_part('assets/inc/nav-footer'); ?>
<?php get_footer();?>
