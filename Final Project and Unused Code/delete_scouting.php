<?php 
	// configuration
    require("../includes/config.php");
	
	if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    	// validate submission
		if ($_POST["scouting"] == "")
		{
			apologize("Please Choose a submission to delete");
		}
		
		// delete scouting
		query("DELETE FROM scouting WHERE id = ?", $_POST["scouting"][0][0]);
		
		// redirect to schedule
		redirect("scouting.php");
    }

	// else render form
	else
	{
        // fill tournaments
        $scoutings = query("SELECT * FROM scouting");

        if ($scoutings === false)
        {
        	apologize("Data Retrieval Failure");

        }
    	
    	// check if it is a coach 

    	// render
		render("delete_scouting_form.php", ["scoutings" => $scoutings, "title" => "Delete Submission"]);
            
    }	
?>
