<?php

   function onedevs_favicons ($type = 'onedevs')
   {
      if ($type === 'onedevs') {
         $favicons = <<<HTML
<link rel="icon" type="image/png" sizes="16x16"  href="/favicons/onedevs/favicon-16x16.png">
<link rel="icon" type="image/png" sizes="32x32"  href="/favicons/onedevs/favicon-32x32.png">
<link rel="apple-touch-icon" sizes="57x57" href="/favicons/onedevs/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/favicons/onedevs/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/favicons/onedevs/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/favicons/onedevs/apple-touch-icon-76x76.png">
<link rel="icon" type="image/png" sizes="96x96"  href="/favicons/onedevs/apple-touch-icon-96x96.png">
<link rel="apple-touch-icon" sizes="114x114" href="/favicons/onedevs/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/favicons/onedevs/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/favicons/onedevs/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/favicons/onedevs/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/favicons/onedevs/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/favicons/onedevs/android-icon-192x192.png">
HTML;
      } elseif ($type === 'security') {
         $favicons = <<<HTML
<link rel="icon" type="image/png" sizes="16x16"  href="/favicons/generic/security.png">
HTML;
      }

      return $favicons;
   }
