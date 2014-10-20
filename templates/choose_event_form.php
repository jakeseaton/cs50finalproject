<form action="choose_event.php" method="post">
        <input type="checkbox" name="debate" value="1">Debate?<br>
            Friday Event
            <select class="form-control" name="friday">
                <option value=""> </option>
                <?php foreach ($f_events as $f_event): ?>
                    <option><?= $f_event ?></option>
                <? endforeach ?>
            </select>
            Event 1
            <select class="form-control" name="event1">
                <option value=""> </option>
                <?php foreach ($s_events as $s_event): ?>
                    <option><?= $s_event ?></option>
                <? endforeach ?>
            </select>
            Event 2
            <select class="form-control" name="event2">
                <option value=""> </option>
                <?php foreach ($s_events as $s_event): ?>
                    <option><?= $s_event ?></option>
                <? endforeach ?>
            </select>
     		Event 3
            <select class="form-control" name="event3">
                <option value=""> </option>
                <?php foreach ($s_events as $s_event): ?>
                    <option><?= $s_event ?></option>
                <? endforeach ?>
        	</select><br>
            <button class="form-control" type="submit" class="btn btn-default">Submit</button>
</form>
