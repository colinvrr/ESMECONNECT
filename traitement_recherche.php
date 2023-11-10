<?php 

    session_start();
    // Connexion à la base de données
    $pdo = new PDO('mysql:host=localhost;dbname=espace_membres', 'root', 'root');
    
    // Récupération des données de la table "covoiturage"

    
    $recherche = $_POST['recherche'];
    $stmt =  $pdo->query ("SELECT * FROM `page_web` WHERE pages_web LIKE '%" . $recherche . "%'");
    $covoiturages = $stmt->fetchAll(PDO::FETCH_ASSOC);

  
    if(isset($_SESSION['login']) == 1 && isset($_SESSION['mot_passe']) == 1){

    } else{
        header('location: http://localhost/php/users/connexion.php');
    }
  
    if($_SESSION['login'] == 'admin.root@esme.fr' and $_SESSION['mot_passe'] == 'root123'){
        echo "MODE ADMIN";
    }

    echo $_POST['recherche'];

    foreach ($covoiturages as $covoiturage):

        echo $covoiturage['pages_web'];

        header("Location: http://localhost/php/" . $covoiturage['pages_web'] . ".php");



    endforeach;


    //echo $_POST['recherche']; 





?>

