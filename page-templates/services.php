<?php
/**
 * Template Name: Services Page
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

<div class="project-padding">
      <div class="container">

      <div class="row justify-content-center mb-5 hideme">
        <div class="col-md-7 text-center border-primary">
          <h2 class="font-weight-bold text-primary"><?php the_field('service_page_section_one_title'); ?></h2>
          <p class="color-black-opacity-5"><?php the_field('service_section_one_sub_title'); ?></p>
        </div>
      </div>

      <div class="row align-items-stretch">
        <div class="col-md-12 col-lg-4 mb-4 mb-lg-4 hideme">
          <div class="unit-4 d-flex">
            <div class="unit-4-icon mr-4">
              <span class="serviceicons">
                <i class="fas fa-3x fa-truck"></i>
              </span>
            </div>
            <div>
              <h3><?php the_field('icon_section_one_title'); ?></h3>
              <p><?php the_field('icon_section_one_description'); ?></p>         
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-4 mb-4 mb-lg-4 hideme">
          <div class="unit-4 d-flex">
            <div class="unit-4-icon mr-4">
              <span class="serviceicons">
                <i class="fas fa-3x fa-hand-holding-usd"></i>
              </span>
            </div>
            <div>
              <h3><?php the_field('icon_section_two_title'); ?></h3>
              <p><?php the_field('icon_section_two_description'); ?></p>         
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-4 mb-4 mb-lg-4 hideme">
          <div class="unit-4 d-flex">
            <div class="unit-4-icon mr-4">
              <span class="serviceicons">
                <i class="fas fa-3x fa-dumpster"></i>
              </span>
            </div>
            <div>
              <h3><?php the_field('icon_section_three_title'); ?></h3>
              <p><?php the_field('icon_section_three_description'); ?></p>
            </div>
          </div>
        </div>

      </div>
    </div>

  <section id="projects" class="projects-section bg-light">

  <!-- Project One Row -->
    <div class="row justify-content-center no-gutters mb-5 mb-lg-0 serviceOne">
      <div class="col-lg-6">
        <img class="img-fluid" src="<?php the_field('service_box_one_image'); ?>">
      </div>
      <div class="col-lg-6">
        <div class="bg text-center h-100">
          <div class="d-flex h-100">
            <div class="project-text w-100 my-auto text-center text-lg-left">
              <div class="animation-element slide-right">
              <h4 class="text-white"><?php the_field('service_box_one_title'); ?></h4>
          	</div>
              <p class="mb-0 text-white-50 hideme"><?php the_field('service_box_one_description'); ?></p>
              <hr class="d-none d-lg-block mb-0 ml-0">
            </div>
          </div>
        </div>
      </div>
    </div>

      <!-- Project Two Row -->
      <div class="row justify-content-center no-gutters serviceTwo">
        <div class="col-lg-6">
          <img class="img-fluid" src="<?php the_field('service_box_two_image'); ?>">
        </div>
        <div class="col-lg-6 order-lg-first">
          <div class="bg text-center h-100">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-right">
                <div class="animation-element slide-left">
                <h4 class="text-white"><?php the_field('service_box_two_title'); ?></h4>
            	  </div>
                <p class="mb-0 text-white-50 hideme"><?php the_field('service_box_two_description'); ?></p>
                <hr class="d-none d-lg-block mb-0 mr-0">
              </div>
            </div>
          </div>
        </div>
      </div>

  </section>

  </div><!-- // project padding -->


<div class="wrapper" id="full-width-page-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content">
		<div class="row">
			<div class="col-md-12 content-area hideme" id="primary">
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
