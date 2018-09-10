<div id="formaZaZakazivanje">
<div class="container">
<div class="modal fade" id="formaZakazi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-m" role="dialog">
        <div class="modal-content bg-dark">
                <form name="formaZakazivanje"  onsubmit="return validateFormZakazivanje()" action="/cms/php/zakazi.php"  method="post">
                    <button type="button" class="btn bg-warning pull-right" data-dismiss="modal" aria-label="Close" >
                    <span aria-hidden="true">&times;</span></button>
                           <div class="form-group row">
                                <div class="col-lg-4 offset-lg-4"><br>
                                  <img src="/cms/resursi/PopUp/GolinPG.svg" id="logoForma">
                                </div>
                           </div>
                           <div class="form-group row">
                                <div class="col-lg-8 offset-lg-2 text-white text-center">
                                  <h5>Zakažite sastanak sa nekim <br> od naših poslodavaca.</h5>
                                </div>
                           </div>
                           <div class="form-group row">
                                <div class="col-lg-10 offset-lg-1">
                                  <input type="text" class="form-control text-center" name="ime_prezime" id="ime_prezime" placeholder="Ime i prezime">
                                </div>
                           </div>
                           <div class="form-group row">
                                <div class="col-lg-10 offset-lg-1">
                                  <input type="text" class="form-control text-center" name="firma" id="firma" placeholder="Firma"> 
                                </div>
                           </div>
                           <div class="form-group row">
                                <div class="col-lg-10 offset-lg-1">
                                  <input type="e-mail" class="form-control text-center" name="e_mail" id="e_mail" placeholder="e-Mail">
                                </div>
                           </div>
                           <div class="form-group row">
                                <div class="col-lg-10 offset-lg-1">
                                  <input type="text" class="form-control text-center" name="broj_telefona" id="broj_telefona" placeholder="Broj telefona">
                                </div>
                          </div>
                           <div class="form-group row">
                                <div class="col-lg-5 offset-lg-1">
                                  <input type="date" class="form-control text-center" name="datum" id="datum">
                                </div>
                                <div class="col-lg-5">
                                  <input type="time" class="form-control text-center" name="vrijeme" id="vrijeme" value="10:00">
                                </div>
                          </div>
                           <div class="form-group row">
                                <div class="col-lg-5 mx-auto">
                                  <input class="form-control btn" type="submit" name="zakazi" id="zakazi2" value="ZAKAŽI SASTANAK">
                                </div>
                          </div>
    
                </form>         
        </div>
    </div>
</div>
</div>
</div>