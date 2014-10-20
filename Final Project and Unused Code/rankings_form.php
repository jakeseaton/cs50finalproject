<table class="table table-striped">

            <thead>
                <tr>
                    <th>Name</th>
                    <th>Year</th>
                    <th>Points</th>
                </tr>
            </thead>

            <tbody>

            <?php foreach ($rows as $row): ?>
            <tr>
                <td><?= $row["name"] ?></td>
                <td><?= $row["year"] ?></td>
                <td><?= $row["points"] ?></td>
            </tr>
            <? endforeach ?>
            </tbody>
</table>