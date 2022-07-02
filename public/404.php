<?php

   // inicialización
   //
   $config_filepath = __DIR__ . '/../.config';
   include_once '/var/www/shared/init/init.php';
   include_once '/var/www/shared/sec/src/exec/sec_register_http_request.php';

   // vista
   //
   include_once $GLOBALS['config']['project_root_dir'] . '/phtml/page/404.phtml';
