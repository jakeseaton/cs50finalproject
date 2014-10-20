
<?php 
	// configuration
    require("../includes/config.php"); 
	
	//require log in
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
		if ($_POST["password"] != "00000000")
		{
			apologize("Wrong password");
		}
		else if ($_POST["tourney"] == "")
		{
			apologize("Please Choose a tournament");
		}
		
		// delete tournament
		query("DELETE FROM tournaments WHERE name = ?", $_POST["tourney"]);
		
		// also delete signouts
		query("DELETE FROM signout WHERE tournament = ?", $_POST["tourney"]);
		
		// redirect to schedule
		redirect("schedule.php");
    }

	// else render form
	else
	{
        // fill tournaments
        $tournaments = query("SELECT * from tournaments");

        // ensure success
        if ($tournaments === false)
        {
        	apologize("Data Retrieval Failure");

        }
 
    	// render
		render("delete_tournament_form.php", ["tournaments" => $tournaments, "title" => "Delete Tournament"]);
            
    }	
?>