<?php
 /*
Template Name: SERVICES
*/

get_header();

?>

			<div id="primary">
				<div class="page-title-cont">
					<div class="page-tab">
						<span><?php dimox_breadcrumbs(); ?></span>
					</div>
				</div>
				<div id="content" role="main">
					
						<?php $subs = new WP_Query( array( 'post_parent' => $post->ID, 'post_type' => 'page', 'order' => 'ASC', 'meta_key' => '_thumbnail_id' ));
						    if( $subs->have_posts() ) : while( $subs->have_posts() ) : $subs->the_post();

						     ?>
						<div class="services-box <?php echo  $title; ?>">
							<a href="<?php echo get_page_link( $page->ID ); ?>" class="featured-image">								
								<?php echo get_the_post_thumbnail($post->ID); ?>								
							</a>
							<div class="main-content">
								<div class="title-cont">
									<a href="<?php echo get_page_link( $page->ID ); ?>"><h1><?php the_title(); ?></h1></a>									
								</div>
								<div class="title-cont">
									<div class="divider"></div>
								</div>
								<div class="post-text">
									<?php the_content(); ?>
								</div>							
								<div class="learn-more-cont">							
									<a class="learn-more" href="<?php echo get_page_link( $page->ID ); ?>">learn more</a>
								</div>
							</div>
						</div>
						
					<?php endwhile; endif; wp_reset_postdata(); ?>

				</div><!-- #content -->
			</div><!-- #primary -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>