<div class="container">
<table class="table">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Graduation Year</th>
            <th>Event 1</th>
            <th>Event 2</th>
            <th>Event 3</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($rows as $row): ?>
            <tr>
                <td><?= $row["first"] ?></td>
                <td><?= $row["last"] ?></td>
                <td><?= $row["year"] ?></td>
                <td><?= $row["event1"] ?></td>
                <td><?= $row["event2"] ?></td>
                <td><?= $row["event3"] ?></td>
            </tr>
            <? endforeach ?>
    </tbody>
</table>
</div>
