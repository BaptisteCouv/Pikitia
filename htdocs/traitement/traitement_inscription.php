<?php
include '../bdd.php';



if(!empty($_POST['pseudo']) && !empty($_POST['mdp'])){
    $req = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
    $req->execute(array($_POST['pseudo']));
    $user = $req->fetch();

    if($user){
        echo "error deja pris 2";
    }else{
        $req = $bdd->prepare('INSERT INTO users(pseudo, nom, prenom, email, mdp)
                      VALUES(?,?,?,?,?)'); 
        $req->execute(array($_POST['pseudo'], $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['mdp']));
        header('Location: http://pikitia.loc/profil_user.php');
    }
}else{
    echo "error deja pris";
}


