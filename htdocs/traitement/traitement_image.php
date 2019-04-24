<?php
include '../bdd.php';

$target_dir = "../img/user-img/";
$target_file = $target_dir . basename($_FILES["fileselect"]["name"]);
$target_tmp = $_FILES['fileselect']['tmp_name'];
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
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
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
if ($_FILES["fileselect"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($target_tmp, $target_file)) {
        $rep = $bdd->prepare('INSERT INTO images(image_lien)
                              VALUE (?)');
        $rep->execute(array($target_file));
        
        echo '<pre>' . var_export($target_file, true) . '</pre>';
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

//header('Location: ../profil_user.php');
//die();