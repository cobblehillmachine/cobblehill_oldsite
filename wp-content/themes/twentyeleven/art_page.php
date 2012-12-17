<?php
 /*
Template Name: Art Page
*/

get_header(); ?>
	<?php $subs = new WP_Query( array( 'post_parent' => $post->ID, 'post_type' => 'page', 'order' => 'ASC', 'meta_key' => '_thumbnail_id' ));
	    if( $subs->have_posts() ) : while( $subs->have_posts() ) : $subs->the_post(); ?>
	<a class="art-cont 	<?php foreach((get_the_category()) as $category) {echo $category->cat_name . ' ';} ?>" href="<?php echo the_permalink(); ?>">						
		<?php the_post_thumbnail(); ?>
		<div class="overlay"></div>		
		<div class="product-name gotham-bold"><?php the_title(); ?></div>
		<!--<?php the_content(); ?>	 -->		
	</a>
<?php endwhile; endif; wp_reset_postdata(); ?>
		
<?php get_footer(); ?>