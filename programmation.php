<?php
include 'php/config.php';
include 'php/poo/database.php';
include 'php/poo/evenement.php';
session_start();

 // Connexion à la base de données 
        $db = Database::getInstance(DB_HOST, DB_NAME, DB_USER, DB_PASS, DB_CHARSET);
        // appel de la function de connexion
        $connection = $db->getConnection();
        
        // requête pour récupérer les événements grâce à la function query dans database.php
        $carteEvenements = $db->query("SELECT * FROM evenement");

?>
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

    <title>Programmation</title>
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

    <main>

<form class="filtre" method="get" action="programmation.php" aria-label="Filtre et recherche événements">
    <label for="style">Style</label>
    <select id="style" name="style">
      <option value="">Tous</option>
        <?php foreach ($carteEvenements as $carteEvenement) {
                // la valeur de l'option est l'id de l'événement et le texte affiché est le nom de l'artiste
                echo '<option value="'.$carteEvenement['style'].'">'.$carteEvenement['style'].'</option>';
            }    ?>
    </select>

    <label for="artiste">Artiste</label>
    <input type="search" id="artiste" name="artiste" placeholder="Recherche par artiste" />

    <div class="filter-actions">
      <!-- <button type="submit" class="btn">Filtrer</button> -->
      <a href="programmation.php" class="btn btn-reset" role="button">Réinitialiser</a>
    </div>
</form>
    
        <section class="listeCartes">

        <?php
       
        // index pour alterner les cartes
        $index = 0;
        foreach ($carteEvenements as $carteEvenement) :
            // Savoir si la carte est inversé
               $isInverse = ($index % 2 === 1);?>

            <!--  On rajoute la classe "inverse" quand la carte doit être inversée -->
            <article class="carteEvenement<?= $isInverse ? ' inverse' : '' ?>">
                <div class="carteGauche">
                    <div class="conteneurVisuel">
                        <img src="img/logo.png" alt="Logo" class="logoCarte">
                        <!-- Affichage dynamique des éléments de la carte -->
                        <img src="<?php echo $carteEvenement['visuel']; ?>" alt="<?php echo $carteEvenement['artiste']; ?>" class="visuelArtiste">
                        <h2 class="nomArtiste"><?php echo $carteEvenement['artiste']; ?></h2>
                    </div>
                    <ul class="infosCles">
                        <li class="date"><?php echo $carteEvenement['date_evenement']; ?></li>
                        <li class="heure"><?php echo $carteEvenement['heure_evenement']; ?></li>
                        <li class="genre"><?php echo $carteEvenement['style']; ?></li>
                    </ul>
                </div>
                <div class="carteDroite">
                    <p class="ouverture">Ouverture des portes à <?php echo $carteEvenement['heure_ouverture']; ?></p>
                    <div class="description">
                        <p>
                            <?php echo $carteEvenement['informations']; ?>
                        </p>
                        <p class="signature">
                            <?php echo $carteEvenement['signature']; ?>
                        </p>
                    </div>
                    <div class="prix"><?php echo $carteEvenement['tarif_plein']. " €"; ?></div>
                </div>
            </article>
            <?php $index++; ?>
        <?php endforeach; ?>
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


