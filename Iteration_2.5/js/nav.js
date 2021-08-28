width = parseInt($(this).width());

function hamburgerNav() {
    var x = document.getElementById("tabs");
    if (x.style.visibility === "visible") {
        x.style.visibility = "hidden";
        x.style.transform = "translateY(-2000%)";
        x.style.padding = "padding: 0 10px;"
    } else {
        x.style.visibility = "visible";
        x.style.transform = "translateY(0)";
    }

    if (width < 768) {
        x.style.visibility = "visible";
        x.style.transform = "translateY(0)";
    }
}
/*
var about = document.getElementById("about-a");
about.addEventListener("click", function(){
    if (width < 767) {
        var target = document.getElementById("about");
        target.classList.toggle("toggleSection");
    }
});

var contact = document.getElementById("contact-a");
contact.addEventListener("click", function(){
    if (width < 767) {
        // var target = document.getElementById("contact").getElementsByClassName("module-container")[0];
        var target = document.getElementById("contact");
        target.classList.toggle("toggleSection");
    }
});
*/