<?php
session_start();
include 'bdd.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pikitia | Profil</title>
    <link rel="icon" type="image/png" href="img/icon.png" />
    <!-- NE JAMAIS METTRE DES LIEN BOOSTRAP ICI !!!!!!!!!!!!!!!!!!!!!!! -->
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <nav class="navbar fixed-top navbar-light bg-light">
            <a class="navbar-brand" href="#"><i class="fas fa-camera-retro"></i></a>
            <a class="navbar-brand" href="index.php">
                <h3>Pikitia</h3>
            </a>

            <a class="navbar-brand"><i class="fas fa-user-circle"></i><?php echo " " . @$_SESSION['user']; ?></a>
        </nav>
    </header>

    <section>
        <div class="container">
            <div class="profil-user-margin row justify-content-center piki">
                <div class="test300 profil-user col-5 col-md-4">
                    image
                </div>
                <div class="test300 user-description col-5 col-md-4">
                    <div class="text-user col-12">
                        <a><b><?php echo $_SESSION['user']; ?></b></a><br>
                        <div class="nom-user">
                            <p><?php echo "@" . @$_SESSION['user']; ?></p>
                        </div>
                    </div>
                    <div class="text col-12">
                        <p>Descritpion ..</p>
                    </div>
                    <div class="text-user2 col-12">
                        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-plus"></i></button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Ajoute Une Image</h5>
                                        <button type="button" class="close btn btn-light" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form enctype="multipart/form-data" action="traitement/traitement_image.php" method="post">
                                            <input type="file" id="fileselect" accpect="img/" name="fileselect">
                                            <button type="submit" name="submit">Importer</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="image-user col-12 col-md-8">
                    <?php
                    $repp = $bdd->prepare('SELECT * FROM images WHERE images.user_id = ?');
                    $repp->execute(array($_SESSION['id']));
                    $images_listes = $repp->fetchAll();

                    foreach ($images_listes as $images_liste) {
                        echo "<img src=" . $images_liste["image_lien"] . " width=\"239px\" height=\"239px\" class=\"image-profil\" alt=\"img\" >";
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <footer>

        <nav class="row navbar fixed-bottom navbar-light bg-light">
            <a class="ml-3 navbar-brand" href="#"><i class="fas fa-search"></i></a>
            <a class="navbar-brand" href="#"><i class="fas fa-search"></i></a>
            <a class="navbar-brand" href="#"><i class="far fa-plus-square"></i></a>
            <a class="navbar-brand" href="traitement/traitement_deconnexion.php"><i class="famasito fas fa-sign-out-alt"></i></a>
        </nav>
    </footer>

</body>
<!-- Boostrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- Java Script -->
<script src="js/script.js"></script>

</html>