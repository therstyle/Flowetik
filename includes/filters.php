<?php

//Remove Query Strings
function remove_script_version($src) {
  return remove_query_arg('ver', $src);
}

add_filter('script_loader_src', 'remove_script_version');
add_filter('style_loader_src', 'remove_script_version');

//Login Page
function login_url() {
	return 'http://rstyledesign.com';
}

add_filter('login_headerurl', 'logo_url');

// Custom excerpt length
function long_excerpt($length) {
	return 150;
}

function short_excerpt($length) {
	return 25;
}

function custom_excerpt($length_callback = '', $more_callback = '') {
  global $post;
  if (function_exists($length_callback)) {
      add_filter('excerpt_length', $length_callback);
	}
	
  if (function_exists($more_callback)) {
      add_filter('excerpt_more', $more_callback);
	}
	
  $output = get_the_excerpt();
  $output = apply_filters('wptexturize', $output);
  $output = apply_filters('convert_chars', $output);
  $output = '<p>' . $output . '</p>';
  echo $output;
}

// Custom View Article link to Post
function custom_view_article($more) {
	global $post;
	return '... <a href="' . get_permalink($post->ID) . '">Read More</a>';
	}

add_filter('excerpt_more', 'custom_view_article'); // Add 'View Article' button instead of [...] for Excerpts

// Allow Shortcodes in widgets
add_filter('widget_text', 'do_shortcode');
add_filter('widget_title', 'do_shortcode');

?>