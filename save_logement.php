<!DOCTYPE html>
<html>
<head>
    <title>Enregistrer une annonce</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .success-message {
            margin-top: 20px;
            padding: 10px;
            background-color: #dff0d8;
            border: 1px solid #d0e9c6;
            color: #3c763d;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f7f7f7;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        .success-message {
            margin-top: 20px;
            padding: 10px;
            background-color: #dff0d8;
            border: 1px solid #d0e9c6;
            color: #3c763d;
            text-align: center;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
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

        // Récupérer les données du formulaire
        $titre = $_POST['titre'];
        $image = $_FILES['image']['name'];
        $description = $_POST['description'];
        $agence = $_POST['agence'];
        $prix = $_POST['prix'];
        $mail_perso = $_POST['mail_perso'];
        $localisation = $_POST['localisation'];
        $téléphone = $_POST['téléphone'];


        // Déplacer l'image vers un dossier sur le serveur
        $targetDir = "/img";
        $targetFile = $targetDir . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $targetFile);

        // // Insérer les données dans la base de données
        $sql = "INSERT INTO logement (titre, image, description, prix, agence, mail_perso, téléphone, localisation) VALUES ('$titre', '$image', '$description', '$prix', '$agence', '$mail_perso', '$téléphone', '$localisation');";
        if ($conn->query($sql) === TRUE) {
            echo "<div class='success-message'>Annonce créée avec succès.</div>";
        } else {
            echo "Erreur lors de la création de l'annonce : " . $conn->error;
        }

        $conn->close();
        ?>
        <!-- //  <a href="aide_logement.php" class="button">Retour aux annonces</a> -->
        <center><a href="aide_logement.php" class="btn btn-primary">Retour aux annonces</a></center>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
