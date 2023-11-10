<?php
session_start();
require_once 'config.php'; // ajout connexion bdd 
// si la session existe pas soit si l'on est pas connecté on redirige
if (!isset($_SESSION['user'])) {
    header('Location:connexion.php');
    die();
}

// On récupere les données de l'utilisateur
$req = $bdd->prepare('SELECT * FROM utilisateurs WHERE token = ?');
$req->execute(array($_SESSION['user']));
$data = $req->fetch();

?>
<!-- <?php
// URL de la page PHP vers laquelle vous voulez rediriger l'utilisateur
$url = "../index.php";

// Temps en secondes avant la redirection
$temps_attente = 60;

// Message affiché à l'utilisateur
$message = "Vous allez être redirigé vers la page dans $temps_attente secondes.";

// Affichage du message
echo $message;

// Redirection vers l'URL après le délai spécifié
header("refresh:$temps_attente;url=$url");
?> -->

<!doctype html>
<html lang="en">

<head>
    <title>Espace membre</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <p>Vous allez être redirigé dans <span id="countdown"><?php echo $temps_attente ; ?></span> secondes...</p>

    <script>
        // Définition des variables de départ
        var timeLeft = <?php echo $temps_attente ; ?>;
        var countdown = document.getElementById("countdown");

        // Fonction de décompte
        var countdownInterval = setInterval(function () {
            // Mise à jour de l'affichage
            countdown.innerHTML = timeLeft;

            // Réduction du temps restant
            timeLeft--;

            // Si le temps est écoulé
            if (timeLeft < 0) {
                // Annulation de l'intervalle
                clearInterval(countdownInterval);

                // Redirection vers la page souhaitée
                window.location.href = "../index.php";
            }
        }, 1000); // Toutes les secondes
    </script>
    <div class="container">
        <div class="col-md-12">
            <?php
            if (isset($_GET['err'])) {
                $err = htmlspecialchars($_GET['err']);
                switch ($err) {
                    case 'current_password':
                        echo "<div class='alert alert-danger'>Le mot de passe actuel est incorrect</div>";
                        break;

                    case 'success_password':
                        echo "<div class='alert alert-success'>Le mot de passe a bien été modifié ! </div>";
                        break;
                }
            }
            ?>


            <div class="text-center">
                <h1 class="p-5">Bonjour
                    <?php echo $data['pseudo']; ?> !
                </h1>
                <hr />
                <a href="deconnexion.php" class="btn btn-danger btn-lg">Déconnexion</a>


                <a href="../index.php" class="btn btn-danger btn-lg">Home</a>


                <!-- Button trigger modal -->

                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#change_password">
                    Changer mon mot de passe
                </button>

            </div>
        </div>
    </div>






    <!-- Modal -->

    <div class="modal fade" id="change_password" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Changer mon mot de passe</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="layouts/change_password.php" method="POST">
                        <label for='current_password'>Mot de passe actuel</label>
                        <input type="password" id="current_password" name="current_password" class="form-control"
                            required />
                        <br />
                        <label for='new_password'>Nouveau mot de passe</label>
                        <input type="password" id="new_password" name="new_password" class="form-control" required />
                        <br />
                        <label for='new_password_retype'>Re tapez le nouveau mot de passe</label>
                        <input type="password" id="new_password_retype" name="new_password_retype" class="form-control"
                            required />
                        <br />
                        <button type="submit" class="btn btn-success">Sauvegarder</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
   

    <div class="modal fade" id="avatar" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Changer mon avatar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="layouts/change_avatar.php" method="POST" enctype="multipart/form-data">
                        <label for="avatar">Images autorisées : png, jpg, jpeg, gif - max 20Mo</label>
                        <input type="file" name="avatar_file">
                        <br />
                        <button type="submit" class="btn btn-success">Modifier</button>
                    </form>
                </div>
                <br />
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>