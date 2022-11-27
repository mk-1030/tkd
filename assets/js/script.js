/* ---------------------------------------------------
  Common
--------------------------------------------------- */
// DOM読み込み完了
const html = document.querySelector('html');
const body = document.querySelector('body');

window.addEventListener('DOMContentLoaded', () => {
  body.classList.add('is-domloaded');
})

// スムーズスクロール
const headerAlwaysHeightCalc = () => {
  const headerAlways = document.querySelector('.l-header__always-wrap');
  headerAlwaysHeight = headerAlways.offsetHeight;
}
window.addEventListener('resize', () => {
  headerAlwaysHeightCalc();
});
headerAlwaysHeightCalc();

window.addEventListener('DOMContentLoaded', () => {
  const anchorLinks = document.querySelectorAll('a[href^="#"]');
  const anchorLinksArr = Array.prototype.slice.call(anchorLinks);

  anchorLinksArr.forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault();
      const targetId = link.hash;
      const targetElement = document.querySelector(targetId);
      const targetOffsetTop = window.pageYOffset + targetElement.getBoundingClientRect().top;
      window.scrollTo({
        top: targetOffsetTop - headerAlwaysHeight,
        behavior: "smooth"
      });
    })
  })
})

// スマホ対応vh
const setFillHeight = () => {
  const vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
}
let vw = window.innerWidth;
window.addEventListener('resize', () => {
  //横幅が変化しない限りvhは変更されない（スマホのみ）
  if (navigator.userAgent.match(/iPhone|ipad|Android.+Mobile/)) {
    if (vw === window.innerWidth) {
      return;
    }
  }
  // 画面の横幅のサイズ変動があった時のみ高さを再計算する
  vw = window.innerWidth;
  setFillHeight();
});
setFillHeight();

// アコーディオン
class Accordion {
  constructor(accToggle, accContent){
    this.accToggle = accToggle;
    this.accContent = accContent;
    this.accToggleAnchor = accToggleAnchor;
    this.init();
  }

  slideUp(el, duration = 500){
    el.style.height = el.offsetHeight + 'px';
    el.offsetHeight;
    el.style.transitionProperty = 'height, margin, padding';
    el.style.transitionDuration = duration + 'ms';
    el.style.transitionTimingFunction = 'ease';
    el.style.overflow = 'hidden';
    el.style.height = 0;
    el.style.paddingTop = 0;
    el.style.paddingBottom = 0;
    el.style.marginTop = 0;
    el.style.marginBottom = 0;
    setTimeout(() => {
      el.style.display = 'none';
      el.style.removeProperty('height');
      el.style.removeProperty('padding-top');
      el.style.removeProperty('padding-bottom');
      el.style.removeProperty('margin-top');
      el.style.removeProperty('margin-bottom');
      el.style.removeProperty('overflow');
      el.style.removeProperty('transition-duration');
      el.style.removeProperty('transition-property');
      el.style.removeProperty('transition-timing-function');
    }, duration);
  }

  slideDown(el, duration = 500){
    el.style.removeProperty('display');
    let display = window.getComputedStyle(el).display;
    if (display === 'none') {
      display = 'block';
    }
    el.style.display = display;
    let height = el.offsetHeight;
    el.style.overflow = 'hidden';
    el.style.height = 0;
    el.style.paddingTop = 0;
    el.style.paddingBottom = 0;
    el.style.marginTop = 0;
    el.style.marginBottom = 0;
    el.offsetHeight;
    el.style.transitionProperty = 'height, margin, padding';
    el.style.transitionDuration = duration + 'ms';
    el.style.transitionTimingFunction = 'ease';
    el.style.height = height + 'px';
    el.style.removeProperty('padding-top');
    el.style.removeProperty('padding-bottom');
    el.style.removeProperty('margin-top');
    el.style.removeProperty('margin-bottom');
    setTimeout(() => {
      el.style.removeProperty('height');
      el.style.removeProperty('overflow');
      el.style.removeProperty('transition-duration');
      el.style.removeProperty('transition-property');
      el.style.removeProperty('transition-timing-function');
    }, duration);
  }

  slideToggle(el, duration = 500){
    if (window.getComputedStyle(el).display === 'none') {
      this.slideDown(el, duration);
    } else {
      this.slideUp(el, duration);
    }
  }

  onSwitch(el){
    var next = el.nextElementSibling;

    if (el.classList.contains('is-acc-open')) {
      el.classList.remove('is-acc-open');
      this.slideToggle(next);
    } else {
      el.classList.add('is-acc-open');
      this.slideToggle(next);
    }
  }

  init(){
    this.accToggle.forEach((accordion) => {
      accordion.addEventListener('click', e => {
        if (e.target != e.currentTarget) {
          return;
        }
        this.onSwitch(accordion);
      });
    });
  }
}
const accToggle = document.querySelectorAll('.js-acc-toggle');
const accToggleAnchor = document.querySelectorAll('.js-acc-toggle a');
const accContent = document.querySelectorAll('.js-acc-submenu');
new Accordion(accToggle, accContent);


// タブ切り替え
window.addEventListener('DOMContentLoaded', () => {
  const tabList = document.querySelectorAll('.js-tab-item');
  for(let i = 0; i < tabList.length; i++) {
    tabList[i].addEventListener('click', clickTabSwitch);
  }

  const tabSelect = document.querySelectorAll('[name="js-tab-select"]');
  for(let i = 0; i < tabSelect.length; i++) {
    tabSelect[i].addEventListener('change', selcetTabSwitch);
  }

  // Listでタブ切り替え
  function clickTabSwitch(){
    const ancestorEl = this.closest('.js-tab');
    console.log(ancestorEl);
    const ancestorElList = this.closest('.js-tab > .js-tab-nav > .js-tab-list');
    console.log(ancestorElList);

    [].forEach.call(ancestorEl.getElementsByClassName('js-tab-item'), function(lists, index){
      lists.classList.remove('is-active');
    });
    [].forEach.call(ancestorEl.getElementsByClassName('js-tab-content'), function(content, index){
      content.classList.remove('is-active');
    });

    const groupTabs = ancestorEl.getElementsByClassName('js-tab-item');
    console.log(groupTabs);
    const arrayTabs = Array.prototype.slice.call(groupTabs);
    console.log(arrayTabs);
    const index = arrayTabs.indexOf(this);
    console.log(index);
    ancestorEl.getElementsByClassName('js-tab-item')[index].classList.add('is-active');
    ancestorEl.getElementsByClassName('js-tab-content')[index].classList.add('is-active');
  }

  // Selectでタブ切り替え
  function selcetTabSwitch(){
    const ancestorEl = this.closest('.js-tab');

    [].forEach.call(ancestorEl.getElementsByClassName('js-tab-content'), function(content, index){
      content.classList.remove('is-active');
    });

    const groupTabs = ancestorEl.querySelector('[name="js-tab-select"]');
    const index = groupTabs.selectedIndex;
    ancestorEl.getElementsByClassName('js-tab-content')[index].classList.add('is-active');
  }
})

// selectリンクジャンプ
const linkSelectBtn = document.querySelector('.js-link-select-btn');
const hrefJump = () => {
  let url = document.jsLinkSelect.select.options[document.jsLinkSelect.select.selectedIndex].value;
  if (url != "" ){
    window.open(url,'_blank')
  } else {
    return;
  }
}

if(linkSelectBtn != null){
  linkSelectBtn.addEventListener('click', () => {
    hrefJump();
  });
}

// 画像ズーム
mediumZoom(document.querySelectorAll('[data-zoomable]'), {
  margin: 25,
  background: '#fff',
  scrollOffset: 0,
})

/* ---------------------------------------------------
  Header
--------------------------------------------------- */
const header = document.querySelector('.js-header');
const humToggle = document.querySelector('.js-hum');

// スクロール時ヘッダーにスタイルをかける
if (navigator.userAgent.toLowerCase().match(/webkit|msie 5/)) {
	documentElement = document.body;
} else {
	documentElement = document.documentElement;
}

let headerSizeChange = (header) => {
  let scrolly = window.scrollY;
  if (scrolly !== 0) {
    header.classList.add('is-scroll');
  } else {
    header.classList.remove('is-scroll');
  }
}

window.addEventListener('DOMContentLoaded', () => {
  headerSizeChange(header);
});
window.addEventListener('scroll', () => {
  headerSizeChange(header);
});

//ハンバーガー
let touchStartY;
// タッチしたとき開始位置を保存しておく
window.addEventListener('touchstart', function(event){
  touchStartY = event.touches[0].clientY;
});
let toggleState = false;
humToggle.addEventListener('click', () => {
  if (toggleState == false){
    window.addEventListener('touchmove.noscroll', function(event) {
      let current_y = event.touches[0].clientY,
      isTop = touchStartY <= current_y && $('.is-humopen')[0].scrollTop === 0,
      isBottom = touchStartY >= current_y && $('.is-humopen')[0].scrollHeight - $('.is-humopen')[0].scrollTop === height;
      // スクロール対応モーダルの上端または下端のとき
      if (isTop || isBottom) {event.preventDefault();}
    });
    body.classList.add('is-humopen');
    html.classList.add('is-scroll-prevent');
    toggleState = true;
  } else {
    html.classList.remove('is-scroll-prevent');
    body.classList.remove('is-humopen');
    toggleState = false;
  }
});

/* ---------------------------------------------------
  サイドメニュー
--------------------------------------------------- */
// URLを取得しカレントにclassを付与する
window.addEventListener('DOMContentLoaded', () => {
  const navLinks = document.querySelectorAll('.js-side-nav a');
  for (let i = 0; i < navLinks.length; i++) {
    if(navLinks[i].pathname === location.pathname) {
      navLinks[i].closest('li').classList.add('is-current');
      if(navLinks[i].closest('.js-acc')) {
        let pearent = navLinks[i].closest('.js-acc');
        pearent.classList.add('is-current');
      }
      if(navLinks[i].closest('.js-acc-submenu:not(.c-side-nav__inr)')) {
        navLinks[i].closest('.js-acc-submenu').classList.add('is-acc-open');
      }
    }
  }
})

/* ---------------------------------------------------
  TOP
--------------------------------------------------- */
//ニュースティッカー スライダー
const newsTickerSwiper = new Swiper('.js-news-ticker-swiper', {
  direction: 'vertical',
  loop: true,
  autoplay: {
    delay: 5000,
    /*reverseDirection: true,*/
  },
  speed: 1500,
  updateOnWindowResize: true,
  noSwiping: true,
  noSwipingClass: 'swiper-no-swiping'
});


//Pick up スライダー
const pickupSwiper = new Swiper('.js-pickup-swiper', {
  loop: true,
  autoplay: {
    delay: 5000,
  },
  speed: 1000,
  watchOverflow: false,
  slidesPerView: 'auto',
  centeredSlides: true,
  spaceBetween: 0,
  updateOnWindowResize: true,
  pagination: {
    el: '.swiper-pager',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-btn-next',
    prevEl: '.swiper-btn-prev',
  },
});

/* ---------------------------------------------------
  投稿一覧
--------------------------------------------------- */
// Selectでタブ切り替え
window.addEventListener('DOMContentLoaded', () => {
  const tabList = document.querySelectorAll('.p-ir-library-tab__nav-item');
  for(let i = 0; i < tabList.length; i++) {
    tabList[i].addEventListener('click', irTabSwitch);
  }

  // Listでタブ切り替え
  function irTabSwitch(){
    const ancestorEl = this.closest('.p-ir-library-tab');
    console.log(ancestorEl);
    const ancestorElList = this.closest('.p-ir-library-tab > .p-ir-library-tab__nav > .p-ir-library-tab__nav-list');
    console.log(ancestorElList);

    [].forEach.call(ancestorEl.getElementsByClassName('p-ir-library-tab__nav-item'), function(lists, index){
      lists.classList.remove('is-active');
    });
    [].forEach.call(ancestorEl.getElementsByClassName('p-ir-library-tab__content'), function(content, index){
      content.classList.remove('is-active');
    });

    const groupTabs = ancestorEl.getElementsByClassName('p-ir-library-tab__nav-item');
    console.log(groupTabs);
    const arrayTabs = Array.prototype.slice.call(groupTabs);
    console.log(arrayTabs);
    const index = arrayTabs.indexOf(this);
    console.log(index);
    ancestorEl.getElementsByClassName('p-ir-library-tab__nav-item')[index].classList.add('is-active');
    ancestorEl.getElementsByClassName('p-ir-library-tab__content')[index].classList.add('is-active');
  }
})

/* ---------------------------------------------------
  フォーム
--------------------------------------------------- */
const pageTtl = document.querySelector('.c-page-ttl');
let pageTtlHeight;

// Page Title要素の高さ
if(pageTtl != null){
  let pageTtlHeightCalc = (pageTtl) => {
    pageTtlHeight = pageTtl.offsetHeight;
    return;
  }
  window.addEventListener('DOMContentLoaded', () => {
    pageTtlHeightCalc(pageTtl);
  })
  window.addEventListener('resize', () => {
    pageTtlHeightCalc(pageTtl);
  })
}

window.addEventListener('DOMContentLoaded', () => {
  const formEl = document.querySelector('.js-form'); //フォーム要素
  const consentCheck = document.querySelector('.js-consent-btn'); //同意ボタン
  const confirmBtn = document.querySelector('.js-confirm-btn'); //確認ボタン
  const backBtn = document.querySelector('.js-back-btn'); //戻るボタン
  const inputEl = document.querySelectorAll('.js-input-el'); //入力画面で表示
  const confirmEl = document.querySelectorAll('.js-confirm-el'); //確認画面で表示
  const inputItem = document.querySelectorAll('.js-input-item'); //入力項目
  const inputWrap = document.querySelectorAll('.c-form-wrap'); //入力項目wrap
  const requiredCheckList = document.querySelectorAll('.js-required-check-list'); //チェックボックスリスト（1つ以上必須）

  // お問い合わせname値
  let inputName = [
    //プラント事業・その他
    {key:'faf9d727271254',inputs:[
      {contact:'field_4231481'},
      {name:'field_4231482'},
      {furigana:'field_4231483'},
      {company:'field_4231485'},
      {civision:'field_4231486'},
      {zip:'field_4231495'},
      {pref:'field_4231498'},
      {address:'field_4231499'},
      {tel:'field_4231497'},
      {email:'field_4231479'},
      {emailVerify:'field_4231479_mcon'},
      {message:'field_4231494'},
    ]},
    //プロジェクト事業（プロジェクト）
    {key:'16f58341271796',inputs:[
      {contact:'field_4232913'},
      {name:'field_4232914'},
      {furigana:'field_4232915'},
      {company:'field_4232916'},
      {civision:'field_4232917'},
      {zip:'field_4232918'},
      {pref:'field_4232919'},
      {address:'field_4232920'},
      {tel:'field_4232921'},
      {email:'field_4232922'},
      {emailVerify:'field_4232922_mcon'},
      {message:'field_4232923'},
    ]},
    //プロジェクト事業（エンジニアリング）
    {key:'171954b5271797',inputs:[
      {contact:'field_4232924'},
      {name:'field_4232925'},
      {furigana:'field_4232926'},
      {company:'field_4232927'},
      {civision:'field_4232928'},
      {zip:'field_4232929'},
      {pref:'field_4232930'},
      {address:'field_4232931'},
      {tel:'field_4232932'},
      {email:'field_4232933'},
      {emailVerify:'field_4232933_mcon'},
      {message:'field_4232934'},
    ]},
    //プロジェクト事業（電気・計装）
    {key:'c54f6c9e271798',inputs:[
      {contact:'field_4232936'},
      {name:'field_4232937'},
      {furigana:'field_4232938'},
      {company:'field_4232939'},
      {civision:'field_4232940'},
      {zip:'field_4232941'},
      {pref:'field_4232942'},
      {address:'field_4232943'},
      {tel:'field_4232944'},
      {email:'field_4232945'},
      {emailVerify:'field_4232945_mcon'},
      {message:'field_4232946'},
    ]},
    //設備診断事業
    {key:'4e10c07b271799',inputs:[
      {contact:'field_4232947'},
      {name:'field_4232948'},
      {furigana:'field_4232949'},
      {company:'field_4232950'},
      {civision:'field_4232951'},
      {zip:'field_4232952'},
      {pref:'field_4232953'},
      {address:'field_4232954'},
      {tel:'field_4232955'},
      {email:'field_4232956'},
      {emailVerify:'field_4232956_mcon'},
      {message:'field_4232957'},
    ]},
    //装置事業
    {key:'fac83148271800',inputs:[
      {contact:'field_4232958'},
      {name:'field_4232959'},
      {furigana:'field_4232960'},
      {company:'field_4232961'},
      {civision:'field_4232962'},
      {zip:'field_4232963'},
      {pref:'field_4232964'},
      {address:'field_4232965'},
      {tel:'field_4232966'},
      {email:'field_4232967'},
      {emailVerify:'field_4232967_mcon'},
      {message:'field_4232968'},
    ]},
    //高田技報
    {key:'917bef61271801',inputs:[
      {contact:'field_4232970'},
      {name:'field_4232971'},
      {furigana:'field_4232972'},
      {company:'field_4232973'},
      {civision:'field_4232974'},
      {zip:'field_4232975'},
      {pref:'field_4232976'},
      {address:'field_4232977'},
      {tel:'field_4232978'},
      {email:'field_4232979'},
      {emailVerify:'field_4232979_mcon'},
      {message:'field_4232980'},
    ]},
  ];

  // 個人情報保護方針に同意
  if(consentCheck !== null){
    let confirmSwitch = () => {
      if (consentCheck.checked) {
        console.log('ok');
        confirmBtn.classList.remove('is-not-allowed');
      } else {
        console.log('no');
        confirmBtn.classList.add('is-not-allowed');
      }
    }
    consentCheck.addEventListener('change', confirmSwitch);
  }

  // 確認画面に移行処理
  if(confirmBtn !== null){
    confirmBtn.addEventListener('click', () => {

      //お問い合わせ種別のdata-action値を取得、key値置き換え
      if(formEl.dataset.name == 'contactForm'){
        const selectYourContact = formEl.querySelector('[data-name="yourContact"]'); //お問い合わせ種別
        if(selectYourContact !== null){
          let selectYourContactNum = selectYourContact.selectedIndex;
          let selectYourContactAction = selectYourContact.options[selectYourContactNum].dataset.action;
          if(selectYourContactAction !== undefined) {
            // key値を置き換え
            formEl.querySelector('[name="key"]').value = selectYourContactAction;

            // お問い合わせ種別のdata-action値とinputNameのkey値が同じ配列を取得
            let result = inputName.filter(function(value) {
              return value.key == selectYourContactAction;
            })
            /*console.log(result);
            console.log(result['0']['inputs']['0'].contact);
            console.log(result['0']['inputs']['1'].name);
            console.log(result['0']['inputs']['2'].furigana);
            console.log(result['0']['inputs']['3'].company);
            console.log(result['0']['inputs']['4'].civision);
            console.log(result['0']['inputs']['5'].zip);
            console.log(result['0']['inputs']['6'].pref);
            console.log(result['0']['inputs']['7'].address);
            console.log(result['0']['inputs']['8'].tel);
            console.log(result['0']['inputs']['9'].email);
            console.log(result['0']['inputs']['10'].emailVerify);
            console.log(result['0']['inputs']['11'].message);*/
            //input要素のname値を置き換え
            formEl.querySelector('[data-name="yourContact"]').setAttribute('name', result['0']['inputs']['0'].contact);
            formEl.querySelector('[data-name="yourName"]').setAttribute('name', result['0']['inputs']['1'].name);
            formEl.querySelector('[data-name="yourFurigana"]').setAttribute('name', result['0']['inputs']['2'].furigana);
            formEl.querySelector('[data-name="yourCompany"]').setAttribute('name', result['0']['inputs']['3'].company);
            formEl.querySelector('[data-name="yourCivision"]').setAttribute('name', result['0']['inputs']['4'].civision);
            formEl.querySelector('[data-name="yourZip"]').setAttribute('name', result['0']['inputs']['5'].zip);
            formEl.querySelector('[data-name="yourPref"]').setAttribute('name', result['0']['inputs']['6'].pref);
            formEl.querySelector('[data-name="yourAddress"]').setAttribute('name', result['0']['inputs']['7'].address);
            formEl.querySelector('[data-name="yourTel"]').setAttribute('name', result['0']['inputs']['8'].tel);
            formEl.querySelector('[data-name="yourEmail"]').setAttribute('name', result['0']['inputs']['9'].email);
            formEl.querySelector('[data-name="yourEmailVerify"]').setAttribute('name', result['0']['inputs']['10'].emailVerify);
            formEl.querySelector('[data-name="yourMessage"]').setAttribute('name', result['0']['inputs']['11'].message);
          }
        }
      }

      let errorTxt = document.querySelectorAll('.error-txt');
      //リセット
      for(let i = 0; i < inputWrap.length; i++) {
        inputWrap[i].classList.remove('is-invalid');
      }
      for(let i = 0; i < errorTxt.length; i++) {
        errorTxt[i].remove();
      }

      //メールアドレス正誤確認
      let emailVerifyCheck = true;
      const email = document.querySelector('[data-name="yourEmail"]');
      const emailVerify = document.querySelector('[data-name="yourEmailVerify"]');
      if (email.value !== emailVerify.value) {
        emailVerifyCheck = false;
      }
      console.log(emailVerifyCheck);

      //チェックボックスを1つ以上必須にする処理
      let requiredCheckAllReject = true;
      if(requiredCheckList.length !== 0){
        let requiredCheckListCount = 0;
        let requiredCheckReject = new Array(); //各チェックボックスリストの可否判定
        for(let i = 0; i < requiredCheckList.length; i++) { //チェックボックスリストを取得
          requiredCheckListCount++;

          let requiredCheck = requiredCheckList[i].querySelectorAll('.js-required-check'); //リスト内のチェックボックスを取得
          let requiredCheckCount = 0;
          for(let j = 0; j < requiredCheck.length; j++) {
            if(requiredCheck[j].checked) {
              requiredCheckCount++;
            }
          }

          if(requiredCheck.length > 0) { // 配列に判定格納
            if(requiredCheckCount <= 0) {
              requiredCheckReject[i] = 'false';
              requiredCheckList[i].querySelector('[data-name="requiredCheckReject"]').checked = false; //隠し要素のchecked削除
            } else {
              requiredCheckReject[i] = 'true';
              requiredCheckList[i].querySelector('[data-name="requiredCheckReject"]').checked = true; //隠し要素のchecked追加
            }
          }
        }

        // 全てtrueか否か
        let isAllEqual = array => array.every(value => value === 'true');
        isAllEqual(requiredCheckReject);
        if(isAllEqual(requiredCheckReject) !== true){
          requiredCheckAllReject = false; //全体Reject false
        } else {
          requiredCheckAllReject = true; //全体Reject true
        }

        //console.log(requiredCheckReject);
        //console.log(requiredCheckAllReject);
      }

      if(formEl.checkValidity() === true && emailVerifyCheck === true && requiredCheckAllReject === true) {
        formChangeSwitch();
        for(let i = 0; i < inputItem.length; i++) {
          //入力項目を出力
          let tag = inputItem[i].tagName.toLowerCase(); //項目のタグ名取得
          let name = inputItem[i].dataset.name; //項目のdata-name取得
          let parentEl = inputItem[i].closest('td'); //項目の先祖要素
          if(tag === 'input') {
            tag = tag + '-' + inputItem[i].type; //inputのタイプ取得
          }
          let confirmTxt = document.createElement("span"); //入力データ生成
          confirmTxt.className = 'confirm-txt';
          switch(tag){
            case 'input-text':
            case 'input-email':
            case 'input-time':
            case 'input-date':
            case 'input-datetime-local':
            case 'input-week':
            case 'input-month':
            case 'input-number':
            case 'input-password':
            case 'input-search':
            case 'input-tel':
            case 'input-url':
              if(name == 'yourZip') {
                confirmTxt.innerHTML = '〒 '+inputItem[i].value+'<br>';
              } else if(name == 'yourEmailVerify') {
                confirmTxt.innerHTML = '';
              } else {
                confirmTxt.innerHTML = inputItem[i].value;
              }
              parentEl.insertAdjacentElement("beforeend", confirmTxt);
            break;
            case 'select':
              let inputItemNum = inputItem[i].selectedIndex;
              confirmTxt.innerHTML = inputItem[i].options[inputItemNum].textContent;
              parentEl.insertAdjacentElement("beforeend", confirmTxt);
            break;
            case 'textarea':
              confirmTxt.innerHTML = inputItem[i].value.replace(/\n/g, '<br>');
              parentEl.insertAdjacentElement("beforeend", confirmTxt);
            break;
          }
        }
      } else {
        for(let i = 0; i < inputItem.length; i++) {
          //バリテーションエラー時の処理
          const invalidMessages = {
            email  : 'メールアドレスの形式が正しくありません。',
            number : '数字で入力してください。',
          };
          let name = inputItem[i].dataset.name;
          let type = inputItem[i].type;
          let returnValue = inputItem[i].validity;
          let required = inputItem[i].required;
          let value = type !== 'checkbox' && inputItem[i].value || inputItem[i].checked && inputItem[i].value || '';
          let empty = inputItem[i].getAttribute("data-empty") || '必須項目です。';
          let invalid = inputItem[i].getAttribute("data-invalid") || invalidMessages[type] || '入力形式が正しくありません。';
          let message = (required && value || !required) && invalid || required && !value && empty || '値が正しくありません。';

          if(type === 'hidden'){
            continue;
          }
          if(!returnValue.valid){
            let parentEl = inputItem[i].closest('.c-form-wrap'); //項目の先祖要素
            let errorTxt = document.createElement('span'); //エラー表示DOM生成
            errorTxt.className = 'error-txt';
            errorTxt.innerHTML = message;
            parentEl.classList.add('is-invalid');
            parentEl.insertAdjacentElement('beforeend', errorTxt);
          }
          if(emailVerifyCheck === false && name === 'yourEmailVerify'){
            let parentEl = inputItem[i].closest('.c-form-wrap'); //項目の先祖要素
            let errorTxt = document.createElement('span'); //エラー表示DOM生成
            errorTxt.className = 'error-txt';
            errorTxt.innerHTML = '確認用のメールアドレスが一致していません。';
            parentEl.classList.add('is-invalid');
            parentEl.insertAdjacentElement('beforeend', errorTxt);
          }
          if(requiredCheckAllReject === false && name === 'requiredCheckReject' && !inputItem[i].checked){
            console.log('1つ以上選択してください。');
            let parentEl = inputItem[i].closest('.c-form-wrap'); //項目の先祖要素
            let errorTxt = document.createElement('span'); //エラー表示DOM生成
            errorTxt.className = 'error-txt';
            errorTxt.innerHTML = '1つ以上選択してください。';
            parentEl.classList.add('is-invalid');
            parentEl.insertAdjacentElement('beforeend', errorTxt);
          }
        }
        window.scrollTo({top: pageTtlHeight});
      }
    })
  }

  // 入力画面に戻る処理
  if(backBtn != null){
    backBtn.addEventListener('click', () => {
      let confirmTxt = document.querySelectorAll('.confirm-txt');
      for(let i = 0; i < confirmTxt.length; i++) {
        confirmTxt[i].remove();
      }
      formChangeSwitch();
    })
  }

  // 表示・非表示制御
  function formChangeSwitch(){
    for(let i = 0; i < inputEl.length; i++) {
      inputEl[i].classList.toggle('is-hidden');
    }
    for(let i = 0; i < confirmEl.length; i++) {
      confirmEl[i].classList.toggle('is-hidden');
    }
    for(let i = 0; i < inputWrap.length; i++) {
      if (inputWrap[i].classList.contains('js-nohidden-form')) {
        inputWrap[i].classList.toggle('is-noevent'); //チェックボックスは消さずに非選択化
      } else {
        inputWrap[i].classList.toggle('is-hidden');
      }
    }
    window.scrollTo({top: pageTtlHeight});
  }
})

/* ---------------------------------------------------
  SPスクロール
--------------------------------------------------- */
window.addEventListener('DOMContentLoaded', () => {
  new ScrollHint('.js-scrollable', {
    i18n: {
      scrollable: 'スクロールできます'
    }
  });
})

/* ---------------------------------------------------
  事業紹介アンカーリンク
--------------------------------------------------- */
window.addEventListener('DOMContentLoaded', () => {
  let anchorlink = document.querySelector('.c-business-anchor');
  let anchorlinkItem = document.querySelectorAll('.c-business-anchor li');

  if(anchorlink !== null) {
    anchorlinkItem[0].classList.add('active');
    anchorlink.addEventListener('mouseout', e => {
      anchorlinkItem[0].classList.add('active');
    });
    for(let i = 0; i < anchorlinkItem.length; i++) {
      anchorlinkItem[i].addEventListener('mouseover', e => {
        for(let j = 0; j < anchorlinkItem.length; j++) {
          anchorlinkItem[j].classList.remove('active');
        }
        anchorlinkItem[i].classList.add('active');
      });
      anchorlinkItem[i].addEventListener('mouseout', e => {
        anchorlinkItem[i].classList.remove('active');
      });
    }
  }
})
