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
                    <li class="nav-user"><a href="connexion.php" aria-label="Connexion"><img src="../../img/icon/user.png" alt="Connexion"></a></li>
                <?php endif; ?>
          </ul>
      </nav>
  </header>
  <main>
  <div class="actionsAdmin">

        <a href="ajoutEvenement.php">
            <button class="actionBouton">
                Ajouter un évènement
            </button>
        </a>

        <a href="modificationEvenement.php">
            <button class="actionBouton">
                Modifier un évènement
            </button>
        </a>

        <a href="suppressionEvenement.php">
            <button class="actionBouton">
                Supprimer un évènement
            </button>
        </a>
    </div>

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
