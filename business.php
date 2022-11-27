<?php /*Template Name: 事業紹介*/ ?>

<?php get_header();?>
<?php get_template_part('assets/inc/nav-header'); ?>

<main class="l-main">
    <div class="c-page-ttl">
        <div class="u-container u-container--wide">
            <div class="c-page-ttl__txt">
                <p class="c-page-ttl__big"><span>Business</span></p>
                <h1 class="c-page-ttl__small"><span>事業紹介</span></h1>
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
                <span itemprop="name">事業紹介</span><meta itemprop="position" content="2">
            </li>
        </ul>
    </div>

    <div class="l-main__inner u-container u-container--wide">
        <div class="l-contents">
            <div class="p-business">
                <h2 class="p-business-hd">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/business__hd__img.svg" width="670" height="520" alt="">
                </h2>
                <p class="p-business-txt">TAKADAは創業以来、プラント事業を柱に様々な事業を展開してきました。<br>その中から派生して生まれた新たな事業領域を更に拡大させ、TAKADAの付加価値向上・生産性の向上を図っています。<br>TAKADAを創り出す「プラント事業」・「プロジェクト事業」・「設備診断事業」・「装置事業」の4事業は<br>それぞれが確立する中で、相互にリンクしあい、TAKADAを支える柱となっています。<br>高い技術力とこれまで蓄積してきた技術を活かし、各事業でTAKADAの名を世界に拡大していきます。</p>

                <ul class="p-business-type-list">
                    <li>
                        <div class="p-business-type-list-img">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/business__type__img01__pc.webp" media="(min-width:1024px)" type="image/webp" />
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/business__type__img01__pc.jpg" media="(min-width:1024px)" />
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/business__type__img01__sp.webp" type="image/webp" />
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/business__type__img01__sp.jpg" width="390" height="166" />
                            </picture>
                            <div class="p-business-type-list-img-num left">01</div>
                        </div>
                        <div class="p-business-type-list-txt">
                            <h3 class="c-headline09">
                                <span>プラント事業</span>
                            </h3>
                            <a href="/business/plant-business/" class="c-btn c-btn--white"><span>詳しく見る</span></a>
                        </div>
                    </li>
                    <li>
                        <div class="p-business-type-list-img">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/business__type__img02__pc.webp" media="(min-width:1024px)" type="image/webp" />
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/business__type__img02__pc.jpg" media="(min-width:1024px)" />
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/business__type__img02__sp.webp" type="image/webp" />
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/business__type__img02__sp.jpg" width="390" height="166" />
                            </picture>
                            <div class="p-business-type-list-img-num right">02</div>
                        </div>
                        <div class="p-business-type-list-txt">
                            <h3 class="c-headline09">
                                <span>プロジェクト事業</span>
                            </h3>
                            <a href="/business/project-business/" class="c-btn c-btn--white"><span>詳しく見る</span></a>
                        </div>
                    </li>
                    <li>
                        <div class="p-business-type-list-img">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/business__type__img03__pc.webp" media="(min-width:1024px)" type="image/webp" />
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/business__type__img03__pc.jpg" media="(min-width:1024px)" />
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/business__type__img03__sp.webp" type="image/webp" />
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/business__type__img03__sp.jpg" width="390" height="166" />
                            </picture>
                            <div class="p-business-type-list-img-num left">03</div>
                        </div>
                        <div class="p-business-type-list-txt">
                            <h3 class="c-headline09">
                                <span>設備診断事業</span>
                            </h3>
                            <a href="/business/edb/" class="c-btn c-btn--white"><span>詳しく見る</span></a>
                        </div>
                    </li>
                    <li>
                        <div class="p-business-type-list-img">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/business__type__img04__pc.webp" media="(min-width:1024px)" type="image/webp" />
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/business__type__img04__pc.jpg" media="(min-width:1024px)" />
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/business__type__img04__sp.webp" type="image/webp" />
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/business__type__img04__sp.jpg" width="390" height="166" />
                            </picture>
                            <div class="p-business-type-list-img-num right">04</div>
                        </div>
                        <div class="p-business-type-list-txt">
                            <h3 class="c-headline09">
                                <span>装置事業</span>
                            </h3>
                            <a href="/business/eeb/" class="c-btn c-btn--white"><span>詳しく見る</span></a>
                        </div>
                    </li>
                </ul>
                <a href="/business/pcm/" class="p-business-banner">
                    <picture>
                        <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/business_banner.webp" type="image/webp">
                        <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/business_banner.jpg" type="image/jpeg">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/business_banner.jpg" width="900" height="300" alt="創る-PRODUCTION 築く-CONSTRUCTION 守る-MAINTENANCE">
                    </picture>
                </a>
            </div>
        </div>
    </div>

    <?php get_template_part('assets/inc/cta'); ?>
</main>

<?php get_template_part('assets/inc/nav-footer'); ?>
<?php get_footer();?>
