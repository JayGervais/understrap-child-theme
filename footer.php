<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper bg-black font-small" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="copyright">
		<div class="row">
			<div class="col-lg-8 col-md-12">
			<footer class="site-footer" id="colophon">
			<div class="site-info">
					<span class="text-white-50 copyright">
					<?php echo "Copyright © 2019 Consolidated Environmental Services | <a href='http://blackcatcreative.ca' rel='nofollow'><span class='bclink'>Site by Black Cat Creative</span></a> | <a href='http://localhost:8888/consolidatedenvironmental/privacy-policy/' class='text-light footer-privacy'>Privacy Policy</a>"; ?> 
					</span>
				</div><!-- .site-info -->
			</div>
			<div class="col-lg-4 col-md-12 text-right">
					<div class="social-icons">
						<a href="https://www.facebook.com/Consolidated-Environmental-Services-2642946002584908/"><i class="fa fa-2x fa-facebook"></i></a>
						<a href="#"><i class="fa fa-2x fa-instagram"></i></a>
					</div>
				</div>
			</div>
			</footer><!-- #colophon -->		</div><!-- row end -->

	</div><!-- container end -->
</div><!-- wrapper end -->
</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>
</html>

