<?php /*Template Name: お問い合わせ */ ?>

<?php get_header();?>
<?php get_template_part('assets/inc/nav-header'); ?>


<main class="l-main">
    <div class="c-page-ttl">
        <div class="u-container u-container--wide">
            <div class="c-page-ttl__txt">
                <p class="c-page-ttl__big"><span>Contact</span></p>
                <h1 class="c-page-ttl__small"><span>お問い合わせ</span></h1>
            </div>
        </div>
    </div>

    <div class="c-breadcrumbs u-container u-container--wide">
        <ul>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a itemprop="item" href=""><span itemprop="name"><svg class="home-icon" xmlns="http://www.w3.org/2000/svg" width="15" height="13.9" viewBox="0 0 15 13.9" xml:space="preserve" role="img" aria-label="HOME"><path d="M5.8 13.9V9.2h3.5v4.6h3.5V6.9H15L7.5 0 0 6.9h2.3v6.9h3.5z"/></svg></span><meta itemprop="position" content="1"></a>
            </li>
            <li class="separ">|</li>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <span itemprop="name">お問い合わせ</span><meta itemprop="position" content="2">
            </li>
        </ul>
    </div>

    <div class="l-main__inner u-container">
        <div class="l-contents">
            <div class="p-contact">
                <form name="form1" data-name="contactForm" action="https://pro.form-mailer.jp/fm/service/Forms/complete" method="post" ENCTYPE="multipart/form-data" accept-charset="UTF-8" class="js-form">
                    <input type="hidden" name="key" value="faf9d727271254">

                    <div class="p-contact-notice p-contact-notice--explan js-input-el">
                        <p>必要事項をご記入の上、ページ下にある「入力内容を確認する」ボタンをクリックしてください。<br><span class="c-form-required">必須</span>のあるものは入力必須項目です。</p>
                    </div>

                    <div class="p-contact-notice p-contact-notice--explan js-confirm-el is-hidden">
                        <p>こちらの入力内容で送信します。<br>内容に間違いがあった場合は「入力画面に戻る」にて修正してください。<br>問題がなければ「送信する」にて送信確定させてください。</p>
                    </div>

                    <div class="p-contact-inputs">
                        <table class="c-table p-contact-inputs__table">
                            <tr>
                                <th>お問い合わせ種別<span class="c-form-required">必須</span></th>
                                <td>
                                    <span class="c-form-wrap">
                                        <div class="c-select your-contact">
                                            <select class="js-input-item" name="field_4231481" data-name="yourContact" aria-required="true" aria-invalid="false" required>
                                                <option value="" hidden>選択してください</option>
                                                <option value="0" data-action="faf9d727271254">プラント事業</option>
                                                <option value="1" data-action="16f58341271796">プロジェクト事業（プロジェクト）</option>
                                                <option value="2" data-action="171954b5271797">プロジェクト事業（エンジニアリング）</option>
                                                <option value="3" data-action="c54f6c9e271798">プロジェクト事業（電気・計装）</option>
                                                <option value="4" data-action="4e10c07b271799">設備診断事業</option>
                                                <option value="5" data-action="fac83148271800">装置事業</option>
                                                <option value="6" data-action="917bef61271801">高田技報</option>
                                                <option value="7" data-action="faf9d727271254">その他</option>
                                            </select>
                                        </div>
                                    </span>
                                    <span class="p-contact-inputs-note">事務・技術 新卒採用のお問い合わせについては、リクルートサイト TAKADA TOWNの<br class="u-pc-only">「よくあるご質問」の「採用に関するお問い合わせ」からお願いします。</span>
                                </td>
                            </th>
                            <tr>
                                <th>お名前<span class="c-form-required">必須</span></th>
                                <td><span class="c-form-wrap"><input type="text" name="field_4231482" data-name="yourName" value="" size="40" class="c-input js-input-item" aria-required="true" aria-invalid="false" required></span></td>
                            </tr>
                            <tr>
                                <th>フリガナ<span class="c-form-required">必須</span></th>
                                <td><span class="c-form-wrap"><input type="text" name="field_4231483" data-name="yourFurigana" value="" size="40" class="c-input js-input-item" pattern="^[\u30A0-\u30FF\uFF61-\uFF9F\s\u3000\u00A0]+$" data-invalid="カタカナで入力してください。" aria-required="true" aria-invalid="false" required></span></td>
                            </tr>
                            <tr>
                                <th>会社名<span class="c-form-required">必須</span></th>
                                <td><span class="c-form-wrap"><input type="text" name="field_4231485" data-name="yourCompany" value="" size="40" class="c-input js-input-item" aria-required="true" aria-invalid="false" required></span></td>
                            </tr>
                            <tr>
                                <th>部署名<span class="c-form-required">必須</span></th>
                                <td><span class="c-form-wrap"><input type="text" name="field_4231486" data-name="yourCivision" value="" size="40" class="c-input js-input-item" aria-required="true" aria-invalid="false" required></span></td>
                            </th>
                            <tr>
                                <th>ご住所<span class="p-contact-inputs-note">（回答を郵送でご希望の場合、ご記入ください）</span></th>
                                <td>
                                    <span class="c-form-wrap">〒&ensp;<input type="text" name="field_4231495" data-name="yourZip" value="" size="40" class="c-input js-input-item" pattern="^\d{3}-?\d{4}$" aria-required="false" aria-invalid="false" placeholder="半角英数"></span>
                                    <span class="c-form-wrap"><div class="c-select yourPref"><select class="js-input-item" name="field_4231498" data-name="yourPref" aria-required="false" aria-invalid="false"><option value="">選択してください</option><option value="0">北海道</option><option value="1">青森県</option><option value="2">岩手県</option><option value="3">宮城県</option><option value="4">秋田県</option><option value="5">山形県</option><option value="6">福島県</option><option value="7">茨城県</option><option value="8">栃木県</option><option value="9">群馬県</option><option value="10">埼玉県</option><option value="11">千葉県</option><option value="12">東京都</option><option value="13">神奈川県</option><option value="14">新潟県</option><option value="15">富山県</option><option value="16">石川県</option><option value="17">福井県</option><option value="18">山梨県</option><option value="19">長野県</option><option value="20">岐阜県</option><option value="21">静岡県</option><option value="22">愛知県</option><option value="23">三重県</option><option value="24">滋賀県</option><option value="25">京都府</option><option value="26">大阪府</option><option value="27">兵庫県</option><option value="28">奈良県</option><option value="29">和歌山県</option><option value="30">鳥取県</option><option value="31">島根県</option><option value="32">岡山県</option><option value="33">広島県</option><option value="34">山口県</option><option value="35">徳島県</option><option value="36">香川県</option><option value="37">愛媛県</option><option value="38">高知県</option><option value="39">福岡県</option><option value="40">佐賀県</option><option value="41">長崎県</option><option value="42">熊本県</option><option value="43">大分県</option><option value="44">宮崎県</option><option value="45">鹿児島県</option><option value="46">沖縄県</option></select></div></span>
                                    <span class="c-form-wrap"><input type="text" name="field_4231499" data-name="yourAddress" value="" size="40" class="c-input js-input-item" aria-required="false" aria-invalid="false"></span>
                                </td>
                            </tr>
                            <tr>
                                <th>電話番号<span class="c-form-required">必須</span></th>
                                <td><span class="c-form-wrap"><input type="tel" name="field_4231497" data-name="yourTel" value="" size="40" class="c-input js-input-item" aria-required="true" aria-invalid="false" pattern="\d{2,4}-?\d{3,4}-?\d{3,4}$" required></span></td>
                            </tr>
                            <tr>
                                <th>メールアドレス<span class="c-form-required">必須</span></th>
                                <td>
                                    <span class="c-form-wrap"><input type="email" name="field_4231479" data-name="yourEmail" value="" size="40" class="c-input js-input-item" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" aria-required="true" aria-invalid="false" placeholder="例）info@takada.co.jp（半角英数）" required></span>
                                    <span class="p-contact-inputs-note js-input-el">確認の為に再度ご入力ください。</span>
                                    <span class="c-form-wrap"><input type="email" name="field_4231479_mcon" data-name="yourEmailVerify" value="" size="40" class="c-input js-input-item" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" aria-required="true" aria-invalid="false" placeholder="" required></span>
                                </td>
                            </tr>
                            <tr>
                                <th>お問い合わせ・ご意見等<span class="c-form-required">必須</span></th>
                                <td><span class="c-form-wrap"><textarea name="field_4231494" data-name="yourMessage" cols="40" rows="10" class="c-textarea js-input-item" aria-required="true" aria-invalid="false" required></textarea></span></td>
                            </tr>
                        </table>
                    </div>

                    <p class="p-contact-policy js-input-el">お客様の個人情報については当社の提供するサービスの範囲以外の目的で使用することはございません。<br>弊社からのお返事の電子メールはお客様個人もしくはお客様所属団体・企業にお送りするものです。<br>お返事の電子メールの一部または全部を転載、二次利用することはご遠慮ください。<br>お問い合わせの内容によっては、電話などで回答させていただく場合もございますのでご了承ください。</p>

                    <div class="p-contact-notice p-contact-notice--privacy js-input-el">
                        <h2 class="p-contact-notice__ttl">個人情報について</h2>
                        <p>お問い合わせの際は<a href="/privacy-policy/">「個人情報保護方針」</a>をお読みになり、同意のうえご記入ください。</p>
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