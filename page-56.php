<?php /* Template Name: home 3 Template */ ?>

<?php
/**
 * Page Template
 *
 * @package FL- Custom Theme
 * @since FL- Custom Theme
 */

 get_template_part("header2");

while ( have_posts() ) :
	the_post(); 
	get_template_part( 'templates/template-home3' );
endwhile;

get_template_part("footer2");