width = parseInt($(this).width());

window.onscroll = function() {
    stickyNav()
};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;
var spacing = document.getElementsByClassName("verti-spacing")[0];

function stickyNav() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
    spacing.style.marginTop = "80px";
  } else {
    navbar.classList.remove("sticky");
    spacing.style.marginTop = "0px";
  }
}

// Mobile Nav
var page = document.getElementById('page-container');
var menu = document.getElementById('menu-toggle');
var content = document.getElementById('page-content');

menu.addEventListener('click', function () {
  page.classList.toggle('shazam');
});
content.addEventListener('click', function () {
  page.classList.remove('shazam');
});