<?php
get_header();
?>

<main role="main">
  <?php
  $images = get_field( 'actrice_images' );
  $text = get_field( 'actrice_text' );

  // echo '<pre>';
  //   print_r($images);
  // echo '</pre>';
  $image1 = $images[0];
  $image2 = $images[1];
  $image3 = $images[2];
  $image4 = $images[3];
  $image5 = $images[4];
  ?>

  <ul>
    <li class="s-1 r30 columns" style="background-image:url('<?php echo $image1['sizes']['large']; ?>');"></li>
    <li class="s-1 text columns"></li>
    <li class="s-1 r50 columns" style="background-image:url('<?php echo $image2['sizes']['large']; ?>');"></li>
    <li class="s-1 r50 columns" style="background-image:url('<?php echo $image3['sizes']['large']; ?>');"></li>

    <li class="s-1 r70 columns" style="background-image:url('<?php echo $image4['sizes']['large']; ?>');"></li>
    <li class="s-2 r50 columns" style="background-image:url('<?php echo $image5['sizes']['large']; ?>');"></li>
  </ul>

<?php
get_footer();
?>
