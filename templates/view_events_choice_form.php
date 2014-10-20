<form action = "view_events.php" method="post">
		<select name="event" class="form-control">
        <option value=""> </option>
        <?php foreach ($s_events as $s_event): ?>
            <option><?= $s_event ?></option>
        <? endforeach ?>
		</select><br>
	<button type="submit" class="btn btn-default">Go!</button>
</form>
