<?php

/**
 * xarmed functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package xarmed
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('xarmed_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function xarmed_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on xarmed, use a find and replace
		 * to change 'xarmed' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('xarmed', get_template_directory() . '/languages');

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'xarmed'),
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
				'xarmed_custom_background_args',
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

		/**
		 * Add support for woocommerce.
		 *
		 */

		// add_theme_support('woocommerce');
		// add_theme_support('wc-product-gallery-zoom');
		// add_theme_support('wc-product-gallery-lightbox');
		// add_theme_support('wc-product-gallery-slider');
	}
endif;
add_action('after_setup_theme', 'xarmed_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function xarmed_content_width()
{
	$GLOBALS['content_width'] = apply_filters('xarmed_content_width', 640);
}
add_action('after_setup_theme', 'xarmed_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function xarmed_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'xarmed'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'xarmed'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'xarmed_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function xarmed_scripts()
{
	wp_enqueue_style('xarmed-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('xarmed-style', 'rtl', 'replace');
	wp_enqueue_style('xarmed-bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css', array());
	wp_enqueue_style('xarmed-main-style', get_template_directory_uri() . '/dist/main.css', array('xarmed-bootstrap'));
	wp_enqueue_style('slick-slider-style', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(''));


	wp_enqueue_script('xarmed-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
	wp_enqueue_script('xarmed-jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', array());
	wp_enqueue_script('slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('xarmed-jquery'));
	wp_enqueue_script('xarmed-custom-script', get_template_directory_uri() . '/js/custom.js', array('xarmed-jquery', 'slick-carousel'));


	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'xarmed_scripts');

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

function xarmed_get_the_product_thumbnail_url( $size = 'shop_catalog' ) {
	global $post;
	$image_size = apply_filters( 'single_product_archive_thumbnail_size', $size );
	return get_the_post_thumbnail_url( $post->ID, $image_size );
}

//Disable default Woocommerce styling
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

add_action('init', 'user_init');

function user_init()
{
   if (is_user_logged_in()) {
	   $cart_field = get_user_meta(get_current_user_id(), 'cart' );
	if (!$cart_field) {
		add_user_meta(
			get_current_user_id(),
			'cart',
			null,
			false
		);	  
	}
	// var_dump($cart_field);
	
	  }
	//   delete_user_meta(
	// 	get_current_user_id(),
	// 	'cart');
}
add_action('init', 'start_session');

function start_session()
{
   if (!session_id()) {
      session_start();
	  
	  }

}



add_action('wp_ajax_add_to_cart', 'add_to_cart'); // wp_ajax_{ACTION HERE}
add_action('wp_ajax_nopriv_add_to_cart', 'add_to_cart');

function add_to_cart()
{
	if(!is_array($_SESSION['cart'])){
		$_SESSION['cart'] = array();
   }
	if(!is_user_logged_in()) {
		$_SESSION['cart'][] = $_POST['product_id'];
	} else {
		$existing_cart = get_user_meta(get_current_user_id(), 'cart' );
		$new_cart = array();
		foreach($existing_cart as $p) {
			$new_cart[] = $p;
			// var_dump( $p);
		}

		$new_cart[] = $_POST['product_id'];
		// var_dump( $new_cart);
		add_user_meta(
			get_current_user_id(),
			'cart',
			$_POST['product_id'],
			false
		);	  
		// $existing_cart[] = $_POST['product_id'];
		// update_user_meta(get_current_user_id(), 'cart', $_POST['product_id']);
	}
	echo json_encode($existing_cart);
    die();

}