<div>
	Student Information <br>
	Name: <?= $contact[0]["first"]." ".$contact[0]["last"] ?><br>
	Cell Phone: <?= $contact[0]["cell"] ?><br>
	Call Next: <?= $contact[0]["next"] ?><br>
	Home Phone: <?= $contact[0]["home"] ?><br>
	Parent 1: <?= $contact[0]["p1n"]." ".$contact[0]["p1c"] ?><br>
	Parent 2: <?= $contact[0]["p2n"]." ".$contact[0]["p2c"] ?>
</div>
<div>
    <a href="javascript:history.go(-1);">Back</a>
</div>