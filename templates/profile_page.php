<h1>My Events</h1>
<? if ($user[0]["debate"] == 1) {echo("Policy Debate");} ?>
<br>
<?= "Friday Event: ".$user[0]["friday"]?><br>
<?= "Event 1: ".$user[0]["event1"]?><br>
<?= "Event 2: ".$user[0]["event2"]?><br>
<?= "Event 3: ".$user[0]["event3"]?><br>
<a href="choose_event.php">Choose Events</a><br>

<h1>My Contact Info</h1>

<?= $user_contact[0]["first"]." ".$user_contact[0]["last"]?><br>
<?= "Cell Phone Number: ".$user_contact[0]["cell"]?><br>
<?= "Home Phone Number: ".$user_contact[0]["home"]?><br>
<?= "Parent 1: ". $user_contact[0]["p1n"]." #: ".$user_contact[0]["p1c"]?><br>
<?= "Parent 2: ".$user_contact[0]["p2n"]." #: ".$user_contact[0]["p2c"]?><br>
<?= "After you, I will call ".$user_contact[0]["next"]?><br>

<a href="add_contact.php">Change Contact Info</a><br>
<a href="change_password.php">Change Password</a><br>

<h1> My Results</h1>
<div class="container">
            <table class="table">
            <thead>
                <tr>
                    <th>Tournament</th>
                    <th>Event</th>
                    <th>Place</th>
                </tr>
            </thead>

            <tbody>
            <?php foreach ($user_results as $user_result): ?>
            <tr>
                <td><?= $user_result["tournament"] ?></td>
                <td><?= $user_result["event"] ?></td>
                <td><?= $user_result["place"]?></td>
            </tr>
            <? endforeach ?>
            </tbody>
            </table>
</div>



<h1>My Signouts</h1>

<div class="container">
            <table class="table">

            <thead>
                <tr>
                    <th>Tournament</th>
                    <th>Friday</th>
                    <th>Saturday</th>
                </tr>
            </thead>

            <tbody>
            <?php foreach ($user_signouts as $user_signout): ?>
            <tr>
                <td><?= $user_signout["tournament"] ?></td>
                <td>
                    <? if ($user_signout["friday"] == 1)
                echo("Cannot Go");
                 ?></td>
                <td><? if ($user_signout["saturday"] == 1)
                echo("Cannot Go");
                 ?></td>
            </tr>
            <? endforeach ?>
            </tbody>
            </table>
</div>
<?php if(count($user_signouts) < 1){echo("No Signouts");} ?><br>
<a href="signout.php">Sign Out</a><br>
If you are signed out of a tournament you wish to go to, please contact Mr. Rafferty.



