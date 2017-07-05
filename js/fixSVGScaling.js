/**
 * Created by jsrolon on 25-06-2017.
 */

'use strict';

var recalculateSVGElementsWidths = function() {
    if(jQuery(window).width() > 768) { // only apply corrections for desktop sizes

        // fix the header
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

        // fix images
        var multiple = windowWidth / 1280;
        var imagesViewBoxString = "0 0 " + headerWidth + " 335";
        var innerImagesWidth = Math.ceil(multiple * 1280);
        var innerImagesViewBoxString = "0 0 " + innerImagesWidth + " 335";

        var svgImages = document.getElementsByClassName('scalable-svg');
        for(var i = 0; i < svgImages.length; i++) {
            svgImages[i].style.width = headerWidth;
            svgImages[i].setAttribute('viewBox', imagesViewBoxString);

            var innerImage = svgImages[i].querySelector('image');
            innerImage.setAttribute('width', innerImagesWidth);
            innerImage.setAttribute('viewBox', innerImagesViewBoxString);

            var innerRect = svgImages[i].querySelector('rect');
            innerRect.setAttribute('width', innerImagesWidth);
        }
    }
};

recalculateSVGElementsWidths();
window.addEventListener('resize', recalculateSVGElementsWidths);
