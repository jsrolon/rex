<?php get_header(); ?>

<div class="quarry-header-image fixed"
     style=" background: url(<?php echo get_template_directory_uri(); ?>/img/quienes.png) center bottom no-repeat; background-size: cover;"></div>

<?php while (have_posts()) :
the_post(); ?>

<div class="title fixed"><?php the_title(); ?></div>
<div id="menu-icon" class="fixed">
    <svg viewBox="0 0 24 24">
        <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z"/>
    </svg>
</div>
<main id="panel">
    <div class="page-content-wrapper">
        <div class="padding-top"></div>
        <?php the_content(); ?>

        <?php
        endwhile; //resetting the page loop
        wp_reset_query(); //resetting the page query
        ?>

        <?php get_footer(); ?>
