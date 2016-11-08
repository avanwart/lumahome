/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  /*
    helpers
  */

  function debounce(func, wait, immediate) {
    var timeout;
    return function() {
      var context = this, args = arguments;
      var later = function() {
        timeout = null;
        if (!immediate) func.apply(context, args);
      };
      var callNow = immediate && !timeout;
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
      if (callNow) func.apply(context, args);
    };
  };

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {

        // Smooth scroll
        // ref - https://css-tricks.com/snippets/jquery/smooth-scrolling/
        $('a[href*="#"]:not([href="#"])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html, body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });

        $('.js-youtube-popup').magnificPopup({
          // disableOn: 700,
          type: 'iframe',
          mainClass: 'is-active',
          removalDelay: 160,
          preloader: false,
          fixedContentPos: false
        });

        // Add border to navigation bar on scroll
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll > 0) {
              $('.top-bar').addClass('is-bordered');
            } else {
              $('.top-bar').removeClass('is-bordered');
            }
        });
        // mobile navigation functionality
        $('.top-bar__menu-button').on('click', function(e) {
          e.preventDefault();
          $('.top-bar').toggleClass('is-open');
        })

      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    'surround_wifi': {
      init: function() {
        // JavaScript to be fired on the Surround WiFi page

        var controller  = new ScrollMagic.Controller();
        var trigEl = document.querySelector('.home-models');
        var tween = TweenMax.staggerFromTo(
          $('.model .model__coverage'),
          1,
          {scale: 0.25, opacity: 0, transformOrigin:"50% 50%"},
          {scale: 1, opacity: 1},
          0.2
        );
        var scene = new ScrollMagic.Scene({
            triggerElement: trigEl,
            triggerHook: 0.75,
            duration: '50%'
          })
          .setTween(tween)
          .addTo(controller);

        var cloudsTween = TweenMax.staggerFromTo($('.graphic-clouds .graphic-clouds__cloud'), 6, {opacity: 1}, {opacity: 0, x: '-100px', repeat: -1}, 0.5);

        var setDevicesAnimation = function() {
          var $devicesLoveLumaEl = $('.devices-love-luma__devices');
          var devicesSVG = $devicesLoveLumaEl.find('img');

          $devicesLoveLumaEl.css('width', 2 + devicesSVG.width() * devicesSVG.length);

          var devicesTween = TweenMax.fromTo(
            devicesSVG,
            30, // duration (s) per loop
            {x:0}, // from Attributes
            {x: -devicesSVG.width(), repeat: -1, ease:Linear.easeNone} // to Attributes
          );
        };
        setDevicesAnimation();
        $(window).resize( debounce(function(){
          setDevicesAnimation();
        }, 250, false));
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    'features': {
      init: function() {
        // Set up sticky navigation that sticks when you scroll to it
        // e.g. ["SPEED", "SECURITY", "CONTROL"] nav
        $('.js-sticky-nav').stickUp({
          scrollHide: false,
          fixedClass: 'is-stuck'
        });
        // Set up Control sliders
        $('.control-slider--screenshot').slick({
          dots: false,
          arrows: true,
          autoplay: true,
          autoplaySpeed: 7500,
          prevArrow: '<a href="#" class="control__nav control__nav--prev"><div class="control__nav__image"></div></a>',
          nextArrow: '<a href="#" class="control__nav control__nav--next"><div class="control__nav__image"></div></a>',
          appendArrows: $('.control'),
          fade: true,
          adaptiveHeight: true,
          speed: 500,
          slide: '.control-slider__image',
          asNavFor: '.control-slider--text'
        });
        // Bind ready event to screenshot element
        $('.control-slider--text').on('init', function(){
          $('.control').removeClass('is-not-loaded');
        });
        $('.control-slider--text').slick({
          dots: false,
          arrows: false,
          fade: true,
          speed: 500,
          slide: '.control-slider__copy',
          asNavFor: '.control-slider--screenshot'
        });
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
