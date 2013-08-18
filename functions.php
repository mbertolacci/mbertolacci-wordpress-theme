<?php

function mb_css_dir() {
	if (defined('SCRIPT_DEBUG') && SCRIPT_DEBUG) {
		return get_template_directory_uri() . '/css';
	} else {
		return get_template_directory_uri() . '/dist-css';
	}
}

function mb_js_dir() {
	if (defined('SCRIPT_DEBUG') && SCRIPT_DEBUG) {
		return get_template_directory_uri() . '/js';
	} else {
		return get_template_directory_uri() . '/dist-js';
	}	
}

add_action('wp_enqueue_scripts', 'mb_theme_enqueue_scripts');
if (!function_exists('mb_theme_enqueue_scripts')) {
  function mb_theme_enqueue_scripts(){
  	wp_enqueue_script('modernizr', '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js', null, false, false);

  	if (defined('WP_DEBUG') && WP_DEBUG) {
  		wp_register_script('livereload', 'http://localhost:35729/livereload.js?snipver=1', null, false, true);
  		wp_enqueue_script('livereload');
  	}

  	wp_enqueue_style('main', mb_css_dir() . '/main.css');
  }
}
