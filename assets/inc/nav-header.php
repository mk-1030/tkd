<?php $url = $_SERVER["REQUEST_URI"];?>

<header class="l-header js-header">
    <div class="l-header__always-wrap">
        <div class="l-header__always">
            <a class="l-header__logo" href="/">
            <?php if($url == "/") { ?><h1><?php }?>
                <img class="logo__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/logo.svg" width="143" height="33" alt="高田製作所">
            <?php if($url == "/") { ?></h1><?php }?>
            </a>

            <nav class="l-header__pc-nav">
                <ul>
                    <li><a href="/company/">企業情報</a></li>
                    <li><a href="/business/">事業紹介</a></li>
                    <li><a href="/ir/">IR情報</a></li>
                    <li><a href="/sustainability/">サステナビリティ</a></li>
                    <li><a href="/recruit/">採用情報</a></li>
                    <li><a href="/catalog/">カタログ</a></li>
                </ul>
            </nav>

            <div class="l-header__lang-sw">
                <ul>
                    <li class="is-active"><span>JP</span></li>
                    <li><a href="/en/">EN</a></li>
                </ul>
            </div>

            <div class="l-header__hum js-hum">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>

        <a class="l-header__contact" href="/contact/">お問い合わせ</a>
    </div>

    <div class="l-header__sp-nav-wrap">
        <nav class="l-header__sp-nav">
            <ul class="l-header__nav-layer-1st">
                <li class="js-acc">
                    <a href="/company/">企業情報</a>
                    <div class="nav-toggle js-acc-toggle"></div>
                    <div class="js-acc-submenu">
                        <ul class="l-header__nav-layer-2nd">
                            <li><a href="/company/top-message/">トップメッセージ</a></li>
                            <li><a href="/company/about-us/">会社情報</a></li>
                            <li><a href="/company/history/">ヒストリー</a></li>
                            <li><a href="/company/organization-chart/">組織図</a></li>
                            <li><a href="/company/officer-introduction/">役員一覧</a></li>
                            <li><a href="/company/business-offices/">拠点一覧</a></li>
                            <li><a href="/company/group-company/">グループ会社一覧</a></li>
                            <li><a href="/company/takadas-strengths/">TAKADAの強み</a></li>
                        </ul>
                    </div>
                </li>
                <li class="js-acc">
                    <a href="/business/">事業紹介</a>
                    <div class="nav-toggle js-acc-toggle"></div>
                    <div class="js-acc-submenu">
                        <ul class="l-header__nav-layer-2nd">
                            <li><a href="/business/plant-business/">プラント事業</a></li>
                            <li><a href="/business/project-business/">プロジェクト事業</a></li>
                            <li><a href="/business/edb/">設備診断事業</a></li>
                            <li><a href="/business/eeb/">装置事業</a></li>
                            <li><a href="/business/pcm/">創る・築く・守る</a></li>
                        </ul>
                    </div>
                </li>
                <li class="js-acc">
                    <a href="/ir/">IR情報</a>
                    <div class="nav-toggle js-acc-toggle"></div>
                    <div class="js-acc-submenu">
                        <ul class="l-header__nav-layer-2nd">
                            <li><a href="/ir/management-policy/">経営方針</a></li>
                            <li><a href="/ir/financial-info/">財務・業績情報</a></li>
                            <li><a href="/ir/library/">IRライブラリ</a></li>
                            <li><a href="/ir/stocks-and-bonds/">株式・債券情報</a></li>
                            <li><a href="/ir/ir-news/">IRニュース</a></li>
                        </ul>
                    </div>
                </li>
                <li class="js-acc">
                    <a href="/sustainability/">CSR</a>
                    <div class="nav-toggle js-acc-toggle"></div>
                    <div class="js-acc-submenu">
                        <ul class="l-header__nav-layer-2nd">
                            <li><a href="/sustainability/environment/">環境・社会</a></li>
                            <li><a href="/sustainability/governance/">ガバナンス</a></li>
                            <li><a href="/sustainability/future/">みらいに続く豊かな海づくり</a></li>
                            <li><a href="/sustainability/foundation/">たかだ基金</a></li>
                        </ul>
                    </div>
                </li>
                <li class="js-acc">
                    <a href="/recruit/">採用情報</a>
                    <div class="nav-toggle js-acc-toggle"></div>
                    <div class="js-acc-submenu">
                        <ul class="l-header__nav-layer-2nd">
                            <li><a href="/recruit/">新卒採用（事務・技術系）</a></li>
                            <li><a href="/recruit/">新卒採用（技能系）</a></li>
                            <li><a href="/recruit/career-recruit/">中途採用</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="/" target="_blank" rel="noopener">TAKADA CHANEL</a></li>
                <li><a href="/news/">新着情報</a></li>
                <li><a href="/catalog/">カタログダウンロード</a></li>
                <li><a href="/employee-magazine/">社内報</a></li>
                <li><a href="/contact/">お問い合わせ</a></li>
                <li><a href="/privacy-policy/">個人情報保護方針</a></li>
                <li><a href="/site-policy/">サイトポリシー</a></li>
                <li><a href="https://www.takadakenpo.or.jp" target="_blank" rel="noopener">高田工業所健康保険組合</a></li>
            </ul>
        </nav>
    </div>
</header>
