<?php
function enqueue_theme_scripts() {
  // Unregister standard jQuery and reregister as google code.
  wp_deregister_script('jquery');
  wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', null, false, true );
	wp_enqueue_script( 'jquery' );

	if( WP_DEBUG ):
		// Plugins
		// For example:
    wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', 'jquery', false, true );
    wp_enqueue_script( 'play', get_template_directory_uri() . '/js/play.js', 'jquery', false, true );
    //wp_enqueue_script( 'packery', get_template_directory_uri() . '/js/vendor/packery.js', 'jquery', false, true );
    //wp_enqueue_script( 'init-isotope', get_template_directory_uri() . '/js/init-isotope.js', 'jquery', false, true );
 	else:
		// All concatenated and compressed JS in one file:
		wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', 'jquery', false, true );
 	endif;
}

add_action('wp_enqueue_scripts', 'enqueue_theme_scripts');
?>