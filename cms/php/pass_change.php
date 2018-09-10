<?php
include "adminlogin.php";
//Prije svega provjera da li je admin ulogovan
                if(isset($_SESSION['logged_in'])){
                if(($_SESSION['logged_in'])==="true"){
                }
                }else{
                    echo "<h1 class='text-center'>Kako biste pregledali sadrzaj ove stranice morate biti ulogovani. Bicete proslijedjeni na login stranicu</h1>";
                    header("refresh:5; url=golin.html" ); 
                    die;
                }

if(isset($_POST['change'])){
    //Smjestanje unosa u varijable
    $trenutniPass = $_POST['trenutniPass'];
    $noviPass = $_POST['noviPass'];
    $noviPassPotvrdjeno = $_POST['noviPassPotvrdjeno'];

//Provjera za MySQL injection
    $trenutniPass = mysqli_real_escape_string($connection,$trenutniPass);
    $noviPass = mysqli_real_escape_string($connection,$noviPass);
    $noviPassPotvrdjeno = mysqli_real_escape_string($connection,$noviPassPotvrdjeno);
    
//Preuzimanje passworda-a i Id-a korisnika iz sessiona kako bi se password promijenio za ulogovanog korisnika (u slucaju da ima vise korisnika)
    $password_session =$_SESSION['password'];
    $id_session =$_SESSION['id'];

//Iako je vec provjereno u JS-u, ponovo provjeravam da li su novi password i potvrdjeni novi password indenticni
if($noviPass === $noviPassPotvrdjeno){
    
    $upit= "SELECT randSalt FROM login";
    $randSalt_query = mysqli_query($connection,$upit);
    if(!$randSalt_query){
        die("Query Failed" . mysqli_error($connection));
    }
    $row = mysqli_fetch_array($randSalt_query);
    $salt = $row['randSalt'];
    
    $trenutniPass = crypt($trenutniPass, $salt);
    $trenutniPass = crypt($trenutniPass,$password_session);
    
//Ukoliko jesu, provjerava se da li je trenutni password indentican onom u bazi
if($trenutniPass === $password_session){
    
    //Hashovanje passworda
    $noviPassPotvrdjeno = crypt($noviPassPotvrdjeno, $salt);
    
//Izvrsava se UPDATE upit i password u bazi se mijenja
    $upit = "UPDATE login SET password = '".$noviPassPotvrdjeno."' WHERE login.id = '" .$id_session . "'";
    $odradi_upit = mysqli_query($connection, $upit);
/*Takodje je potrebno update-ovati i password u sesiji, kako bi korisnik odmah opet mogao da mijenja password    
  Da je ovaj korak preskocen korisnik bi mogao mijenjati password jednom po sesiji (morao bi se relogovati kako bi ponovo promijenio password).*/
    $_SESSION['password'] = $noviPassPotvrdjeno;
        if($odradi_upit){
            echo "<br><h1 class='text-center'>Uspjesno ste promijenili password </h1>";
        }}
            else{                    
            echo "<br><h1 class='text-center'>Uneseni password je pogresan. Molimo pokusajte ponovo </h1>";
            }   }   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin MyProfile</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="/cms/css/pass_change.css">
</head>
<body>
<div class="container mt-5">
        <div class="row">
           <div class="col-lg-5 offset-lg-4 col-md-6 offset-md-2 col-sm-12 offset-sm-0">
                <?php echo "<h1> " . $_SESSION['prezime'] . ", ". $_SESSION['ime']. "</h1>"; ?>
           </div>
                <form action="admin.php" method="post">
                <input type="submit" value="Admin Panel" class="btn btn-primary bg-warning mr-2 mt-2">
                </form>                
                <form action="adminlogout.php" method="post">
                        <input type="submit" name="logout" value="Logout" class="btn btn-primary bg-warning mt-2">
                </form>

        </div>
        <div class="form-group">
        <form action="pass_change.php" method="post" onsubmit="return provjeri()">
        <br><br>
                <input class="text-center form-control col-lg-4 offset-lg-4 col-md-12 offset-md-0 col-sm-12 offset-sm-0" type="password" name="trenutniPass" Placeholder="Sadasnji password" required>
        <br><br>
                <input class="text-center form-control col-lg-4 offset-lg-4 col-md-12 offset-md-0 col-sm-12 offset-sm-0" type="password" name="noviPass" Placeholder="Novi password" id="noviPass" required>
        <br><br>
                <input class="text-center form-control col-lg-4 offset-lg-4 col-md-12 offset-md-0 col-sm-12 offset-sm-0" type="password" name="noviPassPotvrdjeno" Placeholder="Potvrdi novi password" id="noviPassPotvrdjeno"  required>
        <br><br>
                <input type="submit" name="change" value ="Promijeni" class="btn btn-primary bg-warning col-lg-2 offset-lg-5 col-md-8 offset-md-2 col-sm-12 offset-sm-0">
        </form>
        </div>
</div>  
<script>
    
//Provjera da li su unijeti novi password i njegova potvrda isti, ukoliko jesu funkcija vraca true i elementi se prosledjuju u PHP-u kroz post.
//U Suprotnom se javlja greska
    function provjeri(){
var fistInput = document.getElementById("noviPass").value;
var secondInput = document.getElementById("noviPassPotvrdjeno").value;
    if(fistInput !== secondInput){
    alert("Unijeti novi passwordi se ne poklapaju. Molimo pokusajte ponovo");
                return false;
}else{
    return true;
}
        }

</script>
    
</body>
</html>