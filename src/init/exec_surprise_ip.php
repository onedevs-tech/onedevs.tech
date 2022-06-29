<?php


   function get_random_link() {

      $links = [

         //
         // IMAGES
         //
         'Blue Snake' => 'https://www.caracteristicas.co/wp-content/uploads/2017/03/serpiente-azul-1-e1564541782147.jpg',
         'Blue Woman' => 'https:/images.ecestaticos.com/Qz_q7VJ_lRhAzVQm32g2E74lqM4=/0x0:1199x674/557x418/filters:fill(white):format(jpg)/f.elconfidencial.com%2Foriginal%2F8fb%2F071%2F329%2F8fb0713296595270718187a004e3dfd9.jpg',
         'Cyber Woman' => 'https:/p4.wallpaperbetter.com/wallpaper/558/477/175/blue-eyes-cyberpunk-cyborg-robot-wallpaper-preview.jpg',
         'Elephant Pacifier' => 'https://i5.walmartimages.com/asr/58e989a6-f122-4b76-9805-c880b343267d.fe7461e0f89e1c9ca6a2bb51c5c3d7aa.jpeg?odnHeight=2000&odnWidth=2000&odnBg=FFFFFF',
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
         'Lady Gaga - Alejandro (Official Music Video)' => 'https://www.youtube.com/watch?v=niqrrmev4mA',
         'Madonna - Sorry (Official Video)' => 'https://www.youtube.com/watch?v=rdccTOcX7o4',
         'Madonna - Sorry (Official Video)' => 'https://www.youtube.com/watch?v=rdccTOcX7o4',
         'Metallica: Enter Sandman (Official Music Video)' => 'https://www.youtube.com/watch?v=CD-E-LDc384',
         'Metallica: Nothing Else Matters (Official Music Video)' => 'https://www.youtube.com/watch?v=tAGnKpE4NCI',
         'Michael Jackson - Give In To Me (Official Video)' => 'https://www.youtube.com/watch?v=LJ7qXHjxj_0',
         'Rammstein - Links 2 3 4 (Official Video)' => 'https://www.youtube.com/watch?v=Ph-CA_tu5KA',
         'SFDK y la Mala Rodríguez - Una de piratas' => 'https://www.youtube.com/watch?v=avDHVaOcgYA',
         'Technotronic - Pump Up The Jam (Official Music Video)' => 'https://www.youtube.com/watch?v=9EcjWd-O4jI',
         'The Prodigy - Mescaline Official Video' => 'https://www.youtube.com/watch?v=dYmaPZjlE40',
         'The Prodigy - Out Of Space (Official Video)' => 'https://www.youtube.com/watch?v=a4eav7dFvc8',
         'The Prodigy - Warrior\'s Dance Uncut (Official Video)' => 'https://www.youtube.com/watch?v=voBNpdXkLnU',
         'The Prodigy feat Sheila Chandra Smack My Bitch Up' => 'https://www.youtube.com/watch?v=GVV06jTYjeY',

         //
         // YOUTUBE RANDOM VIDEOS
         //
         'Confía en mí (T-800 con ametralladora) | Terminator 2 [Remasterizado]' => 'https://www.youtube.com/watch?v=41J1nbFABgk',
         'Joker / Gary Glitter - Rock and Roll Part 1 & Part 2 (Joker Soundtrack)' => 'https://www.youtube.com/watch?v=BuyFhOIA-bE',
         'Kevin Mitnick - A Hacker\'s Story' => 'https://www.youtube.com/watch?v=Qe73tRTksf0',
         'Master Yoda VS Darth Sidious' => 'https://www.youtube.com/watch?v=iFUs7E8liZU',
         'Obi Wan & Qui Gon vs Darth Maul [4k UltraHD] - Star Wars: The Phantom Menace Fight Scene (1/2)' => 'https://www.youtube.com/watch?v=m2GA07iW8q0',
         'The Matrix - Follow the White Rabbit...' => 'https://www.youtube.com/watch?v=Smwrw4sNCxE',
         'The original Technoviking video' => 'https://www.youtube.com/watch?v=UjCdB5p2v0Y',

      ];

      $random_link = \array_rand($links);

      return [
         'link_id' => $random_link,
         'link' => $links[$random_link]
      ];

   }


   function surprise_ip() {

      $dbconn = \mysqli_connect('127.0.0.1', 'onedevs_404', 'k9mn0ol8m,12', 'onedevs_404');
      if (\mysqli_connect_errno()) {
         die('error connecting to database :-( ' . \mysqli_connect_error());
      }
      $sql = "SELECT DISTINCT ip4 FROM onedevs_404;";
      $result = \mysqli_query($dbconn, $sql);
      if (\mysqli_errno($dbconn)) {
         echo 'error :-( ' . \mysqli_error($dbconn);
         \mysqli_close($dbconn);
         die();
      }
      \mysqli_close($dbconn);

      $ip4s = [];
      while ($row = \mysqli_fetch_assoc($result)) {
         $ip4s[] = $row['ip4'];
      }

      if (\in_array($_SERVER['REMOTE_ADDR'], $ip4s)) {
         $random_link = \get_random_link();
         \header('Location: ' . $random_link['link']);
         die();
      }

   }


   if ($GLOBALS['env']['ENVIRONMENT'] === 'production') {

      \surprise_ip();

   }
