<?php
get_template_part("./header1");


while ( have_posts() ) :
	the_post(); 
	get_template_part( 'templates/template-home1' );
endwhile;



get_template_part("./footer1");
?>