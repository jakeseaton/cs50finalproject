<div class="container">
<table class="table">

    <thead>
        <tr>
            <th>Name</th>
            <th>Judging For</th>
            <th>Phone</th>
            <th>Round 1</th>
            <th>Round 2</th>
            <th>Round 3</th>
            <th>Round 4</th>
            <th>Round 5</th>
            <th>Round 6</th>
            <th>Round 7</th>
            <th>Round 8</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($judges as $judge): ?>
            <tr>
                <td><?= $judge["name"] ?></td>
                <td><?= $judge["for"] ?></td>
                <td><?= $judge["number"] ?></td>
                <td><?= $judge["1"] ?></td>
                <td><?= $judge["2"] ?></td>
                <td><?= $judge["3"] ?></td>
                <td><?= $judge["4"] ?></td>
                <td><?= $judge["5"] ?></td>
                <td><?= $judge["6"] ?></td>
                <td><?= $judge["7"] ?></td>
                <td><?= $judge["8"] ?></td>
            </tr>
            <? endforeach ?>
    </tbody>

</table>
</div>

