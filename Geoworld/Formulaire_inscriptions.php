<?php  require_once 'header.php';  ?>
<?php
require_once "inc/manager-db.php";

if(isset($_SESSION['user']))
{
  $id = $_SESSION['user'];
  $userrole = GetUsernom($id);
}

if(isset($_POST['submit']))
{
    $nom = htmlspecialchars(trim( $_POST['nom']));
    $prenom = htmlentities(trim($_POST['prenom'] ));;
    $email = htmlspecialchars(trim($_POST['email']));
    $password = trim(sha1($_POST['pass']));
    $confpass = trim(sha1($_POST['conf_pass']));
    $role = htmlspecialchars(trim($_POST['role']));

    User($nom,$prenom,$email,$password,$role);
    echo
    '<div class="alert alert-dismissible alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Félicitation!</strong> Votre formulaire a été envoyé avec succès.<a href="Login.php" class="alert-link"><h3>Connexion</h3></a>
    </div>';
}
 ?>
    <body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">

                <form class="login100-form validate-form flex-sb flex-w" method="post">
					<span class="login100-form-title p-b-32" algin="center">
						Inscription
					</span>


                    <span class="txt1 p-b-11">
                         <class="mr-3 mt-3 rounded-circle" style="width:60px;">
                        Nom
					</span>
                    <div class="wrap-input100 validate-input m-b-36" >
                        <input class="input100" type="text" name="nom"  >
                        <span class="focus-input100"></span>
                    </div>

                    <span class="txt1 p-b-11">
                         <class="mr-3 mt-3 rounded-circle" style="width:60px;">
                        Prenom
					</span>
                    <div class="wrap-input100 validate-input m-b-36" >
                        <input class="input100" type="text" name="prenom" >
                        <span class="focus-input100"></span>
                    </div>

                    <div span class="txt1 p-b-11">
                        Email
					</div>
                    <div class="wrap-input100 validate-input m-b-12" >
                        <input class="input100" type="email" name="email" >
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
                        <input class="input100" type="password" name="pass" >
                        <span class="focus-input100"></span>
                    </div>

                    <span class="txt1 p-b-11">
                         <class="mr-3 mt-3 rounded-circle" style="width:60px;">
					    confirme votre mot de passe
					</span>
                    <div class="wrap-input100 validate-input m-b-36" >
                        <span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
                        <input class="input100" type="password" name="conf_pass" >
                        <span class="focus-input100"></span>
                    </div>
                    <?php if(isset($_SESSION['user']) && $userrole->role == "admin"): ?>
                    <div span class="txt1 p-b-11">
                    Status de personne
                    </div>
                    <div class="wrap-input100 validate-input m-b-12" >

                    <input class="input100" type="text" name="role" >
                    <span class="focus-input100"></span>
                </div>
                    <?php endif;?>

                    <div class="container-login100-form-btn">
                        <input class="login100-form-btn" type="submit" name="submit" id="Valider" value="Valider"/>
                    </div>

                </form>
            </div>
        </div>
    </div>


<?php
require_once 'javascripts.php';
require_once 'footer.php';

?>