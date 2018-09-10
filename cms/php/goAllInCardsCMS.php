<div class="row" id="homePage">
        <div class="col-3 mt-5 offset-1">
        <form action="cms.php" method="post">
            <div class="form-group">
            <label class=" mt-5">Promijeni tekst link-a sa ID</label>
                    <?php
                        //Preuzimanje svih ID-jeva iz baze kako bi se omogucila promjena
                        $sql = "SELECT id FROM goalliin_cards";
                        $result = mysqli_query($connection,$sql);
                        echo "<select name='goAllInCards_ID'>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option value='" . $row['id'] . "'>" . $row['id'] . "</option>";
                        }
                        echo "</select>";
                    ?>
                <label class=" mt-5">Promijeni tekst</label>
                        <select name="goAllInCards_column">
                            <option value="naslov">Naslov</option>
                            <option value="tekst">Tekst</option>
                        </select>
                <input type="text" class="form-control" name="tekstLinka8" placeholder="Unesite zeljeni tekst">
            </div>
            <div class="form-group">
                <input class="btn btn-primary bg-warning" type="submit" class="form-control" name="updateGoAllInCards" value="Promijeni" >
            </div>
        </form>
                <form action="upload_pic.php" method="post" enctype="multipart/form-data">
                    <label class=" mt-2">Promijeni sliku ID</label>
                    <?php
                        //Preuzimanje svih ID-jeva iz baze kako bi se omogucila promjena
                        $sql = "SELECT id FROM goalliin_cards";
                        $result = mysqli_query($connection,$sql);
                        echo "<select name='goalliin_cards_slika_id'>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option value='" . $row['id'] . "'>" . $row['id'] . "</option>";
                        }
                        echo "</select>";
                    ?>
                    <input type="file" name="fileToUpload" id="fileToUpload" >
                    <input type="submit" value="Promijeni" name="uploadPicGoAllIn" class="btn btn-primary bg-warning">
                </form>
                
                <form action="upload_pic.php" method="post" enctype="multipart/form-data">
                    <label class=" mt-5">Dodaj novu karticu</label>
                    <input type="text" class="form-control" name="tekstLinka12" placeholder="Unesite zeljeni naslov" required>
                    <input type="text" class="form-control" name="tekstLinka13" placeholder="Unesite zeljeni tekst" required>
                    <input type="file" name="fileToUpload" id="fileToUpload" >
                    <input type="submit" value="Dodaj" name="uploadNewPicCards" class="btn btn-primary bg-warning">
                </form>
                
                <form action="upitiCMS.php" method="post">
                    <label class=" mt-5">Obrisi postojecu karticu</label>
                    <?php
                        //Preuzimanje svih ID-jeva iz baze kako bi se omogucila promjena
                        $sql = "SELECT id FROM goalliin_cards";
                        $result = mysqli_query($connection,$sql);
                        echo "<select name='delete_goAllInCards_ID'>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option value='" . $row['id'] . "'>" . $row['id'] . "</option>";
                        }
                        echo "</select>";
                    ?>
                    <input type="submit" value="Obrisi" name="deleteGoAllInCards" class="btn btn-primary bg-warning">
                </form>
        </div>

        <div class="table-responsive col-6">
           <h1 class="text-center">Go All In</h1>
            <table class="table table-dark text-center " >
                    <thead>
                        <tr>
                        <th>ID</th>
                        <th>Slika</th>
                        <th>Naslov</th>
                        <th>Tekst</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                while($row = mysqli_fetch_assoc($select_sve_goallin_cards)) {
                                $id = $row['id']; 
                                $slika = $row['slika'];
                                $naslov = $row['naslov']; 
                                $tekst = $row['tekst'];
                                echo"<tr>";
                                echo"<td>{$id}</td>";
                                echo"<td><img width='100' src='$slika'></td>";
                                echo"<td>{$naslov}</td>";
                                echo"<td>{$tekst}</td>";
                                echo"</tr>";
                            }
                        ?>
                    </tbody> 
                </table>
            </div>
    </div>