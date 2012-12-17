<?php
 /*
Template Name: CONTACT
*/

get_header(); ?>

<div id="primary">
	<div class="page-title-cont">
		<div class="page-tab">
			<span><?php dimox_breadcrumbs(); ?></span>
		</div>
	</div>
	<div id="content" role="main">
		
		<?php query_posts( 'post_type=tri_contact','order=DESC' ); ?>

		<?php while ( have_posts() ) : the_post(); ?>
			
				<div class="contact-box <?php echo str_replace(' ','-',get_the_title()); ?>">
					<div class="featured-image">		
						<?php the_post_thumbnail(); ?>
						<div id="map_canvas"></div>	
					</div>
					<div class="main-content">
						<a name="<?php echo str_replace(' ','-',get_the_title()); ?>"></a>
						<div class="title-cont">
							<h1><?php the_title(); ?></h1>			
						</div>
						<div class="divider-cont">
							<div class="divider"></div>
						</div>
						<div class="post-text">
							<?php the_content(); ?>
						</div>
					</div>				
				</div>

		<?php endwhile; // end of the loop. ?>
		


	</div><!-- #content -->
</div><!-- #primary -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
 
<script type="text/javascript"
  src="http://maps.googleapis.com/maps/api/js?&sensor=false">
</script>


<script>
	$(document).ready(function() {
		initialize();
	});

	$('.free-consultations #map_canvas').remove();
	$('.contact-us-today .featured-image').remove();
	$('.contact-us-today').css('float', 'right');
	
	function initialize() {
	  // var image = src="/system/images/map-pin.png";
	  var myOptions = {
	    center: new google.maps.LatLng(32.794649, -80.028228) ,
	    zoom: 15,
	    mapTypeId: google.maps.MapTypeId.ROADMAP ,
	    scaleControl: false,
	    panControl: false,
	    mapTypeControl: false,
	    streetViewControl: false,


	  };
	  var map = new google.maps.Map(document.getElementById("map_canvas"),
	      myOptions);

	  var marker = new google.maps.Marker({
	      position: map.getCenter(),
	      map: map,
	    });

	}
</script>