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

    _.each(jQuery('.proyect'), function(proyect) {
        if(w >= 900) {
            jQuery('#' + proyect.id).mouseenter(moveRightCircle);
            jQuery('#' + proyect.id).mouseleave(moveLeftCircle);
        }
    });
}


function moveRightCircle() {
    var info = document.getElementById('info_' + this.id);
    jQuery('#info_' + this.id).addClass('info-tall');
    jQuery('#view_' + this.id).addClass('show-opacity');
}

function moveLeftCircle() {
    var info = document.getElementById('info_' + this.id);
    jQuery('#info_' + this.id).removeClass('info-tall');
    jQuery('#view_' + this.id).removeClass('show-opacity');
}

function es() {
    console.log(location.hostname + '-' + location.pathname);
    if(location.pathname.startsWith("/en")) {//english
        var new_href = 'http://' + location.hostname + '/es' + location.pathname.substring(3, location.pathname.lenght);
        console.log(new_href);
        window.location.href = new_href;
    }
}

function en() {
    console.log(location.hostname + '-' + location.pathname);
    if(!location.pathname.startsWith("/en")) {//english
        var new_href = 'http://' + location.hostname + '/en' + location.pathname;
        console.log(new_href);
        window.location.href = new_href;
    }
}
