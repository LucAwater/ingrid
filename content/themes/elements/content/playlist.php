<?php
echo '<section class="playlist">';
  if( have_rows('playlist_item') ):

    echo '<ul>';

    while( have_rows('playlist_item') ): the_row();
      $title = get_sub_field( 'playlist_item_title' );

      echo
      '<li>
      <p>' . $title . '<p>
      </li>';

    endwhile;

    echo '</ul>';

  endif;
echo '</section>';
?>
