'use strict';

// loadingの表示
$(window).on('load',function(){
  $("#loading").delay(3000).fadeOut('slow');// ローディング画面を3秒（3000ms）待機してからフェードアウト
  $("#loadingLogo").delay(2000).fadeOut('slow');// ロゴを2秒（2000ms）待機してからフェードアウト
});
// loadingの表示

// クリックすると表示が変わる
const wahuu = document.querySelector('h1');

wahuu.addEventListener("click", () => {
  document.body.classList.toggle("wahuu");
});
// クリックすると表示が変わる

// スライダー
if (!window.location.href.includes('m')) {
  const slider = document.getElementById('slider');
  const prev = document.getElementById('prev');
  const next = document.getElementById('next');
  const indicator = document.getElementById('indicator');
  const lists = document.querySelectorAll('.list');
  const allLists = lists.length;
  let count = 0;
  let autoPlayInterval;
  function updateListBackground() {
    for (let i = 0; i < allLists; i++) {
      lists[i].style.backgroundColor = i === count % allLists ? '#000' : '#fff';
    }
  }
  function nextMove() {
    slider.classList.remove(`slider${count % allLists + 1}`);
    count++;
    slider.classList.add(`slider${count % allLists + 1}`);
    updateListBackground();
  }
  function prevMove() {
    slider.classList.remove(`slider${count % allLists + 1}`);
    count--;
    if (count < 0) count = allLists - 1;
    slider.classList.add(`slider${count % allLists + 1}`);
    updateListBackground();
  }
  window.addEventListener('load', function startAutoPlay() {
    autoPlayInterval = setInterval(nextMove, 4000);
  });
  function resetAutoPlayInterval() {
    clearInterval(autoPlayInterval);
    startAutoPlay();
  }
  next.addEventListener('click', () => {
    nextMove();
  });
  prev.addEventListener('click', () => {
    prevMove();
  });
  indicator.addEventListener('click', (event) => {
    if (event.target.classList.contains('list')) {
      const index = Array.from(lists).indexOf(event.target);
      slider.classList.remove(`slider${count % allLists + 1}`);
      count = index;
      slider.classList.add(`slider${count % allLists + 1}`);
      updateListBackground();
      resetAutoPlayInterval();
    }
  });
}
// スライダー


// TOPへ戻るボタン
function pageTop() {
  let scroll = $(window).scrollTop();
  if (scroll >= 300) {// 300以上スクロールしたら
    $('.pageTop').removeClass('downMove');// #page-topについているDownMoveというクラス名を除く
    $('.pageTop').addClass('upMove');// #page-topについているUpMoveというクラス名を付与
  } else {
    if ($('.pageTop').hasClass('upMove')) {// すでに#page-topにUpMoveというクラス名がついていたら
      $('.pageTop').removeClass('upMove');// UpMoveというクラス名を除き
      $('.pageTop').addClass('downMove');// DownMoveというクラス名を#page-topに付与
    }
  }
}
// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
  pageTop();// スクロールした際の動きの関数を呼ぶ
});
// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
  pageTop();// スクロールした際の動きの関数を呼ぶ
});
// TOPへ戻るボタン


// スクロールをするとハンバーガーメニューに変化
function FixedAnime() {
  let scroll = $(window).scrollTop();
  if (scroll >= 300 || location.href.indexOf("m") !== -1) {// 300以上スクロールしたら
      $('.burger').addClass('fadeDown');// .openbtnにfadeDownというクラス名を付与して
      $('#header').addClass('dnone');// #headerにdnoneというクラス名を付与
    } else {// それ以外は
      $('.burger').removeClass('fadeDown');// fadeDownというクラス名を除き
      $('#header').removeClass('dnone');// dnoneというクラス名を除く
    }
}

// 画面をスクロールをしたら動く
$(window).scroll(function () {
  FixedAnime();// スクロールをするとハンバーガーメニューが出る
});

$(window).on('load', function () {
  FixedAnime();//　ページを読み込むととハンバーガーメニューが出る
});

// ボタンをクリックした際のアニメーション
$('.burger').click(function () {// ボタンがクリックされたら
  $(this).toggleClass('active');// ボタン自身にactiveクラスを付与し
  $('#header').toggleClass('panelactive');// ヘッダーにpanelactiveクラスを付与
});
$(window).scroll(function () {// 画面がスクロールをしたら
  $('.burger').removeClass('active');// ボタンのactiveクラスを除去し
  $('#header').removeClass('panelactive');// ヘッダーのpanelactiveクラスも除去
});
// スクロールをするとハンバーガーメニューに変化


// ページ内リンクの戻る動作を無効にする
function jumpto( ID ){
  const target = document.getElementById( ID );
  if( target ) scrollBy( 0, target.getBoundingClientRect().top );
  }
// ページ内リンクの戻る動作を無効にする