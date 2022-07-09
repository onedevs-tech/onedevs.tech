
$(document).ready(function(){

   $('.menu .control.open').click(function(){

      $('.menu .control.open').addClass('d-none');
      $('.menu .control.close').removeClass('d-none');
      $('.menu div.options').removeClass('d-none');

   });

   $('.menu .control.close').click(function(){

      $('.menu .control.close').addClass('d-none');
      $('.menu .control.open').removeClass('d-none');
      $('.menu div.options').addClass('d-none');

   });

});
