$ ->
  item = $('.section-list li')
  audio = item.children('audio')
  trigger = $('.trigger-audio')
  play = $('.play')
  progress_container = $('.progress-container')
  
  # Pause all audio before playing clicked audio
  allAudioEls = $('audio')
  
  pauseAllAudio = ->
    allAudioEls.each ->
      a = $(this).get(0)
      a.pause()
      return
    return
  
  trigger.click ->
    item = $(this).closest('li')
    audio = item.children('audio')
    progress = item.find('progress')
    progress_con = item.find('.progress-container')
    pause = $(this + '.pause')
    status = audio[0].paused
    
    if status is true
      pauseAllAudio()
      
      # switching active status of progress bar
      $('.progress-container').removeClass "is_active"
      progress_con.addClass "is_active"
      
      $('.trigger-audio').removeClass "pause"
      $('.trigger-audio').addClass "play"
      
      $(this).addClass "pause"
      $(this).removeClass "play"
      
      audio.get(0).play()
      #
      # # Handle progress container active state for color animations
      # $(this).closest('li').children('.progress-container').addClass "is_active"
      
      audio.on 'timeupdate', ->
        progress.attr 'value', Math.round( ((@currentTime / @duration) * 100) * 2 )
        
        # Get progress value
        value = progress[0].getAttribute('value')
        console.log value
        
        # Hiding mask on 50% of progress
        if value > 100
          item.find('.mask-1').css "z-index", -1
          item.find('.mask-2').css "z-index", 800
        else
          item.find('.mask-1').css "z-index", 800
          item.find('.mask-2').css "z-index", -1
          
        if value > 199
          delay = (ms, func) -> setTimeout func, ms
          
          delay 300, -> progress_con.removeClass "is_active"
          delay 300, -> $('.trigger-audio').removeClass "pause"
          delay 300, -> $('.trigger-audio').addClass "play"
        
    else
      # switching active status of progress bar
      $('.progress-container').removeClass "is_active"
      
      pause.addClass "play"
      pause.removeClass "pause"
      
      audio.get(0).pause()