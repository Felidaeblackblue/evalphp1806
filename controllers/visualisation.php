<?php

session_start(); 


if (isset($_POST['non'])){
    ($_POST['non'] == "affirmatif"); ?>
    <img src="img\pont.jpg" alt="">
    <?php header('Location: /secret.php');?>
    <?php exit();
}else {
   ?> <p>Vous n'aimez pas les suprises!</p>
  <?php  exit();
}

 