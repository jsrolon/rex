jQuery("document").ready(function() {

    var slideout = new Slideout({
        'panel': document.getElementById('panel'),
        'menu': document.getElementById('menu'),
        'padding': 256,
        'tolerance': 70,
        'touch': false
    });

    jQuery('#menu-icon').click(function() {
        console.log(':)');
        slideout.toggle();
    });

    slideout.on('beforeopen', function() {
        jQuery('.fixed').addClass('fixed-open');
        console.log(jQuery('.fixed'));
    });

    slideout.on('beforeclose', function() {
        jQuery('.fixed').removeClass('fixed-open');
    });
});


document.getElementById('panel').onscroll = function() {
    if(this.scrollTop < 107) {
        jQuery('.quarry-header-image').height(200 - this.scrollTop);
        jQuery('.quarry-header-image-background').height(215 - this.scrollTop);
    }
    else {
        jQuery('.quarry-header-image').height(95);
        jQuery('.quarry-header-image-background').height(95);
    }
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

