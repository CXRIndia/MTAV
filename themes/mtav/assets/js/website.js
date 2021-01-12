require('jquery');

require('../js/website/main.js');
require('../js/website/plugins/select/classie.js');
require('../js/website/plugins/select/selectFx.js');

require('../css/website/main.css');

require('../scss/website/index.scss');

import 'lazysizes';
window.lazySizesConfig = window.lazySizesConfig || {};
window.lazySizesConfig.loadMode = 1;

(function ($) {

  $('.panel-link').on("click", function () {
    let panelId = $(this).attr('data-panelId');

    $('.panelContent').each(function (index, ele) {
      $(ele).hide();
    });

    $('.panel-link').each(function (index, ele) {
      $(ele).removeClass('active');
    });

    $(this).addClass('active');
    document.getElementById(panelId).style.display = "flex";
  });

  /* open contact form */
  $("#enterPopup").on("click", function (e) {
    e.preventDefault();

    $(".contact-form-wrapper").addClass("show");

    /* close contact form */
    $(".contact-form-header .btn-close").on("click", function (e) {
      e.preventDefault();
      $(this).parents(".contact-form-wrapper").removeClass("show");
      $('.wpcf7-not-valid-tip').hide();
    });

  });

  $(window).load(function () {

    [].slice.call(document.querySelectorAll('select.cs-select')).forEach(function (el) {
      new SelectFx(el);
    });

    $('.wpcf7 .wpcf7-select.cs-select .cs-placeholder').text('Select Your City');
    $('.wpcf7 .wpcf7-select.cs-select .cs-options ul li').first().hide();

    var wpcf7Elm = document.querySelector('.wpcf7');
    wpcf7Elm.addEventListener('wpcf7mailsent', function (event) {
      $(".thank-you-wrapper").addClass("show");
      $(".contact-form-wrapper").removeClass("show");

      $(".thank-you-wrapper .btn-close").on("click", function (e) {
        $(this).parents(".thank-you-wrapper").removeClass("show");
      });

    }, false);
  });

})(jQuery);
