<?php

session_start(); //Je donne l'accès à $_SESSION
session_destroy(); // Je détruis tout ce qui est dans la session
header('Location: /'); // Je redirige  vers la racine c'est à dire la page d'accueil
 