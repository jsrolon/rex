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
    $gallery_1 = $envira_gallery_lite->get_gallery_by_slug('cantera-1');
    $gallery_2 = $envira_gallery_lite->get_gallery_by_slug('cantera-2');

    $gallery_1_imgs = $gallery_1['gallery'];
    $gallery_2_imgs = $gallery_2['gallery'];
}
?>
<div class="proyecto">
    <div class="popup general-info hide-z-index" id="full-carousel-1" onclick="exitFull1(event)">
        <div class="group">
            <div class="carousel carouselFull">
                <?php foreach ($gallery_1_imgs as $image) { ?>
                    <div class="carousel-slide">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <image xlink:href="<?php $imgsrc = $image['src']; echo $imgsrc; ?>" x="0" y="0" height="100%" width="100%"/>
                        </svg>
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
                 id="full_exit">
            <img src="<?php echo get_template_directory_uri(); ?>/img/right_white.svg" class="control"
                 onclick="goRight()">
        </div>
    </div>

    <div class="popup general-info hide-z-index" id="full-carousel-2" onclick="exitFull2(event)">
        <div class="group">
            <div class="carousel carouselFull">
                <?php foreach ($gallery_2_imgs as $image) { ?>
                    <div class="carousel-slide">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <image xlink:href="<?php $imgsrc = $image['src']; echo $imgsrc; ?>" x="0" y="0" height="100%" width="100%"/>
                        </svg>
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
                 id="full_exit">
            <img src="<?php echo get_template_directory_uri(); ?>/img/right_white.svg" class="control"
                 onclick="goRight()">
        </div>
    </div>
</div>
<main id="panel">
    <div class="page-content-wrapper">
        <script type="text/javascript">
            var selectedLocations = [{
                lat: <?php
                $ubi_1 = get_field('ubicacion_1');
                $ubi_1_lat = $ubi_1['lat'];
                echo $ubi_1_lat; ?>,
                lng: <?php
                $ubi_1_lng = $ubi_1['lng'];
                echo $ubi_1_lng; ?>,
                address: "<?php
                    $ubi_1_addr = $ubi_1['address'];
                    echo $ubi_1_addr; ?>"
            }, {
                lat: <?php
                $ubi_2 = get_field('ubicacion_2');
                $ubi_2_lat = $ubi_2['lat'];
                echo $ubi_2_lat; ?>,
                lng: <?php
                $ubi_2_lng = $ubi_2['lng'];
                echo $ubi_2_lng; ?>,
                address: "<?php
                    $ubi_2_addr = $ubi_2['address'];
                    echo $ubi_2_addr; ?>"
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
                            <div class="info"><?php
                                $ubi = get_field('ubicacion_' . $i);
                                $addr = $ubi['address'];
                                echo $addr; ?></div>
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
                <?php if (count($gallery_1_imgs) > 0) { ?>
                    <div id="carousel_1" class="group carousels">
                        <div class="carousel">
                            <?php
                            foreach ($gallery_1_imgs as $img) {
                                ?>
                                <div class="img-container"
                                     style="background: url(<?php
                                     $imgsrc = $img['src'];
                                     echo $imgsrc; ?>) center center no-repeat; background-size: cover;" 
                                     onclick="goFull1()">
                                    
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/left_white.svg" class="control"
                             id="left"
                             onclick="goLeft()">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/right_white.svg" class="control"
                             id="right"
                             onclick="goRight()">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/full.svg" class="control" id="full"
                             onclick="goFull1()">
                    </div>
                <?php } ?>
                <?php if (count($gallery_2_imgs) > 0) { ?>
                    <div id="carousel_2" class="group carousels hidden">
                        <div class="carousel">
                            <?php
                            foreach ($gallery_2_imgs as $img) {
                                ?>
                                <div class="img-container"
                                     style="background: url(<?php
                                     $imgsrc = $img['src'];
                                     echo $imgsrc; ?>) center center no-repeat; background-size: cover;">
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/left_white.svg" class="control"
                             id="left"
                             onclick="goLeft()">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/right_white.svg" class="control"
                             id="right"
                             onclick="goRight()">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/full.svg" class="control" id="full"
                             onclick="goFull2()">
                    </div>
                <?php } ?>
            </div>
        </div>

        <?php
        endwhile; //resetting the page loop
        wp_reset_query(); //resetting the page query
        ?>

        <?php get_footer(); ?>
