<?php

   // nos conectamos a la base de datos "onedevs_404"
   //
   $dbconn = \mysqli_connect('127.0.0.1', 'onedevs_404', 'k9mn0ol8m,12', 'onedevs_404');
   if (\mysqli_connect_errno()) {
      echo 'error connecting to database :-( ' . \mysqli_connect_error();
      die();
   }

   // desbloqueamos las IPs curiosas
   //
   $sql = "UPDATE captures_404 SET ip_locked = 0;";
   \mysqli_query($dbconn, $sql);
   if (\mysqli_errno($dbconn)) {
      echo 'error :-( ' . \mysqli_error($dbconn);
      \mysqli_close($dbconn);
      die();
   }

   // cerramos la conexión a la base de datos
   //
   \mysqli_close($dbconn);
