<?php
/*
Template Name: Accueil
*/
get_header(); ?>



<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>

<?php the_content(); ?>

<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>


<div class="owl-carousel owl-theme owl-header">
    <?php
    	$catquery = new WP_Query( 'cat=3&posts_per_page=2&tag=slider' );
    	while($catquery->have_posts()) : $catquery->the_post();
    ?>
    <div class="item" style="background-image:url('<?php the_field('image_slider'); ?>')">
        <h2><?php the_title() ?></h2>
        <a href="<?php the_permalink() ?>">Voir le projet <i class='fa fa-angle-right' aria-hidden='true'></i></a>
    </div>
    <?php endwhile; ?>
    <div class="item" style="background-image:url('<?php the_field('image_slider'); ?>')">
        <h2>Contactez-nous</h2>
        <a href="#contact">Suivez le guide <i class='fa fa-angle-right' aria-hidden='true'></i></a>
    </div>
</div>

<?php get_footer();
