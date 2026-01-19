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
    </header>
    <main class="conteneur">

        <section class="bloc-presentation">
            <h2 class="titre-principal">La Culture pour tous, partout</h2>
            <img src="images/Photos site/La Tannerie/Action-culturel---ateliers-d’initiation.png"
                alt="Action culturelle à La Tannerie">

            <p class="introduction">
                À La Tannerie, nous croyons que la musique est un langage universel. Notre mission est de briser les
                barrières
                et de porter les notes là où on ne les attend pas. À travers nos projets de médiation, nous créons des
                ponts
                entre les artistes et les citoyens.
            </p>

            <div class="grille-actions">
                <div class="carte-simple">
                    <h3>🔍 Immersion</h3>
                    <p>Venez découvrir les coulisses : visites guidées, accès aux répétitions, résidences d'artistes et
                        balances sonores.</p>
                </div>
                <div class="carte-simple">
                    <h3>🎸 Pratique</h3>
                    <p>Participez à des ateliers d’initiation ou de création. Ici, on ne fait pas qu'écouter, on
                        fabrique aussi la musique.</p>
                </div>
                <div class="carte-simple">
                    <h3>🤝 Sur-mesure</h3>
                    <p>Chaque projet est unique. Nous adaptons le rythme et le support selon vos besoins et vos envies.
                    </p>
                </div>
            </div>
            <div class="separateurGauche"></div>
            <div class="focus-projets">
                <h3>Nos projets phares en cours :</h3>
                <div class="liste-accordeons">
                    <details>
                        <summary>Concerts au Centre Pénitentiaire <span class="fleche">▼</span></summary>
                        <div class="contenu-texte">
                            <p>Nous intervenons au Centre Pénitentiaire de Bourg-en-Bresse pour offrir des moments
                                d'évasion
                                à travers des concerts et des ateliers de pratique musicale directe.</p>
                        </div>
                    </details>
                    <details>
                        <summary>Open-Mic & Ateliers d'écriture <span class="fleche">▼</span></summary>
                        <div class="contenu-texte">
                            <p>Toutes les semaines, La Tannerie devient un atelier d'écriture. Venez poser sur des prods
                                et affiner vos textes avec nos intervenants passionnés.</p>
                        </div>
                    </details>
                    <details>
                        <summary>Campagn’Arts : La culture en milieu rural <span class="fleche">▼</span></summary>
                        <div class="contenu-texte">
                            <p>La musique n'appartient pas qu'à la ville ! Campagn'Arts propose des interventions
                                artistiques
                                au plus près des habitants des zones rurales.</p>
                        </div>
                    </details>
                </div>
            </div>

            <div class="contact-action">
                <p><strong>Besoin d'en savoir plus ?</strong> Contactez Julie RUDELIN : <a
                        href="mailto:actionculturelle@la-tannerie.com">actionculturelle@la-tannerie.com</a></p>
            </div>
        </section>

        <div class="separateur-droite"></div>

        <section class="bloc-studios">
            <h2 class="titre-principal">Les Locaux de Répétitions</h2>
            <p class="introduction">
                Que vous soyez un groupe de métal, un duo de jazz ou un.e artiste solo, nos 3 studios (19 à 30 m²)
                sont conçus pour vous offrir un confort de travail optimal.
            </p>

            <div class="alerte-travaux">
                <h3>🚧 Info Travaux 2025/2026</h3>
                <p>Les locaux restent ouverts ! Cependant, l'accueil change : rendez-vous côté parking skatepark
                    (rue Jean-Marie Verne).
                    <br>Horaires : Lundi au Vendredi, 17h à minuit. (Fermé le week-end).</br>
                </p>
            </div>

            <div class="grille-tarifs">
                <div class="tableau-prix">
                    <h3>Tarifs à l'heure</h3>
                    <ul>
                        <li><strong>6€</strong> - Local vide</li>
                        <li><strong>7€</strong> - Local + 1 équipement</li>
                        <li><strong>10€</strong> - Local + 4 équipements</li>
                    </ul>
                </div>
                <div class="liste-equipements">
                    <h3>Matériel à disposition</h3>
                    <p>Batterie Yamaha Stage Custom, Amplis basse Markbass, Amplis guitare (Koch, Randall, Orange).
                        Nos consoles Zoom LiveTrack L20 permettent de vous enregistrer en toute autonomie !</p>
                    <a href="mailto:repetitions@la-tannerie.com" class="bouton-plus">Réserver par mail (24h avant)</a>
                </div>
            </div>
        </section>

        <section class="bloc-mao">
            <div class="conteneur-mao">
                <div class="colonne-texte">
                    <h2 class="titre-principal">Les Capsules MAO</h2>
                    <p class="introduction-mao">Découvrez la Musique Assistée par Ordinateur avec un professionnel. Des
                        sessions d'une heure pour maîtriser vos outils.</p>

                    <div class="grille-niveaux">
                        <div class="niveau-item">
                            <h4>🌱 Débutant (10€/h)</h4>
                            <p>Logic Pro, Ableton, prise de son voix et samples.</p>
                        </div>
                        <div class="niveau-item">
                            <h4>🚀 Confirmé (15€/h)</h4>
                            <p>Sidechain, mixage avancé, préparation pour le live.</p>
                        </div>
                    </div>
                </div>

                <div class="colonne-video">
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/tO5n7w8H9Io" frameborder="0"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>

        <section class="bloc-trufferies">
            <h2 class="titre-principal">Trufferies 2025 : Les Lauréats</h2>
            <p class="center">Retour en images sur les talents détectés cette année à La Tannerie.</p>
            <div class="grille-videos-trufferies">
                <div class="carte-video">
                    <iframe src="https://www.youtube.com/embed/3OxgaU6lfRw" allowfullscreen></iframe>
                    <p><strong>Daymen</strong> - Lauréat Prix du Jury (Rap Fusion)</p>
                </div>
                <div class="carte-video">
                    <iframe src="https://www.youtube.com/embed/L77a1VF7R4E" allowfullscreen></iframe>
                    <p><strong>Neptune</strong> - Lauréate Prix du Public (Folk Urbaine)</p>
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