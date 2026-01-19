<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../poo/database.php';
session_start();

// Connexion à la base de données 
        $db = Database::getInstance(DB_HOST, DB_NAME, DB_USER, DB_PASS, DB_CHARSET);
        // appel de la function de connexion
        $connection = $db->getConnection();
        // requête pour récupérer les événements grâce à la function query dans database.php
        $modifEvenements = $db->query("SELECT * FROM evenement");

?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>

  <link href="https://fonts.googleapis.com/css2?family=Trade+Winds&family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../css/styleadmin.css">
  <link rel="stylesheet" href="../../css/styles.css">
</head>

<body>
  <header>
      <a href="../../index.php" class="logo-header">
          <img src="../../img/logo-tannerie.png" alt="Logo La Tannerie" class="logo">
      </a>
      <nav id="menuPrincipal">
                <ul>
                <li><a href="../../programmation.php">Programmation</a></li>
                <li class="menu-deroulant">
                  <a href="../../tannerie.php">La Tannerie <span class="menu-deroulant-arrow">▼</span></a>
                  <ul class="menu-deroulant-menu">
                      <li><a href="../../structure.php">La structure</a></li>
                      <li><a href="../../rse.php">RSE</a></li>
                      <li><a href="../../actionsCulturelles.php">Actions culturelles</a></li>
                  </ul>
              </li>
                <li><a href="../../services.php">Nos services</a></li>
                <li><a href="../../nousTrouver.php">Nous trouver</a></li>
                <?php if (!empty($_SESSION['is_admin'])) : ?>
                    <li class="menu-deroulant admin">
                        <img src="../../img/icon/user.png" alt="Utilisateur">
                        <ul class="menu-deroulant-menu">
                            <li><a href="admin.php">Admin</a></li>
                            <li><a href="logout.php">Se déconnecter</a></li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li class="nav-user"><a href="connexion.php" aria-label="Connexion"><img src="../../img/icon/user.png" alt="Connexion"></a></li>
                <?php endif; ?>
          </ul>
      </nav>
      <button id="burger" class="burger" aria-label="Menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
  </header>
  <script src="js/menu.js"></script>  
  <main>
  <a href="admin.php" class="boutonRetour">×</a>

    <form action="../../API/recupererEvenement.php" method="GET" class="formulaireEvenement">
        <h1 class="titreFormulaire">Evénement à modifier</h1>
        <label class="labelFormulaire" for="evenement">Choisissez l'évènement à modifier</label><br>
        <select id="evenement" name="evenement" class="optionsEvenement">
            <option value="">Sélectionnez un événement</option>
            <!-- affichage des événements en liste grâce à une boucle -->
            <?php
            foreach ($modifEvenements as $modifEvenement) {
                // la valeur de l'option est l'id de l'événement et le texte affiché est le nom de l'artiste
                echo '<option value="'.$modifEvenement['id_evenement'].'">'.$modifEvenement['artiste'].'</option>';
            }
            ?>
        </select><br><br>

        <button class="boutonFormulaire" type="submit"> Valider</button>
    </form>

    <form action="../script/modif_evenement.php" method="POST" class="formulaireEvenement">

        <h1 class="titreFormulaire">Ajouter un événement</h1>
            
        <label class="labelFormulaire" for="nomArtiste">Nom de l'artiste</label>
        <input class="champFormulaire" type="text" id="nomArtiste" name="nomArtiste" value="<?php echo $modifEvenement['artiste']?>" required>

        <!-- <label class="labelFormulaire" for="image">Image</label>
        <input class="champFormulaire" type="file" id="image" name="image" accept="image/*" required>
         -->
        <label class="labelFormulaire" for="image">Image</label>
        <input class="champFormulaire" type="text" id="image" name="image" value="<?php echo $modifEvenement['visuel']?>" required>

        <label class="labelFormulaire" for="date">Date</label>
        <input class="champFormulaire" type="date" id="date" name="date" value="<?php echo $modifEvenement['date_evenement']?>" required>

        <label class="labelFormulaire" for="heure">Heure</label>
        <input class="champFormulaire" type="time" id="heure" name="heure" value="<?php echo $modifEvenement['heure_evenement']?>" required>

        <label class="labelFormulaire" for="ouverture">Ouverture des portes</label>
        <input class="champFormulaire" type="time" id="ouverture" name="ouverture" value="<?php echo $modifEvenement['heure_ouverture']?>">

        <label class="labelFormulaire" for="infos">Informations</label>
        <textarea class="champFormulaire" id="infos" name="infos" rows="4"><?php echo $modifEvenement['informations']?></textarea>

        <label class="labelFormulaire" for="signature">Signature</label>
        <input class="champFormulaire" type="text" id="signature" name="signature" value="<?php echo $modifEvenement['signature']?>">

        <label class="labelFormulaire" for="prix">Prix en € </label>
        <input class="champFormulaire" type="number" id="prix" name="prix" value="<?php echo $modifEvenement['tarif_plein']?>" required>

        <input type="hidden" name="id_evenement" value="<?php echo $modifEvenement['id_evenement']; ?>">
        <button type="submit" class="boutonFormulaire">Ajouter l'événement</button>
    </form>

  </main>
  <footer>
        
        <div class="footer-container">
            <div class="logo-container">
            <a href="../../index.php">
                <img src="../../img/logo-tannerie.png" alt="Logo La tannerie Bourg en Bresse">
            </a>
            </div>

            <!-- menu footer -->
            <div class="footer-menu">
                <ul>
                    <li><a href="../../programmation.php">Programmation</a></li>
                    <li><a href="../../tannerie.php">La Tannerie</a></li>
                    <li><a href="../../services.php">Nos services</a></li>
                    <li><a href="../../nousTrouver.php">Nous trouver</a></li>
                </ul>
            </div>
            
           <!-- icon résaux sociaux -->
            <div class="icones-reseaux">
                <a href="https://www.facebook.com/latannerie" aria-label="Facebook">
                    <img src="../../img/icon/facebook-icon.png" alt="Facebook">
                </a>
                <a href="https://x.com/LaTannerie" aria-label="X">
                    <img src="../../img/icon/x-icon.png" alt="X">
                </a>
                <a href="https://www.youtube.com/channel/UCxKtBCxXr0KrnHim09zdMuA" aria-label="Youtube">
                    <img src="../../img/icon/youtube-icon.png" alt="Youtube">
                </a>
                <a href="https://www.facebook.com/latannerie" aria-label="Tiktok">
                    <img src="../../img/icon/tiktok-icon.png" alt="Tiktok">
                </a>
                <a href="https://www.instagram.com/latannerie01/" aria-label="Instagram">
                    <img src="../../img/icon/instagram-icon.png" alt="Instagram">
                </a>
            </div>
        </div>

        <!-- informations sur les droits d'auteurs -->
        <div class="droit-d-auteurs">
          <p>© 2026 La Tannerie - Tous droits réservés</p>
        </div>
    </footer>
</body>
</html>
