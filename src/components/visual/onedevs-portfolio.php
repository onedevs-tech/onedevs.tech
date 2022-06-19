<?php

   function onedevs_portfolio()
   {
      $portfolio = <<<HTML

      <!-- PORTFOLIO -->

      <div class="home-section" id="portfolio">

         <h2 class="title">__ Confían en OneDevs __</h2>

         <div class="desktop">
            <table class="projects" align="center" cellpadding="20">
               <thead>
                  <tr>
                     <th>Organización</th>
                     <th>Empleados</th>
                     <th>País</th>
                     <th>Proyecto</th>
                     <th>Qué</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>Tattoo Rubio</td>
                     <td>1</td>
                     <td>España</td>
                     <td><a class="link" target="_blank" href="https://www.tattoorubio.com">https://www.tattoorubio.com</a></td>
                     <td>Construcción del site desde cero y publicación en Internet <a class="link" target="_blank" href="https://www.tattoorubio.com">https://www.tattoorubio.com</a></td>
                  </tr>
               </tbody>
            </table>
         </div>

         <div class="mobile">
            <div class="client">
               Tattoo Rubio<br />
               <br />
               <br />
               <a class="link" target="_blank" href="https://www.tattoorubio.com">https://www.tattoorubio.com</a>
            </div>
         </div>

      </div>
HTML;

      return $portfolio;
   }
