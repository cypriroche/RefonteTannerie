<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mentions légales</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Trade+Winds&display=swap" rel="stylesheet">
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
    <main class="mentions-legales">
        <h1>Mentions légales</h1>
        <section>
            <h2>Éditeur du site</h2>
            <p>Nom du site : La Tannerie<br>
            Responsable éditorial : <strong>Cyprien ROCHEBLOINE; Mathilde CORNU; Hélène CAUX; Thibaud LAURENCON </strong><br>
            Adresse : <strong>43000, Le Puy-en-Velay</strong><br>
            Email : <a href="mailto:contact@latannerie.example">contact@latannerie.example</a></p>
        </section>

        <section>
            <h2>Directeur de la publication</h2>
            <p><strong>[Nom du directeur de la publication]</strong></p>
        </section>

        <section>
            <h2>Hébergement</h2>
            <p>Hébergeur : <strong>[Nom de l'hébergeur]</strong><br>
            Adresse de l'hébergeur : <strong>[Adresse de l'hébergeur]</strong><br>
            Téléphone hébergeur : <strong>[Téléphone]</strong></p>
        </section>

        <section>
            <h2>Propriété intellectuelle</h2>
            <p>Les contenus (textes, images, graphismes, logos, vidéos, etc.) présents sur ce site sont protégés par le droit de la propriété intellectuelle. Toute reproduction, représentation, modification, publication ou adaptation, sous quelque forme que ce soit, est interdite sans l'autorisation écrite préalable du titulaire des droits.</p>
        </section>

        <section>
            <h2>Données personnelles</h2>
            <p>Conformément au Règlement général sur la protection des données (RGPD), vous disposez d'un droit d'accès, de rectification, d'effacement, de limitation du traitement et de portabilité des données vous concernant, ainsi que d'un droit d'opposition. Pour exercer ces droits, contactez-nous à l'adresse email ci-dessus.</p>
            <p>Les données collectées sont utilisées uniquement pour les finalités indiquées lors de la collecte et conservées le temps nécessaire. Pour plus d'informations, consultez notre politique de confidentialité.</p>
        </section>

        <section>
            <h2>Cookies</h2>
            <p>Le site utilise des cookies pour améliorer l'expérience utilisateur. Vous pouvez configurer et refuser les cookies via les paramètres de votre navigateur. Le refus peut altérer certaines fonctionnalités du site.</p>
        </section>

        <section>
            <h2>Responsabilité</h2>
            <p>Le site s'efforce d'assurer l'exactitude des informations publiées. Toutefois, la responsabilité de l'éditeur ne peut être engagée en cas d'erreurs, d'omissions ou d'indisponibilité des informations.</p>
        </section>

        <section>
            <h2>Contact</h2>
            <p>Pour toute question relative aux mentions légales, vous pouvez nous contacter à : <a href="mailto:contact@latannerie.example">contact@latannerie.example</a></p>
        </section>

        <footer>
            <p>Dernière mise à jour : <strong>21 janvier 2026</strong></p>
        </footer>
    </main>
</body>
</html>