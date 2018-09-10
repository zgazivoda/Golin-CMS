<?php
 session_start();
//Brisanje svih informacija iz sesije, kako bi se omogucio log out
if(isset($_POST['logout'])){
$_SESSION['id']=null;
$_SESSION['username']=null;
$_SESSION['password']=null;
$_SESSION['ime']=null;
$_SESSION['prezime']=null;
$_SESSION['logged_in']=null;
header('Location: /cms/golin.php');
}
?>