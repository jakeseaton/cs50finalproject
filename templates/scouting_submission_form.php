<form action="scouting_submission.php" method="post">
    	<select class="form-control" name="tourney">
                <option value=""> </option>
                <?php foreach ($tournaments as $tournament): ?>
                    <option><?= $tournament["name"] ?></option>
          	   <? endforeach ?>
        </select><br>
        <select class="form-control" name="round">
            <option value=""></option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="quarters">Quarter Finals</option>
            <option value="sems">Semi Finals</option>
            <option value="finals">Finals</option>
        </select><br>
        <input class = "form-control" type="text" name="school" placeholder="School (i.e. Manhattan)"><br>
		<input class = "form-control" type="text" name="team" placeholder="Team (i.e. Lee/Johnson)"><br> 
        Side<br>
            <input type="hidden" name="side" value="0">
            <input type="radio" name="side" value="aff">Affirmative<br>
            <input type="radio" name="side" value="neg">Negative<br><Br>
            <input class ="form-control" type="text" name="opponent" placeholder="Opponent (i.e. MHS LJ)"><br>
        <textarea class="form-control" name="info" placeholder="Useful Info" rows="3"></textarea><br>
        <button type="submit" class="btn btn-default">Submit Scouting Report</button>
</form>
