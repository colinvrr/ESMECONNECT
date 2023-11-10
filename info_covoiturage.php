<?php
    session_start();
    // Connexion à la base de données
    $pdo = new PDO('mysql:host=localhost;dbname=espace_membres', 'root', 'root');
    
    // Récupération des données de la table "covoiturage"
    $test = $_GET['id_course'];
    $stmt = $pdo->query("SELECT * FROM covoiturage where id_course =  '$test'  ");
    $covoiturages = $stmt->fetchAll(PDO::FETCH_ASSOC);
    

    setcookie("id_course",$_GET['id_course'],time()+300);

    
    
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
              <form>
                <div class="nav-left">
                  <i class="fa fa-caret-down" aria-hidden="true"></i>
                </div>
                <div class="nav-right">
                  <i class="fa fa-search" aria-hidden="true"></i>
                  <input type="submit">
                </div>
                <div class="nav-fill">
                  <input type="text" placeholder="Rechercher" autocomplete="off">
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
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <?php
echo '<div style="text-align: center;">'; // Balise pour centrer le contenu

echo "<h2>Course n°" . $_GET['id_course'] . "</h2>";

foreach ($covoiturages as $covoiturage):
    echo "<h2>Vous avez sélectionné le trajet " . $covoiturage['depart'] . " - " . $covoiturage['arrivee'] . " avec un départ prévu le " . $covoiturage['date'] . " à " . $covoiturage['heure'] . "</h2>";

    echo "<h2>Sélectionnez le nombre de places souhaité : " . "</h2>";

    $_SESSION['places'] = $covoiturage['places'];

endforeach;

function test($p)
{
    $cpt = 0;
    while ($cpt < $p) {
        echo '<option value="' . ($cpt + 1) . '">--' . ($cpt + 1) . '--</option>' . "\n";
        $cpt = $cpt + 1;
    }
}

echo '</div>'; // Fermer la balise pour centrer le contenu
?>

<center>
    <form action="maj_database.php" method="POST">
                <select name="levels">

                <?php 
                echo test($covoiturage['places']); 
                ?>

                </select>
                <input type="submit" value="Valider le trajet">
    </form>

    <form action="covoiturage.php" method="post">
        <input type="submit" value="Retour">
    </form>
</center>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
