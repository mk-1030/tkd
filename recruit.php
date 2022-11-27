<?php /*Template Name: 採用情報 */ ?>

<?php get_header();?>
<?php get_template_part('assets/inc/nav-header'); ?>

<main class="l-main">
    <div class="c-page-ttl">
        <div class="u-container u-container--wide">
            <div class="c-page-ttl__txt">
                <p class="c-page-ttl__big"><span>Recruit</span></p>
                <h1 class="c-page-ttl__small"><span>採用情報</span></h1>
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
                <span itemprop="name">採用情報</span><meta itemprop="position" content="2">
            </li>
        </ul>
    </div>

    <div class="l-main__inner u-container u-container--wide">
        <div class="l-contents">
            <div class="p-recruit">
                <div class="p-recruit-mv">
                    <picture>
                        <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/recruit/recruit__mv.webp" type="image/webp">
                        <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/recruit/recruit__mv.jpg" type="image/jpeg">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/recruit/recruit__mv.jpg" width="1266" height="506" alt="TAKADA RECRUIT">
                    </picture>
                </div>
                <section id="a-recruit-admin-tec" class="p-recruit-sec">
                    <h2 class="c-headline08 p-recruit-ttl">事務・技術新卒採用</h2>
                    <a href="https://recruit.takada.co.jp/" target="_blank" rel="noopener" class="u-hover-fade p-recruit-banner">
                        <picture>
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/recruit/recruit__banner__img01.webp" type="image/webp">
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/recruit/recruit__banner__img01.png" type="image/png">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/recruit/recruit__banner__img01.png" width="340" height="110" alt="">
                        </picture>
                    </a>
                    <p class="p-recruit-txt">マイナビのバナーよりご応募ください。</p>
                    <a href="https://job.mynavi.jp/23/pc/search/corp969/outline.html" target="_blank" rel="noopener" class="u-hover-fade p-recruit-banner-mynavi">
                        <picture>
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/recruit/recruit__banner__mynavi__img01.webp" type="image/webp">
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/recruit/recruit__banner__mynavi__img01.png" type="image/png">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/recruit/recruit__banner__mynavi__img01.png" width="290" height="64" alt="マイナビ2023">
                        </picture>
                    </a>
                </section>
                <section id="a-recruit-high-school" class="p-recruit-sec">
                    <h2 class="c-headline08 p-recruit-ttl">技能新卒採用（高校生向け）</h2>
                    <a href="https://recruit.takada.co.jp/highschool/" target="_blank" rel="noopener" class="u-hover-fade p-recruit-banner">
                        <picture>
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/recruit/recruit__banner__img02.webp" type="image/webp">
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/recruit/recruit__banner__img02.png" type="image/png">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/recruit/recruit__banner__img02.png" width="340" height="110" alt="">
                        </picture>
                    </a>
                    <p class="p-recruit-txt">事業所紹介や先輩インタビューも掲載しています。ご応募は、学校を通じてお願いします。</p>
                </section>
                <section id="a-recruit-mid" class="p-recruit-sec">
                    <h2 class="c-headline08 p-recruit-ttl">中途採用</h2>
                    <a href="/recruit/career-recruit/" class="u-hover-fade p-recruit-banner">
                        <picture>
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/recruit/recruit__banner__img03.webp" type="image/webp">
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/recruit/recruit__banner__img03.png" type="image/png">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/recruit/recruit__banner__img03.png" width="340" height="110" alt="">
                        </picture>
                    </a>
                    <p class="p-recruit-txt">様々な職種で募集しております。マイナビ転職のバナーよりご応募ください。</p>
                    <a href="https://tenshoku.mynavi.jp/jobinfo-90225-3-65-1/" target="_blank" rel="noopener" class="u-hover-fade p-recruit-banner-mynavi">
                        <picture>
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/recruit/recruit__banner__mynavi__img02.webp" type="image/webp">
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/recruit/recruit__banner__mynavi__img02.png" type="image/png">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/recruit/recruit__banner__mynavi__img02.png" width="290" height="64" alt="マイナビ転職">
                        </picture>
                    </a>
                </section>
            </div>
        </div>
    </div>

    <?php get_template_part('assets/inc/cta'); ?>
</main>

<?php get_template_part('assets/inc/nav-footer'); ?>
<?php get_footer();?>
