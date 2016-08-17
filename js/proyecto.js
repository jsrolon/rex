window.onload = function() {

    /*var w = window.innerWidth;
    var h = window.innerHeight;
     _.each($('.popup-img'), function(img) {
        console.log(img.width, img.height);
        if(img.width > img.height) {
            console.log('wide');
            img.style.width = w + 'px';
            img.style.height = 'auto';
        }
        else {
            console.log('tall');
            img.className += 'img-tall';
        }
    });*/

    $('.carousel').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 5000,
        draggable: false,
        speed: 1000,
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

    $('#menu-icon').click(function() {
        slideout.toggle();
    });

    slideout.on('beforeopen', function() {
        $('.fixed').addClass('fixed-open');
    });

    slideout.on('beforeclose', function() {
        $('.fixed').removeClass('fixed-open');
    });

    var h = $('.title').height() + 40 + $('.quarry-header-image').height();
    $('.padding-top').height(h);

    var mymap = L.map('map-container', {
        touchZoom: false,
        scrollWheelZoom: false
    }).setView([4.536383123316907, -74.15239334106447], 13);
    L.tileLayer('http://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> &copy; <a href="http://cartodb.com/attributions">CartoDB</a>',
        subdomains: 'abcd',
        maxZoom: 19
    }).addTo(mymap);
    new L.Control.Zoom({ position: 'bottomleft' }).addTo(mymap);

    var greenIcon = L.icon({
        iconUrl: '/img/marker.svg',
        iconSize:     [28,40], // size of the icon
        iconAnchor:   [14,40] // point of the icon which will correspond to marker's location
    });

    L.marker([4.536383123316907, -74.15239334106447], {icon: greenIcon}).addTo(mymap);

    function onMapClick(e) {
        console.log(e.latlng);
    }

    mymap.on('click', onMapClick);

    $('.carousel-slide').height($('.slick-track').height());
    //$('#full-carousel').hide();
}

var originalHeight = $('.description').height();
document.getElementById('panel').onscroll = function() {
    if(this.scrollTop < 142) {
        $('.description').height(originalHeight - this.scrollTop);
    }
    else {
        $('.description').height(0);
    }
}

function goLeft() {
    $('.carousel').slick('slickPrev');
}

function goRight() {
    $('.carousel').slick('slickNext');
}

function exitFull() {
    $('#full-carousel').addClass('hide-z-index');
}

function goFull() {
    $('#full-carousel').removeClass('hide-z-index');
}


