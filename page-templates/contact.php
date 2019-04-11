<?php
/**
 * Template Name: Contact Page
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

  <div class="site-section bg contact-background">
    <div class="container">
      <div class="row">
        <div class="col-md-7 mb-5">

          <div class="animation-element slide-up">
            <div class="p-4 mb-3 bg contact">
              <?php the_field('contact_form'); ?>
            </div>
          </div>

        </div>
          <div class="col-md-5">
            
            <div class="animation-element slide-up">
              <div class="p-4 mb-3 bg contact">
                <?php the_field('contact_details'); ?>
              </div>
            </div>
              
            <div class="animation-element slide-up">
              <div class="p-4 mb-3 bg contact">
                <p class="hideme"><?php the_field('contact_more_info'); ?></p>
                <p><a href="<?php the_field('contact_cta_button_url'); ?>" class="btn btn-primary btn-xl js-scroll-trigger text-dark hideme"><?php the_field('contact_cta'); ?></a></p>
              </div>
            </div>

          </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
