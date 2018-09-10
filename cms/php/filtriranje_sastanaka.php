<?php
include "prikaz_sastanaka.php";
//Dobijanja broja redova iz baze, kako bi znao za koliko radio buttona treba proci tabelu
    $broj_neodlucenih = mysqli_num_rows($select_svih_sastanaka);
    $broj_prihvacenih = mysqli_num_rows($select_svih_prihvacenih);
    $broj_odbijenih = mysqli_num_rows($select_svih_odbijenih);

//Po default-u da budu odcekirani
        $prihvati_status = 'unchecked';
        $odbij_status = 'unchecked';

if (isset($_POST['procesuiraj'])) {
//For petlja prolazi kroz tabelu onoliko puta koliko i ima zapisa u njoj.
    for($i=1;$i<=$broj_neodlucenih;$i++){
        
//Da bi radilo samo kada korisnik izabere "privhati" ili "odbij", u suprotnom se ignorise
        if(isset($_POST['izbor'. $i])){
            $izbor = $_POST['izbor'. $i];
            $id = $_POST['red'.$i];
                     
//Ukoliko je izbor "prihvati", updateuje se u bazi i stranica se refreshuje
        if ($izbor == 'prihvati') {
            $prihvati_status = 'checked';       
            $upit = "UPDATE sastanci SET status_sastanka = 'prihvacen' WHERE sastanci.id =" .$id;
            $odradi_upit = mysqli_query($connection, $upit);
            if($odradi_upit){
                header("Refresh:0");
            }else{                    
                die ("Query failed" . mysqli_error($connection));
                 }
                }
            
//Ukoliko je izbor "odbij" , updateuje se u bazi i stranica se refreshuje
        else if ($izbor == 'odbij') {
            $odbij_status = 'checked';
            $upit = "UPDATE sastanci SET status_sastanka = 'odbijen' WHERE sastanci.id =" .$id;
            $odradi_upit = mysqli_query($connection, $upit);
            if($odradi_upit){
                header("Refresh:0");
            }else{                    
                die ("Query failed" . mysqli_error($connection));
                 }  
            } } } }

//Ovom opcijom sam omogucio korisniku da prihvaceni sastanak odbije. Isti je princip odradjen kao u gornjoj funkciji
if (isset($_POST['odbij'])) {
    for($i=1;$i<=$broj_prihvacenih;$i++){        
        if(isset($_POST['izborPrihvacen'. $i])){
            $izbor = $_POST['izborPrihvacen'. $i];
            $id = $_POST['redPrihvacen'.$i];
            $odbij_status = 'checked';
            
            $upit = "UPDATE sastanci SET status_sastanka = 'odbijen' WHERE sastanci.id =" .$id;
            $odradi_upit = mysqli_query($connection, $upit);
            if($odradi_upit){
                header("Refresh:0");
            }else{                    
                die ("Query failed" . mysqli_error($connection));
                 }
                } } }

//Ovom opcijom sam omogucio korisniku da odbijeni sastanak prihvati
    if (isset($_POST['prihvati'])) {
    for($i=1;$i<=$broj_odbijenih;$i++){        
        if(isset($_POST['izborOdbijen'. $i])){
            $izbor = $_POST['izborOdbijen'. $i];
            $id = $_POST['redOdbijen'.$i];            
            $prihvati_status = 'checked';
       
            $upit = "UPDATE sastanci SET status_sastanka = 'prihvacen' WHERE sastanci.id =" .$id;
            $odradi_upit = mysqli_query($connection, $upit);
            if($odradi_upit){
                header("Refresh:0");
            }else{                    
                die ("Query failed" . mysqli_error($connection));
                 }
                 } } }
//Ovom opcijom sam omogucio korisniku da odbijeni sastanak obrise
    if (isset($_POST['ObrisiOdbijeni'])) {
    for($i=1;$i<=$broj_odbijenih;$i++){        
        if(isset($_POST['izborOdbijen'. $i])){
            $izbor = $_POST['izborOdbijen'. $i];
            $id = $_POST['redOdbijen'.$i];            
            $prihvati_status = 'checked';
       
            $upit = "DELETE FROM sastanci WHERE id=".$id;
            $odradi_upit = mysqli_query($connection, $upit);
            if($odradi_upit){
                header("Refresh:0");
            }else{                    
                die ("Query failed" . mysqli_error($connection));
                 }
                 } } }
?>