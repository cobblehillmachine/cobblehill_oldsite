<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

	// imageURL
	// thumbURL
	// title

get_header(); ?>

    <div id="content" role="main">

<?php while (have_posts()) : the_post();

    $pagename = strtolower(get_the_title());
    $id = get_the_ID();
    $title = trim(get_the_title());

	global $wpdb;
	$result = $wpdb->get_results($wpdb->prepare("SELECT *
											 FROM `wp_ngg_gallery`
											WHERE LOWER(`title`) = LOWER(%s)
											LIMIT 1",
											strtolower($post->post_title))
	);

	if ($result = current($result)) {
		$gallery = nggdb::get_gallery($result->gid, 'pid', 'DESC');
	}

?>
		<div class="page-work">
		    <div class="image">
		    	<?php if ($gallery) : ?>
			    	<div id="large">
			    		<img src="<?php echo current($gallery)->imageURL ?>" />
			    	</div>
			    	<ul id="WorkGallery">
			    		<?php foreach ($gallery as $gallery_item) : ?>
			    			<li class="">
			    				<img src="<?php echo $gallery_item->thumbURL ?>" data-large="<?php echo $gallery_item->imageURL ?>" />
			    			</li>
				    	<?php endforeach; ?>
			    	</ul>
			    <?php endif ?>
		    </div>

		    <div class="content">
		        <?php the_content() ?>
		        <p class="link">
		        	<a href="<?php echo site_url() ?>/work">Back to our work</a>
		        </p>
		    </div>
		</div>

<?php endwhile; ?>

        <div class="clear"></div>
	</div>

<?php get_footer(); ?>