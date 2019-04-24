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

// $uploads_dir = '../img/user_img';
// $tmp_name = $_FILES["fileselect"]["tmp_name"];
// var_dump($tmp_name);
// // basename() peut empêcher les attaques de système de fichiers;
// // la validation/assainissement supplémentaire du nom de fichier peut être approprié
// $name = basename($_FILES["fileselect"]["name"]);
// move_uploaded_file($tmp_name, "$uploads_dir/$name");

$target_dir = "../img/user-img/";
$target_file = $target_dir . basename($_FILES["fileselect"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileselect"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileselect"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileselect"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileselect"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}