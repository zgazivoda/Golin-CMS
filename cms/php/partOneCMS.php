 <div class="row" id="partOne">
        <div class="col-3 mt-5 offset-1">
        <form action="cms.php" method="post">
            <div class="form-group">
                <label class=" mt-5">Promijeni ID</label>
                    <?php
                        //Preuzimanje svih ID-jeva iz baze kako bi se omogucila promjena
                        $sql = "SELECT id FROM partone";
                        $result = mysqli_query($connection,$sql);
                        echo "<select name='partOne_id'>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option value='" . $row['id'] . "'>" . $row['id'] . "</option>";
                        }
                        echo "</select>";
                    ?>
                    <label class=" mt-5"> kolona </label>
                        <select name="partOne_column">
                            <option value="naslov1">Naslov 1</option>
                            <option value="naslov2">Naslov 2</option>
                            <option value="paragraf1">Paragraf 1</option>
                            <option value="paragraf2">Paragraf 2</option>
                            <option value="paragraf3">Paragraf 3</option>
                        </select>
                <input type="text" class="form-control" name="tekstLinka3" placeholder="Unesite zeljeni tekst">
            </div>
            <div class="form-group">
                <input class="btn btn-primary bg-warning" type="submit" class="form-control" name="updatePartOne" value="Promijeni" >
            </div>
        </form>
                <form action="upload_pic.php" method="post" enctype="multipart/form-data">
                    <label class=" mt-2">Promijeni sliku ID</label>
                    <?php
                        //Preuzimanje svih ID-jeva iz baze kako bi se omogucila promjena
                        $sql = "SELECT id FROM partone";
                        $result = mysqli_query($connection,$sql);
                        echo "<select name='partOne_slika_id'>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option value='" . $row['id'] . "'>" . $row['id'] . "</option>";
                        }
                        echo "</select>";
                    ?>
                    <input type="file" name="fileToUpload" id="fileToUpload" >
                    <input type="submit" value="Promijeni" name="uploadPicPartOne" class="btn btn-primary bg-warning">
                </form>
        </div>

        <div class="table-responsive col-6">
           <h1 class="text-center">Prvi dio</h1>
            <table class="table table-dark text-center " >
                    <thead>
                        <tr>
                        <th>ID</th>
                        <th>Naslov 1</th>
                        <th>Naslov 2</th>
                        <th>Paragraf 1</th>
                        <th>Paragraf 2</th>
                        <th>Paragraf 3</th>
                        <th>Slika</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row = mysqli_fetch_assoc($select_sve_partone)) {
                                $partOne_id = $row['id']; 
                                $naslov1 = $row['naslov1']; 
                                $naslov2 = $row['naslov2']; 
                                $paragraf1 = $row['paragraf1']; 
                                $paragraf2 = $row['paragraf2']; 
                                $paragraf3 = $row['paragraf3']; 
                                $slika = $row['slika']; 
                                echo"<tr>";
                                echo"<td>{$partOne_id}</td>";
                                echo"<td>{$naslov1}</td>";
                                echo"<td>{$naslov2}</td>";
                                echo"<td>{$paragraf1}</td>";
                                echo"<td>{$paragraf2}</td>";
                                echo"<td>{$paragraf3}</td>";
                                echo"<td><img width='150' src='$slika'></td>";
                                echo"</tr>";
                            }
                        ?>
                    </tbody> 
                </table>
            </div>
    </div>