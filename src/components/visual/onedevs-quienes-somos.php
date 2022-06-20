<?php

   function onedevs_quienes_somos()
   {
      $vertical_separator = vertical_separator(100, 12);

      $quienes_somos = <<<HTML

      <!-- QUIÉNES SOMOS -->

      <div class="home-section" id="quienes-somos">

         <h2 class="title">__ Quiénes Somos __</h2>

         <div class="wrapper">

            <p class="content">
               <b>OneDevs Digital Services</b>, o simplemente <b>OneDevs</b>, nace para dar <b>Servicio Digital</b> a Pequeñas Empresas y Comercios, PYMES y Grandes Marcas
            </p>

            <p class="content">
               Somos un Grupo de <b>Desarrolladores de Software</b> apasionados por la Tecnología
            </p>

            <p class="content">
               Si tu <b>Empresa u Organización</b>, sea de cualquier tamaño, tiene Necesidades Tecnológicas, acude a Nosotros
            </p>

            <p class="content">
               <b>Te Ayudaremos</b>
            </p>

         </div>

         <div class="wrapper">
            <p class="content">
               <b>Colaboradores de OneDevs :</b>
            </p>
         </div>

         <div class="member mobile">{$vertical_separator}

            <div class="image">
               <img class="member" src="/images/onedevs-members/conchi-200x200.png" width="200" />
            </div>

            <div class="description">
               <div class="wrapper">
                  <big><b><span class="collaborator">Concepción Martínez Fernández<br />( conchi )</span></b></big><br />
                  <br />
                  <span class="collaborator">Sales Agent</span><br />
                  <br />
                  <div class="quote">
                     "<b>OneDevs</b> me permite desarrollar mis capacidades como Comercial".
                  </div>
                  <br />
                  <a class="link" href="mailto:concepcion.mf.22f@gmail.com">concepcion.mf.22f@gmail.com</a><br />
                  <br />
                  <a class="link" href="tel:+34622134851">Tel: +34 622 13 48 51</a>
               </div>
            </div>

         </div>

         <div class="member mobile">{$vertical_separator}

            <div class="image">
               <img class="member" src="/images/onedevs-members/richi-200x200.png" width="200" />
            </div>

            <div class="description">
               <div class="wrapper">
                  <big><b><span class="collaborator">Ricardo Ruiz Martínez<br />( richi )</span></b></big><br />
                  <br />
                  <span class="collaborator">Manager</span><br />
                  <span class="collaborator">Full Stack Developer</span><br />
                  <span class="collaborator">(PHP + MySQL + jQuery)</span><br />
                  <br />
                  <div class="quote">
                     "<b>OneDevs Digital Services</b> nace para Dar Impulso al Pequeño Comercio del Barrio de la Fuensanta y otros Barrios y Alrededores de Córdoba (España). También damos Servicio a Cualquier Empresa u Organización de cualquier tamaño en cualquier parte de Córdoba, Andalucía, España y el Mundo."
                  </div>
                  <br />
                  <a class="link" href="mailto:richiruizmartinez@gmail.com">richiruizmartinez@gmail.com</a><br />
                  <br />
                  <a class="link" href="tel:+34744653072">Tel: +34 744 653 072</a>
               </div>
            </div>

         </div>

         <div class="member desktop">

            <table align="center" cellpadding="20">
               <tbody>
                  <tr>
                     <td><img class="member" src="/images/onedevs-members/conchi-200x200.png" width="200" /></td>
                     <td class="description">
                        <div class="wrapper">
                           <big><b><span class="collaborator">Concepción Martínez Fernández &nbsp; ( conchi )</span></b></big><br />
                           <br />
                           <span class="collaborator">Sales Agent</span><br />
                           <br />
                           <div class="quote">
                              "<b>OneDevs</b> me permite desarrollar mis capacidades como Comercial".
                           </div>
                           <br />
                           <a class="link" href="mailto:concepcion.mf.22f@gmail.com">concepcion.mf.22f@gmail.com</a>
                           <a class="link" href="tel:+34622134851">Tel: +34 622 13 48 51</a>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td><img class="member" src="/images/onedevs-members/richi-200x200.png" width="200" /></td>
                     <td class="description">
                        <div class="wrapper">
                           <big><b><span class="collaborator">Ricardo Ruiz Martínez &nbsp; ( richi )</span></b></big><br />
                           <br />
                           <span class="collaborator">Manager</span><br />
                           <span class="collaborator">Full Stack Developer</span><br />
                           <span class="collaborator">(PHP + MySQL + jQuery)</span><br />
                           <br />
                           <div class="quote">
                              "<b>OneDevs Digital Services</b> nace para Dar Impulso al Pequeño Comercio del Barrio de la Fuensanta y otros Barrios y Alrededores de Córdoba (España). También damos Servicio a Cualquier Empresa u Organización de cualquier tamaño en cualquier parte de Córdoba, Andalucía, España y el Mundo."
                           </div>
                           <br />
                           <a class="link" href="mailto:richiruizmartinez@gmail.com">richiruizmartinez@gmail.com</a>
                           <a class="link" href="tel:+34744653072">Tel: +34 744 653 072</a>
                        </div>
                     </td>
                  </tr>
               </tbody>
            </table>

         </div>

      </div>
HTML;

      return $quienes_somos;
   }
