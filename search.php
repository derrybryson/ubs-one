<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package UBS_One
 */

get_header();
get_template_part('template-parts/title', 'search');
get_template_part('template-parts/header', 'search');
get_template_part('template-parts/loop', 'search');
get_template_part('template-parts/footer', 'search');
get_footer();
?>