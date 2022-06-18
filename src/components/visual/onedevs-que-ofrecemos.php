<?php

   function onedevs_que_ofrecemos()
   {
      $vertical_separator = vertical_separator(10, 9);

      $que_hacemos = <<<HTML

      <!-- QUÉ OFRECEMOS -->

      <div class="home-section" id="que-ofrecemos">

         <h2 class="title">__ Qué Servicios Ofrecemos __</h2>

         <p class="content services">
            <span class="site-building">Desarrollo de Web Sites</span><br />
            <span class="site-maintenance">Mantenimiento de Web Sites</span><br />
            <span class="devops">DevOps</span><br />
            <span class="cybersecurity">CyberSeguridad + Hacking Ético</span><br />
            <span class="contribution">Contribución de Contenido</span><br />
            <span class="marketing-on-line">Marketing On-Line</span><br />
         </p>

         <div class="wrapper">
            <p class="content">
               👍 Nos dedicamos a la <b>Construcción y Mantenimiento de Sites usando MySQL, HTML 5, CSS 3 y PHP versiones 7 y 8</b>
            </p>
         </div>

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

         <div class="wrapper">
            <p class="content">
               👍 Ofrecemos <b>Servicios de CiberSeguridad</b>
            </p>
         </div>

         <div class="mobile">
            <img class="image" src="/images/cybersecurity.jpg" alt="CyberSecurity" width="320" />
         </div>
         <div class="desktop">
            <img class="image" src="/images/cybersecurity.jpg" alt="CyberSecurity" />
         </div>{$vertical_separator}

         <div class="wrapper">
            <p class="content">
               👍 Ofrecemos <b>Servicios de Publicidad On-Line</b> (publicidad en <b>Redes Sociales (Facebook, Instagran, LinkedIn y Tik Tok)</b> y <b>Email Marketing</b>)
            </p>
         </div>

         <div class="mobile">
            <img class="image" src="/images/stack-tecnologico/social-networks.jpg" alt="Social Networks" width="320" />
         </div>
         <div class="desktop">
            <img class="image" src="/images/stack-tecnologico/social-networks.jpg" alt="Social Networks" />
         </div>

         <div class="plus">+</div>

         <div class="mobile">
            <img class="image" src="/images/stack-tecnologico/email-marketing.png" alt="Email Marketing" width="320" />
         </div>
         <div class="desktop">
            <img class="image" src="/images/stack-tecnologico/email-marketing.png" alt="Email Marketing" />
         </div>

      </div>
HTML;

      return $que_hacemos;
   }
