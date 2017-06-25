/**
 * Created by jsrolon on 25-06-2017.
 */

'use strict';

var recalculateSVGElementsWidths = function() {
    var windowWidth = jQuery(window).width();
    var headerWidth = windowWidth - jQuery('nav#menu').width();
    var viewboxString = "0 0 " + headerWidth + " 215";
    console.log(viewboxString);

    var svg = document.getElementById('outer-svg-element');
    svg.style.width = headerWidth;
    svg.setAttribute('viewBox', viewboxString);

    var jQuerySVG = jQuery(svg);
    jQuerySVG.children('rect').attr('width', headerWidth);

    var image = document.getElementById('inner-svg-image');
    image.setAttribute('width', headerWidth);
    image.setAttribute('viewBox', viewboxString);
};

window.addEventListener('load', recalculateSVGElementsWidths);
window.addEventListener('resize', recalculateSVGElementsWidths);
