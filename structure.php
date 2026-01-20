<?php
include 'php/config.php';
include 'php/poo/database.php';
include 'php/poo/membres.php';
session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/favicon.jpg">    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&family=Trade+Winds&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="css/styles.css">
    <title>La structure</title>
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
    <main class="structure">

 <section class="section-bannière">
      <h1 class="titreStructure">L’association</h1>
        <img src="img/structure/benevoles.webp" alt="bannière">
    </section>

    <!-- partie sur l'association -->
    <section class="section">
      <h1 class="titreStructure">L’association</h1>
      <p class="texteStructure">
        Inaugurée en 2001, La Tannerie est la première et la seule SMAC
        (Scène de Musiques Actuelles) du département de l’Ain.
        Chaque saison (septembre à juin), près de 150 concerts,
        des résidences d’artistes, des spectacles jeune public
        et des actions culturelles sont proposés.
      </p>
    </section>

    <!-- partie sur les bénévoles -->
    <section class="section">
      <h1 class="titreStructure">Les bénévoles</h1>

      <p class="texteStructure">
        Être bénévole pour La Truffe et les Oreilles, c’est participer
        activement à la vie des concerts : accueil, bar, backstage,
        technique, décoration, photographie ou information du public.
      </p>

      <p class="texteStructure">
        Les bénévoles peuvent également s’engager au sein du
        Conseil d’Administration de l’association.
      </p>

      <p class="texteStructure">
        <strong>Membres du CA 23/24 :</strong>
        <?php
        $db = Database::getInstance(DB_HOST, DB_NAME, DB_USER, DB_PASS, DB_CHARSET);
        $connection = $db->getConnection();
        $ca_Membres = $db->query("SELECT role, nom_membre, prenom_membre FROM membres WHERE type = 'CA' ORDER BY role IS NULL, role, nom_membre;");
        foreach ($ca_Membres as $ca_Membre) {
            echo $ca_Membre['prenom_membre'] . " " . $ca_Membre['nom_membre'] . " (" . $ca_Membre['role'] . ") / ";
        }
        ?>
      </p>
    </section>

    <div class="separateurDroite"></div>


    <!-- partie salariés -->
    <section class="section centre">
        <h1 class="titreStructure">Les salariés</h1>   
        
        <div class="salariés">

            
<?php       
            $db = Database::getInstance(DB_HOST, DB_NAME, DB_USER, DB_PASS, DB_CHARSET);
            $connection = $db->getConnection();
            $salaries = $db->query("SELECT * FROM membres WHERE type = 'Salarie' ORDER BY role IS NULL, role, nom_membre;");
            foreach ($salaries as $salarie) :
                ?><div class="personne">
                <img src="<?php echo $salarie['image_membre'] ?>" alt="<?php echo $salarie['prenom_membre'] ?>">
                <p><?php echo $salarie['prenom_membre'] . ' ' . $salarie['nom_membre'] ?></p>
                <p><?php echo $salarie['role'] ?></p>
                <p><strong><?php echo $salarie['mail'] ?></strong></p>
                <p><strong><?php echo $salarie['numero'] ?></strong></p>
            </div>
            <?php
            endforeach;
            ?>
        </div>
    </section>

    <div class="separateurGauche"></div>


    <!-- règlement -->
    <section class="section">
      <h1 class="titreStructure">Le règlement</h1>
      <p>
        L’association La Truffe et les Oreilles fonctionne grâce
        à l’implication de ses bénévoles, salariés et membres.
        L’adhésion annuelle est fixée à 15€ par saison.
      </p>
      <p>
        Contact bénévoles :
        <a href="mailto:benevoles@la-tannerie.com">
          benevoles@la-tannerie.com
        </a>
      </p>
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