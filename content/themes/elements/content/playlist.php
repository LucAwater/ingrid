<?php
echo
'<section class="playlist" id="playlist">
  <div class="section-body">';
    if( have_rows('playlist_item') ):

      echo '<ul>';
      $i = 1;

      while( have_rows('playlist_item') ): the_row();
        $title = get_sub_field( 'playlist_item_title' );
        $file = get_sub_field( 'playlist_item_file' );

        // Adding a zero before numbers below 10. Purely for aesthetic value.
        if( $i < 10 ){
          $i = '0' . $i;
        }

        echo
        '<li>
        <p>' . $i . '. ' . $title . '</p>
        <audio id="' . $i . '">
          <source src="' . $file['url'] . '" type="' . $file['mime_type'] . '">
        </audio>
        <div class="progress-container">
          <progress value="0" max="200"></progress>
          <a class="trigger trigger-audio play">
            <div class="trigger-inner">
              <i></i>
            </div>
          </a>
          <div class="mask mask-1 circle-half"></div>
          <div class="mask mask-2 circle-half"></div>
        </div>
        </li>';

        $i++;

      endwhile;

      echo '</ul>';

    endif;
  echo
  '</div>
</section>';
?>
