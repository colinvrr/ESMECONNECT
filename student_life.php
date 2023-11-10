<?php
session_start();

if(isset($_SESSION['login']) == 1 && isset($_SESSION['mot_passe']) == 1){


  } else{
    header('location: http://localhost:8888/projet_web/users/connexion.php');
  }

?>

<!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8">

<head>
  <style>
    body {
        font-family: Arial, sans-serif;
        margin-bottom: 10px;
        font-size: 15px;
    }

    h1 {
        text-align: center;
    }

    h2 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .bde-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .bde-card {
        width: 300px;
        margin: 20px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .bde-name {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .bde-description {
        margin-bottom: 10px;
        margin-top : 20px;
        text-align: center;
    }

    .bde-image {
        text-align: center;
        height: 200px; /* Ajout d'une hauteur fixe */
        overflow: hidden;
    }

    .bde-image img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Ajustement de l'image pour remplir le cadre */
        object-position: center; /* Positionnement de l'image au centre */
        border-radius: 5px;
    }


    .bde-website_c {
        color: #007bff;
        text-align: center;
        margin-top: 95px;
    }

    .bde-website_a {
        color: #007bff;
        text-align: center;
        margin-top: 50px;
        
    }

    a:link { /* lien non visité */ color: green;
    }
    a:visited { /* lien visité */
      color: rgb(4, 92, 180);
    }
    a:hover { /* souris au-dessus du lien */ color: teal;
    }
    a:active { /* on clique sur le lien */
    color: red; }

    .bde-video-container {
      position: relative;
        padding-bottom: 56.25%; /* Ratio d'aspect de 16:9 pour la vidéo */
        padding-top: 30px;
        height: 0;
        overflow: hidden;
    }

    .bde-video-container iframe {
      position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .logement {
    font-size: 18px;
    line-height: 1.5;
    margin-bottom: 20px;
    }

    .logement h2 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .logement p {
        margin-bottom: 10px;
    }

    .logement ul {
        list-style-type: disc;
        margin-left: 20px;
        margin-bottom: 10px;
    }

    .logement li {
        margin-bottom: 5px;
    }

    .logement a {
        color: #007bff;
        text-decoration: none;
    }

</style>
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
      <head>
  <title>EsmeConnect</title>

  
</head>
        <body>
        <div class="container">
    <h1>Vie étudiante</h1>
    <p>Retrouvez ici toutes les informations utiles pour votre vie étudiante sur le campus.</p>
    
    <hr>
    
    
</head>
    <h1>BDE de l'ESME</h1>

    <div class="bde-container">
        <div class="bde-card">
            <h2 class="bde-name">BDE OSTARA</h2>
            <div class="bde-image_OSTARA">
                <img src="https://cdn.static.linkr.bio/thumb/250x250/cover/85/upload/02048ccd-8829-4f49-9481-4877682d4199.png" alt="Image du BDE 1">
            </div>
            <p class="bde-description">Campus de Paris</p>
            <p class="bde-website_a"><a href="https://www.linkedin.com/company/bde-ostara-esme/about/">BDE OSTARA</a></p>
        </div>

        <div class="bde-card">
            <h2 class="bde-name">BDE COLVERT</h2>
            <div class="bde-image">
                <img src="https://cdn.helloasso.com/img/logos/croppedimage-150e678c6adf4b6f8fbcb2d36b566035.png?resize=fill:140:140" alt="Image du BDE 1">
            </div>
            <p class="bde-description">Campus de Bordeaux</p>
            <p class="bde-website_c"><a href="https://www.helloasso.com/associations/association-des-eleves-de-l-ecole-esme-sudria-de-bordeaux">BDE COLVERT</a></p>
        </div>

        <div class="bde-card">
            <h2 class="bde-name">BDE SKYFALL</h2>
            <div class="bde-image">
                <img src="https://d1fdloi71mui9q.cloudfront.net/2GgL1VGQIuzaalXh6Mz7_rSN8HHdQmoWB0K0W" alt="Image du BDE 1">
            </div>
            <p class="bde-description">Campus de Lyon</p>
            <p class="bde-website_c"><a href="https://linktr.ee/bde_skyfall">BDE SKYFALL</a></p>
        </div>

        <div class="bde-card">
            <h2 class="bde-name">BDE INVARIANCE</h2>
            <div class="bde-image">
                <img src="https://cdn.helloasso.com/img/logos/bde%20esme%20sudria%20lille-c66a029f84214d62839c7277ab070029.png?resize=fill:140:140" alt="Image du BDE 1">
            </div>
            <p class="bde-description">Campus de Lille</p>
            <p class="bde-website_c"><a href="https://www.helloasso.com/associations/bde-esme-sudria-lille">BDE INVARIANCE</a></p>
        </div>
        

    </div>


    <p>Le BDE est une association étudiante qui vise à améliorer la vie étudiante et à créer des opportunités d'échange et de convivialité au sein de l'école.</p>
    
    
    <hr>

    <div class="bde-video-container">
                <iframe width="400" height="225" src="https://www.youtube.com/embed/OdSpRORCSBo?autoplay=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <hr>
    
    <h2>Événements à venir</h2>
    <p>Ne manquez pas ces événements à venir sur le campus :</p>
    <ul>
      <li>Concert de musique le 1er Juillet</li>
      <li>Tournoi de football le 10 Juillet</li>
      <li>Soirée de bienvenue pour les nouveaux étudiants le 15 septembre</li>
    </ul>
    
    <hr>

    <div class="logement">
    <h2>Logements étudiants</h2>

    <p>L'école d'ingénieurs ESME a des partenariats avec plusieurs résidences pour étudiants, récentes et situées dans le voisinage immédiat de l'école. Plus de 250 chambres, bénéficiant des aides au logement (APL ou ALS), sont disponibles. Une fois votre inscription validée, vous pourrez contacter les services concernés sur nos différents campus.</p>
    <p>Se renseigner auprès de :</p>
    <ul>
        <li>À Paris : <a href="mailto:reskia.leghima@esme.fr">reskia.leghima@esme.fr</a></li>
        <li>À Bordeaux : <a href="mailto:esme_bordeaux@esme.fr">esme_bordeaux@esme.fr</a></li>
        <li>À Lille : <a href="mailto:esme_lille@esme.fr">esme_lille@esme.fr</a></li>
        <li>À Lyon : <a href="mailto:esme_lyon@esme.fr">esme_lyon@esme.fr</a></li>
    </ul>
</div>

<div class=logement>
    <h3>Studapart</h3>
    <img decoding="async" loading="lazy" width="300" height="87" src="https://www.esme.fr/wp-content/uploads/Studapart-300x87.png" alt="" class="wp-image-13126" 
        srcset="https://www.esme.fr/wp-content/uploads/Studapart-300x87.png 300w, https://www.esme.fr/wp-content/uploads/Studapart-140x41.png 140w, https://www.esme.fr/wp-content/uploads/Studapart-280x81.png 280w, https://www.esme.fr/wp-content/uploads/Studapart.png 689w" 
        sizes="(max-width: 300px) 100vw, 300px">
    <p>
        L'ESME est en partenariat avec Studapart, qui s'occupe d'encadrer votre recherche de logement, du dossier de location à la réservation du logement. Toutes les démarches ainsi que le dossier de location sont simplifiés et en format 100% numérique. Studapart est à vos côtés pendant toute la durée de votre location, ne serait-ce qu'en remplissant le rôle de garant de votre logement.
    </p>
    <ul>
        <li>Logements proposés en exclusivité aux étudiants ESME ⚡</li>
        <li>Annonces vérifiées et paiement sécurisé 💸</li>
        <li>Dossier de location simplifié & démarches 100% en ligne 🤝</li>
    </ul>
    <p>Pour rechercher sur la plateforme et bénéficier de solutions de logement exclusives, connectez-vous sur l'espace locataire et créez un compte sur notre plateforme partenaire !</p>
    <p>Vous pouvez également retrouver plus d'informations dans la section <a href="http://localhost:8888/php_colin/aide_logement.php">aide aux logements.</a><p>
</div>

    <hr>
    
    <h2>Conseils pour la vie étudiante</h2>
    <p>Voici quelques conseils pour vous aider à réussir votre vie étudiante :</p>
    <ul>
      <li>Planifiez votre temps</li>
      <li>Participez à des activités parascolaires</li>
      <li>Prenez soin de votre santé mentale</li>
      <li>Rencontrez de nouvelles personnes</li>
      <li>Économisez de l'argent en cuisinant vos propres repas</li>
    </ul>
    
    <hr>
    
    <h2>Opportunités de bénévolat</h2>
    <p>Nous avons des opportunités de bénévolat disponibles pour les étudiants :</p>
    <ul>
      <li>Idées Madagascar œuvre depuis plus de 20 ans pour l’amélioration des conditions de vie de villages au Sud de Madagascar. Un challenge de taille… Êtes-vous prêt à le relever ?</li>
      <li>La vocation d’ESME Sans Frontières est de récolter des fonds pour aider à créer des écoles et des habitations dans les pays défavorisés.</li>
      <li>Organisation caritative C</li>
    </ul>
    
    <hr>
    
    <h2>Services de soutien aux étudiants</h2>
    <p>Nous avons plusieurs services de soutien aux étudiants disponibles sur le campus :</p>
    <ul>
      <li>Centre de counseling</li>
      <li>Service de santé étudiant</li>
      <li>Innover-Développer pour l’Environnement et l’Avenir, par des élèves de l’ESME Sudria. Le projet ? La sensibilisation à la responsabilité écologique !</li>
    </ul>
    
    <hr>
    
    <h2>Sports universitaires</h2>
    <p>Ne manquez pas les matchs de nos équipes sportives :</p>
    <ul>
      <li>Match de football contre l'Université A le 5 Juillet</li>
      <li>Match de basket-ball contre l'Université B le 10 Juillet</li>
      <li>Match de volleyball contre l'Université C le 15 Juillet</li>
    </ul>
    
    <hr>
    
    <h2>Contacts utiles</h2>
    <p>Voici une liste de contacts utiles pour les étudiants :</p>
    <ul>
      <li>Bureau des étudiants : 01 23 45 67 89</li>
      <li>Bureau des logements étudiants : 01 23 45 67 90</li>
      <li>Service de santé étudiant : 01 23 45 67 91</li>
      <li>Centre de counseling : 01 23 45 67 92</li>
      <li>Centre d'aide à l'emploi : 01 23 45 67 93</li>
    </ul>
  </div>
</main>

<style>
  /* Exemple de CSS pour le style de la page */
  
  /* h1, h2 {
    text-align: center;
  }
   */
  hr {
    border: 1px solid black;
  }
  

</style>
 

  </body>
</header>

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