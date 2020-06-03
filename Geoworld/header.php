<?php
session_start();

include"inc/manager-db.php";
$pdo = connect ();
$desContinents = getContinent();

if(isset($_SESSION['user']))
{
  $id = $_SESSION['user'];
  $user_role = GetUsernom($id);
}

?>
<!doctype html>
<html lang="fr" class="h-100">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="map created using amCharts pixel map generator" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>



    <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->


  <title>Homepage : GeoWorld </title>

  <!-- Bootstrap core CSS -->
  <link href="assets/bootstrap-4.4.1-dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

  </style>
  <!-- Custom styles for this template -->
  <link href="css/custom.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <img src="images/indeximages/giphy.gif" style="width:40px">
      <a class="navbar-brand" href="geoworld_accueil.php">GeoWorld</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
         <ul class="nav nav-pills nav-fill">

              <?php
                   if(isset($id) && $user_role->role == "admin"):
              ?>
              <li class="nav-item">
                <a class="nav-link"  href="TableUsersAdmin.php">TableUsers</a>
              </li>
              <?php endif; ?>

              <?php
                  if( isset($id) && ($user_role->role == "admin" || $user_role->role == "profs" || $user_role->role == "eleve") ):
//
              ?>

                 <li class="nav-item">
                    <a class="nav-link" href="cartedumonde.php"> <i class="fas fa-globe-americas"></i>  Carte du monde </a>
                 </li>
              <?php endif; ?>

             <?php
             if( isset($id) && ($user_role->role == "admin" || $user_role->role == "profs" || $user_role->role == "eleve") ):
             ?>
                 <li class="nav-item">
<!--                     <button class="w3-btn w3-orange w3-xlarge" href="Page_principal.php"  ><i class="w3-margin-left fa fa-home" ></i>Home</button>-->
                   <a class="nav-link"  href="Page_principal.php">  <i class="fa fa-home"></i> Page accuiel </a>
               </li>
             <?php endif; ?>


                <li class="nav-item">
                  <a class="nav-link" href=""></a>
                 </li>


                <?php if( isset($id) && ($user_role->role == "admin" || $user_role->role == "profs" || $user_role->role == "eleve") ): ?>
<!--                    && $user_role->role == "admin") || "profs" || "eleve"-->
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="continent" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Les Continents</a>
                        <div class="dropdown-menu" aria-labelledby="continent">
                            <?php foreach($desContinents as $continent): ?>
                                <a class="dropdown-item" href="countries.php?nomContinent=<?php echo $continent->Continent; ?>"> <?php echo $continent->Continent; ?></a>
                            <?php endforeach ; ?>
                                <a class="dropdown-item" href="countries.php">All countries</a>
                       </div>
                  </li>
                <?php endif;?>

         </ul>

        <ul class="navbar-nav ml-auto">

          <li class="nav-item">
            <a class="nav-link" href="Formulaire_connexion.php"  > <i class="fas fa-sign-out-alt"></i> Connexion</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="Formulaire_inscriptions.php" > <i class="fas fa-user-plus"></i>  S'inscription</a>
          </li>

          <?php
            if(isset($id)):
          ?>
          <li class="nav-item">
            <a class="nav-link " href="todo-projet.php" >ProjetPPE-SLAM </a>
          </li>
          <?php endif; ?>

            <?php
                if(isset($id)):
            ?>
            <li class="nav-item">
                <a class="nav-link" href="logout.php" > <i class="fas fa-power-off"></i> Deconnexion</a>
            </li>
            <?php endif; ?> 
        </ul>
     </nav>
  </header>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
