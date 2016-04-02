<?php
$fg_color = ubs_one_get_theme_mod(UBS_ONE_FG_COLOR);
$bg_color = ubs_one_get_theme_mod(UBS_ONE_BG_COLOR);
$bg_image = ubs_one_get_theme_mod(UBS_ONE_BG_IMAGE);
$bg_fixed = ubs_one_get_theme_mod(UBS_ONE_BG_FIXED);
$text_family = ubs_one_get_theme_mod(UBS_ONE_TEXT_FAMILY);
$text_size = intval(UBS_ONE_TEXT_SIZE);
	
$header_type = ubs_one_get_theme_mod(UBS_ONE_HEADER_TYPE);
$header_border = ubs_one_get_theme_mod(UBS_ONE_HEADER_BORDER);
$header_border_color = ubs_one_get_theme_mod(UBS_ONE_HEADER_BORDER_COLOR);
$header_height = intval(ubs_one_get_theme_mod(UBS_ONE_HEADER_HEIGHT));
$header_bg = ubs_one_get_theme_mod(UBS_ONE_HEADER_BG);
$header_fg = ubs_one_get_theme_mod(UBS_ONE_HEADER_FG);
$header_hover_fg = ubs_one_get_theme_mod(UBS_ONE_HEADER_HOVER_FG);
$header_hover_bg = ubs_one_get_theme_mod(UBS_ONE_HEADER_HOVER_BG);
$header_active_fg = ubs_one_get_theme_mod(UBS_ONE_HEADER_ACTIVE_FG);
$header_active_bg = ubs_one_get_theme_mod(UBS_ONE_HEADER_ACTIVE_BG);
$header_logo_text_size = intval(ubs_one_get_theme_mod(UBS_ONE_HEADER_LOGO_TEXT_SIZE));
$header_logo_text_family = ubs_one_get_theme_mod(UBS_ONE_HEADER_LOGO_TEXT_FAMILY);
$header_logo_text_weight = ubs_one_get_theme_mod(UBS_ONE_HEADER_LOGO_TEXT_WEIGHT);
$header_logo_text_style = ubs_one_get_theme_mod(UBS_ONE_HEADER_LOGO_TEXT_STYLE);
?>
<style>	
/* This is the dynamic css */
	
body
{
	<?php if($text_family != '') { ?>
  font-family: <?php $text_family; ?>;
	<?php } ?>
  font-size: <?php $text_size; ?>;
  background-color: <?php echo $bg_color; ?>;
  color: <?php echo $fg_color; ?>;
  <?php if($bg_image != '') { ?>
  background-image: url(<?php echo $bg_image; ?>);
  background-repeat: repeat;
  background-position: left top;
  background-attachment: <?php echo $bg_fixed ? "fixed" : "scroll"; ?>;
  <?php } ?>
}

<?php if($header_type == "standard") { ?>

body 
{
  padding-top: 20px;
  padding-bottom: 20px;
}

.ubs-one-header .navbar 
{
  min-height: <?php echo $header_height; ?>px;
  margin-bottom: 20px;
}

<?php } else if($header_type == "static") { ?>

body 
{
  min-height: 2000px;
}

.ubs-one-header .navbar-static-top 
{
  min-height: <?php echo $header_height; ?>px;
  margin-bottom: 19px;
}

<?php } else if($header_type == "fixed") { ?>

body 
{
  min-height: 2000px;
  <?php if(is_admin_bar_showing()) { ?>
  padding-top: <?php printf("%dpx", $header_height + 32); ?>;
  <?php } else { ?>
  padding-top: <?php printf("%dpx", $header_height); ?>;
  <?php } ?>
}

<?php if(is_admin_bar_showing()) { ?>
.ubs-one-header .navbar
{
  margin-top: 32px;
}
<?php } ?>

.ubs-one-header .navbar-fixed-top 
{
  min-height: <?php echo $header_height; ?>px;
}

<?php } ?>
	
.ubs-one-header
{
	font-family: <?php echo $header_logo_text_family; ?>;
}

.ubs-one-header div.navbar-brand
{
  min-height: <?php echo $header_height; ?>px;
  display: table-cell;
  vertical-align: middle;
  padding: 0px;
}

.ubs-one-header a.navbar-brand,
.ubs-one-header a.navbar-brand:hover
{
  color: <?php echo $header_fg; ?>;
  font-size: <?php echo $header_logo_text_size; ?>px;
	font-weight: <?php echo $header_logo_text_weight; ?>;
	font-style: <?php echo $header_logo_text_style; ?>;
  line-height: 1.0;
}

.ubs-one-header .navbar-nav 
{
  min-height: <?php echo $header_height; ?>px;
}

.ubs-one-header .navbar-nav > li > a 
{
  color: <?php echo $header_fg; ?>;
  background-color: <?php echo $header_bg; ?>;
/*  min-height: <?php echo $header_height; ?>px; */
}

.ubs-one-header .navbar-nav > li > a:active,
.ubs-one-header .navbar-nav > .active > a
{
  color: <?php echo $header_active_fg; ?>;
  background-color: <?php echo $header_active_bg; ?>;
}

.ubs-one-header .navbar-nav > li > a:hover, 
.ubs-one-header .navbar-nav > .active > a:hover
{
  color: <?php echo $header_hover_fg; ?>;
  background-color: <?php echo $header_hover_bg; ?>;
}

.header-style
{
  color: <?php echo $header_fg; ?>;
  <?php if(!$header_border) { ?>
  border: 0px;
	<?php } else { ?>
	border-color: <?php echo $header_border_color; ?>;
  <?php } ?>
  <?php if(!$header_shadow) { ?>
  box-shadow: none;
  <?php } ?>
}

.header-background
{
  background-color: <?php echo $header_bg; ?>;
  background-image: none;
}
</style>