<?php
/**
 * Template Name: UBS One Basic w/Title 
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package UBS_One
 */

get_header();
while(have_posts())
{
  the_post();
  get_template_part('template-parts/title', 'page');
  echo do_shortcode(get_the_content());
}
get_footer();
?>
