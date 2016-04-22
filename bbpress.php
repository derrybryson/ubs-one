<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package UBS_One
 */

get_header();
while(have_posts())
{
  the_post();
  error_log("BBPRESS post type = " . get_post_type());
  get_template_part('template-parts/title', 'bbpress');
  get_template_part('template-parts/header', 'page');
  get_template_part('template-parts/content', 'bbpress');
  get_template_part('template-parts/footer', 'page');
}
get_footer();
?>
