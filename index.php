<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/favicon.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&family=Trade+Winds&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/styleprog.css">

    <title>La Tannerie</title>
</head>
<body>
    <header>
        <a href="index.php" class="logo-header">
            <img src="img/logo-tannerie.png" alt="Logo La Tannerie" class="logo">
        </a>
        <nav>
            <ul>
                <li><a href="programmation.php">Programmation</a></li>
                <li class="menu-deroulant">
                    <a href="tannerie.php">La Tannerie <span class="menu-deroulant-arrow">▼</span></a>
                    <ul class="menu-deroulant-menu">
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
        <img class="banniere" src="img/Accueil/banniere.webp" alt="Bannière">

        <h1 class="titresAccueil">Programmation</h1>
        <section class="listeCartesAccueil">
            <article class="carteAccueil">
                <div class="carteGaucheAccueil">
                    <div class="conteneurVisuel">
                        <img src="img/logo.png" alt="Logo" class="logoCarte">
                        <img src="img/Programation/daftpunk.png" alt="Daft Punk" class="visuelArtiste">
                        <h2 class="nomArtiste">Daft Punk</h2>
                    </div>
                    <ul class="infosCles">
                        <li class="date">Mardi 9 novembre 2027</li>
                        <li class="heure">20h30</li>
                        <li class="genre">Electro</li>
                    </ul>
                </div>
            </article>

            <article class="carteAccueil">
                <div class="carteGaucheAccueil">
                    <div class="conteneurVisuel">
                        <img src="img/logo.png" alt="Logo" class="logoCarte">
                        <img src="img/Programation/jul.png" alt="Jul" class="visuelArtiste">
                        <h2 class="nomArtiste">Jul</h2>
                    </div>
                    <ul class="infosCles">
                        <li class="date">Mardi 23 novembre 2027</li>
                        <li class="heure">21h00</li>
                        <li class="genre">Rap</li>
                    </ul>
                </div>
            </article>

            <article class="carteAccueil">
                <div class="carteGaucheAccueil">
                    <div class="conteneurVisuel">
                        <img src="img/logo.png" alt="Logo" class="logoCarte">
                        <img src="img/Programation/david brownie.jpg" alt="David Brownie" class="visuelArtiste">
                        <h2 class="nomArtiste">David Brownie</h2>
                    </div>
                    <ul class="infosCles">
                        <li class="date">Samedi 12 février 2028</li>
                        <li class="heure">21h00</li>
                        <li class="genre">Rock</li>
                    </ul>
                </div>
            </article>
        </section>
        <div class="boutonCentre">
            <a href="programmation.php" class="boutonAccueil">Voir toute la programmation</a>
        </div>

        <div class="separateurGauche"></div>

        <h1 class="titresAccueil">La Tannerie</h1>
        <div class="tannerieAccueil">
            <div class="articleTannerieGauche">
                <img src="img/Accueil/tannerieaccueil.jpg" alt="La Tannerie" class="imageTannerie">
            </div>
            <div class="articleTannerieDroite">
                <p class="texteTannerie">
                    La Tannerie est un lieu culturel emblématique, où la musique, l’art et la convivialité se rencontrent. Depuis sa création, cet espace unique accueille des concerts, des spectacles et des événements qui rassemblent un public passionné et curieux.
                    <br><br>
                    Chaque programmation est pensée pour offrir des expériences mémorables, mêlant artistes locaux et têtes d’affiche internationales. L’acoustique soigneusement étudiée, l’ambiance intimiste et l’architecture singulière de La Tannerie créent un cadre exceptionnel pour vivre la musique pleinement.
                    <br><br>
                    Que vous soyez amateur de rock, de pop, d’électro ou de jazz, chaque visite devient un moment de partage et de découverte. Plus qu’une simple salle de spectacle, La Tannerie est un véritable lieu de vie, de rencontre et d’échanges.
                </p>
                <div class="boutonCentre">
                    <a href="tannerie.php" class="boutonAccueil">En savoir plus</a>
                </div>
            </div>
        </div>

        <div class="separateurDroite"></div>

        <h1 class="titresAccueil">Nos services</h1>
        <section class="listeServices">
            <article class="carteService">
                <img src="img/Accueil/locationstudio.png" alt="Location de salle" class="imageService">
                <h2 class="titreService">Location de salle</h2>
                <p class="texteService">Une salle équipée pour concerts, spectacles et événements culturels.</p>
            </article>
            <article class="carteService">
                <img src="img/Accueil/accompagnement.png" alt="Bar & convivialité" class="imageService">
                <h2 class="titreService">Bar & convivialité</h2>
                <p class="texteService">Un espace bar chaleureux pour profiter avant et après les concerts.</p>
            </article>
            <article class="carteService">
                <img src="img/Accueil/mix.png" alt="Accompagnement artistes" class="imageService">
                <h2 class="titreService">Accompagnement artistes</h2>
                <p class="texteService">Résidences, répétitions et soutien à la création musicale.</p>
            </article>
        </section>
        <div class="boutonCentre">
            <a href="services.php" class="boutonAccueil">Plus d'informations</a>
        </div>

        <div class="separateurGauche"></div>

        <h1 class="titresAccueil">Galerie</h1>
        <section class="galerie">
            <img src="img/Accueil/galerie1.png" alt="Galerie 1">
            <img src="img/Accueil/galerie2.png" alt="Galerie 2">
            <img src="img/Accueil/galerie3.png" alt="Galerie 3">
            <img src="img/Accueil/galerie4.png" alt="Galerie 4">
            <img src="img/Accueil/galerie5.png" alt="Galerie 5">
            <img src="img/Accueil/galerie6.png" alt="Galerie 6">
            <img src="img/Accueil/galerie7.png" alt="Galerie 7">
            <img src="img/Accueil/galerie8.png" alt="Galerie 8">
        </section>

        <div class="separateurDroite"></div>

        <h1 class="titresAccueil">Nos partenaires</h1>
        <section class="partenaires">
            <img src="img/Accueil/partenaire1.png" alt="partenaire1">
            <img src="img/Accueil/partenaire2.png" alt="partenaire2">
            <img src="img/Accueil/partenaire3.png" alt="partenaire3">
            <img src="img/Accueil/partenaire4.png" alt="partenaire4">
            <img src="img/Accueil/partenaire5.png" alt="partenaire5">
        </section>

    </main>

    <footer>
        <div class="footer-container">
            <div class="logo-container">
                <a href="index.php">
                    <img src="img/logo.png" alt="Logo La Tannerie">
                </a>
            </div>
            <div class="footer-menu">
                <ul>
                    <li><a href="programmation.php">Programmation</a></li>
                    <li><a href="tannerie.php">La Tannerie</a></li>
                    <li><a href="services.php">Nos services</a></li>
                    <li><a href="nousTrouver.php">Nous trouver</a></li>
                </ul>
            </div>
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
                <a href="https://www.tiktok.com/@latannerie" aria-label="Tiktok">
                    <img src="img/icon/tiktok-icon.png" alt="Tiktok">
                </a>
                <a href="https://www.instagram.com/latannerie01/" aria-label="Instagram">
                    <img src="img/icon/instagram-icon.png" alt="Instagram">
                </a>
            </div>
        </div>
        <div class="droit-d-auteurs">
            <p>© 2026 La Tannerie - Tous droits réservés</p>
        </div>
    </footer>
</body>
</html>