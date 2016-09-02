<?php get_header(); ?>

<?php while (have_posts()) :
the_post(); ?>

<div class="quarry-header-image fixed"
     style=" background: url(<?php the_field('imagen_cabecera'); ?>) center bottom no-repeat; background-size: cover;"></div>
<div class="title fixed"><?php the_title(); ?></div>
<div id="menu-icon" class="fixed">
    <svg viewBox="0 0 24 24">
        <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z"/>
    </svg>
</div>
<main id="panel">
    <div class="page-content-wrapper">
        <div class="padding-top"></div>

        <div class="text">
            <img src="<?php echo get_template_directory_uri(); ?>/img/iso.png"/>
            <div class="right">
                <?php the_field('primera_seccion'); ?>
            </div>
        </div>

        <div class="mision-vision" id="section"
             style=" background: url(<?php echo get_template_directory_uri(); ?>/img/calidad_section.svg) center  no-repeat; background-size: cover;">
            <div class="text">
                <?php the_field('segunda_seccion'); ?>
            </div>
        </div>

        <div class="text">
            <div class="left">
                <?php the_field('tercera_seccion'); ?>
            </div>
            <img src="<?php the_field('imagen_premio'); ?>"/>
        </div>

        <?php
        endwhile; //resetting the page loop
        wp_reset_query(); //resetting the page query
        ?>

        <?php get_footer(); ?>
