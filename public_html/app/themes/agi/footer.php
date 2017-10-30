<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package agi-wp-project
 */

?>	

<div class="c-site-footer l-wrapper">
	<div class="l-wrapper__container">
		
		<a class="c-site-footer__logo" href="<?php bloginfo('url'); ?>">
			<img src="<?php bloginfo('template_url'); ?>/dist/images/agi-footer-logo.svg" class="svg" alt="AGI logo" />
		</a>
		
		<div class="c-site-footer__cols">
			<div class="c-site-footer__col">
				<ul class="c-nav-menu__list c-nav-menu__list--footer">	
					
					<li class="c-nav-menu__item c-nav-menu__item--footer">
					<a class="c-nav-menu__link c-nav-menu__link--footer" href="/">BBBB</a>
					</li>
					
				</ul>		
			</div>
	
			<div class="c-site-footer__col">
				<ul class="c-nav-menu__list c-nav-menu__list--footer">
					
					<li class="c-nav-menu__item c-nav-menu__item--footer">
					<a class="c-nav-menu__link c-nav-menu__link--footer" href="/">BBBB</a>
					</li>
					
				</ul>		
			</div>
			
			<div class="c-site-footer__col">
				<ul class="c-nav-menu__list c-nav-menu__list--footer">
					
					<li class="c-nav-menu__item c-nav-menu__item--footer">
					<a class="c-nav-menu__link c-nav-menu__link--footer" href="/">BBBB</a>
					</li>
					
				</ul>		
			</div>		
		</div>

	
	<div class="c-site-footer__social">
		<a href="https://twitter.com/CfgLaw" target="_blank" class="c-site-footer__social-link c-site-footer__social-link--twitter"></a>
		<a href="https://www.linkedin.com/pub/cfg-law/ba/690/7ba" target="_blank" class="c-site-footer__social-link c-site-footer__social-link--linkedin"></a>
		<a href="https://www.facebook.com/cfglaw" target="_blank" class="c-site-footer__social-link c-site-footer__social-link--facebook"></a>
	</div>
	
	
</div>


<?php wp_footer(); ?>

</body>
</html>