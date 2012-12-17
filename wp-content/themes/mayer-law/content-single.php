<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
<div class="news-box" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="title-cont">
		<h1><?php the_title(); ?></h1>
		<div class="divider"></div>
	</div>


		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>



</div><!-- #post-<?php the_ID(); ?> -->
