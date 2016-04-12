<?php
/**
 * UBS One functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package UBS_One
 */

$ubs_one_shortcode_prefix = "uo";
$ubs_one_show_header_footer = true;    

function ubs_one_set_show_header_footer($show)
{
  global $ubs_one_show_header_footer;
  
  $ubs_one_show_header_footer = $show;
}

function ubs_one_get_show_header_footer()
{
  global $ubs_one_show_header_footer;
  
  return $ubs_one_show_header_footer;
}

function ubs_one_startswith($haystack, $needle, $case = true)
{
  if($case)
    return strpos($haystack, $needle, 0) === 0;

  return stripos($haystack, $needle, 0) === 0;
}

function ubs_one_endswith($haystack, $needle, $case = true)
{
  $expectedPosition = strlen($haystack) - strlen($needle);

  if($case)
    return strrpos($haystack, $needle, 0) === $expectedPosition;

  return strripos($haystack, $needle, 0) === $expectedPosition;
}

/** Meta data
 */

define('UBS_ONE_META_RAW_CONTENT', '_ubs_one_raw_content');

/** Theme settings
 */
define('UBS_ONE_HEADER_FIXED', 'header_fixed');
define('UBS_ONE_HEADER_BORDER', 'header_border');
define('UBS_ONE_HEADER_BORDER_COLOR', 'header_border_color');
define('UBS_ONE_HEADER_HEIGHT', 'header_height');
define('UBS_ONE_HEADER_MENU_HEIGHT', 'header_menu_height');
define('UBS_ONE_HEADER_BG', 'header_bg');
define('UBS_ONE_HEADER_FG', 'header_fg');
define('UBS_ONE_HEADER_BG_IMAGE', 'header_bg_image');
define('UBS_ONE_HEADER_BG_IMAGE_FIXED', 'header_bg_image_fixed');
define('UBS_ONE_HEADER_BG_IMAGE_OFFSET', 'header_bg_image_offset');
define('UBS_ONE_HEADER_BG_REPEAT', 'header_bg_image_repeat');
define('UBS_ONE_HEADER_BG_SIZE', 'header_bg_image_size');
define('UBS_ONE_HEADER_HOVER_FG', 'header_hover_fg');
define('UBS_ONE_HEADER_HOVER_BG', 'header_hover_bg');
define('UBS_ONE_HEADER_ACTIVE_FG', 'header_active_fg');
define('UBS_ONE_HEADER_ACTIVE_BG', 'header_active_bg');
define('UBS_ONE_HEADER_LOGO_TEXT_SIZE', 'header_logo_text_size');
define('UBS_ONE_HEADER_LOGO_TEXT_SIZE_MOBILE', 'header_logo_text_size_mobile');
define('UBS_ONE_HEADER_LOGO_TEXT_FAMILY', 'header_logo_text_family');
define('UBS_ONE_HEADER_LOGO_TEXT_WEIGHT', 'header_logo_text_weight');
define('UBS_ONE_HEADER_LOGO_TEXT_STYLE', 'header_logo_text_style');
define('UBS_ONE_HEADER_LOGO', 'logo');

define('UBS_ONE_FOOTER_FG', 'footer_fg');
define('UBS_ONE_FOOTER_BG', 'footer_bg');
define('UBS_ONE_FOOTER_LINK', 'footer_link');
define('UBS_ONE_FOOTER_HOVER', 'footer_hover');
define('UBS_ONE_FOOTER_TEXT', 'footer_text');

define('UBS_ONE_BLOG_TITLE', 'blog_title');
define('UBS_ONE_BLOG_TITLE_IMAGE', 'blog_title_image');
define('UBS_ONE_BLOG_TITLE_IMAGE_FIXED', 'blog_title_image_fixed');
define('UBS_ONE_BLOG_TITLE_IMAGE_OFFSET', 'blog_title_image_offset');
define('UBS_ONE_BLOG_TITLE_IMAGE_REPEAT', 'blog_title_image_repeat');
define('UBS_ONE_BLOG_TITLE_IMAGE_SIZE', 'blog_title_image_size');
define('UBS_ONE_BLOG_TITLE_HEIGHT', 'blog_title_height');
define('UBS_ONE_BLOG_TITLE_TEXT_SIZE', 'blog_title_font_size');
define('UBS_ONE_BLOG_TITLE_TEXT_SIZE_MOBILE', 'blog_title_font_size_mobile');
define('UBS_ONE_BLOG_TITLE_TEXT_FAMILY', 'blog_title_text_family');
define('UBS_ONE_BLOG_TITLE_TEXT_WEIGHT', 'blog_title_text_weight');
define('UBS_ONE_BLOG_TITLE_TEXT_STYLE', 'blog_title_text_style');
define('UBS_ONE_BLOG_TITLE_TEXT_HPOS', 'blog_title_text_hpos');
define('UBS_ONE_BLOG_TITLE_TEXT_VPOS', 'blog_title_text_vpos');
define('UBS_ONE_BLOG_TITLE_FG', 'blog_title_fg');
define('UBS_ONE_BLOG_TITLE_BG', 'blog_title_bg');
define('UBS_ONE_BLOG_TITLE_BG_TRAN', 'blog_title_bg_trans');

define('UBS_ONE_ARCHIVE_TITLE_IMAGE', 'archive_title_image');
define('UBS_ONE_ARCHIVE_TITLE_IMAGE_FIXED', 'archive_title_image_fixed');
define('UBS_ONE_ARCHIVE_TITLE_IMAGE_OFFSET', 'archive_title_image_offset');
define('UBS_ONE_ARCHIVE_TITLE_IMAGE_REPEAT', 'archive_title_image_repeat');
define('UBS_ONE_ARCHIVE_TITLE_IMAGE_SIZE', 'archive_title_image_size');
define('UBS_ONE_ARCHIVE_TITLE_HEIGHT', 'archive_title_height');
define('UBS_ONE_ARCHIVE_TITLE_TEXT_SIZE', 'archive_title_font_size');
define('UBS_ONE_ARCHIVE_TITLE_TEXT_SIZE_MOBILE', 'archive_title_font_size_mobile');
define('UBS_ONE_ARCHIVE_TITLE_TEXT_FAMILY', 'archive_title_text_family');
define('UBS_ONE_ARCHIVE_TITLE_TEXT_WEIGHT', 'archive_title_text_weight');
define('UBS_ONE_ARCHIVE_TITLE_TEXT_STYLE', 'archive_title_text_style');
define('UBS_ONE_ARCHIVE_TITLE_TEXT_HPOS', 'archive_title_text_hpos');
define('UBS_ONE_ARCHIVE_TITLE_TEXT_VPOS', 'archive_title_text_vpos');
define('UBS_ONE_ARCHIVE_TITLE_FG', 'archive_title_fg');
define('UBS_ONE_ARCHIVE_TITLE_BG', 'archive_title_bg');
define('UBS_ONE_ARCHIVE_TITLE_BG_TRAN', 'archive_title_bg_trans');
define('UBS_ONE_ARCHIVE_TITLE_BG_SIZE', 'archive_title_bg_size');

define('UBS_ONE_POST_FG', 'post_fg');
define('UBS_ONE_POST_BG', 'post_bg');
define('UBS_ONE_POST_LINK', 'post_link');
define('UBS_ONE_POST_HOVER', 'post_hover');
define('UBS_ONE_POST_BORDER', 'post_border');
define('UBS_ONE_POST_BORDER_COLOR', 'post_border_color');
define('UBS_ONE_POST_TITLE_IMAGE', 'post_title_image');
define('UBS_ONE_POST_TITLE_IMAGE_FIXED', 'post_title_image_fixed');
define('UBS_ONE_POST_TITLE_IMAGE_OFFSET', 'post_title_image_offset');
define('UBS_ONE_POST_TITLE_IMAGE_REPEAT', 'post_title_image_repeat');
define('UBS_ONE_POST_TITLE_IMAGE_SIZE', 'post_title_image_size');
define('UBS_ONE_POST_TITLE_HEIGHT', 'post_title_height');
define('UBS_ONE_POST_TITLE_TEXT_SIZE', 'post_title_font_size');
define('UBS_ONE_POST_TITLE_TEXT_SIZE_MOBILE', 'post_title_font_size_mobile');
define('UBS_ONE_POST_TITLE_TEXT_FAMILY', 'post_title_text_family');
define('UBS_ONE_POST_TITLE_TEXT_WEIGHT', 'post_title_text_weight');
define('UBS_ONE_POST_TITLE_TEXT_STYLE', 'post_title_text_style');
define('UBS_ONE_POST_TITLE_TEXT_HPOS', 'post_title_text_hpos');
define('UBS_ONE_POST_TITLE_TEXT_VPOS', 'post_title_text_vpos');
define('UBS_ONE_POST_TITLE_FG', 'post_title_fg');
define('UBS_ONE_POST_TITLE_BG', 'post_title_bg');
define('UBS_ONE_POST_TITLE_BG_TRAN', 'post_title_bg_trans');
define('UBS_ONE_POST_TITLE_BG_SIZE', 'post_title_bg_size');

define('UBS_ONE_PAGE_FG', 'page_fg');
define('UBS_ONE_PAGE_BG', 'page_bg');
define('UBS_ONE_PAGE_LINK', 'page_link');
define('UBS_ONE_PAGE_HOVER', 'page_hover');
define('UBS_ONE_PAGE_TITLE_IMAGE', 'page_title_image');
define('UBS_ONE_PAGE_TITLE_IMAGE_FIXED', 'page_title_image_fixed');
define('UBS_ONE_PAGE_TITLE_IMAGE_OFFSET', 'page_title_image_offset');
define('UBS_ONE_PAGE_TITLE_IMAGE_REPEAT', 'page_title_image_repeat');
define('UBS_ONE_PAGE_TITLE_IMAGE_SIZE', 'page_title_image_size');
define('UBS_ONE_PAGE_TITLE_HEIGHT', 'page_title_height');
define('UBS_ONE_PAGE_TITLE_TEXT_SIZE', 'page_title_font_size');
define('UBS_ONE_PAGE_TITLE_TEXT_SIZE_MOBILE', 'page_title_font_size_mobile');
define('UBS_ONE_PAGE_TITLE_TEXT_FAMILY', 'page_title_text_family');
define('UBS_ONE_PAGE_TITLE_TEXT_WEIGHT', 'page_title_text_weight');
define('UBS_ONE_PAGE_TITLE_TEXT_STYLE', 'page_title_text_style');
define('UBS_ONE_PAGE_TITLE_TEXT_HPOS', 'page_title_text_hpos');
define('UBS_ONE_PAGE_TITLE_TEXT_VPOS', 'page_title_text_vpos');
define('UBS_ONE_PAGE_TITLE_FG', 'page_title_fg');
define('UBS_ONE_PAGE_TITLE_BG', 'page_title_bg');
define('UBS_ONE_PAGE_TITLE_BG_TRAN', 'page_title_bg_trans');
define('UBS_ONE_PAGE_TITLE_BG_SIZE', 'page_title_bg_size');

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

define('UBS_ONE_LAYOUT_TYPE_1COL', '1col');
define('UBS_ONE_LAYOUT_TYPE_2COLLEFT', '2colleft');
define('UBS_ONE_LAYOUT_TYPE_2COLRIGHT', '2colright');
define('UBS_ONE_LAYOUT_TYPE_3COL', '3col');

define('UBS_ONE_REPEAT', 'repeat');
define('UBS_ONE_REPEAT_NONE', 'no-repeat');
define('UBS_ONE_REPEAT_X', 'repeat-x');
define('UBS_ONE_REPEAT_Y', 'repeat-y');
define('UBS_ONE_REPEAT_BOTH', 'repeat');

define('UBS_ONE_HPOS', 'hpos');
define('UBS_ONE_HPOS_LEFT', 'left');
define('UBS_ONE_HPOS_CENTER', 'center');
define('UBS_ONE_HPOS_RIGHT', 'right');

define('UBS_ONE_VPOS', 'vpos');
define('UBS_ONE_VPOS_TOP', 'top');
define('UBS_ONE_VPOS_MIDDLE', 'middle');
define('UBS_ONE_VPOS_BOTTOM', 'bottom');

define('UBS_ONE_TEXT_WEIGHT', 'text-weight');
define('UBS_ONE_TEXT_STYLE', 'text-style');

define('UBS_ONE_BG_SIZE', 'bg-size');
define('UBS_ONE_BG_SIZE_AUTO', 'auto');
define('UBS_ONE_BG_SIZE_CONTAIN', 'contain');
define('UBS_ONE_BG_SIZE_COVER', 'cover');
define('UBS_ONE_BG_SIZE_100', '100%');

/** Theme defaults
 */
$ubs_one_defaults = array(
	UBS_ONE_HEADER_FIXED => false,
	UBS_ONE_HEADER_BORDER => true,
	UBS_ONE_HEADER_BORDER_COLOR => "#cdbfe3",
	UBS_ONE_HEADER_HEIGHT => '50',
  UBS_ONE_HEADER_MENU_HEIGHT => '50',
  UBS_ONE_HEADER_BG_IMAGE => '',
  UBS_ONE_HEADER_BG_IMAGE_FIXED => true,
  UBS_ONE_HEADER_BG_IMAGE_OFFSET => 0,
  UBS_ONE_HEADER_BG_IMAGE_REPEAT => UBS_ONE_REPEAT_Y,
	UBS_ONE_HEADER_BG => '#6f5499',
	UBS_ONE_HEADER_FG => '#cdbfe3',
	UBS_ONE_HEADER_HOVER_FG => '#6f5499',
	UBS_ONE_HEADER_HOVER_BG => '#cdbfe3',
	UBS_ONE_HEADER_ACTIVE_FG => '#cdbfe3',
	UBS_ONE_HEADER_ACTIVE_BG => '#533c70',
	UBS_ONE_HEADER_LOGO_TEXT_SIZE => 28,
  UBS_ONE_HEADER_LOGO_TEXT_SIZE_MOBILE => 14,
	UBS_ONE_HEADER_LOGO_TEXT_FAMILY => 'sans-serif',
	UBS_ONE_HEADER_LOGO_TEXT_WEIGHT => 'bold',
	UBS_ONE_HEADER_LOGO_TEXT_STYLE => 'normal',
	UBS_ONE_HEADER_LOGO => '',
	
	UBS_ONE_FOOTER_FG => '#cdbfe3',
	UBS_ONE_FOOTER_BG => '#6f5499',
	UBS_ONE_FOOTER_LINK => '#cdbfe3',
	UBS_ONE_FOOTER_HOVER => '#ffffff',
  UBS_ONE_FOOTER_TEXT => 'UBS One Wordpress Theme by <a href="http://dbthemes.com">DB Themes</a>.',
	
  UBS_ONE_BLOG_TITLE => 'Blog',
  UBS_ONE_BLOG_TITLE_IMAGE => '',
  UBS_ONE_BLOG_TITLE_IMAGE_FIXED => true,
  UBS_ONE_BLOG_TITLE_IMAGE_OFFSET => 0,
  UBS_ONE_BLOG_TITLE_IMAGE_REPEAT => UBS_ONE_REPEAT_Y,
  UBS_ONE_BLOG_TITLE_IMAGE_SIZE => UBS_ONE_BG_SIZE_COVER,
  UBS_ONE_BLOG_TITLE_HEIGHT => '0',
  UBS_ONE_BLOG_TITLE_TEXT_SIZE => 50,
  UBS_ONE_BLOG_TITLE_TEXT_SIZE_MOBILE => 25,
	UBS_ONE_BLOG_TITLE_TEXT_FAMILY => 'sans-serif',
	UBS_ONE_BLOG_TITLE_TEXT_WEIGHT => 'bold',
	UBS_ONE_BLOG_TITLE_TEXT_STYLE => 'normal',
  UBS_ONE_BLOG_TITLE_TEXT_HPOS => UBS_ONE_HPOS_LEFT,
  UBS_ONE_BLOG_TITLE_TEXT_VPOS => UBS_ONE_VPOS_MIDDLE,
  UBS_ONE_BLOG_TITLE_FG => '#ffffff',
  UBS_ONE_BLOG_TITLE_BG => '#000000',
  UBS_ONE_BLOG_TITLE_BG_TRANS => false,
	
  UBS_ONE_ARCHIVE_TITLE_IMAGE => '',
  UBS_ONE_ARCHIVE_TITLE_IMAGE_FIXED => true,
  UBS_ONE_ARCHIVE_TITLE_IMAGE_OFFSET => 0,
  UBS_ONE_ARCHIVE_TITLE_IMAGE_REPEAT => UBS_ONE_REPEAT_Y,
  UBS_ONE_ARCHIVE_TITLE_IMAGE_SIZE => UBS_ONE_BG_SIZE_COVER,
  UBS_ONE_ARCHIVE_TITLE_HEIGHT => '0',
  UBS_ONE_ARCHIVE_TITLE_TEXT_SIZE => 50,
  UBS_ONE_ARCHIVE_TITLE_TEXT_SIZE_MOBILE => 25,
	UBS_ONE_ARCHIVE_TITLE_TEXT_FAMILY => 'sans-serif',
	UBS_ONE_ARCHIVE_TITLE_TEXT_WEIGHT => 'bold',
	UBS_ONE_ARCHIVE_TITLE_TEXT_STYLE => 'normal',
  UBS_ONE_ARCHIVE_TITLE_TEXT_HPOS => UBS_ONE_HPOS_LEFT,
  UBS_ONE_ARCHIVE_TITLE_TEXT_VPOS => UBS_ONE_VPOS_MIDDLE,
  UBS_ONE_ARCHIVE_TITLE_FG => '#ffffff',
  UBS_ONE_ARCHIVE_TITLE_BG => '#000000',
  UBS_ONE_ARCHIVE_TITLE_BG_TRANS => false,
	
  UBS_ONE_POST_FG => '#000000',
  UBS_ONE_POST_BG => '#ffffff',
  UBS_ONE_POST_LINK => '#cdbfe3',
  UBS_ONE_POST_HOVER => '#6f5499',
  UBS_ONE_POST_BORDER => true,
  UBS_ONE_POST_BORDER_COLOR => '#d0d0d0',
  UBS_ONE_POST_TITLE_IMAGE => '',
  UBS_ONE_POST_TITLE_IMAGE_FIXED => true,
  UBS_ONE_POST_TITLE_IMAGE_OFFSET => 0,
  UBS_ONE_POST_TITLE_IMAGE_REPEAT => UBS_ONE_REPEAT_Y,
  UBS_ONE_POST_TITLE_IMAGE_SIZE => UBS_ONE_BG_SIZE_COVER,
  UBS_ONE_POST_TITLE_HEIGHT => '0',
  UBS_ONE_POST_TITLE_TEXT_SIZE => 50,
  UBS_ONE_POST_TITLE_TEXT_SIZE_MOBILE => 25,
	UBS_ONE_POST_TITLE_TEXT_FAMILY => 'sans-serif',
	UBS_ONE_POST_TITLE_TEXT_WEIGHT => 'bold',
	UBS_ONE_POST_TITLE_TEXT_STYLE => 'normal',
  UBS_ONE_POST_TITLE_TEXT_HPOS => UBS_ONE_HPOS_LEFT,
  UBS_ONE_POST_TITLE_TEXT_VPOS => UBS_ONE_VPOS_MIDDLE,
  UBS_ONE_POST_TITLE_FG => '#ffffff',
  UBS_ONE_POST_TITLE_BG => '#000000',
  UBS_ONE_POST_TITLE_BG_TRANS => false,
	
  UBS_ONE_PAGE_FG => '#000000',
  UBS_ONE_PAGE_BG => '#ffffff',
  UBS_ONE_PAGE_LINK => '#cdbfe3',
  UBS_ONE_PAGE_HOVER => '#6f5499',
  UBS_ONE_PAGE_BORDER => true,
  UBS_ONE_PAGE_BORDER_COLOR => '#d0d0d0',
  UBS_ONE_PAGE_TITLE_IMAGE => '',
  UBS_ONE_PAGE_TITLE_IMAGE_FIXED => true,
  UBS_ONE_PAGE_TITLE_IMAGE_OFFSET => 0,
  UBS_ONE_PAGE_TITLE_IMAGE_REPEAT => UBS_ONE_REPEAT_Y,
  UBS_ONE_PAGE_TITLE_IMAGE_SIZE => UBS_ONE_BG_SIZE_COVER,
  UBS_ONE_PAGE_TITLE_HEIGHT => '0',
  UBS_ONE_PAGE_TITLE_TEXT_SIZE => 50,
  UBS_ONE_PAGE_TITLE_TEXT_SIZE_MOBILE => 25,
	UBS_ONE_PAGE_TITLE_TEXT_FAMILY => 'sans-serif',
	UBS_ONE_PAGE_TITLE_TEXT_WEIGHT => 'bold',
	UBS_ONE_PAGE_TITLE_TEXT_STYLE => 'normal',
  UBS_ONE_PAGE_TITLE_TEXT_HPOS => UBS_ONE_HPOS_LEFT,
  UBS_ONE_PAGE_TITLE_TEXT_VPOS => UBS_ONE_VPOS_MIDDLE,
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
	UBS_ONE_TEXT_WEIGHT => array('normal' => 'Normal', 'bold' => 'Bold', 'bolder' => 'Bolder', 'lighter' => 'Lighter'),
	UBS_ONE_TEXT_STYLE => array('normal' => 'Normal', 'italic' => 'Italic', 'oblique' => 'Oblique'),
	UBS_ONE_LAYOUT_TYPE => array(UBS_ONE_LAYOUT_TYPE_1COL => '1 Column', UBS_ONE_LAYOUT_TYPE_2COLLEFT => '2 Column, Left Sidebar', UBS_ONE_LAYOUT_TYPE_2COLRIGHT => '2 Column, Right Sidebar', UBS_ONE_LAYOUT_TYPE_3COL => '3 Column'),
  UBS_ONE_REPEAT => array(UBS_ONE_REPEAT_NONE => 'No Repeat', UBS_ONE_REPEAT_X => 'Repeat X', UBS_ONE_REPEAT_Y => 'Repeat Y', UBS_ONE_REPEAT_BOTH => 'Repeat X & Y'),
  UBS_ONE_HPOS => array(UBS_ONE_HPOS_LEFT => 'Left', UBS_ONE_HPOS_CENTER => 'Center', UBS_ONE_HPOS_RIGHT => 'Right'),
  UBS_ONE_VPOS => array(UBS_ONE_VPOS_TOP => 'Top', UBS_ONE_VPOS_MIDDLE => 'Middle', UBS_ONE_VPOS_BOTTOM => 'Bottom'),
  UBS_ONE_BG_SIZE => array(UBS_ONE_BG_SIZE_AUTO => 'Auto', UBS_ONE_BG_SIZE_CONTAIN => 'Contain', UBS_ONE_BG_SIZE_COVER => 'Cover', UBS_ONE_BG_SIZE_100 => '100%'),
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
	
//	error_log("get_theme_mod($key, {$ubs_one_defaults[$key]})");
	return get_theme_mod($key, $ubs_one_defaults[$key]);
}

if(!function_exists('ubs_one_setup')):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ubs_one_setup() 
{
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
		'primary' => __('Primary Menu', 'ubs-one'),
    'secondary' => __('Secondary Menu', 'ubs-one')
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
add_action('after_setup_theme', 'ubs_one_setup');

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
add_action('widgets_init', 'ubs_one_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function ubs_one_scripts() 
{
	$theme = wp_get_theme();
	wp_enqueue_style('ubs-one-style', get_stylesheet_uri());
//	wp_enqueue_style('ubs-one-style', get_template_directory_uri() . "/style_.css");
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
add_action('wp_enqueue_scripts', 'ubs_one_scripts');

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
 * Load custom meta box file.
 */
require get_template_directory() . '/inc/meta.php';

/** 
 * Short codes
 */
function ubs_one_tag_attr($attr, $value, $use = false)
{
  if($use || $value != '')
    return " $attr=\"$value\"";
  return '';
}

function ubs_one_add_shortcode($tag, $func)
{
  global $ubs_one_shortcode_prefix;
  
  add_shortcode($ubs_one_shortcode_prefix . "_" . $tag, $func);
}

function ubs_one_generic_shortcode_handler($atts, $content = null, $tag = null)
{
  global $ubs_one_shortcode_prefix;
  
  if($tag)
  {
    $tag = substr($tag, strlen($ubs_one_shortcode_prefix) + 1);
    $a = shortcode_atts(array(
        'id' => '',
        'class' => '',
        'style' => '',
    ), $atts);
    
    $class = '';
    if($a['class'] != '')
      $class .= " class=\"" . $a['class'] . "\"";

    $style = '';
    if($a['style'] != '')
      $style = " style=\"" . $a['style'] . "\"";

    $id = '';
    if($a['id'] != '')
      $id = " id=\"" . $a['id'] . "\"";

    return "<$tag$class$style$id>" . do_shortcode($content) . "</$tag>";
  }
  return '';
}

function ubs_one_glyphicon_shortcode_handler($atts, $content = null) 
{
  $a = shortcode_atts(array(
      'icon' => 'asterisk',
      'class' => '',
      'id' => '',
      'style' => '',
  ), $atts);
	
  $class = '';
  if($a['class'] != '')
    $class .= " " . $a['class'];

  $style = '';
  if($a['style'] != '')
    $style = " style=\"" . $a['style'] . "\"";
  
  $id = '';
  if($a['id'] != '')
    $id = " id=\"" . $a['id'] . "\"";
  
	return "<span class=\"glyphicon glyphicon-{$a['icon']}$class\" aria-hidden=\"true\"$style$id></span>";
}
ubs_one_add_shortcode('glyphicon', 'ubs_one_glyphicon_shortcode_handler');

function ubs_one_fa_shortcode_handler($atts, $content = null) 
{
  $a = shortcode_atts(array(
      'icon' => 'asterisk',
      'class' => '',
      'style' => '',
      'id' => '',
  ), $atts);
	
  $class = '';
  if($a['class'] != '')
    $class .= " " . $a['class'];

  $style = '';
  if($a['style'] != '')
    $style = " style=\"" . $a['style'] . "\"";
  
  $id = '';
  if($a['id'] != '')
    $id = " id=\"" . $a['id'] . "\"";
  
	return "<i class=\"fa fa-{$a['icon']}$class\"$style$id></i>";
}
ubs_one_add_shortcode('fa', 'ubs_one_fa_shortcode_handler');

function ubs_one_container_shortcode_handler($atts, $content = null)
{
  $a = shortcode_atts(array(
      'class' => '',
      'id' => '',
      'style' => '',
      'fluid' => 0,
  ), $atts);
  
  $class = '';
  if($a['class'] != '')
    $class .= " " . $a['class'];

  $style = '';
  if($a['style'] != '')
    $style = " style=\"" . $a['style'] . "\"";
  
  $id = '';
  if($a['id'] != '')
    $id = " id=\"" . $a['id'] . "\"";
  
  if(intval($a['fluid']))
    return "<div class=\"container-fluid$class\"$style$id>" . do_shortcode($content) . "</div>";
  else
    return "<div class=\"container$class\"$style$id>" . do_shortcode($content) . "</div>";
}
ubs_one_add_shortcode('container', 'ubs_one_container_shortcode_handler');

function ubs_one_row_shortcode_handler($atts, $content = null)
{
  $a = shortcode_atts(array(
      'class' => '',
      'id' => '',
      'style' => '',
  ), $atts);
  
  $class = '';
  if($a['class'] != '')
    $class .= " " . $a['class'];

  $style = '';
  if($a['style'] != '')
    $style = " style=\"" . $a['style'] . "\"";
  
  $id = '';
  if($a['id'] != '')
    $id = " id=\"" . $a['id'] . "\"";
  
  return "<div class=\"row $class\"$style$id>" . do_shortcode($content) . "</div>";
}
ubs_one_add_shortcode('row', 'ubs_one_row_shortcode_handler');

function ubs_one_col_shortcode_handler($atts, $content = null)
{
  $a = shortcode_atts(array(
      'class' => '',
      'id' => '',
      'style' => '',
      'width' => 1,
      'offset' => 0,
      'push' => 0,
      'pull' => 0,
      'device' => 'sm',
  ), $atts);
  
  $class = '';
  if($a['class'] != '')
    $class .= " " . $a['class'];

  $style = '';
  if($a['style'] != '')
    $style = " style=\"" . $a['style'] . "\"";
  
  $id = '';
  if($a['id'] != '')
    $id = " id=\"" . $a['id'] . "\"";
  
  $offset = intval($a['offset']);
  if($offset > 0)
    $offset = " col-{$a['device']}-offset-$offset";
  else
    $offset = '';

  $push = intval($a['push']);
  if($push > 0)
    $push = " col-{$a['device']}-push-$push";
  else
    $push = '';

  $pull = intval($a['pull']);
  if($pull > 0)
    $pull = " col-{$a['device']}-pull-$pull";
  else
    $pull = '';  
  
  return "<div class=\"col-{$a['device']}-" . intval($a['width']) . "$offset$push$pull$class\"$style$id>" . do_shortcode($content) . "</div>";
}
ubs_one_add_shortcode('col', 'ubs_one_col_shortcode_handler');

function ubs_one_jumbotron_shortcode_handler($atts, $content = null)
{
  $a = shortcode_atts(array(
      'id' => '',
      'class' => '',
      'style' => '',
  ), $atts);
  
  $class = '';
  if($a['class'] != '')
    $class .= " " . $a['class'];

  $style = '';
  if($a['style'] != '')
    $style = " style=\"" . $a['style'] . "\"";
  
  $id = '';
  if($a['id'] != '')
    $id = " id=\"" . $a['id'] . "\"";
  
  return "<div class=\"jumbotron$class\"$style$id>" . do_shortcode($content) . "</div>";
}
ubs_one_add_shortcode('jumbotron', 'ubs_one_jumbotron_shortcode_handler');

ubs_one_add_shortcode('p', 'ubs_one_generic_shortcode_handler');
ubs_one_add_shortcode('mark', 'ubs_one_generic_shortcode_handler');
ubs_one_add_shortcode('del', 'ubs_one_generic_shortcode_handler');

ubs_one_add_shortcode('h1', 'ubs_one_generic_shortcode_handler');
ubs_one_add_shortcode('h2', 'ubs_one_generic_shortcode_handler');
ubs_one_add_shortcode('h3', 'ubs_one_generic_shortcode_handler');
ubs_one_add_shortcode('h4', 'ubs_one_generic_shortcode_handler');
ubs_one_add_shortcode('h5', 'ubs_one_generic_shortcode_handler');

function ubs_one_table_shortcode_handler($atts, $content = null)
{
  $a = shortcode_atts(array(
      'id' => '',
      'class' => '',
      'style' => '',
      'striped' => 0,
      'bordered' => 0,
      'responsive' => 0,
      'hover' => 0,
      'condensed' => 0,
  ), $atts);
  
  $class = "table";
  if(intval($a['striped']))
    $class .= " table-striped";
  if(intval($a['bordered']))
    $class .= " table-bordered";
  if(intval($a['responsive']))
    $class .= " table-respsonive";
  if(intval($a['hover']))
    $class .= " table-hover";
  if(intval($a['condensed']))
    $class .= " table-condensed";
  if($a['class'] != '')
    $class .= " " . $a['class'];

  $style = '';
  if($a['style'] != '')
    $style = " style=\"" . $a['style'] . "\"";
  
  $id = '';
  if($a['id'] != '')
    $id = " id=\"" . $a['id'] . "\"";
  
  return "<table class=\"$class\"$style$id>" . do_shortcode($content) . "</table>";
}
ubs_one_add_shortcode('table', 'ubs_one_table_shortcode_handler');
ubs_one_add_shortcode('tr', 'ubs_one_generic_shortcode_handler');
ubs_one_add_shortcode('th', 'ubs_one_generic_shortcode_handler');
ubs_one_add_shortcode('td', 'ubs_one_generic_shortcode_handler');

function ubs_one_a_button_shortcode_handler($atts, $content = null, $tag = '')
{
  global $ubs_one_shortcode_prefix;
  
  $tag = substr($tag, strlen($ubs_one_shortcode_prefix) + 1);
  
  $a = shortcode_atts(array(
      'id' => '',
      'class' => '',
      'style' => '',
      'href' => '',
      'onclick' => '',
      'data-toggle' => '',
      'data-content' => '',
      'data-trigger' => '',
      'data-placement' => '',
      'title' => '',
  ), $atts);
  
  $class = ubs_one_tag_attr('class', $a['class']);
  $style = ubs_one_tag_attr('style', $a['style']);
  $id = ubs_one_tag_attr('id', $a['id']);
  $href = ubs_one_tag_attr('href', $a['href']);
  $onclick = ubs_one_tag_attr('onclick', $a['onclick']);
  $data_toggle = ubs_one_tag_attr('data-toggle', $a['data-toggle']);
  $data_content = ubs_one_tag_attr('data-content', $a['data-content']);
  $data_trigger = ubs_one_tag_attr('data-trigger', $a['data-trigger']);
  $data_placement = ubs_one_tag_attr('data-placement', $a['data-placement']);
  $title = ubs_one_tag_attr('title', $a['title']);
  
  return "<$tag $class$style$id$href$onclick$data_toggle$data_content$data_trigger$data_placement$title>" . do_shortcode($content) . "</$tag>";
}
ubs_one_add_shortcode('a', 'ubs_one_a_button_shortcode_handler');
ubs_one_add_shortcode('button', 'ubs_one_a_button_shortcode_handler');

function ubs_one_panel_shortcode_handler($atts, $content = null)
{
  $a = shortcode_atts(array(
      'id' => '',
      'class' => '',
      'style' => '',
  ), $atts);
  
  $class = ubs_one_tag_attr('class', "panel " . $a['class']);
  $style = ubs_one_tag_attr('style', $a['style']);
  $id = ubs_one_tag_attr('id', $a['id']);
  
  return "<div $class$style$id>" . do_shortcode($content) . "</div>";
}
ubs_one_add_shortcode('panel', 'ubs_one_panel_shortcode_handler');

function ubs_one_panel_heading_shortcode_handler($atts, $content = null)
{
  $a = shortcode_atts(array(
      'id' => '',
      'class' => '',
      'style' => '',
  ), $atts);
  
  $class = ubs_one_tag_attr('class', "panel-heading " . $a['class']);
  $style = ubs_one_tag_attr('style', $a['style']);
  $id = ubs_one_tag_attr('id', $a['id']);
  
  return "<div $class$style$id>" . do_shortcode($content) . "</div>";
}
ubs_one_add_shortcode('panel_heading', 'ubs_one_panel_heading_shortcode_handler');

function ubs_one_panel_body_shortcode_handler($atts, $content = null)
{
  $a = shortcode_atts(array(
      'id' => '',
      'class' => '',
      'style' => '',
  ), $atts);
  
  $class = ubs_one_tag_attr('class', "panel-body " . $a['class']);
  $style = ubs_one_tag_attr('style', $a['style']);
  $id = ubs_one_tag_attr('id', $a['id']);
  
  return "<div $class$style$id>" . do_shortcode($content) . "</div>";
}
ubs_one_add_shortcode('panel_body', 'ubs_one_panel_body_shortcode_handler');

function ubs_one_panel_footer_shortcode_handler($atts, $content = null)
{
  $a = shortcode_atts(array(
      'id' => '',
      'class' => '',
      'style' => '',
  ), $atts);
  
  $class = ubs_one_tag_attr('class', "panel-footer " . $a['class']);
  $style = ubs_one_tag_attr('style', $a['style']);
  $id = ubs_one_tag_attr('id', $a['id']);
  
  return "<div $class$style$id>" . do_shortcode($content) . "</div>";
}
ubs_one_add_shortcode('panel_footer', 'ubs_one_panel_footer_shortcode_handler');

function ubs_one_well_shortcode_handler($atts, $content = null)
{
  $a = shortcode_atts(array(
      'id' => '',
      'class' => '',
      'style' => '',
      'large' => 0,
      'small' => 0,
  ), $atts);
  
  $class = ubs_one_tag_attr('class', "well " . $a['class']);
  $style = ubs_one_tag_attr('style', $a['style']);
  $id = ubs_one_tag_attr('id', $a['id']);
  if($a['large'])
    $class .= " well-lg";
  else if($a['small'])
    $class .= " well-sm";
  
  return "<div $class$style$id>" . do_shortcode($content) . "</div>";
}
ubs_one_add_shortcode('well', 'ubs_one_well_shortcode_handler');

function ubs_one_section_shortcode_handler($atts, $content = null)
{
  $a = shortcode_atts(array(
      'id' => '',
      'class' => '',
      'style' => '',
      'bg-color' => '',
      'bg-image' => '',
      'bg-offset' => 0,
      'bg-fixed' => 0,
      'bg-repeat' => 'repeat-y',
      'bg-size' => '',
      'height' => 0,
  ), $atts);
  
  $class = ubs_one_tag_attr('class', $a['class']);
  $id = ubs_one_tag_attr('id', $a['id']);
  
  $style = "";
  if($a['bg-color'] != '')
    $style .= "background-color: " . $a['bg-color'] . "; ";
  if($a['bg-image'] != '')
  {
    $style .= "background-image: url('" . $a['bg-image'] . "'); ";
    $style .= sprintf("background-position: 0px %dpx; ", intval($a['bg-offset']));
    if($a['bg-repeat'] != '')
      $style .= "background-repeat: " . $a['bg-repeat'] . "; ";
    if($a['bg-fixed'])
    {
      $style .= "background-attachment: fixed; ";
      if($a['bg-size'] == '')
        $style .= "background-size: cover; ";
    }
    else
    {
      $style .= "background-attachment: scroll; ";
      if($a['bg-size'] == '')
        $style .= "background-size: cover; ";
    }
    if($a['bg-size'] != '')
      $style .= "background-size: " . $a['bg-size'] . "; ";
  }
  if(intval($a['height']))
  {
//    $style .= sprintf("height: %dpx; ", intval($a['height']));
    $style .= sprintf("min-height: %dpx; ", intval($a['height']));
  }
  if($a['style'] != '')
    $style .= $a['style'];
  
  return "<section $class$id style=\"$style\">" . do_shortcode($content) . "</section>";
}
ubs_one_add_shortcode('section', 'ubs_one_section_shortcode_handler');

$ubs_one_curnav = 0;
$ubs_one_navtabs = array();
function ubs_one_navtab_shortcode_handler($atts, $content = null)
{
  global $ubs_one_curnav, $ubs_one_navtabs;
  
  $a = shortcode_atts(array(
      'id' => '',
      'class' => '',
      'style' => '',
      'pills' => 0,
  ), $atts);
  
  $class = ubs_one_tag_attr('class', "nav nav-" . ($a['pills'] ? "pills " : "tabs ") . $a['class']);
  $style = ubs_one_tag_attr('style', $a['style']);
  $id = ubs_one_tag_attr('id', $a['id']);

  $ubs_one_curnav++;
  $ubs_one_navtabs = array();
  $panels = do_shortcode($content);
  $ret = "<ul $class$style$id role=\"tablist\">";
  for($i = 0; $i < count($ubs_one_navtabs); $i++)
  {
    $tabid = "ubs_one_navtab{$ubs_one_curnav}_tab$i";
    $ret .= "<li role=\"presentation\"" . ($i == 0 ? " class=\"active\"" : "") . "><a href=\"#$tabid\" role=\"tab\" data-toggle=\"tab\">{$ubs_one_navtabs[$i]}</a></li>";
  }
  $ret .= "</ul>";
  return $ret . "<div class=\"tab-content\">" . $panels . "</div>";
}
ubs_one_add_shortcode('navtab', 'ubs_one_navtab_shortcode_handler');

function ubs_one_tabpanel_shortcode_handler($atts, $content = null)
{
  global $ubs_one_curnav, $ubs_one_navtabs;
  
  $a = shortcode_atts(array(
      'id' => '',
      'class' => '',
      'style' => '',
      'title' => '',
  ), $atts);
  
  $class = ubs_one_tag_attr('class', "tab-pane " . (count($ubs_one_navtabs) == 0 ? "active " : "") . $a['class']);
  $style = ubs_one_tag_attr('style', $a['style']);

  $id = "ubs_one_navtab{$ubs_one_curnav}_tab" . count($ubs_one_navtabs);
  $ubs_one_navtabs[] = $a['title'];
  return "<div role=\"tabpanel\" $class$style id=\"$id\">" . do_shortcode($content) . "</div>";
}
ubs_one_add_shortcode('tabpanel', 'ubs_one_tabpanel_shortcode_handler');

$ubs_one_curacc = 0;
$ubs_one_curaccpanel = 0;
function ubs_one_acc_shortcode_handler($atts, $content = null)
{
  global $ubs_one_curacc, $ubs_one_curaccpanel;
  
  $a = shortcode_atts(array(
      'class' => '',
      'style' => '',
  ), $atts);
  
  $class = ubs_one_tag_attr('class', "panel-group " . $a['class']);
  $style = ubs_one_tag_attr('style', $a['style']);

  $ubs_one_curacc++;
  $ubs_one_curaccpanel = 0;
  return "<div $class id=\"ubs_one_acc{$ubs_one_curacc}\" role=\"tablist\" aria-multiselectable=\"true\">" . do_shortcode($content) ."</div>";
}
ubs_one_add_shortcode('acc', 'ubs_one_acc_shortcode_handler');

function ubs_one_accpanel_shortcode_handler($atts, $content = null)
{
  global $ubs_one_curacc, $ubs_one_curaccpanel;
  
  $a = shortcode_atts(array(
      'class' => '',
      'style' => '',
      'title' => '',
  ), $atts);
  
  $class = ubs_one_tag_attr('class', "panel " . $a['class']);
  $style = ubs_one_tag_attr('style', $a['style']);

  $accid = "ubs_one_acc{$ubs_one_curacc}";
  $headerid = "ubs_one_acc{$ubs_one_curacc}_header" . $ubs_one_curaccpanel;
  $panelid = "ubs_one_acc{$ubs_one_curacc}_panel" . $ubs_one_curaccpanel;
  $ret = "<div $class>";
  $ret .= "<div class=\"panel-heading\" role=\"tab\" id=\"$headerid\">";
  $ret .= "<h4 class=\"panel-title\">";
  $ret .= "<a role=\"button\" data-toggle=\"collapse\" data-parent=\"#$accid\" href=\"#$panelid\"" . ($ubs_one_curaccpanel ? "" : " aria-expanded=\"true\"") . "aria-controls=\"$panelid\">{$a['title']}</a>";
  $ret .= "</h4>";
  $ret .= "</div>";
  $ret .= "<div id=\"$panelid\" class=\"panel-collapse collapse" . ($ubs_one_curaccpanel ? "" : " in") . "\" role=\"tabpanel\" aria-labelledby=\"$headerid\">";
  $ret .= "<div class=\"panel-body\">" . do_shortcode($content) . "</div>";
  $ret .= "</div>";
  $ret .= "</div>";
  $ubs_one_curaccpanel++;
  return $ret;
}
ubs_one_add_shortcode('accpanel', 'ubs_one_accpanel_shortcode_handler');

$ubs_one_curcar = 0;
$ubs_one_curcarslide = 0;
function ubs_one_carousel_shortcode_handler($atts, $content = null)
{
  global $ubs_one_curcar, $ubs_one_carslides;
  
  $a = shortcode_atts(array(
      'class' => '',
      'style' => '',
      'interval' => '5000',
      'pause' => 'hover',
      'wrap' => 'true',
      'keyboard' => 'false',
  ), $atts);
  
  $class = ubs_one_tag_attr('class', "carousel slide " . $a['class']);
  $style = ubs_one_tag_attr('style', $a['style']);
  $interval = ubs_one_tag_attr('data-interval', $a['interval']);
  $pause = ubs_one_tag_attr('data-pause', $a['pause'], true);
  $wrap = ubs_one_tag_attr('data-wrap', $a['wrap']);
  $keyboard = ubs_one_tag_attr('data-keyboard', $a['keyboard']);
  
  $ubs_one_curcar++;
  $ubs_one_curcarslide = 0;
  $slides = do_shortcode($content);
  $carid = "ubs_one_carousel$ubs_one_curcar";

  $ret = "<div id=\"$carid\" $class data-ride=\"carousel\"$interval$pause$wrap$keyboard>";
  $ret .= "<ol class=\"carousel-indicators\">";
  for($i = 0; $i < $ubs_one_carslides; $i++)
    $ret .= "<li data-target=\"#$carid\" data-slide-to=\"$i\"" . ($i ? "" : " class=\"active\"") . "\"></li>";
  $ret .= "</ol>";

  $ret .= "<div class=\"carousel-inner\" role=\"listbox\">" . $slides . "</div>";

  $ret .= "<a class=\"left carousel-control\" href=\"#$carid\" role=\"button\" data-slide=\"prev\">";
  $ret .= "<span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>";
  $ret .= "<span class=\"sr-only\">Previous</span>";
  $ret .= "</a>";
  $ret .= "<a class=\"right carousel-control\" href=\"#$carid\" role=\"button\" data-slide=\"next\">";
  $ret .= "<span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>";
  $ret .= "<span class=\"sr-only\">Next</span>";
  $ret .= "</a>";
  $ret .= "</div>";
  return $ret;
}
ubs_one_add_shortcode('carousel', 'ubs_one_carousel_shortcode_handler');

function ubs_one_slide_shortcode_handler($atts, $content = null)
{
  global $ubs_one_curcar, $ubs_one_carslides;
  
  $a = shortcode_atts(array(
      'img' => '',
      'alt' => '',
      'href' => '',
  ), $atts);

  $carid = "ubs_one_carousel$ubs_one_curcar";
  
  $ret .= "<div class=\"item" . ($ubs_one_carslides ? "" : " active") . "\">";
  if($a['href'] != '')
    $ret .= "<a href=\"{$a['href']}\">";
  $ret .= "<img src=\"{$a['img']}\" alt=\"{$a['alt']}\">";
  $ret .= "<div class=\"carousel-caption\">" . do_shortcode($content) . "</div>";
  $ret .= "</div>";

  $ubs_one_carslides++;
  return $ret;
}
ubs_one_add_shortcode('slide', 'ubs_one_slide_shortcode_handler');

