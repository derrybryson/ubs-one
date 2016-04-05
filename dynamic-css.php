<?php
$fg_color = ubs_one_get_theme_mod(UBS_ONE_FG_COLOR);
$bg_color = ubs_one_get_theme_mod(UBS_ONE_BG_COLOR);
$bg_image = ubs_one_get_theme_mod(UBS_ONE_BG_IMAGE);
$bg_fixed = ubs_one_get_theme_mod(UBS_ONE_BG_FIXED);
$text_family = ubs_one_get_theme_mod(UBS_ONE_TEXT_FAMILY);
$text_size = intval(ubs_one_get_theme_mod(UBS_ONE_TEXT_SIZE));
$custom_css = ubs_one_get_theme_mod(UBS_ONE_CUSTOM_CSS);
	
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

$footer_bg = ubs_one_get_theme_mod(UBS_ONE_FOOTER_BG);
$footer_fg = ubs_one_get_theme_mod(UBS_ONE_FOOTER_FG);
$footer_link = ubs_one_get_theme_mod(UBS_ONE_FOOTER_LINK);
$footer_hover = ubs_one_get_theme_mod(UBS_ONE_FOOTER_HOVER);

$post_fg = ubs_one_get_theme_mod(UBS_ONE_POST_FG);
$post_bg = ubs_one_get_theme_mod(UBS_ONE_POST_BG);
$post_link = ubs_one_get_theme_mod(UBS_ONE_POST_LINK);
$post_hover = ubs_one_get_theme_mod(UBS_ONE_POST_HOVER);
$post_border = ubs_one_get_theme_mod(UBS_ONE_POST_BORDER);
$post_border_color = ubs_one_get_theme_mod(UBS_ONE_POST_BORDER_COLOR);

$page_fg = ubs_one_get_theme_mod(UBS_ONE_PAGE_FG);
$page_bg = ubs_one_get_theme_mod(UBS_ONE_PAGE_BG);
$page_link = ubs_one_get_theme_mod(UBS_ONE_PAGE_LINK);
$page_hover = ubs_one_get_theme_mod(UBS_ONE_PAGE_HOVER);
$page_border = ubs_one_get_theme_mod(UBS_ONE_PAGE_BORDER);
$page_title_image = ubs_one_get_theme_mod(UBS_ONE_PAGE_TITLE_IMAGE);
$page_title_image_fixed = ubs_one_get_theme_mod(UBS_ONE_PAGE_TITLE_IMAGE_FIXED);
$page_title_height = intval(ubs_one_get_theme_mod(UBS_ONE_PAGE_TITLE_HEIGHT));
$page_title_text_size = intval(ubs_one_get_theme_mod(UBS_ONE_PAGE_TITLE_TEXT_SIZE));
$page_title_text_family = ubs_one_get_theme_mod(UBS_ONE_PAGE_TEXT_FAMILY);
$page_title_text_weight = ubs_one_get_theme_mod(UBS_ONE_PAGE_TITLE_TEXT_WEIGHT);
$page_title_text_style = ubs_one_get_theme_mod(UBS_ONE_PAGE_TITLE_TEXT_STYLE);
$page_title_fg = ubs_one_get_theme_mod(UBS_ONE_PAGE_TITLE_FG);
$page_title_bg = ubs_one_get_theme_mod(UBS_ONE_PAGE_TITLE_BG);
$page_title_bg_trans = ubs_one_get_theme_mod(UBS_ONE_PAGE_TITLE_BG_TRANS);

$sidebar_bg = ubs_one_get_theme_mod(UBS_ONE_SIDEBAR_BG);
$sidebar_link = ubs_one_get_theme_mod(UBS_ONE_SIDEBAR_LINK);
$sidebar_hover = ubs_one_get_theme_mod(UBS_ONE_SIDEBAR_HOVER);
$sidebar_widget_fg = ubs_one_get_theme_mod(UBS_ONE_SIDEBAR_WIDGET_FG);
$sidebar_widget_bg = ubs_one_get_theme_mod(UBS_ONE_SIDEBAR_WIDGET_BG);
$sidebar_widget_border = ubs_one_get_theme_mod(UBS_ONE_SIDEBAR_WIDGET_BORDER);
$sidebar_widget_border_color = ubs_one_get_theme_mod(UBS_ONE_SIDEBAR_WIDGET_BORDER_COLOR);

?>
<style>	
/* This is the dynamic css */
	
body
{
	<?php if($text_family != '') { ?>
  font-family: <?php echo $text_family; ?>;
	<?php } ?>
  font-size: <?php echo $text_size; ?>px;
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
/*  margin-bottom: 20px; */
}

<?php } else if($header_type == "static") { ?>

body 
{
/*  min-height: 2000px; */
}

.ubs-one-header .navbar-static-top 
{
  min-height: <?php echo $header_height; ?>px;
  margin-bottom: 19px;
}

<?php } else if($header_type == "fixed") { ?>

body 
{
/*  min-height: 2000px; */
  <?php if(is_admin_bar_showing()) { ?>
  padding-top: <?php printf("%dpx", $header_height); ?>;
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
  
#primary 
{
	margin-top: 20px;	
}
	
/* === BLOG === */

.post, #comments {
	position: relative;
  color: <?php echo $post_fg; ?>;
	background-color: <?php echo $post_bg; ?>;
	margin: 0 0 40px;
  <?php if($post_border): ?>
	border: solid 1px <?php echo $post_border_color; ?>;
  <?php else: ?>
  border: none;
  <?php endif; ?>
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}

.post header,
.post .post-excerpt,
.post .post-body,
#comments .comments-wrap {
	padding: 20px;
}

.post header h1,
.post header h3 {
	margin: 0 0 15px;
	padding: 0 0 15px;
	border-bottom: solid 1px <?php echo $post_fg; ?>;
}

.post header h1 {
	font-size: 24px;
}

.post-image img {
	height: auto;
}

.post-details {
	font-size: 12px;
	width: 90%;
}

.post-details i.fa,
.post-details a 
{
	padding-left: 10px;
}

.post-details i.fa:first-child {
	padding: 0;
}
  
.post a 
 {
   color: <?php echo $post_link; ?>;   
 }
  
.post a:hover
{
  color: <?php echo $post_hover; ?>;    
}

.post #comments 
{
  padding: 20px;
	position: relative;
  color: <?php echo $post_fg; ?>;
	background-color: <?php echo $post_bg; ?>;
	margin: 0 0 40px;
  <?php if($post_border): ?>
	border: solid 1px <?php echo $post_border_color; ?>;
  <?php else: ?>
  border: none;
  <?php endif; ?>
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}
  
/* === PAGE === */

#page-title-bg
{
  <?php if($page_title_image != ''): ?>
  background: url('<?php echo $page_title_image; ?>') 50% 0 repeat <?php echo $page_title_image_fixed ? "fixed" : "scroll"; ?>;
	<?php else: ?>
  background-color: <?php echo $page_title_bg_trans ? "transparent" : $page_title_bg; ?>;
	<?php endif; ?>
  min-height: <?php echo $page_title_height; ?>px;
  width: 100%;
  position: relative;
  padding: 10px 0 10px 0;
	margin: 0;
  display: table;
}
	
#page-title
{
  display: table;
  vertical-align: middle;
  text-align: left;
  height: 100%;
  color: <?php echo $page_title_fg; ?>;
  min-height: <?php echo $page_title_height; ?>px;
}
	
#page-title h1 
{
  display: table-cell;
  vertical-align: middle;
  text-align: left;
	<?php if($page_title_text_family != ''): ?>
	font-family: <?php echo $page_title_text_family; ?>;
	<?php endif; ?>
  font-size: <?php echo $page_title_text_size; ?>px;
  font-weight: <?php echo $page_title_text_weight; ?>;
	font-style: <?php echo $page_title_text_style; ?>;
  color: <?php echo $page_title_fg; ?>;
	margin: 0px;
}
	
#primary .page 
{
  padding: 20px;
	position: relative;
  color: <?php echo $page_fg; ?>;
	background-color: <?php echo $page_bg; ?>;
	margin: 0 0 40px;
  <?php if($page_border): ?>
	border: solid 1px <?php echo $page_border_color; ?>;
  <?php else: ?>
  border: none;
  <?php endif; ?>
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}

#primary .page header
{  
	padding: 20px;
}

#primary .page-image img {
	height: auto;
}

#primary .page a 
 {
   color: <?php echo $page_link; ?>;   
 }
  
#primary .page a:hover
{
  color: <?php echo $page_hover; ?>;    
}

.page #comments 
{
  padding: 20px;
	position: relative;
  color: <?php echo $page_fg; ?>;
	background-color: <?php echo $page_bg; ?>;
	margin: 0 0 40px;
  <?php if($page_border): ?>
	border: solid 1px <?php echo $page_border_color; ?>;
  <?php else: ?>
  border: none;
  <?php endif; ?>
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}

  /* === WIDGETS === */

.widget {
	padding: 20px;
	position: relative;
  color: <?php echo $sidebar_widget_fg; ?>;
	background-color: <?php echo $sidebar_widget_bg; ?>;
	margin: 0 0 20px;
  <?php if($sidebar_widget_border): ?>
	border: solid 1px <?php echo $sidebar_widget_border_color; ?>;
  <?php else: ?>
  border: none;
  <?php endif; ?>
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}

.widget h4 {
	margin: 0 0 10px;
	padding: 0 0 10px;
	border-bottom: solid 1px <?php echo $sidebar_widget_border_color; ?>;
}

.widget ul {
	list-style: none;
	margin: 0;
	padding: 0;
}

.widget ul li {
	margin: 0 0 5px;
}

.widget ul li:hover {
	position: relative;
	left: 1px;
}
  
.widget ul li a
{
  color: <?php echo $sidebar_link; ?>;  
}
  
.widget ul li a:hover
{
  color: <?php echo $sidebar_hover; ?>;    
}

/* === COMMENTS === */

#comments .comments-wrap {
	padding: 20px;
}

#comments h3 {
	text-align: center;
}

#comments h4 {
	font-size: 1.3em;
}

#comments ol {
	list-style: none;
	padding: 0;
	margin: 0;
}

#comments ol li {
	background: rgba(0,0,0,0.02);
	padding: 10px 20px;
	margin: 10px 0;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	border: solid 1px rgba(0,0,0,0,0.03);
}

#comments ol li ol.children {
	padding: 0;
	list-style: none;
	font-size: 0.96em;
}

#leave-comment {
	margin: 40px 0 0;
	padding: 20px 0 0;
	border-top: solid 1px #eee;
}

/* specific WordPress comment styles */
#comments footer {
	background: none;
	color: inherit;
}

#comments footer a {
	color: inherit;
}

#comments .comment-metadata {
	margin: 10px 0 0;
}

.footer
{
  color: <?php echo $footer_fg; ?>;
  background-color: <?php echo $footer_bg; ?>;
}
  
.footer .widget 
{
	padding: 20px;
  color: <?php echo $footer_fg; ?>;
  background-color: <?php echo $footer_bg; ?>;
	position: relative;
	border: none;
	margin: 0 0 20px;
}

.footer .widget h4 {
	margin: 0 0 10px;
	padding: 0 0 10px;
	border-bottom: none;
}

.footer .widget ul {
	list-style: none;
	margin: 0;
	padding: 0;
}

.footer .widget ul li {
	margin: 0 0 5px;
}

.footer .widget ul li:hover {
	position: relative;
	left: 1px;
}
  
.footer a
{
  color: <?php echo $footer_link; ?>;    
}
  
.footer a:hover
{
  color: <?php echo $footer_hover; ?>;
}
  
</style>
<?php if($custom_css != ''): ?>
<style><?php echo $custom_css; ?></style>
<?php endif; ?>