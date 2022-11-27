<?php /*Template Name: 事業紹介-装置事業*/ ?>

<?php get_header();?>
<?php get_template_part('assets/inc/nav-header'); ?>

<main class="l-main">
    <div class="c-page-ttl">
        <div class="u-container u-container--wide">
            <div class="c-page-ttl__txt">
                <p class="c-page-ttl__big"><span>Electronics Equipment Business</span></p>
                <h1 class="c-page-ttl__small"><span>装置事業</span></h1>
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
                <a itemprop="item" href="/business/"><span itemprop="name">事業紹介</span></a><meta itemprop="position" content="2">
            </li>
            <li class="separ">|</li>
            <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                <span itemprop="name">装置事業</span><meta itemprop="position" content="3">
            </li>
        </ul>
    </div>

    <div class="l-main__inner l-main__inner--col2 u-container u-container--wide">
        <div class="l-contents">
            <div class="p-eeb">
                <section class="p-eeb-sec">
                    <h2 class="p-eeb-about-ttl">エレクトロニクス技術の発展とともに進化する生産装置群。<br>エレクトロニクス分野で長年培われたクリーンテクノロジーと<br class="u-pc-only">装置化技術を基に、お客様のソリューション・プロバイダーとして<br class="u-pc-only">新たな価値を提供します。</h2>
                    <p class="p-eeb-about-txt">TAKADAはエレクトロニクス分野における半導体製造向け生産装置を開発・製作してきました。<br>この分野で長年培われた装置化技術を基に、地球温暖化防止や省エネに繋がる次世代半導体や電子部品分野の製造プロセスの進化に貢献する装置を開発しています。<br>SiC基板、セラミック基板、ガラス基板など難切材の高速切断を可能とする超音波カッティング装置を始め、LEDやMEMS、化合物半導体向けの枚葉式ウェット処理装置など、お客様の用途・ニーズに合わせ先進的な装置技術を提供します。</p>
                    <ul class="p-eeb-about-list">
                        <li class="p-eeb-about-list-item">
                            <a class="u-hover-fade" href="/business/eeb/cutting/">
                                <picture>
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/eeb/eeb__link__img01.webp" type="image/webp">
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/eeb/eeb__link__img01.jpg" type="image/jpg">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/eeb/eeb__link__img01.jpg" width="429" height="223" alt="">
                                </picture>
                            </a>
                            <p>切断</p>
                        </li>
                        <li class="p-eeb-about-list-item">
                            <a class="u-hover-fade" href="/business/eeb/washing/">
                                <picture>
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/eeb/eeb__link__img02.webp" type="image/webp">
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/eeb/eeb__link__img02.jpg" type="image/jpg">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/eeb/eeb__link__img02.jpg" width="429" height="223" alt="">
                                </picture>    
                            </a>
                            <p>洗浄</p>
                        </li>
                    </ul>
                </section>

                <section class="p-eeb-sec">
                    <h2 class="c-headline03 p-eeb-topics-ttl">トピックス</h2>
                    <div class="p-eeb-topics">
                        <?php
                            $args = array(
                                'post_status' => 'publish',
                                'post_type'	=> 'post',
                                'category_name' => 'eeb',
                                'posts_per_page' => -1,
                            );
                            $news_query = new WP_Query($args);
                        ?>
                        <?php if($news_query->have_posts()): ?>
                        <div class="p-eeb-topics__inr">
                            <ul class="c-posts-list">
                                <?php while ($news_query->have_posts()): $news_query->the_post(); ?>
                                <li id="post-<?php the_ID(); ?>" class="c-posts-item">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="c-posts-item__state">
                                            <time class="c-posts-item__time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                                            <?php if ($terms = get_the_terms($post->ID, 'category')): ?>
                                            <?php 
                                                foreach ($terms as $term) {
                                                    if ($term->slug == 'info') {
                                                        $cate_color = 'c-posts-item__cate--color-nilegreen';
                                                    } elseif  ($term->slug == 'tec') {
                                                        $cate_color = 'c-posts-item__cate--color-cherrypink';
                                                    } elseif  ($term->slug == 'recruit') {
                                                        $cate_color = 'c-posts-item__cate--color-cyan';
                                                    } elseif  ($term->slug == 'eeb') {
                                                        $cate_color = 'c-posts-item__cate--color-wisteria';
                                                    }
                                                    echo '<p class="c-posts-item__cate '.$cate_color.'">'.$term->name.'</p>';
                                                }
                                            ?>
                                            <?php endif; ?>
                                        </div>
                                        <div class="c-posts-item__txt">
                                            <p class="c-posts-item__ttl"><?php the_title(); ?></p>
                                        </div>
                                    </a>
                                </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                        <?php else: ?>
                            <p class="no-post">現在記事はありません。</p>
                        <?php endif; ?>
                    </div>
                </section>

                <section class="p-eeb-sec p-eeb-demo">
                    <div class="p-eeb-demo-img">
                        <picture>
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/eeb/eeb__demo__img.webp" type="image/webp">
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/eeb/eeb__demo__img.png" type="image/png">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business/eeb/eeb__demo__img.png" width="429" height="223" alt="">
                        </picture>
                    </div>
                    <div class="p-eeb-demo-txt">
                        <h2>装置のデモやサンプルカットなどの<br>サポートサービスも整備</h2>
                        <p>当社の精密装置製作工場内に開設されたテクニカルセンターでは、超音波カッティング装置や枚葉式ウェット処理装置等の実機を設置し、装置のデモンストレーションやお客様から依頼された素材のアプリケーション相談にも対応いたします。</p>
                        <!-- <a href="/" class="c-btn c-btn--white"><span>詳しく見る</span></a> -->
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
