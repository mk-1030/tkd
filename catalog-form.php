<?php /*Template Name: カタログダウンロード-入力画面 */ ?>

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
                <a itemprop="item" href="/catalog/"><span itemprop="name">カタログダウンロード</span></a><meta itemprop="position" content="2">
            </li>
            <li class="separ">|</li>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <span itemprop="name">入力画面</span><meta itemprop="position" content="3">
            </li>
        </ul>
    </div>

    <div class="l-main__inner u-container">
        <div class="l-contents">
            <div class="p-contact">
                <form name="form1" data-name="catalogForm" action="https://pro.form-mailer.jp/fm/service/Forms/complete" method="post" ENCTYPE="multipart/form-data" accept-charset="UTF-8" class="js-form">
                    <input type="hidden" name="key" value="d0671a01271794">

                    <div class="p-contact-notice p-contact-notice--explan js-input-el">
                        <p>必要事項をご記入の上、ページ下にある「入力内容を確認する」ボタンをクリックしてください。<br><span class="c-form-required">必須</span>のあるものは入力必須項目です。</p>
                    </div>

                    <div class="p-contact-notice p-contact-notice--explan js-confirm-el is-hidden">
                        <p>こちらの入力内容で送信します。<br>内容に間違いがあった場合は「入力画面に戻る」にて修正してください。<br>問題がなければ「送信する」にて送信確定させてください。</p>
                    </div>

                    <div class="p-contact-inputs">
                        <table class="c-table p-contact-inputs__table">
                            <tr>
                                <th>お名前<span class="c-form-required">必須</span></th>
                                <td><span class="c-form-wrap"><input type="text" name="field_4232890" data-name="yourName" value="" size="40" class="c-input js-input-item" aria-required="true" aria-invalid="false" required></span></td>
                            </tr>
                            <tr>
                                <th>フリガナ</th>
                                <td><span class="c-form-wrap"><input type="text" name="field_4232891" data-name="yourFurigana" value="" size="40" class="c-input js-input-item" pattern="^[\u30A0-\u30FF\uFF61-\uFF9F\s\u3000\u00A0]+$" data-invalid="カタカナで入力してください。" aria-invalid="false"></span></td>
                            </tr>
                            <tr>
                                <th>会社名<span class="c-form-required">必須</span></th>
                                <td><span class="c-form-wrap"><input type="text" name="field_4232892" data-name="yourCompany" value="" size="40" class="c-input js-input-item" aria-required="true" aria-invalid="false" required></span></td>
                            </tr>
                            <tr>
                                <th>部署名</th>
                                <td><span class="c-form-wrap"><input type="text" name="field_4232893" data-name="yourCivision" value="" size="40" class="c-input js-input-item" aria-invalid="false"></span></td>
                            </th>
                            <tr>
                                <th>メールアドレス<span class="c-form-required">必須</span></th>
                                <td>
                                    <span class="c-form-wrap"><input type="email" name="field_4232898" data-name="yourEmail" value="" size="40" class="c-input js-input-item" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" aria-required="true" aria-invalid="false" placeholder="例）info@takada.co.jp（半角英数）" required></span>
                                    <span class="p-contact-inputs-note js-input-el">確認の為に再度ご入力ください。</span>
                                    <span class="c-form-wrap"><input type="email" name="field_4232898_mcon" data-name="yourEmailVerify" value="" size="40" class="c-input js-input-item" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" aria-required="true" aria-invalid="false" placeholder="" required></span>
                                </td>
                            </tr>
                            <tr>
                                <th><div class="th-inr">ダウンロードしたい<br>カタログ分類<span class="c-form-required">必須</span></div></th>
                                <td>
                                    <span class="c-form-wrap js-nohidden-form js-required-check-list">
                                        <input type="checkbox" data-name="requiredCheckReject" value="" class="u-none js-input-item">
                                        <ul class="c-form-wrap__check-list">
                                            <li><label class="c-checkbox"><input type="checkbox" name="field_4232900" data-name="yourCatalog" class="u-none js-required-check" value="0" aria-invalid="false"><span>プラント事業</span></label></li>
                                            <li><label class="c-checkbox"><input type="checkbox" name="field_4232900" data-name="yourCatalog" class="u-none js-required-check" value="1" aria-invalid="false"><span>プロジェクト事業</span></label></li>
                                            <li><label class="c-checkbox"><input type="checkbox" name="field_4232900" data-name="yourCatalog" class="u-none js-required-check" value="2" aria-invalid="false"><span>設備診断事業</span></label></li>
                                            <li><label class="c-checkbox"><input type="checkbox" name="field_4232900" data-name="yourCatalog" class="u-none js-required-check" value="3" aria-invalid="false"><span>装置事業</span></label></li>
                                            <li><label class="c-checkbox"><input type="checkbox" name="field_4232900" data-name="yourCatalog" class="u-none js-required-check" value="4" aria-invalid="false"><span>溶接技術</span></label></li>
                                            <li><label class="c-checkbox"><input type="checkbox" name="field_4232900" data-name="yourCatalog" class="u-none js-required-check" value="5" aria-invalid="false"><span>安全・品質・許認可等</span></label></li>
                                        </ul>
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="p-contact-notice--explan">
                        <p class="u-ta-c">お客様の個人情報については当社の提供するサービスの範囲以外の目的で使用することはございません。</p>
                    </div>

                    <div class="p-contact-notice p-contact-notice--privacy js-input-el">
                        <h2 class="p-contact-notice__ttl">個人情報について</h2>
                        <p>お問い合わせの際は<a target="blank" href="/privacy-policy/">「個人情報保護方針」</a>をお読みになり、同意のうえご記入ください。</p>
                        <label class="c-checkbox p-contact-notice__check"><input type="checkbox" data-name="consentCheck" class="u-none js-consent-btn" value="1" aria-invalid="false"><span>個人情報保護方針に同意する</span></label>
                    </div>

                    <div class="p-contact-btn">
                        <label class="c-btn is-not-allowed js-confirm-btn js-input-el">
                            <span>入力内容の確認</span>
                        </label>
                        <a class="c-btn c-btn--white js-back-btn js-confirm-el is-hidden">
                            <span>入力画面に戻る</span>
                        </a>
                        <label class="c-btn js-confirm-el is-hidden">
                            <input name="submit" type="submit" value="送信" class="u-none">
                            <span>送信する</span>
                        </label>
                    </div>

                    <input type="hidden" name="code" value="utf8">
                </form>
            </div>
        </div>
    </div>
</main>

<?php get_template_part('assets/inc/nav-footer'); ?>
<?php get_footer();?>
