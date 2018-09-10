<?php
    $upit = "SELECT * FROM clients";
    $select_sve = mysqli_query($connection,$upit);
        if(!$select_sve){
            die ("Query failed" . mysqli_error($connection));
                    }
    $slika = array();
    $tekst = array();
    //Smjestanje svih linkova iz baze u niz, kako bi se lakse prikazali unutar HTML-a.
    while($row = mysqli_fetch_assoc($select_sve)) {
    $tekst[] = $row['tekst']; 
    $slika[] = $row['slika']; 
    }

?>
<div id="clients">
   <h1 class="text-center">CLIENTS</h1>
    <br>
    <div class="container">
       <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                    <img src="<?php echo $slika[0]; ?>" class="img-responsive">
                    <h4 class="text-left"><?php echo $tekst['0'];?></h4>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="<?php echo $slika[1]; ?>" class="img-responsive">
                <h4 class="text-left"><?php echo $tekst['1'];?></h4>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="<?php echo $slika[2]; ?>" class="img-responsive">
                <h4 class="text-left"><?php echo $tekst['2'];?></h4>
            </div>
            </div>
        <div class="row" id="clientSlike2">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="<?php echo $slika[3]; ?>" class="img-responsive">
                <h4 class="text-left"><?php echo $tekst['3'];?></h4>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="<?php echo $slika[4]; ?>" class="img-responsive">
                <h4 class="text-left"><?php echo $tekst['4'];?></h4>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="<?php echo $slika[5]; ?>" class="img-responsive">
                <h4 class="text-left"><?php echo $tekst['5'];?></h4>
            </div>
        </div>
    </div>
</div>