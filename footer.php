<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package OnFocus
 * @since OnFocus 1.0
 */
?>

	</div><!-- #main -->
	
	<?php get_template_part('sidebar', 'footer'); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
	
		<div class="site-info">
			<?php do_action( 'OnFocus_credits' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>