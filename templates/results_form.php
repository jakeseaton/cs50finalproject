<div class="container">
            <table class="table">

            <thead>
                <tr>
                    <th>Tournament</th>
                    <th>Event</th>
                    <th>First</th>
                    <th>Last</th>
                    <th>Place</th>
                </tr>
            </thead>

            <tbody>

            <?php foreach ($rows as $row): ?>
            <tr>
                <td><?= $row["tournament"] ?></td>
                <td><?= $row["event"] ?></td>
                <td><?= $row["first"] ?></td>
                <td><?= $row["last"] ?></td>
                <td><?= $row["place"]?></td>
            </tr>
            <? endforeach ?>
            </tbody>

            </table>
</div>
<div>
<a href="results_submission.php" style = "text-align: center;">Submit Results</a>
</div>
