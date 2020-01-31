
<?php
//Logout

session_start();
session_unset();
session_destroy();

header('location: login.php');
//header('location: read.php');

//formulaire + bouton qui redirige vers la bonne page