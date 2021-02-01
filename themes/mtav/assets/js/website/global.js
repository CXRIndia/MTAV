require('jquery');

(function ($) {
  //// START : Mobile Menu Modal
  $('.js-menuopen').on('click', function(){
    $('.mobile-menu').fadeIn();
    $('body').addClass('modal-open');
  });

  $('.js-menuclose').on('click', function(){
    $('.mobile-menu').fadeOut();
    $('body').removeClass('modal-open');
  });
  //// END : Mobile Menu Modal

  //// START : Full Video Popup
  $('.js-fullvideo').on('click', function(){
    // $('.fullvideo-popup').addClass('open');
    $('.fullvideo-popup').fadeIn();
    $('body').addClass('modal-open');
  });

  $('.js-video-close').on('click', function(){
    // $('.fullvideo-popup').removeClass('open');
    $('.fullvideo-popup').fadeOut();
    $('body').removeClass('modal-open');
  });
  //// END : Full Video Popup
})(jQuery);
