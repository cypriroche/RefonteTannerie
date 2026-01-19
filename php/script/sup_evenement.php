<?php
include("../config.php");
include("../poo/database.php");

$db = Database::getInstance(DB_HOST, DB_NAME, DB_USER, DB_PASS, DB_CHARSET);
        // appel de la function de connexion
        $connection = $db->getConnection();

// Pour la sécurité, on applique les requêtes que si la méthode est post et un id du contenu à était choisit
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['id_evenement']) && !empty($_POST['id_evenement'])) {
    $id = $_POST['id_evenement'];
    // On utilise une variable intermédiaire


    // On supprime les donnée correspondant à l'id choisit par l'utilisateur
    $requete = $connection->prepare("DELETE FROM evenement WHERE id_evenement = :id");    
    $requete->bindParam("id",$id, PDO::PARAM_STR);
    $requete->execute();
}
header('Location:../admin/admin.php?status=deleted');
exit();

?>