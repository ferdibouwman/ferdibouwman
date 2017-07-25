$( document ).ready(function() {

    //Hamburger menu
    var $hamburger = $(".hamburger");
    $hamburger.on("click", function(e) {
      $hamburger.toggleClass("is-active");
      $(".menu").toggleClass("is-active");
	  $(".header").toggleClass("is-active");
      $("body").toggleClass("is-active");
      ;
    });

	// TYPED
	var typed = new Typed('.subtitle-typed', {
		strings: ["Portfolio producten maken", "Design bedenken", "Repo aanmaken", "Taiga klaarzetten", "Coderen", "Final check" ],
		typeSpeed: 110,
		backDelay: 1500,
		showCursor: true,
	    cursorChar: '|',
	    autoInsertCss: true,
	});
});
