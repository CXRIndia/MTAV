require('jquery');

import "TweenMax";
import ScrollMagic from 'ScrollMagic';
import 'animation.gsap';
import 'debug.addIndicators';

import Swiper from 'swiper';

require('../../scss/website/components/mtav-swiper.scss');

require('../../scss/website/home-page.scss');
(function ($) {
  console.log('Home js');

  // START : Home By The NUmber Js
  var swiper = new Swiper('.bythenumber-slider', {
    slidesPerView: 3,
    spaceBetween: 30,
    navigation: {
      nextEl: '.bythenumber-next',
      prevEl: '.bythenumber-prev',
    },
  });
  // END : Home By The NUmber Js

  // START : Home Hand Banner Js
  var controller = new ScrollMagic.Controller();
  var wipeAnimation = new TimelineMax();

  var scene = new ScrollMagic.Scene({
    triggerElement: ".js-hand-trigger",
    duration: 5000,
    triggerHook: 0,
  })
    .setPin(".js-handanimation")
    .setTween(wipeAnimation)
    // .addIndicators({name: "1 (duration: 7000)"})
    .addTo(controller);

  //Timeinterval for animation delay
  wipeAnimation.add([
    TweenMax.to(".dummy", .2, {})
  ]);
  wipeAnimation.add([
    TweenMax.to(".hand1-wrapper", .5, {
      left: '-40%',
      ease: Linear.easeNone,
    }),
    TweenMax.to(".hand2-wrapper", .5, {
      right: '-35%',
      ease: Linear.easeNone,
    }),
  ]);


  //Timeinterval for animation delay
  wipeAnimation.add([
    TweenMax.to(".dummy", .2, {})
  ]);
  wipeAnimation.add([
    TweenMax.to(".hand3-wrapper", .5, {
      top: '-29%',
      right: '5%',
      ease: Linear.easeNone,
    }),
    TweenMax.to(".hand4-wrapper", .5, {
      bottom: '-32%',
      left: '9%',
      ease: Linear.easeNone,
    }),
  ]);

  //Timeinterval for animation delay
  wipeAnimation.add([
    TweenMax.to(".dummy", .2, {})
  ]);
  wipeAnimation.add([
    TweenMax.to(".hand5-wrapper", .5, {
      bottom: '-36%',
      right: '4%',
      ease: Linear.easeNone,
    }),
    TweenMax.to(".hand6-wrapper", .5, {
      top: '-33%',
      left: '4%',
      ease: Linear.easeNone,
    }),
  ]);

   //Timeinterval for animation delay
  wipeAnimation.add([
    TweenMax.to(".dummy", .2, {})
  ]);
  wipeAnimation.add([
    TweenMax.to(".hand1-wrapper", .3, {
      left: '-60%',
      ease: Linear.easeNone,
    }),
    TweenMax.to(".hand2-wrapper", .3, {
      right: '-60%',
      ease: Linear.easeNone,
    }),
    TweenMax.to(".hand3-wrapper", .3, {
      top: '-60%',
      ease: Linear.easeNone,
    }),
    TweenMax.to(".hand4-wrapper", .3, {
      bottom: '-65%',
      ease: Linear.easeNone,
    }),
    TweenMax.to(".hand5-wrapper", .3, {
      bottom: '-70%',
      ease: Linear.easeNone,
    }),
    TweenMax.to(".hand6-wrapper", .3, {
      top: '-60%',
      ease: Linear.easeNone,
    }),
    TweenMax.to(".scroll-arrow", .3, {
      bottom: '-80px',
      ease: Linear.easeNone,
    }),
  ]);

  // END : Home Hand Banner Js
})(jQuery);
