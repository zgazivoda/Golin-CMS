<?php
ob_start();
session_start();
                if(isset($_SESSION['logged_in'])){
                if(($_SESSION['logged_in'])==="true"){
                }
                }else{
                    echo "<h2>Kako biste pregledali sadrzaj ove stranice morate biti ulogovani. Bicete proslijedjeni na login stranicu</h2>";
                    header( "refresh:5; url=/cms/golin.php" ); 
                    die;
                } 
include "upitiCMS.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="/cms/css/cms.css">
<body>

<div class="container-fluid">
   
    <div class="row" id="zaglavlje">
        <div class="col-lg-7 offset-1 col-md-6 col-sm-12">
                  <?php echo "<h3> Dobrodosli " . $_SESSION['prezime'] . ", ". $_SESSION['ime'] . "</h3>"; ?> 
        </div>
                <form action="admin.php" method="post">
                    <input type="submit" value ="Admin Panel" class="btn btn-primary bg-warning btn btn-primary bg-warning-primary bg-warning ml-4 mr-2">
                </form>
                <form action="adminlogout.php" method="post">
                        <input type="submit" name="logout" value="Logout" class="btn btn-primary bg-warning btn btn-primary bg-warning-primary bg-warning">
                </form>

</div>
<?php include "navbarCMS.php"; ?>
<?php include "homePageCMS.php"; ?>
<?php include "partOneCMS.php"; ?>
<?php include "clientsCMS.php"; ?>
<?php include "goAllInCMS.php"; ?>
<?php include "goAllInCardsCMS.php"; ?>
<?php include "officesCMS.php"; ?>
<?php include "contactCMS.php"; ?>
</div>
    
</body>
</html>