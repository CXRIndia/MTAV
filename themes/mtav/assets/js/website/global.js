import 'lazysizes';

import AOS from 'aos';
// import 'aos/dist/aos.css';

import '../website/contact-form';

window.lazySizesConfig = window.lazySizesConfig || {};
window.lazySizesConfig.loadMode = 1;

(function ($) {
  //// START : Mobile Menu Modal
  $('.js-menuopen').on('click', function () {
    $('.mobile-menu').fadeIn();
    $('body').addClass('modal-open');
  });

  $('.js-menuclose').on('click', function () {
    $('.mobile-menu').fadeOut();
    $('body').removeClass('modal-open');
  });
  //// END : Mobile Menu Modal

  //// START : Full Video Popup
  $('.js-fullvideo').on('click', function () {
    // $('.fullvideo-popup').addClass('open');
    $('.fullvideo-popup').fadeIn();
    $('body').addClass('modal-open');
  });

  $('.js-video-close').on('click', function () {
    // $('.fullvideo-popup').removeClass('open');
    $('.fullvideo-popup').fadeOut();
    $('body').removeClass('modal-open');
    // $('iframe').get(0).pause();
    $("iframe").attr("src", $("iframe").attr("src"));
  });
  //// END : Full Video Popup


  $(window).load(function () {
    AOS.init();
    AOS.init({
      once: true

    });
  });

  $(window).scroll(function () {
    var sticky = $('header'),
      scroll = $(window).scrollTop();

    if (scroll >= 50) sticky.addClass('fixed');
    else sticky.removeClass('fixed');
  });
})(jQuery);
