/**
 * Created by jsrolon on 04-09-2016.
 */

jQuery("document").ready(function () {

    var slideout = new Slideout({
        'panel': document.getElementById('panel'),
        'menu': document.getElementById('menu'),
        'padding': 256,
        'tolerance': 70,
        'touch': false
    });

    jQuery('#menu-icon').click(function () {
        console.log(':)');
        slideout.toggle();
    });

    slideout.on('beforeopen', function () {
        jQuery('.fixed').addClass('fixed-open');
        console.log(jQuery('.fixed'));
    });

    slideout.on('beforeclose', function () {
        jQuery('.fixed').removeClass('fixed-open');
    });

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
        touchMove: false,
        lazyLoad: 'ondemand',
    });

    var slideout = new Slideout({
        'panel': document.getElementById('panel'),
        'menu': document.getElementById('menu'),
        'padding': 256,
        'tolerance': 70,
        'touch': false
    });

    jQuery('#menu-icon').click(function () {
        slideout.toggle();
    });

    slideout.on('beforeopen', function () {
        jQuery('.fixed').addClass('fixed-open');
    });

    slideout.on('beforeclose', function () {
        jQuery('.fixed').removeClass('fixed-open');
    });

    var h = jQuery('.title').height() + 40 + jQuery('.quarry-header-image').height();
    //jQuery('.padding-top').height(h);

    jQuery('.carousel-slide').height(jQuery('.slick-track').height());
    //jQuery('#full-carousel').hide();
});

var originalHeight = jQuery('.description').height();
document.getElementById('panel').onscroll = function () {
    if (this.scrollTop < 142) {
        jQuery('.description').height(originalHeight - this.scrollTop);
    }
    else {
        jQuery('.description').height(0);
    }
}

function goLeft() {
    jQuery('.carousel').slick('slickPrev');
}

function goRight() {
    jQuery('.carousel').slick('slickNext');
}

function exitFull() {
    jQuery('#full-carousel').addClass('hide-z-index');
}

function goFull() {
    jQuery('#full-carousel').removeClass('hide-z-index');
}


document.getElementById('panel').onscroll = function () {
    if (this.scrollTop < 107) {
        jQuery('.quarry-header-image').height(200 - this.scrollTop);
        jQuery('.quarry-header-image-background').height(215 - this.scrollTop);
    }
    else {
        jQuery('.quarry-header-image').height(95);
        jQuery('.quarry-header-image-background').height(95);
    }
}
