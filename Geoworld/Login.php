<?php
session_start();
include "inc/manager-db.php";

$pdo = connect();

if(isset($_POST['Valider']))
{
    $email = htmlspecialchars($_POST['username']);
    $password = sha1($_POST['password']);


        if (!empty($email) && !empty($password))
        {
            if (recupIdUser($email, $password))
            {

            $userinfo = recupIdUser($email, $password);


            $_SESSION["user"] = $userinfo->id;
            // $user = $_SESSION["user"];
            // $userinfo2 = GetUsernom($user);

                header("Location:Page_principal.php");

            }
            else
            {
                header("Location:Formulaire_connexion.php");
            }
        }



}














