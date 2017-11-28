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
					
			<div class="c-homepage-banner__banner-heading-inner">
				<div class="c-homepage-banner__banner-heading">
					<h1>Welcome to AGI Solicitors</h1>
					<a href="/about-us" class="o-button o-button__white">Find out more</a>
				</div>
			
				<div class="c-homepage-banner__banner-extra hidden-xs">
					<ul>
						<li>UK & International clients</li>
						<li>Extensive local knowledge</li>
						<li>Business and personal legal advice</li>
					</ul>
			 	</div>
			
			</div>
		</div>
	
		
		<div class="c-homepage-banner__slider js-homepage-slider">
			<div>
				<img src="<?php bloginfo('template_directory'); ?>/dist/images/hp-hero-manchester_2x.jpg" alt="Manchester Tram">
			</div>
			<div>
				<img src="<?php bloginfo('template_directory'); ?>/dist/images/hp-hero-hongkong_2x.jpg" alt="Manchester Tram">
			</div>
			<div>
				<img src="<?php bloginfo('template_directory'); ?>/dist/images/hp-hero-dubai_2x.jpg" alt="Manchester Tram">
			</div>

		</div>
	
		<div class="c-homepage-banner__banner-bottom-row">
			
			<a href="/about-us" class="c-homepage-banner__banner-feature green">
				<h2>About Us</h2>
			</a>
			<a href="/services" class="c-homepage-banner__banner-feature red">
				<h2>Our services</h2>
			</a>
			<a href="/funding" class="c-homepage-banner__banner-feature blue">
				<h2>Funding</h2>
			</a>
			<a href="contact" class="c-homepage-banner__banner-feature orange">
				<h2>Contact us</h2>
			</a>
	
			
		</div>	
	</section>
	
</div>

<?php get_template_part( 'template-parts/partials/cta' ); ?>

<?php get_template_part( 'template-parts/partials/services-grid' ); ?>

<?php get_template_part( 'template-parts/partials/funding-cta' ); ?>

<?php get_footer(); ?>
