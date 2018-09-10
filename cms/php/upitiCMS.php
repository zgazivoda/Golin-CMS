<?php 
include "baza.php";

//Upiti za prikaz i update navbar-a
    $upit = "SELECT * FROM navbar";
    $select_sve = mysqli_query($connection,$upit);
        if(isset($_POST['updateNavbar'])){
            $navbar_id = $_POST['navbar_ID'];
            $tekstLinka = $_POST['tekstLinka'];
            //kako bi omogucio proslijedjivanje specijalnih karaktera tipa apostrofa.
            $tekstLinka = mysqli_real_escape_string($connection,$tekstLinka);
            $promijeni = "UPDATE navbar SET link = '$tekstLinka' WHERE id={$navbar_id}";
            $promijeni_navbar = mysqli_query($connection,$promijeni);
            header("Location: cms.php");
        }

//Upiti za prikaz i update homepage-a
    $upit2 = "SELECT * FROM homepage";
    $select_sve_homepage = mysqli_query($connection,$upit2);
        if(isset($_POST['updateHomePage'])){
            $homePage_column = $_POST['homePage_column'];
            $tekstLinka = $_POST['tekstLinka2'];
            $tekstLinka = mysqli_real_escape_string($connection,$tekstLinka);
            $promijeni2 = "UPDATE homepage SET {$homePage_column} = '$tekstLinka' WHERE id=1";
            $promijeni_homepage = mysqli_query($connection,$promijeni2);
            header("Location: cms.php");
    }

//Upiti za prikaz i update prvog dijela
    $upit3 = "SELECT * FROM partone";
    $select_sve_partone = mysqli_query($connection,$upit3);
        if(isset($_POST['updatePartOne'])){
            $partOne_id = $_POST['partOne_id'];
            $partOne_column = $_POST['partOne_column'];
            $tekstLinka = $_POST['tekstLinka3'];
            $tekstLinka = mysqli_real_escape_string($connection,$tekstLinka);
            $promijeni3 = "UPDATE partone SET {$partOne_column} = '$tekstLinka' WHERE id=".$partOne_id;
            $promijeni_homepage = mysqli_query($connection,$promijeni3);
            header("Location: cms.php");
    }

//Upiti za prikaz i update klijenata
    $upit4 = "SELECT * FROM clients";
    $select_sve_clients = mysqli_query($connection,$upit4);
        if(isset($_POST['updateClients'])){
            $clients_id = $_POST['client_ID'];
            $tekstLinka = $_POST['tekstLinka4'];
            $tekstLinka = mysqli_real_escape_string($connection,$tekstLinka);
            $promijeni4 = "UPDATE clients SET tekst = '$tekstLinka' WHERE id=".$clients_id;
            $promijeni_clients = mysqli_query($connection,$promijeni4);
            header("Location: cms.php");
    }

//Upiti za prikaz i update go all in 
    $upit6 = "SELECT * FROM goallin";
    $select_sve_goallin = mysqli_query($connection,$upit6);
        if(isset($_POST['updateGoAllIn'])){
            $goallin_column = $_POST['goAllIn_column'];
            $tekstLinka = $_POST['tekstLinka6'];
            $tekstLinka = mysqli_real_escape_string($connection,$tekstLinka);
            $promijeni2 = "UPDATE goallin SET {$goallin_column} = '$tekstLinka' WHERE id=1";
            $promijeni_homepage = mysqli_query($connection,$promijeni2);
            header("Location: cms.php");
    }

//Upiti za prikaz i update go all in dijela za kartice
    $upit7 = "SELECT * FROM goalliin_cards";
    $select_sve_goallin_cards = mysqli_query($connection,$upit7);
        if(isset($_POST['updateGoAllInCards'])){
            $goallin_cards_column = $_POST['goAllInCards_column'];
            $goallin_cards_id = $_POST['goAllInCards_ID'];
            $tekstLinka = $_POST['tekstLinka8'];
            $tekstLinka = mysqli_real_escape_string($connection,$tekstLinka);
            $promijeni2 = "UPDATE goalliin_cards SET {$goallin_cards_column} = '$tekstLinka' WHERE id=".$goallin_cards_id;
            $promijeni_homepage = mysqli_query($connection,$promijeni2);
            header("Location: cms.php");
    }
        if(isset($_POST['deleteGoAllInCards'])){
            $cards_id = $_POST['delete_goAllInCards_ID'];
            $promijeni4 = "DELETE FROM goalliin_cards WHERE id=".$cards_id;
            $promijeni_clients = mysqli_query($connection,$promijeni4);
            header("Location: cms.php");
            }

//Upiti za prikaz,update i brisanje office 
    $upit8 = "SELECT * FROM offices";
    $select_sve_offices = mysqli_query($connection,$upit8);
        if(isset($_POST['updateOffices'])){
            $offices_id = $_POST['offices_ID'];
            $tekstLinka = $_POST['tekstLinka9'];
            $tekstLinka = mysqli_real_escape_string($connection,$tekstLinka);
            $promijeni4 = "UPDATE offices SET tekst = '$tekstLinka' WHERE id=".$offices_id;
            $promijeni_clients = mysqli_query($connection,$promijeni4);
            header("Location: cms.php");
            }
        if(isset($_POST['deleteOffices'])){
            $offices_id = $_POST['delete_offices_ID'];
            $promijeni4 = "DELETE FROM offices WHERE id=".$offices_id;
            $promijeni_clients = mysqli_query($connection,$promijeni4);
            header("Location: cms.php");
            }

//Upiti za prikaz,update i brisanje contact 
    $upit5 = "SELECT * FROM contact";
    $select_sve_contact = mysqli_query($connection,$upit5);
        if(isset($_POST['updateContacts'])){
            $contact_column = $_POST['contact_column'];
            $tekstLinka = $_POST['tekstLinka7'];
            $tekstLinka = mysqli_real_escape_string($connection,$tekstLinka);
            $promijeni2 = "UPDATE contact SET {$contact_column} = '$tekstLinka' WHERE id=1";
            $promijeni_homepage = mysqli_query($connection,$promijeni2);
            header("Location: cms.php");
    }
?>