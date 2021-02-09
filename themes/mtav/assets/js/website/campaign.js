import Swiper, {
  Navigation
} from 'swiper';
// configure Swiper to use modules
Swiper.use([Navigation]);

require('../../scss/website/components/mtav-swiper.scss');

require('../../scss/website/campaign-page.scss');
(function ($) {

  console.log('Test');

  $(".city").mouseover(function () {
    $('.city').hide();
    $(this).show();
    $(this).next().show();
    // $(this).show();
  });
  $(".city").mouseout(function () {
    $('.city').next().hide();
    $('.city').show();
  })

  const marginleft = $("#sliderPadding").offset().left;
  $('.media-slider').css('padding-left', marginleft + "px");

  // START : Home By The NUmber Js
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


  // console.log(marginleft);
  console.log('Campaign js');
})(jQuery);
