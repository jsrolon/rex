/**
 * Created by jsrolon on 26-08-2016.
 */

window.onload = function() {

    var h = window.innerHeight - 100;
    jQuery('.carouselFull').height(h);

    /*var w = window.innerWidth;
     var h = window.innerHeight;
     _.each(jQuery('.popup-img'), function(img) {
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

    jQuery('.carousel').slick({
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

    jQuery('#menu-icon').click(function() {
        slideout.toggle();
    });

    slideout.on('beforeopen', function() {
        jQuery('.fixed').addClass('fixed-open');
    });

    slideout.on('beforeclose', function() {
        jQuery('.fixed').removeClass('fixed-open');
    });

    var h = jQuery('.title').height() + 40 + jQuery('.quarry-header-image').height();
    //jQuery('.padding-top').height(h);

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
        iconUrl: WP_GLOBALS.templateUri + '/img/marker.svg',
        iconSize:     [28,40], // size of the icon
        iconAnchor:   [14,40], // point of the icon which will correspond to marker's location
        popupAnchor:  [0, -40]
    });
    var greyIcon = L.icon({
        iconUrl: WP_GLOBALS.templateUri + '/img/marker_grey.svg',
        iconSize:     [28,40], // size of the icon
        iconAnchor:   [14,40], // point of the icon which will correspond to marker's location
        popupAnchor:  [0, -40]
    });

    var marker2 = L.marker([selectedLocations[1]['lat'], selectedLocations[1]['lng']], {icon: greyIcon}).addTo(mymap);
    marker2.bindPopup("<b>Dirección:</b> " + selectedLocations[1]['address'] + " <hr><b>Atención al cliente:</b> 312 235 22 12<hr><b>Cantera:</b> 320 449 80 05 / 310 500 27 80").openPopup();
    marker2.addTo(mymap);
    marker2.on('click', function(e) {
        marker2.setIcon(greenIcon);
        marker.setIcon(greyIcon);
        marker2.openPopup();
        jQuery('.tab').removeClass("selected");
        jQuery('#2').addClass("selected");
        jQuery('.tab-content').addClass('hidden');
        jQuery('#desc_2').removeClass('hidden');
        jQuery('.section-white').addClass('hidden');
        jQuery('#table_2').removeClass('hidden');
    });

    //4.1011504, -73.6392484

    var marker = L.marker([selectedLocations[0]['lat'], selectedLocations[0]['lng']], {icon: greenIcon}).addTo(mymap);
    marker.bindPopup("<b>Dirección:</b> " + selectedLocations[0]['address'] + "<hr><b>Atención al cliente:</b> 312 235 22 12<hr><b>Cantera:</b> 312 235 34 19<hr><a target='_blank' href='https://maps.google.com/maps/place/" + selectedLocations[0]['lat'] + "+" + selectedLocations[0]['lng'] + "/@" + selectedLocations[0]['lat'] + "," + selectedLocations[0]['lng'] + ",15z'>Ver en Google Maps</a>").openPopup();
    marker.addTo(mymap);
    marker.on('click', function(e) {
        marker.setIcon(greenIcon);
        marker2.setIcon(greyIcon);
        marker.openPopup();
        jQuery('.tab').removeClass("selected");
        jQuery('#1').addClass("selected");
        jQuery('.tab-content').addClass('hidden');
        jQuery('#desc_1').removeClass('hidden');
        jQuery('.section-white').addClass('hidden');
        jQuery('#table_1').removeClass('hidden');
    });

    function onMapClick(e) {
        console.log(e.latlng);
    }

    mymap.on('click', onMapClick);

    jQuery('.carousel-slide').height(jQuery('.slick-track').height());
    //jQuery('#full-carousel').hide();

    jQuery('.tab').click(function(event) {
        jQuery('.tab').removeClass("selected");
        jQuery(this).addClass("selected");
        jQuery('.tab-content').addClass('hidden');
        jQuery('#desc_' + event.target.id).removeClass('hidden');
        jQuery('.carousels').addClass('hidden');
        jQuery('#carousel_' + event.target.id).removeClass('hidden');
        jQuery('.section-white').addClass('hidden');
        setTimeout(function() {jQuery('.carousel').slick('slickPrev');},0);
        jQuery('#table_' + event.target.id).removeClass('hidden');
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

    jQuery('.tab').mouseenter(function(event) {
        jQuery(this).addClass("selected-hover");
    });

    jQuery('.tab').mouseleave(function(event) {
        jQuery(this).removeClass("selected-hover");
    });

    var rows = jQuery('tbody').children();
    var firstLenght = jQuery(jQuery('tbody').children()[0]).children().length;
    for(var i = 0; i < rows.length; i++) {
        if(jQuery(rows[i]).children().length == firstLenght) {
            jQuery(jQuery(rows[i]).children()[0]).addClass('tableFirst');
        }
    }

    jQuery('.popup').css('opacity', '1');
}

function goLeft() {
    jQuery('.carousel').slick('slickPrev');
}

function goRight() {
    jQuery('.carousel').slick('slickNext');
}

function exitFull1(event) {
    if(event.target.className != 'control' || event.target.id == 'full_exit') {
        jQuery('#full-carousel-1').addClass('hide-z-index');
    }
    //
}

function exitFull2(event) {
    if(event.target.className != 'control' || event.target.id == 'full_exit') {
        jQuery('#full-carousel-2').addClass('hide-z-index');
    }
}

function goFull1() {
    jQuery('#full-carousel-1').removeClass('hide-z-index');
}

function goFull2() {
    jQuery('#full-carousel-2').removeClass('hide-z-index');
}

document.onkeydown = checkKey;

function checkKey(e) {

    e = e || window.event;

    if (e.keyCode == '37') {
       // left arrow
        goLeft();
    }
    else if (e.keyCode == '39') {
       // right arrow
       goRight();
    }
    else if (e.keyCode == '27') {
        jQuery('#full-carousel-1').addClass('hide-z-index');
        jQuery('#full-carousel-2').addClass('hide-z-index');
    }

}
