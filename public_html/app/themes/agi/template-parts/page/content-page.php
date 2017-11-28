<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="c-page-header">
	    <?php if (has_post_thumbnail( $post->ID ) ): ?>
		  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		  <div class="c-page-header__image" style="background-image: url('<?php echo $image[0]; ?>')"></div>
		<?php endif; ?>
	    
    </div>
    
    <div class="container">
	    <div class="row">
		   	<div class="col-sm-12 col-md-10 col-md-offset-1">
		   	<div class="c-page-header__heading">
		    	<h1><?php the_title(); ?></h1>
		    </div>
			<?php
				/* translators: %s: Name of current post */
				the_content( sprintf(
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'agiwpproject' ),
					get_the_title()
				) );
			?>
	
		    </div>
	    </div>
    </div>

	
    </article>