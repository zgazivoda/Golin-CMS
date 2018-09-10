<?php 
include "baza.php";

//Ukoliko korisnik unese datum i vrijeme i pritisne opciju filtriraj, upiti za prikaz tabela se mijenjaju na osnovu unijetih filtera.
if (isset($_POST['filtriraj'])) {
    
//Preuzimanje svih unijetih filtera
    $datumNovi1=$_POST['datumNovi1'];
    $datumNovi2=$_POST['datumNovi2'];
    $vrijemeNovo1=$_POST['vrijemeNovo1'];
    $vrijemeNovo2=$_POST['vrijemeNovo2'];

//Promjena upita za prikaz na osnovu unijetih filtera
$upitSviSastanci = "SELECT * FROM sastanci WHERE (datum BETWEEN '" .$datumNovi1 ."' AND '" .$datumNovi2. "') AND (vrijeme BETWEEN '".$vrijemeNovo1 ."' AND '". $vrijemeNovo2 . "') AND status_sastanka = 'neodlucen'";

$upitPrihvaceni = "SELECT * FROM sastanci WHERE (datum BETWEEN '" .$datumNovi1 ."' AND '" .$datumNovi2. "') AND (vrijeme BETWEEN '".$vrijemeNovo1 ."' AND '". $vrijemeNovo2 . "') AND status_sastanka = 'prihvacen'";

$upitOdbijeni = "SELECT * FROM sastanci WHERE (datum BETWEEN '" .$datumNovi1 ."' AND '" .$datumNovi2. "') AND (vrijeme BETWEEN '".$vrijemeNovo1 ."' AND '". $vrijemeNovo2 . "') AND status_sastanka = 'odbijen'";
}
else{
//Ukoliko nema filtera, upiti prikazuju sve zapise iz svih tabela
        $upitSviSastanci = "SELECT * FROM sastanci WHERE status_sastanka = 'neodlucen'";
        $upitPrihvaceni = "SELECT * FROM sastanci WHERE status_sastanka = 'prihvacen'";
        $upitOdbijeni = "SELECT * FROM sastanci WHERE status_sastanka = 'odbijen'";
}

//Opcija za resetovanje prikaza u svim tabelama, prikazivace se svi zapisi
if (isset($_POST['resetuj'])) {
    $upitSviSastanci = "SELECT * FROM sastanci WHERE status_sastanka = 'neodlucen'";
    $upitPrihvaceni = "SELECT * FROM sastanci WHERE status_sastanka = 'prihvacen'";
    $upitOdbijeni = "SELECT * FROM sastanci WHERE status_sastanka = 'odbijen'";
}

//Upit za neodlucene sastanke
            $select_svih_sastanaka = mysqli_query($connection, $upitSviSastanci);
                if(!$upitSviSastanci){
                    die ("Query failed" . mysqli_error($connection));
                    }
            $sastanci = array();
                while($row = mysqli_fetch_array($select_svih_sastanaka)){
                        $sastanci[]=$row;
                    } 
//Upit za prihvacene sastanke
            $select_svih_prihvacenih = mysqli_query($connection, $upitPrihvaceni);
                if(!$upitPrihvaceni){
                die ("Query failed" . mysqli_error($connection));
                    }
            $sastanciPrihvaceni = array();
                while($row = mysqli_fetch_array($select_svih_prihvacenih)){
                        $sastanciPrihvaceni[]=$row;
                    }
//Upit za odbijene sastanke
            $select_svih_odbijenih = mysqli_query($connection, $upitOdbijeni);
                    if(!$upitOdbijeni){
                die ("Query failed" . mysqli_error($connection));
                     }
            $sastanciOdbijeni = array();
                    while($row = mysqli_fetch_array($select_svih_odbijenih)){
                            $sastanciOdbijeni[]=$row;
                   }
?>