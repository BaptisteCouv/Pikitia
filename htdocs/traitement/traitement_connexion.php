<?php
include '../bdd.php';

$reponse = $bdd->query('SELECT * FROM users');

while ($donnees = $reponse->fetch()){
    echo $donnees['pseudo'];
    echo $donnees['mdp'];
};

$reponse->closeCursor(); 