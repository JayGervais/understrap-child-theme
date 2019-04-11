<?php
/**
 * Template Name: About Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>


<div class="site-section">
	<div class="project-padding">
      <div class="container">
        <div class="row mb-5">

          <div class="col-md-5 ml-auto mb-5 order-md-2">
          	<div class="animation-element slide-right">
            <img src="http://localhost:8888/consolidatedenvironmental/wp-content/uploads/2019/02/zach-vessels-1321477-unsplash.jpg" alt="Image" class="img-fluid">
          </div>
      	  </div>


          <div class="col-md-6 order-md-1">
          	<div class="animation-element slide-up">
            <div class="text-left pb-1 border-primary mb-4">
              <h2>Our History</h2>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis deleniti reprehenderit animi est eaque corporis! Nisi, asperiores nam amet doloribus, soluta ut reiciendis. Consequatur modi rem, vero eos ipsam voluptas.</p>
            <p>Error minus sint nobis dolor laborum architecto, quaerat. Voluptatum porro expedita labore esse velit veniam laborum quo obcaecati similique iusto delectus quasi!</p>

          </div>
      	</div>
          
        </div>
      </div>
    </div>
</div>


<div class="wrapper about-page" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'page' ); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php get_footer(); ?>
