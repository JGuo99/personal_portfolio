// elements
var page = document.getElementsByClassName('page')[0];
var menu = document.getElementsByClassName('menu_toggle')[0];
var content = document.getElementsByClassName('content')[0];

menu.addEventListener('click', function () {
  page.classList.toggle('shazam');
});
content.addEventListener('click', function () {
  page.classList.remove('shazam');
});