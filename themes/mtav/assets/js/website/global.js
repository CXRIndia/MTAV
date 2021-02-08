require('jquery');

import 'lazysizes';

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

    var wpcf7Elm = document.querySelector('.wpcf7');
    wpcf7Elm.addEventListener('wpcf7mailsent', function (event) {
      $('#contact_hide').hide()
      $("#contact_form_msg").text("Mail Sent Successfully!");
      setTimeout(function () {
        $('#contact_hide').show();
        $("#contact_form_msg").hide();
      }, 7000);
    }, false);

    wpcf7Elm.addEventListener('wpcf7mailfailed', function (event) {
      $('#contact_hide').hide()
      $("#contact_form_msg").text("Something went Wrong. Please try again!");
      setTimeout(function () {
        $('#contact_hide').show();
        $("#contact_form_msg").hide();
      }, 7000);
    }, false);
  });

  $(window).scroll(function(){
    var sticky = $('header'),
        scroll = $(window).scrollTop();

    if (scroll >= 50) sticky.addClass('fixed');
    else sticky.removeClass('fixed');
  });
})(jQuery);
