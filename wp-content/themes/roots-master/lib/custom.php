<?php
/**
 * Custom functions
 */
// Pull Masonry from the core of WordPress
wp_enqueue_script( 'masonry' );

//Pull Masonry from a cdn
wp_enqueue_script( 'masonry', '//cdnjs.cloudflare.com/ajax/libs/masonry/3.1.2/masonry.pkgd.js' );

function my_acf_google_map_api( $api ){
	
	$api['key'] = 'AIzaSyC8YiwHLJ6OnqekvDBBPkejQ1hdfWUASp0';
	
	return $api;
	
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
