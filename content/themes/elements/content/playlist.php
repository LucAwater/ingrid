<?php
echo
'<section class="playlist has-anchor" id="anchor-' . $i_anchor . '">
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
        ?>

        <li>
          <p><?php echo $i . '. ' . $title; ?></p>

          <audio id="<?php echo $i; ?>">
            <source src="<?php echo $file['url']; ?>" type="<?php echo $file['mime_type']; ?>">
          </audio>

          <a class="trigger trigger-audio play">
            <i></i>
          </a>

          <div class="progress-container">
            <progress value="0" max="200"></progress>
          </div>
        </li>
        <?php
        $i++;
      endwhile;

      echo '</ul>';

    endif;
  echo
  '</div>
</section>';
?>
