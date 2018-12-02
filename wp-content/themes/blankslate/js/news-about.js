"use strict";

(function () {
  $(document).ready(function () {
    var youtubePlayers = $(".news-about__player-poster-ren");

    if (youtubePlayers.length) {
      youtubePlayers.YouTubePopUp({
        autoplay: 0
      });
    }
  });
})();