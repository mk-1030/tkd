<?php /*Template Name: 新着情報 */ ?>

<?php get_header();?>
<?php get_template_part('assets/inc/nav-header'); ?>

<main class="l-main">
    <div class="c-page-ttl">
        <div class="u-container u-container--wide">
            <div class="c-page-ttl__txt">
                <p class="c-page-ttl__big"><span>News</span></p>
                <h1 class="c-page-ttl__small"><span>新着情報</span></h1>
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
                <span itemprop="name">新着情報</span><meta itemprop="position" content="2">
            </li>
        </ul>
    </div>

    <div class="l-main__inner u-container">
        <div class="l-contents">
            <div class="p-news-arichive">
                <div class="c-headline01 p-news-arichive__cate-ttl">
                    <p class="c-headline01__big"><span>Category</span></p>
                    <h2 class="c-headline01__small"><span>カテゴリ</span></h2>
                </div>
                <div class="c-posts-tab p-news-arichive__inr">
                    <nav class="c-posts-tab__nav p-news-arichive__cate-list">
                        <ul class="c-posts-tab__nav-list">
                            <li class="c-posts-tab__nav-item is-active">すべて</li>
                            <?php
                                $terms = get_terms('category');
                                foreach ($terms as $term) {
                                    $slug = $term->slug;
                                    $queried_object = get_queried_object();
                                    $term_slug = $queried_object->slug;
                                    if($slug !== 'eeb') {
                                        if ($slug == $term_slug) {
                                            echo '<li class="c-posts-tab__nav-item is-active">'.$term->name.'</li>';
                                        } else {
                                            echo '<li class="c-posts-tab__nav-item"><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
                                        }
                                    }
                                }
                            ?>
                        </ul>
                    </nav>

                    <?php
                        $eeb = get_category_by_slug('eeb');
                        $eeb_id = $eeb->term_id;
                        $paged = (int) get_query_var('paged');
                        $args = array(
                            'post_status' => 'publish',
                            'post_type'	=> 'post',
                            'category__not_in' => array($eeb_id),
                            'posts_per_page' => 10,
                            'paged' => $paged
                        );
                        $news_query = new WP_Query($args);
                    ?>
                    <?php if($news_query->have_posts()): ?>
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
                    <?php else: ?>
                        <p class="no-post">現在記事はありません。</p>
                    <?php endif; ?>
                </div>

                <?php 
                    $paged = ((int) get_query_var('paged')) ? (int) get_query_var('paged') : 1;
                    $max_page = $news_query->max_num_pages;
                ?>
                <div class="c-pager">
                    <div class="c-pager__wrap">
                        <?php if($paged > 1): ?>
                        <a class="c-pager__link-most" href="/news">＜最初</a>
                            <?php if($paged > 2): ?>
                                <a class="c-pager__link is-active" href="/news/page/<?php echo $paged - 1; ?>">前の10件へ</a>
                            <?php else: ?>
                                <a class="c-pager__link is-active" href="/news/">前の10件へ</a>
                            <?php endif; ?>
                        <?php else: ?>
                        <span class="c-pager__link-most">＜最初</span>
                        <span class="c-pager__link">前の10件へ</span>
                        <?php endif; ?>
                    </div>
                    <span class="c-pager__total"><?php echo $paged; ?> / <?php echo $max_page; ?></span>
                    <div class="c-pager__wrap">
                        <?php if($paged >= $max_page): ?>
                        <span class="c-pager__link">次の10件へ</span>
                        <span class="c-pager__link-most">最後＞</span>
                        <?php else: ?>
                        <a class="c-pager__link is-active" href="/news/page/<?php echo $paged + 1; ?>">次の10件へ</a>
                        <a class="c-pager__link-most" href="/news/page/<?php echo $max_page; ?>">最後＞</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('assets/inc/cta'); ?>
</main>

<?php get_template_part('assets/inc/nav-footer'); ?>
<?php get_footer();?>