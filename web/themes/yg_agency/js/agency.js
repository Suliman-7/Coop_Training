(function ($) {
  'use strict';

  Drupal.behaviors.awesome = {
    attach: function(context, settings) {
      // Smooth scrolling using jQuery easing

    $('a.js-scroll-trigger', context).once('awesome').click(function() {
      $('a.js-scroll-trigger').removeClass('active');
      $(this).addClass('active');
      if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
            var a = $(this.hash);
            if ((a = a.length ? a : $("[name=" + this.hash.slice(1) + "]")).length) return $("html, body").animate({
                scrollTop: a.offset().top - 54
            }, 1e3, "easeInOutExpo"), !1
      }
    }), $(".js-scroll-trigger").click(function() {
        $(".navbar-collapse").collapse("hide")
    }), $("body").scrollspy({
        target: "#mainNav",
        offset: 56
    });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 80
  });

  // Collapse the navbar when page is scrolled
  $(window).scroll(function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-shrink");
    } else {
      $("#mainNav").removeClass("navbar-shrink");
    }
  });
    }
  };

}(jQuery, Drupal));




