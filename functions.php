<?php

/**
 * The Brave Fight functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package The_Brave_Fight
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Gutenberg Editor Styles
 */
add_theme_support('editor-styles');
function the_brave_fight_block_styles_setup()
{
	add_editor_style('dist/main.min.css');
}
add_action('after_setup_theme', 'the_brave_fight_block_styles_setup');
function the_brave_fight()
{
	wp_enqueue_style(
		'admin-styles',
		get_stylesheet_directory_uri() . '/style-editor.css'
	);
}
add_action('admin_enqueue_scripts', 'the_brave_fight');


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function the_brave_fight_setup()
{
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

	/** Register nav menus */
	require get_template_directory() . '/inc/register-nav-menus.php';

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

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'the_brave_fight_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
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
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'the_brave_fight_setup');



/**
 * Enqueue scripts and styles.
 */
function the_brave_fight_scripts()
{
	wp_enqueue_style('the-brave-fight-style', get_stylesheet_directory_uri() .  '/dist/main.min.css', array(), filemtime(get_stylesheet_directory() .  '/dist/main.min.css'));

	wp_enqueue_script('the-brave-fight-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	/**
	 * Add 3rd party CDN scripts
	 */
	wp_register_script('splide-script', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js', null, null, true);
	wp_register_style('splide-styles', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide-core.min.css');
}
add_action('wp_enqueue_scripts', 'the_brave_fight_scripts');

/** 
 * Add ACF Options page 
 */
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title'    => 'Site Settings',
		'menu_title'    => 'Site Settings',
		'menu_slug'     => 'the-brave-fight-site-settings',
		'capability'    => 'edit_posts',
		'redirect'      => false
	));
}


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load ACF Blocks
 */
add_action('init', 'register_acf_blocks', 5);
function register_acf_blocks()
{
	register_block_type(__DIR__ . '/template-parts/blocks/hero');
	register_block_type(__DIR__ . '/template-parts/blocks/columns');
	register_block_type(__DIR__ . '/template-parts/blocks/testimonials');
	register_block_type(__DIR__ . '/template-parts/blocks/cta');
}

/**
 * Limit the blocks that are allowed on a page:
 */
add_filter('allowed_block_types', 'theme_allowed_block_types', 10, 2);

function theme_allowed_block_types($allowed_blocks, $post)
{

	if ($post->post_type === 'page') {
		$allowed_blocks = array(
			'acf/hero',
			'acf/columns',
			'acf/testimonials',
			'acf/cta',
			// 'core/columns',
			'core/paragraph',
		);

		return $allowed_blocks;
	}
}
