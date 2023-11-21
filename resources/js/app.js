import './jquery.mask';
import './bootstrap';

//JQUERY
$(document).ready(function () {
  $('.modal').modal();
  $('.sidenav').sidenav();
  $('.slider').slider();
  $('.materialboxed').materialbox();
  $('.parallax').parallax();
  
  //Configurações JQuery Mask
  //$("#cpf").mask("000.000.000-00");
  $("#tel").mask("(00)0.0000-0000");
  
})

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
