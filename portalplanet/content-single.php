<?php
/**
 * @package portalplanet
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php //portalplanet_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<div class="entry-meta">
			<?php //portalplanet_posted_on(); ?>
		</div><!-- .entry-meta -->
<div class="small">This entry was posted on 
<?php the_time('l, F jS, Y') ?> at 
<?php the_time() ?> and is filed 
under <?php the_category(', ') ?>. Follow any responses to this entry 
through the <?php comments_rss_link('RSS 2.0'); ?> 
feed.</div>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'portalplanet' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php portalplanet_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
