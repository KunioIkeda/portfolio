'use strict';

// loadingの表示
$(window).on('load',function(){
  $("#loading").delay(3000).fadeOut('slow');//ローディング画面を3秒（3000ms）待機してからフェードアウト
  $("#loadingLogo").delay(2000).fadeOut('slow');//ロゴを2秒（2000ms）待機してからフェードアウト
});
// loadingの表示ここまで

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
  autoPlayInterval = setInterval(nextClick, 3000);
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

// TOPへ戻るボタン
function pageTop() {
  let scroll = $(window).scrollTop();
  if (scroll >= 300) {
    $('.pageTop').removeClass('downMove');
    $('.pageTop').addClass('upMove');
  } else {
    if($('.pageTop').hasClass('upMove')) {
      $('.pageTop').removeClass('upMove');
      $('.pageTop').addClass('downMove');
    }
  }
}

$(window).scroll(function () {
  pageTop();
});

$(window).on('load', function () {
  pageTop();
});
// TOPへ戻るボタンここまで