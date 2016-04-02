<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package UBS_One
 */

get_header(); 
ubs_one_primary_header();
while(have_posts())
{
  the_post();
	get_template_part('template-parts/content', get_post_format());
	the_post_navigation();

	// If comments are open or we have at least one comment, load up the comment template.
	if(comments_open() || get_comments_number())
		comments_template();
}
ubs_one_primary_footer();
get_footer();
