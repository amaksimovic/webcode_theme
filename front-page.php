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

			global $post;
			$args = array(
					'posts_per_page'   => 5,
					'offset'           => 0,
					'cat'         		 => '',
					'category_name'    => '',
					'orderby'          => 'date',
					'order'            => 'DESC',
					'include'          => '',
					'post__not_in'     => array(get_the_id(5)),
					'post_type'        => 'page'
					);

			$mypages = get_posts( $args );
			foreach ( $mypages as $post ) :
			  setup_postdata( $post ); ?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_content(); ?>
			<?php endforeach;
			wp_reset_postdata(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
