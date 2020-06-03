<?php
session_start();

session_destroy();
header("location:Formulaire_connexion.php");

// Suppression des cookies de connexion automatique
setcookie('login', '');
setcookie('pass_hache', '');
exit;

