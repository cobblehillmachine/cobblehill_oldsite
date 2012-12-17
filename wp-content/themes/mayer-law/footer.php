<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->


</div><!-- #page -->
<footer id="colophon">
	<div class="footer-cont">
		<div id="footer-info">
			Mayer Law Practice<br/>
			<span id="address">2000 Sam Rittenberg Blvd, Suite 2011 &bull; Charleston, SC 29407</span>
		</div>
		<div id="footer-links-cont">
			<a class="footer-links" href="/">home</a><span>/</span>
			<a class="footer-links" href="/about">about</a><span>/</span>
			<a class="footer-links" href="/services">services</a><span>/</span>
			<a class="footer-links" href="/news">news</a><span>/</span>
			<a class="footer-links" href="/contact">contact</a>
		</div>
		<div class="credit">
			<a href="http://www.cobblehilldigital.com" target="_blank">Site by Cobble Hill</a>
		</div>
	</div>
		<?php
			/* A sidebar in the footer? Yep. You can can customize
			 * your footer with three columns of widgets.
			 */
			if ( ! is_404() )
				get_sidebar( 'footer' );
		?>

</footer><!-- #colophon -->
<?php wp_footer(); ?>

</body>
</html>