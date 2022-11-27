<?php /*Template Name: サステナビリティ*/ ?>

<?php get_header();?>
<?php get_template_part('assets/inc/nav-header'); ?>

<main class="l-main">
    <div class="c-page-ttl">
        <div class="u-container u-container--wide">
            <div class="c-page-ttl__txt">
                <p class="c-page-ttl__big"><span>Sustainabiliy</span></p>
                <h1 class="c-page-ttl__small"><span>サステナビリティ</span></h1>
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
                <span itemprop="name">サステナビリティ</span><meta itemprop="position" content="2">
            </li>
        </ul>
    </div>

    <div class="l-main__inner">
        <div class="l-contents">
            <div class="p-sustainability">
                <div class="p-sustainability-hero">
                    <div class="p-sustainability-hero__img">
                        <picture>
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/takada.webp" type="image/webp">
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/takada.jpg" type="image/jpeg">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/takada.jpg" width="1366" height="448" alt="">
                        </picture>
                    </div>
                    <div class="p-sustainability-hero__txt">
                        <h2 class="p-sustainability-hero__ttl">TAKADAが目指すもの</h2>
                        <p class="p-sustainability-hero__par">私たちは、創業80年を超える歴史ある企業として、また創業100周年の未来に向けて、自らの成長と共に、社会に対して果たすべき責任とその重要性についても深く考え、チャレンジを続けます。</p>
                    </div>
                </div>
    
                <section class="p-sustainability-sec">
                    <div class="u-container u-container--wide">
                        <h2 class="c-headline08 p-sustainability-ttl">持続可能な社会の実現に向けた取り組み</h2>
                        <section class="p-sustainability-sdgs-sec">
                            <h3 class="c-headline10 p-sustainability-sdgs-ttl"><span>取り組み方針</span></h3>
                            <p class="p-sustainability-par">TAKADAの<span class="p-sustainability-par-red">持続的な企業価値の向上</span>と<span class="p-sustainability-par-red">安定した成長を達成する</span>ための活動を通じて、SDGsの達成に貢献します。</p>
                        </section>
                        <section class="p-sustainability-sdgs-sec">
                            <h3 class="c-headline10 p-sustainability-sdgs-ttl"><span>実施例</span></h3>
                            <div class="p-sustainability-sdgs-table__wrap js-scrollable">
                                <table class="p-sustainability-sdgs-table">
                                    <thead>
                                        <tr>
                                            <th colspan="2"></th>
                                            <th>注力するSDGs目標</th>
                                            <th>共通目標</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th class="red">人権</th>
                                            <td>社員を始めとするステークホルダーのすべてが健康でいきいき働く環境づくりを目指します。</td>
                                            <td>
                                                <ul>
                                                    <li>
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/sdgs03.jpg" width="84" height="84" alt="">
                                                        健康・福祉
                                                    </li>
                                                    <li>
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/sdgs04.jpg" width="84" height="84" alt="">
                                                        教育・人材育成
                                                    </li>
                                                    <li>
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/sdgs05.jpg" width="84" height="84" alt="">
                                                        ジェンダー平等
                                                    </li>
                                                </ul>
                                            </td>
                                            <td rowspan="3">
                                                <ul class="column">
                                                    <li>
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/sdgs16.jpg" width="84" height="84" alt="">
                                                        平和と公正
                                                    </li>
                                                    <li>
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/sdgs17.jpg" width="84" height="84" alt="">
                                                        パートナーシップ
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="blue">社会・経済</th>
                                            <td>事業基礎のさらなる強化とイノベーションの創出により社会の発展に貢献します。</td>
                                            <td>
                                                <ul>
                                                    <li>
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/sdgs07.jpg" width="84" height="84" alt="">
                                                        エネルギー
                                                    </li>
                                                    <li>
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/sdgs08.jpg" width="84" height="84" alt="">
                                                        働きがい<br>経済成長
                                                    </li>
                                                    <li>
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/sdgs09.jpg" width="84" height="84" alt="">
                                                        産業・技術革新
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="green">環境</th>
                                            <td>自然環境への負荷を低減させる活動を地域と連携して推進します。</td>
                                            <td>
                                                <ul>
                                                    <li>
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/sdgs12.jpg" width="84" height="84" alt="">
                                                        つくる・つかう<br>循環型経済
                                                    </li>
                                                    <li>
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/sdgs13.jpg" width="84" height="84" alt="">
                                                        気候変動対策
                                                    </li>
                                                </ul>
                                                <ul>
                                                    <li>
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/sdgs14.jpg" width="84" height="84" alt="">
                                                        海を守る
                                                    </li>
                                                    <li>
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/sdgs15.jpg" width="84" height="84" alt="">
                                                        陸を守る
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p class="p-sustainability-par p-sustainability-sdgs-catch">TAKADAは「脱酸素社会」と「循環型経済」の実現に向けて、積極的にチャレンジします。</p>
                        </section>
                    </div>
                </section>

                <section class="p-sustainability-sec">
                    <div class="p-sustainability-hero">
                        <div class="p-sustainability-hero__img">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/takada-light.webp" type="image/webp">
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/takada-light.jpg" type="image/jpeg">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/takada-light.jpg" width="1366" height="448" alt="">
                            </picture>
                        </div>
                        <div class="p-sustainability-hero__txt">
                            <h2 class="p-sustainability-hero__ttl">TAKADAグループの誓い</h2>
                            <p class="p-sustainability-hero__par">我々TAKADAグループの役員、社員は社是「純情 情熱 希望」の精神に則り、法令・規則や社内規定を遵守するとともに、企業理念「人間創造 技術創造 事業創造」にふさわしい企業活動を行います。</p>
                        </div>
                    </div>

                    <div class="u-container u-container--wide">
                        <section class="p-sustainability-oath">
                            <ul class="p-sustainability-oath--list">
                                <li class="p-sustainability-oath--item">
                                    <h3 class="p-sustainability-oath--ttl">社是</h3>
                                    <div class="p-sustainability-oath--txt">
                                        <p class="p-sustainability-oath--txt-caption">TAKADAは、いつも「心」を大切にします。</p>
                                        <p class="p-sustainability-oath--txt-catch">純情・情熱・希望</p>
                                    </div>
                                </li>
                                <li class="p-sustainability-oath--item">
                                    <h3 class="p-sustainability-oath--ttl">行動指針</h3>
                                    <div class="p-sustainability-oath--txt">
                                        <p class="p-sustainability-oath--txt-caption">私たちTAKADAの社員は、誓います。</p>
                                        <dl class="p-sustainability-oath--txt-catch-list">
                                            <dt>Thinking</dt>
                                            <dd>私たちは、よく考えて</dd>
                                        </dl>
                                        <dl class="p-sustainability-oath--txt-catch-list">
                                            <dt>Action</dt>
                                            <dd>すぐ実行します。</dd>
                                        </dl>
                                        <dl class="p-sustainability-oath--txt-catch-list">
                                            <dt>Know-how</dt>
                                            <dd>私たちは、知恵を生かして、</dd>
                                        </dl>
                                        <dl class="p-sustainability-oath--txt-catch-list">
                                            <dt>Ability</dt>
                                            <dd>能力を高めます。</dd>
                                        </dl>
                                        <dl class="p-sustainability-oath--txt-catch-list">
                                            <dt>Development</dt>
                                            <dd>私たちは、新しい価値を求めて</dd>
                                        </dl>
                                        <dl class="p-sustainability-oath--txt-catch-list">
                                            <dt>Adventure</dt>
                                            <dd>明日に挑みます。</dd>
                                        </dl>
                                    </div>
                                </li>
                                <li class="p-sustainability-oath--item">
                                    <h3 class="p-sustainability-oath--ttl">経営理念</h3>
                                    <div class="p-sustainability-oath--txt">
                                        <p class="p-sustainability-oath--txt-caption">TAKADAは、未来に向かって「創造」を宣言します。</p>
                                        <p class="p-sustainability-oath--txt-catch">人間創造　技術創造　事業創造</p>
                                    </div>
                                </li>
                                <li class="p-sustainability-oath--item">
                                    <h3 class="p-sustainability-oath--ttl">コンセプトワード</h3>
                                    <div class="p-sustainability-oath--txt">
                                        <p class="p-sustainability-oath--txt-catch">新「技・能」創造</p>
                                    </div>
                                </li>
                            </ul>
                        </section>
                        
                        <ul class="p-sustainability-link-list">
                            <li class="p-sustainability-link-item">
                                <a href="/sustainability/environment/#environment-sec" class="u-hover-fade">
                                    <h2 class="p-sustainability-link-item__ttl">環境</h2>
                                    <div class="p-sustainability-link-item__img u-of">
                                        <picture>
                                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/environment.webp" type="image/webp">
                                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/environment.jpg" type="image/jpeg">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/environment.jpg" width="363" height="224" alt="">
                                        </picture>
                                    </div>
                                    <p class="p-sustainability-link-item__num">01</p>
                                </a>
                            </li>
                            <li class="p-sustainability-link-item">
                                <a href="/sustainability/environment/#community-sec" class="u-hover-fade">
                                    <h2 class="p-sustainability-link-item__ttl">社会</h2>
                                    <div class="p-sustainability-link-item__img u-of">
                                        <picture>
                                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/community.webp" type="image/webp">
                                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/community.jpg" type="image/jpeg">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/community.jpg" width="363" height="224" alt="">
                                        </picture>
                                    </div>
                                    <p class="p-sustainability-link-item__num">02</p>
                                </a>
                            </li>
                            <li class="p-sustainability-link-item">
                                <a href="/sustainability/governance/" class="u-hover-fade">
                                    <h2 class="p-sustainability-link-item__ttl">ガバナンス</h2>
                                    <div class="p-sustainability-link-item__img u-of">
                                        <picture>
                                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/governance.webp" type="image/webp">
                                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/governance.jpg" type="image/jpeg">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/governance.jpg" width="363" height="224" alt="">
                                        </picture>
                                    </div>
                                    <p class="p-sustainability-link-item__num">03</p>
                                </a>
                            </li>
                            <li class="p-sustainability-link-item">
                                <a href="/sustainability/future/" class="u-hover-fade">
                                    <h2 class="p-sustainability-link-item__ttl">みらいに続く豊かな海づくり</h2>
                                    <div class="p-sustainability-link-item__img u-of">
                                        <picture>
                                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/future.webp" type="image/webp">
                                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/future.jpg" type="image/jpeg">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/future.jpg" width="363" height="224" alt="">
                                        </picture>
                                    </div>
                                    <p class="p-sustainability-link-item__num">04</p>
                                </a>
                            </li>
                            <li class="p-sustainability-link-item">
                                <a href="/sustainability/foundation/" class="u-hover-fade">
                                    <h2 class="p-sustainability-link-item__ttl">たかだ基金</h2>
                                    <div class="p-sustainability-link-item__img u-of">
                                        <picture>
                                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/foundation.webp" type="image/webp">
                                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/foundation.jpg" type="image/jpeg">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sustainability/foundation.jpg" width="363" height="224" alt="">
                                        </picture>
                                    </div>
                                    <p class="p-sustainability-link-item__num">05</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <?php get_template_part('assets/inc/cta'); ?>
</main>

<?php get_template_part('assets/inc/nav-footer'); ?>
<?php get_footer();?>
