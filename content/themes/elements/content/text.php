<?php
// Content (variables)
$title = get_sub_field( 'text_title' );
$content = get_sub_field( 'text_content' );
$button_text = get_sub_field( 'text_button_text' );
$button_link = get_sub_field( 'text_button_link' );

//Output
echo
'<section class="text has-anchor" id="anchor-' . $i_anchor . '">
  <div class="section-body">
    ' . ( ($title) ? '<h2 class="s-4 columns is-uppercase is-bold is-aligned-center">' . $title . '</h2>' : "") . '
    ' . $content . '
    ' . ( ($button_link) ? '<a class="button" href="' . $button_link . '">' . $button_text . '</a>' : "" ) . '
  </div>
</section>';
?>
