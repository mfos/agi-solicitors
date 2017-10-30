<!DOCTYPE html>
<!--[if IE 9]><html class="no-js ie9"><![endif]-->
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<?php wp_head(); ?>
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    
    ga('create', 'GA CODE HERE', 'auto');
    ga('send', 'pageview');
    </script>
</head>

<body <?php body_class(); ?>>

	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'agiwpproject' ); ?></a>

	<header id="masthead" class="site-header" itemscope="itemscope" itemtype="http://schema.org/WPHeader" role="banner">

    </header><!-- #masthead -->
    
	
<div class="c-site-header">

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				
				<!-- Logo -->
				<a class="c-site-header__logo" href="<?php bloginfo('url'); ?>">
					<img src="<?php bloginfo('template_url'); ?>/dist/images/agi-logo.png" alt="AGI logo" />
				</a>
				
				<div class="c-cta-header hidden-xs">
					<div class="c-cta-header__cta c-cta-header--call"><span>Call our team<span><a href="tel:08006128196">0800 612 8196</a></span></span></div>
					<div class="c-cta-header__cta c-cta-header--call-form js-form-drawer"><span>Request a callback<span>Start your claim</span></span></div>
				</div>
				
				<div class="c-burger-menu">
					<div class="c-burger-menu__box">
						<div class="c-burger-menu__inner"></div>
					</div>
				</div>				
				
			</div>
		</div>
	</div>
	


	

</div>

<div class="c-overlay-menu">
	<div class="c-overlay-menu__menu-wrap">

		<!-- Nav -->
		<div class="c-overlay-menu__nav">
			
			
			<?php get_template_part( 'template-parts/header/nav' ); ?>

		
		</div>


	</div>
</div>
