<?php
	// configuration
    require("../includes/config.php");

    // require login
	if (!preg_match("{(?:login|logout|register)\.php$}", $_SERVER["PHP_SELF"]))
    {
        if (empty($_SESSION["id"]))
        {
            redirect("login.php");
        }
    }

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		// fill variable with users who have chosen that event
		$rows = query("SELECT * FROM users WHERE event1 = ? OR event2 = ? OR event3 = ?", $_POST["event"], $_POST["event"], $_POST["event"]);
		
		// ensure success
		if ($rows === false)
		{
			apologize("Data Retrieval Error");
		}
		else if (count($rows) < 1)
		{
			apologize("No one has chosen that event :(");
		}
		// render
		render("view_events_form.php", ["rows" => $rows]);
	}
	else
	{
		// render
		render("view_events_choice_form.php", ["title" => "Choose Event", "s_events" => $s_events]);
	}
?>