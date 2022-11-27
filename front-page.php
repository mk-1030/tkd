<?php get_header();?>
<?php get_template_part('assets/inc/nav-header'); ?>

<main class="l-main">
    <div class="l-main__inner">
        <div class="l-contents">
            <div class="p-top">
                <div class="p-top-mv">
                    <div class="p-top-mv__video">
                        <video src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mv__video.mp4" width="1920" height="1080" poster="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mv__img01_pc.jpg" muted loop autoplay disablepictureinpicture></video>
                    </div>
                    <div class="u-container u-container--wide p-top-mv__inr">
                        <img class="p-top-deco-wire p-top-mv__wire" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/deco__wire.svg" width="1295.1" height="625.9" alt="">
                        <div class="p-top-mv__ttl">
                            <p class="p-top-mv__ttl-big"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mv__ttl-big.svg" width="337.7" height="182.2" alt="TAKADAの[技・能]は人から生まれる"></p>
                            <p class="p-top-mv__ttl-small">TAKADA’s technique is<br>Born from TAKADA Partner</p>
                        </div>
                    </div>
                </div>

                <?php
                    $eeb = get_category_by_slug('eeb');
                    $eeb_id = $eeb->term_id;
                    $args = array(
                        'post_status' => 'publish',
                        'post_type'	=> 'post',
                        'category__not_in' => array($eeb_id),
                        'order' => 'desc',
                        'posts_per_page' => 5,
                    );
                    $news_query = new WP_Query($args);
                ?>
                <?php if($news_query->have_posts()): ?>
                <div class="p-top-news-ticker">
                    <div class="u-container u-container--wide p-top-news-ticker__inr">
                        <div class="p-top-news-ticker-list js-news-ticker-swiper swiper-container swiper-no-swiping">
                            <ul class="p-top-news-ticker-wrap swiper-wrapper">
                                <?php while ($news_query->have_posts()): $news_query->the_post(); ?>
                                <li id="post-<?php the_ID(); ?>" class="c-posts-item swiper-slide">
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
                        <a href="/news/" class="c-btn-mini p-top-news-btn"><span>View more</span></a>
                    </div>
                </div>
                <?php endif; ?>

                <div class="p-top-grad">
                    <div class="p-top-grad__inr">
                        <div class="p-top-pickup">
                            <div class="u-container p-top-pickup__inr">
                                <h2 class="p-top-pickup__ttl">Pickup</h2>
                                <img class="p-top-deco-wire p-top-pickup__wire" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/deco__wire.svg" width="1295.1" height="625.9" alt="">
                            </div>
                            <div class="p-top-news-pickup-list js-pickup-swiper swiper-container">
                                <div class="p-top-news-pickup-wrap swiper-wrapper">
                                    <div class="p-top-news-pickup-item swiper-slide">
                                        <a href="" class="u-hover-fade">
                                            <div class="u-of">
                                                <picture>
                                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/pickup__slide01.webp" type="image/webp">
                                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/pickup__slide01.png" type="image/png">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/pickup__slide01.jpg" width="470" height="300" alt="2040 みらいプロジェクト">
                                                </picture>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="p-top-news-pickup-item swiper-slide">
                                        <a href="" class="u-hover-fade">
                                            <div class="u-of">
                                                <picture>
                                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/pickup__slide02.webp" type="image/webp">
                                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/pickup__slide02.png" type="image/png">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/pickup__slide02.png" width="470" height="300" alt="高田製作所社報 TAKADA Direct">
                                                </picture>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="p-top-news-pickup-item swiper-slide">
                                        <a href="" class="u-hover-fade">
                                            <div class="u-of">
                                                <picture>
                                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/pickup__slide03.webp" type="image/webp">
                                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/pickup__slide03.png" type="image/png">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/pickup__slide03.png" width="470" height="300" alt="TAKADA TOWN 2023 recruit">
                                                </picture>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="p-top-news-pickup-item swiper-slide">
                                    <a href="https://recruit.takada.co.jp/highschool/" target="_blank" rel="noopener" class="u-hover-fade">
                                            <div class="u-of">
                                                <picture>
                                                    <source srcset="/assets/img/pickup__slide03_1.webp" type="image/webp">
                                                    <source srcset="/assets/img/pickup__slide03_1.png" type="image/png">
                                                    <img src="/assets/img/pickup__slide03_1.png" width="470" height="300" alt="TAKADA ROAD 高校生向けリクルートサイト">
                                                </picture>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="p-top-news-pickup-item swiper-slide">
                                        <a href="https://www.takadakenpo.or.jp" target="_blank" rel="noopener" class="u-hover-fade">
                                            <div class="u-of">
                                                <picture>
                                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/pickup__slide04.webp" type="image/webp">
                                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/pickup__slide04.png" type="image/png">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/pickup__slide04.png" width="470" height="300" alt="高田工業所健康保険組合">
                                                </picture>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-pager"></div>
                                <div class="swiper-btn swiper-btn-prev">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.4 10.7" xml:space="preserve">
                                        <path d="M12.9 3.9H5l1.2-1.2c.6-.4.7-1.3.3-1.9L5.9.3C5.3-.2 4.5 0 4.1.5L.5 4.1c-.4.3-.5.8-.5 1.3 0 .4.1.9.5 1.3L4 10.2c.4.6 1.3.7 1.9.3l.5-.5c.4-.6.3-1.4-.3-1.9L5 6.9h7.9c.8 0 1.5-.5 1.5-1.1V5c0-.6-.7-1.1-1.5-1.1z" fill="#fff"/>
                                    </svg>
                                </div>
                                <div class="swiper-btn swiper-btn-next">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.4 10.7" xml:space="preserve">
                                        <path d="M1.5 6.8h7.9L8.2 8.1c-.6.4-.7 1.2-.3 1.8l.5.5c.6.4 1.4.3 1.9-.3l3.5-3.5c.4-.3.6-.8.5-1.3.1-.5-.1-1-.5-1.3L10.3.5C9.8-.1 9-.2 8.4.3l-.5.5c-.4.6-.3 1.4.3 1.8l1.2 1.2H1.5C.7 3.8 0 4.3 0 5v.8c0 .5.7 1 1.5 1z" fill="#fff"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <section class="p-top-msg">
                            <div class="u-container p-top-msg__inr">
                                <div class="p-top-msg__tri">
                                    <div class="p-top-msg__tri-img p-top-msg__tri-img--01">
                                        <picture>
                                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/msg__tri__img01.webp" type="image/webp">
                                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/msg__tri__img01.png" type="image/png">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/msg__tri__img01.png" width="467" height="474" alt="">
                                        </picture>
                                    </div>
                                    <div class="p-top-msg__tri-img p-top-msg__tri-img--02">
                                        <picture>
                                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/msg__tri__img02.webp" type="image/webp">
                                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/msg__tri__img02.png" type="image/png">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/msg__tri__img02.png" width="467" height="474" alt="">
                                        </picture>
                                    </div>
                                    <div class="p-top-msg__partner">
                                        <div class="p-top-msg__partner-img">
                                            <picture>
                                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/msg__partner__img.webp" type="image/webp">
                                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/msg__partner__img.png" type="image/png">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/msg__partner__img.png" width="94" height="76" alt="">
                                            </picture>
                                        </div>
                                        <p class="p-top-msg__partner-txt">TAKADA</p>
                                    </div>
                                    <ul class="p-top-msg__ability-list">
                                        <li class="p-top-msg__ability-item p-top-msg__ability-item--edu">
                                            <p class="p-top-msg__ability-ttl-en">Education</p>
                                            <p class="p-top-msg__ability-ttl-jp">教育力</p>
                                        </li>
                                        <li class="p-top-msg__ability-item p-top-msg__ability-item--fit">
                                            <p class="p-top-msg__ability-ttl-en">Adjustability</p>
                                            <p class="p-top-msg__ability-ttl-jp">適合力</p>
                                        </li>
                                        <li class="p-top-msg__ability-item p-top-msg__ability-item--comp">
                                            <p class="p-top-msg__ability-ttl-en">Completion</p>
                                            <p class="p-top-msg__ability-ttl-jp">完遂力</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-top-msg__txt">
                                    <h2 class="p-top-msg__ttl"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/msg__ttl.svg" width="437.4" height="94.5" alt="技・能を伝えていくのは、TAKADAパートナー"></h2>
                                    <p class="p-top-msg__par">1940年創業の産業プラントエンジニアリングの<br class="u-pc-only">パイオニア「株式会社 高田工業所」。</p>
                                    <p class="p-top-msg__par">「お客さまの屈強なパートナーになること」 をモットーに、<br class="u-pc-only">人材の育成に力を入れ、躍進してきました。<br>高田工業所で育成された人材は世の中に可能性を生み出し<br class="u-pc-only">サステナブルなより良い未来を創ることを目指します。<br>新たな時代において変化を恐れず挑戦を続けます。</p>
                                </div>

                                <img class="p-top-deco-wire p-top-msg__wire" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/deco__wire.svg" width="1295.1" height="625.9" alt="">
                                <div class="p-top-msg__deco p-top-msg__deco--01">
                                    <picture>
                                        <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/msg__deco01.webp" type="image/webp">
                                        <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/msg__deco01.png" type="image/png">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/msg__deco01.png" width="126" height="113" alt="">
                                    </picture>
                                </div>
                                <div class="p-top-msg__deco p-top-msg__deco--02">
                                    <picture>
                                        <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/msg__deco02.webp" type="image/webp">
                                        <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/msg__deco02.png" type="image/png">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/msg__deco02.png" width="133" height="153" alt="">
                                    </picture>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="p-top-grad__arc"></div>
                    <svg class="p-top-grad__wave u-pc-only" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1642 238" xml:space="preserve">
                        <path d="M297.4-1.4C136.9-17.6-23.5-33.8-184-50c70.3 38 171.3 89.1 290.4 137.1 78.7 31.7 165.3 62.1 256 86.5 135.4 36.4 225.2 45.8 293.8 45.8 80.7 0 135.7-12.6 194.2-13.8 146.8-3 315 18.2 462-19 172.6-43.7 260.5-160 325-134 75.9 30.6 123-34 123-34l18-58-1481 38z" fill="#e4fcc2"/>
                        <path d="M-143-169c7.7 48.7 15.3 97.3 23 146 225.8 38 393.5 97.4 506.4 145.6 86.6 37 256 114 438 114 176.8 0 214-46.8 361-84 172.6-43.7 187.4-18.2 374-77 78-24.6 223.9-212.9 261.6-246.6-654.7.7-1309.3 1.3-1964 2z" fill="#a7f6e1"/>
                    </svg>
                    <svg class="p-top-grad__wave u-sp-only" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 390 62" xml:space="preserve">
                        <path d="m-104.9-58.6-112 27.9S-159.3 6.2-72 30.1C69.9 69 119.5 47.4 175.3 46.3c74.4-1.5 159.6 9.2 234.1-9.6 87.5-22.1 132-81.1 164.7-67.9 38.4 15.5 62.3-17.2 62.3-17.2l9.1-29.4-750.4 19.2z" fill="#e4fcc2"/>
                        <path d="m-254.4-61.6 29.9 31.4s50 2.9 164.7 34.5C39.3 31.5 72.6 62 162.2 62s108.5-23.7 182.9-42.6c87.5-22.1 95-9.2 189.5-39C574.2-32 563-51.5 563-51.5l9.1-29.4-826.5 19.3z" fill="#a7f6e1"/>
                    </svg>
                </div>

                <div class="p-top-news">
                    <div class="u-container u-container--wide">
                        <div class="p-top-news__inr">
                            <section class="p-top-news-sec">
                                <div class="c-headline01 p-top-news-sec__ttl">
                                    <p class="c-headline01__big"><span>News</span></p>
                                    <h2 class="c-headline01__small"><span>新着情報</span></h2>
                                </div>
                                <?php
                                    $eeb = get_category_by_slug('eeb');
                                    $eeb_id = $eeb->term_id;
                                    $args = array(
                                        'post_status' => 'publish',
                                        'post_type'	=> 'post',
                                        'category__not_in' => array($eeb_id),
                                        'posts_per_page' => 3,
                                    );
                                    $info_args = array(
                                        'post_status' => 'publish',
                                        'post_type'	=> 'post',
                                        'category_name' => 'info',
                                        'posts_per_page' => 3,
                                    );
                                    $tec_args = array(
                                        'post_status' => 'publish',
                                        'post_type'	=> 'post',
                                        'category_name' => 'tec',
                                        'posts_per_page' => 3,
                                    );
                                    $recruit_args = array(
                                        'post_status' => 'publish',
                                        'post_type'	=> 'post',
                                        'category_name' => 'recruit',
                                        'posts_per_page' => 3,
                                    );
                                    $news_query = new WP_Query($args);
                                    $news_info_query = new WP_Query($info_args);
                                    $news_tec_query = new WP_Query($tec_args);
                                    $news_recruit_query = new WP_Query($recruit_args);
                                ?>
                                <div class="c-posts-tab js-tab">
                                    <?php if($news_query->have_posts()): ?>
                                    <nav class="u-pc-only c-posts-tab__nav js-tab-nav">
                                        <ul class="c-posts-tab__nav-list js-tab-list">
                                            <li class="c-posts-tab__nav-item js-tab-item is-active">すべて</li>
                                            <?php if($news_info_query->have_posts()): ?>
                                                <li class="c-posts-tab__nav-item js-tab-item">お知らせ</li>
                                            <?php endif; ?>
                                            <?php if($news_tec_query->have_posts()): ?>
                                                <li class="c-posts-tab__nav-item js-tab-item">技術情報</li>
                                            <?php endif; ?>
                                            <?php if($news_recruit_query->have_posts()): ?>
                                                <li class="c-posts-tab__nav-item js-tab-item">採用情報</li>
                                            <?php endif; ?>
                                        </ul>
                                    </nav>
                                    <div class=" u-sp-only c-select c-posts-tab__select">
                                        <select name="js-tab-select">
                                            <option value="" selected>すべて</option>
                                            <?php if($news_info_query->have_posts()): ?>
                                                <option value="">お知らせ</option>
                                            <?php endif; ?>
                                            <?php if($news_tec_query->have_posts()): ?>
                                                <option value="">技術情報</option>
                                            <?php endif; ?>
                                            <?php if($news_recruit_query->have_posts()): ?>
                                                <option value="">採用情報</option>
                                            <?php endif; ?>
                                        </select>
                                    </div>
                                    <div class="c-posts-tab__contents js-tab-contents">
                                        <div class="c-posts-tab__content js-tab-content is-active">
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
                                        <?php if($news_info_query->have_posts()): ?>
                                        <div class="c-posts-tab__content js-tab-content">
                                            <ul class="c-posts-list">
                                                <?php while ($news_info_query->have_posts()): $news_info_query->the_post(); ?>
                                                <li class="c-posts-item">
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
                                        <?php endif; ?>
                                        <?php if($news_tec_query->have_posts()): ?>
                                        <div class="c-posts-tab__content js-tab-content">
                                            <ul class="c-posts-list">
                                                <?php while ($news_tec_query->have_posts()): $news_tec_query->the_post(); ?>
                                                <li class="c-posts-item">
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
                                        <?php endif; ?>
                                        <?php if($news_recruit_query->have_posts()): ?>
                                        <div class="c-posts-tab__content js-tab-content">
                                            <ul class="c-posts-list">
                                                <?php while ($news_recruit_query->have_posts()): $news_recruit_query->the_post(); ?>
                                                <li class="c-posts-item">
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
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <a href="/news/" class="c-btn-mini"><span>View more</span></a>
                                <?php endif; ?>
                            </section>
                            <section class="p-top-news-sec">
                                <div class="c-headline01 p-top-news-sec__ttl">
                                    <p class="c-headline01__big"><span>IR News</span></p>
                                    <h2 class="c-headline01__small"><span>IRニュース</span></h2>
                                </div>
                                <div class="c-posts-tab js-tab">
                                    <nav class="u-pc-only c-posts-tab__nav js-tab-nav">
                                        <ul class="c-posts-tab__nav-list js-tab-list">
                                            <li class="c-posts-tab__nav-item js-tab-item is-active">すべて</li>
                                            <li class="c-posts-tab__nav-item js-tab-item">決算短信・適時開示</li>
                                            <li class="c-posts-tab__nav-item js-tab-item">株主総会</li>
                                            <li class="c-posts-tab__nav-item js-tab-item">その他</li>
                                        </ul>
                                    </nav>
                                    <div class="u-sp-only c-select c-posts-tab__select">
                                        <select name="js-tab-select">
                                            <option value="" selected>すべて</option>
                                            <option value="">決算短信・適時開示</option>
                                            <option value="">株主総会</option>
                                            <option value="">その他</option>
                                        </select>
                                    </div>
                                    <div class="c-posts-tab__contents js-tab-contents">
                                        <div class="c-posts-tab__content js-tab-content is-active">
                                            <ul class="c-posts-list">
                                                <li class="c-posts-item">
                                                    <a href="/">
                                                        <div class="c-posts-item__state">
                                                            <time class="c-posts-item__time">2022.01.20</time>
                                                            <p class="c-posts-item__cate c-posts-item__cate--color-cherrypink">決算・適時開示</p>
                                                        </div>
                                                        <div class="c-posts-item__txt">
                                                            <p class="c-posts-item__ttl">定時株主総会における新型コロナウイルス感染防止への対応について</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="c-posts-item">
                                                    <a href="/">
                                                        <div class="c-posts-item__state">
                                                            <time class="c-posts-item__time">2022.01.20</time>
                                                            <p class="c-posts-item__cate c-posts-item__cate--color-cyan">株主総会</p>
                                                        </div>
                                                        <div class="c-posts-item__txt">
                                                            <p class="c-posts-item__ttl">当社のみらいプロジェクトに関するインタビューがクラウド活用と生産性向上の専門サイト【BizHint】に掲載されました。</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="c-posts-item">
                                                    <a href="/">
                                                        <div class="c-posts-item__state">
                                                            <time class="c-posts-item__time">2022.01.20</time>
                                                            <p class="c-posts-item__cate c-posts-item__cate--color-nilegreen">IR資料</p>
                                                        </div>
                                                        <div class="c-posts-item__txt">
                                                            <p class="c-posts-item__ttl">定時株主総会における新型コロナウイルス感染防止への対応について</p>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="c-posts-tab__content js-tab-content">
                                            <ul class="c-posts-list">
                                                <li class="c-posts-item">
                                                    <a href="/">
                                                        <div class="c-posts-item__state">
                                                            <time class="c-posts-item__time">2022.01.20</time>
                                                            <p class="c-posts-item__cate c-posts-item__cate--color-cherrypink">決算・適時開示</p>
                                                        </div>
                                                        <div class="c-posts-item__txt">
                                                            <p class="c-posts-item__ttl">定時株主総会における新型コロナウイルス感染防止への対応について</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="c-posts-item">
                                                    <a href="/">
                                                        <div class="c-posts-item__state">
                                                            <time class="c-posts-item__time">2022.01.20</time>
                                                            <p class="c-posts-item__cate c-posts-item__cate--color-cherrypink">決算・適時開示</p>
                                                        </div>
                                                        <div class="c-posts-item__txt">
                                                            <p class="c-posts-item__ttl">定時株主総会における新型コロナウイルス感染防止への対応について</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="c-posts-item">
                                                    <a href="/">
                                                        <div class="c-posts-item__state">
                                                            <time class="c-posts-item__time">2022.01.20</time>
                                                            <p class="c-posts-item__cate c-posts-item__cate--color-cherrypink">決算・適時開示</p>
                                                        </div>
                                                        <div class="c-posts-item__txt">
                                                            <p class="c-posts-item__ttl">定時株主総会における新型コロナウイルス感染防止への対応について</p>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="c-posts-tab__content js-tab-content">
                                            <ul class="c-posts-list">
                                                <li class="c-posts-item">
                                                    <a href="/">
                                                        <div class="c-posts-item__state">
                                                            <time class="c-posts-item__time">2022.01.20</time>
                                                            <p class="c-posts-item__cate c-posts-item__cate--color-cyan">株主総会</p>
                                                        </div>
                                                        <div class="c-posts-item__txt">
                                                            <p class="c-posts-item__ttl">当社のみらいプロジェクトに関するインタビューがクラウド活用と生産性向上の専門サイト【BizHint】に掲載されました。</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="c-posts-item">
                                                    <a href="/">
                                                        <div class="c-posts-item__state">
                                                            <time class="c-posts-item__time">2022.01.20</time>
                                                            <p class="c-posts-item__cate c-posts-item__cate--color-cyan">株主総会</p>
                                                        </div>
                                                        <div class="c-posts-item__txt">
                                                            <p class="c-posts-item__ttl">当社のみらいプロジェクトに関するインタビューがクラウド活用と生産性向上の専門サイト【BizHint】に掲載されました。</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="c-posts-item">
                                                    <a href="/">
                                                        <div class="c-posts-item__state">
                                                            <time class="c-posts-item__time">2022.01.20</time>
                                                            <p class="c-posts-item__cate c-posts-item__cate--color-cyan">株主総会</p>
                                                        </div>
                                                        <div class="c-posts-item__txt">
                                                            <p class="c-posts-item__ttl">当社のみらいプロジェクトに関するインタビューがクラウド活用と生産性向上の専門サイト【BizHint】に掲載されました。</p>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="c-posts-tab__content js-tab-content">
                                            <ul class="c-posts-list">
                                                <li class="c-posts-item">
                                                    <a href="/">
                                                        <div class="c-posts-item__state">
                                                            <time class="c-posts-item__time">2022.01.20</time>
                                                            <p class="c-posts-item__cate c-posts-item__cate--color-nilegreen">IR資料</p>
                                                        </div>
                                                        <div class="c-posts-item__txt">
                                                            <p class="c-posts-item__ttl">定時株主総会における新型コロナウイルス感染防止への対応について</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="c-posts-item">
                                                    <a href="/">
                                                        <div class="c-posts-item__state">
                                                            <time class="c-posts-item__time">2022.01.20</time>
                                                            <p class="c-posts-item__cate c-posts-item__cate--color-nilegreen">IR資料</p>
                                                        </div>
                                                        <div class="c-posts-item__txt">
                                                            <p class="c-posts-item__ttl">定時株主総会における新型コロナウイルス感染防止への対応について</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="c-posts-item">
                                                    <a href="/">
                                                        <div class="c-posts-item__state">
                                                            <time class="c-posts-item__time">2022.01.20</time>
                                                            <p class="c-posts-item__cate c-posts-item__cate--color-nilegreen">IR資料</p>
                                                        </div>
                                                        <div class="c-posts-item__txt">
                                                            <p class="c-posts-item__ttl">定時株主総会における新型コロナウイルス感染防止への対応について</p>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <a href="/ir/ir-news/" class="c-btn-mini"><span>View more</span></a>
                            </section>
                        </div>
                    </div>
                </div>

                <div class="p-top-biz">
                    <div class="u-container u-container--wide">
                        <div class="p-top-biz__inr">
                            <div class="c-headline01 p-top-biz__ttl">
                                <p class="c-headline01__big"><span>Business</span></p>
                                <h2 class="c-headline01__small"><span>事業紹介</span></h2>
                            </div>
                            <ul class="p-top-biz-list">
                                <li class="p-top-biz-item">
                                    <div class="p-top-biz-item__img u-of">
                                        <a href="/business/plant-business/" class="u-hover-fade">
                                            <picture>
                                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/biz__img01.webp" type="image/webp">
                                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/biz__img01.jpg" type="image/jpeg">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/biz__img01.jpg" width="470" height="250" alt="">
                                            </picture>
                                        </a>
                                    </div>
                                    <p class="p-top-biz-item__num">01</p>
                                    <h3 class="p-top-biz-item__ttl">プラント事業</h3>
                                </li>
                                <li class="p-top-biz-item">
                                    <div class="p-top-biz-item__img u-of">
                                        <a href="/business/project-business/" class="u-hover-fade">
                                            <picture>
                                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/biz__img02.webp" type="image/webp">
                                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/biz__img02.jpg" type="image/jpeg">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/biz__img02.jpg" width="470" height="250" alt="">
                                            </picture>
                                        </a>
                                    </div>
                                    <p class="p-top-biz-item__num">02</p>
                                    <h3 class="p-top-biz-item__ttl">プロジェクト事業</h3>
                                </li>
                                <li class="p-top-biz-item">
                                    <div class="p-top-biz-item__img u-of">
                                        <a href="/business/edb/" class="u-hover-fade">
                                            <picture>
                                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/biz__img03.webp" type="image/webp">
                                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/biz__img03.jpg" type="image/jpeg">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/biz__img03.jpg" width="470" height="250" alt="">
                                            </picture>
                                        </a>
                                    </div>
                                    <p class="p-top-biz-item__num">03</p>
                                    <h3 class="p-top-biz-item__ttl">設備診断事業</h3>
                                </li>
                                <li class="p-top-biz-item">
                                    <div class="p-top-biz-item__img u-of">
                                        <a href="/business/eeb/" class="u-hover-fade">
                                            <picture>
                                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/biz__img04.webp" type="image/webp">
                                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/biz__img04.jpg" type="image/jpeg">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/biz__img04.jpg" width="470" height="250" alt="">
                                            </picture>
                                        </a>
                                    </div>
                                    <p class="p-top-biz-item__num">04</p>
                                    <h3 class="p-top-biz-item__ttl">装置事業</h3>
                                </li>
                            </ul>
                            <a href="/business/" class="c-btn c-btn--small p-top-biz__btn u-pc-only">
                                <span>View more</span>
                            </a>
                            <img class="p-top-biz__deco p-top-biz__deco01" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/biz__deco01.svg" width="359.6" height="315.7" alt="">
                            <img class="p-top-biz__deco p-top-biz__deco02" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/biz__deco02.svg" width="502.6" height="397.2" alt="">
                        </div>
                    </div>
                </div>

                <section class="p-top-info">
                    <ul class="p-top-info-list">
                        <li class="p-top-info-item">
                            <div class="p-top-info-item__img u-of">
                                <a href="/ir/" class="u-hover-fade">
                                    <picture>
                                        <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/info__img-ir.webp" type="image/webp">
                                        <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/info__img-ir.jpg" type="image/jpeg">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/info__img-ir.jpg" width="525" height="450" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="p-top-info-item__ttl">
                                <p class="p-top-info-item__ttl-big">Investor Relations</p>
                                <h2 class="p-top-info-item__ttl-small">IR情報</h2>
                            </div>
                        </li>
                        <li class="p-top-info-item">
                            <div class="p-top-info-item__img u-of">
                                <a href="/company/about-us/" class="u-hover-fade">
                                    <picture>
                                        <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/info__img-about.webp" type="image/webp">
                                        <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/info__img-about.jpg" type="image/jpeg">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/info__img-about.jpg" width="525" height="450" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="p-top-info-item__ttl">
                                <p class="p-top-info-item__ttl-big">About TAKADA</p>
                                <h2 class="p-top-info-item__ttl-small">企業情報</h2>
                            </div>
                        </li>
                    </ul>
                    <div class="p-top-info__deco">
                        <img class="p-top-deco-wire p-top-info__wire" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/deco__wire.svg" width="1295.1" height="625.9" alt="">
                    </div>
                </section>

                <div class="p-top-sus-rec p-top-sus-rec--sustain">
                    <div class="u-container p-top-sus-rec__inr">
                        <img class="p-top-sus-rec__deco" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustain__deco.svg" width="555.5" height="513.4" alt="">
                        <div class="p-top-sus-rec__img u-of">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustain__img.webp" type="image/webp">
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustain__img.jpg" type="image/jpeg">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustain__img.jpg" width="315" height="420" alt="">
                            </picture>
                        </div>
                        <div class="p-top-sus-rec__txt">
                            <div class="c-headline01 p-top-sus-rec__ttl">
                                <p class="c-headline01__big"><span>Sustainability</span></p>
                                <h2 class="c-headline01__small"><span>サステナビリティ</span></h2>
                            </div>
                            <p class="p-top-sus-rec__par">TAKADAを創り出す「プラント事業」・「エンジニアリング事業」・「設備診断事業」・「装置事業」の４事業はそれぞれが確立する中で、相互にリンクし合い、TAKADAを支える柱となっています。高い技術力とこれまで蓄積してきた技術を活かし、各事業でTAKADAの名を世界に拡大していきます。</p>
                            <a href="/sustainability/" class="c-btn c-btn--small p-top-sus-rec__btn">
                                <span>View more</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="p-top-sus-rec p-top-sus-rec--recruit">
                    <div class="u-container p-top-sus-rec__inr">
                    <img class="p-top-sus-rec__deco" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/recruit__deco.svg" width="557.3" height="513" alt="">
                        <div class="p-top-sus-rec__img u-of">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/recruit__img.webp" type="image/webp">
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/recruit__img.jpg" type="image/jpeg">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/recruit__img.jpg" width="315" height="420" alt="">
                            </picture>
                        </div>
                        <div class="p-top-sus-rec__txt">
                            <div class="c-headline01 p-top-sus-rec__ttl">
                                <p class="c-headline01__big"><span>Recruit</span></p>
                                <h2 class="c-headline01__small"><span>採用情報</span></h2>
                            </div>
                            <p class="p-top-sus-rec__par">TAKADAを創り出す「プラント事業」・「エンジニアリング事業」・「設備診断事業」・「装置事業」の4事業はそれぞれが確立する中で、相互にリンクしあい、TAKADAを支える柱となっています。</p>
                            <ul class="p-top-sus-rec-list">
                                <li class="p-top-sus-rec-item"><a href="/recruit/">採用情報について</a></li>
                                <li class="p-top-sus-rec-item"><a href="/recruit/#a-recruit-admin-tec">新卒採用（事務・技術系）</a></li>
                                <li class="p-top-sus-rec-item"><a href="/recruit/#a-recruit-high-school">新卒採用（技術系）</a></li>
                                <li class="p-top-sus-rec-item"><a href="/recruit/#a-recruit-mid">中途採用</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('assets/inc/cta'); ?>
</main>

<?php get_template_part('assets/inc/nav-footer'); ?>
<?php get_footer();?>
