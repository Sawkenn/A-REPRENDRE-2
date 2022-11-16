<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:title" content="title" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="url" />
    <meta property="og:image" content="image" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:description" content="description" />
    <link rel="stylesheet" href="./style/main2.css" />
    <link rel="icon" type="image/svg+xml" href="./assets/images/" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Fanwood+Text:ital@0;1&family=Tenor+Sans&display=swap"
      rel="stylesheet"

  

      
    />
    <title>Messagerie</title>
  </head>


  <div id="Messagerie">
</div>

  <body>


    <div class="hero">
      <h1>Exercices Alexis</h1>
    </div>
    <script src="./js/main.js"></script>
  </body>
</html>

<div class="car">
    
<div class="second">
  

  <h1 class="question">Une Question ? Discutons !</h1>
<h1 class="talk">Parle Dès Maintenant avec quelqu'un !</h1>



<div class="presence">
<figure>
<p> <img src="./assets/images/icon.png"  width="20px" title="Alexis"></p>
<figcaption class="activit">Actif Il y a 10 heures.</figcaption>
</figure>

</div>

<div class="keyb">

<?php 

echo "${_POST['msg']} ";

?>

</div>


<div class="partmsg">

  
<form class="sending" action="messagerie.php" method="POST">

    <div class="sendd">
      <button class="envoie">
        Envoyer
      </button>

    </div>
    

    <div class="message">
  <label for="msg" class="texte"></label><br>
    <input type="text" name="msg" id="msg"><br>
</div>
    </form>

  
  <div class="image-upload">
    <label for="file-input">
      <img src="https://th.bing.com/th/id/OIP.djrHhPrOVynppSdGJ2dtPgHaHa?pid=ImgDet&rs=1" width="30px"/>
    </label>
  
    <input id="file-input" type="file" />
  </div>


 
    

</div>
</div>
</div>

<div class="retour">
  <a href="index.html">
  <button class="return">
    Retour a l'Accueil
</button>
</a>
</div>


