<?php
/*
Cette API permet d'envoyer les ressources d'une SAE dont l'identifiant a été transmis par la méthode GET
sous la forme d'un message encodé en JSON
status :
    PB en cas de souci
    OK sinon
sae
  intitule
    l'intitulé de la SAE en question
ressources
    la liste des ressources (id, intitule et semestre)
*/
// Empêcher toute sortie HTML non contrôlée (warnings, notices)
ini_set('display_errors', 0);
error_reporting(0);
header('Content-Type: application/json; charset=utf-8');
ob_start();

$donnees = [ 'status' => 'PAS DE EVENEMENT', 'evenements' => [] ];


// if (!isset($_GET["artiste"]) && !isset($_GET["style"])) {
//     // recherche de de l'événement
//     $requete='SELECT * FROM evenement';
// }
// elseif(!isset($_GET["style"]) && isset($_GET["artiste"])) {
//     $artiste=$_GET["artiste"];
//     $requete='SELECT * FROM evenement 
//     WHERE artiste LIKE "%'.$artiste.'%"';
// }
// elseif(isset($_GET["style"]) && !isset($_GET["artiste"])) {
//     $style=$_GET["style"];
//     $requete='SELECT * FROM evenement 
//     WHERE style LIKE "%'.$style.'%"';
// }
// else{
//     // recherche de l'événement filtré
//     $artiste=$_GET["artiste"];
//     $style=$_GET["style"];
//     $requete='SELECT * FROM evenement
//     WHERE artiste LIKE "%'.$artiste.'%" 
//     AND style LIKE "%'.$style.'%"';
// }
    
   
    
    
    $donnees["status"]="OK";


	// pour se connecter à la base de données
	include("../php/config.php");
	include("../php/poo/database.php");

	try {
    $db = Database::getInstance(DB_HOST, DB_NAME, DB_USER, DB_PASS, DB_CHARSET);
    $pdo = $db->getConnection();

    $sql = "SELECT * FROM evenement WHERE 1=1";
    $params = [];

    if (!empty($_GET['style'])) {
        $sql .= " AND style LIKE :style";
        $params[':style'] = '%' . $_GET['style'] . '%';
    }

    if (!empty($_GET['artiste'])) {
        $sql .= " AND artiste LIKE :artiste";
        $params[':artiste'] = '%' . $_GET['artiste'] . '%';
    }

    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);


    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $donnees['evenements'] = $rows;
    $donnees['status'] = 'OK';

} catch (Exception $e) {
    $donnees['status'] = 'PB';
    $donnees['evenements'] = [];
}


// dans tous les cas, on génère le JSON

// encodage au format JSON 
$donneesJson = json_encode($donnees, JSON_HEX_APOS); 

// remplacement des \\n qui peuvent causer des erreurs en JavaScript 
$donneesJson = str_replace("\\n", " ", $donneesJson); 

// on écrit les données 
// nettoyer le tampon de sortie éventuel et renvoyer uniquement le JSON
if (ob_get_length() !== false) {
    ob_end_clean();
}
echo $donneesJson;
