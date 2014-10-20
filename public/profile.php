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
    
	// find user info
	$user = query("SELECT * FROM users WHERE id = ?", $_SESSION["id"]);

	if ($user[0]["contact"] == "0")
	{
		apologize("Please submit contact info first");
	}

	// find user contact info
	$user_contact = query("SELECT * FROM contacts WHERE id = ?", $_SESSION["id"]);
	
	// ensure success
	if ($user_contact === false)
	{
		apologize("Data Retrieval Failure");
	}

	// ensure success
	if ($user === false)
	{
		apologize("Data Retrieval Failure");
	}

	// find user results
	$user_results = query("SELECT * FROM results WHERE first = ? AND last = ?", $user[0]["first"], $user[0]["last"]);
	
	// ensure success
	if ($user_results === false)
	{
		apologize("Data Retrieval Failure");
	}

	// find user signouts
	$user_signouts = query("SELECT * FROM signout WHERE id = ?", $_SESSION["id"]);

	// ensure success
	if ($user_signouts === false)
	{
		apologize("Data Retrieval Failure");
	}

	// render profile page
	render("profile_page.php", ["title" => "Profile","user" => $user, "user_results" => $user_results, "user_contact" => $user_contact, "user_signouts" => $user_signouts]);
 
?>