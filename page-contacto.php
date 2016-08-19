<?php get_header(); ?>

<div class="contact-header-image fixed"
     style=" background: url(<?php echo get_template_directory_uri(); ?>/img/contact-header-image.jpg) center bottom no-repeat; background-size: cover;">
</div>

<div class="title fixed">CONTACTO</div>
<div id="menu-icon" class="fixed">
    <svg viewBox="0 0 24 24">
        <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z"/>
    </svg>
</div>

<main id="panel">
    <!--<img src="/img/contact-header-image.svg" id="contact-header-image">-->
    <form class="contact-form center">
        <div>
            <div class="contact-form-input-group">
                <label for="nombre">NOMBRE</label>
                <input id="nombre" type="text">
            </div>
            <div class="contact-form-input-group">
                <label for="email">EMAIL</label>
                <input id="email" type="email">
            </div>
        </div>

        <label for="mensaje" class="label-mensaje">MENSAJE</label>
        <textarea name="mensaje" id="mensaje"></textarea>

        <button>ENVIAR</button>
    </form>

    <?php get_footer(); ?>
