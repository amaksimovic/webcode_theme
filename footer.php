<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WebCode
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer text-center">
		<div class="site-info">
			<span>Copyright &copy; <?php echo date("Y"); ?>&nbsp; |
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s', 'WebCode' ), 'WebCode', '<a href="https://github.com/amaksimovic" target="_blank">Aleksandar Maksimovic</a>' );
				?>
			</span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
