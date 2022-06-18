<?php

   function onedevs_portfolio()
   {
      $portfolio = <<<HTML

      <!-- PORTFOLIO -->

      <div class="home-section" id="portfolio">

         <h2 class="title">Confían en OneDevs</h2>

         <div class="desktop">
            <table class="projects" align="center" cellpadding="20">
               <thead>
                  <tr>
                     <th>Empresa / Organización</th>
                     <th>Número de Empleados</th>
                     <th>País</th>
                     <th>Proyecto</th>
                     <th>Descripción</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>Tattoo Rubio</td>
                     <td>1</td>
                     <td>España</td>
                     <td><a class="link" target="_blank" href="https://www.tattoorubio.com">https://www.tattoorubio.com</a></td>
                     <td>Construcción desde cero y publicación del site <a class="link" target="_blank" href="https://www.tattoorubio.com">https://www.tattoorubio.com</a></td>
                  </tr>
               </tbody>
            </table>
         </div>

         <div class="mobile">
            <div class="client">
               Tattoo Rubio<br />
               <a class="link" target="_blank" href="https://www.tattoorubio.com">https://www.tattoorubio.com</a>
            </div>
         </div>

      </div>
HTML;

      return $portfolio;
   }
