// RTl & Ltr
$('<div class="btn-light custom-theme">LTR</div>').appendTo($('body'));
(function () {})();
//live customizer js
$(document).ready(function () {

  $('.custom-theme').on('click', function () {
    $("html").attr("dir", "");
    $(this).toggleClass('ltr');
    if ($('.custom-theme').hasClass('ltr')) {
      $('.custom-theme').text('RTL');
      $('body').removeClass('rtl');
      $('body').addClass('ltr');
      $("html").attr("dir", "ltr");
    } else {
      $('.custom-theme').text('LTR');
      $('body').removeClass('ltr');
      $('body').addClass('rtl');
      $("html").attr("dir", "rtl");
    }
  });
});