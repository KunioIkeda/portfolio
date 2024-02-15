'use strict';

// loadingの表示
$(window).on('load',function(){
  $("#loading").delay(3000).fadeOut('slow');//ローディング画面を3秒（3000ms）待機してからフェードアウト
  $("#loadingLogo").delay(2000).fadeOut('slow');//ロゴを2秒（2000ms）待機してからフェードアウト
});
// loadingの表示ここまで

// スライダー
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
function nextClick() {
  slider.classList.remove(`slider${count % allLists + 1}`);
  count++;
  slider.classList.add(`slider${count % allLists + 1}`);
  updateListBackground();
}
function prevClick() {
  slider.classList.remove(`slider${count % allLists + 1}`);
  count--;
  if (count < 0) count = allLists - 1;
  slider.classList.add(`slider${count % allLists + 1}`);
  updateListBackground();
}
window.addEventListener('load', function startAutoPlay() {
  autoPlayInterval = setInterval(nextClick, 4000);
});
function resetAutoPlayInterval() {
  clearInterval(autoPlayInterval);
  startAutoPlay();
}
next.addEventListener('click', () => {
  nextClick();
  resetAutoPlayInterval();
});
prev.addEventListener('click', () => {
  prevClick();
  resetAutoPlayInterval();
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
// スライダーここまで

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
// TOPへ戻るボタンここまで

//スクロールをするとハンバーガーメニューに変化する設定
function FixedAnime() {
  let scroll = $(window).scrollTop();
  if (scroll >= 300) {//300以上スクロールしたら
      $('.burger').addClass('fadeDown');//.openbtnにfadeDownというクラス名を付与して
      $('#header').addClass('dnone');//#headerにdnoneというクラス名を付与
    } else {//それ以外は
      $('.burger').removeClass('fadeDown');//fadeDownというクラス名を除き
      $('#header').removeClass('dnone');//dnoneというクラス名を除く
    }
}
// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
  FixedAnime();//スクロールをするとハンバーガーメニューに変化するための関数を呼ぶ
});
//ボタンをクリックした際のアニメーションの設定
$('.burger').click(function () {//ボタンがクリックされたら
  $(this).toggleClass('active');//ボタン自身に activeクラスを付与し
  $('#header').toggleClass('panelactive');//ヘッダーにpanelactiveクラスを付与
});
$(window).scroll(function () {//ナビゲーションのリンクがクリックされたら
  $('.burger').removeClass('active');//ボタンの activeクラスを除去し
  $('#header').removeClass('panelactive');//ヘッダーのpanelactiveクラスも除去
});