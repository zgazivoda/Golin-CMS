<?php
//Da se uvrsti file u kom se nalazi konekcija na bazu podataka
include "baza.php";
//Provjera da li je korisnik pritisnuo dugme "zakazi sastanak"
   if(isset($_POST['zakazi'])){  
                        
            //Smjestanje vrijednosti iz forme (iz HTML-a) u varijable
                        $ime_prezime = $_POST['ime_prezime'];
                        $firma = $_POST['firma'];
                        $e_mail = $_POST['e_mail'];
                        $broj_telefona = $_POST['broj_telefona'];
                        $datum = $_POST['datum'];
                        $vrijeme = $_POST['vrijeme'];
       
            //Provjera za SQL injection, sigurnosni korak prije slanja varijabli u bazu podataka
                        $ime_prezime = mysqli_real_escape_string($connection,$ime_prezime);
                        $firma = mysqli_real_escape_string($connection,$firma);
                        $e_mail = mysqli_real_escape_string($connection,$e_mail);
                        $broj_telefona = mysqli_real_escape_string($connection,$broj_telefona);
                        $datum = mysqli_real_escape_string($connection,$datum);
                        $vrijeme = mysqli_real_escape_string($connection,$vrijeme);
            
            /*MySQL query za unos varijabli u bazu podataka. Query sam dobio kroz PHPmyAdmin,
            kada sam testirao unos, preskace se kolona "id" jer je auto increment */
                        $unos= "INSERT INTO sastanci(ime_prezime, firma, e_mail, broj_telefona, datum, vrijeme)" .
                        " VALUES ('$ime_prezime','$firma','$e_mail','".$broj_telefona ."','".$datum ."','".$vrijeme ."')";
            
            //Ukoliko se query uspjesno izvrsi, stampa se poruka i 
                       if(mysqli_query($connection,$unos)){
                       $poruka = "Uspjesno ste rezervisali, ocekujte poziv uskoro!";
                           
            //Slanje mail-a administratoru

            //korisnik se redirect-a na pocetnu stranicu
                    echo "<script type='text/javascript'>
                                alert('$poruka'); 
                                window.location='/cms/golin.php';
                                 </script>";     
                           
            //U suprotnom se stampa eror koji objasnjava zasto se query nije izvrsio
                        } else{
                            die ("MYSQL Error: " . mysqli_error($connection)); 
                                }
   }
?>