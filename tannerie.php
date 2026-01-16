<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/favicon.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&family=Trade+Winds&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/LaTannerie.css">
    <link rel="stylesheet" href="css/styles.css">

    <title>Présentation</title>
</head>

<body>
    <header>
        <a href="index.php" class="logo-header">
            <!-- LOGO cliquable qui retourne à l'accueil -->
            <img src="img/logo-tannerie.png" alt="Logo La Tannerie" class="logo">
        </a>
        <nav>
            <!-- nav qui affiche le menu -->
            <ul>
                <li><a href="programmation.php">Programmation</a></li>
                <li class="menu-deroulant">
                    <a href="tannerie.php">La Tannerie <span class="menu-deroulant-arrow">▼</span></a>
                    <ul class="menu-deroulant-menu">
                        <!-- menu deroulant -->
                        <li><a href="structure.php">La structure</a></li>
                        <li><a href="rse.php">RSE</a></li>
                        <li><a href="actionsCulturelles.php">Actions culturelles</a></li>
                    </ul>
                </li>
                <li><a href="services.php">Nos services</a></li>
                <li><a href="nousTrouver.php">Nous trouver</a></li>
                <li class="nav-user"><a href="connexionUtilisateur/connexion.php" aria-label="Connexion"><img src="img/icon/user.png" alt="Connexion"></a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="section-bannière">
            <h1>La Tannerie</h1>
            <img src="img/La Tannerie/Le lieu/La-Tannerie.png" alt="Collecte et recyclage des mégots">
        </section>

        <h1 class="titre-rse-accueil">RSE</h1>
        <section class="liste-actions-rse">
            <article class="carte-action-rse">
                <a href="page-megots.php" class="lien-action-rse">
                    <img src="img/La Tannerie/Gestion-des-mégots.png" alt="Gestion des mégots"
                        class="image-action-rse">
                    <h2 class="titre-action-rse">Gestion des mégots</h2>
                    <p class="texte-action-rse">
                        En 2021, la Tannerie a installé de nouveaux cendriers sur la terrasse et un collecteur de mégots
                        qui permettra leur recyclage avec Tchao Mégots !
                    </p>
                </a>
            </article>

            <article class="carte-action-rse">
                <a href="page-verres.php" class="lien-action-rse">
                    <img src="img/La Tannerie/Gobelets-consignés.png" alt="Verres consignés"
                        class="image-action-rse">
                    <h2 class="titre-action-rse">Verres consignés</h2>
                    <p class="texte-action-rse">
                        Les gobelets sérigraphiés ont été remplacés par des verres en plastique neutres pour faciliter
                        le processus de fabrication et éviter les vols.
                    </p>
                </a>
            </article>

            <article class="carte-action-rse">
                <a href="page-toilette.php" class="lien-action-rse">
                    <img src="img/La Tannerie/Papier toilette.png" alt="Papier toilette"
                        class="image-action-rse">
                    <h2 class="titre-action-rse">Papier toilette</h2>
                    <p class="texte-action-rse">
                        La Tannerie s’approvisionne désormais chez Popee, fabricant de papier toilette éco-responsable !
                    </p>
                </a>
            </article>
        </section>

        <div class="conteneur-bouton-rse">
            <a href="Les actions RSE.php" class="bouton-rse">En savoir plus</a>
        </div>

        <div class="separateur-droite"></div>

        <section class="section-actions">
            <div class="conteneur-actions">
                <img src="img/La Tannerie/Action-culturel---ateliers-d’initiation.png"
                    alt="Ateliers d'initiation musicale" class="image-mise-en-avant">

                <div class="texte-actions">
                    <h2>Actions culturelles</h2>
                    <p>
                        À travers divers projets, la Tannerie développe un programme de sensibilisation
                        et d‘initiatives musicales dans le but de rendre la culture accessible au plus grand nombre.
                    </p>
                    <button class="bouton-plus">En savoir plus</button>
                </div>
            </div>
        </section>
    </main>
    <footer>

        <div class="footer-container">
            <div class="logo-container">
                <a href="index.php">
                    <img src="img/logo-tannerie.png" alt="Logo La tannerie Bourg en Bresse">
                </a>
            </div>

            <!-- menu footer -->
            <div class="footer-menu">
                <ul>
                    <li><a href="programmation.php">Programmation</a></li>
                    <li><a href="tannerie.php">La Tannerie</a></li>
                    <li><a href="services.php">Nos services</a></li>
                    <li><a href="nousTrouver.php">Nous trouver</a></li>
                </ul>
            </div>

            <!-- icon résaux sociaux -->
            <div class="icones-reseaux">
                <a href="https://www.facebook.com/latannerie" aria-label="Facebook">
                    <img src="img/icon/facebook-icon.png" alt="Facebook">
                </a>
                <a href="https://x.com/LaTannerie" aria-label="X">
                    <img src="img/icon/x-icon.png" alt="X">
                </a>
                <a href="https://www.youtube.com/channel/UCxKtBCxXr0KrnHim09zdMuA" aria-label="Youtube">
                    <img src="img/icon/youtube-icon.png" alt="Youtube">
                </a>
                <a href="https://www.facebook.com/latannerie" aria-label="Tiktok">
                    <img src="img/icon/tiktok-icon.png" alt="Tiktok">
                </a>
                <a href="https://www.instagram.com/latannerie01/" aria-label="Instagram">
                    <img src="img/icon/instagram-icon.png" alt="Instagram">
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