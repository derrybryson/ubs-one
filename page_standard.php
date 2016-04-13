<?php
/**
 * Template Name: UBS One Standard
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package UBS_One
 */

get_header();
if(have_posts())
{
  the_post();
  get_template_part('template-parts/header', 'page');
  echo do_shortcode(get_the_content());
  get_template_part('template-parts/footer', 'page');
}
get_footer();
?>
