<?php
include "filtriranje_sastanaka.php";
session_start();
                if(isset($_SESSION['logged_in'])){
                if(($_SESSION['logged_in'])==="true"){
                }
                }else{
                    echo "<h2>Kako biste pregledali sadrzaj ove stranice morate biti ulogovani. Bicete proslijedjeni na login stranicu</h2>";
                    header( "refresh:5; url=/cms/golin.php" ); 
                    die;
                } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="/cms/css/administrator.css">
    <meta charset="UTF-8">
    <title>GolinPG Admin's Page</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-6 col-sm-12">
                  <?php echo "<h3> Dobrodosli " . $_SESSION['prezime'] . ", ". $_SESSION['ime'] . "</h3>"; ?> 
        </div>
                <form action="pass_change.php" method="post">
                        <input type="submit" value ="My Profile" class="btn btn-primary bg-warning btn btn-primary bg-warning-primary bg-warning ml-4 mr-2">
                </form>
                <form action="cms.php" method="post">
                        <input type="submit" value ="CMS" class="btn btn-primary bg-warning btn btn-primary bg-warning-primary bg-warning mr-2">
                </form>
                <form action="adminlogout.php" method="post">
                        <input type="submit" name="logout" value="Logout" class="btn btn-primary bg-warning btn btn-primary bg-warning-primary bg-warning">
                </form>
    </div>
    
<br>

<h2 class="text-center">Novi sastanci</h2>

<div class="row">
    <div class="col-12">
        <form action="admin.php" method="post">
            <label>Pocetni datum</label><input type="date" name="datumNovi1" id="datumNovi1">
            <label>Krajnji datum</label><input type="date" name="datumNovi2" id="datumNovi2"> 
            <label>Pocetno vrijeme</label><input type="time" name="vrijemeNovo1" value="00:00">
            <label>Krajnje vrijeme</label><input type="time" name="vrijemeNovo2" value="23:59">
            <input type="submit" name="filtriraj" value ="Filtriraj" class="btn btn-primary bg-warning">
            <input type="submit" name="resetuj" value ="Reset" class="btn btn-primary bg-warning btn">
        </form>
    </div>
</div>

<div class="row">
    <div class="table-responsive">
        <table class="table table-dark col-12" id="noviSastanci">
            <thead>
                    <tr>
                    <th>ID</th>
                    <th>Ime i Prezime</th>
                    <th>Firma</th>
                    <th>E_mail</th>
                    <th>Broj Telefona</th>
                    <th>Datum</th>
                    <th>Vrijeme</th>
                    <th>Promijeni status</th>
                    </tr>
            </thead>
            <tbody>
                    <form action="admin.php" method="post">
                        <?php $i=1;
                        foreach($sastanci as $s){
                        echo "<tr><td><input type='hidden' name=red".$i." . value=". $s['id']. ">" . $s['id']. 
                             "</td><td>". $s['ime_prezime'].
                             "</td><td>". $s['firma'].
                             "</td><td>". $s['e_mail']. 
                             "</td><td>". $s['broj_telefona'].
                             "</td><td>". $s['datum'].
                             "</td><td>". $s['vrijeme'].
                             "</td><td>". 
                             "<input type='radio' name=izbor".$i." value='prihvati'> Prihvati
                              <input type='radio' name=izbor".$i. " value='odbij'> Odbij"
                            ."</td><tr>";
                            $i++;}?>
            </tbody> 
        </table> 
    </div>    
</div>    
<div class="row">
    <div class="col-1 offset-10">
        <input type="submit" name="procesuiraj" value ="Procesuiraj" class="btn btn-primary bg-warning">
     </div> 
             </form>
</div> 

<h2 class="text-center">Prihvaceni sastanci</h2>

<div class="row">
    <div class="table-responsive">
        <table class="table table-dark col-12" id="prihvaceniSastanci">
            <thead>
                <tr>
                <th>ID</th>
                <th>Ime i Prezime</th>
                <th>Firma</th>
                <th>E_mail</th>
                <th>Broj Telefona</th>
                <th>Datum</th>
                <th>Vrijeme</th>
                <th>Promijeni status</th>
                </tr>
            </thead>
            <tbody>            
                <form action="admin.php" method="post">
                <?php $i=1;
                    foreach($sastanciPrihvaceni as $s){
                echo "<tr><td><input type='hidden' name=redPrihvacen".$i." . value=". $s['id']. ">" . $s['id']. 
                     "</td><td>". $s['ime_prezime'].
                     "</td><td>". $s['firma'].
                     "</td><td>". $s['e_mail']. 
                     "</td><td>". $s['broj_telefona'].
                     "</td><td>". $s['datum'].
                     "</td><td>". $s['vrijeme'].
                     "</td><td>". 
                     "<input type='radio' name=izborPrihvacen".$i. " value='odbij'> Odbij"
                    ."</td><tr>";
                    $i++;}?>
            </tbody> 
        </table>
    </div>
</div>
   
<div class="row">
    <div class="col-1 offset-11">
        <input type="submit" name="odbij" value ="Odbij" class="btn btn-primary bg-warning ">
     </div> 
             </form>
</div> 

<h2 class="text-center">Odbijeni sastanci</h2>

<div class="row">
    <div class="table-responsive">
        <table class="table table-dark col-12" id="odbijeniSastanci">
            <thead>
                <tr>
                <th>ID</th>
                <th>Ime i Prezime</th>
                <th>Firma</th>
                <th>E_mail</th>
                <th>Broj Telefona</th>
                <th>Datum</th>
                <th>Vrijeme</th>
                <th>Promijeni status</th>
                </tr>
            </thead>
            <tbody>
            <form action="admin.php" method="post">
            <?php $i=1;
                foreach($sastanciOdbijeni as $s){
            echo "<tr><td><input type='hidden' name=redOdbijen".$i." . value=". $s['id']. ">" . $s['id']. 
                 "</td><td>". $s['ime_prezime'].
                 "</td><td>". $s['firma'].
                 "</td><td>". $s['e_mail']. 
                 "</td><td>". $s['broj_telefona'].
                 "</td><td>". $s['datum'].
                 "</td><td>". $s['vrijeme'].
                 "</td><td>". 
                 "<input type='radio' name=izborOdbijen".$i. " value='prihvati'> Prihvati/Obrisi"
                ."</td><tr>";
                $i++;}?>
            </tbody> 
        </table>
    </div>
</div>
<div class="row">
    <div class="offset-10">
        <input type="submit" name="prihvati" value ="Prihvati" class="btn btn-primary bg-warning">
        <input type="submit" name="ObrisiOdbijeni" value ="Obrisi" class="btn btn-primary bg-warning">
     </div> 
             </form>
</div> 

</div>
</body>
</html>