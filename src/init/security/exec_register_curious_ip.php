<?php


   function register_curious_ip()
   {

      // nos conectamos a la base de datos "onedevs_404"
      //
      $dbconn = \mysqli_connect('127.0.0.1', 'onedevs_404', 'k9mn0ol8m,12', 'onedevs_404');
      if (\mysqli_connect_errno()) {
         echo 'error connecting to database :-( ' . \mysqli_connect_error();
         die();
      }

      // insertamos en la tabla "captures_404" la IP del usuario (como IP bloqueda) y otros datos útiles
      //
      $datetime = \date('Y-m-d H:i:s');
      $ip = $_SERVER['REMOTE_ADDR'];
      $referer = $_SERVER['HTTP_REFERER'];
      $referer = \str_replace("'", '\\\'', $referer);
      $user_agent = $_SERVER['HTTP_USER_AGENT'];
      $user_agent = \str_replace("'", '\\\'', $user_agent);
      $ip_locked = 1;
      $request_uri = $_SERVER['REQUEST_URI'];
      $request_uri = \str_replace("'", '\\\'', $request_uri);
      $sql = "INSERT INTO captures_404(datetime, ip, referer, user_agent, ip_locked, request_uri) " .
             "VALUES('{$datetime}', '{$ip}', '{$referer}', '{$user_agent}', {$ip_locked}, '{$request_uri}');";
      \mysqli_query($dbconn, $sql);
      if (\mysqli_errno($dbconn)) {
         echo 'error :-( ' . \mysqli_error($dbconn);
         \mysqli_close($dbconn);
         die();
      }

      // cerramos la conexión a la base de datos
      //
      \mysqli_close($dbconn);

   }


   if ($GLOBALS['env']['ENVIRONMENT'] === 'production') {

      \register_curious_ip();

   }
