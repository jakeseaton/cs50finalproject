<div class="container">
<table class="table">
    <thead>
        <tr>
            <th>Tournament</th>
            <th>Date</th>
            <th>Location</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($tournaments as $tournament): ?>
            <tr>
                <td><?= $tournament["name"] ?></td>
                <td><?= $tournament["date"] ?></td>
                <td><?= $tournament["location"] ?></td>
            </tr>
            <? endforeach ?>
    </tbody>
</table>
    <div>
        <a href="add_tournament.php" style = "text-align: center;">Add Tournament to Schedule</a><br>
    </div>
</div>
