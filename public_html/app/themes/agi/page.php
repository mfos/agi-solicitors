<?php
/**
 * The template for displaying all pages.
 *
 *
 * @package agi-wp-project
 */

get_header(); ?>


<div class="l-wrapper l-wrapper--internal-page">
    
				<?php // Show the selected frontpage content.
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/page/content', 'page' );
					endwhile;
				else : // I'm not sure it's possible to have no posts when this page is shown, but WTH.
					get_template_part( 'template-parts/post/content', 'none' );
				endif; ?>


</div>
<!-- End page-wrapper -->

<?php get_footer(); ?>