<?php

session_start();
$username = 'Ben';
$password = 'voyage';


if ($_POST['nom'] == $username && $_POST['pass'] == $password){
   $_SESSION['pseudo'] = $_POST['nom'];
   $_SESSION['isConnected'] = true;
   header('Location: /');
    exit();
}else {
    header('Location: /pageconnect.php');
    exit();
}

 

