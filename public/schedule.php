<?php
	// configuration
    require("../includes/config.php"); 
	
	// fill tournaments
	$tournaments = query("SELECT * FROM tournaments");

	// ensure success
	if ($tournaments === false)
	{
		apologize("Data Retrieval Failure");
	}
	
	// render schedule_form.php
	render("schedule_form.php", ["tournaments" => $tournaments, "title" => "Schedule"]);
?>