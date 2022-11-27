<?php /*Template Name: 社内報 */ ?>

<?php get_header();?>
<?php get_template_part('assets/inc/nav-header'); ?>

<main class="l-main">
    <div class="c-page-ttl">
        <div class="u-container u-container--wide">
            <div class="c-page-ttl__txt">
                <p class="c-page-ttl__big"><span>Employee Magazine</span></p>
                <h1 class="c-page-ttl__small"><span>社内報</span></h1>
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
                <span itemprop="name">社内報</span><meta itemprop="position" content="2">
            </li>
        </ul>
    </div>

    <div class="l-main__inner l-main__inner--col2 u-container u-container--wide">
        <div class="l-contents">
            <div class="p-magazine">
                <section class="p-magazine-latest">
                    <h2 class="c-headline02 p-magazine-sec-ttl">最新号</h2>
                    
                    <div class="p-magazine-latest__inr">
                        <div class="p-magazine-latest__img">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/magazine__latest__img.webp" type="image/webp">
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/magazine__latest__img.jpg" type="image/jpeg">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/magazine__latest__img.jpg" width="435" height="621" alt="TAKADA Direct 2022挑戦10月号 Vol.646">
                            </picture>
                        </div>
                        <div class="p-magazine-latest__txt">
                            <h3 class="c-headline03 p-magazine-item-ttl">2022年10月号</h3>
                            <h4 class="p-magazine-latest__headline">特集</h4>
                            <p class="p-magazine-latest__caption"><span class="bold">みんなで『組織活力』高めよう！</span><br>長谷川専務とみらプロメンバー座談会</p>
                            <a href="https://my.ebook5.net/takada/nGLGDm/" class="c-btn c-btn--white p-magazine__btn" target="_blank" rel="noopener"><span>この号の記事を読む</span></a>
                        </div>
                    </div>
                </section>

                <section class="p-magazine-backnumber">
                    <h2 class="c-headline02 p-magazine-sec-ttl">バックナンバー</h2>
                    
                    <ul class="p-magazine-backnumber-list">
                        <li class="p-magazine-backnumber-item">
                            <div class="p-magazine-backnumber__img">
                                <picture>
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/magazine__backnumber__img01.webp" type="image/webp">
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/magazine__backnumber__img01.jpg" type="image/jpeg">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/magazine__backnumber__img01.jpg" width="263" height="376" alt="TAKADA Direct 2022挑戦7月号 Vol.645">
                                </picture>
                            </div>
                            <h3 class="c-headline03 p-magazine-item-ttl">2022年7月号</h3>
                            <a href="https://my.ebook5.net/takada/M7vlQq/" class="c-btn c-btn--white p-magazine__btn" target="_blank" rel="noopener"><span>この号の記事を読む</span></a>
                        </li>
                        <li class="p-magazine-backnumber-item">
                            <div class="p-magazine-backnumber__img">
                                <picture>
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/magazine__backnumber__img02.webp" type="image/webp">
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/magazine__backnumber__img02.jpg" type="image/jpeg">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/magazine__backnumber__img02.jpg" width="263" height="376" alt="TAKADA Direct 2022挑戦4月号 Vol.644">
                                </picture>
                            </div>
                            <h3 class="c-headline03 p-magazine-item-ttl">2022年4月号</h3>
                            <a href="https://my.ebook5.net/takada/kDlBgm/" class="c-btn c-btn--white p-magazine__btn" target="_blank" rel="noopener"><span>この号の記事を読む</span></a>
                        </li>
                        <li class="p-magazine-backnumber-item">
                            <div class="p-magazine-backnumber__img">
                                <picture>
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/magazine__backnumber__img03.webp" type="image/webp">
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/magazine__backnumber__img03.jpg" type="image/jpeg">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/magazine__backnumber__img03.jpg" width="263" height="376" alt="TAKADA Direct 2022変化1月号 Vol.643">
                                </picture>
                            </div>
                            <h3 class="c-headline03 p-magazine-item-ttl">2022年1月号</h3>
                            <a href="https://my.ebook5.net/takada/uPCXdf/" class="c-btn c-btn--white p-magazine__btn" target="_blank" rel="noopener"><span>この号の記事を読む</span></a>
                        </li>
                        <li class="p-magazine-backnumber-item">
                            <div class="p-magazine-backnumber__img">
                                <picture>
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/magazine__backnumber__img04.webp" type="image/webp">
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/magazine__backnumber__img04.jpg" type="image/jpeg">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/magazine__backnumber__img04.jpg" width="263" height="376" alt="TAKADA Direct 2021変化10月号 Vol.642">
                                </picture>
                            </div>
                            <h3 class="c-headline03 p-magazine-item-ttl">2021年10月号</h3>
                            <a href="https://my.ebook5.net/takada/Hr1nTm/" class="c-btn c-btn--white p-magazine__btn" target="_blank" rel="noopener"><span>この号の記事を読む</span></a>
                        </li>
                        <li class="p-magazine-backnumber-item">
                            <div class="p-magazine-backnumber__img">
                                <picture>
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/magazine__backnumber__img05.webp" type="image/webp">
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/magazine__backnumber__img05.jpg" type="image/jpeg">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/magazine__backnumber__img05.jpg" width="263" height="376" alt="TAKADA Direct 2022変化7月号 Vol.641">
                                </picture>
                            </div>
                            <h3 class="c-headline03 p-magazine-item-ttl">2021年7月号</h3>
                            <a href="https://my.ebook5.net/takada/mzTmUt/" class="c-btn c-btn--white p-magazine__btn" target="_blank" rel="noopener"><span>この号の記事を読む</span></a>
                        </li>
                        <li class="p-magazine-backnumber-item">
                            <div class="p-magazine-backnumber__img">
                                <picture>
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/magazine__backnumber__img06.webp" type="image/webp">
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/magazine__backnumber__img06.jpg" type="image/jpeg">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/magazine__backnumber__img06.jpg" width="263" height="376" alt="TAKADA Direct 2021変化4月号 Vol.640">
                                </picture>
                            </div>
                            <h3 class="c-headline03 p-magazine-item-ttl">2021年4月号</h3>
                            <a href="https://my.ebook5.net/takada/geuIsp/" class="c-btn c-btn--white p-magazine__btn" target="_blank" rel="noopener"><span>この号の記事を読む</span></a>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </div>

    <?php get_template_part('assets/inc/cta'); ?>
</main>

<?php get_template_part('assets/inc/nav-footer'); ?>
<?php get_footer();?>