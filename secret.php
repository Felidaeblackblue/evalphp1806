<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\index.css">
    <title>Destination mystère</title>
</head>

<body>
    
<header>
<?php require 'templates/header.php' ?>
</header>

<section>

<h2>Destination mystère</h2>

<?php  

if(isset($_SESSION['isConnected'])) : ?> 
<p>Voulez vous connaître votre destination mystère?</p>
<form action="controllers\visualisation.php" method="POST">
    <input type="radio" id="yes" checked name="non" value="affirmatif">
    <label for="subscribeNews">Oui</label>
    <input type="radio" id="no" name="non" value="negatif">
    <label for="subscribeNews">Non</label>
    <input type="submit" value="Valider"></p>
    <?php else:?>
    <p>Connecte toi pour acceder à cette page</p>
    
<?php endif?>
</section>


</body>
</html>



<!-- Si je clique sur oui l'image s'affiche
si je clique sur "non" un message s'affiche "Vous n'aimez pas les suprises!"

<img src="img\pont.jpg" alt="">