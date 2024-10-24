<?php
function duration_scripts()
{
	wp_enqueue_style('swiper-styles', get_template_directory_uri() . '/src/css/swiper-bundle.min.css', array(), _S_VERSION);
	wp_enqueue_script('swiper-scripts', get_template_directory_uri() . '/src/js/libraries/swiper-bundle.min.js', array('jquery'), true);

	wp_enqueue_style('duration-reset', get_template_directory_uri() . '/src/css/reset.css', array(), _S_VERSION);
	wp_enqueue_style('duration-style', get_stylesheet_uri(), array(), _S_VERSION);

	wp_enqueue_script('duration-scripts', get_template_directory_uri() . '/assets/scripts.js', array('jquery'), _S_VERSION);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}

add_action('wp_enqueue_scripts', 'duration_scripts');