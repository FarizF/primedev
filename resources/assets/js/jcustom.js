$(document).ready(function(){
  $(".hbbutton img").on("click", function() {
    if ($("#mobilenav").css("display") == "none") {
      $("#mobilenav").css("display", "initial");
    } else {
      $("#mobilenav").css("display", "none");
    }
  });

  $(window).on("scroll load", function() {
    determineStickyMenu();
  })


  // REFACTOR THIS?
  function determineStickyMenu() {
    if (window.innerWidth <= 900) {
      if ($(window).scrollTop() >= $("#nav").outerHeight()) {
        $("#nav").css({
          "color" : "#000",
          "position" : "fixed",
          "height" : "30px",
          "background-color" : "#FFF"
        });
        $("#menu").css("margin-bottom", "0");
        $("nav .container #menu a").css("color", "#191919");
        $("#logolink img").css({
          "height" : "100%",
          "width" : "auto"
        })
        .attr("src", "/images/logo_farizfakkel_black.png");
        $("#nav .hbbutton img").css("margin-top", ".5rem")
        .attr("src", "/images/hbmenublacksmall.png");
      } else {
        $("#nav").attr("style", "");
        $("#menu").attr("style", "");
        $("nav .container #menu a").attr("style", "");
        $("#logolink img").attr({
          "style" : "",
          "src" : "/images/logo_farizfakkel.png"
        });
        $("#nav .hbbutton img").attr({
          "src" : "/images/hbmenuwhitesmall.png",
          "style" : ""
        });
      }
    } else {
      if ($(window).scrollTop() >= $("#nav").outerHeight()) {
        $("#nav").css({
          "color" : "#000",
          "position" : "fixed",
          "height" : "45px",
          "background-color" : "#FFF"
        });
        $("#menu").css("margin-bottom", "0");
        $("nav .container #menu a").css("color", "#191919");
        $("#logolink img").css({
          "height" : "100%",
          "width" : "auto"
        })
        .attr("src", "/images/logo_farizfakkel_black.png");
      } else {
        $("#nav").attr("style", "");
        $("#menu").attr("style", "");
        $("nav .container #menu a").attr("style", "");
        $("#logolink img").attr({
          "style" : "",
          "src" : "/images/logo_farizfakkel.png"
        });
      }
    }
  }
});
