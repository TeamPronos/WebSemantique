<?php  
  
// récupérer les éléments du formulaire  
// et se protéger contre l'injection MySQL (plus de détails ici: http://us.php.net/mysql_real_escape_string)  
$email=stripslashes($_POST['email']);  
$password=stripslashes($_POST['password']);  

try {  
    // Connect to server and select database.  
    $dbh = new PDO('mysql:host=localhost;dbname=WebSemantique', 'test', 'test');  
  
    // Vérifier si un utilisateur avec cette adresse email existe dans la table.  
    // En SQL: sélectionner tous les tuples de la table USERS tels que l'email est égal à $email.  
    $sql = $dbh->query("SELECT * FROM USERS WHERE email ='".$email."' AND password='".$password."'");  
    if ($sql->rowCount()>0) {
    	connecter($email);
    }  
    else {
    	print("L'utilisateur n'existe pas !");
    }

function estConnecte(){
  return isset($_SESSION['email']);
}

function connecter($email){
	session_start();
	$sql = $dbh->query("SELECT u.id, u.email, u.nom, u.prenom, u.couleur, u.profilepic FROM USERS u WHERE u.email='".$email."'");  
    if ($sql->rowCount()<1) {  
        header("Location: index.php?erreur=".urlencode("un problème est survenu"));  
    }  
    else {
    	$valeur = $sql->fetch();
        $_SESSION['email'] = $valeur['email'];
    }

}

function deconnecter(){
  session_destroy();
  $_SESSION['email'] = null;
}

?>