<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) :
the_post(); ?>
<div class="title fixed">
    <?php the_title(); ?>
    <div class="description"><?php the_excerpt(); ?>
    </div>
    <div class="quarry-header-image"
         style=" background: url(<?php echo get_template_directory_uri(); ?>/img/proyecto.svg) center bottom no-repeat; background-size: cover;"></div>
</div>
<div id="menu-icon" class="fixed">
    <svg viewBox="0 0 24 24">
        <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z"/>
    </svg>
</div>
<?php if (function_exists('easy_image_gallery_get_image_ids')) {
    $images = easy_image_gallery_get_image_ids();
} ?>
<div class="popup general-info hide-z-index" id="full-carousel" onclick="exitFull(event)">
    <div class="group">
        <div class="carousel carouselFull">
            <?php foreach ($images as $image) { ?>
                <div class="carousel-slide">
                    <img data-lazy="<?php
                        $img_src_arr = wp_get_attachment_image_src($image, 'full-hd');
                        $img_url = $img_src_arr[0];
                        echo $img_url;
                        ?>">
                    <!--<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <image xlink:href="<?php
                        $img_src_arr = wp_get_attachment_image_src($image, 'full-hd');
                        $img_url = $img_src_arr[0];
                        echo $img_url;
                        ?>" x="0" y="0" height="100%" width="100%"/>
                    </svg>-->
                </div>
            <?php } ?>
        </div>
        <!--<img src="<?php echo get_template_directory_uri(); ?>/img/left_white.svg" class="control" id="left" onclick="goLeft()">
        <img src="<?php echo get_template_directory_uri(); ?>/img/right_white.svg" class="control" id="right" onclick="goRight()">
        <img src="<?php echo get_template_directory_uri(); ?>/img/full_exit.svg" class="control" id="full" onclick="exitFull()">-->
    </div>
    <div class="group">
        <img src="<?php echo get_template_directory_uri(); ?>/img/left_white.svg" class="control" onclick="goLeft()">
        <img src="<?php echo get_template_directory_uri(); ?>/img/full_exit.svg" class="control" id="full_exit">
        <img src="<?php echo get_template_directory_uri(); ?>/img/right_white.svg" class="control" onclick="goRight()">
    </div>
</div>

<main id="panel">
    <div class="page-content-wrapper">
        <div class="padding-top"></div>
        <div class="general-info">
            <div class="group">
                <div class="label">ENTIDAD CONTRATANTE</div>
                <div class="info"><?php the_field('entidad_contratante'); ?>
                </div>
            </div>
            <div class="group">
                <div class="label">CONTRATISTA</div>
                <div class="info"><?php the_field('contratista'); ?></div>
            </div>
            <div class="group">
                <div class="label">UBICACIÓN</div>
                <div class="info"><?php the_field('ubicacion_dir'); ?></div>
            </div>
            <div class="group">
                <div class="label">FECHA DE EJECUCIÓN</div>
                <div class="info"><?php the_field('fecha_de_ejecucion'); ?></div>
            </div>
            <div class="group">
                <div class="label">ACTIVIDADES EJECUTADAS</div>
                <div class="info"><?php the_field('actividades_ejecutadas'); ?></div>
            </div>
            <?php if (count($images) > 0) { ?>
                <div class="group">
                    <div class="carousel">
                        <?php foreach ($images as $image) { ?>
                            <!--<div class="img-container"
                                 style="background: url(<?php
                                 $imgsrc = wp_get_attachment_image_src($image, 'medium_large');
                                 $imgurl = $imgsrc[0];
                                 echo $imgurl; ?>) center center no-repeat; background-size: cover;" onclick="goFull()">
                            </div>-->
                            <div class="carousel-slide" onclick="goFull()">
                                <img data-lazy="<?php
                                 $imgsrc = wp_get_attachment_image_src($image, 'medium_large');
                                 $imgurl = $imgsrc[0];
                                 echo $imgurl; ?>" class="img-small-carousel">
                            </div>
                        <?php } ?>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/left_white.svg" class="control" id="left"
                         onclick="goLeft()">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/right_white.svg" class="control"
                         id="right"
                         onclick="goRight()">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/full.svg" class="control" id="full"
                         onclick="goFull()">
                </div>
            <?php } ?>
        </div>

        <div class="section-div-top"></div>
        <div class="section">
            <div class="title">CANTIDADES DE OBRA</div>
            <div class="tableContainer">
                <?php the_content(); ?>
            </div>
        </div>
        <div class="section-div-bottom"></div>
        <div id="map">
            <script type="text/javascript">
                var selectedLocation = {
                    lat: <?php
                    $ubicacion = get_field('ubicacion');
                    $lat = $ubicacion['lat'];
                    echo $lat; ?>,
                    lng: <?php
                    $lng = $ubicacion['lng'];
                    echo $lng; ?>
                };
            </script>
            <div id="map-container">
            </div>
            <?php endwhile;
            else: ?>
                <?php _e('Sorry, no pages matched your criteria.', 'textdomain'); ?>
            <?php endif; ?>

            <?php get_footer(); ?>
