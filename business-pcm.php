<?php /*Template Name: 企業情報-創る・築く・守る*/ ?>

<?php get_header();?>
<?php get_template_part('assets/inc/nav-header'); ?>

<main class="l-main">
    <div class="c-page-ttl">
        <div class="u-container u-container--wide">
            <div class="c-page-ttl__txt">
                <p class="c-page-ttl__big"><span>Production , <br>Construction and Maintenance</span></p>
                <h1 class="c-page-ttl__small"><span>創る・築く・守る</span></h1>
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
                <a itemprop="item" href="/business/"><span itemprop="name">事業紹介</span></a><meta itemprop="position" content="2">
            </li>
            <li class="separ">|</li>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <span itemprop="name">創る・築く・守る</span><meta itemprop="position" content="3">
            </li>
        </ul>
    </div>

    <div class="l-main__inner l-main__inner--col2 u-container u-container--wide">
        <div class="l-contents">
            <div class="p-pcm">
                <section class="p-pcm-sec">
                    <ul class="p-pcm-list">
                        <li class="p-pcm-list-item">
                            <div class="p-pcm-list-main">
                                <picture>
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/pcm/pcm__img01__pc.webp" media="(min-width:1024px)" type="image/webp" />
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/pcm/pcm__img01__pc.jpg" media="(min-width:1024px)" />
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/pcm/pcm__img01__sp.webp" type="image/webp" />
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/pcm/pcm__img01__sp.jpg" width="350" height="217" />
                                </picture>

                                <h2 class="p-pcm-list-hd2">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/pcm/pcm_main_img01.svg" alt="創る-PRODUCTION">
                                </h2>

                                <div class="p-pcm-list-number">01</div>
                            </div>
                            <h3 class="c-headline09 p-pcm-list-hd3">
                                <span>モノづくりのためのモノづくり。</span>
                                <span class="u-pc-only">徹底された安全・品質管理によって信頼を構築。</span>
                                <span class="u-sp-only">徹底された安全・品質管理に</span>
                                <span class="u-sp-only">よって信頼を構築。</span>
                            </h3>
                            <p class="p-pcm-list-txt">お客様から発注を受けた機械設備の原材料を調達し、自社の工場において製作（加工・組み立て）、お客様の製造工場内に納入しています。特に、熱交換器や圧力容器、半導体工場向けの洗浄装置などを主に施工。<br>高度な技能力を集結させ、安全・品質を徹底した製品をお客様に提供し、信頼を構築しています。</p>
                        </li>
                        <li class="p-pcm-list-item">
                            <div class="p-pcm-list-main">
                                <picture>
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/pcm/pcm__img02__pc.webp" media="(min-width:1024px)" type="image/webp" />
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/pcm/pcm__img02__pc.jpg" media="(min-width:1024px)" />
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/pcm/pcm__img02__sp.webp" type="image/webp" />
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/pcm/pcm__img02__sp.jpg" width="350" height="217" />
                                </picture>

                                <h2 class="p-pcm-list-hd2">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/pcm/pcm_main_img02.svg" alt="築く-CONSTRUCTION">
                                </h2>

                                <div class="p-pcm-list-number">02</div>
                            </div>
                            <h3 class="c-headline09 p-pcm-list-hd3">
                                <span class="u-pc-only">蓄積された設計力と施工技術を高度に融合し</span>
                                <span class="u-pc-only">合理的で信頼性の高いプラントを建設</span>
                                <span class="u-sp-only">蓄積された設計力と施工技術を</span>
                                <span class="u-sp-only">高度に融合し合理的で</span>
                                <span class="u-sp-only">信頼性の高いプラントを建設</span>
                            </h3>
                            <p class="p-pcm-list-txt">製鉄、化学、石油・天然ガス、原子力発電所等の産業プラントの敷地内において建屋および機械等の製造設備の新設や増設、大きな改造工事を行っています。特に、機械設備の据付や製品の製造に必要な原料・水・蒸気等の輸送配管などを主に施工。<br>TAKADAのプラントエンジニアリングの大きな特長は、設計力と施工技術を高度に融合させ、合理的で信頼性の高いプラントを建設できるところです。</p>
                        </li>
                        <li class="p-pcm-list-item">
                            <div class="p-pcm-list-main">
                                <picture>
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/pcm/pcm__img03__pc.webp" media="(min-width:1024px)" type="image/webp" />
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/pcm/pcm__img03__pc.jpg" media="(min-width:1024px)" />
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/pcm/pcm__img03__sp.webp" type="image/webp" />
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/pcm/pcm__img03__sp.jpg" width="350" height="217" />
                                </picture>

                                <h2 class="p-pcm-list-hd2">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/pcm/pcm_main_img03.svg" alt="守る-MAINTENANCE">
                                </h2>

                                <div class="p-pcm-list-number">03</div>
                            </div>
                            <h3 class="c-headline09 p-pcm-list-hd3">
                                <span class="u-pc-only">常に最高の生産能力を発揮できるように、</span>
                                <span class="u-pc-only">設備診断から保全、補修、劣化防止対策に至るまで、</span>
                                <span class="u-pc-only">高度な技術で最適なメンテナンスを提供。</span>
                                <span class="u-sp-only">常に最高の生産能力を</span>
                                <span class="u-sp-only">発揮できるように、設備診断から</span>
                                <span class="u-sp-only">保全、補修、劣化防止対策に至るまで、</span>
                                <span class="u-sp-only">高度な技術で最適なメンテナンスを提供。</span>
                            </h3>
                            <p class="p-pcm-list-txt">TAKADAは、機械保全から、制御システムの保全まで幅広い領域をカバーできる技術・技能を背景に、お客様設備の「メンテナンスの最適化」を推進。<br>設備の長寿命化と最適運転維持による高位安定化を基本に、設備にかかるコストの低減を進めながら、常に最高の生産能力を発揮できるよう設備の総合メンテナンスを提供しています。</p>
                        </li>
                    </ul>
                </section>

                <section class="p-pcm-maintenance-sec">
                    <h2 class="c-headline08 p-pcm-maintenance-ttl">メンテナンス体制</h2>
                    <div class="p-pcm-maintenance-img js-scrollable">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/pcm/maintenance__img.svg" width="934" height="288" alt="">
                    </div>
                </section>
            </div>
        </div>
        <aside class="l-sidebar">
            <?php get_template_part('assets/inc/side-nav_business'); ?>
        </aside>
    </div>

    <?php get_template_part('assets/inc/cta'); ?>
</main>

<?php get_template_part('assets/inc/nav-footer'); ?>
<?php get_footer();?>