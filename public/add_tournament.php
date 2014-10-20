<?php
	// configuration
    require("../includes/config.php"); 
    
    // require log in
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
    	// validate submission
		if (empty($_POST["name"]))
		{
			apologize("Please Input the tournament's name or host school");
		}
		else if (empty($_POST["date"]))
		{
			apologize("Please input the date mm/dd/yy");
		}
		else if(empty($_POST["location"]))
		{
			apologize("Please input a location for the tournament");
		}
		else if ($_POST["password"] != "00000000")
		{
			apologize("Wrong password");
		}

		// insert into database
		query("INSERT INTO tournaments VALUES (?, ?, ?)", $_POST["name"], $_POST["date"], $_POST["location"]);
		
		// redirect to schedule
		redirect("schedule.php");
    }

	// else render form
	else
	{
		render("add_tournament_form.php", ["title" => "Add Tournament"]);
	}
?>