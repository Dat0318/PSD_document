// js for header

$(document).ready(function () {
  $('.menu-icon, .menu-overlay').click(function () {
    $('.menu').fadeToggle();
    $('.menu-overlay').fadeToggle();
    if ($('body').css('overflow') == 'hidden') {
      $('body').css({ overflow: 'unset' });
    } else {
      $('body').css({ overflow: 'hidden' });
    }
  });
});
