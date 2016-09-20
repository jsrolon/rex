window.onload = function() {

    var h = window.innerHeight - 100;
    jQuery('.carouselFull').height(h);

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
    if(this.scrollTop < 140) {
        $('.quarry-header-image').height(200 - this.scrollTop);
    }
    else {
        $('.quarry-header-image').height(62);
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