<?php /*Template Name: 企業情報-グループ会社一覧*/ ?>

<?php get_header();?>
<?php get_template_part('assets/inc/nav-header'); ?>

<main class="l-main">
    <div class="c-page-ttl">
        <div class="u-container u-container--wide">
            <div class="c-page-ttl__txt">
                <p class="c-page-ttl__big"><span>Group Company</span></p>
                <h1 class="c-page-ttl__small"><span>グループ会社一覧</span></h1>
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
                <a itemprop="item" href="/company/"><span itemprop="name">企業情報</span></a><meta itemprop="position" content="2">
            </li>
            <li class="separ">|</li>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <span itemprop="name">グループ会社一覧</span><meta itemprop="position" content="3">
            </li>
        </ul>
    </div>

    <div class="l-main__inner l-main__inner--col2 u-container u-container--wide">
        <div class="l-contents l-contents--col2">
            <div class="p-group">
                <section class="p-group-sec">
                    <h2 class="c-headline02 p-group-sec-ttl">国内</h2>
                    <ul class="p-group-sec-list">
                        <li class="p-group-sec-item">
                            <h3 class="p-group-sec-item__ttl c-headline06">高田プラント建設株式会社</h3>
                            <p class="p-group-sec-item__txt">〒807-0831<br>福岡県北九州市八幡西区則松5丁目11-16<br>TEL : 093-601-5310&emsp;FAX : 093-601-2150</p>
                            <a href="https://www.takada-plant.co.jp" target="_blank" rel="noopener" class="c-btn c-btn--white c-btn--icon c-btn--ex-link c-btn--ex-link-center p-group-sec-item__btn">
                                <span>ホームページはこちら</span>
                            </a>
                        </li>
                        <li class="p-group-sec-item">
                            <h3 class="p-group-sec-item__ttl c-headline06">高田サービス株式会社</h3>
                            <div class="p-group-sec-item__inr">
                                <p class="p-group-sec-item__txt">〒806-8567<br>福岡県北九州市八幡西区築地町1番1号<br>TEL : 093-632-2641&emsp;FAX : 093-632-1022</p>
                                <dl class="p-group-sec-item__results">
                                    <dt>決算公告</dt>
                                    <dd>
                                        <form action="" name="jsLinkSelect" class="p-group-sec-item__link-select">
                                            <div class="c-select">
                                                <select name="select">
                                                    <option value="" hidden>選択してください</option>
                                                    <option value="<?php echo get_stylesheet_directory_uri(); ?>/assets/pdf/18tsk.pdf" target="_blank">2018年</option>
                                                    <option value="<?php echo get_stylesheet_directory_uri(); ?>/assets/pdf/18tsk.pdf" target="_blank">2019年</option>
                                                    <option value="<?php echo get_stylesheet_directory_uri(); ?>/assets/pdf/18tsk.pdf" target="_blank">2020年</option>
                                                    <option value="<?php echo get_stylesheet_directory_uri(); ?>/assets/pdf/18tsk.pdf" target="_blank">2021年</option>
                                                    <option value="<?php echo get_stylesheet_directory_uri(); ?>/assets/pdf/18tsk.pdf" target="_blank">2022年</option>
                                                </select>
                                            </div>
                                            <button class="c-input-btn js-link-select-btn" type="button">PDFを表示</button>
                                        </form>
                                    </dd>
                                </dl>
                            </div>
                        </li>
                        <li class="p-group-sec-item">
                            <h3 class="p-group-sec-item__ttl c-headline06">渡部工業株式会社</h3>
                            <p class="p-group-sec-item__txt">〒053-0052<br>北海道苫小牧市新開町3丁目9-4<br>TEL : 0144-57-5252&emsp;FAX : 0144-55-6940</p>
                            <a href="http://watabe-k.jp" target="_blank" rel="noopener" class="c-btn c-btn--white c-btn--icon c-btn--ex-link c-btn--ex-link-center p-group-sec-item__btn">
                                <span>ホームページはこちら</span>
                            </a>
                        </li>
                    </ul>
                </section>

                <section class="p-group-sec">
                    <h2 class="c-headline02 p-group-sec-ttl">海外</h2>
                    <ul class="p-group-sec-list">
                        <li class="p-group-sec-item">
                            <h3 class="p-group-sec-item__ttl c-headline06">TAKADA CORPORATION ASIA LTD.&emsp;（高田アジア）</h3>
                            <p class="p-group-sec-item__txt">140 One Pacific Place Bldg.,16th Fl., Unit 1601-03,Sukhumvit Rd., Klongtoey District, Bangkok 10110<br>TEL : +66-2-254-7698&emsp;FAX : +66-2-653-2312</p>
                            <a href="https://www.thaitakada.co.th/webpage/index.html" target="_blank" rel="noopener" class="c-btn c-btn--white c-btn--icon c-btn--ex-link c-btn--ex-link-center p-group-sec-item__btn">
                                <span>ホームページはこちら</span>
                            </a>
                        </li>
                        <li class="p-group-sec-item">
                            <h3 class="p-group-sec-item__ttl c-headline06">SINGAPORE TAKADA INDUSTRIES PTE., LTD.&emsp;（シンガポール高田工業）</h3>
                            <p class="p-group-sec-item__txt">51 Gul Road Singapore 629352<br>TEL : +65-68613666&emsp;FAX : +65-68616746</p>
                            <a href="https://www.takada.com.sg" target="_blank" rel="noopener" class="c-btn c-btn--white c-btn--icon c-btn--ex-link c-btn--ex-link-center p-group-sec-item__btn">
                                <span>ホームページはこちら</span>
                            </a>
                        </li>
                        <li class="p-group-sec-item">
                            <h3 class="p-group-sec-item__ttl c-headline06">SRI TAKADA INDUSTRIES（MALAYSIA）SDN. BHD.&emsp;（高田マレーシア）</h3>
                            <p class="p-group-sec-item__txt">No.18, Lorong Keluli 1B, Kawasan Perindustrian Bukit Raja Selatan, Seksyen 7, 40000 Shah Alam, Selangor Darul Ehsan, Malaysia<br>TEL : +60-3-2035-5948&emsp;FAX : +60-3-33435951</p>
                            <a href="http://www.sritakada.com.my" target="_blank" rel="noopener" class="c-btn c-btn--white c-btn--icon c-btn--ex-link c-btn--ex-link-center p-group-sec-item__btn">
                                <span>ホームページはこちら</span>
                            </a>
                        </li>
                        <li class="p-group-sec-item">
                            <h3 class="p-group-sec-item__ttl c-headline06">KIKUCHI INDUSTRY（THAILAND）CO., LTD.&emsp;（菊池タイ）</h3>
                            <p class="p-group-sec-item__txt">8/1-8/2 Seri 9Rd., Suanluang, Suanluang, Bangkok 10250<br>TEL : +66-2-719-0365&emsp;FAX : +66-2-719-0367</p>
                        </li>
                    </ul>
                </section>
            </div>
        </div>

        <aside class="l-sidebar">
            <?php get_template_part('assets/inc/side-nav_company'); ?>
        </aside>
    </div>
    <?php get_template_part('assets/inc/cta'); ?>
</main>

<?php get_template_part('assets/inc/nav-footer'); ?>
<?php get_footer();?>