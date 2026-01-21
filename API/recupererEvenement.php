<?php 

// tableau de données à retourner
$donnees=array();

// vérification de la présence de l'id_evenement
if(!isset($_GET["id_evenement"])){
	//  si pas d'id_evenement on renvoie un message d'erreur
  $donnees["status"]="PAS DE EVENEMENT";

}
else{
	// sinon on récupère l'id_evenement
	$id_evenement=$_GET["id_evenement"];


	// pour se connecter à la base de données
	include("../php/config.php");
	include("../php/poo/database.php");

	// connection
	try {
        $db = Database::getInstance(DB_HOST, DB_NAME, DB_USER, DB_PASS, DB_CHARSET);
        $conn = $db->getConnection();

	} catch (PDOException $e) {
	  $donnees["status"]="PB";
	}
	
	
	// recherche de l'événement
	$requete='SELECT * FROM evenement WHERE id_evenement='.$id_evenement;

	$resultats= $conn -> query($requete);
	$evenement = $resultats->fetch(PDO::FETCH_ASSOC);
	$resultats -> closeCursor();
	$donnees["evenement"] = $evenement;
	
	
	$donnees["status"]="OK";
}

// dans tous les cas, on génère le JSON

// encodage au format JSON 
$donneesJson = json_encode($donnees, JSON_HEX_APOS); 

// remplacement des \\n qui peuvent causer des erreurs en JavaScript 
$donneesJson = str_replace("\\n", " ", $donneesJson); 

// on écrit les données 
echo $donneesJson;
	
?>