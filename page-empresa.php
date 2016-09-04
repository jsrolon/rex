<?php get_header(); ?>

<div class="title fixed">EMPRESA</div>
<div id="menu-icon" class="black fixed">
    <svg viewBox="0 0 24 24">
        <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z"/>
    </svg>
</div>
<main id="panel">
    <div class="padding-top"></div>
    <div class="page-content-wrapper center-vertical">

        <div class="images-circle-wrapper">
            <!--<img src="<?php echo get_template_directory_uri(); ?>/img/hseq.png" id="hseq_img"/>
            <img src="<?php echo get_template_directory_uri(); ?>/img/quienes_somos.png" id="quienes_img"/>
            <svg viewBox="0 0 675 675" class="hover-svg">
                <a href="/quienes-somos">
                    <path
                        d="M337.5,0c-186.396,0 -337.5,151.104 -337.5,337.5c0,186.396 151.104,337.5 337.5,337.5l0,-100.41c-130.941,0 -237.09,-106.149 -237.09,-237.09c0,-130.941 106.149,-237.09 237.09,-237.09l0,-100.41Z"
                        id="quienes_path"/>
                </a>
                <a href="/hseq">
                    <path
                        d="M337.5,675c186.396,0 337.5,-151.104 337.5,-337.5c0,-186.396 -151.104,-337.5 -337.5,-337.5l0,100.41c130.941,0 237.09,106.149 237.09,237.09c0,130.941 -106.149,237.09 -237.09,237.09l0,100.41Z"
                        id="hseq_path"/>
                </a>
            </svg>
            <div id="hseq" class="name">
                <a href="/hseq">GESTIÓN INTEGRAL
                    <div>HSEQ</div>
                </a>
            </div>
            <div id="quienes" class="name">
                <a href="/quienes-somos">QUIENES
                    <div>SOMOS</div>
                </a>
            </div>-->
            <div id="name_7" class="name">
                <a href="/empresa/quienes-somos/">QUIENES
                        <div>SOMOS</div>
                </a>
            </div>
            <div id="name_8" class="name">
                <a href="/empresa/hseq/">GESTIÓN INTEGRAL
                    <div>HSEQ</div>
                </a>
            </div>
            
            <div class="svgContainer">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewbox="0 0 400 400">
                  <defs>
                    <clipPath id="svgPath7">
                        <path d="M200,0c-110.457,0 -200,89.543 -200,200c0,110.457 89.543,200 200,200l0,-100c-55.228,0 -100,-44.772 -100,-100c0,-55.228 44.772,-100 100,-100l0,-100Z"/>
                    </clipPath>
                    <clipPath id="svgPath8">
                        <path d="M200,0c110.457,0 200,89.543 200,200c0,110.457 -89.543,200 -200,200l0,-100c55.228,0 100,-44.772 100,-100c0,-55.228 -44.772,-100 -100,-100l0,-100Z"/>
                    </clipPath>
                    
                  </defs>

                  <a href="/empresa/quienes-somos/">
                  <image preserveAspectRatio="xMidYMid slice" xlink:href="<?php the_field('imagen_quienes_somos'); ?>" x="0" y="0" width="200" height="400" clip-path="url(#svgPath7)" viewbox="0 0 200 400" class="imagesCircle" id="image_7"/>
                  </a>

                  <a href="/empresa/hseq/">
                  <image preserveAspectRatio="xMidYMid slice" xlink:href="<?php the_field('imagen_hseq'); ?>" x="200" y="0" width="200" height="400" clip-path="url(#svgPath8)" viewbox="0 0 200 400" class="imagesCircle" id="image_8"/>
                  </a>


                </svg>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>
