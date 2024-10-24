<?php

/**
 * pointer_theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package pointer_theme
 */

if (!defined('_S_VERSION')) {
	define('_S_VERSION', '1.0.0');
}


function pointer_theme_setup()
{
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on pointer_theme, use a find and replace
	 * to change 'pointer_theme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain('pointer_theme', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support('post-thumbnails');



	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height' => 250,
			'width' => 250,
			'flex-width' => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'pointer_theme_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pointer_theme_content_width()
{
	$GLOBALS['content_width'] = apply_filters('pointer_theme_content_width', 640);
}
add_action('after_setup_theme', 'pointer_theme_content_width', 0);


/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enque-scripts-and-styles.php';

/**
 * Remove inline WP styles
 */
require get_template_directory() . '/inc/remove-wp-styles.php';

/**
 * Remove empty <p> in editor
 */
require get_template_directory() . '/inc/remove-p.php';

/**
 * Remove uncategorized from sitemap.xml
 */
require get_template_directory() . '/inc/remove-uncategorized-from-sitemap.php';

/**
 * Enable upload .webp, .svg.
 */
require get_template_directory() . '/inc/mime-load.php';

/**
 * Add custom logo in wp-admin
 */
require get_template_directory() . '/inc/wp-admin-logo.php';

/**
 * Transliteration
 */
require get_template_directory() . '/inc/transliteration.php';

/**
 * ACF options
 */
require get_template_directory() . '/inc/acf-options.php';

/**
 * Register Menus
 */
require get_template_directory() . '/inc/menu-registration.php';

/**
 * Register Custom Post Type and Taxonomy
 */
require get_template_directory() . '/inc/custom-post-type.php';

/**
 * Register string traslation Polylang (uncomment if you use Polylang)
 */
// require get_template_directory() . '/inc/translates-registration.php';

/**
 * Breadcrumbs
 */
// require get_template_directory() . '/inc/custom-breadcrumbs.php';

/**
 * Language switcher
 */
// require get_template_directory() . '/inc/lang-switcher.php';

/** 
 * Hide comments
 */
require get_template_directory() . '/inc/hide-comments.php';

