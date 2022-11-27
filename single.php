<?php get_header();?>
<?php get_template_part('assets/inc/nav-header'); ?>

<main class="l-main">
    <div class="c-page-ttl">
        <div class="u-container u-container--wide">
            <div class="c-page-ttl__txt">
                <p class="c-page-ttl__big"><span>News</span></p>
                <p class="c-page-ttl__small"><span>新着情報</span></p>
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
            <div class="p-news-detail">
                <div class="p-news-detail-head">
                    <div class="p-news-detail-state">
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
                    <h1 class="p-news-detail-ttl"><?php echo get_the_title(); ?></h1>
                </div>

                <div class="p-news-detail-content">
                    <div class="c-post-content c-postContent">
                        <?php the_content(); ?>
                    </div>
                </div>

                <a href="/news/" class="c-btn p-news-detail-back">
                    <span>新着情報一覧へ戻る</span>
                </a>
            </div>
        </div>
    </div>
    <?php get_template_part('assets/inc/cta'); ?>
</main>

<?php get_template_part('assets/inc/nav-footer'); ?>
<?php get_footer();?>