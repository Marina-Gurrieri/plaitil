<?php
/*
Template Name: Accueil
*/
get_header(); ?>

<div class="owl-carousel owl-theme owl-header">
    <?php
    	$catquery = new WP_Query( 'cat=3&posts_per_page=2&tag=slider' );
    	while($catquery->have_posts()) : $catquery->the_post();
    ?>
    <div class="item" style="background-image:url('<?php the_field('image_slider'); ?>')">
        <h2>"<?php the_title() ?>"</h2>
        <a href="<?php the_permalink() ?>">Voir le projet <i class='fa fa-angle-right' aria-hidden='true'></i></a>
    </div>
    <?php endwhile; ?>
    <div class="item" style="background-image:url('<?php bloginfo("template_directory") ?>/assets/plait-il/img-slider-contact.jpg')">
        <h2>Un projet ?</h2>
        <a href="#contact">Contactez-nous</a>
    </div>
</div>

<div class="row">
    <div class="small-10 columns small-centered">
        <h3 data-title="Agence" id="agence">Agence <img src="<?php bloginfo('template_directory'); ?>/assets/plait-il/logo2.png" alt="<?php bloginfo('name'); ?>" /></h3>
    </div>
</div>

<div class="row agency flex">
    <div class="large-3 large-offset-1 columns img">
        <img src="<?php bloginfo('template_directory'); ?>/assets/plait-il/agence-visu-1.jpg" alt="<?php bloginfo('name'); ?>" />
    </div>
    <div class="large-2 large-offset-1 columns img">
        <img src="<?php bloginfo('template_directory'); ?>/assets/plait-il/agence-visu-2.jpg" alt="<?php bloginfo('name'); ?>" />
    </div>
    <div class="large-3 large-offset-1 columns img end">
        <img src="<?php bloginfo('template_directory'); ?>/assets/plait-il/agence-visu-3.jpg" alt="<?php bloginfo('name'); ?>" />
    </div>
</div>
<div class="row agency">
    <div class="large-5 large-offset-1 columns">
        <img src="<?php bloginfo('template_directory'); ?>/assets/plait-il/agence-visu-principal.jpg" alt="<?php bloginfo('name'); ?>" />
        <div class="row">
            <div class="small-12 columns">
                <a class="btn" href="#projets">Projets <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                <a class="btn" href="#contact">Contact <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <div class="large-4 large-offset-1 columns end">
        <?php while ( have_posts() ) : the_post(); ?>
        <h4><?php the_field('titre_blabla_agency'); ?></h4>
        <section>
            <?php the_content() ?>
        </section>
        <?php endwhile;?>
    </div>
</div>

<div class="row" id="projets">
    <div class="small-10 columns small-centered">
        <h3 class="projets" data-title="Projets">Projets</h3>
    </div>
</div>

<div class="projets row">
    <div class="large-4 large-offset-7 columns text">
        <h4>Quelques unes de nos réalisations</h4>
        <p>Voici quelques uns des projets dont nous sommes fiers ! Notre équipe Web Design effectue une veille permanente afin de vous faire profiter des dernières tendances et innovations pour un design unique et impactant.</p>
    </div>
    <?php
        $catquery = new WP_Query( 'cat=3&posts_per_page=5' );
        while($catquery->have_posts()) : $catquery->the_post();
    ?>
    <div class="projet clear">
        <a href="<?php the_permalink() ?>">
        <img src="<?php the_field('image_zone_projets_sur_laccueil'); ?>" />
        <section class="clear">
            <div>
                <h5><?php the_title() ?></h5>
                <h6><?php the_field('punchline'); ?></h6>
                <a href="<?php the_permalink() ?>">
                    Voir +
                </a>
            </div>
        </section>
        </a>
    </div>
    <?php endwhile;?>
</div>

<div class="row" id="contact">
    <div class="small-10 columns small-centered">
        <h3 class="contact" data-title="Contact">Nous contacter</h3>
    </div>
</div>
<div class="contact row text-center">
    <h4>Ne soyez pas timide !</h4>
    <p>Nous pouvons vous aider à concrétiser votre projet. Nous vous accompagnerons et développerons votre projet de façon à le rendre unique !</p>
    <div class="form small-12 large-6 small-centered columns">
        <?php while ( have_posts() ) : the_post();
             the_field('contact');
        endwhile;?>
    </div>
</div>


<?php get_footer();
