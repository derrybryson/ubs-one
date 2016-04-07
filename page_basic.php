<?php
/**
 * Template Name: UBS One Basic 
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package UBS_One
 */

get_header();
while(have_posts())
{
  the_post();
  echo do_shortcode(get_the_content());
}
get_footer();
?>
