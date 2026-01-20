
<?php
include("../config.php");
include("../poo/database.php");

$db = Database::getInstance(DB_HOST, DB_NAME, DB_USER, DB_PASS, DB_CHARSET);
        // appel de la function de connexion
        $connection = $db->getConnection();


/* Modifier un événement */

$req = $connection->prepare('UPDATE evenement SET artiste = :artiste, visuel = :visuel, date_evenement = :date, heure_evenement = :heure, style = :style, heure_ouverture = :ouverture, informations = :infos, signature = :signature, tarif_plein = :prix WHERE id_evenement = :id');

// Récupération des valeurs POST (noms attendus depuis le formulaire)
$artiste = $_POST['nomArtiste'] ?? '';
$visuel = $_POST['image'] ?? '';
$date = $_POST['date'] ?? '';
$heure = $_POST['heure'] ?? '';
$style = $_POST['style'] ?? '';
$ouverture = $_POST['ouverture'] ?? '';
$infos = $_POST['infos'] ?? '';
$signature = $_POST['signature'] ?? '';
$prix = $_POST['prix'] ?? 0;
$id = $_POST['id_evenement'] ?? $_POST['id_cont'] ?? null;

if ($id === null) {
        header('Location:../admin/admin.php?status=error_no_id');
        exit();
}

$req->bindParam(':artiste', $artiste, PDO::PARAM_STR);
$req->bindParam(':visuel', $visuel, PDO::PARAM_STR);
$req->bindParam(':date', $date, PDO::PARAM_STR);
$req->bindParam(':heure', $heure, PDO::PARAM_STR);
$req->bindParam(':style', $style, PDO::PARAM_STR);
$req->bindParam(':ouverture', $ouverture, PDO::PARAM_STR);
$req->bindParam(':infos', $infos, PDO::PARAM_STR);
$req->bindParam(':signature', $signature, PDO::PARAM_STR);
$req->bindParam(':prix', $prix);
$req->bindParam(':id', $id, PDO::PARAM_INT);

$req->execute();

header('Location:../admin/admin.php?status=modified');
exit();
?>