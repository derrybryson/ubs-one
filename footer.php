<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package UBS_One
 */

?>

<footer class="footer">
	<div class="container footer">
		<div class="row">
			<div class="col-sm-3">
				<?php dynamic_sidebar( 'sidebar-3' ); ?>
			</div>
			<div class="col-sm-3">
				<?php dynamic_sidebar( 'sidebar-4' ); ?>
			</div>
			<div class="col-sm-3">
				<?php dynamic_sidebar( 'sidebar-5' ); ?>
			</div>
			<div class="col-sm-3">
				<?php dynamic_sidebar( 'sidebar-6' ); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<p><?php echo ubs_one_get_theme_mod(UBS_ONE_FOOTER_TEXT); ?></p>
			</div>
		</div><!-- row -->
	</div><!-- container -->
</footer>

<?php wp_footer(); ?>

</body>
</html>