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
    <style>
      body{
    background-color: black;
}
    </style>
    <link rel="icon" type="image/svg+xml" href="./assets/images/" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Fanwood+Text:ital@0;1&family=Tenor+Sans&display=swap"
      rel="stylesheet">
      <body>
</body>
</head>

<?php
$dsn = 'mysql:dbname=chat_evan;host=localhost';
$user = 'root';
$password = ' ';

var_dump($_POST);

$dbh = new PDO($dsn, $user);
$sql = "INSERT INTO login (username_login, email_login, password_login) VALUES (:username_login, :email_login, :password_login)";

$sth = $dbh->prepare($sql);
$sth->execute(['username_login' => $_POST["lastname"], 'email_login' => $_POST["mail"], 'password_login' => $_POST["password"]]);



?>

<div class="hello_name" style="color: white; text-align: center; font-size: 40px; font-family: sans-serif;">

<?php 

echo "Bienvenue ${_POST['lastname']} ";

?>

</div>


