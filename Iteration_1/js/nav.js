function hamburgerNav() {
    width = parseInt($(this).width());
    var x = document.getElementById("tabs");
    if (x.style.visibility === "visible") {
        x.style.visibility = "hidden";
        x.style.transform = "translateY(-2000%)";
        x.style.padding = "padding: 0 10px;"
    } else {
        x.style.visibility = "visible";
        x.style.transform = "translateY(0)";
    }

    if(width < 768) {
        x.style.visibility = "visible";
        x.style.transform = "translateY(0)";
    }

  }