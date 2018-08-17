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

  function determineStickyMenu() {
    if (window.innerWidth <= 900) {
      if ($(window).scrollTop() >= $("#nav").outerHeight()) {
        $("#nav").css({
          "position" : "fixed",
          "height" : "30px",
          "background-color" : "#FFF"
        });
      } else {
        $("#nav").attr("style", "");
      }
    } else {
      if ($(window).scrollTop() >= $("#nav").outerHeight()) {
        $("#nav").css({
          "position" : "fixed",
          "height" : "50px",
          "background-color" : "#FFF"
        });
      } else {
        $("#nav").attr("style", "");
      }
    }
  }
});
