$( document ).ready(function() {

    //Hamburger menu
    var $hamburger = $(".hamburger");
    $hamburger.on("click", function(e) {
      $hamburger.toggleClass("is-active");
      $(".menu").toggleClass("is-active");
      $("body").toggleClass("is-active");
      ;
    });
});
