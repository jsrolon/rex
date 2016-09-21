<?php get_header(); ?>
<main id="panel" class="index">
    <div class="index-carousel">
        <?php
        $do_not_duplicate = array();

        $args = array(
            'category_name' => 'destacado',
            'post_type' => 'rex-project',
            'post__not_in' => $do_not_duplicate
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) { ?>

            <?php while ($query->have_posts()) {

                $query->the_post();
                $do_not_duplicate[] = $post->ID;
                ?>
                <div class="cover">
                    <a class="index-page-carousel-link" href="<?php the_permalink(); ?>">
                        <div
                            <?php $src = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID(), 'full-hd'), 'full-hd');
                            $url = $src[0]; ?>
                            style="background: url(<?php echo $url; ?>) center center; background-size: cover;"
                            class="image">
                            <div class="nombre"><?php the_title(); ?></div>

                        </div>
                    </a>
                </div>
            <?php }
        }
        // Use reset to restore original query.
        wp_reset_postdata();
        ?>
    </div>

    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/circle_index.svg" class="circle"/>
    <div id="rex_blanco">
        <img src="<?php header_image(); ?>"/>
        <div><?php echo get_bloginfo('description'); ?></div>
    </div>

    <?php get_footer(); ?>
