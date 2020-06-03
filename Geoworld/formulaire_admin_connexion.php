<?php require_once "header.php"; ?>

<body>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">

            <form class="login100-form validate-form flex-sb flex-w" action="Login.php" method="post">
					<span class="login100-form-title p-b-32" algin="center" >
                        <h2 align="center">Admintrateur connexion</h2>
                        <br>
					</span>
                <span class="txt1 p-b-11">
                        <alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
						email
					</span>
                <div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
                    <input class="input100" type="text" name="username" >
                    <span class="focus-input100"></span>
                </div>

                <span class="txt1 p-b-11">
						Mot de passe
					</span>
                <div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
                    <input class="input100" type="password" name="password" >
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn">
                    <input class="login100-form-btn" type="submit" name="Valider" id="Valider" value="Valider"/>
                </div>

            </form>
        </div>
    </div>

</body>


<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>


