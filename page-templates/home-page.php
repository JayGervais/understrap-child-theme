<?php
/**
 * Template Name: Home Page
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

	<section id="projects" class="projects-section bg-light">
    <div class="project-padding">
      <div class="container">
          
          <div class="row">
            <div class="col-lg-12 mx-auto">
              <h2 class="text-dark mb-4 text-center hideme"><?php the_field('section_one_heading'); ?></h2>

              <hr class="divider-two my-4">

              <p class="text-dark-50 text-center text-pad hideme"><?php the_field('section_one_description'); ?>
              </p>
            </div>
          </div>
          <!--<img src="<?php the_field('section_two_bottom_img'); ?>" class="img-fluid" alt="">-->
      </div>
    
	  <!-- Project One Row -->
      <div class="row justify-content-center no-gutters mb-5 mb-lg-0 bg-white">
        <div class="col-lg-6">
          <img class="img-fluid" src="<?php the_field('service_section_one_img'); ?>" alt="">
        </div>
        <div class="col-lg-6">
          <div class="bg text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <div class="animation-element slide-right">
                <h4 class="text-dark"><?php the_field('service_section_one_title'); ?></h4>
            	</div>
                <p class="mb-0 text-dark-50 hideme"><?php the_field('service_section_one_description'); ?></p>
                <hr class="d-none d-lg-block mb-0 ml-0">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Project Two Row -->
      <div class="row justify-content-center no-gutters bg-light">
        <div class="col-lg-6">
          <img class="img-fluid" src="<?php the_field('service_section_two_img'); ?>" alt="">
        </div>
        <div class="col-lg-6 order-lg-first">
          <div class="bg text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-right">
                <div class="animation-element slide-left">
                <h4 class="text-dark"><?php the_field('service_section_two_title'); ?></h4>
            	  </div>
                <p class="mb-0 text-dark-50 hideme"><?php the_field('service_section_two_description'); ?></p>
                <hr class="d-none d-lg-block mb-0 mr-0">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<section class="py-5 bg-image-full img-overlay-about" style="background-image: url('<?php the_field('background_image'); ?>');">

  <div class="container">
    <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
      <div class="col-lg-6 mx-auto">
        
      </div>
      <div class="col-lg-6">
          <div class="bg text-center h-100 project">
            <div class="d-flex h-100 overlay-text">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <div class="animation-element slide-right">
                <h4 class="text-white"><?php the_field('text_overlay_title'); ?></h4>
                </div>
                <p class="mb-0 text-white hideme"><?php the_field('text_overlay_description'); ?></p>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>

<section id="service_img_boxes">
  <div class="project-box-padding">

      <div class="row">

      <div class="col-lg-3 col-sm-6 mb-4">
        <div class="animation-element slide-up">
        <div class="card h-100">
          <a href="<?php the_field('project_box_one_url'); ?>"><img class="card-img-top" src="<?php the_field('project_box_one_image'); ?>"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="<?php the_field('project_box_one_url'); ?>" class="text-dark"><?php the_field('project_box_one_title'); ?></a>
            </h4>
            <p class="card-text"><?php the_field('project_box_one_description'); ?></p>
          </div>
        </div>
      </div>
      </div>
      <div class="col-lg-3 col-sm-6 mb-4">
        <div class="animation-element slide-up">
        <div class="card h-100">
          <a href="<?php the_field('project_box_two_url'); ?>"><img class="card-img-top" src="<?php the_field('project_box_two_image'); ?>"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="<?php the_field('project_box_two_url'); ?>" class="text-dark"><?php the_field('project_box_two_title'); ?></a>
            </h4>
            <p class="card-text"><?php the_field('project_box_two_description'); ?></p>
          </div>
        </div>
      </div>
      </div>
      <div class="col-lg-3 col-sm-6 mb-4">
        <div class="animation-element slide-up">
          <div class="card h-100">
              <a href="<?php the_field('project_box_three_url'); ?>"><img class="card-img-top" src="<?php the_field('project_box_three_image'); ?>"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="<?php the_field('project_box_three_url'); ?>" class="text-dark"><?php the_field('project_box_three_title'); ?></a>
              </h4>
              <p class="card-text"><?php the_field('project_box_three_description'); ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mb-4">
        <div class="animation-element slide-up">
          <div class="card h-100">
              <a href="<?php the_field('project_box_four_url'); ?>"><img class="card-img-top" src="<?php the_field('project_box_four_image'); ?>"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="<?php the_field('project_box_four_url'); ?>" class="text-dark"><?php the_field('project_box_four_title'); ?></a>
              </h4>
              <p class="card-text"><?php the_field('project_box_four_description'); ?></p>
            </div>
          </div>
        </div>
      </div>

    </div>

</div>
</section>

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
