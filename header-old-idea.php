<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">

		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

						<?php endif; ?>


					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->


		<?php
		if( is_front_page() ) { ?>




		<!-- Carousel -->
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	    <ol class="carousel-indicators">
	      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	    </ol>
	    
	    <div class="carousel-inner" role="listbox">
	      <!-- Slide One - Set the background image for this slide in the line below -->
	      <div class="carousel-item active" style="background-image: url('<?php the_field('slide_one_image'); ?>')">
	        <div class="carousel-caption text-right">
	          <h2 class="display-4"><?php the_field('slide_one_heading'); ?></h2>
	          <p class="lead"><?php the_field('slide_one_text'); ?></p>
	        </div>
	      </div>
	      <!-- Slide Two - Set the background image for this slide in the line below -->
	      <div class="carousel-item" style="background-image: url('<?php the_field('slide_two_image'); ?>'); ?>')">
	        <div class="carousel-caption text-right">
	          <h2 class="display-4"><?php the_field('slide_two_heading'); ?></h2>
	          <p class="lead"><?php the_field('slide_two_text'); ?></p>
	        </div>
	      </div>
	      <!-- Slide Three - Set the background image for this slide in the line below -->
	      <div class="carousel-item" style="background-image: url('<?php the_field('slide_three_image'); ?>'); ?>')">
	        <div class="carousel-caption text-right">
	          <h2 class="display-4"><?php the_field('slide_three_heading'); ?></h2>
	          <p class="lead"><?php the_field('slide_three_text'); ?></p>
	        </div>
	      </div>
	    </div>
	    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	          <span class="sr-only">Previous</span>
	        </a>
	    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	          <span class="carousel-control-next-icon" aria-hidden="true"></span>
	          <span class="sr-only">Next</span>
	        </a>
	  </div>


	  <?php 
	} else {
		echo "";
	}

	  ?>

	</div><!-- #wrapper-navbar end -->
