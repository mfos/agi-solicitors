<nav class="c-nav">

	<div class="c-nav-menu c-nav-menu--primary">
	
		<ul class="c-nav-menu__list">
		            	<?php wp_nav_menu( 
	            	[
	            		'theme_location'	=> 'primary',
	            		'menu_id'			=> '',
	                    'menu'              => 'primary',
	                    'theme_location'    => 'primary',
	                    'depth'             => 0,
	                    'container'   		=> 'ul',
	                    'container_class'   => 'menu-container',
	            		'container_id'      => 'main_navigation',
	                    'menu_class'        => 'wrap-nav',
	                    'items_wrap'        => '<ul id="%1$s" class="%1$s" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">%3$s</ul>',
	                    'walker' => new Agi_Walker()
	        
	            	]);
	                ?> 

		</ul>	
	
	</div>


</nav>
