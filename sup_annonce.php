<?php
session_start();
// Connexion à la base de données
$pdo = new PDO('mysql:host=localhost;dbname=espace_membres', 'root', 'root');

// Récupération des données de la table "covoiturage"
$test = $_GET['id']; 
$requete = $pdo->prepare("DELETE FROM annonces WHERE id= :id");

$requete->execute(array('id' => $test));
echo "<form action=\"annonce.php\" method=\"post\" >
                    <input type=\"submit\" value=\"Retour aux annonces\">
                    </form>";
?>