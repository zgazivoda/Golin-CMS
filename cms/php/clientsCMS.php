   <div class="row" id="clients">
    <div class="col-3 mt-5 offset-1">
    <form action="cms.php" method="post">
        <div class="form-group">
            <label class=" mt-5">Promijeni tekst sa ID</label>
                    <?php
                        //Preuzimanje svih ID-jeva iz baze kako bi se omogucila promjena
                        $sql = "SELECT id FROM clients";
                        $result = mysqli_query($connection,$sql);
                        echo "<select name='client_ID'>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option value='" . $row['id'] . "'>" . $row['id'] . "</option>";
                        }
                        echo "</select>";
                    ?>
            <input type="text" class="form-control" name="tekstLinka4" placeholder="Unesite zeljeni tekst">
        </div>
        <div class="form-group">
            <input class="btn btn-primary bg-warning" type="submit" class="form-control" name="updateClients" value="Promijeni" >
        </div>
    </form>
                <form action="upload_pic.php" method="post" enctype="multipart/form-data">
                    <label class=" mt-2">Promijeni sliku ID</label>
                    <?php
                        //Preuzimanje svih ID-jeva iz baze kako bi se omogucila promjena
                        $sql = "SELECT id FROM clients";
                        $result = mysqli_query($connection,$sql);
                        echo "<select name='client_slika_id'>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option value='" . $row['id'] . "'>" . $row['id'] . "</option>";
                        }
                        echo "</select>";
                    ?>
                    <input type="file" name="fileToUpload" id="fileToUpload" >
                    <input type="submit" value="Promijeni" name="uploadPicClient" class="btn btn-primary bg-warning">
                </form>
    </div>

    <div class="table-responsive col-6">
       <h1 class="text-center">Clients</h1>
        <table class="table table-dark text-center " >
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Slika</th>
                    <th>Tekst</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row = mysqli_fetch_assoc($select_sve_clients)) {
                            $id = $row['id']; 
                            $tekst = $row['tekst']; 
                            $slika = $row['slika']; 
                            echo"<tr>";
                            echo"<td>{$id}</td>";                        
                            echo"<td><img width='150' src='$slika'></td>";
                            echo"<td>{$tekst}</td>";
                            echo"</tr>";
                        }
                    ?>
                </tbody> 
            </table>
        </div>
    </div>
