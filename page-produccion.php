<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    THIS IS THE production PAGE
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
