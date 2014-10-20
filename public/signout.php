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
		
		// validate submission
		if ($_POST["tourney"] == "")
		{
			apologize("Please choose a tournament");
		}
				
		// if they already signed out of that tournament
        $already = query("SELECT * FROM signout WHERE id = ? AND tournament = ?", $_SESSION["id"], $_POST["tourney"]);
        
        // ensure success
        if ($already === false)
        {
        	apologize("Data Retrieval Failure");
        }
        else if (count($already) == 1)
        {
            // delete previous entry
            query("DELETE FROM signout WHERE id = ? AND tournament = ?", $_SESSION["id"], $_POST["tourney"]);
        }

		// if they signed back in
		if ($_POST["friday"] == "" && $_POST["saturday"] == "")
		{
			query("DELETE FROM signout WHERE id = ? AND tournament = ?", $_SESSION["id"], $_POST["tourney"]);
		}

		// else sign them out
		else
		{
			// get user info
			$user = query("SELECT first, last FROM users WHERE id = ?", $_SESSION["id"]);
			
			// ensure success
			if ($user === false)
			{
				apologize("Data Retrieval Failure");
			}

			// insert signout
			query("INSERT INTO signout VALUES (?, ?, ?, ?, ?, ?)", $_SESSION["id"], $user[0]["first"], $user[0]["last"], $_POST["tourney"], $_POST["friday"], $_POST["saturday"]);
		}
		

		redirect("profile.php");
	}

	// else render form
	else
	{
		// fill variable with tournaments
		$tournaments = query("SELECT * FROM tournaments");
		
		// ensure success
		if ($tournaments === false)
		{
			apologize("Data Retrieval Failure");
		}
		
		// render
		render("signout_form.php", ["tournaments" => $tournaments, "title" => "Sign Out"]);
	}
?>
