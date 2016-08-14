var images = [{
    image: '',
    name: ''
}, {
    image: '',
    name: ''
}];

window.onload = function() {

    var w = window.innerWidth;
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

    _.each($('.proyect'), function(proyect) {
        if(w >= 900) {
            $('#' + proyect.id).mouseenter(moveRightCircle); 
            $('#' + proyect.id).mouseleave(moveLeftCircle); 
        }
    });
}


function moveRightCircle() {
    var info = document.getElementById('info_' + this.id);
    $('#info_' + this.id).addClass('info-tall');
    $('#view_' + this.id).addClass('show-opacity');
}

function moveLeftCircle() {
    var info = document.getElementById('info_' + this.id);
    $('#info_' + this.id).removeClass('info-tall');
    $('#view_' + this.id).removeClass('show-opacity');
}
