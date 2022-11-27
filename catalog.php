<?php /*Template Name: カタログダウンロード */ ?>

<?php get_header();?>
<?php get_template_part('assets/inc/nav-header'); ?>

<main class="l-main">
    <div class="c-page-ttl">
        <div class="u-container u-container--wide">
            <div class="c-page-ttl__txt">
                <p class="c-page-ttl__big"><span>Catalog</span></p>
                <h1 class="c-page-ttl__small"><span>カタログダウンロード</span></h1>
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
                <span itemprop="name">カタログダウンロード</span><meta itemprop="position" content="2">
            </li>
        </ul>
    </div>

    <div class="l-main__inner l-main__inner--col2 u-container u-container--wide">
        <div class="l-contents l-contents--col2">
            <div class="p-catalog">
                <?php 
                    $values = CFS()->get('aboutus-loop');
                    if($values[0]):
                ?>
                <section id="a-aboutus" class="p-catalog-sec">
                    <h2 class="c-headline08 p-catalog-ttl">会社案内</h2>
                    <ul class="p-catalog-list">
                        <?php foreach ($values as $value): ?>
                        <li class="p-catalog-item">
                            <div class="p-catalog-item__img">
                                <?php $img = $value['img']; ?>
                                <?php $img = wp_get_attachment_image_src($img, 'large'); ?>
                                <img src="<?php echo $img[0]; ?>" width="290" height="364" alt="">
                            </div>
                            <h3 class="p-catalog-item__ttl c-headline06"><?php echo $value['ttl']; ?></h3>
                            <a href="<?php echo $value['certific'] == 1 ? '/catalog/form' : $value['pdf']; ?>" target="_blank" rel="noopener" class="c-btn c-btn--white p-catalog-item__btn">
                                <span>閲覧する</span>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </section>
                <?php endif; ?>

                <section class="p-catalog-sec">
                    <h2 class="c-headline08 p-catalog-ttl">動画コンテンツ</h2>
                    <a href="https://movie.takada.co.jp/" class="p-catalog-channel-bnr" target="_blank" rel="noopener">
                        <div class="p-catalog-channel-bnr__logo">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/catalog/channel__logo.webp" type="image/webp">
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/catalog/channel__logo.png" type="image/png">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/catalog/channel__logo.png" width="298" height="84" alt="TAKADA CHANNEL">
                            </picture>
                        </div>
                        <div class="p-catalog-channel-bnr__bg u-of">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/catalog/channel__bg.webp" type="image/webp">
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/catalog/channel__bg.jpg" type="image/jpeg">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/catalog/channel__bg.jpg" width="934" height="224" alt="">
                            </picture>
                        </div>
                    </a>
                </section>

                <?php 
                    $values = CFS()->get('gihou-loop');
                    if($values[0]):
                ?>
                <section id="a-gihou" class="p-catalog-sec">
                    <h2 class="c-headline08 p-catalog-ttl">高田技報（技術情報誌）</h2>

                    <div class="p-catalog-gihou-top-item">
                        <div class="p-catalog-gihou-top-item__img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/catalog/catalog__img03.jpg" width="410" height="290" alt="">
                        </div>
                        <div class="p-catalog-gihou-top-item__txt">
                            <h3 class="p-catalog-gihou-top-item__ttl">
                                高田技報<span class="p-catalog-gihou-top-item__ttl-val">Vol.32</span><span class="p-catalog-gihou-top-item__ttl-issue">2022年 発行</span>
                            </h3>
                            <!-- <p class="p-catalog-gihou-top-item__par">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキ</p> -->
                        </div>
                    </div>

                    <?php 
                        $i = 0;
                        foreach ($values as $value):
                        $i++;
                    ?>
                    <dl class="p-catalog-gihou-item js-acc">
                        <dt class="p-catalog-gihou-item__ttl js-acc-toggle <?php echo $i == 1 ? 'is-acc-open' : ''; ?>">
                            <span class="p-catalog-gihou-item__ttl-vol">【Vol.<?php echo $value['vol']; ?>】<?php echo $value['sub-ttl']; ?></span>
                            <span class="p-catalog-gihou-item__ttl-issue"><?php echo $value['issue']; ?> 発行</span>
                        </dt>
                        <dd class="p-catalog-gihou-item__content js-acc-submenu">
                            <?php if ($value['section'] !== ""): ?>
                            <table>
                                <?php 
                                    $sectionValues = $value['section'];
                                    foreach ((array)$sectionValues as $sectionValue) :
                                ?>
                                <tr>
                                    <th><?php echo $sectionValue['ttl']; ?></th>
                                    <td>
                                        <?php if ($sectionValue['section-loop'] !== ""): ?>
                                        <ul class="p-catalog-gihou-item__content-list">
                                            <?php 
                                                $sectionLoopValues = $sectionValue['section-loop'];
                                                foreach ((array)$sectionLoopValues as $sectionLoopValue) :
                                            ?>
                                            <li class="p-catalog-gihou-item__content-item">
                                                <?php if ($sectionLoopValue['pdf'] !== ""): ?>
                                                <a href="<?php echo $sectionLoopValue['pdf']; ?>" target="_blank" rel="noopener">
                                                <?php endif; ?>
                                                    <?php echo $sectionLoopValue['caption']; ?>
                                                <?php if ($sectionLoopValue['pdf'] !== ""): ?>
                                                </a>
                                                <?php endif; ?>
                                            </li>
                                            <?php endforeach; ?>
                                        </ul>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </table>
                            <?php endif; ?>
                        </dd>
                    </dl>
                    <?php endforeach; ?>
                </section>
                <?php endif; ?>

                <?php 
                    $values = CFS()->get('plant-loop');
                    if($values[0]):
                ?>
                <section id="a-plant" class="p-catalog-sec">
                    <h2 class="c-headline08 p-catalog-ttl">プラント事業／プロジェクト事業／設備診断事業</h2>
                    <ul class="p-catalog-list">
                        <?php foreach ($values as $value): ?>
                            <li class="p-catalog-item">
                                <h3 class="p-catalog-item__ttl c-headline06"><?php echo $value['ttl']; ?></h3>
                                <a href="<?php echo $value['certific'] == 1 ? '/catalog/form' : $value['pdf']; ?>" <?php echo $value['certific'] == 1 ? '' : 'target="_blank"'; ?> rel="noopener" class="c-btn c-btn--white p-catalog-item__btn">
                                    <span>閲覧する</span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </section>
                <?php endif; ?>

                <?php 
                    $values = CFS()->get('eed-loop');
                    if($values[0]):
                ?>
                <section id="a-eed" class="p-catalog-sec">
                    <h2 class="c-headline08 p-catalog-ttl">装置事業</h2>
                    <ul class="p-catalog-list">
                        <?php foreach ($values as $value): ?>
                            <li class="p-catalog-item">
                                <h3 class="p-catalog-item__ttl c-headline06"><?php echo $value['ttl']; ?></h3>
                                <a href="<?php echo $value['certific'] == 1 ? '/catalog/form' : $value['pdf']; ?>" <?php echo $value['certific'] == 1 ? '' : 'target="_blank"'; ?> rel="noopener" class="c-btn c-btn--white p-catalog-item__btn">
                                    <span>閲覧する</span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </section>
                <?php endif; ?>

                <?php 
                    $values = CFS()->get('welding-loop');
                    if($values[0]):
                ?>
                <section id="a-welding" class="p-catalog-sec">
                    <h2 class="c-headline08 p-catalog-ttl">溶接技術／安全・品質・許認可等</h2>
                    <ul class="p-catalog-list">
                        <?php foreach ($values as $value): ?>
                            <li class="p-catalog-item">
                                <h3 class="p-catalog-item__ttl c-headline06"><?php echo $value['ttl']; ?></h3>
                                <a href="<?php echo $value['certific'] == 1 ? '/catalog/form' : $value['pdf']; ?>" <?php echo $value['certific'] == 1 ? '' : 'target="_blank"'; ?> rel="noopener" class="c-btn c-btn--white p-catalog-item__btn">
                                    <span>閲覧する</span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </section>
                <?php endif; ?>
            </div>
        </div>

        <aside class="l-sidebar">
            <?php get_template_part('assets/inc/side-nav_catalog'); ?>
        </aside>
    </div>
</main>

<?php get_template_part('assets/inc/nav-footer'); ?>
<?php get_footer();?>