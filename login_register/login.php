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
    <link rel="stylesheet" href="./style/main6.css" />
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
    <title>Login</title>
    <body>

<div class="back">


      <div class="car"> 
          <div class="second">
  <h1 class="log">Login</h1>
  <div class="account_no"> <a href="/register.php">
  <button class="no_account"><p style="text-decoration: underline;">Vous n'avez pas de compte ?</p></button> </a>
  </div>

</div>

<form method="post">

<label for="mail" class="texte">Votre E-Mail</label><br>
      <input type="email" name="mail" id="mail"
      required require=".com"><br>
  
      <label for="pass">Votre Mot De Passe</label><br>
      <input type="password" id="pass" name="password"
             minlength="8" required><br>

             <button>
                Se Connecter    
             </button>

</forms>

</body>
  </head>