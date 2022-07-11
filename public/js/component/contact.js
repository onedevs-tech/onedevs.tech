

$(document).ready(function(){

   $('.js-contact-send').click(function(){

      // aviso campos no rellenos
      //

      var nombre    = $('input[name="nombre"]').first().val().trim();
      var telefono  = $('input[name="telefono"]').first().val().trim();
      var email     = $('input[name="email"]').first().val().trim();

      if (nombre === '' || telefono === '' || email === '') {
         $(this).addClass('bg-red');
         $(this).html('Rellena los campos con asterisco');
         setTimeout(function (){
            $('.js-contact-send').removeClass('bg-red');
            $('.js-contact-send').html('Enviar');
         }, 4500);
         return;
      }

      // enviando
      //

      $(this).off('click');
      $(this).removeClass('clickable');
      $(this).addClass('bg-yellow');
      $(this).html('Enviando...');

      $.ajax({
         type: 'POST',
         url: '/ajax-backend/contact.php',
         data: {
            'nombre': $('input[name="nombre"]').first().val().trim(),
            'apellidos': $('input[name="apellidos"]').first().val().trim(),
            'empresa': $('input[name="empresa"]').first().val().trim(),
            'telefono': $('input[name="telefono"]').first().val().trim(),
            'email': $('input[name="email"]').first().val().trim(),
            'mensaje': $('textarea[name="mensaje"]').first().val().trim()
         },
         success: function success(data, textStatus, jqXHR) {
            $('input[name="nombre"]').first().val('');
            $('input[name="apellidos"]').first().val('');
            $('input[name="empresa"]').first().val('');
            $('input[name="telefono"]').first().val('');
            $('input[name="email"]').first().val('');
            $('textarea[name="mensaje"]').first().val('');
            $('.js-contact-send').removeClass('bg-yellow');
            $('.js-contact-send').addClass('bg-green');
            $('.js-contact-send').html('¡ Enviado !');
         },
         error: function error(jqXHR, textStatus, errorThrown) {
            console.log('error @ ajax @ contact.js');
            console.log(textStatus);
            console.log(errorThrown);
         },
         dataType: 'json'
      });

   });

});
