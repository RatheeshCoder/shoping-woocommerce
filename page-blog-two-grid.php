<?php /* Template Name: blog-two-grid  */ ?>

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
	get_template_part( 'templates/template-blog-two-grid' );
endwhile;

get_template_part("footer1");

