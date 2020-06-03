<?php  

include "header.php";

if( !isset($_SESSION["user"]))
{
   header("Location:Formulaire_connexion.php");
}

if(isset($_SESSION['user']))
{
  $id = $_SESSION['user'];
  $user_role = GetUsernom($id);
}


// recuperation infos BD //
if(isset($_GET['nomContinent']))
{
    $continent = $_GET['nomContinent'];
    $desPays = getCountriesByContinent($continent);
}

if (isset($_POST['update']))
{
    echo $_POST['Code'].' '.$_POST['Population'].' '.$_POST['IndepYear'].' '.$_POST['LifeExpectancy'].' '.$_POST['GNP'].' '.$_POST['GovernmentForm'];
    updatetable($_POST);
    header("Location:countries.php?nomContinent=".$_POST['Continent']);
}

?>

<head>
    <link href="css/table.css" rel="stylesheet">
</head>
<body>
<div class="container box">
   <div class="table-responsive">
   <br/>
     
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><?php echo $continent ?></h1>
            <p class="lead">voici les informations sur le contient <?php echo $continent ?></p>
        </div>
    </div>
<br> <br>
    <hr>                                                      <!-- image de contients-->
    <div class="container-fluid" align="center">
<!--        <figure class="figure">-->
            <?php
                if($continent == 'Europe'):
            ?>
            <img src="images/imagecontient/langfr-420px-Europe_orthographic_Caucasus_Urals_boundary_(with_borders).svg.png" class="figure-img img-fluid rounded" alt="Europe" title="Europe" >
                    <?php
                elseif($continent == "Asia"):
                    ?>
                    <img src="images/imagecontient/langfr-420px-Asia_(orthographic_projection).svg.png" class="figure-img img-fluid rounded" alt="Asia" title="Asia" >
                    <?php
                elseif($continent == "Africa"):
                    ?>
                    <img src="images/imagecontient/langfr-420px-Africa_(orthographic_projection).svg.png" class="figure-img img-fluid rounded" alt="Afrique" title="Afrique" >
                <?php
                elseif($continent == "Oceania"):
                    ?>
                    <img src="images/imagecontient/langfr-420px-Oceania_(orthographic_projection).svg.png" class="figure-img img-fluid rounded" alt="Oceancie" title="Oceania" >
                <?php
                elseif($continent == "North America"):
                    ?>
                    <img src="images/imagecontient/North_America_(orthographic_projection).svg.png" class="figure-img img-fluid rounded" alt="North Amerique" title="North Amerique" >
                <?php
                elseif($continent == "Antarctica"):
                    ?>
                    <img src="images/imagecontient/Location_Antarctica.svg.png" class="figure-img img-fluid rounded" alt="Antarctica" title="Antarctica" >
                <?php
                elseif($continent == "South America"):
                    ?>
                    <img src="images/imagecontient/langfr-420px-South_America_(orthographic_projection).svg.png" class="figure-img img-fluid rounded" alt="South America" title="South Amerique" >
                    <?php
                endif;
                    ?>
            <figcaption class="figure-caption text-right"><link href="https://fr.wikipedia.org/wiki/World" alt="wikipedia" for="wikipedia">Source :wikipedia </link> </figcaption>
<!--        </figure>-->
    </div>
<br> <br>
<hr>
<!--<main role="main" class="flex-shrink-0">-->
    <div align="middle">
    <table id="user_data" class="table table-bordered table-striped">
             <thead>
            <th>Code
            </th>
            <th>Pays
            </th>
            <th>Capital
            </th>
            <th >Population
            </th>
            <th >Annee Independance
            </th>
            <th>Experience de vie
            </th>
            <th>PIB
            </th>
            <th>Type de gouvernement
            </th>
            <th>Langue
            </th>
            <?php  
            if( isset($id) && ($user_role->role == "admin" || $user_role->role == "profs" )):
            ?>
            <th>
                Update
            </th>
            <?php endif;?>

        </thead>
        <tbody>
        <?php if($desPays != "") {foreach ($desPays as $value) : ?>
                    <tr>
                        <td align="center"><?php echo $value->Code; ?></td>
                        <td align="center" ><?php echo $value->pays; ?> </td>
                        <td align="center"><?php echo $value->cityname ;?> </td>
                        <td align="center"><?php echo $value->Population; ?> </td>
                        <td align="center"><?php echo $value->IndepYear; ?> </td>
                        <td align="center"><?php echo $value->LifeExpectancy; ?> </td>
                        <td align="center"><?php echo $value->GNP; ?> </td>
                        <td align="center"><?php echo $value->GovernmentForm; ?> </td>
                        
                        <td align="center"><?php $langues = getlangue($value->codepays); ?>
                            <ul> 
                                <?php if($langues != "") {foreach ($langues as $valeur) : ?>
                                <li>
                                    <?php echo $valeur->Name; ?>
                                </li>
                            <?php endforeach ;} ?>
                        </ul>
                    </td>
                        

                        <?php
                        if( isset($id) && ($user_role->role == "admin" || $user_role->role == "profs" )):
                        ?>
                        <td>
                        <a href="Update_table.php?id=<?php echo $value->codepays; ?>">update</a> 
                        </td>
                        <?php endif;?>    
                    </tr>

        <?php endforeach ;}  ?>
        </tbody>
            <tfoot >
            <tr>
                <th >Code
                </th>
                <th >Pays
                </th>
                <th>Capital
                </th>
                <th >Population
                </th>
                <th >Annee Independance
                </th>
                <th >Experience de vie
                </th>
                <th >PIB
                </th>
                <th>Type de gouvernement
                </th>
                <th>Langue
                </th>
                 </tr>
            </tfoot>
        </table>
    </div>
    
    

      
   
</div>
<br> 
</div>   
<?php

require_once 'footer.php';

?>