<form action="delete_results.php" method="post">
    	<select class="form-control" name="result">
                <option value=""> </option>
                <?php foreach ($results as $result): ?>
                    <option><?= "Entry ".$result["id"], " ".$result["first"], " ".$result["tournament"], " ".$result["event"]?></option>
          	   <? endforeach ?>
        </select>
        <div class="form-group center">
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
</form>
