<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="title-cont">
				<div class="title"><div class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div></div>
				<div class="divider"></div>
			</div>



		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>

	</div><!-- #post-<?php the_ID(); ?> -->
	<div class="post-divider"></div>
