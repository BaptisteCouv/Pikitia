<?php
session_start();
include '../bdd.php';

$req = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
$req->execute(array($_POST['pseudo']));
$user = $req->fetch();

$req = $bdd->prepare('SELECT * FROM users WHERE mdp = ?');
$req->execute(array($_POST['mdp']));
$user2 = $req->fetch();

if ($user && $user2) {
    $_SESSION['id'] = $user['id'];
    $_SESSION['user'] = $_POST['pseudo']; 
    header("location: ../profil_user.php");
} else {
    $errConnexion = "Oups, pseudo ou mot de passe incorrect!";
    header("Location: ../connexion.php?errConnexion=$errConnexion");
}