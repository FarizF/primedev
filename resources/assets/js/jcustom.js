$(document).ready(function(){
  $(".hbbutton img").on("click", function() {
    if($("#mobilenav").css("display") == "none") {
      $("#mobilenav").css("display", "initial");
    } else {
      $("#mobilenav").css("display", "none");
    }
  })
});
