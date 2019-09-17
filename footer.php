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

	<footer id="colophon" class="site-footer">

		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div id="footer-title">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo1.png" alt="logo" class="img-fluid">
					</div><!-- #footer-title -->
					<p>We have been on web marketing for 12 years helping you compete on Internet and converting your visitors</p>
					<table id="footer-contact">
	          <tr>
							<td><i class="fas fa-phone-alt"></i></td>
							<td><span>064 2415-928</span></td>
						</tr>
	          <tr>
							<td><i class="fas fa-map-marker-alt"></i></td>
							<td><span>Bogoljuba Čukića 44</span></td>
						</tr>
	          <tr>
							<td><i class="fas fa-envelope"></i></td>
							<td><span>Email: <a href="mailto:info@example.com">info@example.com</a></span></td>
						</tr>
					</table><!-- #footer-contact -->
					<div class="clearfix">
						<div class="footer-social float-left">
							<a href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
							<a href="" target="_blank"><i class="fab fa-twitter"></i></a>
							<a href="" target="_blank"><i class="fab fa-instagram"></i></a>
							<a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a>
						</div><!-- .footer-social -->
					</div><!-- .clearfix -->
				</div><!-- .col-md-4 -->
				<div class="col-md-4">
					<p><b>CONTACT US</b></p>
				</div><!-- .col-md-4 -->
				<div class="col-md-4">
					<p><b>LATEST POSTS</b></p>
					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
				</div><!-- .col-md-4 -->
			</div><!-- .row -->
		</div><!-- .container -->

		<div class="site-info text-center">
			<small>Copyright &copy; <?php echo date("Y"); ?>&nbsp; |
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s', 'WebCode' ), 'WebCode', '<a href="https://github.com/amaksimovic" target="_blank">Aleksandar Maksimovic</a>' );
				?>
			</small>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
