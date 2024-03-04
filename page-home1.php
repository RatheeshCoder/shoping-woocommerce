<?php /* Template Name: home 1 Template */ ?>

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
	get_template_part( 'templates/template-home1' );
endwhile;

get_template_part("footer1");

