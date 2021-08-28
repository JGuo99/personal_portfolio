$(document).ready(function() {
    adjustStyle();
    $(function() {
        adjustStyle($(this).width());
        $(window).resize(function() {
            adjustStyle($(this).width());
        });
    });
});

function adjustStyle(width) {
    width = parseInt(width);
    var main = document.getElementById("fluid-container");
    if(width >= 1000 && width <= 1500) {
        main.style.margin = "0 10%";
    } 
    else if(width > 1500 && width <= 2000) {
        main.style.margin = "0 20%";
    }
    else if(width > 2000) {
        main.style.margin = "0 25%";
    }
    else if(width < 768) {
        $('#mobile').attr("href", "css/mobile.css");
        document.getElementById('logo').innerHTML = "SG";
        document.getElementById('gallery').style.display = "none";
        document.getElementById('mobile-seperator').style.display = "block";
    }
    else {    // Reset to Default
        main.style.margin = "0";
        $('#mobile').attr("href", "");
        document.getElementById('logo').innerHTML = "Sheng Guo";
        document.getElementById('gallery').style.display = "block";
        document.getElementById('mobile-seperator').style.display = "none";
    }
}