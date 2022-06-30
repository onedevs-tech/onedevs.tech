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

      // insertamos en la tabla "captures_404" la IP del usuario (como IP bloqueda) y la URI solicitada
      //
      $datetime = \date('Y-m-d H:i:s');
      $ip = $_SERVER['REMOTE_ADDR'];
      $request_uri = $_SERVER['REQUEST_URI'];
      $sql = "INSERT INTO captures_404(datetime, ip, ip_locked, request_uri) VALUES('{$datetime}', '{$ip}', 1, '{$request_uri}');";
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
