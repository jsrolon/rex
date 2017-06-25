<?php get_header(); ?>

<?php while (have_posts()) :
the_post(); ?>

<!--<div class="quarry-header-image-background fixed"></div>-->
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
<div id="menu-icon" class="fixed menu-icon">
    <svg viewBox="0 0 24 24">
        <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z"/>
    </svg>
</div>

<?php if (function_exists('easy_image_gallery_get_image_ids')) {
    $images = easy_image_gallery_get_image_ids();
} ?>

<div class="proyecto">
    <div class="popup general-info hide-z-index" id="full-carousel" onclick="exitFull(event)">
        <div class="group">
            <div class="carousel carouselFull">
                <?php foreach ($images as $image) { ?>
                    <div class="carousel-slide">
                        <img data-lazy="<?php
                        $img_src_arr = wp_get_attachment_image_src($image, 'full-hd');
                        $img_url = $img_src_arr[0];
                        echo $img_url;

                        ?>"/>
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
        <div class="padding-top"></div>

        <div class="text">
            <h2 style="width:100%; text-align: center;">REX CARGO</h2>
        </div>
        <div class="section">
            <img src="<?php
            $img_id = fjarrett_get_attachment_id_by_url(get_field('logo'));
            $img_src_arr = wp_get_attachment_image_src($img_id, 'full-hd');
            $img_url = $img_src_arr[0];
            echo $img_url;
            ?>"/>
            <div class="right">
                <div><b>Dirección: </b><?php the_field('direccion'); ?></div>
                <div><b>Teléfono: </b><?php the_field('telefono'); ?></div>
                <?php the_field('descripcion'); ?>
            </div>
        </div>

        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             style="width: 1185px; height: 335px; bottom: 0px; margin-top: 30px; left: 50%; display: block; margin: auto;"
             viewbox="0 0 1185 335">
            <defs>
                <clipPath id="svgPath11">
                    <path
                            d="M0,0l145.251,33.723l191.38,-27.515l161.624,47.48l305.062,-53.688l208.772,22.715l172.911,-22.715l0,335l-173.02,-37.932l-241.055,37.932l-201.114,-52.15l-225.864,41.556l-200.316,-24.325l-143.631,34.919"
                            style="fill:none;stroke-width:1px;stroke:#000;"/>
                </clipPath>
            </defs>
            <image preserveAspectRatio="xMidYMid slice" xlink:href="<?php
            $img_id = fjarrett_get_attachment_id_by_url(get_field('imagen_de_mision'));
            $img_src_arr = wp_get_attachment_image_src($img_id, 'full-hd');
            $img_url = $img_src_arr[0];
            echo $img_url;
            ?>"
                   x="0" y="0" width="1185" height="335" clip-path="url(#svgPath11)" viewbox="0 0 1185 335"/>
            <rect width="1185" height="335" style="fill:rgba(0,0,0,0.2);" clip-path="url(#svgPath11)"/>
        </svg>

        <div class="mision-vision" id="mision">
            <div style="width: 100%; height: 300px; overflow: hidden; position: relative;"></div>
            <!--<div class="dark"></div>-->
            <img src="<?php echo get_template_directory_uri(); ?>/img/mision_title.svg"/>
            <div class="text"><?php the_field('mision'); ?>
            </div>
        </div>

        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             style="width: 1185px; height: 335px; bottom: 0px; left: 50%; display: block; margin: auto;"
             viewbox="0 0 1185 335">
            <defs>
                <clipPath id="svgPath12">
                    <path
                            d="M0,335l202.153,-30.922l132.847,29.85l139.005,-38.007l413.117,40.128l211.506,-33.563l86.372,32.514l0,-282.85l-173.02,-37.932l-241.055,37.932l-201.114,-52.15l-225.864,41.557l-200.316,-24.325l-143.631,34.918"
                            style="fill:none;stroke-width:1px;stroke:#000;"/>
                </clipPath>
            </defs>
            <image preserveAspectRatio="xMidYMid slice" xlink:href="<?php
            $img_id = fjarrett_get_attachment_id_by_url(get_field('imagen_de_vision'));
            $img_src_arr = wp_get_attachment_image_src($img_id, 'full-hd');
            $img_url = $img_src_arr[0];
            echo $img_url;
            ?>"
                   x="0" y="0" width="1185" height="335" clip-path="url(#svgPath12)" viewbox="0 0 1185 335"/>
            <rect width="1185" height="335" style="fill:rgba(0,0,0,0.2);" clip-path="url(#svgPath12)"/>
        </svg>
        <div class="mision-vision" id="vision">
            <div style="width: 100%; height: 300px; overflow: hidden; position: relative;">
            </div>
            <!--<div class="dark"></div>-->
            <img src="<?php echo get_template_directory_uri(); ?>/img/vision_title.svg"/>
            <div class="text"><?php the_field('vision'); ?></div>
        </div>
        <?php if (count($images) > 0) { ?>
            <div class="proyecto">
                <div class="general-info">
                    <div class="group">
                        <div class="carousel">
                            <?php foreach ($images as $image) {
                                $attachment_img_src = wp_get_attachment_image_src($image, 'medium_large');
                                $url = $attachment_img_src[0]; ?>
                                <div class="carousel-slide" onclick="goFull()">
                                    <img data-lazy="<?php
                                    echo $url; ?>" class="img-small-carousel">
                                </div>
                            <?php } ?>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/left_white.svg" class="control"
                             id="left"
                             onclick="goLeft()">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/right_white.svg" class="control"
                             id="right"
                             onclick="goRight()">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/full.svg" class="control" id="full"
                             onclick="goFull()">
                    </div>
                </div>
            </div>
        <?php } ?>

        <?php
        endwhile; //resetting the page loop
        wp_reset_query(); //resetting the page query
        ?>

        <?php get_footer(); ?>
