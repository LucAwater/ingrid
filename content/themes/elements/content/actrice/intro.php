<?php
$banner = get_field( 'actrice_banner' );
$text = get_field( 'actrice_text' );
?>

<div class="banner">
  <div class="banner-image" style="background-image:url('<?php echo $banner['sizes']['large']; ?>')"></div>
  <div class="banner-content">
    <?php echo $text; ?>
  </div>
</div>
