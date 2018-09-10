<?php
include "baza.php";
//Zadavanje foldera gdje da se cuvaju slike, kod je preuzet sa W3 Schools
$target_dir = "../resursi/fotkeNove/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
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
if ($_FILES["fileToUpload"]["size"] > 10000000) {
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
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        //kako bi mogao da uploadujem absloute path u bazu
        $lokacijaSlike= "/cms./resursi/fotkeNove/".basename( $_FILES["fileToUpload"]["name"]);
        
        if(isset($_POST['uploadPicPartOne'])){
        $partOne_id = $_POST['partOne_slika_id'];
        $upit = "UPDATE partone SET slika = '$lokacijaSlike' WHERE id =".$partOne_id;
        $upload_sliku = mysqli_query($connection,$upit);
        header("Location: cms.php");
        }
        
        if(isset($_POST['uploadPicClient'])){
        $partOne_id = $_POST['client_slika_id'];
        $upit = "UPDATE clients SET slika = '$lokacijaSlike' WHERE id =".$partOne_id;
        $upload_sliku = mysqli_query($connection,$upit);
        header("Location: cms.php");
        }
        
        if(isset($_POST['uploadPicGoAllIn'])){
        $partOne_id = $_POST['goalliin_cards_slika_id'];
        $upit = "UPDATE goalliin_cards SET slika = '$lokacijaSlike' WHERE id =".$partOne_id;
        $upload_sliku = mysqli_query($connection,$upit);
        header("Location: cms.php");
        }
        
        if(isset($_POST['uploadPicOffices'])){
        $partOne_id = $_POST['offices_slika_id'];
        $upit = "UPDATE offices SET slika = '$lokacijaSlike' WHERE id =".$partOne_id;
        $upload_sliku = mysqli_query($connection,$upit);
        header("Location: cms.php");
        }
        
        if(isset($_POST['uploadNewPicOffices'])){
        $tekst = $_POST['tekstLinka10'];
        $upit = "INSERT INTO offices (slika,tekst) VALUES  ('$lokacijaSlike','$tekst')";
        $upload_sliku = mysqli_query($connection,$upit);
        header("Location: cms.php");
        }
        
        if(isset($_POST['uploadNewPicCards'])){
        $naslov = $_POST['tekstLinka12'];
        $tekst = $_POST['tekstLinka13'];
        $upit = "INSERT INTO goalliin_cards (slika,naslov,tekst) VALUES  ('$lokacijaSlike','$naslov','$tekst')";
        $upload_sliku = mysqli_query($connection,$upit);
        header("Location: cms.php");
        }
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
