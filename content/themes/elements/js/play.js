(function($) {
  var trigger = $('.trigger-audio');

  var pauseAll = function() {
    $('audio').each( function() {
      var a = $(this).get(0);
      a.pause();
      trigger.addClass('play');
      trigger.removeClass('pause');
    });
  };

  trigger.on( 'click', function() {
    var item = this.closest('li');
    var audio = $(item).children('audio');
    var progress = $(item).find('progress');
    var progress_cont = $(item).find('.progress-container');
    var paused = audio[0].paused;

    // Give item an active state
    $(item).addClass('is-active');

    // Play the demo
    if( paused === true ){
      pauseAll();

      // Switch button's state
      $(this).addClass('pause');
      $(this).removeClass('play');

      // Play audio
      audio.get(0).play();

      // Update progress value
      audio.on( 'timeupdate', function() {
        // Update value
        progress.attr( 'value', Math.round(((this.currentTime / this.duration) * 100) * 2) );

        // Get value
        var value = progress[0].getAttribute('value');
      });

    // Pause the demo
    } else {
      // Switch button's state
      $(this).addClass('play');
      $(this).removeClass('pause');

      // Pause audio
      audio.get(0).pause();
    }
  });

}( jQuery ));