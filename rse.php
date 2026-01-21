<?php session_start(); ?>

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
    <link rel="stylesheet" href="css/styles.css">
    <title>RSE - La Tannerie</title>
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
    <main>

        <section class="actions">
            <h2 class="titre">Actions déjà en place</h2>

            <div class="liste-accordeons">

                <details>
                    <summary>
                        Gourdes pour les artistes
                        <span class="fleche-accordeon">▼</span>
                    </summary>
                    <div class="Description-action">
                        <p>Pour éviter les bouteilles en plastique et le gaspillage d'eau, nous fournissons des gourdes
                            aux artistes accueillis, complétées par des fontaines à eau en loges.</p>
                        <img src="img/laTannerie/rse/Gourde-artiste.png" alt="Gourde pour les artistes">
                    </div>
                </details>

                <details>
                    <summary>
                        Recyclage mégots avec TchaoMégot
                        <span class="fleche-accordeon">▼</span>
                    </summary>
                    <div class="Description-action">
                        <p>En partenariat avec TchaoMégot, nous collectons les mégots sur notre terrasse pour qu'ils
                            soient recyclés en isolant thermique sans utilisation d'eau ni de produits chimiques.</p>
                        <img src="img/laTannerie/rse/Gestion-des-megots.png"
                            alt="Collecte et recyclage des mégots">
                    </div>
                </details>

                <details>
                    <summary>
                        Papier toilette écologique Popee
                        <span class="fleche-accordeon">▼</span>
                    </summary>
                    <div class="Description-action">
                        <p>Nous avons choisi Popee pour nos sanitaires : un papier toilette français, recyclé et sans
                            produits toxiques, pour un impact environnemental réduit.</p>
                        <img src="img/laTannerie/rse/papierToilette.png" alt="Papier toilette Popee">
                    </div>
                </details>

                <details>
                    <summary>
                        Tri sélectif
                        <span class="fleche-accordeon">▼</span>
                    </summary>
                    <div class="Description-action">
                        <p>Nous avons mis en place des bacs de tri colorés pour séparer le papier, le plastique et le
                            verre de manière efficace dans tous nos espaces.</p>
                    </div>
                </details>

                <details>
                    <summary>
                        Éclairage 100% LED
                        <span class="fleche-accordeon">▼</span>
                    </summary>
                    <div class="Description-action">
                        <p>L'ensemble du bâtiment est équipé d'ampoules LED basse consommation, incluant désormais la
                            totalité de notre parc d'éclairage scénique pour réduire notre empreinte énergétique.</p>
                    </div>
                </details>

                <details>
                    <summary>
                        Énergie renouvelable et locale
                        <span class="fleche-accordeon">▼</span>
                    </summary>
                    <div class="Description-action">
                        <p>La Tannerie soutient la production d'énergie de proximité en ayant choisi un fournisseur
                            d'électricité 100% renouvelable et local.</p>
                    </div>
                </details>

                <details>
                    <summary>
                        Réduction des impressions
                        <span class="fleche-accordeon">▼</span>
                    </summary>
                    <div class="Description-action">
                        <p>Nous limitons systématiquement l'usage du papier en dématérialisant nos processus
                            administratifs et en optimisant nos besoins en communication print.</p>
                    </div>
                </details>

                <details>
                    <summary>
                        Boissons artisanales et locales
                        <span class="fleche-accordeon">▼</span>
                    </summary>
                    <div class="contenu-action">
                        <p>Notre bar propose une sélection de bières et de jus de fruits artisanaux, produits localement
                            pour favoriser les circuits courts.</p>
                    </div>
                </details>

            </div>
        </section>

        <section class="explicationRSE">
            <div class="conteneur">
                <h2 class="titre">La RSE, qu’est ce que c’est ?</h2>
                <img src="img/laTannerie/rse/TannerieRSE.png" alt="RSE Tannerie">
                <p>La responsabilité sociétale des entreprises (RSE) est l'intégration volontaire des préoccupations
                    sociales et environnementales à nos activités. Pour La Tannerie, il s'agit de chercher un impact
                    positif sur la société tout en restant économiquement viable.</p>
            </div>
        </section>

        <section class="double">
            <div class="texte">
                <h2>La norme ISO 20121</h2>
                <p>Cette norme internationale intègre le développement durable dans la gestion d'événements. Elle nous
                    permet d'identifier les enjeux clés (écologie, économie, social) et d'appliquer une amélioration
                    continue avec nos partenaires, fournisseurs et publics.</p>
            </div>
            <div class="image">
                <img src="img/laTannerie/rse/ISO-20121.png" alt="Norme ISO 20121">
            </div>
        </section>

        <div class="grille-rse-infos">
            <section class="carte-rse">
                <div class="contenu-rse">
                    <h2>Droits Humains et Travail</h2>
                    <p>Nous luttons contre les discriminations (campagne "Ici c’est cool") et favorisons l'accessibilité
                        tarifaire. En interne, nous protégeons la santé de nos collaborateurs et promouvons la diversité
                        des chances.</p>
                </div>
            </section>

            <section class="carte-rse">
                <div class="contenu-rse">
                    <h2>L'Environnement</h2>
                    <p>Nous tendons vers des pratiques durables : éclairage LED complet, fournisseur d'énergie 100%
                        renouvelable, fontaines à eau pour les artistes et tri sélectif rigoureux des déchets et mégots.
                </div>
            </section>
        </div>

        <section class="PourquoiRSE">
            <div class="conteneurrse">
                <h2 class="titre">Pourquoi s'y intéresser ?</h2>
                <div class="grille-valeurs">
                    <p><strong>Nos Valeurs :</strong> Garantir l'accès à la culture pour tous et un fonctionnement
                        collectif.</p>
                    <p><strong>Urgence Écologique :</strong> Promouvoir la solidarité face aux logiques de
                        concurrence.
                    </p>
                    <p><strong>Exemplarité :</strong> Répondre aux nouveaux critères de financements publics de plus
                        en
                        plus liés à la transition écologique.</p>
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
        <div class="copyright">
            <p>© 2026 La Tannerie - Tous droits réservés - <a class="mentions-legales" href="mentionsLegales.php">Mentions légales</a></p>
        </div>
    </footer>
</body>

</html>