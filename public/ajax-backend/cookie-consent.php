<?php


   if ($_SERVER['REQUEST_METHOD'] != 'POST') {
      $error_msg = \get_error('json', 'bad request method, expected POST');
      echo \json_encode($error_msg);
      return;
   }


   if (\array_key_exists('OneDevsTechCookieConsent', $_POST)) {
      $cookie_secure = ( $GLOBALS['config']['environment'] === 'production' ? true : false );
      $cookie_httponly = true;
      \setcookie(
         'OneDevsTechCookieConsent',           // cookie name
         $_POST['OneDevsTechCookieConsent'],   // cookie value
         \time() + 2592000,                    // la cookie expira a los 30 días
         '/',                                  // cookie path
         '',                                   // domain
         $cookie_secure,                       // secure
         $cookie_httponly                      // httponly
      );
   }


   echo \json_encode('ok');
