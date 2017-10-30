<?php
/**
 * The template for displaying all pages.
 *
 *
 * @package agi-wp-project
 */

get_header(); ?>



<div class="c-homepage-banner">
	<section>
		<div class="c-homepage-banner__banner-top-row">
			
			<div class="c-homepage-banner__banner-heading">
				<h1>A local law firm with national and international expertise</h1>
				<a href="/" class="o-button o-button__white">Find out more</a>
			</div>
		
			<div class="c-homepage-banner__banner-extra hidden-xs">
				<ul>
					<li>UK & International clients</li>
					<li>Extensive local knowledge</li>
					<li>Business and personal legal advice</li>
				</ul>
		 	</div>
			
		</div>
	
		
		<div class="c-homepage-banner__slider js-homepage-slider">
			<div>
				<img src="<?php bloginfo('template_directory'); ?>/dist/images/hp-hero-manchester.jpg" alt="Manchester Tram">
			</div>
			<div>
				<img src="<?php bloginfo('template_directory'); ?>/dist/images/hp-hero-manchester.jpg" alt="Manchester Tram">
			</div>
			<div>
				<img src="<?php bloginfo('template_directory'); ?>/dist/images/hp-hero-manchester.jpg" alt="Manchester Tram">
			</div>
		</div>
	
		<div class="c-homepage-banner__banner-bottom-row">
			
			<a href="" class="c-homepage-banner__banner-feature green">
				<h2>About Us</h2>
				<p>A local law firm with national and international expertise.</p>
			</a>
			<a href="" class="c-homepage-banner__banner-feature red">
				<h2>Our services</h2>
				<p>A local law firm with national and international expertise.</p>
			</a>
			<a href="" class="c-homepage-banner__banner-feature blue">
				<h2>Funding</h2>
				<p>A local law firm with national and international expertise.</p>
			</a>
			<a href="" class="c-homepage-banner__banner-feature orange">
				<h2>Contact us</h2>
				<p>A local law firm with national and international expertise.</p>
			</a>
	
			
		</div>	
	</section>
	
</div>

<div class="page-wrapper">
    
    <div class="container">
	    
    
    
		<?php // Show the selected frontpage content.
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/page/content', 'front-page' );
			endwhile;
		else : // I'm not sure it's possible to have no posts when this page is shown, but WTH.
			get_template_part( 'template-parts/post/content', 'none' );
		endif; ?>
    </div>

</div>
<!-- End page-wrapper -->

<?php get_footer(); ?>
