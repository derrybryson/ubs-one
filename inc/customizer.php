<?php
/**
 * UBS One Theme Customizer.
 *
 * @package UBS_One
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ubs_one_customize_register($wp_customize) 
{
	$wp_customize->get_setting('blogname')->transport         = 'refresh';
	$wp_customize->get_setting('blogdescription')->transport  = 'refresh';
	$wp_customize->get_setting('header_textcolor')->transport = 'refresh';
	
	$wp_customize->add_setting(UBS_ONE_FG_COLOR, array('default' => ubs_one_def(UBS_ONE_FG_COLOR), 'transport' => 'refresh'));
	$wp_customize->add_setting(UBS_ONE_BG_COLOR, array('default' => ubs_one_def(UBS_ONE_BG_COLOR), 'transport' => 'refresh'));
	$wp_customize->add_setting(UBS_ONE_BG_IMAGE, array('default' => ubs_one_def(UBS_ONE_BG_IMAGE), 'transport' => 'refresh'));
	$wp_customize->add_setting(UBS_ONE_BG_FIXED, array('default' => ubs_one_def(UBS_ONE_BG_FIXED), 'transport' => 'refresh'));
	$wp_customize->add_setting(UBS_ONE_TEXT_FAMILY, array('default' => ubs_one_def(UBS_ONE_TEXT_FAMILY), 'transport' => 'refresh'));
	$wp_customize->add_setting(UBS_ONE_TEXT_SIZE, array('default' => ubs_one_def(UBS_ONE_TEXT_SIZE), 'transport' => 'refresh'));
	$wp_customize->add_setting(UBS_ONE_FAVICON, array('default' => ubs_one_def(UBS_ONE_FAVICON), 'transport' => 'refresh'));
	$wp_customize->add_setting(UBS_ONE_LAYOUT_TYPE, array('default' => ubs_one_def(UBS_ONE_LAYOUT_TYPE), 'transport' => 'refresh'));
  $wp_customize->add_setting(UBS_ONE_CUSTOM_CSS, array('default' => ubs_one_def(UBS_ONE_CUSTOM_CSS), 'transport' => 'refresh'));

	$wp_customize->add_setting(UBS_ONE_HEADER_TYPE, array('default' => ubs_one_def(UBS_ONE_HEADER_TYPE), 'transport' => 'refresh'));
	$wp_customize->add_setting(UBS_ONE_HEADER_HEIGHT, array('default' => ubs_one_def(UBS_ONE_HEADER_HEIGHT), 'transport' => 'refresh'));
	$wp_customize->add_setting(UBS_ONE_HEADER_BORDER, array('default' => ubs_one_def(UBS_ONE_HEADER_BORDER), 'transport' => 'refresh'));
	$wp_customize->add_setting(UBS_ONE_HEADER_BORDER_COLOR, array('default'   => ubs_one_def(UBS_ONE_HEADER_BORDER_COLOR), 'transport' => 'refresh'));
	$wp_customize->add_setting(UBS_ONE_HEADER_BG, array('default' => ubs_one_def(UBS_ONE_HEADER_BG), 'transport' => 'refresh'));
	$wp_customize->add_setting(UBS_ONE_HEADER_FG, array('default' => ubs_one_def(UBS_ONE_HEADER_FG), 'transport' => 'refresh'));
	$wp_customize->add_setting(UBS_ONE_HEADER_HOVER_FG, array('default' => ubs_one_def(UBS_ONE_HEADER_HOVER_FG), 'transport' => 'refresh'));
	$wp_customize->add_setting(UBS_ONE_HEADER_HOVER_BG, array('default' => ubs_one_def(UBS_ONE_HEADER_HOVER_BG), 'transport' => 'refresh'));
	$wp_customize->add_setting(UBS_ONE_HEADER_ACTIVE_FG, array('default' => ubs_one_def(UBS_ONE_HEADER_ACTIVE_FG), 'transport' => 'refresh'));
	$wp_customize->add_setting(UBS_ONE_HEADER_ACTIVE_BG, array('default' => ubs_one_def(UBS_ONE_HEADER_ACTIVE_BG), 'transport' => 'refresh'));
	$wp_customize->add_setting(UBS_ONE_HEADER_LOGO_TEXT_SIZE, array('default' => ubs_one_def(UBS_ONE_HEADER_LOGO_TEXT_SIZE), 'transport' => 'refresh'));
	$wp_customize->add_setting(UBS_ONE_HEADER_LOGO_TEXT_FAMILY, array('default' => ubs_one_def(UBS_ONE_HEADER_LOGO_TEXT_FAMILY), 'transport' => 'refresh'));
	$wp_customize->add_setting(UBS_ONE_HEADER_LOGO_TEXT_WEIGHT, array('default' => ubs_one_def(UBS_ONE_HEADER_LOGO_TEXT_WEIGHT), 'transport' => 'refresh'));
	$wp_customize->add_setting(UBS_ONE_HEADER_LOGO_TEXT_STYLE, array('default' => ubs_one_def(UBS_ONE_HEADER_LOGO_TEXT_STYLE), 'transport' => 'refresh'));
	$wp_customize->add_setting(UBS_ONE_HEADER_LOGO, array('default' => UBS_ONE_HEADER_LOGO, 'transport' => 'refresh'));

  $wp_customize->add_setting(UBS_ONE_FOOTER_BG, array('default' => ubs_one_def(UBS_ONE_FOOTER_BG), 'transport' => 'refresh'));
	$wp_customize->add_setting(UBS_ONE_FOOTER_FG, array('default' => ubs_one_def(UBS_ONE_FOOTER_FG), 'transport' => 'refresh'));
  $wp_customize->add_setting(UBS_ONE_FOOTER_LINK, array('default' => ubs_one_def(UBS_ONE_FOOTER_LINK), 'transport' => 'refresh'));
	$wp_customize->add_setting(UBS_ONE_FOOTER_HOVER, array('default' => ubs_one_def(UBS_ONE_FOOTER_HOVER), 'transport' => 'refresh'));
	$wp_customize->add_setting(UBS_ONE_FOOTER_TEXT, array('default' => ubs_one_def(UBS_ONE_FOOTER_TEXT), 'transport' => 'refresh'));

  $wp_customize->add_setting(UBS_ONE_POST_FG, array('default' => ubs_one_def(UBS_ONE_POST_FG), 'transport' => 'refresh'));
  $wp_customize->add_setting(UBS_ONE_POST_BG, array('default' => ubs_one_def(UBS_ONE_POST_BG), 'transport' => 'refresh'));
  $wp_customize->add_setting(UBS_ONE_POST_LINK, array('default' => ubs_one_def(UBS_ONE_POST_LINK), 'transport' => 'refresh'));
  $wp_customize->add_setting(UBS_ONE_POST_HOVER, array('default' => ubs_one_def(UBS_ONE_POST_HOVER), 'transport' => 'refresh'));
  $wp_customize->add_setting(UBS_ONE_POST_BORDER, array('default' => ubs_one_def(UBS_ONE_POST_BORDER), 'transport' => 'refresh'));
  $wp_customize->add_setting(UBS_ONE_POST_BORDER_COLOR, array('default' => ubs_one_def(UBS_ONE_POST_BORDER_COLOR), 'transport' => 'refresh'));

  $wp_customize->add_setting(UBS_ONE_PAGE_FG, array('default' => ubs_one_def(UBS_ONE_PAGE_FG), 'transport' => 'refresh'));
  $wp_customize->add_setting(UBS_ONE_PAGE_BG, array('default' => ubs_one_def(UBS_ONE_PAGE_BG), 'transport' => 'refresh'));
  $wp_customize->add_setting(UBS_ONE_PAGE_LINK, array('default' => ubs_one_def(UBS_ONE_PAGE_LINK), 'transport' => 'refresh'));
  $wp_customize->add_setting(UBS_ONE_PAGE_HOVER, array('default' => ubs_one_def(UBS_ONE_PAGE_HOVER), 'transport' => 'refresh'));
  $wp_customize->add_setting(UBS_ONE_PAGE_BORDER, array('default' => ubs_one_def(UBS_ONE_PAGE_BORDER), 'transport' => 'refresh'));
  $wp_customize->add_setting(UBS_ONE_PAGE_BORDER_COLOR, array('default' => ubs_one_def(UBS_ONE_PAGE_BORDER_COLOR), 'transport' => 'refresh'));
  $wp_customize->add_setting(UBS_ONE_PAGE_TITLE_IMAGE, array('default' => ubs_one_def(UBS_ONE_PAGE_TITLE_IMAGE), 'transport' => 'refresh'));
  $wp_customize->add_setting(UBS_ONE_PAGE_TITLE_IMAGE_FIXED, array('default' => ubs_one_def(UBS_ONE_PAGE_TITLE_IMAGE_FIXED), 'transport' => 'refresh'));
  $wp_customize->add_setting(UBS_ONE_PAGE_TITLE_HEIGHT, array('default' => ubs_one_def(UBS_ONE_PAGE_TITLE_HEIGHT), 'transport' => 'refresh'));
  $wp_customize->add_setting(UBS_ONE_PAGE_TITLE_TEXT_SIZE, array('default' => ubs_one_def(UBS_ONE_PAGE_TITLE_TEXT_SIZE), 'transport' => 'refresh'));
  $wp_customize->add_setting(UBS_ONE_PAGE_TITLE_TEXT_FAMILY, array('default' => ubs_one_def(UBS_ONE_PAGE_TITLE_TEXT_FAMILY), 'transport' => 'refresh'));
  $wp_customize->add_setting(UBS_ONE_PAGE_TITLE_TEXT_WEIGHT, array('default' => ubs_one_def(UBS_ONE_PAGE_TITLE_TEXT_WEIGHT), 'transport' => 'refresh'));
  $wp_customize->add_setting(UBS_ONE_PAGE_TITLE_TEXT_STYLE, array('default' => ubs_one_def(UBS_ONE_PAGE_TITLE_TEXT_STYLE), 'transport' => 'refresh'));
  $wp_customize->add_setting(UBS_ONE_PAGE_TITLE_FG, array('default' => ubs_one_def(UBS_ONE_PAGE_TITLE_FG), 'transport' => 'refresh'));
  $wp_customize->add_setting(UBS_ONE_PAGE_TITLE_BG, array('default' => ubs_one_def(UBS_ONE_PAGE_TITLE_BG), 'transport' => 'refresh'));
  $wp_customize->add_setting(UBS_ONE_PAGE_TITLE_BG_TRANS, array('default' => ubs_one_def(UBS_ONE_PAGE_TITLE_BG_TRANS), 'transport' => 'refresh'));

	$wp_customize->add_setting(UBS_ONE_SIDEBAR_BG, array('default' => ubs_one_def(UBS_ONE_SIDEBAR_BG), 'transport' => 'refresh'));
  $wp_customize->add_setting(UBS_ONE_SIDEBAR_LINK, array('default' => ubs_one_def(UBS_ONE_SIDEBAR_LINK), 'transport' => 'refresh'));
  $wp_customize->add_setting(UBS_ONE_SIDEBAR_HOVER, array('default' => ubs_one_def(UBS_ONE_SIDEBAR_HOVER), 'transport' => 'refresh'));
  $wp_customize->add_setting(UBS_ONE_SIDEBAR_WIDGET_FG, array('default' => ubs_one_def(UBS_ONE_SIDEBAR_WIDGET_FG), 'transport' => 'refresh'));
  $wp_customize->add_setting(UBS_ONE_SIDEBAR_WIDGET_BG, array('default' => ubs_one_def(UBS_ONE_SIDEBAR_WIDGET_BG), 'transport' => 'refresh'));
  $wp_customize->add_setting(UBS_ONE_SIDEBAR_WIDGET_BORDER, array('default' => ubs_one_def(UBS_ONE_SIDEBAR_WIDGET_BORDER), 'transport' => 'refresh'));
  $wp_customize->add_setting(UBS_ONE_SIDEBAR_WIDGET_BORDER_COLOR, array('default' => ubs_one_def(UBS_ONE_SIDEBAR_WIDGET_BORDER_COLOR), 'transport' => 'refresh'));

	// site settings
	$wp_customize->add_section("site", array(
		"title" => __("Site", "ubs_one"),
		"priority" => 30,
	));
  $wp_customize->add_control(UBS_ONE_LAYOUT_TYPE, array(		
		'label'    => __('Layout', 'ubs_one'),
		'section'  => 'site',
		'settings' => UBS_ONE_LAYOUT_TYPE,
		'type'     => 'select',
		'choices'  => ubs_one_choices(UBS_ONE_LAYOUT_TYPE),
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, UBS_ONE_FG_COLOR, array(
        'label'    => __( 'Text Color', 'ubs_one' ),
        'section'  => 'site',
        'settings' => UBS_ONE_FG_COLOR,
  )));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, UBS_ONE_BG_COLOR, array(
        'label'    => __( 'Background Color', 'ubs_one' ),
        'section'  => 'site',
        'settings' => UBS_ONE_BG_COLOR,
  )));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, UBS_ONE_BG_IMAGE, array(
    'label'      => __( 'Background Image', 'ubs_one' ),
    'section'    => 'site',
    'settings'   => UBS_ONE_BG_IMAGE,
  )));
	$wp_customize->add_control(UBS_ONE_BG_FIXED, array(
    'type'        => 'checkbox',
    'section'     => 'site',
		'settings' => UBS_ONE_BG_FIXED,
    'label'       => __('Background Fixed', 'ubs_one'),
  ));
	$wp_customize->add_control(UBS_ONE_TEXT_FAMILY, array(
    'type'        => 'text',
    'section'     => 'site',
		'settings' => UBS_ONE_TEXT_FAMILY,
    'label'       => 'Text Family',
  ));
	$wp_customize->add_control(UBS_ONE_TEXT_SIZE, array(
    'type'        => 'number',
    'section'     => 'site',
		'settings' => UBS_ONE_TEXT_SIZE,
    'label'       => 'Text Size',
  ));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, UBS_ONE_FAVICON, array(
    'label'      => __( 'Icon Image', 'ubs_one' ),
    'section'    => 'site',
    'settings'   => UBS_ONE_FAVICON,
  )));
	$wp_customize->add_control(UBS_ONE_CUSTOM_CSS, array(
    'type'        => 'textarea',
    'section'     => 'site',
		'settings' => UBS_ONE_CUSTOM_CSS,
    'label'       => 'Custom CSS',
  ));

	// header settings
	$wp_customize->add_section("header", array(
		"title" => __("Header", "ubs_one"),
		"priority" => 30,
	));
  $wp_customize->add_control(UBS_ONE_HEADER_TYPE, array(		
		'label'    => __('Header Type', 'ubs_one'),
		'section'  => 'header',
		'settings' => UBS_ONE_HEADER_TYPE,
		'type'     => 'select',
		'choices'  => ubs_one_choices(UBS_ONE_HEADER_TYPE),
	));
	$wp_customize->add_control(UBS_ONE_HEADER_LOGO_TEXT_SIZE, array(
    'type'        => 'number',
    'section'     => 'header',
		'settings' => UBS_ONE_HEADER_LOGO_TEXT_SIZE,
    'label'       => 'Brand Text Size',
  ));
	$wp_customize->add_control(UBS_ONE_HEADER_LOGO_TEXT_FAMILY, array(
    'type'        => 'text',
    'section'     => 'header',
		'settings' => UBS_ONE_HEADER_LOGO_TEXT_FAMILY,
    'label'       => 'Brand Text Family',
  ));
  $wp_customize->add_control(UBS_ONE_HEADER_LOGO_TEXT_WEIGHT, array(		
		'label'    => __('Brand Text Weight', 'ubs_one'),
		'section'  => 'header',
		'settings' => UBS_ONE_HEADER_LOGO_TEXT_WEIGHT,
		'type'     => 'select',
		'choices'  => ubs_one_choices(UBS_ONE_HEADER_LOGO_TEXT_WEIGHT),
	));
  $wp_customize->add_control(UBS_ONE_HEADER_LOGO_TEXT_STYLE, array(		
		'label'    => __('Brand Text Style', 'ubs_one'),
		'section'  => 'header',
		'settings' => UBS_ONE_HEADER_LOGO_TEXT_STYLE,
		'type'     => 'select',
		'choices'  => ubs_one_choices(UBS_ONE_HEADER_LOGO_TEXT_STYLE),
	));
	$wp_customize->add_control(UBS_ONE_HEADER_HEIGHT, array(
    'type'        => 'number',
    'section'     => 'header',
		'settings' => UBS_ONE_HEADER_HEIGHT,
    'label'       => 'Height',
  ));
	$wp_customize->add_control(UBS_ONE_HEADER_BORDER, array(
    'type'        => 'checkbox',
    'section'     => 'header',
		'settings' => UBS_ONE_HEADER_BORDER,
    'label'       => __('Border', 'ubs_one'),
  ));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, UBS_ONE_HEADER_BORDER_COLOR, array(
        'label'    => __( 'Border Color', 'ubs_one' ),
        'section'  => 'header',
        'settings' => UBS_ONE_HEADER_BORDER_COLOR,
  )));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, UBS_ONE_HEADER_FG, array(
        'label'    => __( 'Text Color', 'ubs_one' ),
        'section'  => 'header',
        'settings' => UBS_ONE_HEADER_FG,
  )));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, UBS_ONE_HEADER_BG, array(
        'label'    => __( 'Background Color', 'ubs_one' ),
        'section'  => 'header',
        'settings' => UBS_ONE_HEADER_BG,
  )));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, UBS_ONE_HEADER_HOVER_FG, array(
        'label'    => __( 'Menu Hover Text Color', 'ubs_one' ),
        'section'  => 'header',
        'settings' => UBS_ONE_HEADER_HOVER_FG,
  )));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, UBS_ONE_HEADER_HOVER_BG, array(
        'label'    => __( 'Menu Hover Background Color', 'ubs_one' ),
        'section'  => 'header',
        'settings' => UBS_ONE_HEADER_HOVER_BG,
  )));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, UBS_ONE_HEADER_ACTIVE_FG, array(
        'label'    => __( 'Menu Active Text Color', 'ubs_one' ),
        'section'  => 'header',
        'settings' => UBS_ONE_HEADER_ACTIVE_FG,
  )));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, UBS_ONE_HEADER_ACTIVE_BG, array(
        'label'    => __( 'Menu Active Background Color', 'ubs_one' ),
        'section'  => 'header',
        'settings' => UBS_ONE_HEADER_ACTIVE_BG,
  )));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, UBS_ONE_HEADER_LOGO, array(
    'label'      => __( 'Logo', 'ubs_one' ),
    'section'    => 'header',
    'settings'   => UBS_ONE_HEADER_LOGO,
  )));

	// footer settings
	$wp_customize->add_section("footer", array(
		"title" => __("Footer", "ubs_one"),
		"priority" => 30,
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, UBS_ONE_FOOTER_FG, array(
        'label'    => __( 'Text Color', 'ubs_one' ),
        'section'  => 'footer',
        'settings' => UBS_ONE_FOOTER_FG,
  )));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, UBS_ONE_FOOTER_BG, array(
        'label'    => __( 'Background Color', 'ubs_one' ),
        'section'  => 'footer',
        'settings' => UBS_ONE_FOOTER_BG,
  )));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, UBS_ONE_FOOTER_LINK, array(
        'label'    => __( 'Link Color', 'ubs_one' ),
        'section'  => 'footer',
        'settings' => UBS_ONE_FOOTER_LINK,
  )));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, UBS_ONE_FOOTER_HOVER, array(
        'label'    => __( 'Link Hover Color', 'ubs_one' ),
        'section'  => 'footer',
        'settings' => UBS_ONE_FOOTER_HOVER,
  )));
	$wp_customize->add_control(UBS_ONE_FOOTER_TEXT, array(
    'type'        => 'textarea',
    'section'     => 'footer',
		'settings' => UBS_ONE_FOOTER_TEXT,
    'label'       => 'Footer Text',
  ));

	// Post settings
	$wp_customize->add_section("post", array(
		"title" => __("Post", "ubs_one"),
		"priority" => 30,
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, UBS_ONE_POST_FG, array(
        'label'    => __( 'Text Color', 'ubs_one' ),
        'section'  => 'post',
        'settings' => UBS_ONE_POST_FG,
  )));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, UBS_ONE_POST_BG, array(
        'label'    => __( 'Background Color', 'ubs_one' ),
        'section'  => 'post',
        'settings' => UBS_ONE_POST_BG,
  )));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, UBS_ONE_POST_LINK, array(
        'label'    => __( 'Link Color', 'ubs_one' ),
        'section'  => 'post',
        'settings' => UBS_ONE_POST_LINK,
  )));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, UBS_ONE_POST_HOVER, array(
        'label'    => __( 'Link Hover Color', 'ubs_one' ),
        'section'  => 'post',
        'settings' => UBS_ONE_POST_HOVER,
  )));
	$wp_customize->add_control(UBS_ONE_POST_BORDER, array(
    'type'        => 'checkbox',
    'section'     => 'post',
		'settings' => UBS_ONE_POST_BORDER,
    'label'       => __('Border', 'ubs_one'),
  ));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, UBS_ONE_POST_BORDER_COLOR, array(
        'label'    => __( 'Border Color', 'ubs_one' ),
        'section'  => 'post',
        'settings' => UBS_ONE_POST_BORDER_COLOR,
  )));

	// Page settings
	$wp_customize->add_section("page", array(
		"title" => __("Page", "ubs_one"),
		"priority" => 30,
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, UBS_ONE_PAGE_FG, array(
        'label'    => __( 'Text Color', 'ubs_one' ),
        'section'  => 'page',
        'settings' => UBS_ONE_PAGE_FG,
  )));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, UBS_ONE_PAGE_BG, array(
        'label'    => __( 'Background Color', 'ubs_one' ),
        'section'  => 'page',
        'settings' => UBS_ONE_PAGE_BG,
  )));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, UBS_ONE_PAGE_LINK, array(
        'label'    => __( 'Link Color', 'ubs_one' ),
        'section'  => 'page',
        'settings' => UBS_ONE_PAGE_LINK,
  )));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, UBS_ONE_PAGE_HOVER, array(
        'label'    => __( 'Link Hover Color', 'ubs_one' ),
        'section'  => 'page',
        'settings' => UBS_ONE_PAGE_HOVER,
  )));
	$wp_customize->add_control(UBS_ONE_PAGE_BORDER, array(
    'type'        => 'checkbox',
    'section'     => 'page',
		'settings' => UBS_ONE_PAGE_BORDER,
    'label'       => __('Border', 'ubs_one'),
  ));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, UBS_ONE_PAGE_BORDER_COLOR, array(
        'label'    => __( 'Border Color', 'ubs_one' ),
        'section'  => 'page',
        'settings' => UBS_ONE_PAGE_BORDER_COLOR,
  )));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, UBS_ONE_PAGE_TITLE_IMAGE, array(
    'label'      => __( 'Title Background Image', 'ubs_one' ),
    'section'    => 'page',
    'settings'   => UBS_ONE_PAGE_TITLE_IMAGE,
		'description' => __('Rec Min Width 1920', 'ubs_one'),
  )));
	$wp_customize->add_control(UBS_ONE_PAGE_TITLE_IMAGE_FIXED, array(
    'type'        => 'checkbox',
    'section'     => 'page',
		'settings' => UBS_ONE_PAGE_TITLE_IMAGE_FIXED,
    'label'       => __('Background Image Fixed', 'ubs_one'),
  ));
	$wp_customize->add_control(UBS_ONE_PAGE_TITLE_HEIGHT, array(
    'type'        => 'number',
    'section'     => 'page',
		'settings' => UBS_ONE_PAGE_TITLE_HEIGHT,
    'label'       => 'Title Minimum Height',
  ));
	$wp_customize->add_control(UBS_ONE_PAGE_TITLE_TEXT_SIZE, array(
    'type'        => 'number',
    'section'     => 'page',
		'settings' => UBS_ONE_PAGE_TITLE_TEXT_SIZE,
    'label'       => 'Title Text Size',
  ));
	$wp_customize->add_control(UBS_ONE_PAGE_TITLE_TEXT_FAMILY, array(
    'type'        => 'text',
    'section'     => 'page',
		'settings' => UBS_ONE_PAGE_TITLE_TEXT_FAMILY,
    'label'       => 'Title Text Family',
  ));
  $wp_customize->add_control(UBS_ONE_PAGE_TITLE_TEXT_WEIGHT, array(		
		'label'    => __('Title Text Weight', 'ubs_one'),
		'section'  => 'page',
		'settings' => UBS_ONE_PAGE_TITLE_TEXT_WEIGHT,
		'type'     => 'select',
		'choices'  => ubs_one_choices(UBS_ONE_PAGE_TITLE_TEXT_WEIGHT),
	));
  $wp_customize->add_control(UBS_ONE_PAGE_TITLE_TEXT_STYLE, array(		
		'label'    => __('Title Text Style', 'ubs_one'),
		'section'  => 'page',
		'settings' => UBS_ONE_PAGE_TITLE_TEXT_STYLE,
		'type'     => 'select',
		'choices'  => ubs_one_choices(UBS_ONE_PAGE_TITLE_TEXT_STYLE),
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, UBS_ONE_PAGE_TITLE_FG, array(
        'label'    => __( 'Title Text Color', 'ubs_one' ),
        'section'  => 'page',
        'settings' => UBS_ONE_PAGE_TITLE_FG,
  )));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, UBS_ONE_PAGE_TITLE_BG, array(
        'label'    => __( 'Title Background Color', 'ubs_one' ),
        'section'  => 'page',
        'settings' => UBS_ONE_PAGE_TITLE_BG,
  )));
	$wp_customize->add_control(UBS_ONE_PAGE_TITLE_BG_TRANS, array(
    'type'        => 'checkbox',
    'section'     => 'page',
		'settings' => UBS_ONE_PAGE_TITLE_BG_TRANS,
    'label'       => __('Title Background Transparent', 'ubs_one'),
  ));

	// Sidebar settings
	$wp_customize->add_section("sidebar", array(
		"title" => __("Sidebar", "ubs_one"),
		"priority" => 30,
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, UBS_ONE_SIDEBAR_BG, array(
        'label'    => __( 'Background Color', 'ubs_one' ),
        'section'  => 'sidebar',
        'settings' => UBS_ONE_SIDEBAR_BG,
  )));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, UBS_ONE_SIDEBAR_LINK, array(
        'label'    => __( 'Link Color', 'ubs_one' ),
        'section'  => 'sidebar',
        'settings' => UBS_ONE_SIDEBAR_LINK,
  )));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, UBS_ONE_SIDEBAR_HOVER, array(
        'label'    => __( 'Link Hover Color', 'ubs_one' ),
        'section'  => 'sidebar',
        'settings' => UBS_ONE_SIDEBAR_HOVER,
  )));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, UBS_ONE_SIDEBAR_WIDGET_FG, array(
        'label'    => __( 'Widget Text Color', 'ubs_one' ),
        'section'  => 'sidebar',
        'settings' => UBS_ONE_SIDEBAR_WIDGET_FG,
  )));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, UBS_ONE_SIDEBAR_WIDGET_BG, array(
        'label'    => __( 'Widget Background Color', 'ubs_one' ),
        'section'  => 'sidebar',
        'settings' => UBS_ONE_SIDEBAR_WIDGET_BG,
  )));
	$wp_customize->add_control(UBS_ONE_SIDEBAR_WIDGET_BORDER, array(
    'type'        => 'checkbox',
    'section'     => 'sidebar',
		'settings' => UBS_ONE_SIDEBAR_WIDGET_BORDER,
    'label'       => __('Widget Border', 'ubs_one'),
  ));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, UBS_ONE_SIDEBAR_WIDGET_BORDER_COLOR, array(
        'label'    => __( 'Widget Border Color', 'ubs_one' ),
        'section'  => 'sidebar',
        'settings' => UBS_ONE_SIDEBAR_WIDGET_BORDER_COLOR,
  )));

	$wp_customize->remove_section('header_image');
}
add_action('customize_register', 'ubs_one_customize_register');

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function ubs_one_customize_preview_js() 
{
	wp_enqueue_script('ubs_one_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true);
}
add_action('customize_preview_init', 'ubs_one_customize_preview_js');