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
}