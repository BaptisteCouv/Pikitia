<?php
session_start();
session_destroy();

$deconnexionUser = "Vous êtes déconnecter !!";
header("Location: ../connexion.php?deconnexionUser=$deconnexionUser");