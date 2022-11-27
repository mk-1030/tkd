<?php /*Template Name: カタログダウンロード (認証後)*/ ?>

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
        <div class="l-contents">
            <div class="p-catalog p-catalog--certification">

                <p class="p-catalog-thanks">カタログダウンロードのフォーム入力にご協力いただきまして、誠にありがとうございます。<br>下記の「ダウンロードページへ進む」ボタンから、各種カタログをダウンロードをお願いします。</p>

                <?php 
                    $page_slug = get_page_by_path('catalog');
                    $page_id = $page_slug->ID;
                    $values = CFS()->get('aboutus-loop',$page_id);
                    $count = 0;
                    if($values[0]):
                    foreach ($values as $value) {
                        if($value['certific'] == 1) {$count++;}
                    }
                    if($count > 0):
                ?>
                <section id="a-eed" class="p-catalog-sec">
                    <h2 class="c-headline08 p-catalog-ttl">会社案内</h2>
                    <ul class="p-catalog-list">
                        <?php foreach ($values as $value): ?>
                            <?php if($value['certific'] == 1): ?>
                            <li class="p-catalog-item">
                                <div class="p-catalog-item__img">
                                    <?php $img = $value['img']; ?>
                                    <?php $img = wp_get_attachment_image_src($img, 'large'); ?>
                                    <img src="<?php echo $img[0]; ?>" width="290" height="364" alt="">
                                </div>
                                <h3 class="p-catalog-item__ttl c-headline06"><?php echo $value['ttl']; ?></h3>
                                <a href="<?php echo $value['pdf']; ?>" target="_blank" rel="noopener" class="c-btn c-btn--white p-catalog-item__btn">
                                    <span>閲覧する</span>
                                </a>
                            </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </section>
                <?php endif; endif; ?>

                <?php 
                    $page_slug = get_page_by_path('catalog');
                    $page_id = $page_slug->ID;
                    $values = CFS()->get('plant-loop',$page_id);
                    $count = 0;
                    if($values[0]):
                    foreach ($values as $value) {
                        if($value['certific'] == 1) {$count++;}
                    }
                    if($count > 0):
                ?>
                <section id="a-eed" class="p-catalog-sec">
                    <h2 class="c-headline08 p-catalog-ttl">プラント事業／プロジェクト事業／設備診断事業</h2>
                    <ul class="p-catalog-list">
                        <?php foreach ($values as $value): ?>
                            <?php if($value['certific'] == 1): ?>
                            <li class="p-catalog-item">
                                <h3 class="p-catalog-item__ttl c-headline06"><?php echo $value['ttl']; ?></h3>
                                <a href="<?php echo $value['pdf']; ?>" target="_blank" rel="noopener" class="c-btn c-btn--white p-catalog-item__btn">
                                    <span>閲覧する</span>
                                </a>
                            </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </section>
                <?php endif; endif; ?>

                <?php 
                    $page_slug = get_page_by_path('catalog');
                    $page_id = $page_slug->ID;
                    $values = CFS()->get('eed-loop',$page_id);
                    $count = 0;
                    if($values[0]):
                    foreach ($values as $value) {
                        if($value['certific'] == 1) {$count++;}
                    }
                    if($count > 0):
                ?>
                <section id="a-eed" class="p-catalog-sec">
                    <h2 class="c-headline08 p-catalog-ttl">装置事業</h2>
                    <ul class="p-catalog-list">
                        <?php foreach ($values as $value): ?>
                            <?php if($value['certific'] == 1): ?>
                            <li class="p-catalog-item">
                                <h3 class="p-catalog-item__ttl c-headline06"><?php echo $value['ttl']; ?></h3>
                                <a href="<?php echo $value['pdf']; ?>" target="_blank" rel="noopener" class="c-btn c-btn--white p-catalog-item__btn">
                                    <span>閲覧する</span>
                                </a>
                            </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </section>
                <?php endif; endif; ?>

                <?php 
                    $page_slug = get_page_by_path('catalog');
                    $page_id = $page_slug->ID;
                    $values = CFS()->get('welding-loop',$page_id);
                    $count = 0;
                    if($values[0]):
                    foreach ($values as $value) {
                        if($value['certific'] == 1) {$count++;}
                    }
                    if($count > 0):
                ?>
                <section id="a-eed" class="p-catalog-sec">
                    <h2 class="c-headline08 p-catalog-ttl">溶接技術／安全・品質・許認可等</h2>
                    <ul class="p-catalog-list">
                        <?php foreach ($values as $value): ?>
                            <?php if($value['certific'] == 1): ?>
                            <li class="p-catalog-item">
                                <h3 class="p-catalog-item__ttl c-headline06"><?php echo $value['ttl']; ?></h3>
                                <a href="<?php echo $value['pdf']; ?>" target="_blank" rel="noopener" class="c-btn c-btn--white p-catalog-item__btn">
                                    <span>閲覧する</span>
                                </a>
                            </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </section>
                <?php endif; endif; ?>

                <a href="/" class="c-btn">
                    <span>トップページへ戻る</span>
                </a>

            </div>
        </div>
    </div>
</main>

<?php get_template_part('assets/inc/nav-footer'); ?>
<?php get_footer();?>