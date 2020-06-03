<?php
require_once 'connect-db.php';

/** Obtenir la liste de tous les pays référencés d'un continent donné
 * @param $continent le nom d'un continent
 * @return tableau d'objets (des pays)
 */
function getCountriesByContinent($continent)
{
  // pour utiliser la variable globale dans la fonction
  global $pdo;
  $query = 'SELECT * FROM Country WHERE Continent = :cont;';
  $prep = $pdo->prepare($query);
  // on associe ici (bind) le paramètre (:cont) de la req SQL,
  // avec la valeur reçue en paramètre de la fonction ($continent)
  // on prend soin de spécifier le type de la valeur (String) afin
  // de se prémunir d'injections SQL (des filtres seront appliqués)
  $prep->bindValue(':cont', $continent, PDO::PARAM_STR);
  $prep->execute();
  // var_dump($prep);  pour du debug
  // var_dump($continent);

  // on retourne un tableau d'objets (car spécifié dans connect-db.php)
  return $prep->fetchAll();
}

//new_user
function User($nom,$prenom,$email,$password,$role)
{
    global $pdo;
    $insert = $pdo->prepare("INSERT INTO users(id,nom,prenom,email,motdepasse,date_inscription,role) VALUES (NULL, :nom, :prenom, :email, :motdepasse, NOW(), :role);");
    $insert->bindValue(':nom', $nom);
    $insert->bindValue(':prenom', $prenom);
    $insert->bindValue(':email', $email);
    $insert->bindValue(':motdepasse', $password);
    $insert->bindValue(':role', $role);
    $insert->execute();

}
function getAllUsers()
{
    global $pdo;
    $query = 'SELECT * FROM users;';
    return $pdo->query($query)->fetchAll();
}

function authentificationEtudiant($email,$password)
{
    global $pdo;
    $query ='SELECT email FROM users WHERE email= :email and motdepasse = :pass ;';
    $prep = $pdo->prepare($query);
    $prep->bindValue(':email', $email);
    $prep->bindValue(':pass', $password);
    $prep->execute();
    
    if($prep->rowCount() == 1){
        $result = $prep->fetch();
        return $result;
        }
        else
        {
        return false;
        }
}

function GetUsernom($id)
{
    global $pdo;
    $prepare = $pdo->prepare("SELECT * FROM users WHERE id = ? ;");
    $prepare->execute(array($id));
    return $prepare->fetch();
}


//verification
function verifuser($email, $password)
{
    global $pdo;
    $prepare = $pdo->prepare("SELECT * FROM users WHERE email = ? AND motdepasse = ? ;");
    $prepare->execute(array($email,$password));
    return $prepare->rowCount();

}

function recupIdUser($email,$password)
{
    global $pdo;
    $prepare = $pdo->prepare("SELECT * FROM users WHERE email = ? AND motdepasse = ? ;");
    $prepare->execute(array($email, $password));
    return $prepare->fetch();
}


/** Obtenir la liste des pays
 * @return liste d'objets
 */
// pour avoir tous les pays

function getAllCountries()
{
  global $pdo;
  $query = 'SELECT * FROM Country;';
  return $pdo->query($query)->fetchAll();
}

function getContinent(){
    global $pdo;
    $query ='SELECT Continent FROM country GROUP BY Continent;';
    return $pdo->query($query)->fetchAll();
}

function recupinfoUser($id){
    global $pdo;
    $query='SELECT * FROM users WHERE id= :id;';
    $prepare = $pdo->prepare($query);
    $prepare->bindValue(':id',$id);
    $prepare->execute();
    return $prepare->fetchAll()[0];
}

function updatetable($params)
{
    global $pdo;
    $requete ="UPDATE country set Code= :Code, Name= :Name, Capital= :Capital, Population= :Population, IndepYear= :IndepYear, GNP= :GNP, GovernmentForm= :GovernmentForm  where id = :id";
    $prep = $pdo->prepare($requete);
    $prep->bindValue(':id', $params['id']);
    $prep->bindValue(':Code', $params['Code']);
    $prep->bindValue(':Name', $params['Name']);
    $prep->bindValue(':Capital', $params['Capital']);
    $prep->bindValue(':Population', $params['Population']);
    $prep->bindValue(':IndepYear', $params['IndepYear']);
    $prep->bindValue(':GNP', $params['GNP']);
    $prep->bindValue(':GovernmentForm', $params['GovernmentForm']);
    $prep->execute();
    
}



    function getcountryinfo($id)
    {
        global $pdo;
        $requete = "SELECT * FROM country where id = :id";

        $prep = $pdo->prepare($requete);
        $prep->bindValue(':id', $id);
        $prep->execute();

        $result = $prep->fetch();
        return $result;
}
                
    function getUseraff($id)
{
    global $pdo;
    $query = "SELECT * from users where id = :id ;";
    try {
        $prep = $pdo->prepare($query);
        $prep->bindValue(':id', $id);
        $prep->execute();
    }
    catch ( Exception $e ) {
        die ("erreur dans la requete ".$e->getMessage());
    }
}

function getNbUsers(){
    global $pdo;
    $query = "SELECT count(*) as nb FROM users ;";
    try {
        $result = $pdo->query($query)->fetch();
        return $result->nb;
    }
    catch ( Exception $e ) {
        die ("erreur dans la requete ".$e->getMessage());
    }
}

function getUserinfo(){
    global $pdo;
    $query = 'SELECT * FROM users ';

    try {
        $result = $pdo->query($query)->fetchAll();
        return $result;
    }
    catch ( Exception $e ) {
        die ("erreur dans la requete ".$e->getMessage());
    }
}
function deleteUsers($id)
{
    global $pdo;
    $query = "delete from users where id = :id ;";
    try {
        $prep = $pdo->prepare($query);
        $prep->bindValue(':id', $id);
        $prep->execute();
    }
    catch ( Exception $e ) {
        die ("erreur dans la requete ".$e->getMessage());
    }
}

function updateUsers($params){
//    print_r($params);
    global $pdo;
    $requete = "update users set nom=:nom,prenom=:prenom,email=:email,motdepasse=:password, role=:role where id =:id";
    $prep = $pdo->prepare($requete);
    $prep->bindValue(':id', $params['id']);
    $prep->bindValue(':nom', $params['nom']);
    $prep->bindValue(':prenom', $params['prenom']);
    $prep->bindValue(':email', $params['email']);
    $prep->bindValue(':password', $params['password']);
    $prep->bindValue(':role', $params['role']);
    $prep->execute();

}

function getUsers($id){

    global $pdo;
    $requete = "SELECT * FROM users where id = :id";

    $prep = $pdo->prepare($requete);
    $prep->bindValue(':id', $id);
    $prep->execute();

    $result = $prep->fetch();
    return $result;
}




