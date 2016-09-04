<?php get_header(); ?>

<?php while (have_posts()) :
the_post(); ?>

<!--<div class="quarry-header-image-background fixed"></div>-->
<div class="quarry-header-image fixed" style="width: 100%; height: 215px; overflow: hidden; position: relative;">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="width: 1185px; height: 215px; position:absolute; transform: translateX(-50%); bottom: 0px; left: 50%;" viewbox="0 0 1185 238">
        <defs>
        <clipPath id="svgPath10">
            <path d="M0,215l0,-215l1280,0l0,215l-94.944,-47.511l-146.801,47.511l-298.126,-36.751l-257.573,36.751l-89.855,-35.073l-234.519,35.073l-106.638,-38.059l-51.544,38.059Z" style="fill:none;stroke-width:1px;stroke:#000;"/>
        </clipPath>
        </defs>
        <path d="M0,215l0,-215l1280,0l0,215l-94.944,-47.511l-146.801,47.511l-298.126,-36.751l-257.573,36.751l-89.855,-35.073l-234.519,35.073l-106.638,-38.059l-51.544,38.059Z" style="fill:none;stroke-width:45px;stroke:#fff;"/>
        <rect width="1185" height="215" style="fill:rgb(255,255,255);" clip-path="url(#svgPath10)"/>
        <image preserveAspectRatio="xMidYMid slice" xlink:href="<?php the_field('imagen_de_cabecera'); ?>" x="0" y="0" width="1185" height="215" clip-path="url(#svgPath10)" viewbox="0 0 1185 215"/>
        <rect width="1185" height="215" style="fill:rgba(0,0,0,0.2);" clip-path="url(#svgPath10)"/>
    </svg>

</div>
<!--<div class="quarry-header-image fixed"
     style=" background: url(<?php the_field('imagen_de_cabecera'); ?>) center bottom no-repeat; background-size: cover;">
         <div class="dark"></div>
     </div>-->

<div class="title fixed"><?php the_title(); ?></div>
<div id="menu-icon" class="fixed menu-icon">
    <svg viewBox="0 0 24 24">
        <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z"/>
    </svg>
</div>
<main id="panel">
    <div class="page-content-wrapper">
        <div class="padding-top"></div>
        <div class="text"><?php the_field('descripcion'); ?></div>
            <div class="mision-vision" id="mision">
                <div style="width: 100%; height: 335px; overflow: hidden; position: relative;">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="width: 1185px; height: 335px; position:absolute; transform: translateX(-50%); bottom: 0px; left: 50%;" viewbox="0 0 1185 335">
                        <defs>
                            <clipPath id="svgPath11">
                                <path d="M0,0l145.251,33.723l191.38,-27.515l161.624,47.48l305.062,-53.688l208.772,22.715l172.911,-22.715l0,335l-173.02,-37.932l-241.055,37.932l-201.114,-52.15l-225.864,41.556l-200.316,-24.325l-143.631,34.919" style="fill:none;stroke-width:1px;stroke:#000;"/>
                            </clipPath>
                        </defs>
                        <image preserveAspectRatio="xMidYMid slice" xlink:href="<?php the_field('imagen_de_mision'); ?>" x="0" y="0" width="1185" height="335" clip-path="url(#svgPath11)" viewbox="0 0 1185 335"/>
                        <rect width="1185" height="335" style="fill:rgba(0,0,0,0.2);" clip-path="url(#svgPath11)"/>
                    </svg>
                </div>
                <!--<div class="dark"></div>-->
                <img src="/wp-content/themes/rex/img/mision_title.svg" />
                <div class="text"><?php the_field('mision'); ?>
                </div>
            </div>
            <div class="mision-vision" id="vision">
                <div style="width: 100%; height: 335px; overflow: hidden; position: relative;">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="width: 1185px; height: 335px; position:absolute; transform: translateX(-50%); bottom: 0px; left: 50%;" viewbox="0 0 1185 335">
                        <defs>
                            <clipPath id="svgPath12">
                                 <path d="M0,335l202.153,-30.922l132.847,29.85l139.005,-38.007l413.117,40.128l211.506,-33.563l86.372,32.514l0,-282.85l-173.02,-37.932l-241.055,37.932l-201.114,-52.15l-225.864,41.557l-200.316,-24.325l-143.631,34.918" style="fill:none;stroke-width:1px;stroke:#000;"/>
                            </clipPath>
                        </defs>
                        <image preserveAspectRatio="xMidYMid slice" xlink:href="<?php the_field('imagen_de_vision'); ?>" x="0" y="0" width="1185" height="335" clip-path="url(#svgPath12)" viewbox="0 0 1185 335"/>
                        <rect width="1185" height="335" style="fill:rgba(0,0,0,0.2);" clip-path="url(#svgPath12)"/>
                    </svg>
                </div>
                <!--<div class="dark"></div>-->
                <img src="/wp-content/themes/rex/img/vision_title.svg" />
                <div class="text"><?php the_field('vision'); ?></div>
            </div>

            <div class="subtitle">NUESTRO COMPROMISO</div>

            <div class="text last"><?php the_field('nuestro_compromiso'); ?></div>

        <?php
        endwhile; //resetting the page loop
        wp_reset_query(); //resetting the page query
        ?>

        <?php get_footer(); ?>
