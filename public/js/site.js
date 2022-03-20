$(function(){

    "use strict";
    var menu = $('#menu-overlay')

    $('#btn-menu').click(function(e){
        menu.css('height','100vh');
    });

    $('#close-menu').click(function(e){
        menu.css('height','0vh');
    });
  });
