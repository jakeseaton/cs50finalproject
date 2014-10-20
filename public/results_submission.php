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
    if ($_SERVER["REQUEST_METHOD"] == "POST" )
    {
    	// validate
        if ($_POST["tourney"] == "")
    	{
    		apologize("Please select a tournament");
    	}
    	else if ($_POST["event"] == "")
    	{
    		apologize("Please select an event");
    	}
    	else if (empty($_POST["first"]) || empty($_POST["last"]))
    	{
    		apologize("Please input a first and last name");
    	}
        else if (empty($_POST["place"]))
		{
			apologize("Please input their place");
		}
        else if ($_POST["password"] != "00000000")
        {
            apologize("Wrong password");
        }
		// this part assumes all students make accounts, which is not true
        /*
        $student = query("SELECT * FROM users WHERE first = ? AND last = ?")
        if ($student === false)
        {
            apologize("Data Retrieval Failure");
        }
        else if(count($student) < 1)
        {
            apologize("Either they don't have an account or you spelled their name wrong");
        }
        */

		// update databases
        query("INSERT INTO results VALUES (?, ?, ?, ?, ?)", $_POST["tourney"], $_POST["event"], $_POST["first"], $_POST["last"], $_POST["place"]);
		
		// redirect to results
        redirect("results.php");
    }
    else
    {
        // fill tournaments
        $tournaments = query("SELECT name from tournaments");
    	
    	// check for null
        if ($tournaments === false)
        {
            apologize("Data Retrieval Failure");
        }
        else if (count($tournaments) == 0)
        {
            apologize("You haven't added any tournaments yet!");
        }
        
        // render form
        else
        {
            render("results_submission_form.php", ["tournaments" => $tournaments, "events" => $events, "title" => "Sumbit Results"]); 
        }
    }

        
?>