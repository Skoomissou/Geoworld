<?php
require_once 'header.php';
$pdo = connect();

 if( $_SESSION["user"] == null )
 {
    header("Location:Login.php");
     
 }
 
 $id =  $_SESSION["user"];
 
 $userinfo = GetUsernom($id);

    echo  '<div class="alert alert-dismissible alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Bienvenue</strong> '.$userinfo->nom.' '.$userinfo->prenom. ' votre status est '.$userinfo->role.'
  </div>';


?>

<head>
    <link href="assets/bootstrap-4.4.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sileshow.css" rel="stylesheet">
    <title> Geoworld </title>
    
  
  <?php 
  if (isset($_SESSION['nom']) && isset($_SESSION['prenom'])) 
  {
    echo "<p style=text-align:right;>Bienvenue : ".$_SESSION['nom']."".$_SESSION['prenom']."";
  }
  ?>
  </div>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" id="home-section">

    <header>
        <div align="center" style="background-color: #f4511e" >
            <img src="images/icons/giphy.gif" height="190" >
            
<!--            <figcaption></figcaption> Permet de mettre un text sur l'image-->
        </div>
        <div align="center">
            <h1>GEOWORLD</h1>
        </div>
    </header>
  <br> <br> <br>
    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-2 sidenav">
                <div class="card mb-3">
                    <h3 class="card-header">Carte interactive</h3>
                    <img style="height: 200px; width: 100%; display: block;" src="images/worlds_maps/blank_map_of_continents_in_color.gif" alt="Card image">
                    <div class="card-body">
                        <a href="worldmap.php" class="card-link">ClICK ICI</a>
                    </div>
                    <div class="card-footer text-muted">
                        2 days ago
                    </div>
                </div>

            </div>
            <div class="col-sm-9 text-left">
                <h1>Bienvenue sur Geoworld</h1>
                <hr>
                <h3>Introduction des continents</h3>
                <p>Le mot continent vient du latin continere pour « tenir ensemble », ou continens terra, les « terres continues ». Au sens propre, ce terme désigne une vaste étendue continue du sol à la surface du globe terrestre. Cependant, en géographie, la définition est souvent amendée selon des critères faisant appel à des habitudes historiques et culturelles. On retrouve ainsi certains systèmes de continents qui considèrent l'Europe et l'Asie comme deux continents, alors que l'Eurasie ne forme qu'une étendue de terre.

                    Cette situation a abouti à l'existence de plusieurs modèles de continents, qui vont de quatre à sept continents. Mais cela n'a pas toujours été le cas, et ces modèles ont varié au gré de l'histoire et de la découverte de nouveaux territoires.

                    Dans son acception commune, la zone continentale inclut également les petites îles à très faible distance des côtes, mais non celles séparées par des bras de mer significatifs. D'un point de vue scientifique, les continents incluent également les îles rattachées aux plaques continentales, comme les îles Britanniques par rapport à l'Eurasie. </p>
                <hr>
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/imagecontient/Systemes_de_continents.gif" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/geoworld_accuiel/world-map-dark.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/geoworld_accuiel/maxresdefault.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <br>
                <h3>Histoire du terme</h3>
                <hr>
                <br>
                <h5>Les premières définitions</h5>
                <p>La première distinction entre les continents a été faite par les anciens marins grecs qui ont donné les noms d'Europe et d'Asie aux terres des deux côtés du cours d'eau de la mer Égée, le détroit des Dardanelles, la mer de Marmara, le détroit de Bosphore et la mer Noire1. Les noms ont d'abord été appliqués seulement pour désigner les terres près de la côte et seulement plus tard étendus à l'arrière-pays2. Les penseurs de la Grèce antique ont ensuite débattu pour savoir si l'Afrique (alors appelée la Libye) devait être considérée comme faisant partie de l'Asie ou comme une tierce partie du monde. Une division en trois parties s'est finalement imposée3. Du point de vue grec, la mer Égée, était le centre du monde, avec l'Asie à l'Est, l'Europe à l'Ouest et au Nord et l'Afrique au Sud4.

                    Alors que les limites géographiques sont immuables (à l'échelle de temps humaine), les limites entre les continents ne sont pas fixes. Dès le début, la frontière de l'Europe avec l'Asie a été prise à partir de la mer Noire, le long de la rivière Rioni (appelée alors le Phasis) en Géorgie. Plus tard, elle était considérée comme allant de la mer Noire par le détroit de Kertch, la mer d'Azov et le long du fleuve Don (appelé alors le Tanais) en Russie5.

                    Le Nil a généralement été considéré comme La frontière entre l'Asie et l'Afrique. Hérodote6, au ve siècle av. J.-C., s'est cependant opposé à cette situation, qui plaçait l'Égypte sur deux continents. Il a donc fait coïncider la rupture entre l'Asie et l'Afrique avec la frontière occidentale de l'Égypte, ce qui situait ce pays en Asie. Il a également remis en question la division en trois de ce qui est en fait une seule masse7, un débat qui se poursuit près de deux millénaires et demi plus tard.


                    Le plus ancien exemple imprimé de la carte en T-O, montrant les 3 continents comme les domaines de fils de Noé : Sem, Iafeth (Japhet) et Cham (Ham)
                    Ératosthène, au iiie siècle av. J.-C., a noté que certains géographes divisaient les continents par les fleuves (le Nil et le Don), considérant ainsi les « îles ». D'autres divisaient les continents par des isthmes, appelant donc les continents « péninsules ». Ces géographes fixaient la frontière entre l'Europe et l'Asie à l'isthme entre la mer Noire et la mer Caspienne, et la frontière entre l'Asie et l'Afrique à l'isthme entre la mer Rouge et l'embouchure du lac Bardawil sur la Méditerranée8.

                    Avec la période romaine et le Moyen Âge, quelques auteurs ont pris l'isthme de Suez comme frontière entre l'Asie et l'Afrique, mais la plupart des auteurs continuaient à considérer le Nil ou la frontière occidentale de l'Égypte comme frontière. Au Moyen Âge, le monde a été représenté sur la carte en T-O, avec le T représentant les eaux de la division des trois continents.</p>
                    <figcaption class="figure-caption text-right"><link href="https://fr.wikipedia.org/wiki/World" alt="wikipedia" for="wikipedia">Source :wikipedia </link> </figcaption>
            </div>
            <hr>
             </div>
        </div>
    </div>


</div>

</body>


<br> <br> <br>
<?php
require_once 'javascripts.php';
require_once 'footer.php';

?>