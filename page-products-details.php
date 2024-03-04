<?php /* Template Name: template-products-details */ ?>

<?php
/**
 * Page Template
 *
 * @package FL- Custom Theme
 * @since FL- Custom Theme
 */

 get_template_part("header1");

while ( have_posts() ) :
	the_post(); 
	get_template_part( 'templates/template-products-details' );
endwhile;

// get_template_part("footer1");

