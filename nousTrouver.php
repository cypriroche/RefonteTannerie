<?php session_start(); ?>

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
    <title>Nous trouver</title>
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
  <main class="containerTrouver">
    <!-- contact -->

    <section class="contact">
      <section class="section-bannière">
        <h1>Nous trouver</h1>
          <img src="img/nousTrouver/banniere.webp" alt="bannière">
      </section>
      <h1 class="titresAccueil">Contact</h1>
      <p class="contact-symbole">
        <img src="img/icon/telephone.webp" alt="Téléphone">
        04 74 21 04 55
      </p>

      <p class="contact-symbole">
        <img src="img/icon/email.png" alt="Email">
        <a class="mail" class="mail" href="mailto:repetitions@la-tannerie.com">
          repetitions@la-tannerie.com
        </a>
      </p>

      <p class="contact-symbole">
        <img src="img/icon/localisation.png" alt="Localisation">
        123 Place de la Vinaigrerie, 01000 Bourg en Bresse
      </p>

    <!-- carte-->
      <div class="contact-map">
        <iframe
          class="map"
          src="https://www.google.com/maps?q=123%20Place%20de%20la%20Vinaigrerie%2001000%20Bourg-en-Bresse&output=embed"
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </section>

    <div class="separateur-droite"></div>

    <!-- section points de vente -->
    <section class="points-vente">
      <h1 class="titresAccueil">Points de vente</h1>
      <p>
        Au VSK sur place (13 rue Victor & Hélène Basch, 01000 Bourg-en-Bresse) ou sur notre billetterie en ligne (+0,50€) SoTicket<br>
        Bourg-en-Bresse Destinations : Office de tourisme (+1.10€)<br>
        Réseau France billet (+2.30€) : FNAC, Carrefour, Magasins U, Intermarché<br>
        Ticketmaster (à partir de 2€)<br>
        Digitick / See Tickets (+1,80 € par billet + 1,45 € par transaction)
      </p>
    </section>

    <div class="separateur-gauche"></div>

    <section class="contact-membres">
      <h1 class="titresAccueil">Contact membres</h1>
      <ul>
        <li>
          <strong>Directeur :</strong> 
          Gilles GARRIGOS – 
          <a class="mail" href="mailto:direction@la-tannerie.com">direction@la-tannerie.com</a>
        </li>
        <li>
          <strong>Programmation :</strong>
          Ann HUITON – 
           <a class="mail" href="mailto:progtannerie@la-tannerie.com">progtannerie@la-tannerie.com</a>
          </li>
        <li>
          <strong>Directeur technique :</strong> 
          PEYOT – 
          <a class="mail" href="mailto:regie@la-tannerie.com">regie@la-tannerie.com</a>
        </li>
        <li>
          <strong>Action culturelle :</strong> 
          Julie RUDELIN – 
          <a class="mail" href="mailto:actionculturelle@la-tannerie.com">actionculturelle@la-tannerie.com</a>
        </li>
        <li>
          <strong>Communication :</strong> 
          Alexandra Leroi – 
          <a class="mail" href="mailto:communication@la-tannerie.com">communication@la-tannerie.com</a>
        </li>
        <li>
          <strong>Administration :</strong> Virginie MICHEL – 
          <a class="mail" href="mailto:admin@la-tannerie.com">admin@la-tannerie.com</a>
        </li>
        <li>
          <strong>Accueil / Billetterie :</strong> Elodie PLASSARD – 04 74 21 04 55 – 
          <a class="mail" href="mailto:accueil@la-tannerie.com">accueil@la-tannerie.com</a>
        </li>
        <li>
          <strong>Bénévoles : </strong>
          <a class="mail" href="mailto:benevoles@la-tannerie.com">benevoles@la-tannerie.com</a>
        </li>
        <li>
          <strong>Développement durable : </strong>
          <a class="mail" href="mailto:developpement.durable@la-tannerie.com">developpement.durable@la-tannerie.com</a>
        </li>
        <li>
          <strong>Café de la Tannerie :</strong> Maëlle – 
          <a class="mail" href="mailto:barlatannerie@la-tannerie.com">barlatannerie@la-tannerie.com</a>
        </li>
        <li>
          <strong>Programmation Café :</strong> 
          <a class="mail" href="mailto:cafeculturel@la-tannerie.com">cafeculturel@la-tannerie.com</a>
        </li>
        <li>
          <strong>Locaux de répétitions :</strong> Jordane GAILLARD / Damien LATRACHE – 04 74 21 91 48 – 
          <a class="mail" href="mailto:repetitions@la-tannerie.com">repetitions@la-tannerie.com</a>
        </li>
        <li>
          <strong>Gaëtan Robin (Régie technique) :</strong> 
          <a class="mail" href="mailto:technique@la-tannerie.com">technique@la-tannerie.com</a>
        </li>
      </ul>
    </section>

  </main>

    <footer>
        
        <div class="footer-container">
            <div class="logo-container">
            <a class="mail" href="index.php">
                <img src="img/logo-tannerie.png" alt="Logo La tannerie Bourg en Bresse">
            </a>
            </div>

            <!-- menu footer -->
            <div class="footer-menu">
                <ul>
                    <li><a class="mail" href="programmation.php">Programmation</a></li>
                    <li><a class="mail" href="tannerie.php">La Tannerie</a></li>
                    <li><a class="mail" href="services.php">Nos services</a></li>
                    <li><a class="mail" href="nousTrouver.php">Nous trouver</a></li>
                </ul>
            </div>
            
           <!-- icon résaux sociaux -->
            <div class="icones-reseaux">
                <a class="mail" href="https://www.facebook.com/latannerie" aria-label="Facebook">
                    <img src="img/icon/facebook-icon.png" alt="Facebook">
                </a>
                <a class="mail" href="https://x.com/LaTannerie" aria-label="X">
                    <img src="img/icon/x-icon.png" alt="X">
                </a>
                <a class="mail" href="https://www.youtube.com/channel/UCxKtBCxXr0KrnHim09zdMuA" aria-label="Youtube">
                    <img src="img/icon/youtube-icon.png" alt="Youtube">
                </a>
                <a class="mail" href="https://www.facebook.com/latannerie" aria-label="Tiktok">
                    <img src="img/icon/tiktok-icon.png" alt="Tiktok">
                </a>
                <a class="mail" href="https://www.instagram.com/latannerie01/" aria-label="Instagram">
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