<?php
session_start();

if(isset($_SESSION['login']) == 1 && isset($_SESSION['mot_passe']) == 1){

  } else{
    header('location: http://localhost:8888/projet_web/users/connexion.php');
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, nofollow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <link href="covoiturage.css" rel="stylesheet" type="text/css">

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
      <center>
    <style>

        .annonce {
            margin-bottom: 50px;
            padding: 44px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            transition: transform 0.3s;
            max-width: 500px;
        }

        .annonce:hover {
            transform: scale(1.05);
        }

        .annonce h2 {
            color: #333;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .annonce img {
            max-width: 300px;
            height: auto;
        }

        .annonce p {
            color: #666;
            font-size: 16px;
        }

        .success-message {
            color: green;
            font-weight: bold;
        }

        .btn-back {
            margin-top: 20px;
        }
    </style>


<Center><h1>Liste des annonces</h1></center>
    <Center><h3>Si une annonce vous intéresse n'hésitez pas à contacter l'adresse mail : <a href="mailto:admin_esmeconnect@esme.fr">admin_esmeconnect@esme.fr</a></h3></center>
    <Center><h3>En renseignant les informations de l'annonce et nous vous redirigerons vers le propriétaire.</h3></center>

    <div class="container">

        <?php
        // Se connecter à la base de données
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "espace_membres";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Erreur de connexion à la base de données : " . $conn->connect_error);
        }

        // Récupérer les annonces depuis la base de données
        $sql = "SELECT * FROM annonces";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) { 
                echo "<div class='annonce'>";
                echo "<h2>" . $row['titre'] . "</h2>";
                if (!empty($row['image'])) {
                  echo "<img src='./img/" . $row['image'] . "'>" . "<br><br>";
              }
                echo "<p>" . $row['description'] . "</p>";
                echo "<p>" . $row['prix'] . "</p>";
                echo "<p>Localisation : " . $row['localisation'] . "</p>"."</br>"."</br>";
                if($_SESSION['login'] == 'admin.root@esme.fr' and $_SESSION['mot_passe'] == 'root123'){

                    echo "<form action=\"sup_annonce.php?id=$row[id]\" method=\"post\" >
                    <input type=\"submit\" value=\"Supprimer\">
                    </form>";
                    
                
                }

                echo "</div>";
            }
        } else {
            echo "Aucune annonce trouvée.";
        }

        $conn->close();
        ?>

        <?php if (isset($_SESSION['success_message'])) : ?>
            <div class="success-message"><?php echo $_SESSION['success_message']; ?></div>
        <?php endif; ?>

        <center><a href="create_annonce.php" class="btn btn-primary">Créer une annonce</a></center>
        <br>       <br>       <br>       <br>       <br>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </center>


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
</html>
