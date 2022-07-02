<?php

   // inicialización
   //
   $config_filepath = __DIR__ . '/../.config';
   include_once '/var/www/shared/init/init.php';

   // vista
   //
   include_once $GLOBALS['config']['project_root_dir'] . '/phtml/page/home.phtml';
