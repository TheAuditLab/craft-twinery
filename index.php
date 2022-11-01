<?php
get_header();
echo '<div class="container">';
if ( have_posts() ) : while ( have_posts() ) : the_post();
get_template_part( 'entry' );
comments_template();
endwhile; endif;
echo '</div>';

get_template_part( 'nav', 'below' );
get_footer();