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
	register_nav_menus(
		array(
			'header-nav-top-menu' => 'Header Nav Top Menu',
			'header-nav-cta-menu' => 'Header Nav CTA Menu',
			'header-nav-main-menu' => 'Header Nav Main Menu',
			'header-nav-mobile-menu' => 'Header Nav Mobile Menu',
			'footer-nav-menu' => 'Footer Nav Menu',
		)
	);

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
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function the_brave_fight_content_width()
{
	$GLOBALS['content_width'] = apply_filters('the_brave_fight_content_width', 640);
}
add_action('after_setup_theme', 'the_brave_fight_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function the_brave_fight_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'the-brave-fight'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'the-brave-fight'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'the_brave_fight_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function the_brave_fight_scripts()
{
	wp_enqueue_style('the-brave-fight-style', get_stylesheet_directory_uri() .  '/dist/main.min.css', array(), filemtime(get_stylesheet_directory() .  '/dist/main.min.css'));

	wp_enqueue_script('the-brave-fight-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'the_brave_fight_scripts');

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
}
