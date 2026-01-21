<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/favicon.jpg">    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&family=Trade+Winds&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/ActionsCulturelles.css">
    <title>Actions culturelles</title>
</head>
<body>
    <header>
        <a href="index.php" class="logo-header">
            <img src="img/logo-tannerie.png" alt="Logo La Tannerie" class="logo">
        </a>
        <nav id="menuPrincipal">
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
                <?php if (!empty($_SESSION['is_admin'])) : ?>
                    <li class="menu-deroulant admin">
                        <img src="img/icon/user.png" alt="Utilisateur">
                        <ul class="menu-deroulant-menu">
                            <li><a href="php/admin/admin.php">Admin</a></li>
                            <li><a href="php/admin/logout.php">Se déconnecter</a></li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li class="nav-user"><a href="php/admin/connexion.php" aria-label="Connexion"><img src="img/icon/user.png" alt="Connexion"></a></li>
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
    <main class="container">

    <main class="conteneurActionsCulturelles">
        <section class="bloc-presentation">
            <h2 class="titre-principal">Actions culturelles</h2>
            <p class="introduction">
                À La Tannerie, nous croyons que la musique est un langage universel. Notre mission est de briser les
                barrières et de porter les notes là où on ne les attend pas. À travers nos projets de médiation,
                nous créons des ponts entre les artistes et les citoyens.
            </p>

            <div class="grille-actions">
                <div class="carte-simple">
                    <h3>Immersion</h3>
                    <p>Visites guidées, accès aux répétitions, résidences d'artistes et balances sonores.</p>
                </div>
                <div class="carte-simple">
                    <h3>Pratique</h3>
                    <p>Participez à des ateliers d’initiation ou de création. Ici, on fabrique aussi la musique.</p>
                </div>
                <div class="carte-simple">
                    <h3>Sur-mesure</h3>
                    <p>Chaque projet est unique. Nous adaptons le rythme et le support selon vos besoins.</p>
                </div>
            </div>
        </section>
    </main>

    <div class="separateurGauche"></div>

    <div class="conteneurActionsCulturelles">
        <section class="focus-projets">
            <h3 class="titre-principal">Nos projets phares en cours :</h3>
            <div class="liste-accordeons">
                <details>
                    <summary>Concerts au Centre Pénitentiaire <span class="fleche">▼</span></summary>
                    <div class="contenu-texte">
                        <p>Nous intervenons au Centre Pénitentiaire de Bourg-en-Bresse pour offrir des moments
                            d'évasion.</p>
                    </div>
                </details>
                <details>
                    <summary>Open-Mic & Ateliers d'écriture <span class="fleche">▼</span></summary>
                    <div class="contenu-texte">
                        <p>La Tannerie devient un atelier d'écriture. Venez affiner vos textes avec nos intervenants.
                        </p>
                    </div>
                </details>
                <details>
                    <summary>Campagn’Arts : La culture en milieu rural <span class="fleche">▼</span></summary>
                    <div class="contenu-texte">
                        <p>La musique n'appartient pas qu'à la ville ! Interventions artistiques au plus près des
                            habitants.</p>
                    </div>
                </details>
            </div>
        </section>
    </div>

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
        <div class="copyright">
            <p>© 2026 La Tannerie - Tous droits réservés - <a class="mentions-legales" href="mentionsLegales.php">Mentions légales</a></p>
        </div>
    </footer>
</body>
</html>