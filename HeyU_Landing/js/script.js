// Animate for feedback of customer
$(document).ready(function () {
  // js for menu
  $('.menu-icon, .menu-overlay').click(function () {
    $('.menu').fadeToggle();
    $('.menu-overlay').fadeToggle();
    if ($('body').css('overflow') == 'hidden') {
      $('body').css({ overflow: 'unset' });
    } else {
      $('body').css({ overflow: 'hidden' });
    }
  });

  // js for feedback
  setInterval(() => {
    var item = $('.item-comment'),
      item_now = $('.item-comment.item-comment-active');
    item_now.removeClass('item-comment-active');
    if (item_now.next().length === 0) {
      item.first().addClass('item-comment-active');
    } else {
      item_now.next().addClass('item-comment-active');
    }
  }, 2000);
});
