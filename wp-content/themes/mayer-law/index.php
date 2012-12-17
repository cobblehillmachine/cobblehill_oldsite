<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage mayer-law
 */

get_header(); ?>
	<div id="primary">
		<div id="news-post-cont">
			<div class="page-title-cont">
				<div class="page-tab">
					news
				</div>
			</div>
			<div id="content" role="main" style="width:650px;">

			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile; ?>

				<?php twentyeleven_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			</div><!-- #content -->
		</div><!-- #primary -->
	<div id="right-boxes-cont">
		<div id="free-consult-box" class="gray-box">
			<div class="title-cont">
				<div class="title sidebar-title">free consultation</div>
				<div class="divider"></div>
				<div class="text">
					Contact us today for your free consultation!
				</div>
				<div class="learn-more-cont">							
					<a class="learn-more" href="/contact#free-consultation">learn more</a>
				</div>
			</div>
		</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>