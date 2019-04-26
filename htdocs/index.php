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
    <title>Pikitia</title>
    <!-- NE JAMAIS METTRE DES LIEN BOOSTRAP ICI !!!!!!!!!!!!!!!!!!!!!!! -->
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <nav class="navbar fixed-top navbar-light bg-light">
            <a class="navbar-brand" href="#"></i></a>
            <a class="navbar-brand" href="index.php">
                <h3>Pikitia</h3>
            </a>
            <?php if(!isset($_SESSION['user'])){ ?> <a class="navbar-brand"><i class="fas fa-user"></i></i></a><?php }else{?> <a class="navbar-brand" href="profil_user.php"><i class="fas fa-user-check"></i></a><?php } ?>
        </nav>
    </header>


    <section>
        
        <?php
            if(!isset($_SESSION['user'])){
                echo '
                <div class="container">
                    <div class="row modal-image">
                        <div class="col-6 col-md-6 telest"><img src="img/idex.png" alt="iamge"></div>
                        <div class="col-6 col-md-6 jumbotron">
                            <h1 class="display-4">Bienvenue Sur Pikitia</h1>
                            <hr class="my-4">
                            <p>Tu n\'es pas connecté ! Clique sur le bouton pour te connecter et accéder aux réseaux sociaux le plus connu de l\'internet.</p>
                            <p class="lead">
                                <a class="magalomane btn btn-primary btn-lg" href="connexion.php" role="button">Connection <i class="fas fa-sign-in-alt"></i></a>
                                <img src="img/food.gif">
                            </p>
                        </div>
                    </div>
                </div>
                ';
            }else{
                $repp = $bdd->query('SELECT * FROM images ORDER BY image_date DESC');
                $images_listes = $repp->fetchAll();
                            
                foreach ($images_listes as $images_liste) {
                    $rep = $bdd->query('SELECT * FROM images WHERE user_id = ' . $images_liste['user_id'] . ' AND avatar = 1');
                    $fetchpasall = $rep->fetch();
                    $reponse = $bdd->query('SELECT * FROM commentaire WHERE image_id = ' . $images_liste["id"] . '');
                    $commentaire_liste = $reponse->fetchAll();
                    $commentaires = '';
                    foreach ($commentaire_liste as $commentaire) {
                        $commentaires = $commentaires. $commentaire['com'] . '<br><br>';
                    } 
                    
                    echo '<div class="container">
                            <div class="row justify-content-center piki">
                                <div class="header-home col-12 col-md-8">
                                    <div class="nom-user-index">
                                        <a><img src="' . $fetchpasall['image_lien'] .'" width="50px" height="50px" class="img-fluid suzilikeaboy" alt="Responsive image" >' . ' ' . $images_liste['user_name'].'</a>
                                    </div>
                                </div>
                                <div class="image-home col-12 col-md-8">
                                <img src="' . $images_liste["image_lien"] .' " width="550px" height="550px" class="img-fluid image-profil" alt="Responsive image" >
                                </div>
                                <div class="image-like col-12 col-md-8">
                                    <a<<i class="far fa-heart"></i>: like
                                </div>
                                <div class="image-commentaire col-12 col-md-8">
                                <i class="far fa-comment"></i> ' . $commentaires .'
                                <form method="post" action="../traitement/traitement_commentaire.php">
                                <label for="Commentaires ">Commentaires  : </label>
                                <textarea name="com" id="Commentaires "></textarea><br><br>
                                <input type="hidden" name="image_id" value="' . $images_liste["id"] . '">
                                <input type="submit" value="Envoyer">
                            </form>
                            </div>
                            </div>
                        </div>';
                }
            
            }

            
            ?>
    </section>


    <footer>

        <nav class="row navbar fixed-bottom navbar-light bg-light">
            <a class="logo mx-auto navbar-brand" href="index.php"><i class="fas fa-home"></i></a>
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