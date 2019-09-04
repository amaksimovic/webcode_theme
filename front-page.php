<?php
/**
 * Template name: Home
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebCode
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php

			$args = array(
				'post_type'   	=> 'page',
				'post__not_in' => array('5')
			);

			$wc_pages = new WP_Query( $args );

			if ($wc_pages->have_posts()) :
					while ($wc_pages->have_posts()) : $wc_pages->the_post();?>
							<section id="page-<?php echo ++$i; ?>"><?php the_content(); ?></section>
					<?php endwhile;
			endif;
			wp_reset_postdata();

		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
