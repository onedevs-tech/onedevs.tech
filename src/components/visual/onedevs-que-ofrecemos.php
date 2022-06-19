<?php

   function onedevs_que_ofrecemos()
   {
      $vertical_separator = vertical_separator(10, 9);

      $que_hacemos = <<<HTML_

      <!-- QUÉ OFRECEMOS -->

      <div class="home-section" id="que-ofrecemos">

         <h2 class="title">__ Qué Ofrecemos __</h2>

         <p class="content services">
            <span class="site-building">Desarrollo<br />de Web Sites 🛠</span><br />
            <span class="site-maintenance">Mantenimiento<br />de Web Sites 🔨</span><br />
            <span class="devops">DevOps 🪛</span><br />
            <span class="cybersecurity">CyberSeguridad<br />+<br />Hacking Ético 😼</span><br />
            <span class="marketing-on-line">Marketing On-Line 📨</span><br />
            <span class="contribution">Contribución<br />de Contenido 📰</span><br />
         </p>

         <div class="wrapper">
            <p class="content">
               👍 <b>Construimos Web Sites desde zero<br />
               <br />
               Ofrecemos Servicio de Mantenimiento:<br />
               <br />
               ¿Tu Site está anticuado? ¿No lo actualizas desde hace tiempo?
               ¿Quieres vender por Internet?
               Nos hacemos cargo de tu Site actual y lo mantenemos, modificamos, evolucionamos,
               con independencia de quién lo haya hecho o la Tecnología con la que esté construido<br />
               <br />
               Trabajamos con PHP<br />
               (8, 7 y versiones anteriores),<br />
               MySQL, MariaDB,<br />
               HTML 5, CSS 3, jQuery y Javascript</b>
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

         <div class="plus">+</div>

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
               👍 Ofrecemos <b>Servicios de Publicidad On-Line</b><br />
               <br />
               Publicidad en <b>Redes Sociales:</b><br />
               Facebook, Instagram, LinkedIn, TikTok, Twitter<br />
               <br />
               <b>Email Marketing</b>
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
HTML_;

      return $que_hacemos;
   }
