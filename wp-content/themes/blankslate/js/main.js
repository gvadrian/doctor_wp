"use strict";

(function ($) {
  /* Preoader */
  $(window).on('load', function () {
    $('.preloader-bg').fadeOut('slow', function () {
      $('body').removeClass('scroll-blocker');
      $(this).remove();
    });
    /* Youtube Play button on click - add scroll blocker to body */

    $(".inlinePlayButton, .news-about__player-poster-ren").on('click', function () {
      $('body').addClass('scroll-blocker');
      console.log('body lock on');
    });
    /* YoutubePopup on close - add scroll blocker to body */

    $(document).on('click', '.YouTubePopUp-Wrap, .YouTubePopUp-Close', function () {
      $('body').removeClass('scroll-blocker');
      console.log('body lock off click');
    });
  });
  /* YoutubePopup Initialization */

  $(function () {
    var youtubePlayers = $(".inlinePlayButton:not(.headerVideoPlayButton)");

    if (youtubePlayers.length) {
      youtubePlayers.YouTubePopUp({
        autoplay: 0
      });
    }
  });
  /* YoutubePopup close on Esc */

  $(document).keyup(function (e) {
    if (e.keyCode == 27) {
      $('.YouTubePopUp-Wrap, .YouTubePopUp-Close').click();
      /* remove scroll blocker to body */

      $('body').removeClass('scroll-blocker');
      console.log('body lock off esc');
    }
  });
  $(document).ready(function () {
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
    });
    $(".footer__request-link").on("click", function () {
      $('.request-consultation__popup').popup('show');
    }); // // popup close on overlay click

    $(".popup__close-icon").on("click", function () {
      $('.request-consultation__popup').popup('hide');
    });
    $(".popup__close-icon").on("click", function () {
      $('.request-consultation__popup').popup('hide');
    });
    /* Buy Book Popup */

    $('.buy-book__popup').popup({
      background: true,
      transition: 'all 0.3s',
      scrolllock: true,
      escape: true,
      blur: true
    }); // // popup close on overlay click

    $(".popup__close-icon").on("click", function () {
      $('.buy-book__popup').popup('hide');
    });
    $(".book__more").on("click", function () {
      $('.buy-book__popup').popup('show');
    });
  });
})(jQuery);