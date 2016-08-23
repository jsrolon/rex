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
    //$('.padding-top').height(h);

    var mymap = L.map('map-container', {
        touchZoom: false,
        scrollWheelZoom: false
    }).setView([4.658554956408209, -73.97094726562501], 9);
    L.tileLayer('http://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> &copy; <a href="http://cartodb.com/attributions">CartoDB</a>',
        subdomains: 'abcd',
        maxZoom: 19
    }).addTo(mymap);
    new L.Control.Zoom({ position: 'bottomleft' }).addTo(mymap);

    var greenIcon = L.icon({
        iconUrl: '/img/marker.svg',
        iconSize:     [28,40], // size of the icon
        iconAnchor:   [14,40], // point of the icon which will correspond to marker's location
        popupAnchor:  [0, -40]
    });
    var greyIcon = L.icon({
        iconUrl: '/img/marker_grey.svg',
        iconSize:     [28,40], // size of the icon
        iconAnchor:   [14,40], // point of the icon which will correspond to marker's location
        popupAnchor:  [0, -40]
    });

    var marker2 = L.marker([4.1011504, -73.6392484], {icon: greyIcon}).addTo(mymap);
    marker2.bindPopup("<b>Dirección:</b> Km 9 Vía del Amor, Villavicencio, Meta. <hr><b>Atención al cliente:</b> 312 235 22 12<hr><b>Cantera:</b> 320 449 80 05 / 310 500 27 80").openPopup();
    marker2.addTo(mymap);
    marker2.on('click', function(e) {
        marker2.setIcon(greenIcon);
        marker.setIcon(greyIcon);
        marker2.openPopup();
        $('.tab').removeClass("selected");
        $('#2').addClass("selected");
        $('.tab-content').addClass('hidden');
        $('#desc_2').removeClass('hidden');
        $('.section-white').addClass('hidden');
        $('#table_2').removeClass('hidden');
    });

    //4.1011504, -73.6392484

    var marker = L.marker([4.7023443, -74.2370281], {icon: greenIcon}).addTo(mymap);
    marker.bindPopup("<b>Dirección:</b> Mosquera Km 5. Vía La Mesa, Cundinamarca. Sector Mondoñedo.<hr><b>Atención al cliente:</b> 312 235 22 12<hr><b>Cantera:</b> 312 235 34 19").openPopup();
    marker.addTo(mymap);
    marker.on('click', function(e) {
        marker.setIcon(greenIcon);
        marker2.setIcon(greyIcon);
        marker.openPopup();
        $('.tab').removeClass("selected");
        $('#1').addClass("selected");
        $('.tab-content').addClass('hidden');
        $('#desc_1').removeClass('hidden');
        $('.section-white').addClass('hidden');
        $('#table_1').removeClass('hidden');
    });

    function onMapClick(e) {
        console.log(e.latlng);
    }

    mymap.on('click', onMapClick);

    $('.carousel-slide').height($('.slick-track').height());
    //$('#full-carousel').hide();

    $('.tab').click(function(event) {
        $('.tab').removeClass("selected");
        $(this).addClass("selected");
        $('.tab-content').addClass('hidden');
        $('#desc_' + event.target.id).removeClass('hidden');
        $('.section-white').addClass('hidden');
        $('#table_' + event.target.id).removeClass('hidden');
        if(event.target.id == 1) {
            marker.setIcon(greenIcon);
        marker2.setIcon(greyIcon);
        marker.openPopup();
        }
        else {
            marker2.setIcon(greenIcon);
            marker.setIcon(greyIcon);
            marker2.openPopup();
        }
    });

    $('.tab').mouseenter(function(event) {
        $(this).addClass("selected-hover");
    });

    $('.tab').mouseleave(function(event) {
        $(this).removeClass("selected-hover");
    });
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


