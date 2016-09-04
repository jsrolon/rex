<?php get_header(); ?>

<?php while (have_posts()) :
the_post(); ?>

<div class="title fixed">
    <?php the_title(); ?>
    <div class="quarry-header-image"
         style=" background: url(<?php echo get_template_directory_uri(); ?>/img/proyecto.svg) center bottom no-repeat; background-size: cover;"></div>
</div>
<div id="menu-icon" class="fixed">
    <svg viewBox="0 0 24 24">
        <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z"/>
    </svg>
</div>
<?php
if (class_exists('Envira_Gallery_Lite')) {
    $gallery_1_imgs = $envira_gallery_lite->get_gallery_by_slug('cantera-1')['gallery'];
    $gallery_2_imgs = $envira_gallery_lite->get_gallery_by_slug('cantera-2')['gallery'];
}
?>
<div class="proyecto">
    <div class="popup general-info hide-z-index" id="full-carousel-1">
        <div class="group">
            <div class="carousel carouselFull">
                <?php foreach ($gallery_1_imgs as $image) { ?>
                    <div class="carousel-slide">
                        <img data-lazy="<?php echo $image['src']; ?>">
                    </div>
                <?php } ?>
            </div>
            <!--<img src="<?php echo get_template_directory_uri(); ?>/img/left_white.svg" class="control" id="left" onclick="goLeft()">
        <img src="<?php echo get_template_directory_uri(); ?>/img/right_white.svg" class="control" id="right" onclick="goRight()">
        <img src="<?php echo get_template_directory_uri(); ?>/img/full_exit.svg" class="control" id="full" onclick="exitFull()">-->
        </div>
        <div class="group">
            <img src="<?php echo get_template_directory_uri(); ?>/img/left_white.svg" class="control"
                 onclick="goLeft()">
            <img src="<?php echo get_template_directory_uri(); ?>/img/full_exit.svg" class="control"
                 onclick="exitFull()">
            <img src="<?php echo get_template_directory_uri(); ?>/img/right_white.svg" class="control"
                 onclick="goRight()">
        </div>
    </div>

    <div class="popup general-info hide-z-index" id="full-carousel-2">
        <div class="group">
            <div class="carousel carouselFull">
                <?php foreach ($gallery_2_imgs as $image) { ?>
                    <div class="carousel-slide">
                        <img data-lazy="<?php echo $image['src']; ?>">
                    </div>
                <?php } ?>
            </div>
            <!--<img src="<?php echo get_template_directory_uri(); ?>/img/left_white.svg" class="control" id="left" onclick="goLeft()">
        <img src="<?php echo get_template_directory_uri(); ?>/img/right_white.svg" class="control" id="right" onclick="goRight()">
        <img src="<?php echo get_template_directory_uri(); ?>/img/full_exit.svg" class="control" id="full" onclick="exitFull()">-->
        </div>
        <div class="group">
            <img src="<?php echo get_template_directory_uri(); ?>/img/left_white.svg" class="control"
                 onclick="goLeft()">
            <img src="<?php echo get_template_directory_uri(); ?>/img/full_exit.svg" class="control"
                 onclick="exitFull()">
            <img src="<?php echo get_template_directory_uri(); ?>/img/right_white.svg" class="control"
                 onclick="goRight()">
        </div>
    </div>
</div>
<main id="panel">
    <div class="page-content-wrapper">
        <script type="text/javascript">
            var selectedLocations = [{
                lat: <?php echo get_field('ubicacion_1')['lat']; ?>,
                lng: <?php echo get_field('ubicacion_1')['lng']; ?>,
                address: "<?php echo get_field('ubicacion_1')['address']; ?>"
            }, {
                lat: <?php echo get_field('ubicacion_2')['lat']; ?>,
                lng: <?php echo get_field('ubicacion_2')['lng']; ?>,
                address: "<?php echo get_field('ubicacion_2')['address']; ?>"
            }];
        </script>
        <div id="map">
            <div id="map-container"></div>
        </div>
        <div class="padding-top"></div>


        <div class="section">
            <div class="general-info">
                <div class="tab-container">
                    <div class="tab selected" id="1"><?php the_field('nombre_1'); ?></div>
                    <div class="tab" id="2"><?php the_field('nombre_2'); ?></div>
                </div>
                <?php for ($i = 1; $i <= 2; $i++) { ?>
                    <div id="desc_<?php echo $i; ?>" class="tab-content <?php echo $i === 2 ? 'hidden' : '' ?>">
                        <div class="group subtitle"><?php the_field('descripcion_' . $i); ?>
                        </div>
                        <div class="group">
                            <div class="label">ENTIDAD CONTRATANTE</div>
                            <div class="info"><?php the_field('entidad_contratante_' . $i); ?></div>
                        </div>
                        <div class="group">
                            <div class="label">CONTRATISTA</div>
                            <div class="info"><?php the_field('contratista_' . $i); ?></div>
                        </div>
                        <div class="group">
                            <div class="label">UBICACIÓN</div>
                            <div class="info"><?php echo get_field('ubicacion_' . $i)['address']; ?></div>
                        </div>
                        <div class="group">
                            <div class="label">FECHA DE EJECUCIÓN</div>
                            <div class="info"><?php the_field('fecha_de_ejecucion_' . $i); ?></div>
                        </div>
                        <div class="group">
                            <div class="label">TOTAL A EJECUTAR</div>
                            <div class="info"><?php the_field('total_a_ejecutar_' . $i); ?></div>
                        </div>
                        <div class="group">
                            <div class="label">TOTAL EJECUTADO</div>
                            <div class="info"><?php the_field('total_ejecutado_' . $i); ?></div>
                        </div>
                        <div class="group">
                            <div class="label">ACTIVIDADES EJECUTADAS</div>
                            <div class="info"><?php the_field('actividades_ejecutadas_' . $i); ?></div>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
        <div class="section-div-bottom"></div>

        <?php for ($j = 1; $j <= 2; $j++) { ?>
            <div class="section section-white <?php echo $j === 2 ? 'hidden' : '' ?>" id="table_<?php echo $j; ?>">
                <div class="title">PRODUCTOS</div>
                <div class="tableContainer">
                    <?php the_field('productos_' . $j); ?>
                </div>
            </div>
        <?php } ?>

        <div class="proyecto">
            <div class="general-info">
                <div id="carousel-1" class="group">
                    <div class="carousel">
                        <?php
                        foreach ($gallery_1_imgs as $img) {
                            ?>
                            <div class="img-container"
                                 style="background: url(<?php echo $img['src']; ?>) center center no-repeat; background-size: cover;">
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/left_white.svg" class="control" id="left"
                         onclick="goLeft()">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/right_white.svg" class="control"
                         id="right"
                         onclick="goRight()">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/full.svg" class="control" id="full"
                         onclick="goFull()">
                </div>

                <div id="carousel-2" class="group">
                    <div class="carousel">
                        <?php
                        foreach ($gallery_2_imgs as $img) {
                            ?>
                            <div class="img-container"
                                 style="background: url(<?php echo $img['src']; ?>) center center no-repeat; background-size: cover;">
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/left_white.svg" class="control" id="left"
                         onclick="goLeft()">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/right_white.svg" class="control"
                         id="right"
                         onclick="goRight()">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/full.svg" class="control" id="full"
                         onclick="goFull()">
                </div>
            </div>
        </div>

        <?php
        endwhile; //resetting the page loop
        wp_reset_query(); //resetting the page query
        ?>

        <?php get_footer(); ?>
