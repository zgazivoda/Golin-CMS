<?php            
    $upit = "SELECT * FROM partone";
    $select_sve = mysqli_query($connection,$upit);
        if(!$select_sve){
            die ("Query failed" . mysqli_error($connection));
                    }
            $naslov1 = array();
            $naslov2 = array();
            $paragraf1 = array();
            $paragraf2 = array();
            $paragraf3 = array();
            $slika = array();

    while($row = mysqli_fetch_assoc($select_sve)) {
            $naslov1[] = $row['naslov1']; 
            $naslov2[] = $row['naslov2']; 
            $paragraf1[] = $row['paragraf1']; 
            $paragraf2[] = $row['paragraf2']; 
            $paragraf3[] = $row['paragraf3']; 
            $slika[] = $row['slika']; 
    }
?>
<div id="partOne">
    <div class="container">
        <div class="row  text-justify" id="prComm">
            <div class="col-lg-5 col-md-12 text-justify">
                <h2><?php echo $naslov1['0'];?><br><?php echo $naslov2['0'];?></h2>
                    <p><?php echo $paragraf1['0'];?></p>
                    <p><?php echo $paragraf2['0'];?></p>
                    <p><?php echo $paragraf3['0'];?></p>
            </div>
            <div class="col-lg-7 offset-lg-0 col-md-8 offset-md-2">
                <img src="<?php echo $slika[0]?>" class="img-fluid" id="fotka2">
            </div>
        </div>
        <div class="row" id="eventMgmt">
            <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2">
                <img src="<?php echo $slika[1]?>" class="img-fluid" id="fotka3">
            </div>
        
            <div class="col-lg-5 col-md-12 text-justify">
                <h2><?php echo $naslov1['1'];?><br><?php echo $naslov2['1'];?></h2>
                    <p><?php echo $paragraf1['1'];?></p>
                    <p><?php echo $paragraf2['1'];?></p>
                    <p><?php echo $paragraf3['1'];?></p>
            </div> 
     
        </div>  
        </div>  
</div>