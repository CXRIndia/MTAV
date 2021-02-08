import Swiper, {
  Navigation
} from 'swiper';
// configure Swiper to use modules
Swiper.use([Navigation]);

require('../../scss/website/components/mtav-swiper.scss');

require('../../scss/website/campaign-page.scss');
(function ($) {

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

  // START : Home By The NUmber Js
  var swiper = new Swiper('.media-slider', {
    slidesPerView: 1.4,
    spaceBetween: 20,
    // slidesPerGroup: 3,
    // loop: true,
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

  if ($("#sliderPadding").length > 0) {
    var marginleft = $("#sliderPadding").offset().left;
    // $('.media-slider').css('padding-left', marginleft + "px");
    $('.media-slider').css('padding-left', marginleft + "px");
    // $(".media-slider").width($(".media-slider").width() + marginleft );

    // $('.media-slider').css('margin-right', marginleft + "px");


    // /* START : Container margin Left Calulate  */
    // let ContainerMargin = function () {
    //   // let mLeft = $("#sliderPadding").css('margin-left');
    //   let marginleft = $("#sliderPadding").offset().left;
    //   // let fLeft = mLeft.replace("px", "");
    //   // let valueOfLeft = parseInt(fLeft) + 15;
    //   $('.media-slider').css('padding-left', marginleft + "px");

    // }
    // /* END : Container margin Left Calulate  */
    // $(window).on("load", function (e) {
    //   ContainerMargin();
    //   console.log(marginleft);
    // })

    // console.log(marginleft);
  }
  console.log('Campaign js');
})(jQuery);
