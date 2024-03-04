<?php /* Template Name: men/template-women-dresses */ ?>

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
	get_template_part( 'templates/men/template-men-watch-shop' );
endwhile;

get_template_part("footer1");

