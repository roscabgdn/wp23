<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp23
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php wp23_post_thumbnail(); ?>
	
	<header class="entry-header">
		<?php
		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
					if ( is_single() ) :
						wp23_posted_on();
					endif; 
					wp23_posted_by();
					wp23_posted_in();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>

		<?php 
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
		?>
	</header><!-- .entry-header -->

	

	<div class="entry-content">
		<?php
			if ( is_single() ) : 
				
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'wp23' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					)
				);
				
			else :
				// the_excerpt(  ); 
			endif;
		?>
	</div><!-- .entry-content -->
	<?php if ( is_single() ) : ?>
		<footer class="entry-footer">
			<?php wp23_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
