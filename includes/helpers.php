<?php

// This theme styles the visual editor with editor-style.css to match the theme style.
add_editor_style();

// Add default posts and comments RSS feed links to head
add_theme_support('automatic-feed-links');

// Enable support for Post Thumbnails on posts and pages
add_theme_support('post-thumbnails');

//Title tag support
add_theme_support( 'title-tag' );

// Add Thumbnail Theme Support
add_theme_support('post-thumbnails');
add_image_size('video_poster', 1920, 1080, true);
add_image_size('top-image', 1920, 600, true);
add_image_size('bio', 500, 700, true);
add_image_size('bio-thumb', 215, 300, true);
add_image_size('article', 380, 380, true);
add_image_size('article-thumb', 380, 235, true);

// This theme uses wp_nav_menu() in one location.
register_nav_menus(array(
	'primary'  => __('Header', 'rstyle'),
));

// Search Shortcode
add_shortcode('search_form', 'get_search_form');

// Custom Header Images
$defaults = [
	'default-image'          => '',
	'width'                  => 0,
	'height'                 => 0,
	'flex-height'            => false,
	'flex-width'             => false,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => false,
	'default-text-color'     => '',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
];

add_theme_support('custom-header', $defaults);

// Options Page
if ( function_exists('acf_add_options_page')) {
	acf_add_options_page();
	acf_add_options_sub_page('General');
	acf_add_options_sub_page('Footer');
}

// Custom WordPress nav walker.
require get_template_directory() . '/bootstrap-wp-navwalker.php';

//Loop through controller methods and create vars for views
function get_vars($class_name) {	
	$class_methods = get_class_methods($class_name);
	$data = [];

	foreach ($class_methods as $class_method) {
		$data[$class_method] = $class_name->{$class_method}();
	}

	return $data;
}

?>