<?php

   $GLOBALS['projects_dir'] = '/var/www';
   $GLOBALS['shared_name'] = 'shared';
   $GLOBALS['shared_dir'] = $GLOBALS['projects_dir'] . '/' . $GLOBALS['shared_name'];

   $GLOBALS['project_name'] = 'onedevs.tech';
   $GLOBALS['project_dir'] = $GLOBALS['projects_dir'] . '/' . $GLOBALS['project_name'];

   include_once $GLOBALS['shared_dir'] . '/' . 'init/init.php';

   /*

   $GLOBALS['config']
   $GLOBALS['dbconn']

   */
