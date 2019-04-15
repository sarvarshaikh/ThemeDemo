<?php
get_headers()
if ( have_posts() ) :
	while ( have_posts() ) : the_post();?>
		<h2><?php the_title();?></h2>
		<?php the_content();
	endwhile;
else :
	echo wpautop( 'Sorry, no posts were found' );
endif;
?>