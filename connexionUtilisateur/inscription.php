<?php
include_once __DIR__ . '/../php/config.php';
include_once __DIR__ . '/../php/poo/database.php';

// $error = '';
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $email = trim($_POST['email']);
//     $password = trim($_POST['password']);

//     if (empty($email) || empty($password)) {
//         $error = 'Tous les champs sont obligatoires.';
//     } else {
//         $db = Database::getInstance(DB_HOST, DB_NAME, DB_USER, DB_PASS, DB_CHARSET);
//         $rows = $db->query('SELECT * FROM admin WHERE email = ? LIMIT 1', [$email]);
//         if (empty($rows)) {
//             $error = 'Email ou mot de passe invalide.';
//         } else {
//             $user = $rows[0];
//             if (!isset($user['mot_de_passe'])) {
//                 $error = 'Impossible de vérifier le mot de passe.';
//             } elseif (!password_verify($password, $user['mot_de_passe'])) {
//                 $error = 'Email ou mot de passe invalide.';
//             } else {
//                 // Connexion réussie
//                 $_SESSION['user_id'] = $user['id'] ?? null;
//                 // $_SESSION['user_nom'] = $user['nom'] ?? '';
//                 $_SESSION['user_email'] = $user['email'] ?? $email;
//                 // detecte rôle admin si présent
//                 if (isset($user['droit']) && strtolower($user['droit']) === 'admin') {
//                     $_SESSION['is_admin'] = true;
//                 } else {
//                     $_SESSION['is_admin'] = false;
//                 }
//                 header('Location: ../index.php');
//                 exit;
//             }
//         }
//     }
// }
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nom = trim(filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING));
  $email = trim(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL));
  $password = trim(filter_input(INPUT_POST, 'password', FILTER_UNSAFE_RAW));

  if (empty($nom) || empty($email) || empty($password)) {
    $error = 'Tous les champs sont obligatoires.';
  } else {
    $db = Database::getInstance(DB_HOST, DB_NAME, DB_USER, DB_PASS, DB_CHARSET);
    // vérifier si l'email existe déjà
    $exists = $db->query('SELECT id FROM utilisateurs WHERE email = ?', [$email]);
    if (!empty($exists)) {
      $error = 'Un compte avec cet email existe déjà.';
    } else {
      $hash = password_hash($password, PASSWORD_DEFAULT);
      // insertion sécurisée
      $db->query('INSERT INTO admin (nom, email, mot_de_passe, created_at) VALUES (?, ?, ?, NOW())', [$nom, $email, $hash]);
      header('Location: connexion.php?registered=1');
      exit;
    }
  }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription</title>

  <link href="https://fonts.googleapis.com/css2?family=Trade+Winds&family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/connexion.css">
  <link rel="stylesheet" href="../css/styles.css">  
</head>

<body>
  <header>
    <a href="../index.php" class="logo-header">
            <img src="../img/logo-tannerie.png" alt="Logo La Tannerie" class="logo">
        </a>
        <nav>
          <ul>
            <li><a href="../programmation.php">Programmation</a></li>
            <li class="menu-deroulant">
                  <a href="../tannerie.php">La Tannerie <span class="menu-deroulant-arrow">▼</span></a>
                  <ul class="menu-deroulant-menu">
                      <li><a href="../structure.php">La structure</a></li>
                      <li><a href="../rse.php">RSE</a></li>
                      <li><a href="../actionsCulturelles.php">Actions culturelles</a></li>
                  </ul>
                </li>
                <li><a href="../services.php">Nos services</a></li>
                <li><a href="../nousTrouver.php">Nous trouver</a></li>
                <li class="nav-user"><a href="connexion.php" aria-label="Connexion"><img src="../img/icon/user.png" alt="Connexion"></a></li>
          </ul>
      </nav>
  </header>
  <main>
  <div class="page">

    <h1>Inscription</h1>

    <div class="seconnecter">

      <div class="inscription">
        <h2>Créer un compte</h2>

        <?php if (!empty($error)) : ?>
          <p style="color: #c00;"><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>

        <form method="post" action="">
          <p>Nom</p>
          <input type="text" name="nom" required>

          <p>Email</p>
          <input type="email" name="email" required>

          <p>Mot de passe</p>
          <input type="password" name="password" required>

          <button type="submit">S’inscrire</button>
        </form>

        <p class="pascompte">
          Déjà un compte ?
          <a href="connexion.php">Se connecter</a>
        </p>
      </div>

    </div>

  </div>
  </main>
  <footer>
        
        <div class="footer-container">
            <div class="logo-container">
            <a href="../index.php">
                <img src="../img/logo-tannerie.png" alt="Logo La tannerie Bourg en Bresse">
            </a>
            </div>

            <!-- menu footer -->
            <div class="footer-menu">
                <ul>
                    <li><a href="../programmation.php">Programmation</a></li>
                    <li><a href="../tannerie.php">La Tannerie</a></li>
                    <li><a href="../services.php">Nos services</a></li>
                    <li><a href="../nousTrouver.php">Nous trouver</a></li>
                </ul>
            </div>
            
           <!-- icon résaux sociaux -->
            <div class="icones-reseaux">
                <a href="https://www.facebook.com/latannerie" aria-label="Facebook">
                    <img src="../img/icon/facebook-icon.png" alt="Facebook">
                </a>
                <a href="https://x.com/LaTannerie" aria-label="X">
                    <img src="../img/icon/x-icon.png" alt="X">
                </a>
                <a href="https://www.youtube.com/channel/UCxKtBCxXr0KrnHim09zdMuA" aria-label="Youtube">
                    <img src="../img/icon/youtube-icon.png" alt="Youtube">
                </a>
                <a href="https://www.facebook.com/latannerie" aria-label="Tiktok">
                    <img src="../img/icon/tiktok-icon.png" alt="Tiktok">
                </a>
                <a href="https://www.instagram.com/latannerie01/" aria-label="Instagram">
                    <img src="../img/icon/instagram-icon.png" alt="Instagram">
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
