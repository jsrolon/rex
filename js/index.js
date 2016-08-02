var images = [{
    image: '',
    name: ''
}, {
    image: '',
    name: ''
}];

window.onload = function() {
    $('.index-carousel').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3000,
        draggable: false,
        speed: 1000,
        pauseOnHover: false,
        swipe: false,
        swipeToSlide: false,
        touchMove: false
    });

    if(window.innerWidth < 900) {
        var slideout = new Slideout({
            'panel': document.getElementById('panel'),
            'menu': document.getElementById('menu'),
            'padding': 256,
            'tolerance': 70
        });

        $('#menu-icon').click(function() {
            slideout.toggle();
        });
    }
}
