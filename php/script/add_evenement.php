<?php

include("../config.php");
include("../poo/database.php");
// Connexion à la base de données
$db = Database::getInstance(DB_HOST, DB_NAME, DB_USER, DB_PASS, DB_CHARSET);
        // appel de la function de connexion
        $connection = $db->getConnection();

/* Traite l'ajout d'un événement depuis le formulaire admin */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // déclaration des variables récupérées depuis le formulaire
	$artiste = $_POST['nomArtiste'] ?? '';
	$date = $_POST['date'] ?? '';
	$heure = $_POST['heure'] ?? '';
	$ouverture = $_POST['ouverture'] ?? '';
	$infos = $_POST['infos'] ?? '';
	$signature = $_POST['signature'] ?? '';
	$prix = $_POST['prix'] ?? 0;
	$style = $_POST['style'] ?? '';

	$visuelPath = $_POST['image'] ?? '';

    // requête d'insertion  
	$requete = $connection->prepare('INSERT INTO evenement (artiste, visuel, date_evenement, heure_evenement, style, heure_ouverture, informations, signature, tarif_plein) VALUES (:artiste, :visuel, :date, :heure, :style, :ouverture, :infos, :signature, :prix)');
    // bindParam pour sécuriser les données
	$requete->bindParam(':artiste', $artiste, PDO::PARAM_STR);
	$requete->bindParam(':visuel', $visuelPath, PDO::PARAM_STR);
	$requete->bindParam(':date', $date, PDO::PARAM_STR);
	$requete->bindParam(':heure', $heure, PDO::PARAM_STR);
	$requete->bindParam(':style', $style, PDO::PARAM_STR);
	$requete->bindParam(':ouverture', $ouverture, PDO::PARAM_STR);
	$requete->bindParam(':infos', $infos, PDO::PARAM_STR);
	$requete->bindParam(':signature', $signature, PDO::PARAM_STR);
	$requete->bindParam(':prix', $prix, PDO::PARAM_INT);

    // exécution de la requête
	$requete->execute();
}

header('Location:../admin/admin.php?status=added');
exit();