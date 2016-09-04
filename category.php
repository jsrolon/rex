<?php
/**
 * Created by PhpStorm.
 * User: jsrolon
 * Date: 16-08-2016
 * Time: 11:58 PM
 */

get_header(); ?>

<div class="title fixed"><?php single_cat_title(); ?></div>
<div id="menu-icon" class="black fixed">
    <svg viewBox="0 0 24 24">
        <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z"/>
    </svg>
</div>

<?php
// the query
$the_query = new WP_Query(
    array(
        'cat' => get_cat_ID(single_cat_title('', false)),
        'post_type' => 'rex-project'
    )
); ?>

<main id="panel">
    <div class="padding-top"></div>
    <div class="page-content-wrapper proyects-list">

        <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post();
                $post_number = $the_query->current_post + 1; ?>
                <a href="<?php echo get_permalink(); ?>">
                    <?php $url = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID(), 'medium_large'), 'medium_large')[0]; ?>
                    <div class="proyect"
                         style="background: url(<?php echo $url; ?>) center center; background-size: cover;"
                         id="<?php echo $post_number; ?>">
                        <div class="info" id="info_<?php echo $post_number; ?>">
                            <div class="name">
                                <?php echo get_the_title(); ?>
                            </div>
                            <div class="date"><?php echo get_the_date(); ?></div>
                        </div>
                        <div class="ver-mas-proyect" id="view_<?php echo $post_number; ?>">
                            Ver más
                        </div>
                    </div>
                </a>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p><?php _e('Lo sentimos, no encontramos proyectos con esta categoría.'); ?></p>
        <?php endif; ?>
    </div>
    <?php get_footer(); ?>
