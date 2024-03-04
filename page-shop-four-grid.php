<?php /* Template Name: template-shop-four-grid  */ ?>

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
	get_template_part( 'templates/template-shop-four-grid' );
endwhile;

// get_template_part("footer1");

