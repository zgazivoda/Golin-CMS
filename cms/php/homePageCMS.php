 <div class="row" id="homePage">
        <div class="col-3 mt-5 offset-1">
        <form action="cms.php" method="post">
            <div class="form-group">
                <label class=" mt-5">Promijeni tekst</label>
                        <select name="homePage_column">
                            <option value="naslov1">Naslov 1</option>
                            <option value="naslov2">Naslov 2</option>
                            <option value="paragraf">Paragraf</option>
                            <option value="dugmeIme">Ime Dugme</option>
                        </select>
                <input type="text" class="form-control" name="tekstLinka2" placeholder="Unesite zeljeni tekst">
            </div>
            <div class="form-group">
                <input class="btn btn-primary bg-warning" type="submit" class="form-control" name="updateHomePage" value="Promijeni" >
            </div>
        </form>
        </div>

        <div class="table-responsive col-6">
           <h1 class="text-center">Naslovna Strana</h1>
            <table class="table table-dark text-center " >
                    <thead>
                        <tr>
                        <th>Naslov 1</th>
                        <th>Naslov 2</th>
                        <th>Paragraf</th>
                        <th>Ime dugme</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row = mysqli_fetch_assoc($select_sve_homepage)) {
                                $naslov1 = $row['naslov1']; 
                                $naslov2 = $row['naslov2']; 
                                $paragraf = $row['paragraf']; 
                                $imeDugme = $row['dugmeIme']; 
                                echo"<tr>";
                                echo"<td>{$naslov1}</td>";
                                echo"<td>{$naslov2}</td>";
                                echo"<td>{$paragraf}</td>";
                                echo"<td>{$imeDugme}</td>";
                                echo"</tr>";
                            }
                        ?>
                    </tbody> 
                </table>
            </div>
    </div>