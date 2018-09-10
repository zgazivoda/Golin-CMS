    <div class="row" id="contact">
        <div class="col-3 mt-5 offset-1">
        <form action="cms.php" method="post">
            <div class="form-group">
                <label class="">Promijeni tekst</label>
                        <select name="contact_column">
                            <option value="naslov">Naslov</option>
                            <option value="adresa">Adresa</option>
                            <option value="grad_drzava">Grad i Drzava</option>
                            <option value="broj_telefona">Broj Telefona</option>
                            <option value="e_mail">E mail</option>
                        </select>
                <input type="text" class="form-control" name="tekstLinka7" placeholder="Unesite zeljeni tekst">
            </div>
            <div class="form-group">
                <input class="btn btn-primary bg-warning" type="submit" class="form-control" name="updateContacts" value="Promijeni" >
            </div>
        </form>
        </div>

        <div class="table-responsive col-6">
           <h1 class="text-center">Kontakt</h1>
            <table class="table table-dark text-center">
                    <thead>
                        <tr>
                        <th>Naslov</th>
                        <th>Adresa</th>
                        <th>Grad i Drzava</th>
                        <th>Broj Telefona</th>
                        <th>E-mail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row = mysqli_fetch_assoc($select_sve_contact)) {
                                    $naslov = $row['naslov']; 
                                    $adresa = $row['adresa']; 
                                    $grad_drzava = $row['grad_drzava']; 
                                    $broj_telefona = $row['broj_telefona']; 
                                    $e_mail = $row['e_mail']; 
                                        echo"<tr>";
                                    echo"<td>{$naslov}</td>";
                                    echo"<td>{$adresa}</td>";
                                    echo"<td>{$grad_drzava}</td>";
                                    echo"<td>{$broj_telefona}</td>";
                                    echo"<td>{$e_mail}</td>";
                                    echo"</tr>";
                                }
                        ?>
                    </tbody> 
                </table>
            </div>
    </div>
