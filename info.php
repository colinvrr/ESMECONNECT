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
    <link href="info.css" rel="stylesheet" type="text/css">
    <!-- <link href="css/animate.css" rel="stylesheet" type="text/css"> -->

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
      <div class="container">
    <center><strong><h1>Notre Histoire</h1></strong></center>
<h4>Il était une fois, dans une petite école d'ingénieurs appelée l'ESME, un groupe d'étudiants passionnés par la technologie et l'entrepreneuriat. Ils se sont réunis avec une idée audacieuse : créer une plateforme web qui permettrait de mettre en relation les étudiants de l'ESME et de leur offrir des services pratiques pour faciliter leur vie quotidienne. Ainsi est née l'histoire de la création d'ESMECONNECT.
</h4>
<h4>Tout a commencé lors d'une séance de brainstorming dans une salle de cours bondée. Les étudiants étaient assis autour d'une table, chacun apportant ses idées sur la façon de rassembler la communauté étudiante de l'ESME et de la rendre plus unie. Ils voulaient créer un espace où les étudiants pourraient non seulement trouver des services utiles, mais aussi partager leurs connaissances et leurs expériences.
</h4><h4>
Au cours de cette séance de brainstorming, l'idée d'une plateforme web a émergé comme étant la solution idéale. Elle permettrait de connecter les étudiants entre eux et de faciliter l'accès à différents services. Ainsi, ESMECONNECT est né.
</h4><h4>
Le groupe d'étudiants s'est alors mis au travail pour donner vie à cette idée. Ils ont constitué une équipe composée de développeurs talentueux, de designers créatifs et de spécialistes du marketing. Chacun avait un rôle spécifique à jouer dans le processus de création de la plateforme.
</h4><h4>
Le premier défi était de développer une interface conviviale et intuitive. Les étudiants voulaient que la plateforme soit facile à utiliser pour tous, même ceux qui n'avaient pas de connaissances techniques avancées. Leur objectif était de créer un environnement accueillant où chaque étudiant se sentirait à l'aise.
</h4><h4>
Les développeurs ont travaillé jour et nuit pour créer les fonctionnalités clés de la plateforme. Ils ont mis en place un système de connexion sécurisé qui permettait aux étudiants de s'inscrire à ESMECONNECT en utilisant leur adresse e-mail de l'école. Cela garantissait que seuls les étudiants de l'ESME pouvaient accéder à la plateforme, créant ainsi une communauté exclusive.
</h4><h4>
Une fois le système de connexion en place, les étudiants ont commencé à ajouter les différents services à la plateforme. Le covoiturage était l'un des services les plus demandés, car de nombreux étudiants de l'ESME venaient de différentes régions et avaient besoin d'un moyen de transport pratique et abordable. ESMECONNECT permettait aux étudiants de proposer des trajets et de trouver des coéquipiers pour partager les frais de transport.
</h4><h4>
En plus du covoiturage, la plateforme offrait également une aide au logement. Les étudiants pouvaient publier des annonces pour rechercher des colocataires ou des logements à proximité de l'école. Cela a grandement facilité la vie des étudiants qui cherchaient un endroit où vivre pendant leurs années d'études.
</h4><h4>
ESMECONNECT ne s'arrêtait pas là. La plateforme proposait également un service d'aide aux devoirs, où les étudiants pouvaient demander de l'aide dans différentes matières et trouver des camarades prêts à les aider. Cela a favorisé le partage des connaissances et a renforcé la solidarité entre les étudiants de l'ESME.
</h4><h4>
Un autre aspect important d'ESMECONNECT était son volet associatif. La plateforme rassemblait des informations sur les différentes associations de l'école et fournissait des liens vers leurs sites respectifs. Cela permettait aux étudiants de découvrir les activités associatives disponibles et de s'impliquer dans des projets qui les intéressaient.
</h4><h4>
De plus, ESMECONNECT avait également son propre magasin en ligne où les étudiants pouvaient vendre et acheter des articles d'occasion, tels que des livres, des équipements électroniques ou des vêtements. Cela a créé une économie circulaire au sein de la communauté étudiante, encourageant le recyclage et l'échange de biens.
</h4><h4>
En parallèle, un forum était mis en place sur la plateforme pour permettre aux étudiants de discuter de divers sujets, de poser des questions, et de partager leurs expériences. Cela a favorisé les interactions et les échanges d'idées entre les étudiants, créant ainsi une véritable communauté virtuelle.
</h4><h4>
ESMECONNECT ne s'est pas contenté d'offrir des services pratiques, il a également donné la possibilité aux étudiants de rejoindre l'équipe de développement de la plateforme pour assurer sa maintenance et son évolution. Les étudiants intéressés pouvaient postuler et travailler aux côtés des créateurs d'ESMECONNECT pour améliorer continuellement l'expérience des utilisateurs.
</h4><h4>
Au fil du temps, ESMECONNECT est devenu une plateforme incontournable pour les étudiants de l'ESME. Elle a permis de renforcer la cohésion et la solidarité au sein de la communauté étudiante, en offrant des services pratiques et en favorisant les échanges entre les étudiants.
</h4><h4>
Aujourd'hui, ESMECONNECT continue de grandir et d'évoluer. De nouvelles fonctionnalités sont régulièrement ajoutées pour répondre aux besoins changeants des étudiants. La plateforme reste un pilier central de la vie étudiante à l'ESME, offrant un espace virtuel où les étudiants peuvent se connecter, partager et s'entraider tout au long de leur parcours d'ingénieur.
</h4><h4>
Et c'est ainsi que l'histoire de la création d'ESMECONNECT a permis de réunir les étudiants de l'ESME autour d'une plateforme web innovante, facilitant leur quotidien et renforçant leur communauté.</h4>
</p></div>
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

                   