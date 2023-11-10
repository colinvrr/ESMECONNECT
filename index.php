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

  <section id="promo">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div id="promo-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="img/slide_1.jpg">
              </div>
              <div class="item">
                <img src="img/slide_2.jpg">
              </div>
              <div class="item">
                <img src="img/slide_3.jpg">
              </div>
              <div class="item">
                <img src="img/slide_4.jpg">
              </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#promo-carousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#promo-carousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="products">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="col-lg-3">
            <div class="col text-center" id="welcome">
              <h2>Bienvenue sur ESMECONNECT !</h2>
              <hr>
              <p style="text-align: justify;">Sur ce site vous allez retrouver différents services qui sont référencé en haut de la page. Vous pouvez à la fois proposer des services et y souscrire. <br> <br> Aussi, un forum est mis à disposition pour pouvoir avoir un contact facilité avec les autres étudiants de l'ESME sur les sujets que vous voulez ! Le site renseigne aussi l'actualité des différentes associations.  <br> <br> Notre but avec cette plateforme est de pouvoir vous faire échanger des services variés à moindre coût entre étudiants de l'ESME. <br><br> N'hésitez pas nous contacter en cas de problème, ou pour nous proposer des améliorations. <br><br> Enjoy !</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="col" id="amazon-basics">
              <h2>Services</h2>
              <a href="./aide_logement.php" class="thumbnail text-center">
                <img src="img/product_1.jpg" alt="Product 1">
                <span class="caption">Aide au logement</span>
              </a>
              <a href="./info.php" class="thumbnail text-center">
                <img src="img/product_2.jpg" alt="Product 2">
                <span class="caption">Information</span>
              </a>
              <a href="./student_life.php" class="thumbnail text-center">
                <img src="img/product_3.jpg" alt="Product 3">
                <span class="caption">Associations</span>
              </a>
              <a href="./aide_devoir.php" class="thumbnail text-center">
              <img src="img/product_4.jpg" alt="Product 4">
                <span class="caption">Aide aux devoirs</span>
              </a>
              <div class="footer">
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="col" id="dress">
              <!--        start recent post  -->
<div>
    <h4>Post Recent :</h4>
    <div>
      <b> Lola.carine </b> 
        <h5>Qui envisage de partir pendant les prochains ponts ? Je compte partir mais si je peux profiter d'un covoiturage pourquoi pas !</h5>
        <h4> Reponse : </h4>
        <b>Louis.boyard </b><br><br>
        <p>On part à Nantes avec mes potes, il reste une place dans la voiture, n'hésite pas..</p>
        <small style="color: #848991">Mai 10, 2023</small>
    </div>
    <hr>
    <div>
      <b> Mehdi.caroline </b> 
        <h5>J'adore les cours de language du web !'</h5>
        <h4> Reponse : </h4>
        <b>Nathan.verdeyme </b><br><br>
        <p> Moi aussi grave !</p>
        <b>Tina.torri </b><br><br>
        <p>ah oui ?</p>
        <small style="color: #848991">Mai 12, 2023</small>
    </div> 
</div>
<!--       end recent post    -->
              <div class="row text-center">
              </div>
              <div class="footer">
                <a href="forum.php">Acceder au Forum.</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="col" id="deal-day">
              <a href="covoiturage.php"><img src="img/Bordeaux.jpeg" alt="Bordeaux"></a>
              <h2>Offre du jour ! <br> Paris-Bordeaux pour seulement....</h2>
              <h1>15€</h1>
              <big>Prix : <s>$35.00</s> (47% de moins)</big>

              <div class="footer">
                <a href="covoiturage.php">Acceder aux offres de covoiturage</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
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
