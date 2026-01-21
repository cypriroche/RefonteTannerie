<?php
/*
Cette API permet d'envoyer les infos d'une évenement dont l'identifiant a été transmis par la méthode GET
sous la forme d'un message encodé en JSON
status :
    PB en cas de souci
    OK sinon

*/


$donnees = [ 'status' => 'PAS DE EVENEMENT', 'evenements' => [] ];

$donnees["status"]="OK";


// pour se connecter à la base de données
include("../php/config.php");
include("../php/poo/database.php");

try {
    // Connexion à la base de données
    $db = Database::getInstance(DB_HOST, DB_NAME, DB_USER, DB_PASS, DB_CHARSET);
    $pdo = $db->getConnection();

    // Préparation de la requête avec filtres
    $sql = "SELECT * FROM evenement WHERE 1=1";
    $params = [];

    // on rajoute les filtres de style si ils sont présents
    if (!empty($_GET['style'])) {
        $sql .= " AND style LIKE :style";
        $params[':style'] = '%' . $_GET['style'] . '%';
    }

    // on rajoute aussi dans la reaquête le filtre par artiste si il est présent
    if (!empty($_GET['artiste'])) {
        $sql .= " AND artiste LIKE :artiste";
        $params[':artiste'] = '%' . $_GET['artiste'] . '%';
    }

    // exécution de la requête
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);


    // récupération des résultats
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $donnees['evenements'] = $rows;
    $donnees['status'] = 'OK';

} catch (Exception $e) {
    // en cas de problème
    $donnees['status'] = 'PB';
    $donnees['evenements'] = [];
}


// dans tous les cas, on génère le JSON

// encodage au format JSON 
$donneesJson = json_encode($donnees, JSON_HEX_APOS); 

// remplacement des \\n qui peuvent causer des erreurs en JavaScript 
$donneesJson = str_replace("\\n", " ", $donneesJson); 

// on écrit les données 
echo $donneesJson;
