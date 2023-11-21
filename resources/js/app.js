import './bootstrap';

//JQUERY
$(document).ready(function () {
  $('.modal').modal();
  $('.sidenav').sidenav();
  $('.slider').slider();
})

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
