<?php
get_header();
?>

<aside>
  <?php
  // Left background image(s)
  $left_images = get_field( 'left_images' );

  echo '<div class="aside-images">';

  foreach( $left_images as $image ):
    echo '<li><img src="' . $image['sizes']['large'] . '"></li>';
  endforeach;

  echo '</div>';

  // Left text
  // $left_text = get_field( 'left_text' );
  //
  // echo '<div class="aside-text">' . $left_text . '</div>';
  ?>
</aside>

<main role="main">
  <?php
  // include( 'includes/nav.php' );

  // Loop into ACF groups
  if( have_rows('content') ): $i_anchor = 1;
    while( have_rows('content') ): the_row();

      if( get_row_layout() == 'text' ):
        include( locate_template('content/text.php') ); $i_anchor++;
      elseif( get_row_layout() == 'playlist' ):
        include( locate_template('content/playlist.php') ); $i_anchor++;
      endif;

    endwhile;
  endif;

get_footer();
?>
