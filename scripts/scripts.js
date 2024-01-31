'use strict';

const slider = document.getElementById('slider');
const prev = document.getElementById('prev');
const next = document.getElementById('next');
const indicator = document.getElementById('indicator');
const lists = document.querySelectorAll('.list');
const totalSlides = lists.length;
let count = 0;
let autoPlayInterval;
function updateListBackground() {
  for (let i = 0; i < lists.length; i++) {
    lists[i].style.backgroundColor = i === count % totalSlides ? '#000' : '#fff';
  }
}
function nextClick() {
  slider.classList.remove(`slider${count % totalSlides + 1}`);
  count++;
  slider.classList.add(`slider${count % totalSlides + 1}`);
  updateListBackground();
}
function prevClick() {
  slider.classList.remove(`slider${count % totalSlides + 1}`);
  count--;
  if (count < 0) count = totalSlides - 1;
  slider.classList.add(`slider${count % totalSlides + 1}`);
  updateListBackground();
}
function startAutoPlay() {
  autoPlayInterval = setInterval(nextClick, 3000);
}
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
    slider.classList.remove(`slider${count % totalSlides + 1}`);
    count = index;
    slider.classList.add(`slider${count % totalSlides + 1}`);
    updateListBackground();
    resetAutoPlayInterval();
  }
});