(function($) {
  var audioclock;
  var trigger = $('.trigger-audio');

  var pauseAll = function() {
    $('audio').each( function() {
      var a = $(this).get(0);
      var item = this.closest('li');
      a.pause();
      $(item).removeClass('is-active');
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

    // Play the demo
    if( paused === true ){
      pauseAll();

      // Give item an active state
      $(item).addClass('is-active');

      // Switch button's state
      $(this).addClass('pause');
      $(this).removeClass('play');
      console.log(audio.currentTime);

      // Play audio
      audio.get(0).play();

      audio.on('pause', function() {
        clearInterval(audioclock);
      });

      // Update progress value
      audio.on( 'timeupdate', function() {
        // Update progress value
        audioclock = setInterval(function () {
          progress.attr( 'value', Math.round(((audio[0].currentTime / audio[0].duration) * 100) * 2) );
        }, 50);

        // Get value
        var value = progress[0].getAttribute('value');

        if( value > 199 ){
          var trigger_pause = $('.trigger-audio.pause');

          // Remove item's active state
          $(item).removeClass('is-active');

          // Switch button's state
          trigger_pause.addClass('play');
          trigger_pause.removeClass('pause');

          // Update progress value
          progress.attr( 'value', 0 );
        }
      });

    // Pause the demo
    } else {
      // Remove item's active state
      $(item).removeClass('is-active');

      // Switch button's state
      $(this).addClass('play');
      $(this).removeClass('pause');

      // Pause audio
      audio.get(0).pause();
    }
  });

}( jQuery ));