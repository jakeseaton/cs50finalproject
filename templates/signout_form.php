<form action="signout.php" method="post">
    	Choose a tournament from the list<br>
        <select class="form-control" name="tourney">
                <option value=""> </option>
                <?php foreach ($tournaments as $tournament): ?>
                    <option><?= $tournament["name"]?></option>
          	   <? endforeach ?>
        </select><br>
        Which day are you unable to come?<br>
        	<input type="hidden" name="friday" value=""/>
            <input type="checkbox" name="friday" value="1" checked>Friday</input><br>
	        <input type="hidden" name="saturday" value=""/>
            <input type="checkbox" name="saturday" value="1" checked>Saturday </input><br><br>
        <button class="form-control" type="submit" class="btn btn-default">Sign Out</button>
</form>
