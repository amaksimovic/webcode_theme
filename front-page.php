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

			<section id="main-slider">
				<?php
					$id = 9;
					$p = get_page($id);
					echo apply_filters('the_content', $p->post_content);
				?>
			</section><!-- #main-slider -->

			<section id="main-services">
				<header class="entry-header">
					<h3 class="entry-title">Our Services</h3>
					<p class="subtitle">WHAT YOU GET USING OUR SEO COMPANY'S</p>
				</header>
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-12">
						  <div class="media p-3">
						    <img src="<?php echo get_template_directory_uri(); ?>/img/serv-icn1.png" alt="service" class="mr-3 mt-3 rounded-circle" style="width:30px;">
						    <div class="media-body">
						      <h5>Content Submission</h5>
						      <p>The complex of measures to promote the site and opportunity to be profitable over the years.</p>
						    </div><!-- .media-body -->
						  </div><!-- .media -->
						</div><!-- .col-md-4 -->
						<div class="col-md-4 col-12">
						  <div class="media p-3">
						    <img src="<?php echo get_template_directory_uri(); ?>/img/serv-icn2.png" alt="service" class="mr-3 mt-3 rounded-circle" style="width:30px;">
						    <div class="media-body">
						      <h5>Real-Time Analytics</h5>
						      <p>The complex of measures to promote the site and opportunity to be profitable over the years.</p>
						    </div><!-- .media-body -->
						  </div><!-- .media -->
						</div><!-- .col-md-4 -->
						<div class="col-md-4 col-12">
						  <div class="media p-3">
						    <img src="<?php echo get_template_directory_uri(); ?>/img/serv-icn3.png" alt="service" class="mr-3 mt-3 rounded-circle" style="width:30px;">
						    <div class="media-body">
						      <h5>Local Search Strategy</h5>
						      <p>The complex of measures to promote the site and opportunity to be profitable over the years.</p>
						    </div><!-- .media-body -->
						  </div><!-- .media -->
						</div><!-- .col-md-4 -->
						<div class="col-md-4 col-12">
						  <div class="media p-3">
						    <img src="<?php echo get_template_directory_uri(); ?>/img/serv-icn4.png" alt="service" class="mr-3 mt-3 rounded-circle" style="width:30px;">
						    <div class="media-body">
						      <h5>Online Management</h5>
						      <p>The complex of measures to promote the site and opportunity to be profitable over the years.</p>
						    </div><!-- .media-body -->
						  </div><!-- .media -->
						</div><!-- .col-md-4 -->
						<div class="col-md-4 col-12">
						  <div class="media p-3">
						    <img src="<?php echo get_template_directory_uri(); ?>/img/serv-icn5.png" alt="service" class="mr-3 mt-3 rounded-circle" style="width:30px;">
						    <div class="media-body">
						      <h5>Conversion Rate</h5>
						      <p>The complex of measures to promote the site and opportunity to be profitable over the years.</p>
						    </div><!-- .media-body -->
						  </div><!-- .media -->
						</div><!-- .col-md-4 -->
						<div class="col-md-4 col-12">
						  <div class="media p-3">
						    <img src="<?php echo get_template_directory_uri(); ?>/img/serv-icn1.png" alt="service" class="mr-3 mt-3 rounded-circle" style="width:30px;">
						    <div class="media-body">
						      <h5>Local Search Strategy</h5>
						      <p>The complex of measures to promote the site and opportunity to be profitable over the years.</p>
						    </div><!-- .media-body -->
						  </div><!-- .media -->
						</div><!-- .col-md-4 -->
					</div><!-- .row -->
				</div><!-- .container -->
				<a href="#" class="btn" role="button">START NOW</a>
			</section><!-- #main-services -->

			<section id="main-portfolio">
				<header class="entry-header">
					<h3 class="entry-title">Our Portfolio</h3>
					<p class="subtitle">CHECK OUT THE WORK WE'VE DONE</p>
				</header>
				<p>SLIDER (bootstrap ili plugin) SA SKRINŠATOVIMA MOŽDA</p>
				<a href="#" class="btn" role="button">CONTACT US</a>
			</section><!-- #main-portfolio -->

			<section id="main-packages">
				<header class="entry-header">
					<h3 class="entry-title">Our Pricing Packages</h3>
					<p class="subtitle">USING OUR SEO COMPANY'S</p>
				</header>
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-12">
							<div class="card" style="width:400px">
						    <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
						    <div class="card-body">
						      <h4 class="card-title">John Doe</h4>
						      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
						      <a href="#" class="btn btn-primary">See Profile</a>
						    </div><!-- .card-body -->
						  </div><!-- .card -->
						</div><!-- .col-md-4 -->
						<div class="col-md-4 col-12">
							<div class="card" style="width:400px">
						    <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
						    <div class="card-body">
						      <h4 class="card-title">John Doe</h4>
						      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
						      <a href="#" class="btn btn-primary">See Profile</a>
						    </div><!-- .card-body -->
						  </div><!-- .card -->
						</div><!-- .col-md-4 -->
						<div class="col-md-4 col-12">
							<div class="card" style="width:400px">
						    <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
						    <div class="card-body">
						      <h4 class="card-title">John Doe</h4>
						      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
						      <a href="#" class="btn btn-primary">See Profile</a>
						    </div><!-- .card-body -->
						  </div><!-- .card -->
						</div><!-- .col-md-4 -->
					</div><!-- .row -->
				</div><!-- .container -->
			</section><!-- #main-packages -->

			<section id="main-subscribe">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-12">
							<header class="entry-header">
								<h3 class="entry-title">Subscribe to Our Newsletter</h3>
								<p class="subtitle">We have been on web marketing for 12 years helping you compete on Internet and converting your visitors</p>
							</header>
						</div><!-- .col-md-6 -->
						<div class="col-md-6 col-12">
							<p>neki input field sa search dugmetom</p>
						</div><!-- .col-md-6 -->
					</div><!-- .row -->
				</div><!-- .container -->
			</section><!-- #main-subscribe -->

			<section id="main-blog">
				<header class="entry-header">
					<h3 class="entry-title">Recent Case Studies</h3>
					<p class="subtitle">USING OUR SEO COMPANY'S</p>
				</header>
				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) :
						?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
						<?php
					endif;

					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_type() );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>

			</section><!-- #main-blog -->

			<section id="main-testemonials">

				<p>možda slider<p>
			</section><!-- #main-testemonials -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
