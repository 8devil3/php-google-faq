<?php include './script.php' ?>

<!DOCTYPE html>
<html lang="it">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="shortcut icon" href="https://www.google.it/images/branding/googleg/1x/googleg_standard_color_128dp.png" type="image/x-icon">

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

   <link rel="stylesheet" href="./css/style.css">

   <title>Google FAQ</title>
</head>

<body>
   <header class="col">
      <div class="row j-between">
         <div class="row">
            <a href="https://www.google.it" class="logo"></a>
            <h1>Privacy e termini</h1>
         </div>
         <div class="row">
            <div class="icon">
               <svg class="gb_Ve" focusable="false" viewBox="0 0 24 24"><path d="M6,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM16,6c0,1.1 0.9,2 2,2s2,-0.9 2,-2 -0.9,-2 -2,-2 -2,0.9 -2,2zM12,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2z"></path></svg>
            </div>
            <button>Accedi</button>
         </div>
      </div>
      <ul class="row">
         <li>Introduzione</li>
         <li>Norme sulla privacy</li>
         <li>Termini di servizio</li>
         <li>Tecnologie</li>
         <li>Domande frequenti</li>
      </ul>
   </header>

   <main>
      <?= $listQ ?>
   </main>

   <footer>
      <div class="row j-between">
         <ul class="row">
            <li>Google</li>
            <li>Tutto su Google</li>
            <li>Privacy</li>
            <li>Termini</li>
         </ul>
         <div class="row">
            <div class="lang-icon"></div>
            <select>
               <option value="0" default>Italiano</option>
               <option value="1">Inglese</option>
               <option value="2">Tedesco</option>
               <option value="3">Francese</option>
            </select>
         </div>
      </div>
   </footer>
</body>
</html>