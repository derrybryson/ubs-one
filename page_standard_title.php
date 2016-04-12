<?php
/**
 * Template Name: UBS One Standard w/Title
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
  get_template_part('template-parts/content', 'header');
  echo do_shortcode(get_the_content());
  get_template_part('template-parts/content', 'footer');
}
get_footer();
?>
