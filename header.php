<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package UBS_One
 */

// Register Custom Navigation Walker
require_once('inc/wp_bootstrap_navwalker.php');
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
	
<?php wp_head();
	
$favicon = ubs_one_get_theme_mod(UBS_ONE_FAVICON);
	
if($favicon != '') { 
	if(ubs_one_endswith($favicon, ".jpg") || ubs_one_endswith($favicon, "*.jpeg"))
		$favicon_type = "image/jpeg";
	else if(ubs_one_endswith($favicon, ".png"))
		$favicon_type = "image/png";
	else if(ubs_one_endswith($favicon, ".ico"))
		$favicon_type = "image/x-icon";
?>
<link rel='shortcut icon' type='<?php echo $favicon_type; ?>' href='<?php echo $favicon; ?>' />
<?php } 
	
require_once("dynamic-css.php");	
	
/* End of header */ 
?>	
	
</head>

<body <?php body_class(); ?>>

<?php
if(ubs_one_get_show_header_footer())
{
	$header_type = get_theme_mod('header_type', 'standard');
	$logo = get_theme_mod('logo');
  if($logo)
    $brand = "<img src=\"$logo\" height=\"100%\">";
  else
    $brand = get_bloginfo('name', 'display');
?>

<div class="ubs-one-header">
<?php if($header_fixed): ?>
	<!-- Fixed navbar -->
	<nav class="navbar navbar-default navbar-fixed-top header-style header-background" id="navbar">
    <div class="ubs-one-header-primary-bg">
		<div class="container ubs-one-header-primary">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-primary" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="navbar-brand">
				  <a class="navbar-brand" href="<?php get_site_url(); ?>"><?php echo $brand; ?></a>
				</div>
			</div>
				<?php 
          if(has_nav_menu('primary'))
          {
            wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'navbar-primary',
                    'menu_class'        => 'nav navbar-nav navbar-right',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                );
          }
				?>
		</div>
    </div>
    <?php if(has_nav_menu('secondary')): ?>
    <div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-secondary" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
      </div><!-- navbar-header -->
      <?php
      wp_nav_menu( array(
              'menu'              => 'secondary',
              'theme_location'    => 'secondary',
              'depth'             => 2,
              'container'         => 'div',
              'container_class'   => 'collapse navbar-collapse',
              'container_id'      => 'navbar-secondary',
              'menu_class'        => 'nav navbar-nav',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'walker'            => new wp_bootstrap_navwalker())
          );
      ?>
    </div><!-- container -->
    <?php endif; ?>
	</nav>
<?php else: ?>	
	<!-- Static navbar -->
	<nav class="navbar navbar-default navbar-static-top header-style header-background" id="navbar">
    <div class="ubs-one-header-primary-bg">
		<div class="container ubs-one-header-primary">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-primary" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="navbar-brand">
				  <a class="navbar-brand" href="<?php get_site_url(); ?>"><?php echo $brand; ?></a>
				</div>
			</div>
				<?php 
          if(has_nav_menu('primary'))
          {
            wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'navbar-primary',
                    'menu_class'        => 'nav navbar-nav navbar-right',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                );
          }
				?>
		</div>
    </div>
    <?php if(has_nav_menu('secondary')): ?>
    <div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-secondary" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
      </div><!-- navbar-header -->
      <?php
      wp_nav_menu( array(
              'menu'              => 'secondary',
              'theme_location'    => 'secondary',
              'depth'             => 2,
              'container'         => 'div',
              'container_class'   => 'collapse navbar-collapse',
              'container_id'      => 'navbar-secondary',
              'menu_class'        => 'nav navbar-nav',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'walker'            => new wp_bootstrap_navwalker())
          );
      ?>
    </div><!-- container -->
    <?php endif; ?>
	</nav>
<?php endif; ?>
</div>
<!--<div style="height: 20px">
</div> -->
	</div>
<?php } ?>  