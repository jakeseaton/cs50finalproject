<form action="delete_tournament.php" method="post">
        <select class="form-control" name="tourney">
                <option value=""> </option>
                <?php foreach ($tournaments as $tournament): ?>
                    <option><?= $tournament["name"] ?></option>
          	   <? endforeach ?>
        </select>
        <br>
        <input class="form-control" name="password" type="password" placeholder="Password"/>
        <br>
        <button type="submit" class="btn btn-default">Submit</button>
</form>
