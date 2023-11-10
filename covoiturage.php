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
      <section class="google-map390">
     <div class="container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5254.341069482467!2d2.3795058989294495!3d48.816807549922096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e673b338b8f2e3%3A0x3d954a14ea1b4980!2sB%C3%A2timent%20Brandebourg%20ESME!5e0!3m2!1sfr!2sfr!4v1685089353346!5m2!1sfr!2sfr" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
         </div>
  </section>
      <!-- Affichage des données dans un tableau HTML -->
      <div>
    <table id="covoiturage-table">
      <thead>
        <tr>
          <th>Ville de départ</th>
          <th>Ville d'arrivée</th>
          <th>Date de départ</th>
          <th>Heure de départ</th>
          <th>Places disponibles</th>
          <th>Prix</th>
          <th>   </th>
          <?php if($_SESSION['login'] == 'admin.root@esme.fr' and $_SESSION['mot_passe'] == 'root123'){
          
          echo  "<th>MAJ admin</th>"; 
        }
          ?>
        </tr>
      </thead>

      
      <tbody>
        <?php foreach ($covoiturages as $covoiturage): ?>
          <tr>
            <td>
              <?php echo $covoiturage['depart']; ?>
            </td>
            <td>
              <?php echo $covoiturage['arrivee']; ?>
            </td>
            <td>
              <?php echo $covoiturage['date']; ?>
            </td>
            <td>
              <?php echo $covoiturage['heure']; ?>
            </td>
            <td>
              <?php echo $covoiturage['places']; ?>

            </td>
            <td>
              <?php echo $covoiturage['prix']." €"; ?>
            </td>
            <td>
            <?php

              if($covoiturage['places']==0){

                echo "Trajet indisponible";

              }else{

                echo "<form action=\"info_covoiturage.php?id_course=$covoiturage[id_course]\" method=\"post\" >
                    
                    <input type=\"submit\" value=\"appuyez ici\">
                    
                </form>";
              }
            ?>
            </td>

          <?php 
          
          if($_SESSION['login'] == 'admin.root@esme.fr' and $_SESSION['mot_passe'] == 'root123'){
          
            echo "<td>
                    <form action=\"modif_trajet.php?id_course=$covoiturage[id_course]\" method=\"post\" >
                        <input type=\"submit\" value=\"appuyez ici\">
                    </form>
                  </td>" ; 
          }
          ?>
            
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  
<center>
  <div>
      <h2><b>Pour déposer une offre de covoiturage :</b></h2>
      <form method="post" action="offre_covoiturage.php">
        <input type="submit" value="appuyez ici">
      </form>

 </div>
</center>
<br><br><br><br><br><br>
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
</body>
</html>
