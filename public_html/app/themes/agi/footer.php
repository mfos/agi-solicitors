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
			<img src="<?php bloginfo('template_url'); ?>/dist/images/agi-logo.png" class="svg" alt="AGI logo" />
		</a>
		
		<div class="c-site-footer__cols">
			<div class="c-site-footer__col">
				<p>AGI Solicitors is the trading name of AGI Solicitors Limited a company registered in England & Wales with number 08540488.
				A full list of directors is available for inspection at the registered office: 10 Market Street, Bury BL9 0AJ. Authorised and regulated by the Solicitors Regulation Authority 612697.<br>
				Copyright ©  AGI Solicitors - All rights reserved</p>		
			</div>
	
			
			<div class="c-site-footer__col">
				<div class="c-site-footer__telephone"><a href="tel:01617613638">0161 761 3638</a></div>		
				<p class="c-site-footer__address">10 Market Street<br>
					Bury<br>
					Lancashire<br> 
					BL9 0AJ
				</p>
			</div>		
		</div>

	
	
	
</div>
<?php wp_footer(); ?>
</body>
</html>