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
    <li class="width-40 left-20">
      <img src="<?php echo $image1['sizes']['large']; ?>" width="<?php echo $image1['width']; ?>" height="<?php echo $image1['height']; ?>">
    </li>

    <li class="width-30 left-50 top-30">
      <img src="<?php echo $image2['sizes']['large']; ?>" width="<?php echo $image2['width']; ?>" height="<?php echo $image2['height']; ?>">
    </li>

    <li class="width-80 left-10">
      <img src="<?php echo $image3['sizes']['large']; ?>" width="<?php echo $image3['width']; ?>" height="<?php echo $image3['height']; ?>">
    </li>

    <li class="width-40 left-60">
      <img src="<?php echo $image4['sizes']['large']; ?>" width="<?php echo $image4['width']; ?>" height="<?php echo $image4['height']; ?>">
    </li>

    <li class="width-60 left-20 top-20">
      <img src="<?php echo $image5['sizes']['large']; ?>" width="<?php echo $image5['width']; ?>" height="<?php echo $image5['height']; ?>">
    </li>
  </ul>

<?php
get_footer();
?>
