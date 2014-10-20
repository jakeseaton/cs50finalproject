<form action="results_submission.php" method="post">
        Tournament
     		<select name="tourney" class="form-control">
                <option value=""> </option>
                <?php foreach ($tournaments as $tournament): ?>
                    <option><?= $tournament["name"] ?></option>
          	   <? endforeach ?>
        	</select><br>
     		<select name="event" class="form-control">
                <option value=""> </option>
                <option value="debate">Policy Debate</option>
                <?php foreach ($events as $event): ?>
                    <option><?= $event ?></option>
                <? endforeach ?>
        	</select><br>
        <input class="form-control" name="first" placeholder="First Name" type="text"/><br>
        <input class="form-control" name="last" placeholder="Last Name" type="text"/><br>
        <input class="form-control" name="place" placeholder="Place" type="text"/><br>
        <input class="form-control" name="password" type="password" placeholder="Password"/><br>
        <button type="submit" class="btn btn-default">Submit</button>
</form>
