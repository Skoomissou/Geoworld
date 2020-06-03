<?php include_once "header.php";
 include_once "javascripts.php"; 
 require_once "inc/manager-db.php"; 


if(!isset($_SESSION["user"]))
{
   header("Location:Login.php");
     
}

$id =  $_SESSION["user"];

$userinfo = GetUsernom($id);
if($userinfo->role != "admin")
{
    header("Location:Formulaire_connexion.php");
  
}


if(isset($_GET['delete']))
{
    $id = $_GET['delete'];
    deleteUsers($id);
}

if (isset($_POST['update']))
{
    //print_r($_POST);
    updateUsers($_POST);
}
$nbUsers = getNbUsers();
$userslistes = getAllUsers($pdo);


?>
    <title>users_table</title>
</head>
<body>
<div  class="container">
    <br>
    <button type="button" style="float: right;" class="btn btn-outline-primary">
        <a style="text-decoration: none; " href="Formulaire_inscriptions.php" >Ajouter un utilisateur</a></button>
    <br><br>

    <div align="center" ><img src="images/icons/446003-200.png" width="50" height="50"> </div>
    <h2 align="center" > Test Table Users </h2>
    <p>Les listes des utilsateurs : </p>
    <table id="usertable" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
        <thead>
        <tr>
            <th>id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>mot de passe</th>
            <th>date de inscription</th>
            <th>role</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($userslistes as $ligne): ?>
            <tr>
                <td><?php echo $ligne->id; ?></td>
                <td><?php echo $ligne->nom; ?></td>
                <td><?php echo $ligne->prenom ?></td>
                <td><?php echo $ligne->email ?></td>
                <td><?php echo trim(sha1($ligne->motdepasse))?></td>
                <td><?php echo $ligne->date_inscription ?></td>
                <td><?php echo $ligne->role ?></td>
                <td><a href="TableUsersAdmin.php?delete=<?php echo $ligne->id ?>"
                       onClick="return(confirm('Etes-vous sûr de vouloir supprimer <?php echo $ligne->nom ?> ?'));">delete</a></td>
                <td><a href="updateUsersAdmin.php?id=<?php echo $ligne->id ?> ">update</a></td>
                <?php endforeach; ?>
        </tbody>
    </table>
    <p>Nombre de utilisateur : <?php echo $nbUsers; ?> </p>
</div>

<?php include_once "footer.php"; ?>
