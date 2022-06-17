<?php

   function onedevs_quienes_somos()
   {
      $vertical_separator = vertical_separator();

      $quienes_somos = <<<HTML

      <!-- QUIÉNES SOMOS -->

      <div class="home-section" id="quienes-somos">

         <h2 class="title">quiénes somos</h2>

         <p class="content">
            <b>OneDevs Digital Services</b>, o simplemente <b>OneDevs</b>, nace para dar <b>Servicio Digital</b> a Pequeñas Empresas y Comercios, PYMES y Grandes Marcas
         </p>

         <p class="content">
            Somos un grupo de <b>Desarrolladores de Software</b> apasionados por la Tecnología
         </p>

         <p class="content">
            Si tu <b>Empresa u Organización</b>, sea grande o pequeña, tiene necesidades tecnológicas, acude a nosotros, <b>Te Ayudaremos</b>
         </p>

         <div class="member mobile">

            <div class="image">
               <img class="member" src="images/onedevs-members/conchi-200x200.png" width="200" />
            </div>

            <div class="description">
               <big><b>Concepción Martínez Fernández</b></big><br />
               Sales Agent ❤️<br />
               <br />
               <div class="quote">
                  "Me encanta ayudar a mi hijo en su nueva empresa <b>OneDevs</b>."
               </div>
               <br />
               <a class="link" href="mailto:concepcion.mf.22f@gmail.com">concepcion.mf.22f@gmail.com</a><br />
               <a class="link" href="tel:+34622134851">+34 622 13 48 51</a>
            </div>

         </div>

         <div class="member mobile">

            {$vertical_separator}

            <div class="image">
               <img class="member" src="images/onedevs-members/richi-200x200.png" width="200" />
            </div>

            <div class="description">
               <big><b>Ricardo Ruiz Martínez</b></big><br />
               CEO - Chief Executive Officer 👍<br />
               Sales Manager<br />
               Full Stack Developer<br />
               <br />
               <div class="quote">
                  "<b>OneDevs Digital Services</b> nace para dar impulso al pequeño comercio del Barrio de la Fuensanta y otros barrios y alrededores de Córdoba (España). También damos servicio a cualquier Empresa u Organización en cualquier parte de España y en el extranjero."
               </div>
               <br />
               <a class="link" href="mailto:richiruizmartinez@gmail.com">richiruizmartinez@gmail.com</a><br />
               <a class="link" href="tel:+34744653072">+34 744 653 072</a>
            </div>

         </div>

         <div class="member desktop">

            <table align="center" cellpadding="20">
               <tbody>
                  <tr>
                     <td><img class="member" src="images/onedevs-members/conchi-200x200.png" width="200" /></td>
                     <td class="member">
                        <big><b>Concepción Martínez Fernández</b></big><br />
                        Sales Agent ❤️<br />
                        <br />
                        <div class="quote">
                           "Me encanta ayudar a mi hijo en su nueva empresa <b>OneDevs</b>."
                        </div>
                        <br />
                        <a class="link" href="mailto:concepcion.mf.22f@gmail.com">concepcion.mf.22f@gmail.com</a><br />
                        <a class="link" href="tel:+34622134851">+34 622 13 48 51</a>
                     </td>
                  </tr>
                  <tr>
                     <td><img class="member" src="images/onedevs-members/richi-200x200.png" width="200" /></td>
                     <td class="member">
                        <big><b>Ricardo Ruiz Martínez</b></big><br />
                        CEO - Chief Executive Officer 👍<br />
                        Sales Manager<br />
                        Full Stack Developer<br />
                        <br />
                        <div class="quote">
                           "<b>OneDevs Digital Services</b> nace para dar impulso al pequeño comercio del Barrio de la Fuensanta y otros barrios y alrededores de Córdoba (España). También damos servicio a cualquier Empresa u Organización en cualquier parte de España y
                            en el extranjero."
                        </div>
                        <br />
                        <a class="link" href="mailto:richiruizmartinez@gmail.com">richiruizmartinez@gmail.com</a><br />
                        <a class="link" href="tel:+34744653072">+34 744 653 072</a>
                     </td>
                  </tr>
               </tbody>
            </table>

         </div>

      </div>
HTML;

      return $quienes_somos;
   }
