    //Pomocu ove JS funkcije se provjerava unos korisnika u formu za zakazivanje
         function validateFormZakazivanje(){

    //Unesene vrijednosti se smjestaju u varijable
        var ime_prezime=document.getElementById("ime_prezime").value;
        var firma=document.getElementById("firma").value;
        var e_mail=document.getElementById("e_mail").value;
        var broj_telefona=document.getElementById("broj_telefona").value;
        var datum=document.getElementById("datum").value;
        var vrijeme=document.getElementById("vrijeme").value;
        //Provjera da li broj telefona sadrzi samo brojeve
        var isnum = /^\d+$/.test(broj_telefona);
        
        //Validacija emaila
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var email_ver= re.test(String(e_mail).toLowerCase());
        
        if(!email_ver || !isnum){
            if(!email_ver){
                alert("Molimo unesite validnu e-mail adresu");
                return false;
            }
            if(!isnum){
                alert("Molimo unesite validan broj telefona");
                return false;
                }
        }else{
    //Provjerava se da li varijable imaju vrijednost null ili su prazno polje
        if ( (ime_prezime==null || ime_prezime=="") || (firma==null || firma=="")||
            (e_mail==null || e_mail=="") || (broj_telefona==null || broj_telefona=="") ||
            (datum==null || datum=="") || (vrijeme==null || vrijeme=="") )
        {
    // Ukoliko su null ili prazno polje dobija se alert
            alert("Molimo Vas da unesete sva polja.");
            return false;
    
    // U suprotnom se vraca true i PHP kod pocinje da se izvrsava
        }else{
            return true;
        }
    }
         }
    
    //Pomocu ove JS funkcije se provjerava unos korisnika u formu za logovanje
         function validateFormLogovanje(){
        var username=document.getElementById("username").value;
        var password=document.getElementById("password").value;
    
        if( (username==null || username=="") || (password==null || password=="")){
            alert("Molimo Vas da unesete oba polja.");
            return false;
        }else{
            return true;
        }
    }
    
