<?php

   function onedevs_random_emoji()
   {
      $emojis_file_path = __DIR__ . '/../../../emojis.txt';

      $emojis = \explode("\n", \file_get_contents($emojis_file_path));

      return $emojis[\array_rand($emojis)];
   }
