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

    _.each($('.proyect'), function(proyect) {
        if(w >= 900) {
            $('#' + proyect.id).mouseenter(moveRightCircle); 
            $('#' + proyect.id).mouseleave(moveLeftCircle); 
        }
    });
}


function moveRightCircle() {
    var circle = document.getElementById('circle_' + this.id);
    var classCircle = circle.getAttribute("class");
    if(classCircle !== 'move-right') {
        _.each($('.proyect'), function(proyect) {
            var circle = document.getElementById('circle_' + proyect.id);
            circle.setAttribute("class", ""); 
        });
        circle.setAttribute("class", "move-right");
        $('#view_' + this.id).addClass('ver-mas-proyect-show');
    }
    else {
        circle.setAttribute("class", ""); 
        //$('#view_' + this.id).removeClass('ver-mas-proyect-show');
    }
}

function moveLeftCircle() {
    var circle = document.getElementById('circle_' + this.id);
    circle.setAttribute("class", ""); 
    $('#view_' + this.id).removeClass('ver-mas-proyect-show');
}
