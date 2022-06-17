<?php

   $src_dir = __DIR__ . '/../src/';

   include $src_dir . 'init.php';

   include $src_dir . 'components/visual/onedevs-favicons.php';
   include $src_dir . 'components/visual/onedevs-manifest.php';
   include $src_dir . 'components/visual/onedevs-metas.php';
   include $src_dir . 'components/visual/onedevs-title-string.php';
   include $src_dir . 'components/visual/vertical-separator.php';

   include $src_dir . 'functions/bignumber.php';

?>

<!-- ONEDEVS 404 PAGE -->

<!DOCTYPE html>

<html lang="es">

   <head>

      <title>404 - <?= onedevs_title_string() ?></title>
      <?= onedevs_metas() ?>
      <?= onedevs_manifest() ?>
      <?= onedevs_favicons() ?>

      <!-- CSS -->

      <link rel="stylesheet" href="/css/vars.css?version=<?= bignumber() ?>" />
      <link rel="stylesheet" href="/css/fonts.css?version=<?= bignumber() ?>" />
      <link rel="stylesheet" href="/css/404.css?version=<?= bignumber() ?>" />

   </head>

   <body>

      <?= vertical_separator() ?>

      404

   </body>

</html>
