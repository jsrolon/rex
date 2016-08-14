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


document.getElementById('panel').onscroll = function() {
    if(this.scrollTop < 122) {
        $('.quarry-header-image').height(200 - this.scrollTop);
    }
    else {
        $('.quarry-header-image').height(80);
    }
}

