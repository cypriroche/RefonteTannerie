  <?php
    include 'php/config.php';
    include 'php/poo/database.php';
    include 'php/poo/evenement.php';
    session_start();


    // Connexion à la base de données
    $db = Database::getInstance(DB_HOST, DB_NAME, DB_USER, DB_PASS, DB_CHARSET);
    $connection = $db->getConnection();


    if (isset($_GET['id']) && !empty($_GET['id'])) {
       
        $id = intval($_GET['id']);


        $sql = "SELECT * FROM evenement WHERE id_evenement = :id";
       
        $statement = $connection->prepare($sql);


        $statement->execute([':id' => $id]);


        $carteEvenement = $statement->fetch(PDO::FETCH_ASSOC);
    }
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
        <link rel="stylesheet" href="css/styleprog.css">
        <link rel="stylesheet" href="css/styleadmin.css">

        <title>Événement</title>
    </head>
    <body>
        <main>
        <a href="programmation.php" class="boutonRetour">×</a>

        <article class="carteEvenement">
            <div class="carteGauche">
                <div class="conteneurVisuel">
                    <img src="images/logo.png" alt="Logo" class="logo">
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
                <div class="enteteDate">
                    <span class="barres">////////////</span>
                    <?php echo $carteEvenement['date_entiere']; ?>
                </div>


                <p class="ouverture">Ouverture des portes à <?php echo $carteEvenement['heure_ouverture']; ?></p>


                <div class="description">
                            <p>
                                <?php echo $carteEvenement['informations']; ?>
                            </p>
                            <p class="signature">
                                <?php echo $carteEvenement['signature']; ?>
                            </p>
                        </div>


                <div class="blocInfosSup">
                    <div class="infoPmr">Accessibilité : <strong><?php echo $carteEvenement['accessibilite']; ?></strong> </div>
                   
                    <div class="grillePrixDetail">
                        <div class="prix-ligne">Plein tarif : <strong><?php echo $carteEvenement['tarif_plein']; ?> €</strong></div>
                        <div class="prix-ligne">Tarif réduit : <strong><?php echo $carteEvenement['tarif_reduit']; ?> €</strong></div>
                    </div>
                </div>


                <div class="copyright">
                    <p>© 2026 La Tannerie - Tous droits réservés - <a class="mentions-legales" href="mentionsLegales.php">Mentions légales</a></p>
                </div>
            </div>
        </article>
        </main>
    </body>
    </html>
