<?php

function mit_theme_resources() {


	wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/css/bootstrap.css');
	wp_enqueue_style('style', get_stylesheet_uri());
	
	wp_enqueue_style('font-awesome',get_template_directory_uri().'/assets/fonts/font-awesome/css/font-awesome.css');
	wp_enqueue_style('font-awesome',get_template_directory_uri().'/assets/fonts/font-awesome/css/font-awesome.css');
	wp_enqueue_style('font-googleapis','http://fonts.googleapis.com/css?family=Lato:400,700,900,300');
	wp_enqueue_style('font-googleapis2','http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300');

	wp_enqueue_script('jquery_js', get_template_directory_uri().'/assets/js/jquery.1.11.1.js',NULL,1.0,true);
	wp_enqueue_script('bootstrap_js', get_template_directory_uri().'/assets/js/bootstrap.js',NULL,1.0,true);
	wp_enqueue_script('count-to_js', get_template_directory_uri().'/assets/js/count-to.js',NULL,1.0,true);
	
	wp_enqueue_script('main_js', get_template_directory_uri().'/assets/js/main.js',NULL,1.0,true);
	wp_localize_script('main_js', 'magicalData', array(
		'nonce' => wp_create_nonce('wp_rest'),
		'siteURL' => get_site_url()
	));


}

add_action('wp_enqueue_scripts', 'mit_theme_resources');


// Customize excerpt word count length
function custom_excerpt_length() {
	return 25;
}

add_filter('excerpt_length', 'custom_excerpt_length');



// Theme setup
function mit_theme_setup() {

	// Navigation Menus
	register_nav_menus(array(
		'primary' => __( 'Primary Menu'),
		'footer' => __( 'Footer Menu'),
	));

	// Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 180, 120, true);
	add_image_size('banner-image', 920, 210, array('left', 'top'));

	// Add post types support
	add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}

add_action('after_setup_theme', 'mit_theme_setup');




