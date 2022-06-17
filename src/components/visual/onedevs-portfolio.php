<?php

   function onedevs_portfolio()
   {
      $portfolio = <<<HTML

      <!-- PORTFOLIO -->

      <div class="home-section" id="portfolio">

         <h2 class="title">confían en OneDevs</h2>

         <table class="projects" align="center" cellpadding="20">
            <thead>
               <tr>
                  <th>Empresa / Organización</th>
                  <th>País</th>
                  <th>Proyecto</th>
                  <th>Descripción</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>Tattoo Rubio</td>
                  <td>España</td>
                  <td><a class="link" target="_blank" href="https://www.tattoorubio.com">https://www.tattoorubio.com</a></td>
                  <td>Construcción desde cero y publicación del site <a class="link" target="_blank" href="https://www.tattoorubio.com">https://www.tattoorubio.com</a></td>
               </tr>
            </tbody>
         </table>

         <p class="content">
            
         </p>

      </div>
HTML;

      return $portfolio;
   }
