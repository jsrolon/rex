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

    $('#menu-icon').click(function() {
        slideout.toggle();
    });

    slideout.on('beforeopen', function() {
        $('.fixed').addClass('fixed-open');
        console.log($('.fixed'));
    });

    slideout.on('beforeclose', function() {
        $('.fixed').removeClass('fixed-open');
    });
    
    _.each(ids_images, function(id) {
        $('#' + id).mouseenter(changeOpacityImages);
        $('#' + id).mouseleave(changeOpacityImagesOriginal);
        $('#' + id + '_path').mouseenter(changeOpacityImages);
        $('#' + id + '_path').mouseleave(changeOpacityImagesOriginal);
        $('#' + id + '_a').mouseenter(changeOpacityImages);
        $('#' + id + '_a').mouseleave(changeOpacityImagesOriginal);
    })
}

function changeOpacityImages() {
    var id = this.id.split('_')[0];
    $('#' + id).addClass('hover');
    $('#' + id + '_a').addClass('selected');
    $('#' + id + '_img').addClass('show-opacity');
}

function changeOpacityImagesOriginal() {
    var id = this.id.split('_')[0];
    $('#' + id).removeClass('hover');
    $('#' + id + '_a').removeClass('selected');
    $('#' + id + '_img').removeClass('show-opacity');
}
