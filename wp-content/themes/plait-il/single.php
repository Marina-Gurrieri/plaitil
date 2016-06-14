<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="single-post" class="projet" role="main">

	<?php while ( have_posts() ) : the_post(); ?>

		<h1><?php the_title() ?></h1>

		<header class="row">
			<div class="large-offset-1 large-5 columns">
				<img src="<?php the_field('vignette') ?>" alt="<?php the_title() ?>" />
			</div>
			<aside class="large-8 columns end">
				<h2><?php the_field('punchline') ?></h2>
				<section><?php the_content() ?></section>
				<div>
					<a href="#!visite" class="btn">Visiter le site <i class="fa fa-angle-right" aria-hidden="true"></i></a>
					<a href="#" class="btn"><i class="fa fa-share-alt" aria-hidden="true"></i> <span>Partager</span>
						<span>
							<i class="fa fa-facebook" aria-hidden="true"></i>
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</span>
					</a>
				</div>
			</aside>
		</header>

		<section>
			<aside>
				<div><?php the_field('date') ?></div>
				<div><?php the_field('caracteristiques') ?></div>
			</aside>
			<img src="<?php the_field('visu_mockup') ?>" alt="<?php the_title() ?>" />
		</section>

	<!--  -->

	<?php endwhile;?>

</div>
<?php get_footer();
