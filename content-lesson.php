<?php
$lesson_id = get_the_ID();
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-fw clearfix' ); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-thumb">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'ib-educator-main-column' ); ?></a>
		</div>
	<?php endif; ?>

	<div class="summary">
		<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
		<div class="post-excerpt">
			<?php the_excerpt(); ?>
		</div>
	</div>

	<footer class="post-meta">
		<?php echo educator_share( 'menu' ); ?>
	</footer>
</article>
