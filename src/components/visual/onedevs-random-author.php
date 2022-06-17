<?php

   function onedevs_random_author()
   {
      $authors_txt_file_path = __DIR__ . '/../../../authors.txt';

      $authors = \explode("\n", \file_get_contents($authors_txt_file_path));

      return $authors[\array_rand($authors)];
   }
