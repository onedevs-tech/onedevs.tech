<?php

   function get_random_token ()
   {
      return rand(0, 9) .
             rand(0, 9) .
             rand(0, 9) .
             rand(0, 9) .
             rand(0, 9) .
             rand(0, 9) .
             rand(0, 9);
   }

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>__onedevs__</title>
      <meta name="description" content="OneDevs">
      <meta name="author" content="OneDevs">
      <meta property="og:title" content="OneDevs">
      <meta property="og:type" content="website">
      <meta property="og:url" content="http://onedevs.tech">
      <meta property="og:description" content="OneDevs">
      <link rel="stylesheet" href="css/styles.css?v=<?= get_random_token() ?>">
      <link rel="stylesheet" href="css/home.css?v=<?= get_random_token() ?>">
   </head>
   <body>
      <div class="topmenu">
         <ul>
            <li>OneDevs</li>
            <li>Quiénes somos</li>
            <li>Qué hacemos</li>
            <li>Dónde estamos</li>
         </ul>
      </div>
      <center>
         <img src="images/logo-solo-circulo.svg" width="200" alt="logo">
         <div class="nasalized" style="font-size: 1.2em;">__ OneDevs __</div>
         <div class="nasalized" style="font-size: 0.5em;">Developing The Future</div>
      </center>
   </body>
</html>
