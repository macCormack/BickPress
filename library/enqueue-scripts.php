<?php

if ( ! function_exists( 'foundationpress_scripts' ) ) :
	function foundationpress_scripts() {

	// Enqueue Main Stylesheet
	wp_enqueue_style( 'main-stylesheet', get_stylesheet_directory_uri() . '/css/foundation.css' );

	wp_enqueue_style('roboto-font', '//fonts.googleapis.com/css?family=Roboto:400,700' );

	// Deregister the jquery version bundled with wordpress
	wp_deregister_script( 'jquery' );

	// Modernizr is used for polyfills and feature detection. Must be placed in header. (Not required)
	wp_register_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr.js', array(), '2.8.3', false );

	// Fastclick removes the 300ms delay on click events in mobile environments. Must be placed in header. (Not required)
	wp_register_script( 'fastclick', get_template_directory_uri() . '/js/vendor/fastclick.js', array(), '1.0.0', true );

	// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', array(), '2.1.0', true );

	// Self hosted jQuery placed in the footer. (Comment the script above and uncomment the script below if you want to switch).
	//wp_register_script( 'jquery', get_template_directory_uri() . '/js/vendor/jquery.js', array(), '2.1.3', true );

	// If you'd like to cherry-pick the foundation components you need in your project, head over to Gruntfile.js and see lines 67-88
	// It's a good idea to do this, performance-wise. No need to load everything if you're just going to use the grid anyway, you know :)
	wp_register_script( 'foundation', get_template_directory_uri() . '/js/foundation.js', array('jquery'), '5.5.2', true );

	wp_register_script( 'masonry', '//cdnjs.cloudflare.com/ajax/libs/masonry/3.3.0/masonry.pkgd.js', array(), '3.3.0', true );

	wp_register_script( 'loadedImages', get_template_directory_uri() . '/js/custom/imagesloaded.js', array(), '3.3.0', true );

	wp_register_script('AppJS', get_template_directory_uri() . '/js/custom/app.js', array(),'1.0.0', true );

	// Enqueue all registered scripts
	wp_enqueue_script( 'modernizr' );
	wp_enqueue_script( 'fastclick' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'foundation' );
	wp_enqueue_script( 'masonry' );
	wp_enqueue_script( 'loadedImages' );
	wp_enqueue_script( 'AppJS');

	}

	add_action( 'wp_enqueue_scripts', 'foundationpress_scripts' );
endif;

?>
