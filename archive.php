<?php
/**
 * The archive template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package UBS_One
 */

get_header();
get_template_part('template-parts/title', 'archive');
get_template_part('template-parts/header', 'archive');
get_template_part('template-parts/loop', 'archive');
get_template_part('template-parts/footer', 'archive');
get_footer();
?>