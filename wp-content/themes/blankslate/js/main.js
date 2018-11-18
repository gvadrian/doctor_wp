"use strict";

(function ($) {
  window.onbeforeunload = function () {
    window.scrollTo(0, 0);
  };

  $('body').bind('scroll mousewheel touchmove', function (e) {
    console.log("hjghj");
    e.preventDefault();
    e.stopPropagation();
    return false;
  });
  /* Preoader */

  $(window).on('load', function () {
    $('.preloader-bg').fadeOut('slow', function () {
      $('body').removeClass('scroll-blocker');
      $(this).remove();
      $('body').unbind('scroll mousewheel touchmove');
    });
  });
  $(document).ready(function () {
    // $(".popup_wrapper .popup_wrapper_visible").click(function(){
    //     console.log('scroll is back after outside click');
    //         $('body').unbind('scroll mousewheel touchmove');
    //     });
    // });
    //mobile menu
    var openMobileMenu = false;
    var headerRequestBtn = $("#header-request-btn");
    var mobileMenu = $(".mobile-menu");

    if (mobileMenu) {
      mobileMenu.hide('fast');
    }

    var menuIcon = $('.menu-icon');

    if (menuIcon) {
      menuIcon.on('click', function () {
        if (openMobileMenu) {
          openMobileMenu = false;
          menuIcon.removeClass("close").addClass("open");
          mobileMenu.fadeOut('500');
          headerRequestBtn.fadeOut('500');
        } else {
          menuIcon.removeClass("open").addClass("close");
          openMobileMenu = true;
          mobileMenu.fadeIn();
          headerRequestBtn.fadeIn();
        }
      });
    }

    var mobileLinks = $('.mobile-menu__nav-link');

    if (mobileLinks.length) {
      for (var i = 0; i < mobileLinks.length; i++) {
        $(mobileLinks[i]).on('click', function (e) {
          if ($(e.target).hasClass('sub-header')) {
            e.preventDefault();
          } else {
            openMobileMenu = false;
            headerRequestBtn.fadeOut('500');
            $(".mobile-menu").fadeOut('fast');
          }
        });
      }
    } // sub menu 


    var tbMenuBtn = $(".header__nav-link.sub-header");
    var tbMenuOpen = false;
    var tbMenu = $(".sub-links");

    if (tbMenuBtn) {
      tbMenuBtn.on("click", function (e) {
        e.preventDefault();
        var wViewport = getViewport();

        if (wViewport[0] >= 768 && wViewport[0] < 1200) {
          if (tbMenuOpen) {
            tbMenuOpen = false;
            tbMenu.fadeOut('fast');
          } else {
            tbMenuOpen = true;
            tbMenu.fadeIn('500');
          }
        }
      });
    }

    $(window).on("resize", function () {
      if (mobileMenu) {
        mobileMenu.fadeOut('10');
        openMobileMenu = false;
      }

      if (menuIcon) {
        menuIcon.removeClass("close").addClass("open");
      }

      if (tbMenu) {
        tbMenuOpen = false;
      }
    });

    function getViewport() {
      var viewPortWidth;
      var viewPortHeight; // the more standards compliant browsers (mozilla/netscape/opera/IE7) use window.innerWidth and window.innerHeight

      if (typeof window.innerWidth != 'undefined') {
        viewPortWidth = window.innerWidth, viewPortHeight = window.innerHeight;
      } // IE6 in standards compliant mode (i.e. with a valid doctype as the first line in the document)
      else if (typeof document.documentElement != 'undefined' && typeof document.documentElement.clientWidth != 'undefined' && document.documentElement.clientWidth != 0) {
          viewPortWidth = document.documentElement.clientWidth, viewPortHeight = document.documentElement.clientHeight;
        } // older versions of IE
        else {
            viewPortWidth = document.getElementsByTagName('body')[0].clientWidth, viewPortHeight = document.getElementsByTagName('body')[0].clientHeight;
          }

      return [viewPortWidth, viewPortHeight];
    }
    /* Request consultation Popup */


    $('.request-consultation__popup').popup({
      background: true,
      transition: 'all 0.3s',
      scrolllock: true,
      escape: true,
      blur: true
    });
    var popupclosed = true;
    $(".request-button").on("click", function () {
      $('.request-consultation__popup').popup('show');
      $('body').addClass('scroll-blocker');
      $('body').bind('scroll mousewheel touchmove', function (e) {
        e.preventDefault();
        e.stopPropagation();
        return false;
      });
    });
    $(".footer__request-link").on("click", function () {
      $('.request-consultation__popup').popup('show');
      $('body').addClass('scroll-blocker');
      $('body').bind('scroll mousewheel touchmove', function (e) {
        e.preventDefault();
        e.stopPropagation();
        return false;
      });
    }); // // popup close on overlay click
    // $(".popup__close-icon").on("click", function () {
    //     $('.request-consultation__popup').popup('hide');
    //     $('body').unbind('scroll mousewheel touchmove');
    // });

    $(".YouTubePopUp-Wrap, .YouTubePopUp-Close").click(function () {
      $('body').unbind('scroll mousewheel touchmove');
    });
    $('.popup_wrapper').on('click', function () {
      console.log('test overlay');
      $('body').unbind('scroll mousewheel touchmove');
    });
    $(".popup__close-icon").on("click", function () {
      $('.request-consultation__popup').popup('hide');
      $('body').unbind('scroll mousewheel touchmove');
    });
    /* Buy Book Popup */

    $('.buy-book__popup').popup({
      background: true,
      transition: 'all 0.3s',
      scrolllock: true,
      escape: true,
      blur: true
    });
    $(".book__more").on("click", function () {
      $('.buy-book__popup').popup('show');
    });
    /* Youtube Popup for NewAbout Page */

    $(function () {
      var youtubePlayers = $(".news-about__player-poster-ren");

      if (youtubePlayers.length) {
        youtubePlayers.YouTubePopUp({
          autoplay: 0
        });
      }
    });
  });
  $(document).keyup(function (e) {
    if (e.keyCode == 27) {
      $('.YouTubePopUp-Wrap, .YouTubePopUp-Close').click(); // unable scroll back

      $('body').unbind('scroll mousewheel touchmove');
    }
  });
})(jQuery);