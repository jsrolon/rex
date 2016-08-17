<?php get_header(); ?>
<main id="panel" class="index">
    <div class="index-carousel">
        <?php
        $categories = get_categories();

        foreach ($categories as $category) {
            $args = array(
                'cat' => $category->term_id,
                'post_type' => 'post',
                'posts_per_page' => '1',
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) { ?>

                <?php while ($query->have_posts()) {

                    $query->the_post();
                    ?>
                    <div class="cover">
                        <div
                            <?php $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>
                            style="background: url(<?php echo $url; ?>) center center; background-size: cover;"
                            class="image">
                            <div class="nombre"><?php the_title(); ?></div>
                        </div>
                    </div>
                <?php }
            }
            // Use reset to restore original query.
            wp_reset_postdata();
        }
        ?>
    </div>
    <div class="ver-mas">
        Ver más
    </div>

<!--        <img src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/img/circle_index.svg" class="circle"/>-->
        <div id="rex_blanco">
            <img src="<?php header_image(); ?>"/>
            <div><?php echo get_bloginfo('description'); ?></div>
        </div>

    <?php get_footer(); ?>
