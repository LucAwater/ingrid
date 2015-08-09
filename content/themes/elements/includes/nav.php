<nav>
  <ul>
    <?php
    if( have_posts() ):
      while( have_posts() ): the_post();

        if( have_rows('content') ): $i_anchor = 1;
          while( have_rows('content') ): the_row();

            if( get_row_layout() == 'text' ):
              $text_menu = get_sub_field( 'text_o_menu' );
              $text_menu_name = get_sub_field( 'text_o_menu_name' );
              if( $text_menu == true ):
                echo '<li><a href="#anchor-' . $i_anchor . '">' . $text_menu_name . '</a></li>';
              endif;
              $i_anchor++;

            elseif( get_row_layout() == 'playlist' ):
              $playlist_menu = get_sub_field( 'playlist_o_menu' );
              $playlist_menu_name = get_sub_field( 'playlist_o_menu_name' );
              if( $playlist_menu == true ):
                echo '<li><a href="#anchor-' . $i_anchor . '">' . $playlist_menu_name . '</a></li>';
              endif;
              $i_anchor++;
            endif;

          endwhile;
        endif;

      endwhile;
    endif;
    ?>
  </ul>
</nav>
