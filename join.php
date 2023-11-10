<?php
session_start();

// Connexion à la base de données
$pdo = new PDO('mysql:host=localhost;dbname=espace_membres', 'root', 'root');

// Récupération des données de la table "covoiturage"
$stmt = $pdo->query("SELECT * FROM `covoiturage` where date >=(select curdate());");
$covoiturages = $stmt->fetchAll(PDO::FETCH_ASSOC);


if(isset($_SESSION['login']) == 1 && isset($_SESSION['mot_passe']) == 1){

  } else{
    header('location: http://localhost:8888/projet_web/users/connexion.php');
  }

?>

<!DOCTYPE html>
<html lang="en">

<body>
    <!DOCTYPE html>
    <html>
    
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>ESME Connect</title>
    
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css?=<?php echo time();?>"/>
    </head>
    
    <body>
      <a id="banner" href="#"></a>
      <!-- Main body -->
    
      <header>
        <a id="nav-top"></a>
    
        <div id="nav-belt">
          <div class="nav-left">
            <div id="nav-logo">
              <a href="./index.php" class="nav-logo-link"></a>
            </div>
          </div>
          <div class="nav-right">
            <div id="nav-holiday">
              <a href="#"></a>
            </div>
          </div>
          <div class="nav-fill">
            <div id="nav-search">
              <form method="post" action="traitement_recherche.php">
                <div class="nav-left">
                  <i class="fa fa-caret-down" aria-hidden="true"></i>
                </div>
                <div class="nav-right">
                  <i class="fa fa-search" aria-hidden="true"></i>
                  <input type="submit">
                </div>
                <div class="nav-fill">
                  <input type="text" id="recherche" name="recherche" placeholder="Rechercher" autocomplete="off">
                </div>
              </form>
            </div>
          </div>
        </div>
    
        <nav id="nav-main">
          <div class="nav-right">
            </div>
          <div class="nav-fill">
          <ul>
              <li><a href="./covoiturage.php">Covoiturage</a></li>
              <li><a href="./aide_logement.php">Aide au logement</a></li>
              <li><a href="./student_life.php">Vie étudiante</a></li>
              <li><a href="./aide_devoir.php">Aide aux devoirs</a></li>
              <li><a href="./annonce.php">Annonce</a></li>
              <li><a href="./forum.php">Forum</a></li>
              <li><a href="./users/deconnexion.php">Deconnexion</a></li>
              <li><a href="./join.php">Nous Rejoindre</a></li>
          </ul>
          </div>
          <div class="logo"><img src="./img/LOGOESME.png"></div>
        </nav>
      </header>
      <head>
      <center>
    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh; text-align: center;">
        <div class="header">
            <h1>Déposez votre CV et votre lettre de motivation ci-dessous.</h1>
            <u><h4>Nous analyseront vos documents pour un futur entretien.</h4></u>
        </div>
        <form method="post" action="confirmation_join.php">
            <h4 for="cv">Déposer son CV :</h4><input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx" required>
            <br>
            <br>
            <h4 for="lm">Lettre de motivation :</h4><input type="file" id="lm" name="lm" accept=".pdf,.doc,.docx" required>
            <br>
            <button type="submit" id="submit-button">Envoyer</button>
        </form>
        
    </div>
      </center>
  <header>
    


  <footer>
    <div class="top text-center">
      <a href="#nav-top">Retour en haut de la page</a>
    </div>

    <div class="middle">
      <div class="center">
      <ul>
          <li><h3>Nous Rejoindre</h3></li>
          <li><a href="join.php">› Suivre</a></li>
        </ul>
        <ul>
          <li><h3>Information & Contact</h3></li>
          <li><a href="info.php">› Suivre</a></li>
        </ul>

        <ul>
          <li><h3>Conditions d'utilisation</h3></li>
          <li><a href="condi_gen.php">› Suivre</a></li>
        </ul>
      </div>

      <ul class="copy text-center">
        <li><a href="#" class="logo"></a></li>
        <li><a href="#" class="select"><i class="fa fa-globe" aria-hidden="true"></i> Français</a></li>
        <li><a href="#" class="select"><i class="flag-icon-fr"></i>France</a></li>
      </ul>
    </div>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="js/app.js"></script>
</body>

</html>
