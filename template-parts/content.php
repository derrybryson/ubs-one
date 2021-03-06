<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package UBS_One
 */

$meta = get_post_meta($post->ID);
$raw_content = isset($meta[UBS_ONE_META_RAW_CONTENT]) ? $meta[UBS_ONE_META_RAW_CONTENT][0] == "Y" : false;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( 'post' == get_post_type() ) : ?>
		
		<div class="post-details">
			<i class="fa fa-user"></i> <?php the_author(); ?>
			<i class="fa fa-clock-o"></i> <time><?php the_date(); ?></time>
			
			<i class="fa fa-folder"></i> <?php the_category(', ') ?>
			<i class="fa fa-tags"></i> <?php the_tags(); ?>
			<i class="fa fa-comments"></i><a href="<?php comments_link(); ?>"> <?php comments_number( 0, 1, '%'); ?></a>
			
			<?php edit_post_link('Edit', '<i class="fa fa-pencil"></i> ', ''); ?>
		</div><!-- post-details -->
		
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if(has_post_thumbnail()) { // check for feature image ?> 
	<div class="post-image">
		<?php the_post_thumbnail(); ?>
	</div><!-- post-image -->
	<?php } ?>
	
	<div class="post-body">
		<?php if($raw_content) echo do_shortcode(get_the_content()); else the_content(); ?>
	</div><!-- post-body -->
</article><!-- #post-## -->

