$(document).ready(function(){
  $(".hbbutton img").on("click", function() {
    if ($("#mobilenav").css("display") == "none") {
      $("#mobilenav").css("display", "initial");
    } else {
      $("#mobilenav").css("display", "none");
    }
  })

  $("body").on("scroll", function() {
    if (window.innerWidth <= 900) {
      if (document.scrollTop() > $("#nav").height()) {
        console.log("stick");
      }
    } else {
      
    }
  })
});
