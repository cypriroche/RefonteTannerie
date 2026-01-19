<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../poo/database.php';
session_start();

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
      <nav>
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
                            <li><a href="../../pagesAdmin/admin.php">Admin</a></li>
                            <li><a href="logout.php">Se déconnecter</a></li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li class="nav-user"><a href="connexion.php"><img src="../../img/icon/user.png" alt="Connexion"></a></li>
                <?php endif; ?>
          </ul>
      </nav>
  </header>
    <main>
        <a href="admin.php" class="boutonRetour">×</a>
        <form action="../script/add_evenement.php" method="POST" class="formulaireEvenement" enctype="multipart/form-data">

            <h1 class="titreFormulaire">Ajouter un événement</h1>
            
            <label class="labelFormulaire" for="nomArtiste">Nom de l'artiste</label>
            <input class="champFormulaire" type="text" id="nomArtiste" name="nomArtiste" required>

            <!-- <label class="labelFormulaire" for="image">Image</label>
            <input class="champFormulaire" type="file" id="image" name="image" accept="image/*" required>
             -->
            <label class="labelFormulaire" for="image">Image</label>
            <input class="champFormulaire" type="text" id="image" name="image" placeholder="http://localhost/RefonteTannerie/img/jul.png" required>

            <label class="labelFormulaire" for="date">Date</label>
            <input class="champFormulaire" type="date" id="date" name="date" required>

            <label class="labelFormulaire" for="heure">Heure</label>
            <input class="champFormulaire" type="time" id="heure" name="heure" required>

            <label class="labelFormulaire" for="ouverture">Ouverture des portes</label>
            <input class="champFormulaire" type="time" id="ouverture" name="ouverture">

            <label class="labelFormulaire" for="infos">Informations</label>
            <textarea class="champFormulaire" id="infos" name="infos" rows="4"></textarea>

            <label class="labelFormulaire" for="signature">Signature</label>
            <input class="champFormulaire" type="text" id="signature" name="signature">

            <label class="labelFormulaire" for="prix">Prix en € </label>
            <input class="champFormulaire" type="number" id="prix" name="prix" required>

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
