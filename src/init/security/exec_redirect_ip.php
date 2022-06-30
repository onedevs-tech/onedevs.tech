<?php


   /*
    *
    * surprise IP now is "redirect IP"
    *
    */


   function get_random_link() {

      $links = [

         'GOOGLE' => 'https://www.google.com',

      ];

      $random_link = \array_rand($links);

      return [
         'id' => $random_link,
         'url' => $links[$random_link]
      ];

   }


   function redirect_ip() {

      // nos conectamos a la base de datos "onedevs_404"
      //
      $dbconn = \mysqli_connect('127.0.0.1', 'onedevs_404', 'k9mn0ol8m,12', 'onedevs_404');
      if (\mysqli_connect_errno()) {
         echo 'error connecting to database :-( ' . \mysqli_connect_error();
         die();
      }

      // obtenemos todas las IPs curiosas de la tabla "captures_404"
      //
      $sql = "SELECT DISTINCT ip FROM captures_404 WHERE ip_locked = 1;";
      $result = \mysqli_query($dbconn, $sql);
      if (\mysqli_errno($dbconn)) {
         echo 'error :-( ' . \mysqli_error($dbconn);
         \mysqli_close($dbconn);
         die();
      }
      $curious_ips = [];
      while ($row = \mysqli_fetch_assoc($result)) {
         $curious_ips[] = $row['ip'];
      }
      $curious_ips = \array_unique($curious_ips);

      //
      // si la IP del usuario que hace la petición está entre las IPs curiosas...
      //

      $user_ip = $_SERVER['REMOTE_ADDR'];

      if (\in_array($user_ip, $curious_ips)) {

         // obtenemos un link aleatorio
         //
         $random_link = \get_random_link();

         // insertamos en la tabla "redirections" la redirección que se va a realizar
         //
         $datetime = \date('Y-m-d H:i:s');
         $redirect = $random_link['id'] . ' @@ ' . $random_link['url'];
         $redirect = \str_replace("'", '\\\'', $redirect);
         $sql = "INSERT INTO redirections(datetime, ip, redirect) " .
                "VALUES('{$datetime}', '{$user_ip}', '{$redirect}');";
         \mysqli_query($dbconn, $sql);
         if (\mysqli_errno($dbconn)) {
            echo 'error :-( ' . \mysqli_error($dbconn);
            \mysqli_close($dbconn);
            die();
         }

         // cerramos la conexión a la base de datos
         //
         \mysqli_close($dbconn);

         // redirigimos
         //
         \header('Location: ' . $random_link['url']);
         die();

      }

   }


   if ($GLOBALS['env']['ENVIRONMENT'] === 'production') {

      \redirect_ip();

   }
