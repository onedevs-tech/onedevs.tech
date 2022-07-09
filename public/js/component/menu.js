

$(document).ready(function(){

   $('.menu .control.open').click(function(){
      open_menu();
   });

   $('.menu .control.close').click(function(){
      close_menu();
   });

   $('.menu ul.options a').click(function(){
      close_menu();
   });

});


function open_menu()
{
   $('.menu .control.open').addClass('d-none');
   $('.menu .control.close').removeClass('d-none');
   $('.menu div.options').removeClass('d-none');
}


function close_menu()
{
   $('.menu .control.close').addClass('d-none');
   $('.menu .control.open').removeClass('d-none');
   $('.menu div.options').addClass('d-none');
}
