import "lazysizes";

import AOS from "aos";

import "../website/contact-form";

window.lazySizesConfig = window.lazySizesConfig || {};
window.lazySizesConfig.loadMode = 1;

(function ($) {

  $(".js-menuopen").on("click", function () {
    $(".mobile-menu").fadeIn();
    $("body").addClass("modal-open");
    $("html").addClass("modal-open");
  });

  $(".js-menuclose").on("click", function () {
    $(".mobile-menu").fadeOut();
    $("body").removeClass("modal-open");
    $("html").removeClass("modal-open");
  });

  $(".js-fullvideo").on("click", function () {
    $(".fullvideo-popup").fadeIn();
    $("body").addClass("modal-open");
    $("html").addClass("modal-open");
  });

  $(".js-video-close").on("click", function () {
    $(".fullvideo-popup").fadeOut();
    $("body").removeClass("modal-open");
    $("html").removeClass("modal-open");
    $("iframe").attr("src", $("iframe").attr("data-src"));
  });

  $(window).load(function () {
    AOS.init();
    AOS.init({
      once: true,
    });
  });

  $(window).scroll(function () {
    var sticky = $("header"),
      scroll = $(window).scrollTop();

    if (scroll >= 50) sticky.addClass("fixed");
    else sticky.removeClass("fixed");
  });

  document.querySelectorAll('a[href^="#footer-form"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();
      $(".mobile-menu").fadeOut();
      $("body").removeClass("modal-open");
      $("html").removeClass("modal-open");

      document.querySelector(this.getAttribute("href")).scrollIntoView({
        behavior: "smooth",
      });
    });
  });

  document.addEventListener("lazybeforeunveil", function (e) {
    var bg = e.target.getAttribute("data-bg");
    if (bg) {
      e.target.style.backgroundImage = "url(" + bg + ")";
    }
  });
})(jQuery);
