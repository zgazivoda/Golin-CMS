<?php            
    $upit = "SELECT * FROM contact";
    $select_sve = mysqli_query($connection,$upit);
        if(!$select_sve){
            die ("Query failed" . mysqli_error($connection));
                    }

    while($row = mysqli_fetch_assoc($select_sve)) {
            $naslov = $row['naslov']; 
            $adresa = $row['adresa']; 
            $grad_drzava = $row['grad_drzava']; 
            $broj_telefona = $row['broj_telefona']; 
            $e_mail = $row['e_mail']; 
    }
?>
<div id="contact">
<div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-12" id="mapa">
            </div>
            <div class="col-lg-6 col-md-12 text-center" id="contactTekst">
                <h1><?php echo $naslov; ?></h1>
                <h5><?php echo $adresa; ?><br><?php echo $grad_drzava; ?></h5>
                <br>
                <h5><?php echo $broj_telefona; ?></h5>
                <br>
                <h5><?php echo $e_mail; ?></h5>
            </div>
            </div>
</div>
</div>

