<?php

include("../config.php");
include("../poo/database.php");
// Connexion à la base de données
$db = Database::getInstance(DB_HOST, DB_NAME, DB_USER, DB_PASS, DB_CHARSET);
        // appel de la function de connexion
        $connection = $db->getConnection();

/* Traite l'ajout d'un événement depuis le formulaire admin */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$artiste = $_POST['nomArtiste'] ?? '';
	$date = $_POST['date'] ?? '';
	$heure = $_POST['heure'] ?? '';
	$ouverture = $_POST['ouverture'] ?? '';
	$infos = $_POST['infos'] ?? '';
	$signature = $_POST['signature'] ?? '';
	$prix = $_POST['prix'] ?? 0;
	$style = $_POST['style'] ?? '';

	// $visuelPath = '';
	// if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
	// 	$uploadDir = __DIR__ . '/../../img/Programation/';
	// 	if (!is_dir($uploadDir)) mkdir($uploadDir, 0755, true);
	// 	$tmp = $_FILES['image']['tmp_name'];
	// 	$orig = basename($_FILES['image']['name']);
	// 	$ext = pathinfo($orig, PATHINFO_EXTENSION);
	// 	$name = uniqid('evt_') . '.' . $ext;
	// 	if (move_uploaded_file($tmp, $uploadDir . $name)) {
	// 		$visuelPath = 'img/Programation/' . $name;
	// 	}
	// }

	$requete = $connection->prepare('INSERT INTO evenement (artiste, visuel, date_evenement, heure_evenement, style, heure_ouverture, informations, signature, tarif_plein) VALUES (:artiste, :visuel, :date, :heure, :style, :ouverture, :infos, :signature, :prix)');
	$requete->bindParam(':artiste', $artiste, PDO::PARAM_STR);
	$requete->bindParam(':visuel', $visuelPath, PDO::PARAM_STR);
	$requete->bindParam(':date', $date, PDO::PARAM_STR);
	$requete->bindParam(':heure', $heure, PDO::PARAM_STR);
	$requete->bindParam(':style', $style, PDO::PARAM_STR);
	$requete->bindParam(':ouverture', $ouverture, PDO::PARAM_STR);
	$requete->bindParam(':infos', $infos, PDO::PARAM_STR);
	$requete->bindParam(':signature', $signature, PDO::PARAM_STR);
	$requete->bindParam(':prix', $prix);

	$requete->execute();
}

header('Location:../admin/admin.php');
exit();