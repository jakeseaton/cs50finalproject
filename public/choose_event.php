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

	// if form was submitted
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		// update debate
		query("UPDATE users SET debate = ? WHERE id = ?", $_POST["debate"], $_SESSION["id"]);

		// if they changed their friday event
		if ($_POST["friday"] != "")
		{
			
			// update
			query("UPDATE users SET friday = ? WHERE id =?", $_POST["friday"], $_SESSION["id"]);			
		}
		
		// if they changed event 1
		if ($_POST["event1"] != "")
		{
			// update
			query("UPDATE users SET event1 = ? WHERE id =?", $_POST["event1"], $_SESSION["id"]);
		}
		
		// if they changed event 2
		if ($_POST["event2"] != "")
		{
			// update
			query("UPDATE users SET event2 = ? WHERE id = ?", $_POST["event2"], $_SESSION["id"]);
		}
		
		// if they changed event 3
		if ($_POST["event3"] != "")
		{
			// update
			query("UPDATE users SET event3 = ? WHERE id = ?", $_POST["event3"], $_SESSION["id"]);
		}
		
		// redirect home
		redirect("index.php");
	}
	else
	{
		render("choose_event_form.php", ["f_events" => $f_events, "s_events" => $s_events, "title" => "Choose Events"]);
	}
?>