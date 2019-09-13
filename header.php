<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WebCode
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://kit.fontawesome.com/deed06ce8e.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'webcode' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-12 clearfix">
						<div class="header-social float-left">
							<a href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
							<a href="" target="_blank"><i class="fab fa-twitter"></i></a>
							<a href="" target="_blank"><i class="fab fa-instagram"></i></a>
							<a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a>
						</div><!-- .header-social -->
						<div class="header-offer float-right">
							<a href="">TOP PONUDA</a>
						</div><!-- .header-offer -->
						<ul class="header-contact float-right">
							<li><i class="fas fa-phone-alt"></i> 064 2415-928</li>
							<li><i class="fas fa-map-marker-alt"></i> Bogoljuba Čukića 44</li>
						</ul><!-- .header-contact -->
					</div>
				</div>
			</div>
		</div><!-- .header-top -->
		<div class="header-bottom">
			<div class="container">
				<div class="row">
					<div class="col-12 clearfix">
						<div class="header-title float-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo" class="img-fluid" width="150">
						</div><!-- .header-title -->
						<nav id="site-navigation" class="main-navigation float-right">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'webcode' ); ?></button>
							<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
							?>
						</nav><!-- #site-navigation -->
					</div>
				</div>
			</div>
		</div><!-- .header-bottom -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
