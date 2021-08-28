function hoverView(x) {
    width = parseInt($(this).width());
    var icon1 = document.getElementById('i1');
    var icon2 = document.getElementById('i2');
    var icon3 = document.getElementById('i3');
    var icon4 = document.getElementById('i4');
    var icon5 = document.getElementById('i5');
    x == "reset";

    if(width >= 768) {
        if(x == "1") {
            icon1.style.fontSize = "75.5px";
            icon2.style.fontSize = "42.5px";
            icon3.style.fontSize = "42.5px";
            icon4.style.fontSize = "42.5px";
        } else if(x == "2") {
            icon1.style.fontSize = "42.5px";
            icon2.style.fontSize = "75.5px";
            icon3.style.fontSize = "42.5px";
            icon4.style.fontSize = "42.5px";
            icon5.style.fontSize = "42.5px";
        } else if(x == "3") {
            icon1.style.fontSize = "42.5px";
            icon2.style.fontSize = "42.5px";
            icon3.style.fontSize = "75.5px";
            icon4.style.fontSize = "42.5px";
            icon5.style.fontSize = "42.5px";
        } else if(x == "4") {
            icon1.style.fontSize = "42.5px";
            icon2.style.fontSize = "42.5px";
            icon3.style.fontSize = "42.5px";
            icon4.style.fontSize = "75.5px";
            icon5.style.fontSize = "42.5px";
        } else if(x == "5") {
            icon1.style.fontSize = "42.5px";
            icon2.style.fontSize = "42.5px";
            icon3.style.fontSize = "42.5px";
            icon4.style.fontSize = "42.5px";
            icon5.style.fontSize = "75.5px";
        }
        else if(x == "reset") {
            icon1.style.fontSize = "42.5px";
            icon2.style.fontSize = "48.5px";
            icon3.style.fontSize = "55.5px";
            icon4.style.fontSize = "46.5px";    // Custom Size
            icon5.style.fontSize = "42.5px";
        }
    }
}