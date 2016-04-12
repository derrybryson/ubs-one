<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package UBS_One
 */

$meta = get_post_meta($post->ID);
$raw_content = isset($meta[UBS_ONE_META_RAW_CONTENT]) ? $meta[UBS_ONE_META_RAW_CONTENT][0] == "Y" : false;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php if($raw_content) echo do_shortcode(get_the_content()); else the_content(); ?>
		<?php
			wp_link_pages(array(
				'before' => '<div class="page-links">' . __('Pages:', 'ubs_one'),
				'after'  => '</div>',
			));
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link(__('Edit', 'ubs_one'), '<span class="edit-link">', '</span>'); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
