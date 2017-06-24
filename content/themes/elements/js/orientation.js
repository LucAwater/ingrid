(function($) {

  function orientation() {
    if(window.innerHeight > window.innerWidth){
      $('body').removeClass("landscape");
      $('body').addClass("portrait");
    } else {
      $('body').addClass("landscape");
      $('body').removeClass("portrait");
    }
  };

  orientation();

  $(window).resize(function() {
    orientation();
  });

}( jQuery ));