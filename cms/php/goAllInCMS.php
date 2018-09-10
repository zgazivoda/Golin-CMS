<div class="row" id="homePage">
        <div class="col-3 mt-5 offset-1">
        <form action="cms.php" method="post">
            <div class="form-group">
                <label class=" mt-5">Promijeni tekst</label>
                        <select name="goAllIn_column">
                            <option value="naslov1">Naslov 1</option>
                            <option value="naslov2">Naslov 2</option>
                            <option value="paragraf1">Paragraf 1</option>
                            <option value="paragraf2">Paragraf 2</option>
                            <option value="naslov3">Naslov 3</option>
                        </select>
                <input type="text" class="form-control" name="tekstLinka6" placeholder="Unesite zeljeni tekst">
            </div>
            <div class="form-group">
                <input class="btn btn-primary bg-warning" type="submit" class="form-control" name="updateGoAllIn" value="Promijeni" >
            </div>
        </form>
        </div>

        <div class="table-responsive col-6">
           <h1 class="text-center">Go All In</h1>
            <table class="table table-dark text-center " >
                    <thead>
                        <tr>
                        <th>Naslov 1</th>
                        <th>Naslov 2</th>
                        <th>Paragraf 1</th>
                        <th>Paragraf 2</th>
                        <th>Naslov 3</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                while($row = mysqli_fetch_assoc($select_sve_goallin)) {
                                $naslov1 = $row['naslov1']; 
                                $naslov2 = $row['naslov2'];
                                $naslov3 = $row['naslov3'];
                                $paragraf1 = $row['paragraf1'];
                                $paragraf2 = $row['paragraf2'];
                                echo"<tr>";
                                echo"<td>{$naslov1}</td>";
                                echo"<td>{$naslov2}</td>";
                                echo"<td>{$paragraf1}</td>";
                                echo"<td>{$paragraf2}</td>";
                                echo"<td>{$naslov3}</td>";
                                echo"</tr>";
                            }
                        ?>
                    </tbody> 
                </table>
            </div>
    </div>