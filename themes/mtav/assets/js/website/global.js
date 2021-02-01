require('jquery');

(function ($) {
  $('.js-menuopen').on('click', function(){
    $('.mobile-menu').fadeIn();
    $('body').addClass('modal-open');
  });

  $('.js-menuclose').on('click', function(){
    $('.mobile-menu').fadeOut();
    $('body').removeClass('modal-open');
  });
})(jQuery);
