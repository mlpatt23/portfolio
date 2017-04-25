<?php
	
	function portfolio_styles() {
		
		// Add in stylesheets
		wp_register_style('boilerplate', get_template_directory_uri() . '/css/boilerplate.css', array(), '2.0');
		
		wp_register_style('googlefont_marcellus', 'https://fonts.googleapis.com/css?family=Marcellus', array(), '1.0.0');
		
		wp_register_style('googlefont_raleway', 'https://fonts.googleapis.com/css?family=Raleway:200,300', array(), '1.0.0');
		
		wp_register_style('style', get_template_directory_uri() . '/style.css', array('boilerplate'), '1.0');
		
		
		// Add in scripts
		wp_register_script('jquery', 'https://code.jquery.com/jquery-3.1.1.slim.min.js', array(), '3.1.1', true);
		
		// cloudfare and scrollspy scripts enable the scrollspy navigation without Bootstrap
		wp_register_script('cloudfare', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', array('jquery'), '2.1.3', true);
		
		wp_register_script('scrollspy', 'https://rawgit.com/r3plica/Scrollspy/master/scrollspy.js', array('jquery'), '1.0', true);
		
		wp_register_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', true);
		
		
		// Enqueue the styles
		wp_enqueue_style('boilerplate');
		wp_enqueue_style('googlefont_marcellus');
		wp_enqueue_style('googlefont_raleway');
		wp_enqueue_style('style');
		
		// Enqueue the scripts
		wp_enqueue_script('jquery');
		wp_enqueue_script('cloudfare');
		wp_enqueue_script('scrollspy');
		wp_enqueue_script('script');
		
	}
	
	add_action('wp_enqueue_scripts', 'portfolio_styles');

	
?>