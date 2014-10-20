<div class="container">
<table class="table">

    <thead>
        <tr>
            <th>Tournament</th>
            <th>Round</th>
            <th>School</th>
            <th>Team</th>
            <th>Side</th>
            <th>Opponent</th>
            <th>Info</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($rows as $row): ?>
            <tr>
                <td><?= $row["tournament"] ?></td>
                <td><?= $row["round"] ?></td>
                <td><?= $row["school"] ?></td>
                <td><?= $row["team"] ?></td>
                <td><?= $row["side"] ?></td>
                <td><?= $row["opponent"] ?></td>
                <td><?= $row["info"] ?></td>
            </tr>
            <? endforeach ?>
    </tbody>

</table>
    <div>
        <a href="scouting_submission.php" style = "text-align: center;">Submit Scouting</a>
    </div>
</div>
