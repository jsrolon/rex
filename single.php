<?php
/**
 * Created by PhpStorm.
 * User: jsrolon
 * Date: 17-08-2016
 * Time: 1:07 AM
 */

get_header(); ?>

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
<div class="popup general-info hide-z-index" id="full-carousel">
    <div class="group">
        <div class="carousel">
            <div class="carousel-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/img/20150311_124551.jpg">
            </div>
            <div class="carousel-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/img/20160310_075037.jpg">
            </div>
            <div class="carousel-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/img/_MG_7748.jpg">
            </div>
        </div>
        <!--<img src="<?php echo get_template_directory_uri(); ?>/img/left_white.svg" class="control" id="left" onclick="goLeft()">
        <img src="<?php echo get_template_directory_uri(); ?>/img/right_white.svg" class="control" id="right" onclick="goRight()">
        <img src="<?php echo get_template_directory_uri(); ?>/img/full_exit.svg" class="control" id="full" onclick="exitFull()">-->
    </div>
    <div class="group">
        <img src="<?php echo get_template_directory_uri(); ?>/img/left_white.svg" class="control" onclick="goLeft()">
        <img src="<?php echo get_template_directory_uri(); ?>/img/full_exit.svg" class="control" onclick="exitFull()">
        <img src="<?php echo get_template_directory_uri(); ?>/img/right_white.svg" class="control" onclick="goRight()">
    </div>
</div>

<main id="panel">
    <div class="page-content-wrapper">
        <div class="padding-top"></div>
        <div class="general-info">
            <div class="group">
                <div class="label">ENTIDAD CONTRATANTE</div>
                <div class="info">Unidad Administrativa Especial de Rehabilitación y Mantenimiento Vial – UAERMV
                </div>
            </div>
            <div class="group">
                <div class="label">CONTRATISTA</div>
                <div class="info">Consorcio Obras de Estabilidad El Espino</div>
            </div>
            <div class="group">
                <div class="label">UBICACIÓN</div>
                <div class="info">Ciudad Bolívar, Bogotá D.C</div>
            </div>
            <div class="group">
                <div class="label">FECHA DE EJECUCIÓN</div>
                <div class="info">noviembre 2011 – noviembre 2012</div>
            </div>
            <div class="group">
                <div class="label">ACTIVIDADES EJECUTADAS</div>
                <div class="info">Gerencia y ejecucuón integral del proyecto</div>
            </div>
            <div class="group">
                <div class="carousel">
                    <div class="img-container"
                         style="background: url(<?php echo get_template_directory_uri(); ?>/img/20150311_124551.jpg) center center no-repeat; background-size: cover;">
                    </div>
                    <div class="img-container"
                         style="background: url(<?php echo get_template_directory_uri(); ?>/img/20160310_075037.jpg) center center no-repeat; background-size: cover;">
                    </div>
                    <div class="img-container"
                         style="background: url(<?php echo get_template_directory_uri(); ?>/img/_MG_7748.jpg) center center no-repeat; background-size: cover;">
                    </div>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/left_white.svg" class="control" id="left"
                     onclick="goLeft()">
                <img src="<?php echo get_template_directory_uri(); ?>/img/right_white.svg" class="control" id="right"
                     onclick="goRight()">
                <img src="<?php echo get_template_directory_uri(); ?>/img/full.svg" class="control" id="full"
                     onclick="goFull()">
            </div>
            <!--<div class="group">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/left.svg" class="control">
                    <div class="center"></div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/full.svg" class="control">
                    <div class="center"></div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/right.svg" class="control">

                </div>-->
        </div>

        <div class="section-div-top"></div>
        <div class="section">
            <div class="title">CANTIDADES DE OBRA</div>
            <table>
                <tr class="impar">
                    <th>Pantallas ancladas de 9 m de ancho y 10,75 m de altura</th>
                    <td>Anclajes de 40 Ton, longitud 40 metros</td>
                    <td>4.800 mL</td>
                </tr>
                <tr>
                    <th rowspan="6">Vigas sobre pilotes preexcavados de 2.5 m de ancho y 0.75 m de altura</th>
                    <td>Anclajes de 50 Ton, longitud 40 metros</td>
                    <td>1.980 mL</td>
                </tr>
                <tr class="impar">
                    <td>Acero de refuerzo 60.000 psi</td>
                    <td>164.821 Kg</td>
                </tr>
                <tr>
                    <td>Concreto bombeado 3.000 psi</td>
                    <td>1.637 m³</td>
                </tr>
                <tr class="impar">
                    <td>Micropilotes diámetro 0.15 m de longitud variable</td>
                    <td>13.878 mL</td>
                </tr>
                <tr>
                    <td>Sistema drenante con geodrén planar para las pantallas</td>
                    <td>2.268 m2</td>
                </tr>
                <tr class="impar">
                    <td>Drenes horizontales diámetro de 2″, longitud por dren 15 metros</td>
                    <td>1.200 mL</td>
                </tr>
                <tr>
                    <th rowspan="4">Sistema de drenaje</th>
                    <td>Filtros en espina de pescado tipo francés</td>
                    <td>1.219.5 mL</td>
                </tr>
                <tr class="impar">
                    <td>Suelo Cemento e=0.15m con base granular y cemento al 5%</td>
                    <td>1.545 m³</td>
                </tr>
                <tr>
                    <td>Conformación mecánica</td>
                    <td>24.080 m³</td>
                </tr>
                <tr class="impar">
                    <td>Canal en concha gavión</td>
                    <td>250 m³</td>
                </tr>
                <tr>
                    <th>Obras de Impacto Urbano</th>
                    <td>Empradización con grama</td>
                    <td>43.468 m2</td>
                </tr>
            </table>
        </div>
        <div class="section-div-bottom"></div>
        <div id="map">
            <div id="map-container"></div>
            <script src="https://npmcdn.com/leaflet@1.0.0-rc.3/dist/leaflet.js"></script>
            <?php get_footer(); ?>
