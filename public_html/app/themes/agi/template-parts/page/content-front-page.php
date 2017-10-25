<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Persicope
 * @since 1.0
 * @version 1.0
 */

?>

    
	<?php
		/* translators: %s: Name of current post */
		the_content( sprintf(
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'agiwpproject' ),
			get_the_title()
		) );
	?>



