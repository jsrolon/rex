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
            <img src="<?php echo get_template_directory_uri(); ?>/img/hseq.png" id="hseq_img"/>
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
                <a href="/hseq.html">GESTIÓN INTEGRAL
                    <div>HSEQ</div>
                </a>
            </div>
            <div id="quienes" class="name">
                <a href="/quienes_somos.html">QUIENES
                    <div>SOMOS</div>
                </a>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>
