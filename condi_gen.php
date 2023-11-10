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
    <link href="aide_devoir.css" rel="stylesheet" type="text/css">
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
      <a id="banner" href="./index.php"></a>
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
              <li><a href="./market.php">Annonce</a></li>
              <li><a href="./forum.php">Forum</a></li>
              <li><a href="./users/deconnexion.php">Deconnexion</a></li>
              <li><a href="./join.php">Nous Rejoindre</a></li>
          </ul>
          </div>
          <div class="logo"><img src="./img/LOGOESME.png"></div>
        </nav>
      </header>
      <div class="container">
    <center><h1><strong>Conditions Générales</strong></h1></center>
    <br><br>
    <h1>1. Objet</h1>
    <h4>La société Comuto SA (ci-après, « ESMECONNECT ») édite une plateforme de covoiturage accessible sur un site internet notamment à l’adresse www.ESMECONNECT.fr ou sous forme d’application mobile et destinée à (i) mettre en relation des conducteurs se rendant à une destination donnée pour leur propre compte avec des passagers allant dans la même direction afin de leur permettre de partager le trajet et donc les frais qui y sont associés et (ii) rechercher et procéder à l’achat de Billets de bus auprès des opérateurs de transport (les « Autocaristes ») que nous distribuons (ci-après, la « Plateforme »).</h4> <br>

    <h4>Les présentes conditions générales d’utilisation ont pour objet d’encadrer l’accès et les modalités d’utilisation de la Plateforme. Nous vous invitons à en prendre attentivement connaissance. Vous comprenez et reconnaissez que ESMECONNECT n’est partie à aucun accord, contrat ou relation contractuelle, de quelque nature que ce soit, conclu entre les Membres de sa Plateforme ou avec un Autocariste.</h4> <br>

    <h4>En cliquant sur le bouton « Connexion » ou « Inscription avec un email », vous reconnaissez avoir pris connaissance et accepter l’intégralité des présentes conditions générales d’utilisation.</h4> <br>
    
    <h1>2. Définitions</h2>

    <h4>Dans les présentes,

« Annonce » désigne indistinctement une Annonce de Covoiturage ou une Annonce de Bus ; <br>

« Annonce de Covoiturage » désigne une annonce concernant un Trajet posté sur la Plateforme par un Conducteur ; <br>

« Annonce de Bus » désigne une annonce concernant un Trajet en Bus opéré par un Autocariste distribué sur la Plateforme ;<br>

« Autocariste » désigne une entreprise de transport de passagers professionnelle dont les Trajets en Bus sont distribués sur la Plateforme ;<br>

« Billet » désigne le titre de transport nominatif en cours de validité remis au Client, à la suite de la Commande pour un Trajet en Bus, constituant la preuve de l’existence d’un contrat de transport entre le Passager et l’Autocariste, lequel contrat est régi par les CGV, sans préjudice d’éventuelles conditions particulières additionnelles stipulées entre le Passager et l’Autocariste et visées sur le Billet ;<br>

« ESMECONNECT » a la signification qui lui est donnée à l’article 1 ci-dessus ;<br>

« CGU » désigne les présentes Conditions Générales d’Utilisation ;<br>

« CGV » désigne les Conditions Générales de Vente de Transport de l’Autocariste concerné selon le Trajet en Bus sélectionné par le Client, et les conditions particulières applicables, accessibles sur le Site, et que le Client reconnaît avoir lues avant de passer sa Commande;<br>

« Client » désigne toute personne physique (étant Membre ou non) ayant acheté, soit pour son compte, soit pour le compte d’un tiers qui sera le Passager, un Billet de Bus par l’intermédiaire de la Plateforme pour effectuer un Trajet opéré par l’Autocariste;<br>

« Commande » désigne l’opération par laquelle le Client réserve toutes Prestations auprès de ESMECONNECT, quel que soit le moyen de réservation employé, hors le cas de l’achat en Point de Vente, et qui emporte l’obligation pour le Client de payer le prix afférent aux Prestations concernés ;<br>

« Compte » désigne le compte qui doit être créé pour pouvoir devenir Membre et accéder à certains Services proposés par la Plateforme ;<br>

« Compte Facebook » a la signification qui lui est donné à l’article 3.2 ci-dessous ;<br>

« Conducteur » désigne le Membre proposant, sur la Plateforme, de transporter une autre personne physique en contrepartie de la Participation aux Frais, pour un trajet et un horaire défini par lui-seul ;<br>

« Confirmation de Réservation » a la signification qui lui est donnée à l’article 4.2.1 ci-dessous ;<br>

« Contenu Membre » a la signification qui lui est donnée à l’article 11.2 ci-dessous ;<br>

« Frais de Service » a la signification qui lui est donnée à l’article 5.2 ci-dessous ;<br>

« Membre » désigne toute personne physique ayant créé un Compte sur la Plateforme ;<br>

« Passager » désigne (i) le Membre ayant accepté la proposition d’être transporté par le Conducteur ou, le cas échéant, la personne pour le compte de laquelle un Membre a réservé une Place ou (ii) le Client ayant acheté un Billet auprès de l’Auocariste ou, le cas échéant, la personne pour le compte de laquelle un Client a acheté un Billet auprès de l’Autocariste;<br>

« Participation aux Frais » désigne, pour un Trajet en Covoiturage donné, la somme d’argent demandée par le Conducteur et acceptée par le Passager au titre de sa participation aux frais de déplacement ;<br>

« Place » désigne la place réservée par un Client à bord du véhicule d’un Conducteur ou à bord d’un véhicule opéré par un Autocariste ;<br>

« Plateforme » a le sens qui lui est donné à l’article 1, ci-dessus ;<br>

« Point de Vente » désigne les guichets ou bornes physiques et dans lesquels les Billet sont proposés à la vente ;<br>

« Prestations » désigne la ou les prestation(s) de transport souscrite(s) par le Passager d’un Trajet en Bus et fournies par l’Autocariste;<br>

« Prix » désigne, pour un Trajet en Bus donné,  le prix toutes taxes, frais et coûts de service y afférents compris, payé par le Client sur la Plateforme, au moment de la validation de la Commande, pour une Place sur un Trajet en Bus donné;<br>

« Réservation » a le sens qui lui est donné à l’article 4.2.1. ci-dessous ;<br>

« Services » désigne l’ensemble des services rendus par ESMECONNECT par l’intermédiaire de la Plateforme ;<br>

« Site » désigne le site internet accessible à l’adresse www.ESMECONNECT.fr ;<br>

« Sous-Trajet » a le sens qui lui est donné à l’article 4.1 ci-dessous ;<br>

« Trajet » désigne indistinctement un Trajet en Covoiturage ou un Trajet en Bus ;<br>

« Trajet en Covoiturage » désigne le trajet faisant l’objet d’une Annonce de Covoiturage publiée par un Conducteur sur la Plateforme et pour lequel il accepte de transporter des Passagers en contrepartie de la Participation aux Frais ;<br>

« Trajet en Bus » désigne le trajet faisant l’objet d’une Annonce de Bus sur la Plateforme et pour lequel un Autocariste propose des places à bord du véhicule en contrepartie du Prix.</h4>
    <h1>3. Covoiturage</h1>
    <h4>Lorsqu’un Passager est intéressé par une Annonce de Covoiturage, il peut effectuer une demande de Réservation en ligne. Cette demande de Réservation est (i) soit acceptée automatiquement (si le Conducteur a choisi cette option lors de la publication de son Annonce de Covoiturage), (ii) soit acceptée manuellement par le Conducteur. Au moment de la Réservation, le Passager procède au paiement en ligne du montant de la Participation aux Frais et des Frais de Service afférents, le cas échéant. Après vérification du paiement par ESMECONNECT et validation de la demande de Réservation par le Conducteur, le cas échéant, le Passager reçoit une confirmation de réservation (la « Confirmation de Réservation »).</h4><br>

<h4>Si vous êtes un Conducteur et que vous avez choisi de gérer vous-mêmes les demandes de Réservation lors de la publication de votre Annonce de Covoiturage, vous êtes tenu de répondre à toute demande de Réservation dans un certain délai. A défaut, la demande de Réservation expire automatiquement et le Passager est remboursé de l’intégralité des sommes versées au moment de la demande de Réservation, le cas échéant.</h4><br>

<h4>à Confirmation de la Réservation, ESMECONNECT vous transmet les coordonnées téléphoniques du Conducteur (si vous êtes Passager) ou du Passager (si vous êtes Conducteur), dans le cas où le Membre a donné son accord à la divulgation de son numéro de téléphone. Vous êtes désormais seuls responsables de l’exécution du contrat vous liant à l’autre Membre.</h4><br>
<h1>4. Politique d’annulation</h1>
<h2> Modalités de remboursement en cas d’annulation</h2><br>
<h4>Seuls les Trajets en Covoiturage font l’objet de la présente politique d’annulation, ESMECONNECT n’offrant aucune garantie, de quelque nature que ce soit, en cas d’annulation, pour quelque raison que ce soit. Dans le cadre des Trajets en Bus, celle-ci est soumise aux CGV des Autocaristes. Le Client est ainsi invité à se reporter aux CGV concernées afin de connaître les conditions d’échange et d’annulation de son Trajet en Bus.</h4><br>

<h4>L’annulation d’une Place d’un Trajet en Covoiturage par le Conducteur ou le Passager après la Confirmation de Réservation est soumise aux stipulations ci-après :</h4><br>

<h4>– En cas d’annulation imputable au Conducteur, le Passager est remboursé de la totalité de la somme qu’il a versée (c’est-à-dire la Participation aux Frais et les Frais de Service afférents). C’est notamment le cas lorsque le Conducteur annule un Trajet en Covoiturage ou ne se rend pas au point de rendez-vous au plus tard 15 minutes après l’horaire convenu ;</h4><br>

<h4>– En cas d’annulation imputable au Passager :</h4><br>

<h4>Si le Passager annule plus de 24 heures avant l’heure prévue pour le départ telle que mentionnée dans l’Annonce de Covoiturage, le Passager est remboursé du montant de la Participation aux Frais. Les Frais de Service demeurent acquis à ESMECONNECT et le Conducteur ne reçoit aucune somme de quelque nature que ce soit ;</h4><br>
<h4>Si le Passager annule moins de 24 heures ou 24 heures avant l’heure prévue pour le départ, telle que mentionnée dans l’Annonce de Covoiturage et plus de trente minutes après la Confirmation de Réservation, le Passager est remboursé à hauteur de la moitié de la Participation aux Frais versée lors de la Réservation, les Frais de Service demeurent acquis à ESMECONNECT et le Conducteur reçoit 50% de la Participation aux Frais ;</h4><br>
<h4>Si le Passager annule moins de 24 heures ou 24 heures avant l’heure prévue pour le départ, telle que mentionnée dans l’Annonce de Covoiturage et trente minutes ou moins après la Confirmation de Réservation, le Passager est remboursé de l’intégralité de la Participation aux Frais. Les Frais de Service demeurent acquis à ESMECONNECT et le Conducteur ne reçoit aucune somme de quelque nature que ce soit ;</h4><br>
<h4>Si le Passager annule après l’heure prévue pour le départ, telle que mentionnée dans l’Annonce, ou s’il ne se présente pas au lieu de rendez-vous au plus tard dans un délai de 15 minutes à compter de l’heure convenue, aucun remboursement n’est effectué. Le Conducteur est dédommagé à hauteur de la totalité de la Participation aux Frais et les Frais de Services sont conservés par ESMECONNECT.</h4><br>
<h4>Lorsque l’annulation intervient avant le départ et du fait du Passager, la ou les Places annulé(e)s par le Passager pour ledit Trajet en Covoiturage sont de plein droit remises à la disposition d’autres Passagers pouvant les réserver en ligne et en conséquence soumises aux conditions des présentes CGU.</h4><br>

<br><h4>ESMECONNECT apprécie à sa seule discrétion, sur la base des éléments à sa disposition, la légitimité des demandes de remboursement qu’elle reçoit.</h4><br>

<h1>4.1 Droit de rétractation</h1>
<br><h4>En acceptant les présentes CGU, vous acceptez expressément que le Contrat entre vous et ESMECONNECT consistant en la mise en relation avec un autre Membre soit exécuté avant l’expiration du délai de rétractation dès la Confirmation de Réservation et renoncez expressément à votre droit de rétractation, conformément aux dispositions de l’article L.221-28 du Code de la consommation.</h4><br>

<h1>4.2 Comportement des utilisateurs de la Plateforme et Membres</h1>
<h2>Engagement de tous les utilisateurs de la Plateforme</h2>
<h4>Vous reconnaissez être seul responsable du respect de l’ensemble des lois, règlements et obligations applicables à votre utilisation de la Plateforme.</h4>
<br>
<h4>Par ailleurs, en utilisant la Plateforme et lors des Trajets, vous vous engagez à :</h4><br>

<h4>(i) ne pas utiliser la Plateforme à des fins professionnelles, commerciales ou lucratives si vous n’êtes pas un Autocaristes ;</h4>
<h4>(ii) ne transmettre à ESMECONNECT (notamment lors de la création ou la mise à jour de votre Compte) ou aux autres Membres ou Autocaristes aucune information fausse, trompeuse, mensongère ou frauduleuse ;</h4>
<h4>(iii) ne tenir aucun propos, n’avoir aucun comportement ou ne publier sur la Plateforme aucun contenu à caractère diffamatoire, injurieux, obscène, pornographique, vulgaire, offensant, agressif, déplacé, violent, menaçant, harcelant, raciste, xénophobe, à connotation sexuelle, incitant à la violence, à la discrimination ou à la haine, encourageant les activités ou l’usage de substances illégales ou, plus généralement, contraires aux finalités de la Plateforme, de nature à porter atteinte aux droits de BlaBlaCar ou d’un tiers ou contraires aux bonnes mœurs ;</h4>
<h4>(iv) ne pas porter atteinte aux droits et à l’image de ESMECONNECT, notamment à ses droits de propriété intellectuelle ;</h4>
<h4>(v) ne pas ouvrir plus d’un Compte sur la Plateforme et ne pas ouvrir de Compte au nom d’un tiers ;</h4>
<h4>(vi) ne pas tenter de contourner le système de réservation en ligne de la Plateforme, notamment en tentant de communiquer à un autre Membre ou un Autocariste vos coordonnées afin de réaliser la réservation en dehors de la Plateforme et ne pas payer les Frais de Service ;</h4>
<h4>(vii) ne pas contacter un autre Membre ou Autocariste, notamment par l’intermédiaire de la Plateforme, à une autre fin que celle de définir les modalités du covoiturage ;</h4>
<h4>(viii) ne pas accepter ou effectuer un paiement en dehors de la Plateforme ;
<h4>(ix) vous conformer aux présentes CGU et à la Politique de Confidentialité.    
<br><br><br><br><br><br><br><br>




  </div>                          
</form>

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

                   