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

	<header class="entry-header">
		<?php
            the_title( '<h1 class="entry-title">', '</h1>' );
            the_excerpt();
        ?>
        <div class="entry-meta">
            <?php
                wp23_posted_on();
                wp23_posted_by();
                wp23_posted_in();
            ?>
        </div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<?php wp23_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
            the_content();
		?>
	</div><!-- .entry-content -->
	
    <footer class="entry-footer">
        <?php wp23_entry_footer(); ?>
    </footer><!-- .entry-footer -->
	
</article><!-- #post-<?php the_ID(); ?> -->
