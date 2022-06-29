<?php

   function register_curious_ip()
   {
      $dbconn = \mysqli_connect('127.0.0.1', 'onedevs_404', 'k9mn0ol8m,12', 'onedevs_404');
      if (\mysqli_connect_errno()) {
         die('error connecting to database :-( ' . \mysqli_connect_error());
      }

      $datetime = date('Y-m-d H:i:s');
      $ip4 = $_SERVER['REMOTE_ADDR'];
      $request_uri = $_SERVER['REQUEST_URI'];
      $sql = "INSERT INTO onedevs_404(datetime, ip4, request_uri) VALUES('{$datetime}', '{$ip4}', '{$request_uri}');";
      \mysqli_query($dbconn, $sql);
      if (\mysqli_errno($dbconn)) {
         echo 'error :-( ' . \mysqli_error($dbconn);
         \mysqli_close($dbconn);
         die();
      }

      \mysqli_close($dbconn);
   }

   \register_curious_ip();
