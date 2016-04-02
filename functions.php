<?php
/**
 * UBS One functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package UBS_One
 */

$ubs_one_shortcode_prefix = "uo_";

function ubs_one_startswith($haystack, $needle, $case=true)
{
  if($case)
    return strpos($haystack, $needle, 0) === 0;

  return stripos($haystack, $needle, 0) === 0;
}

function ubs_one_endswith($haystack, $needle, $case=true)
{
  $expectedPosition = strlen($haystack) - strlen($needle);

  if($case)
    return strrpos($haystack, $needle, 0) === $expectedPosition;

  return strripos($haystack, $needle, 0) === $expectedPosition;
}

/** Theme settings
 */
define('UBS_ONE_HEADER_TYPE', 'header_type');
define('UBS_ONE_HEADER_BORDER', 'header_border');
define('UBS_ONE_HEADER_BORDER_COLOR', 'header_border_color');
define('UBS_ONE_HEADER_HEIGHT', 'header_height');
define('UBS_ONE_HEADER_BG', 'header_bg');
define('UBS_ONE_HEADER_FG', 'header_fg');
define('UBS_ONE_HEADER_HOVER_FG', 'header_hover_fg');
define('UBS_ONE_HEADER_HOVER_BG', 'header_hover_bg');
define('UBS_ONE_HEADER_ACTIVE_FG', 'header_active_fg');
define('UBS_ONE_HEADER_ACTIVE_BG', 'header_active_bg');
define('UBS_ONE_HEADER_LOGO_TEXT_SIZE', 'header_logo_text_size');
define('UBS_ONE_HEADER_LOGO_TEXT_FAMILY', 'header_logo_text_family');
define('UBS_ONE_HEADER_LOGO_TEXT_WEIGHT', 'header_logo_text_weight');
define('UBS_ONE_HEADER_LOGO_TEXT_STYLE', 'header_logo_text_style');
define('UBS_ONE_HEADER_LOGO', 'logo');

define('UBS_ONE_FOOTER_FG', 'footer_fg');
define('UBS_ONE_FOOTER_BG', 'footer_bg');
define('UBS_ONE_FOOTER_LINK', 'footer_link');
define('UBS_ONE_FOOTER_HOVER', 'footer_hover');
define('UBS_ONE_FOOTER_TEXT', 'footer_text');

define('UBS_ONE_POST_FG', 'post_fg');
define('UBS_ONE_POST_BG', 'post_bg');
define('UBS_ONE_POST_LINK', 'post_link');
define('UBS_ONE_POST_HOVER', 'post_hover');
define('UBS_ONE_POST_BORDER', 'post_border');
define('UBS_ONE_POST_BORDER_COLOR', 'post_border_color');

define('UBS_ONE_PAGE_FG', 'page_fg');
define('UBS_ONE_PAGE_BG', 'page_bg');
define('UBS_ONE_PAGE_LINK', 'page_link');
define('UBS_ONE_PAGE_HOVER', 'page_hover');
define('UBS_ONE_PAGE_TITLE_IMAGE', 'page_title_image');
define('UBS_ONE_PAGE_TITLE_IMAGE_FIXED', 'page_title_image_fixed');
define('UBS_ONE_PAGE_TITLE_HEIGHT', 'page_title_height');
define('UBS_ONE_PAGE_TITLE_TEXT_SIZE', 'page_title_font_size');
define('UBS_ONE_PAGE_TITLE_TEXT_FAMILY', 'page_title_text_family');
define('UBS_ONE_PAGE_TITLE_TEXT_WEIGHT', 'page_title_text_weight');
define('UBS_ONE_PAGE_TITLE_TEXT_STYLE', 'page_title_text_style');
define('UBS_ONE_PAGE_TITLE_FG', 'page_title_fg');
define('UBS_ONE_PAGE_TITLE_BG', 'page_title_bg');
define('UBS_ONE_PAGE_TITLE_BG_TRAN', 'page_title_bg_trans');

define('UBS_ONE_SIDEBAR_BG', 'sidebar_bg');
define('UBS_ONE_SIDEBAR_LINK', 'sidebar_link');
define('UBS_ONE_SIDEBAR_HOVER', 'sidebar_hover');
define('UBS_ONE_SIDEBAR_WIDGET_FG', 'sidebar_widget_fg');
define('UBS_ONE_SIDEBAR_WIDGET_BG', 'sidebar_widget_bg');
define('UBS_ONE_SIDEBAR_WIDGET_BORDER', 'sidebar_widget_border');
define('UBS_ONE_SIDEBAR_WIDGET_BORDER_COLOR', 'sidebar_widget_border_color');

define('UBS_ONE_HEADER_TYPE_STANDARD', 'standard');
define('UBS_ONE_HEADER_TYPE_STATIC', 'static');
define('UBS_ONE_HEADER_TYPE_FIXED', 'fixed');

define('UBS_ONE_FG_COLOR', 'fg_color');
define('UBS_ONE_BG_COLOR', 'bg_color');
define('UBS_ONE_BG_IMAGE', 'bg_image');
define('UBS_ONE_BG_FIXED', 'bg_fixed');
define('UBS_ONE_TEXT_FAMILY', 'font_family');
define('UBS_ONE_TEXT_SIZE', 'font_size');
define('UBS_ONE_FAVICON', 'favicon');
define('UBS_ONE_CUSTOM_CSS', 'custom_css');

define('UBS_ONE_LAYOUT_TYPE', 'layout_type');

define('UBS_ONE_LAYOUT_TYPE_2COLLEFT', '2colleft');
define('UBS_ONE_LAYOUT_TYPE_2COLRIGHT', '2colright');
define('UBS_ONE_LAYOUT_TYPE_3COL', '3col');

/** Theme defaults
 */
$ubs_one_defaults = array(
	UBS_ONE_HEADER_TYPE => UBS_ONE_HEADER_TYPE_STANDARD,
	UBS_ONE_HEADER_BORDER => true,
	UBS_ONE_HEADER_BORDER_COLOR => "#cdbfe3",
	UBS_ONE_HEADER_HEIGHT => '50',
	UBS_ONE_HEADER_BG => '#6f5499',
	UBS_ONE_HEADER_FG => '#cdbfe3',
	UBS_ONE_HEADER_HOVER_FG => '#6f5499',
	UBS_ONE_HEADER_HOVER_BG => '#cdbfe3',
	UBS_ONE_HEADER_ACTIVE_FG => '#cdbfe3',
	UBS_ONE_HEADER_ACTIVE_BG => '#533c70',
	UBS_ONE_HEADER_LOGO_TEXT_SIZE => 28,
	UBS_ONE_HEADER_LOGO_TEXT_FAMILY => 'sans-serif',
	UBS_ONE_HEADER_LOGO_TEXT_WEIGHT => 'bold',
	UBS_ONE_HEADER_LOGO_TEXT_STYLE => 'normal',
	UBS_ONE_HEADER_LOGO => '',
	
	UBS_ONE_FOOTER_FG => '#cdbfe3',
	UBS_ONE_FOOTER_BG => '#6f5499',
	UBS_ONE_FOOTER_LINK => '#cdbfe3',
	UBS_ONE_FOOTER_HOVER => '#ffffff',
  UBS_ONE_FOOTER_TEXT => 'UBS One Wordpress Theme by <a href="http://dbthemes.com">DB Themes</a>.',
	
  UBS_ONE_POST_FG => '#000000',
  UBS_ONE_POST_BG => '#ffffff',
  UBS_ONE_POST_LINK => '#cdbfe3',
  UBS_ONE_POST_HOVER => '#6f5499',
  UBS_ONE_POST_BORDER => true,
  UBS_ONE_POST_BORDER_COLOR => '#d0d0d0',
	
  UBS_ONE_PAGE_FG => '#000000',
  UBS_ONE_PAGE_BG => '#ffffff',
  UBS_ONE_PAGE_LINK => '#cdbfe3',
  UBS_ONE_PAGE_HOVER => '#6f5499',
  UBS_ONE_PAGE_BORDER => true,
  UBS_ONE_PAGE_BORDER_COLOR => '#d0d0d0',
  UBS_ONE_PAGE_TITLE_IMAGE => '',
  UBS_ONE_PAGE_TITLE_IMAGE_FIXED => true,
  UBS_ONE_PAGE_TITLE_HEIGHT => '0',
  UBS_ONE_PAGE_TITLE_TEXT_SIZE => 50,
	UBS_ONE_PAGE_TITLE_TEXT_FAMILY => 'sans-serif',
	UBS_ONE_PAGE_TITLE_TEXT_WEIGHT => 'bold',
	UBS_ONE_PAGE_TITLE_TEXT_STYLE => 'normal',
  UBS_ONE_PAGE_TITLE_FG => '#ffffff',
  UBS_ONE_PAGE_TITLE_BG => '#000000',
  UBS_ONE_PAGE_TITLE_BG_TRANS => false,
	
  UBS_ONE_SIDEBAR_BG => '#ffffff',
  UBS_ONE_SIDEBAR_LINK => '#cdbfe3',
  UBS_ONE_SIDEBAR_HOVER => '#6f5499',
  UBS_ONE_SIDEBAR_WIDGET_FG => '#000000',
  UBS_ONE_SIDEBAR_WIDGET_BG => '#ffffff',
  UBS_ONE_SIDEBAR_WIDGET_BORDER => true,
  UBS_ONE_SIDEBAR_WIDGET_BORDER_COLOR => '#d0d0d0',
	
  UBS_ONE_FG_COLOR => '#000000',
  UBS_ONE_BG_COLOR => '#ffffff', 
  UBS_ONE_BG_IMAGE => '',
	UBS_ONE_BG_FIXED => true,
	UBS_ONE_TEXT_FAMILY => 'sans-serif',
  UBS_ONE_TEXT_SIZE => '14',
	UBS_ONE_FAVICON => '',
	UBS_ONE_LAYOUT_TYPE => UBS_ONE_LAYOUT_TYPE_2COLRIGHT,
	UBS_ONE_CUSTOM_CSS => '',
);

/** Theme setting choices
 */
$ubs_one_choices = array(
	UBS_ONE_HEADER_TYPE => array(UBS_ONE_HEADER_TYPE_STANDARD => 'Standard', UBS_ONE_HEADER_TYPE_STATIC => 'Static', UBS_ONE_HEADER_TYPE_FIXED => 'Fixed'),
	UBS_ONE_HEADER_LOGO_TEXT_WEIGHT => array('normal' => 'Normal', 'bold' => 'Bold', 'bolder' => 'Bolder', 'lighter' => 'Lighter'),
	UBS_ONE_HEADER_LOGO_TEXT_STYLE => array('normal' => 'Normal', 'italic' => 'Italic', 'oblique' => 'Oblique'),
	UBS_ONE_LAYOUT_TYPE => array(UBS_ONE_LAYOUT_TYPE_2COLLEFT => '2 Column, Left Sidebar', UBS_ONE_LAYOUT_TYPE_2COLRIGHT => '2 Column, Right Sidebar', UBS_ONE_LAYOUT_TYPE_3COL => '3 Column'),
	UBS_ONE_PAGE_TITLE_TEXT_WEIGHT => array('normal' => 'Normal', 'bold' => 'Bold', 'bolder' => 'Bolder', 'lighter' => 'Lighter'),
	UBS_ONE_PAGE_TITLE_TEXT_STYLE => array('normal' => 'Normal', 'italic' => 'Italic', 'oblique' => 'Oblique'),
);

function ubs_one_def($key)
{
	global $ubs_one_defaults;
	
	return $ubs_one_defaults[$key];
}

function ubs_one_choices($key)
{
	global $ubs_one_choices;
	
	return $ubs_one_choices[$key];
}

function ubs_one_get_theme_mod($key)
{
	global $ubs_one_defaults;
	
	error_log("get_theme_mod($key, {$ubs_one_defaults[$key]})");
	return get_theme_mod($key, $ubs_one_defaults[$key]);
}

if ( ! function_exists( 'ubs_one_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ubs_one_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on UBS One, use a find and replace
	 * to change 'ubs-one' to the name of your theme in all the template files.
	 */
	load_theme_textdomain('ubs-one', get_template_directory() . '/languages');

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

	
	register_nav_menus(array(
		'primary' => __('Primary Menu', 'ubs-one')
	));

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support('html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	));

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support('post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	));

	// Set up the WordPress core custom background feature.
//	add_theme_support( 'custom-background', apply_filters( 'ubs_one_custom_background_args', array(
//		'default-color' => 'ffffff',
//		'default-image' => '',
//	) ) );
	
//	add_image_size('ubs-one-logo-size', 200, 50);
//  add_theme_support('custom-logo', array('size' => 'ubs-one-logo-size'));
}
endif;
add_action( 'after_setup_theme', 'ubs_one_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ubs_one_content_width() {
	$GLOBALS['content_width'] = apply_filters('ubs_one_content_width', 1170);
}
add_action( 'after_setup_theme', 'ubs_one_content_width', 0 );

/**
 * Register theme options menu and page
 */
function ubs_one_settings_page()
{
	?>
	    <div class="wrap">
	    <h1>Theme Options</h1>
	    <form method="post" action="options.php">
	        <?php
	            settings_fields("section");
	            do_settings_sections("ubs-one-options");      
	            submit_button(); 
	        ?>          
	    </form>
		</div>
	<?php
}

function ubs_one_menu_item()
{
  add_theme_page("Theme Options", "Theme Options", "manage_options", "ubs-one-options", "ubs_one_settings_page");
}
add_action("admin_menu", "ubs_one_menu_item");

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ubs_one_widgets_init() {
	register_sidebar(array(
		'name'          => esc_html__( 'Left Sidebar', 'ubs-one' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));
	register_sidebar(array(
		'name'          => esc_html__( 'Right Sidebar', 'ubs-one' ),
		'id'            => 'sidebar-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));
	register_sidebar(array(
		'name'          => esc_html__( 'Footer 1', 'ubs-one' ),
		'id'            => 'sidebar-3',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));
	register_sidebar(array(
		'name'          => esc_html__( 'Footer 2', 'ubs-one' ),
		'id'            => 'sidebar-4',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));
	register_sidebar(array(
		'name'          => esc_html__( 'Footer 3', 'ubs-one' ),
		'id'            => 'sidebar-5',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));
	register_sidebar(array(
		'name'          => esc_html__( 'Footer 4', 'ubs-one' ),
		'id'            => 'sidebar-6',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));
}
add_action( 'widgets_init', 'ubs_one_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ubs_one_scripts() 
{
	$theme = wp_get_theme();
	wp_enqueue_style('ubs-one-style', get_stylesheet_uri());
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), '3.3.6');
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css', array(), '4.5.0');
	wp_enqueue_style('ie10-viewport-bug-workaround', get_template_directory_uri() . '/css/ie10-viewport-bug-workaround.css', array(), $theme->version);
//	wp_enqueue_style('bootstrap-theme', get_template_directory_uri() . '/bootstrap/css/bootstrap-theme.min.css', array(), '3.3.6');
	
	wp_enqueue_script('jquery', false, array(), false, true);

	wp_enqueue_script('ubs-one-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

	wp_enqueue_script('ubs-one-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

	if(is_singular() && comments_open() && get_option( 'thread_comments' )) 
	{
		wp_enqueue_script('comment-reply');
	}
	
	wp_enqueue_script('bootstrap-min-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array(), '3.3.6', true);
	
	// last
//	wp_enqueue_style('ubs-one-dynamic', get_template_directory_uri() . '/dynamic-css.php', array(), $theme->version);
}
add_action( 'wp_enqueue_scripts', 'ubs_one_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Primary Header and Footer
 */
function ubs_one_primary_header()
{
  $layout_type = ubs_one_get_theme_mod(UBS_ONE_LAYOUT_TYPE);
	error_log("layout_type = $layout_type");
	
	?>
  <div class="container">
		<div class="row" id="primary">
	<?php

	switch($layout_type)
	{
		case UBS_ONE_LAYOUT_TYPE_2COLLEFT :
		?>
    	<main id="content" class="col-sm-9 col-sm-push-3" role="main">
		<?php
		break;
			
		case UBS_ONE_LAYOUT_TYPE_2COLRIGHT :
		?>
    	<main id="content" class="col-sm-9" role="main">
		<?php
		break;
			
		case UBS_ONE_LAYOUT_TYPE_3COL :
		?>
    	<main id="content" class="col-sm-6 col-sm-push-3" role="main">
		<?php
		break;
	}
}

function ubs_one_primary_footer()
{
  $layout_type = ubs_one_get_theme_mod(UBS_ONE_LAYOUT_TYPE);

	?>
	</main>
	<?php
	switch($layout_type)
	{
		case UBS_ONE_LAYOUT_TYPE_2COLLEFT :
		?>
			<div class="col-sm-3 col-sm-pull-9 ">
				<aside id="secondary" class="widget-area" role="complementary">
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
				</aside><!-- #secondary -->
			</div><!-- sidebar -->
		<?php
		break;
			
		case UBS_ONE_LAYOUT_TYPE_2COLRIGHT :
		?>
			<div class="col-sm-3">
				<aside id="secondary" class="widget-area" role="complementary">
					<?php dynamic_sidebar( 'sidebar-2' ); ?>
				</aside><!-- #secondary -->
			</div><!-- sidebar -->
		<?php
		break;
			
		case UBS_ONE_LAYOUT_TYPE_3COL :
		?>
			<div class="col-sm-3 col-sm-pull-6">
				<aside id="secondary" class="widget-area" role="complementary">
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
				</aside><!-- #secondary -->
			</div><!-- sidebar -->
			<div class="col-sm-3">
				<aside id="secondary" class="widget-area" role="complementary">
					<?php dynamic_sidebar( 'sidebar-2' ); ?>
				</aside><!-- #secondary -->
			</div><!-- sidebar -->
		<?php
		break;
	}
	
	?>
		</div><!-- row #primary -->
	</div><!-- container -->
	<?php
}
	
/** 
 * Short codes
 */
function ubs_one_glyphicon_shortcode_handler($atts, $content = null) 
{
  $a = shortcode_atts(array(
      'icon' => 'asterisk',
      'class' => '',
  ), $atts);
	
	return "<span class=\"glyphicon glyphicon-{$a['icon']} {$a['class']}\" aria-hidden=\"true\"></span>";
}
add_shortcode($ubs_one_shortcode_prefix . 'glyphicon', 'ubs_one_glyphicon_shortcode_handler');

function ubs_one_fa_shortcode_handler($atts, $content = null) 
{
  $a = shortcode_atts(array(
      'icon' => 'asterisk',
      'class' => '',
  ), $atts);
	
	return "<i class=\"fa fa-{$a['icon']} {$a['class']}\"></i>";
}
add_shortcode($ubs_one_shortcode_prefix . 'fa', 'ubs_one_fa_shortcode_handler');
