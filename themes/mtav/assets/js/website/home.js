require('jquery');

import TweenMax from "TweenMax";
import ScrollMagic from 'ScrollMagic';
import 'animation.gsap';
import 'debug.addIndicators';

import Swiper from 'swiper';

require('../../scss/website/components/mtav-swiper.scss');

require('../../scss/website/home-page.scss');
(function ($) {
  console.log('Home js');
  var swiper = new Swiper('.bythenumber-slider', {
    navigation: {
      nextEl: '.bythenumber-next',
      prevEl: '.bythenumber-prev',
    },
  });
})(jQuery);
