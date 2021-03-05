import Swiper, {
  Navigation
} from 'swiper';

Swiper.use([Navigation]);

require('../../scss/website/components/mtav-swiper.scss');

require('../../scss/website/campaign-page.scss');
(function ($) {

  $(".city").mouseover(function () {
    $('.city').hide();
    $(this).show();
    $(this).next().show();
  });
  $(".city").mouseout(function () {
    $('.city').next().hide();
    $('.city').show();
  })

  if (screen.width >= 600) {
    let marginleft = $("#sliderPadding").offset().left;
    let valueOfLeft = marginleft + 15;
    $('.media-slider').css('padding-left', valueOfLeft + "px");
  }

  var swiper = new Swiper('.media-slider', {
    slidesPerView: 1.4,
    spaceBetween: 20,
    breakpoints: {
      992: {
        spaceBetween: 40,
        slidesPerView: 2.3,
      },
      768: {
        spaceBetween: 24,
        slidesPerView: 2.2,
      }
    },
    navigation: {
      nextEl: '.media-next',
      prevEl: '.media-prev',
    },
  });

})(jQuery);
