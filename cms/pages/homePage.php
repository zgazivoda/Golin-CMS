<?php    
    $upit = "SELECT * FROM homePage";
    $select_sve = mysqli_query($connection,$upit);
        if(!$select_sve){
            die ("Query failed" . mysqli_error($connection));
                    }
    //Smjestanje svih linkova iz baze u niz, kako bi se lakse prikazali unutar HTML-a.
    while($row = mysqli_fetch_assoc($select_sve)) {
    $naslov1 = $row['naslov1']; 
    $naslov2 = $row['naslov2'];
    $paragraf = $row['paragraf'];
    $dugmeIme = $row['dugmeIme'];
    }
?>            

   <div id="homePage">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-1">
                <h1><?php echo $naslov1?><br><?php echo $naslov2?></h1>
                <p class="text-left"><?php echo $paragraf?></p>
                <button type="button" data-toggle="modal" data-target="#formaZakazi" class="btn btn-primary btn-warning" id="zakazi"><?php echo $dugmeIme?></button>
            </div>
            </div>
        </div>
</div>
