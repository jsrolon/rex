var images = [{
    image: '',
    name: ''
}, {
    image: '',
    name: ''
}];

window.onload = function() {
    jQuery('.index-carousel').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 5000,
        draggable: false,
        speed: 2000,
        pauseOnHover: false,
        swipe: false,
        swipeToSlide: false,
        touchMove: false
    });

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