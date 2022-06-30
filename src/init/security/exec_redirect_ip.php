<?php


   /*
    *
    * surprise IP now is "redirect IP"
    *
    */


   function get_random_link() {

      $links = [

         //
         // RANDOM IMAGES
         //
         'IMAGE Anonymous Hacker' => 'https://static.dw.com/image/60924028_403.jpeg',
         'IMAGE Blue Snake' => 'https://www.caracteristicas.co/wp-content/uploads/2017/03/serpiente-azul-1-e1564541782147.jpg',
         'IMAGE Blue Woman' => 'https:/images.ecestaticos.com/Qz_q7VJ_lRhAzVQm32g2E74lqM4=/0x0:1199x674/557x418/filters:fill(white):format(jpg)/f.elconfidencial.com%2Foriginal%2F8fb%2F071%2F329%2F8fb0713296595270718187a004e3dfd9.jpg',
         'IMAGE Cyber Woman' => 'https:/p4.wallpaperbetter.com/wallpaper/558/477/175/blue-eyes-cyberpunk-cyborg-robot-wallpaper-preview.jpg',
         'IMAGE Gatito' => 'https://www.purina-latam.com/sites/g/files/auxxlc391/files/styles/kraken_generic_max_width_960/public/Purina%C2%AE%20La%20llegada%20del%20gatito%20a%20casa.jpg',
         'IMAGE Red Fire Demon' => 'https://cdnb.artstation.com/p/assets/images/images/013/625/351/large/patri-balanovsky-demon-cute-small.jpg',

         //
         // INTELLIGENCE AGENCIES
         //
         'INTELLIGENCE AGENCY Israel MOSSAD' => 'https://www.mossad.gov.il',
         'INTELLIGENCE AGENCY Spain CNI' => 'https://www.cni.es',
         'INTELLIGENCE AGENCY United Kingdom MI6' => 'https://www.sis.gov.uk',
         'INTELLIGENCE AGENCY USA CIA' => 'https://www.cia.gov',
         'INTELLIGENCE AGENCY USA FBI' => 'https://www.fbi.gov',
         'INTELLIGENCE AGENCY USA NRO' => 'https://www.nro.gov',
         'INTELLIGENCE AGENCY USA NSA' => 'https://www.nsa.gov',

         //
         // AIR & SPACE
         //
         'AIR Boeing' => 'https://www.boeing.com',
         'AIR Lockheed Martin' => 'https://www.lockheedmartin.com',
         'SPACE ESA' => 'https://www.esa.int',
         'SPACE NASA' => 'https://www.nasa.gov',         

         //
         // HACKERS & SECURITY
         //
         'HACKER 2600' => 'https://2600.com',
         'HACKER Hacker Typer' => 'https://hackertyper.net',
         'HACKER hackerone' => 'https://www.hackerone.com',
         'HACKER kaspersky' => 'https://www.kaspersky.es',
         'HACKER panda' => 'https://www.pandasecurity.com',

         //
         // YOUTUBE MUSIC
         //
         'YOUTUBE AC/DC - Highway to Hell (Official Video)' => 'https://www.youtube.com/watch?v=l482T0yNkeo',
         'YOUTUBE AC/DC - Thunderstruck (Official Video)' => 'https://www.youtube.com/watch?v=v2AC41dglnM',
         'YOUTUBE Alejandro Sanz - Yo No Quiero Suerte' => 'https://www.youtube.com/watch?v=4bZ1wSjfBr4',
         'YOUTUBE Bomfunk MC\'s - Freestyler (Video Original Version)' => 'https://www.youtube.com/watch?v=ymNFyxvIdaM',
         'YOUTUBE Boris Brejcha at Grand Palais in Paris, France for Cercle' => 'https://www.youtube.com/watch?v=vqz8c4ZP3Wg',
         'YOUTUBE Boris Brejcha Legendary Megamix 1/The best of Boris Brejcha' => 'https://www.youtube.com/watch?v=jbMt47Ovvtc',
         'YOUTUBE Boris Brejcha Style @ Art of Minimal Techno Cartoon Tripping - Mystery Disney by RTTWLR' => 'https://www.youtube.com/watch?v=lgjY-lVtJZA',
         'YOUTUBE Cypress Hill - Insane In The Brain (Official Video)' => 'https://www.youtube.com/watch?v=RijB8wnJCN0',
         'YOUTUBE Delinquent Habits - Tres Delinquentes (Official Video)' => 'https://www.youtube.com/watch?v=w3qqN1BMnhk',
         'YOUTUBE Diesel Power' => 'https://www.youtube.com/watch?v=GLSr0BAlndM',
         'YOUTUBE Faithless- Insomnia (Forever Faithless)' => 'https://www.youtube.com/watch?v=6QZhC8DUD_o',
         'YOUTUBE Fatboy Slim - Rockafeller Skank [Official Video]' => 'https://www.youtube.com/watch?v=FMrIy9zm7QY',
         'YOUTUBE Joker / Gary Glitter - Rock and Roll Part 1 & Part 2 (Joker Soundtrack)' => 'https://www.youtube.com/watch?v=BuyFhOIA-bE',
         'YOUTUBE Lady Gaga - Alejandro (Official Music Video)' => 'https://www.youtube.com/watch?v=niqrrmev4mA',
         'YOUTUBE Madonna - Sorry (Official Video)' => 'https://www.youtube.com/watch?v=rdccTOcX7o4',
         'YOUTUBE Madonna - Sorry (Official Video)' => 'https://www.youtube.com/watch?v=rdccTOcX7o4',
         'YOUTUBE Metallica: Enter Sandman (Official Music Video)' => 'https://www.youtube.com/watch?v=CD-E-LDc384',
         'YOUTUBE Metallica: Nothing Else Matters (Official Music Video)' => 'https://www.youtube.com/watch?v=tAGnKpE4NCI',
         'YOUTUBE Michael Jackson - Give In To Me (Official Video)' => 'https://www.youtube.com/watch?v=LJ7qXHjxj_0',
         'YOUTUBE Rammstein - Links 2 3 4 (Official Video)' => 'https://www.youtube.com/watch?v=Ph-CA_tu5KA',
         'YOUTUBE SFDK y la Mala Rodríguez - Una de piratas' => 'https://www.youtube.com/watch?v=avDHVaOcgYA',
         'YOUTUBE Technotronic - Pump Up The Jam (Official Music Video)' => 'https://www.youtube.com/watch?v=9EcjWd-O4jI',
         'YOUTUBE The Chemical Brothers - Block Rockin\' Beats (Official Music Video)' => 'https://www.youtube.com/watch?v=iTxOKsyZ0Lw',
         'YOUTUBE The original Technoviking video' => 'https://www.youtube.com/watch?v=UjCdB5p2v0Y',
         'YOUTUBE The Prodigy - Mescaline Official Video' => 'https://www.youtube.com/watch?v=dYmaPZjlE40',
         'YOUTUBE The Prodigy - Out Of Space (Official Video)' => 'https://www.youtube.com/watch?v=a4eav7dFvc8',
         'YOUTUBE The Prodigy - Warrior\'s Dance Uncut (Official Video)' => 'https://www.youtube.com/watch?v=voBNpdXkLnU',
         'YOUTUBE The Prodigy feat Sheila Chandra Smack My Bitch Up' => 'https://www.youtube.com/watch?v=GVV06jTYjeY',

         //
         // YOUTUBE RANDOM VIDEOS
         //
         'YOUTUBE Confía en mí (T-800 con ametralladora) | Terminator 2 [Remasterizado]' => 'https://www.youtube.com/watch?v=41J1nbFABgk',
         'YOUTUBE Kevin Mitnick - A Hacker\'s Story' => 'https://www.youtube.com/watch?v=Qe73tRTksf0',
         'YOUTUBE Master Yoda VS Darth Sidious' => 'https://www.youtube.com/watch?v=iFUs7E8liZU',
         'YOUTUBE Obi Wan & Qui Gon vs Darth Maul [4k UltraHD] - Star Wars: The Phantom Menace Fight Scene (1/2)' => 'https://www.youtube.com/watch?v=m2GA07iW8q0',
         'YOUTUBE The Matrix - Follow the White Rabbit...' => 'https://www.youtube.com/watch?v=Smwrw4sNCxE',

         //
         // FUNNY LINKS
         //
         'FUNNY LinkeInd' => 'https://www.linkedin.com',

      ];

      $random_link = \array_rand($links);

      return [
         'id' => $random_link,
         'url' => $links[$random_link]
      ];

   }


   function redirect_ip() {

      // nos conectamos a la base de datos "onedevs_404"
      //
      $dbconn = \mysqli_connect('127.0.0.1', 'onedevs_404', 'k9mn0ol8m,12', 'onedevs_404');
      if (\mysqli_connect_errno()) {
         echo 'error connecting to database :-( ' . \mysqli_connect_error();
         die();
      }

      // obtenemos todas las IPs curiosas de la tabla "captures_404"
      //
      $sql = "SELECT DISTINCT ip FROM captures_404 WHERE ip_locked = 1;";
      $result = \mysqli_query($dbconn, $sql);
      if (\mysqli_errno($dbconn)) {
         echo 'error :-( ' . \mysqli_error($dbconn);
         \mysqli_close($dbconn);
         die();
      }
      $curious_ips = [];
      while ($row = \mysqli_fetch_assoc($result)) {
         $curious_ips[] = $row['ip'];
      }
      $curious_ips = \array_unique($curious_ips);

      //
      // si la IP del usuario que hace la petición está entre las IPs curiosas...
      //

      $user_ip = $_SERVER['REMOTE_ADDR'];

      if (\in_array($user_ip, $curious_ips)) {

         // obtenemos un link aleatorio
         //
         $random_link = \get_random_link();

         // insertamos en la tabla "redirections" la redirección que se va a realizar
         //
         $datetime = \date('Y-m-d H:i:s');
         $redirect = $random_link['id'] . ' ' . $random_link['url'];
         $redirect = \str_replace("'", '\\\'', $redirect);
         $sql = "INSERT INTO redirections(datetime, ip, redirect) VALUES('{$datetime}', '{$user_ip}', '{$redirect}');";
         \mysqli_query($dbconn, $sql);
         if (\mysqli_errno($dbconn)) {
            echo 'error :-( ' . \mysqli_error($dbconn);
            \mysqli_close($dbconn);
            die();
         }

         // cerramos la conexión a la base de datos
         //
         \mysqli_close($dbconn);

         // redirigimos
         //
         \header('Location: ' . $random_link['url']);
         die();

      }

   }


   if ($GLOBALS['env']['ENVIRONMENT'] === 'production') {

      \redirect_ip();

   }
