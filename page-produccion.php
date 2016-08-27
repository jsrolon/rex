<?php get_header(); ?>

<div class="title fixed">
    PRODUCCIÓN DE MATERIALES PÉTREOS
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
        <!--<img src="/img/left_white.svg" class="control" id="left" onclick="goLeft()">
        <img src="/img/right_white.svg" class="control" id="right" onclick="goRight()">
        <img src="/img/full_exit.svg" class="control" id="full" onclick="exitFull()">-->
    </div>
    <div class="group">
        <img src="<?php echo get_template_directory_uri(); ?>/img/left_white.svg" class="control" onclick="goLeft()">
        <img src="<?php echo get_template_directory_uri(); ?>/img/full_exit.svg" class="control" onclick="exitFull()">
        <img src="<?php echo get_template_directory_uri(); ?>/img/right_white.svg" class="control" onclick="goRight()">
    </div>
</div>
<main id="panel">
    <div class="page-content-wrapper">
        <div id="map">
            <div id="map-container"></div>
        </div>
        <div class="padding-top"></div>


        <div class="section">
            <div class="general-info">
                <div class="tab-container">
                    <div class="tab selected" id="1">CANTERA LOMA PELADA</div>
                    <div class="tab" id="2">CANTERA GUAYURIBA</div>
                </div>
                <div id="desc_1" class="tab-content">
                    <div class="group subtitle">CONTRATO PARA LA EXPLOTACIÓN DE LA CANTERA “LOMA PELADA” UBICADA EN EL
                        KM. 5 VÍA MOSQUERA – LA MESA (SECTOR DE MONDOÑEDO)
                    </div>
                    <div class="group">
                        <div class="label">ENTIDAD CONTRATANTE</div>
                        <div class="info">Inversiones Mondoñedo LTDA</div>
                    </div>
                    <div class="group">
                        <div class="label">CONTRATISTA</div>
                        <div class="info">REX INGENIERIA S.A</div>
                    </div>
                    <div class="group">
                        <div class="label">UBICACIÓN</div>
                        <div class="info">Kilómetro 5 vía Mosquera – La Mesa, Cundinamarca</div>
                    </div>
                    <div class="group">
                        <div class="label">FECHA DE EJECUCIÓN</div>
                        <div class="info">enero 2004 – junio 2030</div>
                    </div>
                    <div class="group">
                        <div class="label">TOTAL A EJECUTAR</div>
                        <div class="info">20,000,000 m3</div>
                    </div>
                    <div class="group">
                        <div class="label">TOTAL EJECUTADO</div>
                        <div class="info">11,000,000 m3</div>
                    </div>
                    <div class="group">
                        <div class="label">ACTIVIDADES EJECUTADAS</div>
                        <div class="info">Explotación, procesamiento y comercialización de agregados pétreos.</div>
                    </div>
                </div>
                <div id="desc_2" class="tab-content hidden">
                    <div class="group subtitle">EXPLOTACIÓN, BENEFICIO Y COMERCIALIZACIÓN DE MATERIALES DE GRAVAS Y
                        ARENAS PROVENIENTENS DEL RIO GUAYURIBA
                    </div>
                    <div class="group">
                        <div class="label">ENTIDAD CONTRATANTE</div>
                        <div class="info">Ramiro Alfonso López Rodríguez</div>
                    </div>
                    <div class="group">
                        <div class="label">CONTRATISTA</div>
                        <div class="info">REX INGENIERIA S.A</div>
                    </div>
                    <div class="group">
                        <div class="label">UBICACIÓN</div>
                        <div class="info">Kilómetro 9 vía del Amor, Anillo vial Villaviencio, Meta</div>
                    </div>
                    <div class="group">
                        <div class="label">FECHA DE EJECUCIÓN</div>
                        <div class="info">enero 2015 – enero 2030</div>
                    </div>
                    <div class="group">
                        <div class="label">TOTAL A EJECUTAR</div>
                        <div class="info">7,000,000 m3</div>
                    </div>
                    <div class="group">
                        <div class="label">TOTAL EJECUTADO</div>
                        <div class="info">70,000 m3</div>
                    </div>
                    <div class="group">
                        <div class="label">ACTIVIDADES EJECUTADAS</div>
                        <div class="info">Explotación, procesamiento y comercialización de agregados pétreos.</div>
                    </div>

                </div>
            </div>

        </div>
        <div class="section-div-bottom"></div>

        <div class="section section-white" id="table_1">
            <div class="title">PRODUCTOS</div>
            <table>
                <tr class="impar">
                    <th rowspan="3">IDU 2005</th>
                    <td>Base granular ET2005 – BGA / BGB / BGC → 1.5”</td>
                </tr>
                <tr>
                    <td>Subbase granular ET2005 – SBGA / SBGB → 1.5”</td>
                </tr>
                <tr class="impar">
                    <td>Subbase granular ET2005 – SBGC → 1.5”</td>
                </tr>
                <tr>
                    <th rowspan="3">IDU 2011</th>
                    <td>Base granular ET20011 – BGA / BGB / BGC → 1.5”</td>
                </tr>
                <tr class="impar">
                    <td>Subbase granular ET2011 – SBGA / SBGB → 1.5”</td>
                </tr>
                <tr>
                    <td>Subbase granular ET2011 – SBGC → 1.5”</td>
                </tr>
                <tr class="impar">
                    <th rowspan="2">INVIAS</th>
                    <td>Subbase granular SBG – 1 → 2”</td>
                </tr>
                <tr>
                    <td>Base granular BG – 1 → 1.5”</td>
                </tr>
                <tr class="impar">
                    <th rowspan="12">VARIOS <span>productos en proceso asldmaskldmksla</th>
                    <td>Recebo seleccionado B-200 Tipo A → 3”</span></td>
                </tr>
                <tr>
                    <td>Subbase granular B-400 →1.5”</td>
                </tr>
                <tr class="impar">
                    <td>Base granular B-600 Tipo C y D - 1” a 1.5”</td>
                </tr>
                <tr>
                    <td>Recebo Común</td>
                </tr>
                <tr class="impar">
                    <td>Piedra R-30 (Martillo) → 10”</td>
                </tr>
                <tr>
                    <td>Piedra R-15 (Clasificada) → 6”</td>
                </tr>
                <tr class="impar">
                    <td>Piedra (Sobrante de zaranda)</td>
                </tr>
                <tr>
                    <td>Triturado 1.5 – 2”</td>
                </tr>
                <tr class="impar">
                    <td>Triturado 3/4“</td>
                </tr>
                <tr>
                    <td>Triturado Monogradado 3/4”</td>
                </tr>
                <tr class="impar">
                    <td>Triturado Monogradado 1/2”</td>
                </tr>
                <tr>
                    <td>Arena de Trituración</td>
                </tr>
            </table>
        </div>
        <div class="section section-white hidden" id="table_2">
            <div class="title">PRODUCTOS</div>
            <table>
                <tr class="impar">
                    <th rowspan="2">INVIAS</th>
                    <td>Subbase granular SBG – 1 → 2”</td>
                </tr>
                <tr>
                    <td>Base granular BG – 1 → 1.5”</td>
                </tr>
                <tr class="impar">
                    <th rowspan="7">PRODUCTOS DE PROCESO</th>
                    <td>Arena lavada de Rio</td>
                </tr>
                <tr>
                    <td>Arena triturada de Rio</td>
                </tr>
                <tr class="impar">
                    <td>Gravilla de 1/2”</td>
                </tr>
                <tr>
                    <td>Gravilla de 3/4”</td>
                </tr>
                <tr class="impar">
                    <td>Gravilla de 1”</td>
                </tr>
                <tr>
                    <td>Grava de 1.5”</td>
                </tr>
                <tr class="impar">
                    <td>Piedra filtro 3” y 4”</td>
                </tr>
                <tr>
                    <th rowspan="6">PRODUCTOS DE SELECCIÓN DIRECTA</th>
                    <td>Piedra (canto rodado, cargue mecánico)</td>
                </tr>
                <tr class="impar">
                    <td>Material Crudo (cargado en el rio)</td>
                </tr>
                <tr>
                    <td>Material Crudo (cargado en planta)</td>
                </tr>
                <tr class="impar">
                    <td>Material Tamizado 2” (cargado en planta)</td>
                </tr>
                <tr>
                    <td>Material Tamizado 3” (cargado en planta)</td>
                </tr>
                <tr class="impar">
                    <td>Material seleccionado (zaranda 3”) cargado en rio</td>
                </tr>
            </table>
        </div>

        <?php get_footer(); ?>
