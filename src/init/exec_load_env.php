<?php


   function load_env() {
      $env_filepath = __DIR__ . '/../../.env';
      $env_lines = \explode("\n", \file_get_contents($env_filepath));
      $env = [];
      foreach ($env_lines as $index => $var) {
         $var = \trim($var);
         if ($var === '') {
            continue;
         }
         $var_exploded = \explode('=', $var, 2);
         $var_exploded[0] = \trim($var_exploded[0]);
         $var_exploded[1] = \trim($var_exploded[1]);
         $env[$var_exploded[0]] = $var_exploded[1];
      }
      $GLOBALS['env'] = $env;
   }


   \load_env();
