
$(document).ready(function(){

   $('.btn-aceptar-cookies').click(function(){
      $('.cookie-consent').addClass('d-none');
      $.ajax({
         type: 'POST',
         url: '/ajax-backend/cookie-consent.php',
         data: {
            'OneDevsTechCookieConsent': 1
         },
         success: function success(data, textStatus, jqXHR) {
         },
         error: function error(jqXHR, textStatus, errorThrown) {
            console.log('error @ ajax @ cookie-consent.js');
            console.log(textStatus);
            console.log(errorThrown);
         },
         dataType: 'json'
      });      
   });

   $('.btn-rechazar-cookies').click(function(){
      $('.cookie-consent').addClass('d-none');
      $.ajax({
         type: 'POST',
         url: '/ajax-backend/cookie-consent.php',
         data: {
            'OneDevsTechCookieConsent': 0
         },
         success: function success(data, textStatus, jqXHR) {
         },
         error: function error(jqXHR, textStatus, errorThrown) {
            console.log('error @ ajax @ cookie-consent.js');
            console.log(textStatus);
            console.log(errorThrown);
         },
         dataType: 'json'
      });      
   });

});
