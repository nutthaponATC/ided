$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(0).fadeIn(400);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(0).fadeOut(400);
});