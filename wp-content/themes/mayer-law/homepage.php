<?php
 /*
Template Name: FRONT
*/

get_header(); ?>
		<div id="primary">
			<div id="content" role="main">
				<div id="main-image">
					<img src="<?php echo get_template_directory_uri(); ?>/images/mayerlaw/home.jpg" />
					<div class="info-free-consult">
						<div class="info-title">free consultations</div>
						<div class="text">The law firm focuses on personal injuries, civil actions,<br/> and serious criminal charges, in addition to the general practice of law.</div>
					</div>
				</div>
				<div id="home-boxes-cont">
					<div class="home-box">
						<div class="inner-box">
							<div class="title-cont">
								<a class="title" href="/services/injuries">injured</a>
								<div class="divider"></div>
								<div class="text">
									Injuries often impact the whole family. Daily tasks, seldom thought twice about before an injury, can become a challenge that may last a lifetime.
								</div>
								<div class="learn-more-cont">							
									<a class="learn-more" href="/services/injuries">learn more</a>
								</div>
							</div>
						</div>
					</div>
					<div class="home-box">
						<div class="inner-box">
							<div class="title-cont">
								<a class="title" href="/services/arrests">accused</a>
								<div class="divider"></div>
								<div class="text">
									Being accused is a frustrating situation. Accusations can become part of one's permanent record if they are not properly dealt with.
								</div>
								<div class="learn-more-cont">							
									<a class="learn-more" href="/services/arrests">learn more</a>
								</div>
							</div>
						</div>
					</div>
					<div class="home-box last">
						<div class="inner-box">
							<div class="title-cont">
								<a class="title" href="/services/immigration">immigration</a>
								<div class="divider"></div>
								<div class="text">
									Knowing that immigration is a matter of paperwork, applications, and attention to detail, Mayer Law provides complete immigration services. 
								</div>
								<div class="learn-more-cont">							
									<a class="learn-more" href="/services/immigration">learn more</a>
								</div>
							</div>
						</div>
					</div>
				</div>
					
			</div><!-- #content -->
		</div><!-- #primary -->

<?php // get_sidebar(); ?>

<?php get_footer(); ?>

<script>
	$(document).ready(function() {
		$('#primary').css('background' , 'transparent');
	});

</script>