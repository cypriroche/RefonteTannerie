<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../poo/database.php';
session_start();


// Vérification alternative (admin) — utilise les informations d'admin en base
$affichage = 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = Database::getInstance(DB_HOST, DB_NAME, DB_USER, DB_PASS, DB_CHARSET);
    $conn = $db->getConnection();

    $requete = 'SELECT * FROM admin WHERE mail = :email LIMIT 1';
    $stmt = $conn->prepare($requete);
    $emailPost = $_POST['email'];
    $passwordPost = $_POST['password'];

    $stmt->execute(['email' => $emailPost]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
//     var_dump($passwordPost);
// var_dump($user['mdpAdmin']);
// var_dump(password_verify($passwordPost, $user['mdpAdmin']));
// exit;

    
    
    if ($user && isset($user['mdpAdmin']) && password_verify($passwordPost, $user['mdpAdmin'])) {
        $_SESSION['user_id'] = $user['id_admin'] ?? null;
        $_SESSION['user_email'] = $user['mail'] ?? $emailPost;
        $_SESSION['is_admin'] = (isset($user['droit']) && strtolower($user['droit']) === 'admin');
        $affichage = 1;
    } 
    else {
        $affichage = 0;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion</title>

  <link href="https://fonts.googleapis.com/css2?family=Trade+Winds&family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../css/connexion.css">
  <link rel="stylesheet" href="../../css/styles.css">
</head>

<body>
  <header>
      <a href="../../index.php" class="logo-header">
          <img src="../../img/logo-tannerie.png" alt="Logo La Tannerie" class="logo">
      </a>
      <nav id="menuPrincipal">
                <ul>
                <li><a href="../../programmation.php">Programmation</a></li>
                <li class="menu-deroulant">
                  <a href="../../tannerie.php">La Tannerie <span class="menu-deroulant-arrow">▼</span></a>
                  <ul class="menu-deroulant-menu">
                      <li><a href="../../structure.php">La structure</a></li>
                      <li><a href="../../rse.php">RSE</a></li>
                      <li><a href="../../actionsCulturelles.php">Actions culturelles</a></li>
                  </ul>
              </li>
                <li><a href="../../services.php">Nos services</a></li>
                <li><a href="../../nousTrouver.php">Nous trouver</a></li>
                <?php if (!empty($_SESSION['is_admin'])) : ?>
                    <li class="menu-deroulant admin">
                        <img src="../../img/icon/user.png" alt="Utilisateur">
                        <ul class="menu-deroulant-menu">
                            <li><a href="admin.html">Admin</a></li>
                            <li><a href="logout.php">Se déconnecter</a></li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li class="nav-user"><a href="connexion.php" aria-label="Connexion"><img src="../../img/icon/user.png" alt="Connexion"></a></li>
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
  <div class="page">

    <h1>Connexion</h1>

    <div class="seconnecter">

      <div class="connexion">
        <h2>Se connecter</h2>

                <?php if (!empty($error)) : ?>
                    <p style="color: #c00;"><?php echo htmlspecialchars($error); ?></p>
                <?php endif; ?>

                <form method="post" action="">
                    <p>Email</p>
                    <input type="email" name="email" required>

                    <p>Mot de passe</p>
                    <input type="password" name="password" required>

                    <button type="submit">Se connecter</button>
                </form>
                 <?php
            if ($affichage == 1) {
                echo "Connexion réussie !";
            }else {
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    echo "Échec de la connexion. Veuillez vérifier vos informations.";
                }
            }
            ?>
      </div>

    </div>

  </div>
  </main>
  <footer>
        
        <div class="footer-container">
            <div class="logo-container">
            <a href="../../index.php">
                <img src="../../img/logo-tannerie.png" alt="Logo La tannerie Bourg en Bresse">
            </a>
            </div>

            <!-- menu footer -->
            <div class="footer-menu">
                <ul>
                    <li><a href="../../programmation.php">Programmation</a></li>
                    <li><a href="../../tannerie.php">La Tannerie</a></li>
                    <li><a href="../../services.php">Nos services</a></li>
                    <li><a href="../../nousTrouver.php">Nous trouver</a></li>
                </ul>
            </div>
            
           <!-- icon résaux sociaux -->
            <div class="icones-reseaux">
                <a href="https://www.facebook.com/latannerie" aria-label="Facebook">
                    <img src="../../img/icon/facebook-icon.png" alt="Facebook">
                </a>
                <a href="https://x.com/LaTannerie" aria-label="X">
                    <img src="../../img/icon/x-icon.png" alt="X">
                </a>
                <a href="https://www.youtube.com/channel/UCxKtBCxXr0KrnHim09zdMuA" aria-label="Youtube">
                    <img src="../../img/icon/youtube-icon.png" alt="Youtube">
                </a>
                <a href="https://www.facebook.com/latannerie" aria-label="Tiktok">
                    <img src="../../img/icon/tiktok-icon.png" alt="Tiktok">
                </a>
                <a href="https://www.instagram.com/latannerie01/" aria-label="Instagram">
                    <img src="../../img/icon/instagram-icon.png" alt="Instagram">
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
