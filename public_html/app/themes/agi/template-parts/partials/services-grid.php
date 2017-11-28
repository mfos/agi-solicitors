<section>
	<div class="c-services-grid">
	
		<div class="c-heading">
			<h2>Our Services</h2>
		</div>
		
		<div class="c-services-grid__items u-clear">
			
			<?php if(have_rows('service_repeater')): ?> 			                	
        		<?php while ( have_rows('service_repeater') ) : the_row(); ?>
                        
                    <?php $img = get_sub_field('service_image'); ?>    
                        
					<div class="c-services-grid__item">
						<a href="<?php the_sub_field('service_link'); ?>" class="c-services-grid__item-link">
							<img src="<?php echo $img['sizes']['service-thumb']; ?>" alt="<?php the_sub_field('service_name'); ?>">
							<div class="c-services-grid__item-content">
								<h3><?php the_sub_field('service_name'); ?></h3>
								<p><?php the_sub_field('service_summary'); ?></p>
							</div>
						</a>
					</div>
					
                <?php endwhile; ?>					              
		<?php endif; ?> 		
			
			
					
		</div>
		
	</div>
</section>



					                                
					                                