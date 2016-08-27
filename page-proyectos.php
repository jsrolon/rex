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
            <img src="<?php echo get_template_directory_uri(); ?>/img/edificacion.png" id="edificacion_img"/>
            <img src="<?php echo get_template_directory_uri(); ?>/img/estabilizacion.png" id="estabilizacion_img"/>
            <img src="<?php echo get_template_directory_uri(); ?>/img/movimientos.png" id="movimientos_img"/>
            <img src="<?php echo get_template_directory_uri(); ?>/img/hidraulicas.png" id="hidraulicas_img"/>
            <img src="<?php echo get_template_directory_uri(); ?>/img/restauracion.png" id="restauracion_img"/>
            <svg viewBox="0 0 900 900" class="hover-svg">
                <a href="<?php echo get_category_link(get_cat_ID('Estabilización')); ?>">
                    <path
                        d="M450,0c-194.952,0 -367.732,125.532 -427.975,310.942l128.392,41.718c42.171,-129.787 163.117,-217.66 299.583,-217.66l0,-135Z"
                        id="estabilizacion_path"/>
                </a>
                <a href="<?php echo get_category_link(get_cat_ID('Edificación')); ?>">
                    <path
                        d="M877.975,310.942c-60.243,-185.41 -233.023,-310.942 -427.975,-310.942l0,134.494c136.686,0 257.826,88.013 300.064,218.009l127.911,-41.561Z"
                        id="edificacion_path"/>
                </a>
                <a href="<?php echo get_category_link(get_cat_ID('Hidráulicas')); ?>">
                    <path
                        d="M714.503,814.058c116.537,-84.669 185.497,-220.011 185.497,-364.058c0,-47.221 -7.432,-94.148 -22.025,-139.058l-128.392,41.718c10.214,31.437 15.417,64.285 15.417,97.34c0,100.833 -48.272,195.572 -129.848,254.84l79.351,109.218Z"
                        id="hidraulicas_path"/>
                </a>
                <a href="<?php echo get_category_link(get_cat_ID('Restauración')); ?>">
                    <path
                        d="M22.025,310.942c-14.593,44.91 -22.025,91.837 -22.025,139.058c0,144.047 68.96,279.389 185.497,364.058l79.351,-109.218c-81.576,-59.268 -129.848,-154.007 -129.848,-254.84c0,-33.055 5.203,-65.903 15.417,-97.34l-128.392,-41.718Z"
                        id="restauracion_path"/>
                </a>
                <a href="<?php echo get_category_link(get_cat_ID('Movimientos')); ?>">
                    <path
                        d="M185.497,814.058c76.881,55.857 169.472,85.942 264.503,85.942c95.031,0 187.622,-30.085 264.503,-85.942l-79.351,-109.218c-53.817,39.101 -118.631,60.16 -185.152,60.16c-66.521,0 -131.335,-21.059 -185.152,-60.16l-79.351,109.218Z"
                        id="movimientos_path"/>
                </a>
            </svg>
            <div id="edificacion" class="name">
                <a href="<?php echo get_category_link(get_cat_ID('Edificación')); ?>">EDIFICACIÓN Y
                        <div>URBANIZACIÓN</div>
                </a>
            </div>
            <div id="estabilizacion" class="name">
                <a href="<?php echo get_category_link(get_cat_ID('Estabilización')); ?>">OBRAS DE
                    <div>ESTABILIZACIÓN</div>
                </a>
            </div>
            <div id="hidraulicas" class="name">
                <a href="<?php echo get_category_link(get_cat_ID('Hidráulicas')); ?>">OBRAS
                    <div>HIDRÁULICAS</div>
                </a>
            </div>
            <div id="restauracion" class="name">
                <a href="<?php echo get_category_link(get_cat_ID('Restauración')); ?>">RESTAURACIÓN
                    <div>AMBIENTAL</div>
                </a>
            </div>
            <div id="movimientos" class="name">
                <a href="<?php echo get_category_link(get_cat_ID('Movimientos')); ?>">MOVIMIENTO DE
                    <div>TIERRAS</div>
                </a>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>
