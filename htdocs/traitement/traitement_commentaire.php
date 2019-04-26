<?php
session_start();
include '../bdd.php';

$commentaires = $_POST['com'];
$image_id= $_POST["image_id"];

$req = $bdd->prepare('INSERT INTO commentaire(com, user_id, image_id) VALUES(?,?,?)');
$req->execute(array($commentaires, $_SESSION['id'], $image_id));
header("Location: ../index.php");

