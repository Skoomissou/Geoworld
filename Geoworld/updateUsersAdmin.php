<?php
include_once "header.php";?>
<?php
require_once "inc/manager-db.php";

$pdo = connect();
$id = $_GET['id'];
$userinfo = getUsers($id);

$user = GetUsernom($id);
if($user->role != "admin")
{
    header("Location:Login.php");
}

?>
    <title> Update User</title>
    <body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">


            <form class="login100-form validate-form flex-sb flex-w" action="TableUsersAdmin.php" method="POST">
					<span class="login100-form-title p-b-32" algin="center">
						Update User
                        <br>
                        <p>Modifier les informations de <?php echo $userinfo->nom; ?> <?php echo $userinfo->prenom; ?> </p>
					</span>


                <span class="txt1 p-b-11">
                         <class="mr-3 mt-3 rounded-circle" style="width:60px;">
                        Nom
					</span>
                <div class="wrap-input100 validate-input m-b-36" >
                    <input class="input100" type="text" name="nom" value="<?php echo $userinfo->nom; ?>" >
                    <span class="focus-input100"></span>
                </div>

                <span class="txt1 p-b-11">
                         <class="mr-3 mt-3 rounded-circle" style="width:60px;">
                        Prenom
					</span>
                <div class="wrap-input100 validate-input m-b-36" >
                    <input class="input100" type="text" name="prenom" value="<?php echo $userinfo->prenom; ?>">
                    <span class="focus-input100"></span>
                </div>

                <div span class="txt1 p-b-11">
                    Email
                </div>

                <div class="wrap-input100 validate-input m-b-12" >

                    <input class="input100" type="email" name="email" value="<?php echo $userinfo->email; ?>">
                    <span class="focus-input100"></span>
                </div>

                <span class="txt1 p-b-11">
                         <class="mr-3 mt-3 rounded-circle" style="width:60px;">
                        Mot de passe
					</span>
                <div class="wrap-input100 validate-input m-b-36" >
                        <span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
                    <input class="input100" type="text"  name="password" value="<?php echo $userinfo->motdepasse ; ?>">
                    <span class="focus-input100"></span>
                </div>
                <div span class="txt1 p-b-11">
                    Status de personne
                </div>
<!--                <div class="wrap-input100 validate-input m-b-12" >-->
<!---->
<!--                    <input class="input100" type="" name="role" value="--><?php //echo $userinfo->role; ?><!--">-->
<!--
                </div>-->
                <div>

                <label  class="wrap-input100 validate-input m-b-12">
                       <td>
                        <input type="radio" name="role"  value="Profs">Prof<br>
                        <input type="radio" name="role"  value="Eleve">Eleve
                       </td>


                </label>
                </div>


                <input class="input100" type="hidden" name="id" value="<?php echo $userinfo->id; ?>"
                <br>
                <div class="container-login100-form-btn">
                   <input class="login100-form-btn" type="submit" name="update" value="Inserer"/>
                </div>

            </form>

        </div>
    </div>
</body>

<?php include_once "footer.php"; ?>