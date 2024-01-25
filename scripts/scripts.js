'use strict';

// $(document).ready(function () {
//   let $slider = $('#slider');
//   let $lis    = $('#slider li');

//   let li_count = $lis.length;
//   let li_width = $lis.width() + parseInt($lis.css('margin-left'), 10) + parseInt($lis.css('margin-right'), 10);

//   $slider.css('width', (li_width * li_count) + 'px');

//   setInterval(function () {
//       $slider.stop().animate({
//           marginLeft: parseInt($slider.css('margin-left'), 10) - li_width + 'px'
//       }, function () {
//           $slider.css('margin-left', '50px');
//           $slider.find('li:first').appendTo($slider);
//       });
//   }, 4000);
// });