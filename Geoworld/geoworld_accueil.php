<?php require_once "header.php"; ?>
	<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="map created using amCharts pixel map generator" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

		<title>Geoword</title>
        <div class="jumbotron">
        <h1 class="display-3" align="center">GEOWORLD</h1>
        </div>

        <br> <br>  <br> 

        <div class="container" align="center">
        <link href="css/loader.css" rel="stylesheet">
        </div>
    </head>
    <body onload="myFunction()" style="margin:0;">

    <div id="loader"></div>

    <div style="display:none;" id="myDiv" class="animate-bottom">
                        <!-- images -->
        <img src="images/imagecontient/world-map-divided-into-six-260nw-792129898.webp" class="img-fluid" alt="Responsive image">

        <br>
        <h1 class="container-fluid" align="middle">Bienvenue sur Geoworld</h1>
        <p>Plaforme apprendre pour histoire-geo </p>
        <div class="container-fluid" align="center">

          <button type="button" class="btn btn-outline-primary"><a style="text-decoration: none; " href="Formulaire_connexion.php" >Connectez vous </a></button>

          <button type="button" class="btn btn-outline-primary"><a style="text-decoration: none; " href="Formulaire_inscriptions.php" >Inscription </a></button>
        </div>
        <br>
                                              <!-- Image -->
                <div class="carousel-item active">
                    <img src="images/geoworld_accuiel/shutterstock_1484419673.jpg" class="d-block w-100" alt="..." height="500" width="1000">
                </div>
        <!-- Info du projet-->

<!--                                          Js de chargement-->
    <script>
        var myVar;

        function myFunction() {
            myVar = setTimeout(showPage, 1000);
        }

        function showPage() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("myDiv").style.display = "block";
        }
    </script>
 <br> <br> <br> <br> <br> <br> <br> <br> <br>  <br> <br> <br> <br> <br> <br> <br> <br> <br>


<?php include"footer.php"; ?>  

