<?php
echo '<section class="playlist" id="playlist">';
  if( have_rows('playlist_item') ):

    echo '<ul>';
    $i = 1;

    while( have_rows('playlist_item') ): the_row();
      $title = get_sub_field( 'playlist_item_title' );

      echo
      '<li>
      <p>0' . $i . '. ' . $title . '<p>
      </li>';

      $i++;
      
    endwhile;

    echo '</ul>';

  endif;
echo '</section>';
?>
