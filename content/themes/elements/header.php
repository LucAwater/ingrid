<?php
/**
 * @package WordPress
 */
?>

<!DOCTYPE html>
<!--[if IE 9]>    <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <title>Ingrid de Laat</title>

  <link rel="canonical" href="<?php echo home_url(); ?>">

  <!-- META TAGS -->
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="description" content="">

  <meta property="og:title" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">

  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Stylesheet -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/app.css">

  <!-- Fonts from Typekit -->
  <script src="//use.typekit.net/hls3dri.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>

  <!-- WP_HEAD() -->
  <?php wp_head(); ?>

  <!-- Get page slug -->
  <?php
  global $post;
  $page_slug = get_post( $post )->post_name;
  ?>
</head>

<?php
require_once 'includes/Mobile_Detect.php';
$detect = new Mobile_Detect;

if( $detect->isMobile() && $detect->isTablet() ){
  $body_class = 'is-loading mobile page-' . $page_slug;
} else {
  $body_class = 'is-loading page-' . $page_slug;
}
?>

<body class="<?php echo $body_class; ?>">
