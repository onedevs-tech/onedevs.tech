<?php


   /*
    *
    * surprise IP now is "redirect IP"
    *
    */


   function get_random_link() {

      $links = [

         //
         // IMAGES
         //
         'Blue Snake' => 'https://www.caracteristicas.co/wp-content/uploads/2017/03/serpiente-azul-1-e1564541782147.jpg',
         'Blue Woman' => 'https:/images.ecestaticos.com/Qz_q7VJ_lRhAzVQm32g2E74lqM4=/0x0:1199x674/557x418/filters:fill(white):format(jpg)/f.elconfidencial.com%2Foriginal%2F8fb%2F071%2F329%2F8fb0713296595270718187a004e3dfd9.jpg',
         'Cyber Woman' => 'https:/p4.wallpaperbetter.com/wallpaper/558/477/175/blue-eyes-cyberpunk-cyborg-robot-wallpaper-preview.jpg',
         'Gatito' => 'https://www.purina-latam.com/sites/g/files/auxxlc391/files/styles/kraken_generic_max_width_960/public/Purina%C2%AE%20La%20llegada%20del%20gatito%20a%20casa.jpg',
         'Red Fire Demon' => 'https://cdnb.artstation.com/p/assets/images/images/013/625/351/large/patri-balanovsky-demon-cute-small.jpg',

         //
         // YOUTUBE MUSIC VIDEOS
         //
         'AC/DC - Highway to Hell (Official Video)' => 'https://www.youtube.com/watch?v=l482T0yNkeo',
         'AC/DC - Thunderstruck (Official Video)' => 'https://www.youtube.com/watch?v=v2AC41dglnM',
         'Alejandro Sanz - Yo No Quiero Suerte' => 'https://www.youtube.com/watch?v=4bZ1wSjfBr4',
         'Bomfunk MC\'s - Freestyler (Video Original Version)' => 'https://www.youtube.com/watch?v=ymNFyxvIdaM',
         'Boris Brejcha at Grand Palais in Paris, France for Cercle' => 'https://www.youtube.com/watch?v=vqz8c4ZP3Wg',
         'Boris Brejcha Style @ Art of Minimal Techno Cartoon Tripping - Mystery Disney by RTTWLR' => 'https://www.youtube.com/watch?v=lgjY-lVtJZA',
         'Cypress Hill - Insane In The Brain (Official Video)' => 'https://www.youtube.com/watch?v=RijB8wnJCN0',
         'Delinquent Habits - Tres Delinquentes (Official Video)' => 'https://www.youtube.com/watch?v=w3qqN1BMnhk',
         'Diesel Power' => 'https://www.youtube.com/watch?v=GLSr0BAlndM',
         'Faithless- Insomnia (Forever Faithless)' => 'https://www.youtube.com/watch?v=6QZhC8DUD_o',
         'Fatboy Slim - Rockafeller Skank [Official Video]' => 'https://www.youtube.com/watch?v=FMrIy9zm7QY',
         'Joker / Gary Glitter - Rock and Roll Part 1 & Part 2 (Joker Soundtrack)' => 'https://www.youtube.com/watch?v=BuyFhOIA-bE',
         'Lady Gaga - Alejandro (Official Music Video)' => 'https://www.youtube.com/watch?v=niqrrmev4mA',
         'Madonna - Sorry (Official Video)' => 'https://www.youtube.com/watch?v=rdccTOcX7o4',
         'Madonna - Sorry (Official Video)' => 'https://www.youtube.com/watch?v=rdccTOcX7o4',
         'Metallica: Enter Sandman (Official Music Video)' => 'https://www.youtube.com/watch?v=CD-E-LDc384',
         'Metallica: Nothing Else Matters (Official Music Video)' => 'https://www.youtube.com/watch?v=tAGnKpE4NCI',
         'Michael Jackson - Give In To Me (Official Video)' => 'https://www.youtube.com/watch?v=LJ7qXHjxj_0',
         'Rammstein - Links 2 3 4 (Official Video)' => 'https://www.youtube.com/watch?v=Ph-CA_tu5KA',
         'SFDK y la Mala Rodríguez - Una de piratas' => 'https://www.youtube.com/watch?v=avDHVaOcgYA',
         'Technotronic - Pump Up The Jam (Official Music Video)' => 'https://www.youtube.com/watch?v=9EcjWd-O4jI',
         'The Chemical Brothers - Block Rockin\' Beats (Official Music Video)' => 'https://www.youtube.com/watch?v=iTxOKsyZ0Lw',
         'The original Technoviking video' => 'https://www.youtube.com/watch?v=UjCdB5p2v0Y',
         'The Prodigy - Mescaline Official Video' => 'https://www.youtube.com/watch?v=dYmaPZjlE40',
         'The Prodigy - Out Of Space (Official Video)' => 'https://www.youtube.com/watch?v=a4eav7dFvc8',
         'The Prodigy - Warrior\'s Dance Uncut (Official Video)' => 'https://www.youtube.com/watch?v=voBNpdXkLnU',
         'The Prodigy feat Sheila Chandra Smack My Bitch Up' => 'https://www.youtube.com/watch?v=GVV06jTYjeY',

         //
         // YOUTUBE RANDOM VIDEOS
         //
         'Confía en mí (T-800 con ametralladora) | Terminator 2 [Remasterizado]' => 'https://www.youtube.com/watch?v=41J1nbFABgk',
         'Kevin Mitnick - A Hacker\'s Story' => 'https://www.youtube.com/watch?v=Qe73tRTksf0',
         'Master Yoda VS Darth Sidious' => 'https://www.youtube.com/watch?v=iFUs7E8liZU',
         'Obi Wan & Qui Gon vs Darth Maul [4k UltraHD] - Star Wars: The Phantom Menace Fight Scene (1/2)' => 'https://www.youtube.com/watch?v=m2GA07iW8q0',
         'The Matrix - Follow the White Rabbit...' => 'https://www.youtube.com/watch?v=Smwrw4sNCxE',

      ];

      $random_link = \array_rand($links);

      return [
         'id' => $random_link,
         'url' => $links[$random_link]
      ];

   }


   function surprise_ip() {

      // nos conectamos a la base de datos "onedevs_404"
      //
      $dbconn = \mysqli_connect('127.0.0.1', 'onedevs_404', 'k9mn0ol8m,12', 'onedevs_404');
      if (\mysqli_connect_errno()) {
         echo 'error connecting to database :-( ' . \mysqli_connect_error();
         die();
      }

      // obtenemos todas las IPs curiosas de la tabla "captures_404"
      //
      $sql = "SELECT DISTINCT ip FROM captures_404;";
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
         $redirect = $random_link['id'] . ' --- ' . $random_link['url'];
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

      \surprise_ip();

   }
