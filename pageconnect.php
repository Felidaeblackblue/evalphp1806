<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\index.css">
    <title>Connexion</title>
</head>

<body>
    
<header>
<?php require 'templates/header.php' ?>
</header>

<section>
    
<h2>Connexion</h2>

<form action="controllers\connexion.php" method="POST">
 Votre nom : <input type="text" name="nom"/> <br> <br>
 Votre destination : <input type="text" name="destination"/> <br> <br>
 <label for="password">Mot de passe :</label> <br>
 <input id="password" type= "password" name="pass" >
 <input type="submit" value="OK"></p>
</form>
 
</section>

</body>
</html>