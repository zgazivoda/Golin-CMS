<?php 
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/cms/php/baza.php";
    include ($path);
?>

<!--Pocetna stranica koja uzima sadrzaj iz drugih stranica, radi preglednosti koda.-->
        <?php include "pages/header.php";?>
        <?php include "pages/adminLogin.php";?>
        <?php include "pages/navbar.php";?>
        <?php include "pages/homePage.php";?>
        <?php include "pages/formaZaZakazivanje.php";?>
        <?php include "pages/partOne.php";?>
        <?php include "pages/clients.php";?>
        <?php include "pages/goAllin.php";?>
        <?php include "pages/offices.php";?>
        <?php include "pages/contact.php";?> <br><br>
        <?php include "pages/footer.php";?>