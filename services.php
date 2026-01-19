<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/favicon.jpg">    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&family=Trade+Winds&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="css/services.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Nos services</title>
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

  <!-- introduction du haut de page -->
  <section class="section-bannière">
    <h1>Nos services</h1>
      <img src="img/nosServices/banniere.webp" alt="bannière">
  </section>

    <p>
      Des espaces, des accompagnements et des ressources pour soutenir les pratiques musicales,
      quel que soit votre niveau ou votre style.
    </p>

  <!--locaux de répétitionss -->
  <section class="service">
    <h1 class="titresAccueil">Les locaux de répétitions</h1>


    <p><strong>Réservation uniquement par mail et 24h à l’avance :</strong>
      <a href="mailto:repetitions@la-tannerie.com">repetitions@la-tannerie.com</a>.
    </p>

    <p>
      Des espaces de travail pour les musicien·ne·s, quel que soit leur niveau et leur style.<br>
      3 studios de répétitions (de 19 à 30 m²) équipés.
    </p>

    <p>
      Ouverture du lundi au vendredi de 17h à minuit.<br>
      Fermeture le samedi et le dimanche.
    </p>

    <p>
      Le bureau MAO ne sera pas accessible durant la période des travaux.
    </p>

    <h2>Tarifs</h2>
    <ul>
      <li>Local vide – 1h : 6€ / 20h : 90€</li>
      <li>Local + 1 équipement : 7€/h (110€ / 20h)</li>
      <li>Local + 2 équipements : 8€/h (130€ / 20h)</li>
      <li>Local + 3 équipements : 9€/h (150€ / 20h)</li>
      <li>Local + 4 équipements : 10€/h (170€ / 20h)</li>
    </ul>

    <p>
      Équipements disponibles : batterie, amplis basse et guitare.<br>
      Les studios sont équipés de consoles Zoom LiveTrack L20 permettant l’enregistrement en autonomie.
    </p>

    <p>
      Accès par le parking côté skatepark, rue Jean-Marie Verne.
    </p>

    <p>
      Plus de renseignements auprès de Jojo et Mosa :
      <a href="mailto:repetitions@la-tannerie.com">repetitions@la-tannerie.com</a>.
    </p>
  </section>

    <div class="separateur-droite"></div>

  <!-- capsules mao -->
  <section class="service">
    <h1 class="titresAccueil">Les capsules MAO</h1>
    
    <p>
      Accompagnement à la pratique du studio (Musique Assistée par Ordinateur). 
       Sessions individuelles d’une heure avec un technicien.
    </p>

    <h3>Niveau débutant : 10€/h</h3>
    <p>
      Découverte des logiciels (Logic Pro, Ableton), initiation au matériel,
      prise de son, premiers effets (EQ, compression…).
    </p>

    <h3>Niveau confirmé : 15€/h</h3>
    <p>
      Travail sur une composition personnelle, techniques avancées,
      préparation du mix pour le live.
    </p>

    <p>
      <strong>Réservation obligatoire :</strong> au moins 2 semaines à l’avance par mail :
      <a href="mailto:repetitions@la-tannerie.com">repetitions@la-tannerie.com</a>
    </p>
  </section>

   <div class="separateur-gauche"></div>


  <!--accompagnement -->
  <section class="service">
    <h1 class="titresAccueil">Accompagnement</h1>
    <p>
      Sessions ponctuelles sur demande : diagnostic, accompagnement artistique,
      en local de répétition ou sur scène.
    </p>
    <p>
      Pour plus d’informations :
      <a href="mailto:repetitions@la-tannerie.com">repetitions@la-tannerie.com</a>
    </p>
  </section>

    <div class="separateur-droite"></div>

  <!-- les trufferies -->
  <section class="service">
    <h1 class="titresAccueil">Trufferies 2025</h1>

    <p>
      Découvrez les portraits-interviews des lauréat·es des Trufferies 2025 :
      Daymen (prix du jury – rap fusion) et Neptune (prix du public – folk urbaine).
    </p>

    <div class="videos">
      <iframe src="https://www.youtube.com/embed/L77a1VF7R4E" allowfullscreen></iframe>
      <iframe src="https://www.youtube.com/embed/3OxgaU6lfRw" allowfullscreen></iframe>
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

