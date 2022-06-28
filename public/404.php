<?php

   $src_dir = __DIR__ . '/../src/';

   include_once $src_dir . 'init/set_env.php';
   include_once $src_dir . 'init/set_error.php';
   include_once $src_dir . 'init/set_default_timezone.php';

   include_once $src_dir . 'functions/get_motto.php';
   include_once $src_dir . 'functions/get_random_number.php';
   include_once $src_dir . 'functions/html/get_separator.php';

?>
<!-- ONEDEVS 404 PAGE -->

<!DOCTYPE html>

<html lang="es">

   <head>

      <title>OneDevs - 404</title>
      <?php include_once $src_dir . 'html/metas.phtml'; ?>
      <?php include_once $src_dir . 'html/manifest.phtml'; ?>
      <?php include_once $src_dir . 'html/favicons.phtml'; ?>
      <?php include_once $src_dir . 'html/css/404.phtml'; ?>

   </head>

   <body>

      <?= get_separator(50) ?>
      <?php include_once $src_dir . 'html/brand.phtml'; ?>
      <?= get_separator(50) ?>

      <div class="_404">
         404... 🤔
      </div>

   </body>

</html>
