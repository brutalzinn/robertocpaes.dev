$(document).ready(function() {
  /**
   * Code for sticky navigation
   */
  $(".js-features-section").waypoint(
    function(direction) {
      if (direction === "down") {
        $("header nav").addClass("sticky-nav");
      } else {
        $("header nav").removeClass("sticky-nav");
      }
    },
    {
      offset: "60px;"
    }
  );

  /**
   * mobile navigation
   */
  $(".js--nav-icon").click(function() {
    $(".js--main-nav").slideToggle(200);
    var icon = $(".responsive-nav");

    if (icon.attr("name") == "menu") {
      //   console.log(icon.attr("name"));
      icon.attr("name", "close");
    } else if (icon.attr("name") == "close") {
      //   console.log(icon.attr("name"));
      icon.attr("name", "menu");
    }
    // icon.attr("name", "menu");
    // $(".js--main-nav").slideUp(200);
  });

  $(window).resize(function() {
    if ($(window).width() > 767) {
      $(".main-nav").css("display", "inline-block");
    } else {
      $(".main-nav").css("display", "none");
    }
  });

  /**
   * Animations on scroll
   */

  $(".js-wpt-1").waypoint(
    function(direction) {
      $(".js-wpt-1").addClass("animated fadeIn");
    },
    {
      offset: "50%"
    }
  );
});
