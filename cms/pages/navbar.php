<?php            
    $upit = "SELECT * FROM navbar";
    $select_sve = mysqli_query($connection,$upit);
        if(!$select_sve){
            die ("Query failed" . mysqli_error($connection));
                    }
    //Smjestanje svih linkova iz baze u niz, kako bi se lakse prikazali unutar HTML-a.
    while($row = mysqli_fetch_assoc($select_sve)) {
    $linkovi[] = $row['link']; 
    }
?>

<div id="navbar1">
<div class="container">
 <nav class="navbar navbar-expand-lg navbar-expand-md" >
    <img src="/cms/resursi/Logo%20GolinPG.svg" class="col-lg-2 col-md-2">
    <ul class="navbar-nav offset-lg-2 offset-md-0">
      <li class="nav-item">
        <a class="nav-link" href="#prComm"><?php echo $linkovi['0'];?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#eventMgmt"><?php echo $linkovi['1'];?><a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#clients"><?php echo $linkovi['2'];?><a>
      </li>      
       <li class="nav-item">
        <a class="nav-link" href="#goallin"><?php echo $linkovi['3'];?><a>
      </li>      
       <li class="nav-item">
        <a class="nav-link" href="#offices"><?php echo $linkovi['4'];?><a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact"><?php echo $linkovi['5'];?><a>
      </li>
    </ul>
  </nav>
</div>
</div>
