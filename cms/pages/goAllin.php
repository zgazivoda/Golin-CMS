<?php
    $upit = "SELECT * FROM goallin";
    $select_sve_goallin = mysqli_query($connection,$upit);
        if(!$select_sve){
            die ("Query failed" . mysqli_error($connection));
                    }
    //Smjestanje svih linkova iz baze u niz, kako bi se lakse prikazali unutar HTML-a.
    while($row = mysqli_fetch_assoc($select_sve_goallin)) {
            $naslov1 = $row['naslov1']; 
            $naslov2 = $row['naslov2'];
            $naslov3 = $row['naslov3'];
            $paragraf1 = $row['paragraf1'];
            $paragraf2 = $row['paragraf2'];
    }

    $upit2 = "SELECT * FROM goalliin_cards";
    $select_sve_goalliin_cards = mysqli_query($connection,$upit2);
        if(!$select_sve){
            die ("Query failed" . mysqli_error($connection));
                    }
    //Smjestanje svih linkova iz baze u niz, kako bi se lakse prikazali unutar HTML-a.
            $id = array();
            $slika = array();
            $naslov_card = array();
            $tekst = array();
            $i=-1;
?>
  <div id="goallin">
   <div class="text-center">
       <img src="/cms/resursi/go-all-in.gif" class="img-fluid mx-auto" id="logoGif">
    </div>

<div class="container">
    <div class="text-center text-white">
        <h3><?php echo $naslov1; ?></h3>
        <h6><?php echo $naslov2; ?></h6>
        <p> <?php echo $paragraf1; ?></p>
        <p> <?php echo $paragraf2; ?></p>
        <p> <?php echo $naslov3; ?></p>
    </div>
    <div class='card-deck text-white text-center'>
    <?php     
        while($row = mysqli_fetch_assoc($select_sve_goalliin_cards)) {
            $id[] = $row['id']; 
            $slika[] = $row['slika'];
            $naslov_card[] = $row['naslov']; 
            $tekst[] = $row['tekst'];
            $i++;
            echo "
                  <div class='card text-center'>
                    <img class='card-img-top mx-auto' src='$slika[$i]'>
                    <div class='card-body>
                      <h5 class='card-title'><h5>$naslov_card[$i]</h5>
                      <p class='card-text'><p>$tekst[$i]</p>
                    </div>
                  </div>"; }?>

</div>
</div>
</div>