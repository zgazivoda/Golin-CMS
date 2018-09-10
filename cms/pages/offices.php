<?php
    $upit2 = "SELECT * FROM offices";
    $select_sve_offices = mysqli_query($connection,$upit2);
        if(!$select_sve){
            die ("Query failed" . mysqli_error($connection));}
            $id_offices = array();
            $slika_offices = array();
            $tekst_offices = array();
            $i_offices=-1;
             
?>

<div id="offices">
<div class="container text-center">
     <nav class="navbar navbar-expand-lg navbar-expand-md navbar-expand-md" >
            <ul class="navbar-brand mx-auto">
              <li class="nav-item">
                <a class="nav-link" href="#"><h1>OFFICES</h1><a>
              </li>
            <ul class="navbar-nav mx-auto">
              <li class="nav-item ">
                <a class="nav-link" href="#"><h2>EMEA</h2><a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#"><h2>AMERICAS</h2><a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="#"><h2>ASIA</h2></a>
              </li>      
            </ul>
            </ul>
      </nav>
                     <div class="row">

          <?php
        while($row = mysqli_fetch_assoc($select_sve_offices)) {
            $id_offices[] = $row['id']; 
            $slika_offices[] = $row['slika'];
            $tekst_offices[] = $row['tekst'];
            $i_offices++;
            echo "
                <div class='col-lg-3 col-md-3 col-sm-12 mt-4'>
                    <img src='$slika_offices[$i_offices]' >
                    <h5 class='text-left'><h5>$tekst_offices[$i_offices]</h5>
                </div>"; 
        }?>
                  </div>

           
    
</div>
</div>