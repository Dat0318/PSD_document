// Slider
var swiper = new Swiper('.swiper-container', {
  pagination: {
    el: '.swiper-pagination',
  },
});
// END: Slider
$(document).ready(function () {
  $('.menu-bar').click(function () {
    $('.menu').fadeToggle();
  });
});
