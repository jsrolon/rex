window.onload = function() {

    var slideout = new Slideout({
        'panel': document.getElementById('panel'),
        'menu': document.getElementById('menu'),
        'padding': 256,
        'tolerance': 70
    });

    $('#menu-icon').click(function() {
        slideout.toggle();
    });
}
