<?php /*Template Name: 企業情報-ヒストリー*/ ?>

<?php get_header();?>
<?php get_template_part('assets/inc/nav-header'); ?>

<main class="l-main">
    <div class="c-page-ttl">
        <div class="u-container u-container--wide">
            <div class="c-page-ttl__txt">
                <p class="c-page-ttl__big"><span>History</span></p>
                <h1 class="c-page-ttl__small"><span>ヒストリー</span></h1>
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
                <a itemprop="item" href="/company/"><span itemprop="name">企業情報</span><meta itemprop="position" content="2"></a>
            </li>
            <li class="separ">|</li>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <span itemprop="name">ヒストリー</span><meta itemprop="position" content="3">
            </li>
        </ul>
    </div>

    <div class="l-main__inner l-main__inner--col2 u-container u-container--wide">
        <div class="l-contents l-contents--col2">
            <div class="p-history">
                <nav class="c-cate-nav">
                    <ul class="c-cate-nav__list">
                        <li class="c-cate-nav__item"><a href="#a-1940"><span>1940年〜<br>創生期</span></a></li>
                        <li class="c-cate-nav__item"><a href="#a-1960"><span>1960年〜<br>第一次成長期</span></a></li>
                        <li class="c-cate-nav__item"><a href="#a-1980"><span>1980年〜<br>安定成長期</span></a></li>
                        <li class="c-cate-nav__item"><a href="#a-2000"><span>2000年〜<br>転換期</span></a></li>
                        <li class="c-cate-nav__item"><a href="#a-2020"><span>2020年〜<br>みらいへ…</span></a></li>
                    </ul>
                </nav>

                <section id="a-1940" class="p-history-sec">
                    <div class="p-history-sec-ttl">
                        <h2 class="p-history-sec-ttl__big">1940年〜</h2>
                        <p class="p-history-sec-ttl__small">創生期 - 経営基盤の構築 -</p>
                    </div>
                    <ul class="p-history-sec-list">
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">1940年09月</p>
                            <p class="p-history-sec-item__txt">現 三菱ケミカル（株）殿福岡事業所内で高田組を創業</p>
                            <div class="p-history-sec-item__img">
                                <picture>
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img1940-09.webp" type="image/webp">
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img1940-09.jpg" type="image/jpeg">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img1940-09.jpg" width="434" height="280" alt="">
                                </picture>
                            </div>
                        </li>
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">1948年06月</p>
                            <p class="p-history-sec-item__txt">（株）高田工業所を設立</p>
                            <div class="p-history-sec-item__img">
                                <picture>
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img1948-06.webp" type="image/webp">
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img1948-06.jpg" type="image/jpeg">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img1948-06.jpg" width="434" height="149" alt="">
                                </picture>
                            </div>
                        </li>
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">1948年12月</p>
                            <p class="p-history-sec-item__txt">現 日本製鉄（株）殿九州製鉄所に八幡作業所（現 八幡支社）を設置</p>
                            <div class="p-history-sec-item__img">
                                <picture>
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img1948-12.webp" type="image/webp">
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img1948-12.jpg" type="image/jpeg">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img1948-12.jpg" width="434" height="281" alt="">
                                </picture>
                            </div>
                        </li>
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">1955年12月</p>
                            <p class="p-history-sec-item__txt">築地工場（現 本社工場）を設置</p>
                        </li>
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">1956年04月</p>
                            <p class="p-history-sec-item__txt">東京出張所（現 東京支店）を設置</p>
                        </li>
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">1959年08月</p>
                            <p class="p-history-sec-item__txt">四日市営業所（現 四日市事業所）を設置</p>
                        </li>
                    </ul>
                </section>

                <section id="a-1960" class="p-history-sec">
                    <div class="p-history-sec-ttl">
                        <h2 class="p-history-sec-ttl__big">1960年〜</h2>
                        <p class="p-history-sec-ttl__small">第一次成長期 - 拠点拡大へ -</p>
                    </div>
                    <ul class="p-history-sec-list">
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">1961年04月</p>
                            <p class="p-history-sec-item__txt">長浜出張所（現 長浜事業所）を設置</p>
                        </li>
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">1963年12月</p>
                            <p class="p-history-sec-item__txt">水島事業所（現 中四国支社）を設置</p>
                        </li>
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">1965年09月</p>
                            <p class="p-history-sec-item__txt">大阪出張所（現 大阪事業所）を設置</p>
                        </li>
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">1965年11月</p>
                            <p class="p-history-sec-item__txt">東海村日本原子力研究所の燃料再処理実験装置配管工事を施工し、原子力関連分野の第一歩を記す</p>
                            <div class="p-history-sec-item__img">
                                <picture>
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img1965-11.webp" type="image/webp">
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img1965-11.jpg" type="image/jpeg">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img1965-11.jpg" width="221" height="342" alt="">
                                </picture>
                            </div>
                        </li>
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">1966年01月</p>
                            <p class="p-history-sec-item__txt">インド・バローダ市へ、アンモニア・ユリアプラント建設で、初の海外進出</p>
                            <div class="p-history-sec-item__img">
                                <picture>
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img1966-01.webp" type="image/webp">
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img1966-01.jpg" type="image/jpeg">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img1966-01.jpg" width="434" height="280" alt="">
                                </picture>
                            </div>
                        </li>
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">1968年04月</p>
                            <p class="p-history-sec-item__txt">君津営業所（現 君津支社）を設置</p>
                        </li>
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">1971年02月</p>
                            <p class="p-history-sec-item__txt">シンガポール高田工業を設立</p>
                            <div class="p-history-sec-item__img">
                                <picture>
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img1971-02.webp" type="image/webp">
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img1971-02.jpg" type="image/jpeg">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img1971-02.jpg" width="377" height="280" alt="">
                                </picture>
                            </div>
                        </li>
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">1973年10月</p>
                            <p class="p-history-sec-item__txt">鹿島出張所（現 鹿島事業所）を設置</p>
                        </li>
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">1975年10月</p>
                            <p class="p-history-sec-item__txt">神戸営業所（現 西日本営業部 大阪オフィス）を設置</p>
                        </li>
                    </ul>
                </section>

                <section id="a-1980" class="p-history-sec">
                    <div class="p-history-sec-ttl">
                        <h2 class="p-history-sec-ttl__big">1980年〜</h2>
                        <p class="p-history-sec-ttl__small">安定成長期 - 社会から認知される企業へ -</p>
                    </div>
                    <ul class="p-history-sec-list">
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">1981年05月</p>
                            <p class="p-history-sec-item__txt">京葉出張所（現 京葉支社）を設置</p>
                        </li>
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">1981年09月</p>
                            <p class="p-history-sec-item__txt">高田プラント建設（株）を設立</p>
                            <div class="p-history-sec-item__img">
                                <picture>
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img1981-09.webp" type="image/webp">
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img1981-09.jpg" type="image/jpeg">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img1981-09.jpg" width="425" height="280" alt="">
                                </picture>
                            </div>
                        </li>
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">1982年04月</p>
                            <p class="p-history-sec-item__txt">高田サービス（株）を設立</p>
                        </li>
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">1982年09月</p>
                            <p class="p-history-sec-item__txt">高田マレーシアを設立</p>
                            <div class="p-history-sec-item__img">
                                <picture>
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img1982-09.webp" type="image/webp">
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img1982-09.jpg" type="image/jpeg">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img1982-09.jpg" width="434" height="248" alt="">
                                </picture>
                            </div>
                        </li>
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">1983年05月</p>
                            <p class="p-history-sec-item__txt">福岡営業所（現 西日本営業部 福岡オフィス）を設置</p>
                        </li>
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">1983年11月</p>
                            <p class="p-history-sec-item__txt">福岡証券取引所に株式上場</p>
                            <div class="p-history-sec-item__img">
                                <picture>
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img1983-11.webp" type="image/webp">
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img1983-11.jpg" type="image/jpeg">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img1983-11.jpg" width="434" height="280" alt="">
                                </picture>
                            </div>
                        </li>
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">1993年01月</p>
                            <p class="p-history-sec-item__txt">大阪証券取引所市場（現 東京証券取引所市場）第二部に株式上場</p>
                            <div class="p-history-sec-item__img">
                                <picture>
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img1993-01.webp" type="image/webp">
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img1993-01.jpg" type="image/jpeg">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img1993-01.jpg" width="434" height="280" alt="">
                                </picture>
                            </div>
                        </li>
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">1995年06月</p>
                            <p class="p-history-sec-item__txt">TAKADA研修センターを落成</p>
                            <div class="p-history-sec-item__img">
                                <picture>
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img1995-06.webp" type="image/webp">
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img1995-06.jpg" type="image/jpeg">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img1995-06.jpg" width="434" height="280" alt="">
                                </picture>
                            </div>
                        </li>
                    </ul>
                </section>

                <section id="a-2000" class="p-history-sec">
                    <div class="p-history-sec-ttl">
                        <h2 class="p-history-sec-ttl__big">2000年〜</h2>
                        <p class="p-history-sec-ttl__small">転換期 - 新規事業へ参入、旧弊を脱却 -</p>
                    </div>
                    <ul class="p-history-sec-list">
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">2003年06月</p>
                            <p class="p-history-sec-item__txt">執行役員制度導入</p>
                        </li>
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">2004年01月</p>
                            <p class="p-history-sec-item__txt">コンプライアンス推進室を設置</p>
                            <div class="p-history-sec-item__img">
                                <picture>
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img2004-01.webp" type="image/webp">
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img2004-01.jpg" type="image/jpeg">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img2004-01.jpg" width="215" height="304" alt="">
                                </picture>
                            </div>
                        </li>
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">2005年02月</p>
                            <p class="p-history-sec-item__txt">第1回技能オリンピック全社大会を開催</p>
                            <div class="p-history-sec-item__img">
                                <picture>
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img2005-02.webp" type="image/webp">
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img2005-02.jpg" type="image/jpeg">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img2005-02.jpg" width="434" height="280" alt="">
                                </picture>
                            </div>
                        </li>
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">2005年04月</p>
                            <p class="p-history-sec-item__txt">TAKADA研修センターに教育訓練用モデルトレーニング設備を設置</p>
                        </li>
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">2007年04月</p>
                            <p class="p-history-sec-item__txt">超音波関連事業へ参入</p>
                        </li>
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">2010年12月</p>
                            <p class="p-history-sec-item__txt">電流情報量診断システムが『TPM優秀商品賞』を受賞</p>
                        </li>
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">2011年11月</p>
                            <p class="p-history-sec-item__txt">超音波切断装置を商品化</p>
                            <div class="p-history-sec-item__img">
                                <picture>
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img2011-11.webp" type="image/webp">
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img2011-11.jpg" type="image/jpeg">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img2011-11.jpg" width="171" height="225" alt="">
                                </picture>
                            </div>
                        </li>
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">2012年12月</p>
                            <p class="p-history-sec-item__txt">タイ高田（現　高田アジア）を設立</p>
                        </li>
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">2015年11月</p>
                            <p class="p-history-sec-item__txt">菊池タイの株式を取得</p>
                            <div class="p-history-sec-item__img">
                                <picture>
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img2015-11.webp" type="image/webp">
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img2015-11.jpg" type="image/jpeg">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img2015-11.jpg" width="340" height="280" alt="">
                                </picture>
                            </div>
                        </li>
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">2016年01月</p>
                            <p class="p-history-sec-item__txt">中四国支社を設置</p>
                        </li>
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">2016年04月</p>
                            <p class="p-history-sec-item__txt">電流情報量診断システムを販売開始</p>
                        </li>
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">2017年02月</p>
                            <p class="p-history-sec-item__txt">タイ高田を地域統括会社「高田アジア」へ移行</p>
                        </li>
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">2019年04月</p>
                            <p class="p-history-sec-item__txt">クラウド型回転機械診断サービス「TM-CLOUD」を販売開始</p>
                        </li>
                    </ul>
                </section>

                <section id="a-2020" class="p-history-sec">
                    <div class="p-history-sec-ttl">
                        <h2 class="p-history-sec-ttl__big">2020年〜</h2>
                        <p class="p-history-sec-ttl__small">みらいへ… - 創業100周年に向けて新しいTAKADAへ - </p>
                    </div>
                    <ul class="p-history-sec-list">
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">2020年07月</p>
                            <p class="p-history-sec-item__txt">・渡部工業株式会社の株式を取得</p>
                            <p class="p-history-sec-item__txt">・みらいプロジェクト2040発足</p>
                            <div class="p-history-sec-item__img">
                                <picture>
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img2020-07.webp" type="image/webp">
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img2020-07.jpg" type="image/jpeg">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img2020-07.jpg" width="434" height="208" alt="">
                                </picture>
                            </div>
                        </li>
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">2020年12月</p>
                            <p class="p-history-sec-item__txt">超音波カッティング装置「CSX501」販売開始</p>
                            <div class="p-history-sec-item__img">
                                <picture>
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img2020-12.webp" type="image/webp">
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img2020-12.jpg" type="image/jpeg">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img2020-12.jpg" width="276" height="246" alt="">
                                </picture>
                            </div>
                        </li>
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">2021年04月</p>
                            <p class="p-history-sec-item__txt">・西日本営業部を設置</p>
                            <p class="p-history-sec-item__txt">・65歳定年延長制度の導入</p>
                        </li>
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">2022年4月</p>
                            <p class="p-history-sec-item__txt">九州大学と「磯焼け海域における駆除ウニの陸上養殖」を目的とした共同研究契約を締結</p>
                            <div class="p-history-sec-item__img">
                                <picture>
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img2022-04.webp" type="image/webp">
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img2022-04.jpg" type="image/jpeg">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img2022-04.jpg" width="247" height="247" alt="">
                                </picture>
                            </div>
                        </li>
                        <li class="p-history-sec-item">
                            <p class="p-history-sec-item__date">2022年5月</p>
                            <p class="p-history-sec-item__txt">「宗像市SDGs豊かな海づくりに関する連携協定」を締結</p>
                            <div class="p-history-sec-item__img">
                                <picture>
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img2022-05.webp" type="image/webp">
                                    <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img2022-05.jpg" type="image/jpeg">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company/history/item__img2022-05.jpg" width="434" height="246" alt="">
                                </picture>
                            </div>
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