<?php
include '../bdd.php';

if(!empty($_POST['pseudo']) || !empty($_POST['mdp'])){
    $req = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
    $req->execute(array($_POST['pseudo']));
    $user = $req->fetch();

    if($user){
        $errorIncription = " * Pseudo ou mot de passe déjà pris !";
        header("Location: ../inscription.php?erreurIncription=$errorIncription");
    }else{
        $req = $bdd->prepare('INSERT INTO users(pseudo, nom, prenom, email, mdp)
                      VALUES(?,?,?,?,?)'); 
        $req->execute(array($_POST['pseudo'], $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['mdp']));
        $validIncription = "Vous êtes bien inscrit à Pikitia :)";
        header("Location: ../connexion.php?validInscription=$validIncription");
    }
}else{
    header("Location: ../inscription.php");
}