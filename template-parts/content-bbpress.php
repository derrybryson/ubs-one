<?php
/**
 * Template part for displaying page content in bbpress.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package UBS_One
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages(array(
				'before' => '<div class="page-links">' . __('Pages:', 'ubs_one'),
				'after'  => '</div>',
			));
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
