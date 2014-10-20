<div class="container">
<table class="table">

    <thead>
        <tr>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Tournament</th>
            <th>Friday</th>
            <th>Saturday</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($signouts as $signout): ?>
            <tr>
                <td><?= $signout["last"] ?></td>
                <td><?= $signout["first"] ?></td>
                <td><?= $signout["tournament"] ?></td>
                <td>
                    <? if ($signout["friday"] == 1)
                echo("Cannot Go");
                 ?></td>
                <td><? if ($signout["saturday"] == 1)
                echo("Cannot Go");
                 ?></td>
            </tr>
            <? endforeach ?>
    </tbody>

</table>
    <div>
        <a href="javascript:history.go(-1);">Back</a>
    </div>
</div>

