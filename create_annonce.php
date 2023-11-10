<!DOCTYPE html>
<html>
<head>
    <title>Créer une annonce</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin: 100px auto;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            animation: slide-up 0.4s ease;
        }

        h1 {
            color: #333333;
            text-align: center;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555555;
        }

        input[type="text"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #dddddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            border-radius: 4px;
            cursor: pointer;
        }

        @keyframes slide-up {
            from {
                transform: translateY(20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Créer une annonce</h1>

        <form method="POST" action="save_annonce.php" enctype="multipart/form-data">
            <label for="titre">Titre :</label>
            <input type="text" name="titre" id="titre" required  ><br><br>

            <label for="image">Image :</label>
            <input type="file" name="image" id="image" accept="image/png, image/gif, image/jpeg, image/jpg" ><br><br>

            <label for="description">Description :</label>
            <textarea name="description" id="description" required></textarea><br><br>

            <label for="prix">Prix :</label>
            <textarea name="prix" id="prix" required></textarea><br><br>

            <label for="localisation">Localisation :</label>
            <textarea name="localisation" id="localisation" required></textarea><br><br>

            <label for="tel">Téléphone :</label>
            <textarea name="téléphone" id="téléphone" required></textarea><br><br>

            <label for="mail_perso">Email ESME :</label>
            <textarea name="mail_perso" id="mail_perso" required></textarea><br><br>
            
            <input type="submit" name="submit" value="Publier l'annonce"></center>
        </form>
    </div>
</body>
</html>
