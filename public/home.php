<?php

   $src_dir = __DIR__ . '/../src/';

   include_once $src_dir . 'init/exec_set_error_reporting.php';
   include_once $src_dir . 'init/exec_set_default_timezone.php';
   include_once $src_dir . 'init/exec_load_env.php';

   include_once $src_dir . 'init/exec_surprise_ip.php';

   include_once $src_dir . 'functions/get_motto.php';
   include_once $src_dir . 'functions/get_random_number.php';
   include_once $src_dir . 'functions/html/get_separator.php';

?>
<!-- ONEDEVS HOME PAGE -->

<!DOCTYPE html>

<html lang="es">

   <head>

      <?php include_once $src_dir . 'html/title.phtml'; ?>
      <?php include_once $src_dir . 'html/metas.phtml'; ?>
      <?php include_once $src_dir . 'html/manifest.phtml'; ?>
      <?php include_once $src_dir . 'html/favicons.phtml'; ?>
      <?php include_once $src_dir . 'html/css/home.phtml'; ?>

   </head>

   <body>

      <?php include_once $src_dir . 'html/brand.phtml'; ?>
      <?= get_separator(50) ?>

      <?php include_once $src_dir . 'html/introduction.phtml'; ?>
      <?php include_once $src_dir . 'html/service-to.phtml'; ?>
      <?php include_once $src_dir . 'html/what-do-we-do.phtml'; ?>
      <?php include_once $src_dir . 'html/people.phtml'; ?>
      <?php include_once $src_dir . 'html/tech-stack.phtml'; ?>
      <?php include_once $src_dir . 'html/contact.phtml'; ?>
      <?php include_once $src_dir . 'html/address.phtml'; ?>

   </body>

</html>
