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
    if(location.pathname.startsWith("/test")) {
        var pathname = location.pathname.substring(5, location.pathname.lenght);
        if(pathname.startsWith("/en")) {//english
            var new_href = 'http://' + location.hostname + '/test/es' + pathname.substring(3, pathname.lenght);
            console.log(new_href);
            window.location.href = new_href;
        }
    }
    else {
        if(location.pathname.startsWith("/en")) {//english
            var new_href = 'http://' + location.hostname + '/es' + location.pathname.substring(3, location.pathname.lenght);
            console.log(new_href);
            window.location.href = new_href;
        }
    }
}

function en() {    
    if(location.pathname.startsWith("/test")) {
        var pathname = location.pathname.substring(5, location.pathname.lenght);
        if(!pathname.startsWith("/en")) {//english
            var new_href = 'http://' + location.hostname + '/test/en' + pathname.substring(3, pathname.lenght);
            console.log(new_href);
            window.location.href = new_href;
        }
    }
    else {
        if(!location.pathname.startsWith("/en")) {//english
            var new_href = 'http://' + location.hostname + '/en' + location.pathname.substring(3, location.pathname.lenght);
            console.log(new_href);
            window.location.href = new_href;
        }
    }
}