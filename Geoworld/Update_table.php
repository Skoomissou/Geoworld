<?php
// session_start(); 
require_once "header.php";
require_once "inc/manager-db.php";

$pdo = connect();
$id = $_GET['id'];
$infocountries = getcountryinfo($id);

if(isset($_GET['nomContinent']))
{
    $continent = $_GET['nomContinent'];
    $desPays = getCountriesByContinent($continent);
}


?>
    <title> Mise a jour des informations </title>
    <body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">


            <form class="login100-form validate-form flex-sb flex-w" action=" <?php echo "countries.php?nomContinent=".$infocountries->Continent.""; ?>"  method="POST">
				<span class="login100-form-title p-b-32" algin="center">
                   

						Mise a jour des informations 
                        <br>
                </span>
                <span class="txt1 p-b-11">
                         <class="mr-3 mt-3 rounded-circle" style="width:60px;">
                        Code
					</span>
                <div class="wrap-input100 validate-input m-b-36" >
                    <input class="input100" type="text" name="Code" value="<?php echo $infocountries->code; ?>" >
                    <span class="focus-input100"></span>
                </div>

                <span class="txt1 p-b-11">
                         <class="mr-3 mt-3 rounded-circle" style="width:60px;">
                        Pays
					</span>
                <div class="wrap-input100 validate-input m-b-36" >
                    <input class="input100" type="text" name="Name" value="<?php echo $infocountries->Pays; ?>" disabled>
                    <span class="focus-input100"></span>
                </div>

                <div span class="txt1 p-b-11">
                    capital
                </div>

                <div class="wrap-input100 validate-input m-b-12" >

                    <input class="input100" type="text" name="Capital" value="<?php echo $infocountries->Capital; ?>" disabled>
                    <span class="focus-input100"></span>
                </div>
                <div span class="txt1 p-b-11">
                    Population
                </div>

                <div class="wrap-input100 validate-input m-b-12" >

                    <input class="input100" type="number" name="Population" value="<?php echo $infocountries->Population; ?>">
                    <span class="focus-input100"></span>
                </div>
                <div span class="txt1 p-b-11">
                    Annee independance
                </div>

                <div class="wrap-input100 validate-input m-b-12" >

                    <input class="input100" type="number" name="IndepYear" value="<?php echo $infocountries->IndepYear; ?>">
                    <span class="focus-input100"></span>
                </div>
                <div span class="txt1 p-b-11">
                    
                </div>
                Experience de vie
                <div class="wrap-input100 validate-input m-b-12" >

                    <input class="input100" type="number" name="LifeExpectancy" value="<?php echo $infocountries->LifeExpectancy; ?>">
                    <span class="focus-input100"></span>
                </div>
                
                <div>
                PIB
                <div class="wrap-input100 validate-input m-b-12" >

                    <input class="input100" type="number" name="GNP" value="<?php echo $infocountries->GNP; ?>">
                    <span class="focus-input100"></span>
                </div>
                </div>
                Type de gouvernement
                <div class="wrap-input100 validate-input m-b-12" >

                    <input class="input100" type="text" name="GovernmentForm" value="<?php echo $infocountries->GovernmentForm; ?>">
                    <span class="focus-input100"></span>
                </div>
                
                <input class="input100" type="hidden"  name="id" value="<?php echo $infocountries->id; ?>">
                <input class="input100" type="hidden"  name="Continent" value="<?php echo $infocountries->Continent; ?>">
                
                <div class="container-login100-form-btn">
                   <input class="login100-form-btn" type="submit" name="update" value="Inserer"/>
                </div>

            </form>

        </div>
    </div>
</div>

<?php include_once "footer.php"; ?>