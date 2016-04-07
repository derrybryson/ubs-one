<?php
/**
 * Template Name: UBS One Blank
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package UBS_One
 */

ubs_one_set_show_header_footer(false);

get_header();
while(have_posts())
{
  the_post();
  echo do_shortcode(get_the_content());
}
get_footer();
?>
