<?php
/**
 * Template Name: UBS One Basic 
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package UBS_One
 */

error_log("is_front_page = " . print_r(is_front_page(), true) . ", page = " . get_query_var('page'));
get_header();
while(have_posts())
{
  the_post();
  echo do_shortcode(get_the_content());
}
get_footer();
?>
