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
	<noscript><link href="no-js.css" />
		<style type="text/css">
			.hideme {
				opacity: 1;
			}
			.togglein {
				opacity: 1;
			}
			.slide-up {
				opacity: 1;
			}
		</style>
	</noscript>
</head>

<body <?php body_class(); ?> id="page-top">

<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">

		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0 js-scroll-trigger"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand js-scroll-trigger" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

						<?php endif; ?> 


					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->

				<button class="navbar-toggler navbar-toggler-right" type="button" onclick="openNav()">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div id="myNav" class="overlay">
				  <div id="navClose">
					  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				  </div>
		
				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'overlay-content',
						'container_id'    => 'myNav',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>

				</div>
				<script>
				function openNav() {
				  document.getElementById("myNav").style.height = "100%";
				}

				function closeNav() {
				  document.getElementById("myNav").style.height = "0%";
				}
				</script>

			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->
		</div><!-- #wrapper-navbar end -->

		<?php
		if( is_front_page() ) { ?>

		<header class="masthead" style="background-image: url('<?php the_field('hero_image'); ?>')">
		    <div class="container h-100">
		      <div class="row h-100 align-items-left justify-content-left text-left">
		        <div class="col-lg-10 align-self-end">
		        	<div class="animation-element slide-right">
		          <h1 class="text-white font-weight-bold"><?php the_field('slide_one_heading'); ?></h1>
		      		</div>
		          <hr class="divider my-4">
		        </div>
		        <div class="col-lg-8 align-self-baseline">
		          <p class="text-white font-weight-light mb-5 hideme"><?php the_field('slide_one_text'); ?></p>
		          <a class="btn btn-primary btn-xl js-scroll-trigger hideme" href="<?php the_field('cta_link'); ?>"><?php the_field('cta_text'); ?></a>
		        </div>
		      </div>
		    </div>
		  </header>

		  <?php 
			} else { 

			 if (has_post_thumbnail( $post->ID ) ): ?>
			  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

			<header class="masthead2" style="background-image: url('<?php echo $image[0]; ?>')">

			<?php endif; ?>	

		    <div class="container h-100">
		      <div class="row h-100 align-items-center justify-content-center text-center">
		        <div class="col-lg-10 align-self-end">
		        	<div class="animation-element hideme">
		          <h1 class="text-white font-weight-bold"><?php the_title(); ?></h1>
		      		</div>
		          <hr class="divider my-4">
		        </div>
		        <div class="col-lg-8 align-self-baseline">
		          <p class="text-white font-weight-light mb-5 hideme"><?php the_field('page_sub_title'); ?></p>
		        </div>
		      </div>
		    </div>
		  </header>
		
		<?php } 

	if( function_exists('dynamic_sidebar') ) { ?>

	<div id="intro-boxes">
		    <div class="row-boxes">
		      <div class="intro">

		        <div class="intro-grid color-1">
		          <div class="animation-element slide-up">

		          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('header-box-one') ) : 
					endif; ?>

		        </div>
		        </div>
		        <div class="intro-grid color-2">
		          <div class="animation-element slide-up">
		          
		          	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('header-box-two') ) : 
					endif; ?>

		        </div>
		        </div>
		        <div class="intro-grid color-3">
		          <div class="animation-element slide-up">
			          
		          	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('header-box-three') ) : 
					endif; ?>

		        </div>
		        </div>

		      </div>
		    </div>
		  </div>

		<?php } else {
			echo "";
		}


		?>
