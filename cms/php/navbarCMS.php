 <div class="row" id="navbar">
    <div class="col-3 mt-5 offset-1">
    <form action="cms.php" method="post">
        <div class="form-group">
            <label class="mt-5">Promijeni tekst link-a sa ID</label>
                    <?php
                        //Preuzimanje svih ID-jeva iz baze kako bi se omogucila promjena
                        $sql = "SELECT id FROM navbar";
                        $result = mysqli_query($connection,$sql);
                        echo "<select name='navbar_ID'>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option value='" . $row['id'] . "'>" . $row['id'] . "</option>";
                        }
                        echo "</select>";
                    ?>
            <input type="text" class="form-control" name="tekstLinka" placeholder="Unesite zeljeni tekst">
        </div>
        <div class="form-group">
            <input class="btn btn-primary bg-warning" type="submit" class="form-control" name="updateNavbar" value="Promijeni" >
        </div>
    </form>
    </div>

    <div class="table-responsive col-6">
       <h1 class="text-center">Navigation bar</h1>
        <table class="table table-dark text-center " >
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Tekst</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row = mysqli_fetch_assoc($select_sve)) {
                            $linkovi = $row['link']; 
                            $navbar_ID = $row['id']; 
                            echo"<tr>";
                            echo"<td>{$navbar_ID}</td>";                        
                            echo"<td>{$linkovi}</td>";
                            echo"</tr>";
                        }
                    ?>
                </tbody> 
            </table>
        </div>
    </div>