<form action="delete_scouting.php" method="post">
    	<select class="form-control" name="scouting">
                <option value=""> </option>
                <?php foreach ($scoutings as $scouting): ?>
                    <option><?= "Entry ".$scouting["id"], " ".$scouting["tournament"], " Round ".$scouting["round"], " ".$scouting["school"], " ".$scouting["team"] ?></option>
          	   <? endforeach ?>
        </select>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
</form>
