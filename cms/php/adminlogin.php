<?php
//Da se uvrsti file u kom se nalazi konekcija na bazu podataka
include "baza.php";

//Pocetak session-a
 session_start();

//Provjera da li je korisnik pritisnuo dugme "login"
if(isset($_POST['login'])){
    
//Smjestanje vrijednosti iz forme (iz HTML-a) u varijable
            $username = $_POST['username'];
            $password = $_POST['password'];

//Provjera za SQL injection, sigurnosni korak prije slanja varijabli u bazu podataka
            $username = mysqli_real_escape_string($connection,$username);
            $password = mysqli_real_escape_string($connection,$password);
    
//Selektovanje korisnika iz baze podataka sa unijetim usernamemom
            $upit = "SELECT * FROM login WHERE username = '{$username}' ";
            $select_user_query = mysqli_query($connection, $upit);
            if(!$select_user_query){
                die ("Query failed" . mysqli_error($connection));
            }
            
/*  Ukoliko username ne postoji u bazu podataka, pojavice se greska "undefined variable" 
        pri javljanju da su pogresni username i pass. Zato sam ih definisao kao null da se ne bi greska javljala */
            $db_username = null; 
            $db_password = null;
            
/* Podaci iz query-ja se smjestaju u varijable "$db_username" i "$db_password" kako bi se mogle uporediti sa unesenim  */
            while($row = mysqli_fetch_array($select_user_query)){
                 $db_id = $row ['id'];
                 $db_ime = $row ['ime'];
                 $db_prezime = $row ['prezime'];
                 $db_username = $row ['username'];
                 $db_password = $row ['password'];
            }
    
    $upit= "SELECT randSalt FROM login";
    $randSalt_query = mysqli_query($connection,$upit);
    if(!$randSalt_query){
        die("Query Failed" . mysqli_error($connection));
    }
    $row = mysqli_fetch_array($randSalt_query);
    $salt = $row['randSalt'];
    
    $trenutniPass = crypt($trenutniPass, $salt);
    $password = crypt($password,$db_password);
    
/* Provjera da li uneseni username i password odgovaraju onome iz baze podataka 
    (username iz baze ce biti smjesten u $db_username samo ukoliko je pronadjen u bazi, ukoliko nije bice null i if nece proci).
    Naravno ovu if funkciju je moguce podijeliti u dvije, gdje bi se korisniku tacno moglo reci da je username ili password pogresan.
    Medjutim kako bi ovo vjerovatno bio mali sistem i broj korisnika bi bio manji, bolje je da uvijek javlja da su ili username ili
    password pogresni, kako bi se onemogucilo da neko ko random unosi username dodje do stvarnih username-a
    Ova if funkcija provjerava da li su unijeti username i password INDENTICNI onima u bazu*/

            if($username !== $db_username ||  $password !== $db_password){
                $poruka="Pogresan username ili password";
                echo "<script type='text/javascript'>
                            alert('$poruka'); 
                            window.location='/cms/golin.php';
                      </script>";     
                die;
            }
            if($username === $db_username &&  $password === $db_password){
//Da bi mogli da pristupimo ovim vrijednostima u drugim stranicu dodajemo vrijednost $db_username-a i ostalih varijabli u sesiju
                $_SESSION['id']=$db_id;                
                $_SESSION['ime']=$db_ime;
                $_SESSION['prezime']=$db_prezime;
                $_SESSION['username']=$db_username;
                $_SESSION['password']=$db_password;
                $_SESSION['logged_in']="true";
                header('Location: admin.php');
            }
}
?>