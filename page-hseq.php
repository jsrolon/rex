<?php get_header(); ?>

<?php while (have_posts()) :
the_post(); ?>

<!--<div class="quarry-header-image fixed"
     style=" background: url(<?php the_field('imagen_cabecera'); ?>) center bottom no-repeat; background-size: cover;"></div>-->
<div class="quarry-header-image fixed" style="width: 100%; height: 215px; overflow: hidden; position: relative;">
    <svg id="outer-svg-element" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="width: 2304px; height: 215px; position:absolute; transform: translateX(-50%); bottom: 0px; left: 50%;" viewBox="0 0 2304 215">
        <defs>
            <clipPath id="svgPath10" clipPathUnits="objectBoundingBox">
                <path d="M0,1l0,-1l1,0l0,1l-0.07417,-0.2209l-0.1146,0.2209l-0.2329,-0.1709l-0.2012,0.1709l-0.07019,-0.1631l-0.1832,0.1631l-0.0833,-0.177l-0.04026,0.177Z" style="fill:none;stroke-width:1px;stroke:#000;"></path>
            </clipPath>
        </defs>
        <svg viewBox="0 0 1280 215" preserveAspectRatio="none">
            <path d="M0,215l0,-215l1280,0l0,215l-94.944,-47.511l-146.801,47.511l-298.126,-36.751l-257.573,36.751l-89.855,-35.073l-234.519,35.073l-106.638,-38.059l-51.544,38.059Z" style="fill:none;stroke-width:14px;stroke:#fff;"></path>
        </svg>
        <rect width="2304" height="215" style="fill:rgb(255,255,255);" clip-path="url(#svgPath10)"></rect>
        <rect width="2304" height="215" style="fill:rgba(0,0,0,0.2);" clip-path="url(#svgPath10)"></rect>
        <image id="inner-svg-image" preserveAspectRatio="xMidYMid slice" xlink:href="<?php
        $img_id = fjarrett_get_attachment_id_by_url(get_field('imagen_de_cabecera'));
        $img_src_arr = wp_get_attachment_image_src($img_id, 'full-hd');
        $img_url = $img_src_arr[0];
        echo $img_url;
        ?>" x="0" y="0"
               width="1185" height="215" clip-path="url(#svgPath10)" viewbox="0 0 2304 215"/>
        <rect width="1185" height="215" style="fill:rgba(0,0,0,0.2);" clip-path="url(#svgPath10)"/>
    </svg>
</div>
<div class="title fixed"><?php the_title(); ?></div>
<div id="menu-icon" class="fixed">
    <svg viewBox="0 0 24 24">
        <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z"/>
    </svg>
</div>
<main id="panel">
    <div class="page-content-wrapper">
        <div class="padding-top"></div>

        <div class="section">
            <div class="left">
                <?php the_field('primera_seccion'); ?>
            </div>
            <img src="<?php
            $img_id = fjarrett_get_attachment_id_by_url(get_field('imagen_certificado'));
            $img_src_arr = wp_get_attachment_image_src( $img_id, 'medium_large' );
            $img_url = $img_src_arr[0];
            echo $img_url;
            ?>"/>
        </div>

        <div class="section-div-top"></div>
        <div class="section section-grey">
            <img src="<?php
            $img_id = fjarrett_get_attachment_id_by_url(get_field('imagen_segunda_seccion'));
            $img_src_arr = wp_get_attachment_image_src( $img_id, 'medium_large' );
            $img_url = $img_src_arr[0];
            echo $img_url;
            ?>"/>
            <div class="right">
                <div class="title-section title-section-white"><?php the_field('titulo_segunda_seccion'); ?></div>
                <?php the_field('segunda_seccion'); ?>
            </div>
        </div>
        <div class="section section-grey">
            <div class="left">
                <div class="title-section title-section-white"><?php the_field('titulo_tercera_seccion'); ?></div>
                <?php the_field('tercera_seccion'); ?>
            </div>
            <img src="<?php
            $img_id = fjarrett_get_attachment_id_by_url(get_field('imagen_tercera_seccion'));
            $img_src_arr = wp_get_attachment_image_src( $img_id, 'medium_large' );
            $img_url = $img_src_arr[0];
            echo $img_url;
            ?>"/>
        </div>
        <div class="section-div-bottom"></div>

        <div class="section">
            <img src="<?php
            $img_id = fjarrett_get_attachment_id_by_url(get_field('imagen_premio'));
            $img_src_arr = wp_get_attachment_image_src( $img_id, 'medium_large' );
            $img_url = $img_src_arr[0];
            echo $img_url;
            ?>"/>
            <div class="right">
                <div class="title-section title-section-white"><?php the_field('titulo_cuarta_seccion'); ?></div>
                <?php the_field('cuarta_seccion'); ?>
            </div>
        </div>

        <?php
        endwhile; //resetting the page loop
        wp_reset_query(); //resetting the page query
        ?>

        <?php get_footer(); ?>
