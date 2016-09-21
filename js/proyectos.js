var images = [{
    image: '',
    name: ''
}, {
    image: '',
    name: ''
}];

var ids_images = ['edificacion', 'estabilizacion', 'hidraulicas', 'restauracion', 'movimientos', 'quienes', 'hseq'];

window.onload = function() {

    var slideout = new Slideout({
        'panel': document.getElementById('panel'),
        'menu': document.getElementById('menu'),
        'padding': 256,
        'tolerance': 70,
        'touch': false
    });

    jQuery('#menu-icon').click(function() {
        slideout.toggle();
    });

    slideout.on('beforeopen', function() {
        jQuery('.fixed').addClass('fixed-open');
        console.log(jQuery('.fixed'));
    });

    slideout.on('beforeclose', function() {
        jQuery('.fixed').removeClass('fixed-open');
    });

    jQuery('.imagesCircle').mouseenter(function() {
        jQuery(this).fadeTo("fast",1);
        var id = this.id.split('_')[1];
        jQuery('#name_' + id).addClass('hover');
        jQuery('#fact_' + id).fadeTo("fast",1);
    });

    jQuery('.name').mouseenter(function() {
        jQuery(this).addClass('hover');
        var id = this.id.split('_')[1];
        jQuery('#image_' + id).fadeTo("fast",1);
        jQuery('#fact_' + id).fadeTo("fast",1);
    });

    jQuery('.imagesCircle').mouseleave(function() {
        jQuery(this).fadeTo("fast",0.5);
        var id = this.id.split('_')[1];
        jQuery('#name_' + id).removeClass('hover');
        jQuery('#fact_' + id).fadeTo("fast",0);
    });

    jQuery('.name').mouseleave(function() {
        jQuery(this).removeClass('hover');
        var id = this.id.split('_')[1];
        jQuery('#image_' + id).fadeTo("fast",0.5);
        jQuery('#fact_' + id).fadeTo("fast",0);
    });

    jQuery('.imagesCircle').click(function() {
        window.location.href = jQuery(this).parent().attr("href");
    });
}