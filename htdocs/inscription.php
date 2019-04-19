<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pikitia | Connexion</title>
    <!-- NE JAMAIS METTRE DES LIEN BOOSTRAP ICI !!!!!!!!!!!!!!!!!!!!!!! -->
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    </head>
<body id="couleur">
    <header>
        <nav class="navbar fixed-top navbar-light bg-light">
            <a class="navbar-brand" href="#"><i class="fas fa-camera-retro"></i></a>
            <a class="navbar-brand" href="index.php"><h3>Pikitia</h3></a>
            <a class="navbar-brand" href="profil_user.php"><i class="fas fa-user"></i></a>
        </nav>
    </header>


    <section>
        <div class="container">
            <div class="row justify-content-center piki">
                <div class="connexion-user col-12 col-md-8 form-group">
                    <div class="row justify-content-center">
                        <div class="col-6 formulaire-connexion">
                            <h1>Inscription</h1>
                            <form action="traitement/traitement_inscription.php" method="post">
                                <input class="marg form-control" type="text" name="pseudo" placeholder="Entrer votre pseudo">
                                <input class="marg form-control" type="text" name="nom" placeholder="Entrer votre nom">
                                <input class="marg form-control" type="text" name="prenom" placeholder="Entrer votre prénom">
                                <input class="marg form-control" type="text" name="email" placeholder="Entrer votre @ email">
                                <input class="marg form-control" type="password" name="mdp" placeholder="Entrer votre mot de passe">
                                <button type="submit" class="marg btn btn-primary">Inscription</button>
                            </form>
                            <h4 class="marg">Déjà un compte chez <b>Pikitia</b>?<a href="connexion.php">Connectez-vous</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer>

    <nav class="row navbar fixed-bottom navbar-light bg-light">
            <a class="navbar-brand" href="#"><i class="fas fa-home"></i></a>
            <a class="navbar-brand" href="#"><i class="fas fa-search"></i></a>
            <a class="navbar-brand" href="#"><i class="far fa-plus-square"></i></a>
            <a class="navbar-brand" href="#"><i class="fas fa-location-arrow"></i></a>
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