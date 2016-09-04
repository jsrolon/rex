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

    _.each(ids_images, function(id) {
        jQuery('#' + id).mouseenter(changeOpacityImages);
        jQuery('#' + id).mouseleave(changeOpacityImagesOriginal);
        jQuery('#' + id + '_path').mouseenter(changeOpacityImages);
        jQuery('#' + id + '_path').mouseleave(changeOpacityImagesOriginal);
        jQuery('#' + id + '_a').mouseenter(changeOpacityImages);
        jQuery('#' + id + '_a').mouseleave(changeOpacityImagesOriginal);
    })

    jQuery('.imagesCircle').mouseenter(function() {
        jQuery(this).fadeTo("fast",1);
        var id = this.id.split('_')[1];
        jQuery('#name_' + id).addClass('hover');
    });

    jQuery('.name').mouseenter(function() {
        jQuery(this).addClass('hover');
        var id = this.id.split('_')[1];
        jQuery('#image_' + id).fadeTo("fast",1);
    });

    jQuery('.imagesCircle').mouseleave(function() {
        jQuery(this).fadeTo("fast",0.5);
        var id = this.id.split('_')[1];
        jQuery('#name_' + id).removeClass('hover');
    });

    jQuery('.name').mouseleave(function() {
        jQuery(this).removeClass('hover');
        var id = this.id.split('_')[1];
        jQuery('#image_' + id).fadeTo("fast",0.5);
    });
}

function changeOpacityImages() {
    var id = this.id.split('_')[0];
    jQuery('#name_' + id).addClass('hover');
    jQuery('#image_' + id).addClass('show-opacity');
}

function changeOpacityImagesOriginal() {
    var id = this.id.split('_')[0];
    jQuery('#' + id).removeClass('hover');
    jQuery('#' + id + '_a').removeClass('selected');
    jQuery('#' + id + '_img').removeClass('show-opacity');
}
