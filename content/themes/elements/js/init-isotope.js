(function($) {

  var grid = $('.masonry');


  // layout Masonry after each image loads
  grid.imagesLoaded().progress( function() {
    grid.isotope({
      layoutMode: 'packery',
      packery: {
        gutter: 10
      },
    })
  });

}( jQuery ));