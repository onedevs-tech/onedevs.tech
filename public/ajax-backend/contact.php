<?php


   include_once __DIR__ . '/../../.init.php';


   if ($_SERVER['REQUEST_METHOD'] != 'POST') {
      $error_msg = \get_error('json', 'bad request method, expected POST');
      echo \json_encode($error_msg);
      return;
   }


   \db_insert('onedevs_tech', 'contact', [
      'datetime'  => \date('Y-m-d H:i:s'),
      'nombre'    => $_POST['nombre'],
      'apellidos' => $_POST['apellidos'],
      'empresa'   => $_POST['empresa'],
      'telefono'  => $_POST['telefono'],
      'email'     => $_POST['email'],
      'mensaje'   => $_POST['mensaje'],
   ]);


   echo \json_encode('ok');
