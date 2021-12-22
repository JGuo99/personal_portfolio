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
        main.style.margin = "0 5%";
    } 
    else if(width > 1500 && width <= 2000) {
        main.style.margin = "0 10%";
    }
    else if(width > 2000) {
        main.style.margin = "0 25%";
    }
    else if(width < 768) {
        main.style.margin = "0";
        $('#mobile').attr("href", "style/home/css/mobile.min.css");
        document.getElementById('logo').innerHTML = "SG";
        // document.getElementById('mobile-seperator').style.display = "block";
        document.getElementById('tabs').style.display = "none";
        document.getElementById('menu-toggle').style.display = "block";
        document.getElementById('menu-items').style.display = "block";
        //Mobile Redirection
        // window.location = "../../mobile.php";
    }
    else {    // Reset to Default
        $('#mobile').attr("href", "");
        document.getElementById('logo').innerHTML = "Sheng Guo";
        // document.getElementById('mobile-seperator').style.display = "none";
        document.getElementById('tabs').style.display = "block";
        document.getElementById('menu-toggle').style.display = "none";
        document.getElementById('menu-items').style.display = "none";
    }
}