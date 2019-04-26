<?php
session_start();
include '../bdd.php';

$id_user = $_SESSION['id'];
$name_user =  $_SESSION['user'];
$image_date = date('Y-m-d G:i:s');

$target_dir = "../img/user-img/";
$target_files = $id_user . "_" . basename($_FILES["fileselect"]["name"]);
$target_file = $target_dir . $target_files;
$target_tmp = $_FILES['fileselect']['tmp_name'];
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($target_tmp, $target_file)) {
        $rep = $bdd->prepare('INSERT INTO images(user_id, image_lien, image_date, user_name)
                              VALUE (?,?,?,?)');
        $rep->execute(array($id_user, $target_file, $image_date, $name_user));
        header('Location: ../profil_user.php');
        die();
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
