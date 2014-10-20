<?php
// if you decide to do this just put this code into home.php
// <li><a href="rankings.php">Rankings</a></li>

/*
	if there is some way to parse an excel document and store all of that in a database called rankings, then empty and fill that every time raff updates
	the rankings, you could fill a table on the website with the information.

	This would require
		rankings_update.php
			delete * from rankings
			insert into rankings values (whatever was uploaded)
		rankings_update_form.php
			This takes an excel doc or copy and paste from one
*/

// configuration
require("../includes/config.php"); 

$rows = query("SELECT * FROM rankings");

if ($rows === false)
{
	apologize("Data Retrieval Failure");
}
// render rankings
render("rankings_form.php", ["title" => "Current Rankings"]);

?>