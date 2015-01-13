<?php
ob_start();
/** 
 * Classe d'accès aux données. 
 * Utilise les services de la classe PDO
 * pour l'application WebSemantique
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO 
 * @package default
 * @author Passé Valentin
 * @version    1.0
 * @link       http://www.php.net/manual/fr/book.pdo.php
 */
class PdoTpPhp{   		
		private static $serveur='mysql:host=localhost';
		private static $bdd='dbname=WebSemantique';   		
		private static $user='test' ;    		
		private static $mdp='test' ;	
		private static $monPdo;
		private static $monPdoTpPhp=null;
/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */				
	private function __construct(){
		PdoTpPhp::$monPdo = new PDO(PdoTpPhp::$serveur.';'.PdoTpPhp::$bdd, PdoTpPhp::$user, PdoTpPhp::$mdp); 
		PdoTpPhp::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		PdoTpPhp::$monPdo = null;
	}
/**
 * Fonction statique qui crée l'unique instance de la classe
 * Appel : $instancePdoGsb = PdoTpPhp::getPdoTpPhp();
 * @return l'unique objet de la classe PdoTpPhp
 */
	public static function getPdoTpPhp(){
		if(PdoTpPhp::$monPdoTpPhp==null){
			PdoTpPhp::$monPdoTpPhp= new PdoTpPhp();
		}
		return PdoTpPhp::$monPdoTpPhp;  
	}
/**
 * Retourne les informations d'un Employé
 * @param $login 
 * @param $mdp
 * @return l'id, le nom et le prénom sous la forme d'un tableau associatif 
*/
	public function setPasswordUtilisateur($id,$nouveauMotDePasse){

		$req = "UPDATE UTILISATEUR SET PASSWORD ='".$nouveauMotDePasse."' WHERE id=".$id;
		$rs = PdoTpPhp::$monPdo->query($req);
	}
	
	public function getUtilisateur($idUtilisateur){
		$req = "SELECT ID, LOGIN, PRIVILEGE, NOMCOMPLET FROM UTILISATEUR WHERE ID = '$idUtilisateur' ";
		$rs = PdoTpPhp::$monPdo->query($req);
		$ligne = $rs->fetch();
		return $ligne;
	}
}ob_end_clean();