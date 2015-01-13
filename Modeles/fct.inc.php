<?php
/** 
 * Fonctions pour l'application WebSemantique
* @package default
 * @author Passé Valentin
 * @version    1.0
 */
 /**
 * Teste si un quelconque visiteur est connecté
 * @return vrai ou faux 
 */
 function estConnecte(){
  return isset($_SESSION['email']);
}
/**
 * Enregistre dans une variable session les infos d'un visiteur
 * @param $id 
 * @param $nom
 * @param $prenom
 */
function connecter($email,$nom,$prenom,$couleur,$profilepic){
  $_SESSION['email']= $email; 
  $_SESSION['nom']= $nom;
  $_SESSION['prenom']= $prenom;
  $_SESSION['couleur']= $couleur;
  $_SESSION['profilepic']= $profilepic;

}
/**
 * Détruit la session active
 */
function deconnecter(){
  session_destroy();
  $_SESSION['email'] = null;
}
?>
