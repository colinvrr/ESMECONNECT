<?php
session_start();
// Connexion à la base de données
$pdo = new PDO('mysql:host=localhost;dbname=espace_membres', 'root', 'root');

// Récupération des données de la table "covoiturage"
$test = $_GET['id_course'];
$stmt = $pdo->query("SELECT * FROM covoiturage where id_course =  '$test'  ");
$covoiturages = $stmt->fetchAll(PDO::FETCH_ASSOC);

setcookie("id_course",$_GET['id_course'],time()+300);

foreach ($covoiturages as $covoiturage):




endforeach;

?>


<form method="post" action="traitement_modif_trajet.php">
    
    <label for="depart">Ville de départ :</label>
    <input value =<?php echo $covoiturage['depart'] ?> "type="text" id="depart" name="depart" required>

    <label for="arrivee">Ville d'arrivée :</label>
    <input value =<?php echo $covoiturage['arrivee'] ?> type="text" id="arrivee" name="arrivee" required>

    <label for="date">Date de départ :</label>
    <input value =<?php echo $covoiturage['date'] ?> type="date" id="date" name="date" required>

    <label for="heure">Heure de départ :</label>
    <input value =<?php echo $covoiturage['heure'] ?> type="time" id="heure" name="heure" required>

    <label for="places">Nombre de places disponibles :</label>
    <input value =<?php echo $covoiturage['places'] ?> type="number" id="places" name="places" required>

    <label for="prix">Prix :</label>
    <input value =<?php echo $covoiturage['prix'] ?> type="number" id="prix" name="prix" required>

    <input type="submit" value="Soumettre">
  </form>

  <form action="covoiturage.php" method="post">
        <input type="submit" value="Retour">
  </form>
