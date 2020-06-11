<?php
get_header(); ?>
  
<div id="primary" class="content-area">
  <div class="container">
  
					<?php

					if ( have_posts() ) {

						while ( have_posts() ) {
							the_post();

							get_template_part( 'template-parts/content', get_post_type() );
						}
					}

					?>
  
  </div>
</div>
  
<?php get_footer(); ?>