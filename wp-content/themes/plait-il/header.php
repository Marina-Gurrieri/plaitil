<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/components/owl.carousel/dist/assets/owl.carousel.min.css" media="screen" title="no title" charset="utf-8">
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
		<script type="text/javascript">
			google.maps.event.addDomListener(window, 'load', init);
			function init() {
				var mapOptions = {
					zoom: 14,
					center: new google.maps.LatLng(43.296482, 5.369779999999992),
					styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
				};
				var mapElement = document.getElementById('map');
				var map = new google.maps.Map(mapElement, mapOptions);
				var marker = new google.maps.Marker({
					position: new google.maps.LatLng(43.296482, 5.369779999999992),
					map: map,
					title: 'Snazzy!'
				});
			}
		</script>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<header id="header">
		<div class="row">
			<div class="logo float-left">
				<a href="<?php bloginfo('url'); ?>">
					<img src="<?php bloginfo('template_directory'); ?>/assets/plait-il/logo.png" alt="<?php bloginfo('name'); ?>" />
				</a>
			</div>
			<div class="menu float-right">
				<i class="fa fa-bars" aria-hidden="true" onclick="toggleMenu()"></i>
			</div>
		</div>
	</header>
	<nav id="navigation">
		<div class="row">
			<i class="fa fa-times close float-right" onclick="toggleMenu()" aria-hidden="true"></i>
		</div>
		<?php wp_nav_menu( array( 'theme_location' => 'top-bar-r' ) ); ?>
	</nav>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
