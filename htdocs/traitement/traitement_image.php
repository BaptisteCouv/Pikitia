<?php
include '../bdd.php';

echo '<pre>' . var_export($_FILES['fileselect'], true) . '</pre>';

// $h = 3;

// $chemin = '/img/user_img';
// $nameResult = $_FILES['fileselect']['name'];
// echo '<pre>' . var_export($nameResult, true) . '</pre>';
// $tmp_nameResult = $_FILES['fileselect']['tmp_name'];
// echo '<pre>' . var_export($tmp_nameResult, true) . '</pre>';
// move_uploaded_file($_FILES['fileselect']['name'], "$chemin/$nameResult");

$uploads_dir = '/img/user_img';
$tmp_name = $_FILES["fileselect"]["tmp_name"];
var_dump($tmp_name);
// basename() peut empêcher les attaques de système de fichiers;
// la validation/assainissement supplémentaire du nom de fichier peut être approprié
$name = basename($_FILES["fileselect"]["name"]);
move_uploaded_file($tmp_name, "$uploads_dir/$name");