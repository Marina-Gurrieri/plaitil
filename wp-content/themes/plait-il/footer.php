<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
<footer id="footer">
	<header class="row">
		<div class="medium-6 columns text-left adresse">
			<i class="fa fa-map-marker" aria-hidden="true"></i> Plait-il? - 5 rue du bûcher, 13007 Marseille
		</div>
		<div class="medium-6 columns text-right social">
			<a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			<a href="#!"><i class="fa fa-github-alt" aria-hidden="true"></i></a>
			<a href="#!"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
		</div>
	</header>
	<div id="map"></div>
	<section class="text-center">
		Copyright: Plait-il? - 2016 / <a href="#">Mentions légales</a>
	</section>
</footer>
		<div id="footer-container" class="hide">
			<footer id="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>

<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/components/owl.carousel/dist/owl.carousel.min.js" type="text/javascript"></script>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
