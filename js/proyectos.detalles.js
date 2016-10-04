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

    _.each(jQuery('.info'), function(key, value) {
        if(key.id) {
            var h = jQuery(jQuery(key).children()[0]).height();
            jQuery(key).height(h);

            var w = window.innerWidth;
            if(w >= 900) {
                console.log(jQuery(key).parent());
                jQuery(key).parent().mouseenter(moveRightCircle);
                jQuery(key).parent().mouseleave(moveLeftCircle);
            }
            else {
                jQuery(key).height(h+20);
            }
        }

    })
}


function moveRightCircle() {
    var h = jQuery(jQuery(jQuery(this).children()[0]).children()[0]).height();
    jQuery(jQuery(this).children()[0]).height(h + 20);
    jQuery('#view_' + this.id).addClass('show-opacity');
    //jQuery('#info_' + this.id).addClass('info-tall');
    //jQuery('#view_' + this.id).addClass('show-opacity');
}

function moveLeftCircle() {
    var h = jQuery(jQuery(jQuery(this).children()[0]).children()[0]).height();
    jQuery(jQuery(this).children()[0]).height(h);
    jQuery('#view_' + this.id).removeClass('show-opacity');
}