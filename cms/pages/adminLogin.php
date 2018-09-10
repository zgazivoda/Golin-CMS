<div id="AdminLogin">
<div class="container">
<div class="modal fade" id="formaLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-m" role="dialog">
        <div class="modal-content bg-dark">
                <form name="formaLogovanje" onsubmit="return validateFormLogovanje()" action="/cms/php/adminlogin.php"  method="post">
                    <button type="button" class="btn bg-warning pull-right" data-dismiss="modal" aria-label="Close" >
                    <span aria-hidden="true">&times;</span></button>
                           <div class="form-group row">
                                <div class="col-lg-4 offset-lg-4"><br>
                                    <img src="/cms/resursi/PopUp/GolinPG.svg" id="logoForma">
                                </div>
                           </div>
                           <div class="form-group row">
                                <div class="col-lg-8 offset-lg-2 text-white text-center">
                                    <h4>Hello Admin, please login.</h4>
                                </div>
                           </div>
                           <div class="form-group row">
                                <div class="col-lg-10 offset-lg-1">
                                    <input type="text" class="form-control text-center" id="username" name ="username" placeholder="Username">
                                </div>
                           </div>
                           <div class="form-group row">
                                <div class="col-lg-10 offset-lg-1">
                                    <input type="password" class="form-control text-center" id="password" name="password" placeholder="Password">
                                </div>
                           </div>
                           <div class="form-group row">
                                <div class="col-lg-6 mx-auto">
                                    <input class="btn form-control bg-warning" type="submit" name="login" id="login" value="Login">
                                </div>
                           </div>
                </form>         
        </div>
    </div>
</div>
</div>
</div>