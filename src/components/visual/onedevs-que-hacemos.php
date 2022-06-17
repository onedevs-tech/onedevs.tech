<?php

   function onedevs_que_hacemos()
   {
      $vertical_separator = vertical_separator(10, 9);

      $que_hacemos = <<<HTML

      <!-- QUÉ HACEMOS -->

      <div class="home-section" id="que-hacemos">

         <h2 class="title">qué hacemos</h2>

         <p class="content services">
            <span class="site-building">Desarrollo de Web Sites</span><br />
            <span class="site-maintenance">Mantenimiento de Web Sites</span><br />
            <span class="devops">DevOps</span><br />
            <span class="cybersecurity">CyberSeguridad & Hacking Ético</span><br />
            <span class="contribution">Contribución de Contenido</span><br />
            <span class="marketing-on-line">Marketing On-Line</span><br />
         </p>

         <p class="content">
            👍 Nos dedicamos a la <b>Construcción y Mantenimiento de Sites usando MySQL, HTML 5, CSS 3 y PHP versiones 7 y 8</b>
         </p>

         <p class="content image">
            <div class="mobile">
               <img class="image" src="/images/stack-tecnologico/php-8.jpg" alt="PHP 8" width="320" />
            </div>
            <div class="desktop">
               <img class="image" src="/images/stack-tecnologico/php-8.jpg" alt="PHP 8" />
            </div>
         </p>{$vertical_separator}

         <p class="content image">
            <div class="mobile">
               <img class="image" src="/images/stack-tecnologico/mysql.png" alt="MySQL" width="320" />
            </div>
            <div class="desktop">
               <img class="image" src="/images/stack-tecnologico/mysql.png" alt="MySQL" />
            </div>
         </p>{$vertical_separator}

         <p class="content">
            👍 Ofrecemos <b>Servicios de CiberSeguridad</b>
         </p>

         <div class="mobile">
            <img class="image" src="/images/cybersecurity.jpg" alt="CyberSecurity" width="320" />
         </div>
         <div class="desktop">
            <img class="image" src="/images/cybersecurity.jpg" alt="CyberSecurity" />
         </div>{$vertical_separator}

         <p class="content">
            👍 Ofrecemos <b>Servicios de Publicidad On-Line</b> (publicidad en <b>Redes Sociales (Facebook, Instagran, LinkedInm Tik Tok)</b> y <b>Email Marketing</b>)
         </p>

         <div class="mobile">
            <img class="image" src="/images/email-marketing.jpg" alt="Email Marketing" width="320" />
         </div>
         <div class="desktop">
            <img class="image" src="/images/email-marketing.jpg" alt="Email Marketing" />
         </div>

      </div>
HTML;

      return $que_hacemos;
   }
