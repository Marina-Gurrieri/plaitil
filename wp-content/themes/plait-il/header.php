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
