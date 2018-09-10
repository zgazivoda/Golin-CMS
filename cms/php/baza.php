<?php            
//Smjestanje vrijednosti u niz
    $db['db_host'] = "localhost";
    $db['db_user'] = "root";
    $db['db_pass'] = "";
    $db['db_name'] = "golinpg";

//Ovom funkcijom je moguce proci kroz sve clanove niza
    foreach($db as $key => $value){
        
//Pretvaranje svih varijabli gore u konstante
        define(strtoupper($key), $value);
    }
//Konekcija na bazu podataka koristeci konstante kreirane u foreach petlji
    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Provjera da li je konekcija uspjesna
    if($connection){
        //Da se omoguci prikaz nasih slova
        mysqli_set_charset($connection, "utf8");
       // echo "Uspjesno ste konektovani";
    }
    else{
        echo "Konekcija na bazu neuspjesna error " . mysqli_error($connection);
    }

?>
