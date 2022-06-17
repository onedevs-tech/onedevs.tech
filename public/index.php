<?php

   $src_dir = __DIR__ . '/../src/';

   include $src_dir . 'init.php';

   include $src_dir . 'components/visual/onedevs-contactanos.php';
   include $src_dir . 'components/visual/onedevs-favicons.php';
   include $src_dir . 'components/visual/onedevs-location.php';
   include $src_dir . 'components/visual/onedevs-main-menu.php';
   include $src_dir . 'components/visual/onedevs-manifest.php';
   include $src_dir . 'components/visual/onedevs-metas.php';
   include $src_dir . 'components/visual/onedevs-portfolio.php';
   include $src_dir . 'components/visual/onedevs-que-hacemos.php';
   include $src_dir . 'components/visual/onedevs-quienes-somos.php';
   include $src_dir . 'components/visual/onedevs-stack-tecnologico.php';
   include $src_dir . 'components/visual/onedevs-title.php';
   include $src_dir . 'components/visual/onedevs-web-brand.php';
   include $src_dir . 'components/visual/vertical-separator.php';

   include $src_dir . 'functions/bignumber.php';

?>

<!-- ONEDEVS HOME PAGE -->

<!DOCTYPE html>

<html lang="es">

   <head>

      <?= onedevs_title() ?>
      <?= onedevs_metas() ?>
      <?= onedevs_manifest() ?>
      <?= onedevs_favicons() ?>


      <!-- CSS -->

      <link rel="stylesheet" href="/css/vars.css?version=<?= bignumber() ?>" />
      <link rel="stylesheet" href="/css/fonts.css?version=<?= bignumber() ?>" />
      <link rel="stylesheet" href="/css/home.css?version=<?= bignumber() ?>" />
      <link rel="stylesheet" href="/css/onedevs-web-brand.css?version=<?= bignumber() ?>" />
      <link rel="stylesheet" href="/css/onedevs-main-menu.css?version=<?= bignumber() ?>" />
      <link rel="stylesheet" href="/css/onedevs-quienes-somos.css?version=<?= bignumber() ?>" />
      <link rel="stylesheet" href="/css/onedevs-que-hacemos.css?version=<?= bignumber() ?>" />

   </head>

   <body>

      <?= onedevs_web_brand() ?>
      <?= vertical_separator() ?>

      <?= onedevs_main_menu() ?>
      <?= vertical_separator() ?>

      <?= onedevs_quienes_somos() ?>
      <?= vertical_separator() ?>

      <?= onedevs_que_hacemos() ?>
      <?= vertical_separator() ?>

      <?= onedevs_stack_tecnologico() ?>
      <?= vertical_separator() ?>

      <?= onedevs_portfolio() ?>
      <?= vertical_separator() ?>

      <?= onedevs_location() ?>
      <?= vertical_separator() ?>

      <?= onedevs_contactanos() ?>
      <?= vertical_separator(635) ?>

   </body>

</html>
