<?php get_header(); ?>



<div class="proyectos">
    <div class="title fixed">PROYECTOS</div>
</div>
<div id="menu-icon" class="black fixed">
    <svg viewBox="0 0 24 24">
        <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z"/>
    </svg>
</div>
<main id="panel" class="proyectos">
    <div class="padding-top"></div>
    <div class="page-content-wrapper center-vertical">
        <div class="images-circle-wrapper">
            <div id="name_1" class="name">
                <a href="<?php echo get_category_link(get_cat_ID('Rehabilitaciones Ambientales')); ?>">REHABILITACIONES
                        <div>AMBIENTALES</div>
                </a>
            </div>
            <div id="name_2" class="name">
                <a href="<?php echo get_category_link(get_cat_ID('Obras Hidráulicas')); ?>">OBRAS
                    <div>HIDRÁULICAS</div>
                </a>
            </div>
            <div id="name_3" class="name">
                <a href="<?php echo get_category_link(get_cat_ID('Movimientos de Tierras')); ?>">MOVIMIENTO DE
                    <div>TIERRAS</div>
                </a>
            </div>
            <div id="name_4" class="name">
                <a href="<?php echo get_category_link(get_cat_ID('Excavaciones Profundas')); ?>">EXCAVACIONES
                    <div>PROFUNDAS</div>
                </a>
            </div>
            <div id="name_5" class="name">
                <a href="<?php echo get_category_link(get_cat_ID('Obras de Estabilización')); ?>">OBRAS DE
                    <div>ESTABILIZACIÓN</div>
                </a>
            </div>
            <div id="name_6" class="name">
                <a href="<?php echo get_category_link(get_cat_ID('Edificación y Urbanismo')); ?>">EDIFICACIÓN Y
                    <div>URBANISMO</div>
                </a>
            </div>
            <div class="svgContainer">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewbox="0 0 400 400">
                  <defs>
                    <clipPath id="svgPath1">
                        <path d="M373.205,100c-35.726,-61.88 -101.752,-100 -173.205,-100l0,100c35.727,0 68.739,19.06 86.603,50l86.602,-50Z"/>
                    </clipPath>
                    <clipPath id="svgPath2">
                        <path d="M373.205,300c17.554,-30.404 26.795,-64.893 26.795,-100c0,-35.107 -9.241,-69.596 -26.795,-100l-86.602,50c8.776,15.202 13.397,32.446 13.397,50c0,17.554 -4.621,34.798 -13.397,50l86.602,50Z"/>
                    </clipPath>
                    <clipPath id="svgPath3">
                        <path d="M200,400c71.453,0 137.478,-38.12 173.205,-100l-86.602,-50c-17.864,30.94 -50.876,50 -86.603,50l0,100Z"/>
                    </clipPath>
                    <clipPath id="svgPath4">
                        <path d="M26.795,300c35.726,61.88 101.752,100 173.205,100l0,-100c-35.727,0 -68.739,-19.06 -86.603,-50l-86.602,50Z"/>
                    </clipPath>
                    <clipPath id="svgPath5">
                        <path d="M26.795,100c-17.554,30.404 -26.795,64.893 -26.795,100c0,35.107 9.241,69.596 26.795,100l86.602,-50c-8.776,-15.202 -13.397,-32.446 -13.397,-50c0,-17.554 4.621,-34.798 13.397,-50l-86.602,-50Z"/>
                    </clipPath>
                    <clipPath id="svgPath6">
                        <path d="M200,0c-71.453,0 -137.479,38.12 -173.205,100l86.602,50c17.864,-30.94 50.876,-50 86.603,-50l0,-100Z" />
                    </clipPath>
                    
                  </defs>
                  <a href="<?php echo get_category_link(get_cat_ID('Rehabilitaciones Ambientales')); ?>">
                  <image preserveAspectRatio="xMidYMid slice" xlink:href="<?php the_field('imagen_rehabilitaciones_ambientales'); ?>" x="200" y="0" width="174" height="150" clip-path="url(#svgPath1)" viewbox="0 0 174 150" class="imagesCircle" id="image_1"/>
                  </a>

                  <a href="<?php echo get_category_link(get_cat_ID('Obras Hidráulicas')); ?>">
                  <image preserveAspectRatio="xMidYMid slice" xlink:href="<?php the_field('imagen_obras_hidraulicas'); ?>" x="286.6" y="100" width="134" height="200" clip-path="url(#svgPath2)" viewbox="0 0 134 200" class="imagesCircle" id="image_2"/>
                  </a>

                  <a href="<?php echo get_category_link(get_cat_ID('Movimientos de Tierras')); ?>">
                  <image preserveAspectRatio="xMidYMid slice" xlink:href="<?php the_field('imagen_movimientos_tierra'); ?>" x="200" y="250" width="174" height="150" clip-path="url(#svgPath3)" viewbox="0 0 174 150" class="imagesCircle" id="image_3"/>
                  </a>

                  <a href="<?php echo get_category_link(get_cat_ID('Excavaciones Profundas')); ?>">
                  <image preserveAspectRatio="xMidYMid slice" xlink:href="<?php the_field('imagen_excavaciones_profundas'); ?>" x="26.8" y="250" width="174" height="150" clip-path="url(#svgPath4)" viewbox="0 0 174 150" class="imagesCircle" id="image_4"/>
                  </a>

                  <a href="<?php echo get_category_link(get_cat_ID('Obras de Estabilización')); ?>">
                  <image preserveAspectRatio="xMidYMid slice" xlink:href="<?php the_field('imagen_obras_estabilizacion'); ?>" x="0" y="100" width="134" height="200"  clip-path="url(#svgPath5)" viewbox="0 0 134 200" class="imagesCircle" id="image_5"/>
                  </a>

                  <a href="<?php echo get_category_link(get_cat_ID('Edificación y Urbanismo')); ?>">
                  <image preserveAspectRatio="xMidYMid slice" xlink:href="<?php the_field('imagen_edificacion_urbanismo'); ?>" x="26.8" y="0" width="174" height="150" clip-path="url(#svgPath6)" viewbox="0 0 174 150" class="imagesCircle" id="image_6"/>
                  </a>

                </svg>
            </div>
            <div class="facts" id="fact_1"><?php the_field('dato_rehabilitaciones_ambientales'); ?></div>
            <div class="facts" id="fact_2"><?php the_field('dato_obras_hidraulicas'); ?></div>
            <div class="facts" id="fact_3"><?php the_field('dato_movimientos_tierra'); ?></div>
            <div class="facts" id="fact_4"><?php the_field('dato_excavaciones_profundas'); ?></div>
            <div class="facts" id="fact_5"><?php the_field('dato_obras_estabilizacion'); ?></div>
            <div class="facts" id="fact_6"><?php the_field('dato_edificacion_urbanismo'); ?></div>
        </div>

    </div>

    <?php get_footer(); ?>
